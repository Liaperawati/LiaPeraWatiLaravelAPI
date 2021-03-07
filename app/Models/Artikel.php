<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table='artikel';

    protected $fillable=[
        'judul','isi','user_id','kategori_artikel_id'
    ];

     public function kategoriArtikel(){
         return $this->belongTo( related:\App\KategoriArtikel::class, foreignKey: 'kategori_artikel_id', ownerKey:'id');
     }

     public function user(){
        return $this->belongTo( related:\App\user::class, foreignKey: 'user_id', ownerKey:'id');
    }
}
