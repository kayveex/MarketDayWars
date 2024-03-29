<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'ulangi_pass',
        'role',
        'foto',
        'isActive',
        'balance',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // One to One with Customers Table
    public function profilCustomer() {
        return $this->hasOne(Customers::class,'cust_uid','id');
    }
    // One to One with Tenants Table
    public function profilTenant() {
        return $this->hasOne(Tenants::class,'tenant_uid','id');
    }

    // One to Many with Notifikasi Table
    public function toNotifikasi() {
        return $this->hasMany(Notifikasi::class,'notif_uid','id');   
    }

    // One to Many with Cashflow Table
    public function toCashflow() {
        return $this->hasMany(Cashflow::class,'cashflow_uid','id');   
    }
}
