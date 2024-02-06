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
        'deposit_tenant',
        'tenant_uid',
    ];

    // Relationship Declaration - Tenants to Users (Table)
    public function tenantToUsers() {
        return $this->belongsTo(User::class,'tenant_uid');
    }
}
