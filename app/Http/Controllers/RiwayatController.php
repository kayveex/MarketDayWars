<?php

namespace App\Http\Controllers;

use App\Models\Cashflow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{
    
    public function topUpLimited() {
        $id = Auth::user()->id;
        $topupLimited = Cashflow::where('cashflow_uid', $id)
        ->where('tipe', 'topup')
        ->where('status_cashflow', 'disetujui')
        ->latest()
        ->limit(5)
        ->get();

        return $topupLimited;
    }

    public function topUpAllLimited()  {
        $topUpAllLimited = Cashflow::where('tipe', 'topup')
        ->where('status_cashflow', 'disetujui')
        ->latest()
        ->limit(5)
        ->get();

        return $topUpAllLimited;
    }
}
