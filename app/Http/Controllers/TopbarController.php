<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopbarController extends Controller
{
    public function NotifCaller()  {
        $id = Auth::user()->id;
        $notifikasi = Notifikasi::where('notif_uid', $id)
        ->where('isOpened', 0)
        ->latest() 
        ->limit(3) 
        ->get();
        return [
            'notifikasi' => $notifikasi,
            'id' => $id
        ];
    }
}
