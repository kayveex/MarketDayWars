<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenants extends Model
{
    use HasFactory;

    protected $table = 'tenants';
    protected $primaryKey = 'tenant_id';
    protected $fillable = [
        'tenant_id',
        'nama_tenant',
        'deskripsi',
        'tenant_uid',
    ];

    // Relationship Declaration - Tenants to Users (Table)
    public function tenantToUsers() {
        return $this->belongsTo(User::class,'tenant_uid');
    }

    // One to Many with Items Table
    public function toItems() {
        return $this->hasMany(Items::class,'item_tenant_id','tenant_id');   
    }
    // One to Many with Transaksi Table
    public function toTransaksi() {
        return $this->hasMany(Transaksi::class,'transaksi_tenant_id','tenant_id');   
    }
}
