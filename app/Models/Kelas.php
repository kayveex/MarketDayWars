<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $primaryKey = 'kelas_id';
    protected $fillable = [
        'kelas_id',
        'nama_kelas'
    ];

    // Relationship Declaration - Kelas to Customers
    public function Customers() {
        return $this->hasMany(Customers::class,'cust_kelas_id','kelas_id');   
    }


}
