<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    use HasFactory;
    protected $table='kategori_artikel';

    protected $fillable=[
        'nama','users_id'
    ];

    public function artikels(){
        return $this->hasMany(related:\App\Artikel::class, foreignKey:'kategori_artikel_id', localKey:'id');
    }

    public function user(){
        return $this->belongsTo(related:\App\User::class, foreignKey:'user_id', ownerKey: 'id');
    }
}
