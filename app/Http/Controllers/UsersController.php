<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//tambahan
use App\Models\Users;
use DB;
use PDF;

//excel
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         //menampilkan seluruh data
        $user = Users::orderBy('id', 'DESC')->get();
        return view('Users.index',compact('user'));
     }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ar_role = ['Admin','Kasir','Customer'];
        //arahkan ke form input data
        return view('Users.form',compact('ar_role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users|max:45',
            'username' => 'required|max:45',
            'password' => 'required|max:45',
            'namaLengkap' => 'required|max:45',
            'noHP' => 'required|numeric',
            'role' => 'required|max:45',
            'alamat' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ],
        [
            'email.required'=>'Email Wajib di Isi',
            'email.unique'=>'Email Sudah Ada (Terduplikasi)',
            'email.max'=>'Email Maksimal 45 Karakter',
            'username.required'=>'Username Wajib di Isi',
            'username.max'=>'Username Maksimal 45 Karakter',
            'password.required'=>'Password Wajib di Isi',
            'password.max'=>'Password Maksimal 45 Karakter',
            'namaLengkap.required'=>'Nama Lengkap Wajib di Isi',
            'namaLengkap.max'=>'Nama Lengkap Maksimal 45 Karakter',
            'noHP.required'=>'No HP Wajib di Isi',
            'noHP.max'=>'No HP Harus Berupa Angka',
            'role.required'=>'Role Wajib di Isi',
            'role.max'=>'Role Maksimal 45 Karakter',
        ]);
    
        //Pegawai::create($request->all());
        //------------apakah user  ingin upload foto-----------
        if(!empty($request->foto)){
            $fileName = 'foto-'.$request->username.'.'.$request->foto->extension();
            //$fileName = $request->foto->getClientOriginalName();
            $request->foto->move(public_path('assets/img/user'),$fileName);
        }
        else{
            $fileName = '';
        }

        //lakukan insert data dari request form
        DB::table('user')->insert(
            [
                'email'=>$request->email,
                'username'=>$request->username,
                'password'=>$request->password,
                'namaLengkap'=>$request->namaLengkap,
                'noHP'=>$request->noHP,
                'role'=>$request->role,
                'alamat'=>$request->alamat,
                'foto'=>$fileName,
                'created_at'=>now(),
            ]);
    
        return redirect()->route('users.index')
                        ->with('success','Data Users Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Users::find($id);
        return view('Users.detail',compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Users::find($id);
        return view('Users.form_edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //proses input pegawai
        $request->validate([
            //'email' => 'required|unique:users|max:45',
            'username' => 'required|max:45',
            'password' => 'required|max:45',
            'namaLengkap' => 'required|max:45',
            'noHP' => 'required|max:11',
            'role' => 'required|max:45',
            'alamat' => 'nullable|string|min:5',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);
        //------------foto lama apabila user ingin ganti foto-----------
        $foto = DB::table('user')->select('foto')->where('id',$id)->get();
        foreach($foto as $f){
            $namaFileFotoLama = $f->foto;
        }
        //------------apakah user ingin ganti foto lama-----------
        if(!empty($request->foto)){
            //jika ada foto lama, hapus foto lamanya terlebih dahulu
            if(!empty($row->foto)) unlink('assets/img/user'.$row->foto);
            //proses foto lama ganti foto baru
            $fileName = 'foto-'.$request->username.'.'.$request->foto->extension();
            //$fileName = $request->foto->getClientOriginalName();
            $request->foto->move(public_path('assets/img/user'),$fileName);
        }
        //------------tidak berniat ganti ganti foto lama-----------
        else{
            $fileName = $namaFileFotoLama;
        }
        //lakukan update data dari request form edit
        DB::table('user')->where('id',$id)->update(
            [
                //'nip'=>$request->nip,
                'username'=>$request->username,
                'password'=>$request->password,
                'namaLengkap'=>$request->namaLengkap,
                'noHP'=>$request->noHP,
                'role'=>$request->role,
                'alamat'=>$request->alamat,
                'foto'=>$fileName,
                'updated_at'=>now(),
            ]);
    
        return redirect()->route('users.index')
                        ->with('success','Data Users Berhasil Di Update');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //sebelum hapus data, hapus terlebih dahulu fisik file fotonya jika ada
        $row = Users::find($id);
        if(!empty($row->foto)) unlink('assets/img/user/'.$row->foto);
        //setelah itu baru hapus data pesanan
        Users::where('id',$id)->delete();
        return redirect()->route('users.index')
                        ->with('success','Data Users Berhasil Dihapus');
    }

    public function usersPDF()
    {
        $user = Users::all(); 
        //dd($pegawai);
        $pdf = PDF::loadView('Users.usersPDF',['users'=>$user]);
        return $pdf->download('data_users.pdf');
    }

    public function usersExcel() 
    {
        return Excel::download(new UsersExport, 'data_users.xlsx');
    }
}
