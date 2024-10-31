<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
//tambahan
use App\Models\Pesanan;
use App\Models\Pembayaran;
//tambahan
use App\Models\Userss;
use App\Models\Meja;
use App\Models\Menu;

use DB;
use PDF;

//excel
use App\Exports\PesananExport;
use Maatwebsite\Excel\Facades\Excel;

class UserPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan seluruh data
        $pesanan = Pesanan::orderBy('id', 'DESC')->get();
        return view('User.cart',compact('pesanan'));
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
        $ar_meja = Meja::all();
        $ar_menu = Menu::all();

        //arahkan ke form input data
        return view('User.pesanmenu',compact('ar_users','ar_meja','ar_menu'));
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
            'kodePesanan' => 'required|unique:pesanan|max:4',
            'TotalPesan' => 'required|max:45',

            'meja_id' => 'required|max:45',
            'menu_id' => 'required|max:45',
        ],
        [
            'kodePesanan.required'=>'Kode Pesanan Wajib di Isi',
            'kodePesanan.unique'=>'kodePesanan Tidak Boleh Sama',
            'kodePesanan.max'=>'Kode Pesanan Maksimal 4 Karakter',
            'TotalPesan.required'=>'Total Pesan Wajib di Isi',
            'TotalPesan.max'=>'Total Pesan Maksimal 45 Karakter',

            'meja_id.required'=>'ID Meja Wajib di Isi',
            'meja_id.max'=>'ID Meja Maksimal 45 Karakter',
            'menu_id.required'=>'Menu ID Wajib di Isi',
            'menu_id.max'=>'Menu ID Maksimal 45 Karakter',
        ]
        );
    
        // Pesanan::create($request->all());
        $users_id =  Auth::user()->id;
        //lakukan insert data dari request form
        DB::table('pesanan')->insert(
        [
                'kodePesanan'=>$request->kodePesanan,
                'TotalPesan'=>$request->TotalPesan,
                'users_id'=>$users_id,
                'meja_id'=>$request->meja_id,
                'menu_id'=>$request->menu_id,
                'waktuPesan'=>now(),
                'created_at'=>now(),
        ]);
    
        return redirect()->route('cart.index')
                        ->with('success','Data Pesanan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Pesanan::find($id);
        return view('User.pesanmenu',compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $pembayaran = Pembayaran::where('pesanan_id', $id)->get();
        foreach ($pembayaran as $p) {
            $isIdOrderExist = $p['pesanan_id'];
        }

        if (empty($isIdOrderExist)) {
            $pemesanan = Pesanan::where('id', $id)->get();
            $ar_mp = ['Cash','Ovo','Dana','Shopee Pay','Gopay','M-Banking'];
            return view('User.formbayar', compact('pemesanan','ar_mp'));
        }

        return redirect()->route('cart.index')
                    ->with('error', 'Pesanan Ini Sudah Melakukan Pembayaran, Silahkan Cek Status Pembayaran Anda');
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pesanan::where('id',$id)->delete();
        //setelah itu baru hapus data pesanan
        return redirect()->route('cart.index')
                        ->with('success','Data Pesanan Berhasil Dihapus');
    }

}
