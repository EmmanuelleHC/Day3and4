<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
     protected $fillable=['kode_buku','judul','pengarang','tahun_terbit'];

public function getRouteKeyName()
{
    return 'kode_buku';
}


 public function pinjaman()
    {
    	return $this->hasMany(Pinjaman::class,'id_buku','id');
    }
}
