<?php

namespace App\Http\Controllers;

use App\Models\Tenants;
use App\Models\User;
use Illuminate\Http\Request;

class TenantRegController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        
        return view('Auth.tenant_regis');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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

        // Saving User::Data
        $user = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'ulangi_pass' => $request->input('ulangi_pass'),
            'email' => $request->input('email'),
            'role' => 'tenant',
            'isActive' => 0 ,
            'balance' => 0,
        ];

        // Checking is there any image to upload
        if ($request->hasFile('foto')) {
            $fotoAcc = $request->file('foto');
            $imageNameAcc = time() . '.' . $fotoAcc->extension(); // Taking file extension
            $fotoAcc->move(public_path('FotoTenant'), $imageNameAcc); // Saving file
            $user['foto'] = 'FotoTenant/' . $imageNameAcc; // Saving the path into user data
        }
        // Creating New Data on User Table
        $userInstance = User::create($user);

        $tenant = Tenants::create([
            'nama_tenant' => $request->input('nama_tenant'),
            'deskripsi' => $request->input('deskripsi'),
            // Getting UID From User table
            'tenant_uid' => $userInstance->id,
        ]);

        // Redirect to Confirmation Page if all is complete
        if (!$userInstance && !$tenant) {
            return redirect('tenant-regis')->withErrors('Tolong Lengkapi Form Registrasi Tenant-nya!');
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
