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
        'id_cust',
        'nama_cust',
        'no_induk',
        'no_wa',
        'deposit_cust',
        'cust_uid',
        'cust_kelas_id'
    ];

    // Relationship Declaration - Customers to Users (Table)
    public function custToUsers() {
        return $this->belongsTo(User::class,'cust_uid');
    }
}
