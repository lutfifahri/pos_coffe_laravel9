<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    use HasFactory;
    //mapping ke tabel
    protected $table = 'meja';
    //mapping ke kolom/fieldnya
    protected $fillable = ['kodeMeja'];
    //relasi one to many ke tabel pegawai

}
