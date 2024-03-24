<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Kelas;
use App\Models\Notifikasi;
use App\Models\Tenants;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{


    /**
     * Show the form for editing the specified Profile.
     */
    public function edit(string $id)
    {
        $loggedUser = Auth::user()->id;
        // Default Template for Notifikasi
        $id = Auth::user()->id;
        $notifikasi = Notifikasi::where('notif_uid', $id)
        ->where('isOpened', 0)
        ->latest() // Mengurutkan notifikasi berdasarkan waktu pembuatan terbaru
        ->limit(3) // Membatasi hanya 3 notifikasi terbaru
        ->get();

        // Import Model from Kelas
        $kelas = Kelas::all();

        if ($loggedUser == $id) {
            if (Auth::user()->role == 'customer') {
                $customer = User::where('id', $id)
                ->where('role','customer')
                ->with('profilCustomer')
                ->first();

                return view('GeneralFeatures.Profile.index', compact( 'customer','notifikasi','id','kelas'));
            }else if (Auth::user()->role == 'tenant') {
                $tenant = User::where('id', $id)
                ->where('role', 'tenant')
                ->with('profilTenant')
                ->first();

                return view('GeneralFeatures.Profile.index', compact('tenant','notifikasi','id'));
            }
        }else {
            return redirect('403');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (Auth::user()->role == 'customer') {
            $customer = User::find($id)
            ->where('role', 'customer')
            ->with('profilCustomer')
            ->first();

            $request->validate([
                 // Validation from User Model
                'username' => 'required',
                'password' => 'required|min:6|max:16',
                'ulangi_pass' => 'required|min:6|max:16',
                'email' => 'required',
                // Validation of foto isn't mandatory
                'foto' => 'sometimes|max:5120',
                // Validation from Customers model
                'nama_cust' => 'required|max:45',
                'no_induk' => 'required',
                'no_wa' => 'required|max:20',
                'cust_kelas_id' => 'required'
            ]);

            $customer->username = $request->input('username');
            $customer->password = $request->input('password');
            $customer->ulangi_pass = $request->input('ulangi_pass');
            $customer->email = $request->input('email');

            if ($request->hasFile('foto')) {
                $fotoAcc = $request->file('foto');
                $imageNameAcc = time() . '.' . $fotoAcc->extension(); // Taking file extension
                $fotoAcc->move(public_path('FotoCust'), $imageNameAcc); // Saving file
                $customer['foto'] = 'FotoCust/' . $imageNameAcc; // Saving the path into user data
            }else {
                // Use the old photo
                $customer->foto = $customer->foto;
            }

            $customer->save();

            $profileCust = [
                // Model : profilCustomer
                'nama_cust' => $request->input('nama_cust'),
                'no_induk' => $request->input('no_induk'),
                'no_wa' => $request->input('no_wa'),
                'cust_kelas_id' => $request->input('cust_kelas_id'),
                'cust_uid' => $customer->id,
            ];

            // Updating or make new Profile Customer
            if ($customer->profilCustomer) {
                $customer->profilCustomer->update( $profileCust );
            }else {
                Customers::create( $profileCust );
            }

            //Redirect to Menu
            return redirect('dashboard');

        }else if (Auth::user()->role == 'tenant') {
            $tenant = User::find($id)
            ->where('role', 'tenant')
            ->with('profilTenant')
            ->first();

            $request->validate([
                // Validation for User Model
                'username' => 'required',
                'password' => 'required|min:6|max:16',
                'ulangi_pass' => 'required|min:6|max:16',
                'email' => 'required',
                // Validation of foto isn't mandatory
                'foto' => 'sometimes|max:5120',
                // Validation for Tenant Model
                'nama_tenant' => 'required',
                'deskripsi' => 'required',
            ]);

            $tenant->username = $request->input('username');
            $tenant->password = $request->input('password');
            $tenant->ulangi_pass = $request->input('ulangi_pass');
            $tenant->email = $request->input('email');

            if ($request->hasFile('foto')) {
                $fotoAcc = $request->file('foto');
                $imageNameAcc = time() . '.' . $fotoAcc->extension(); // Taking file extension
                $fotoAcc->move(public_path('FotoTenant'), $imageNameAcc); // Saving file
                $tenant['foto'] = 'FotoTenant/' . $imageNameAcc; // Saving the path into user data
            }else {
                // Use the old photo
                $tenant->foto = $tenant->foto;
            }

            $tenant->save();

            $profileTenant = [
                'nama_tenant' => $request->input('nama_tenant'),
                'deskripsi' => $request->input('deskripsi'),
                // Getting UID From User table
                'tenant_uid' => $tenant->id,
            ];

            // Updating or make new Profile Customer
            if ($tenant->profilTenant) {
                $tenant->profilTenant->update( $profileTenant );
            }else {
                Tenants::create( $profileTenant );
            }

            //Redirect to Menu
            return redirect('dashboard');

        }
    }
}
