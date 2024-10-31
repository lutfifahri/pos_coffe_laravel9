<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Userss;
use App\Models\Pesanan;
use DB;
use PDF;

use App\Exports\PembayaranExport;
use App\Models\MetodePembayaran;
use Maatwebsite\Excel\Facades\Excel;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan seluruh data
        $pembayaran = Pembayaran::orderBy('id', 'DESC')->get();
        $ar_mp = ['Cash','Ovo','Dana','Shopee Pay','Gopay','M-Banking'];
        
        return view('Pembayaran.index',compact('pembayaran','ar_mp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ambil master untuk dilooping di select option
        $ar_users = Userss::all();
        $ar_mp = ['Cash','Ovo','Dana','Shopee Pay','Gopay','M-Banking'];
        $ar_p = Pesanan::all();

        //arahkan ke form input data
        return view('Pembayaran.form',compact('ar_users','ar_mp','ar_p'));
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
            'users_id' => 'required|max:45',
            'metodePembayaran' => 'required|max:45',
            'tanggal' => 'required|max:45',
            'pesanan_id' => 'required|max:45',
            'buktiPembayaran' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ],
        [
            'users_id.required'=>'User ID Wajib di Isi',
            'users_id.max'=>'User ID Maksimal 45 Karakter',
            'metodePembayaran.required'=>'Metode Pembayaran Wajib di Isi',
            'metodePembayaran.max'=>'Metode Pembayaran Maksimal 45 Karakter',
            'tanggal.required'=>'Tanggal Wajib di Isi',
            'tanggal.max'=>'Tanggal Maksimal 45 Karakter',
            'pesanan_id.required' => 'Wajib di Isi',
            'pesanan_id.max'=>'Pesanan id Maksimal 45 Karakter',
        ]
        );

        //Pegawai::create($request->all());
        //------------apakah user  ingin upload foto-----------
        if(!empty($request->buktiPembayaran)){
            $fileName = 'bukti-'.$request->pesanan_id.'.'.$request->buktiPembayaran->extension();
            //$fileName = $request->foto->getClientOriginalName();
            $request->buktiPembayaran->move(public_path('assets/img/bukti'),$fileName);
        }
        else{
            $fileName = '';
        }
    
        // Pembayaran::create($request->all());

        //lakukan insert data dari request form
        DB::table('pembayaran')->insert(
            [
                'users_id'=>$request->users_id,
                'metodePembayaran'=>$request->metodePembayaran,
                'tanggal'=>$request->tanggal,
                'pesanan_id'=>$request->pesanan_id,
                'buktiPembayaran'=>$fileName,
                'created_at'=>now(),
            ]);
    
        return redirect()->route('pembayaran.index')
                        ->with('success','Data Pembayaran Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Pembayaran::find($id);
        return view('Pembayaran.detail',compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Pembayaran::find($id);
        return view('Pembayaran.form_edit',compact('row'));
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
        $request->validate([
            'users_id' => 'required|max:45',
            'metodePembayaran' => 'required|max:45',
            'tanggal' => 'required|max:45',
            'pesanan_id' => 'required|max:45',
            'statusPembayaran' => 'required|max:45',
            'buktiPembayaran' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        ]);

        //------------foto lama apabila user ingin ganti foto-----------
        $buktiPembayaran = DB::table('pembayaran')->select('buktiPembayaran')->where('id',$id)->get();
        foreach($buktiPembayaran as $f){
            $namaFileFotoLama = $f->buktiPembayaran;
        }
        //------------apakah user ingin ganti foto lama-----------
        if(!empty($request->buktiPembayaran)){
            //jika ada foto lama, hapus foto lamanya terlebih dahulu
            if(!empty($row->buktiPembayaran)) unlink('assets/img/bukti'.$row->buktiPembayaran);
            //proses foto lama ganti foto baru
            $fileName = 'bukti-'.$request->pesanan_id.'.'.$request->buktiPembayaran->extension();
            //$fileName = $request->foto->getClientOriginalName();
            $request->buktiPembayaran->move(public_path('assets/img/bukti'),$fileName);
        }
        //------------tidak berniat ganti ganti foto lama-----------
        else{
            $fileName = $namaFileFotoLama;
        }

        //lakukan update data dari request form edit
        DB::table('pembayaran')->where('id',$id)->update(
            [
                'users_id'=>$request->users_id,
                'metodePembayaran'=>$request->metodePembayaran,
                'tanggal'=>$request->tanggal,
                'pesanan_id'=>$request->pesanan_id,
                'statusPembayaran'=>$request->statusPembayaran,
                'buktiPembayaran'=>$fileName,
                'updated_at'=>now(),
            ]);
    
        return redirect()->route('pembayaran.index')
                        ->with('success','Data Pembayaran Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //setelah itu baru hapus data pesanan
        Pembayaran::where('id',$id)->delete();
        return redirect()->route('pembayaran.index')
                        ->with('success','Data Pembayaran Berhasil Dihapus');
    }

    public function pembayaranPDF()
    {
        $pembayaran = Pembayaran::all(); 
        //dd($pegawai);
        $pdf = PDF::loadView('Pembayaran.pembayaranPDF',['pembayaran'=>$pembayaran]);
        return $pdf->download('data_pembayaran.pdf');
    }

    public function pembayaranExcel() 
    {
        return Excel::download(new PembayaranExport, 'data_pembayaran.xlsx');
    }
}
