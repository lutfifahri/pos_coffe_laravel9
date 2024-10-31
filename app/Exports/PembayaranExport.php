<?php

namespace App\Exports;

use App\Models\Pembayaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class PembayaranExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Pembayaran::all();
        $ar_pembayaran = DB::table('pembayaran')
        ->join('users', 'users.id', '=', 'pembayaran.users_id')
        ->join('pesanan', 'pesanan.id', '=', 'pembayaran.pesanan_id')
        ->select('pembayaran.id','users.name','pembayaran.metodePembayaran','pembayaran.tanggal',
        'pesanan.kodePesanan','pembayaran.statusPembayaran')
        ->get();
        return $ar_pembayaran;
    }

    public function headings(): array
    {
        return ["ID", "Nama Users", "Metode Pembayaran", "Tanggal", "Kode Pesanan", "Status Pembayaran"];
    }
}
