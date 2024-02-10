<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;
    protected $table = 'notifikasi';
    protected $primaryKey = 'notif_id';
    protected $fillable = [
        'notif_id',
        'no_referensi',
        'status',
        'pesan',
        'isOpened',
        'notif_uid',
    ];

    // Foreign Key - Notifikasi to Users
    public function notifToUsers() {
        return $this->belongsTo(User::class,'notif_uid');
    }

}
