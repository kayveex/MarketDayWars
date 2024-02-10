<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'cust_id';
    protected $fillable = [
        'cust_id',
        'nama_cust',
        'no_induk',
        'no_wa',
        'cust_uid',
        'cust_kelas_id'
    ];

    // Relationship Declaration - Customers to Users (Table)
    public function custToUsers() {
        return $this->belongsTo(User::class,'cust_uid');
    }

    // Relationship Declaration - Customers to Users (Table)
    public function kelasToCust() {
        return $this->belongsTo(Kelas::class,'cust_kelas_id');
    }

    // One to Many with Transaksi Table
    public function toTransaksi() {
        return $this->hasMany(Transaksi::class,'transaksi_cust_id','cust_id');   
    }
}
