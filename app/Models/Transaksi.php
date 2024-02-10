<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $primaryKey = 'transaksi_id';
    protected $fillable = [
        'tgl_transaksi',
        'no_pembelian',
        'kuantitas',
        'harga_satuan',
        'total_harga',
        'isAccepted',
        'status_pesanan',
        'transaksi_cust_id',
        'transaksi_tenant_id',
        'transaksi_item_id',
    ];

    // Foreign Key - Transaksi to Tenants 
    public function transaksiToTenants() {
        return $this->belongsTo(Tenants::class,'transaksi_tenant_id');
    }
    // Foreign Key - Transaksi to Customers 
    public function transaksiToCustomers() {
        return $this->belongsTo(Customers::class,'transaksi_cust_id');
    }
    // Foreign Key - Transaksi to Items 
    public function transaksiToItems() {
        return $this->belongsTo(Items::class,'transaksi_item_id');
    }
}
