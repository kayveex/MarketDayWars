<?php

namespace App\Http\Controllers;

use App\Models\Cashflow;
use App\Models\Customers;
use App\Models\Notifikasi;
use App\Models\Tenants;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaldoSayaController extends Controller
{
    // Saldo Display for all roles!
    public function index()  {
        // For Notification
        $data = app(TopbarController::class)->NotifCaller();
        $id = $data['id'];
        $notifikasi = $data['notifikasi'];

        if (Auth::user()->role == 'admin') {
            // Getting Data for cashflow_uid from User
            $custs = Customers::all();
            $tents = Tenants::all();

            //Taking Last 5 topUp Data for Admin
            $topUpAllLimited = app(RiwayatController::class)->topUpAllLimited();

            return view('GeneralFeatures.Saldo.topup', compact('custs', 'tents','topUpAllLimited'));
        }else {
            // Taking balance data for User
            $balance = Auth::user()->balance;

            // Taking last 5 topup data for User
            $topupLimited = app(RiwayatController::class)->topUpLimited();
            
            return view('GeneralFeatures.Saldo.index', compact( 'balance','notifikasi','id','topupLimited'));
        }
    }

    // For Admins - Topup Feature
    public function topup(Request $request) {
        //Validate data
        $request->validate([
            'jumlah' => 'required|numeric',
            'cashflow_uid' => 'required',
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

        // Save data - Cashflow Table
        $addCashflow = Cashflow::create([
            'tipe' => 'topup',
            'jumlah' => $request->input('jumlah'),
            'status_cashflow' => 'disetujui',
            'cashflow_uid' => $request->input('cashflow_uid'),
            'cashflow_id' => $cashflowId,
        ]);

        // Save data - Notif Table
        $jumlah_rupiah = number_format($addCashflow->jumlah, 0, ',', '.');
        $addNotif = Notifikasi::create([
            'no_referensi' => $addCashflow->cashflow_id,
            'status' => 'berhasil',
            'pesan' => 'Berhasil melakukan top-up sebesar Rp ' . $jumlah_rupiah,
            'isOpened' => 0,
            'notif_uid' => $addCashflow->cashflow_uid,
        ]);

        // Update Balance Data from Users Table
        $customer = User::find($request->input('cashflow_uid'));
        $customer->balance += $request->input('jumlah');
        $customer->save();

        return redirect('/saldo')->with('success', 'Berhasil Topup!');
        
    }
}
