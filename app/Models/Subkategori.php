<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subkategori extends Model
{
    use HasFactory;
    protected $table = 'subkategori';
    protected $primaryKey = 'subkategori_id';
    protected $fillable = [
        'subkategori_id',
        'nama_sub',
        'sk_kategori_id'
    ];

    // Foreign key - Subkategori to Kategori
    public function skToKategori() {
        return $this->belongsTo(Kategori::class,'sk_kategori_id');
    }

    // One to Many with Items Table
    public function toItems() {
        return $this->hasMany(Items::class,'item_subkategori_id','subkategori_id');   
    }
}
