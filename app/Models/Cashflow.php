<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashflow extends Model
{
    use HasFactory;

    protected $table = 'cashflow';
    protected $primaryKey = 'cashflow_id';
    protected $fillable = [
        'cashflow_id',
        'tipe',
        'jumlah',
        'status_cashflow',
        'cashflow_uid',
    ];

    // Foreign Key - Cashflow to Users
    public function cashflowToUsers() {
        return $this->belongsTo(User::class,'cashflow_uid');
    }
}
