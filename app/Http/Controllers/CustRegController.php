<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;

class CustRegController extends Controller
{
    /**
     * Display a registration form for customers
     */
    public function index()
    {
        // Import Model from Kelas
        $kelas = Kelas::all();

        return view('Auth.cust_regis', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validate data
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

        // Saving User::Data
        $user = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'ulangi_pass' => $request->input('ulangi_pass'),
            'email' => $request->input('email'),
            'role' => 'customer',
            'isActive' => 0 ,
        ];
        // Checking is there any image to upload
        if ($request->hasFile('foto')) {
            $fotoAcc = $request->file('foto');
            $imageNameAcc = time() . '.' . $fotoAcc->extension(); // Taking file extension
            $fotoAcc->move(public_path('FotoCust'), $imageNameAcc); // Saving file
            $user['foto'] = 'FotoCust/' . $imageNameAcc; // Saving the path into user data
        }

        // Creating New Data on User Table
        $userInstance = User::create($user);

        // Saving Customer::Data
        $cust = Customers::create([
            'nama_cust' => $request->input('nama_cust'),
            'no_induk' => $request->input('no_induk'),
            'no_wa' => $request->input('no_wa'),
            'cust_kelas_id' => $request->input('cust_kelas_id'),
            // Getting UID From User table
            'cust_uid' => $userInstance->id,
            // Set deposit_cust to 0 as default
            'deposit_cust' => 0,
        ]);
        // Redirect to Confirmation Page if all is complete
        if (!$userInstance && !$cust) {
            return redirect('cust-regis')->withErrors('Tolong Lengkapi Form Registrasi Customernya!');
        }else {
            return redirect('confirm');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
