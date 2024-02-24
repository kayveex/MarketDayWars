<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainDashController extends Controller
{
    function index()
    {
        // For Notification
        $id = Auth::user()->id;
        $notifikasi = Notifikasi::where('notif_uid', $id)
            ->where('isOpened', 0)
            ->latest() // Mengurutkan notifikasi berdasarkan waktu pembuatan terbaru
            ->limit(3) // Membatasi hanya 3 notifikasi terbaru
            ->get();
        return view('dash_main', compact('notifikasi', 'id'));
    }
}
