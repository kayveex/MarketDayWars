<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $primaryKey = 'item_id';
    protected $fillable = [
        'item_id',
        'nama_item',
        'harga',
        'kuantitas',
        'deskripsi_item',
        'item_subkategori_id',
        'item_tenant_id',
        'fotoItem'
    ];

    // Foreign Key - Items to Tenants
    public function itemsToTenants() {
        return $this->belongsTo(Tenants::class,'item_tenant_id');
    }

    // Foreign key - Items to Subkategori
    public function itemsToSubkategori() {
        return $this->belongsTo(Subkategori::class,'item_subkategori_id');
    }

    // One to Many with Transaksi Table
    public function toTransaksi() {
        return $this->hasMany(Transaksi::class,'transaksi_item_id','item_id');   
    }
    

}
