<?php

namespace App;
use App\Buku;
use App\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    use HasFactory;
    protected $fillable=['tanggal_peminjaman','tanggal_batas_akhir_peminjaman','id_mahasiswa','id_buku','status_ontime'];
    public function mahasiswa()
    {
    	return $this->belongsTo(Mahasiswa::class,'id_mahasiswa','id');
    }
     // public function getRouteKeyName(){
     //    return 'id_buku';
     // }

   

    public function buku()
    {
    	return $this->belongsTo(Buku::class,'id_buku','id');
    }
    

    
}
