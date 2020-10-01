<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Pinjaman;
class Mahasiswa extends Model
{
    use HasFactory;
     protected $fillable=['nama','nim','fakultas','jurusan','no_hp','no_wa'];
    public function pinjaman()
    {
    	return $this->hasMany(Pinjaman::class,'id_mahasiswa','id');
    }
    
}
