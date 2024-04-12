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
        $data = app(TopbarController::class)->NotifCaller();
        $id = $data['id'];
        $notifikasi = $data['notifikasi'];
        

        return view('dash_main', compact('notifikasi', 'id'));
    }
}
