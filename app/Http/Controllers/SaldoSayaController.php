<?php

namespace App\Http\Controllers;

use App\Models\Cashflow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaldoSayaController extends Controller
{
    public function index()  {

        $balance = Auth::user()->balance;
        return view('GeneralFeatures.Saldo.index', compact( 'balance'));
    }

    // Store Data from Users into DB - For Admins
    public function topup(Request $request) {
        //Validate data
        $request->validate([
            'jumlah' => 'required|numeric',
        ]);

        // Ambil cashflow_id terakhir dari database
        $lastCashflow = Cashflow::orderBy('created_at', 'desc')->first();

        // Inisialisasi $lastDigit
        $lastDigit = 0;

        // Jika ada cashflow_id terakhir dari database, ambil angka terakhir dari cashflow_id tersebut
        if ($lastCashflow) {
            $lastCashflowId = $lastCashflow->cashflow_id;
            $lastDigit = intval(substr($lastCashflowId, -1));
        }

        // Ambil timestamp dari waktu submit
        $timestamp = now()->format('Ymd');

        // Tambahkan 1 ke angka terakhir
        $newLastDigit = $lastDigit + 1;

        // Gabungkan timestamp dengan angka terakhir yang baru
        $cashflowId = $timestamp . $newLastDigit;

        // Save data
        $myBalance = Cashflow::create([
            'tipe' => 'topup',
            'jumlah' => $request->input('jumlah'),
            'status_cashflow' => 'disetujui',
            'cashflow_uid' => $request->input('cashflow_uid'),
            'cashflow_id' => $cashflowId,
        ]);

        return redirect('/saldo')->with('success', 'Berhasil Topup!');
        
    }
}
