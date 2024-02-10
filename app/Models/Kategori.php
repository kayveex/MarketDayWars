<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $primaryKey = 'kategori_id';
    protected $fillable = [
        'kategori_id',
        'nama_kategori'
    ];

    // Foreign Key - Kategori to Subkategori (One to Many)
    public function toSubkategori() {
        return $this->hasMany(Subkategori::class,'sk_kategori_id','subkategori_id');
    }
}
