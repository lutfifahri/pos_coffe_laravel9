<?php
namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Pesanan;
use App\Models\Menu;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ar_menu = DB::table('menu')->select('namaMenu','stok')->get();
        $pesanan = Pesanan::orderBy('id', 'DESC')->get();
        
        $ar_role = DB::table('user')
        ->selectRaw('role, count(role) as jumlah')
        ->groupBy('role')
        ->get();
        return view('Admin.index', compact('ar_menu', 'pesanan', 'ar_role'));
    }
}
