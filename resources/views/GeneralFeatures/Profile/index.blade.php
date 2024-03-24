{{-- Import Dashboard Template  --}}
@extends('Partials.Dashboard.master', compact('notifikasi','id'))

@section('breadcrumb')
    <li class="mr-2">
        <a href="#" class="text-gray-200 hover:text-green-600 font-medium">Profil Saya</a>
    </li>
@endsection

@section('content')
    <div class="flex flex-col">
        <div class="bg-accdash rounded-md border-t-4 border-green-500 p-6 px-8 shadow-md shadow-black/5">
            <div class="flex justify-start gap-4 ">
                <i class="ri-user-3-line text-green-500 text-4xl"></i>
                <div class="flex flex-col">
                    <h2 class="text-sm font-regular text-gray-400">
                        Profil Saya
                    </h2>
                    <h2 class="text-2xl font-semibold text-green-500">
                        {{ Auth::user()->username }}
                    </h2>
                </div>
        </div>
        <hr class="mt-2 border-2 border-green-500">
        <form class="my-4 flex flex-col" action="/profile/{{ Auth::user()->id }}/update" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- Bagian Update Foto --}}
            <div class="flex flex-row flex-none pb-2">
                {{-- Left Flex - Picture --}}
                <div class="flex flex-col flex-none w-52">
                    <h3 class="text-gray-400 text-xl py-2">Update Foto</h3>
                    <img class="object-cover align-middle inline-block size-[120px] rounded-md" src="{{ asset(Auth::user()->foto) }}" alt="Image Description">
                </div>
                {{-- Right Flex --}}
                <div class="flex flex-col flex-wrap w-96">
                    <div class="flex pt-10 flex-row justify-between">
                        <div class="flex flex-col">
                            <input class="block w-full text-sm text-gray-400
                            file:me-4 file:py-2 file:px-8
                            file:rounded-lg file:border-0
                            file:text-sm file:font-semibold
                            file:bg-green-600 file:text-white
                            hover:file:bg-green-500
                            file:disabled:opacity-50 file:disabled:pointer-events-none"  
                            type="file" name="foto" id="foto" class="form-control">
                            <p class=" py-2 text-md text-gray-400">Gambar Profile Anda sebaiknya memiliki rasio 1:1
                                dan berukuran tidak lebih dari 5MB.</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Bagian Update Data --}}
            <div class="form-control py-2">
                <h5 class="text-sm pb-2 text-gray-400 font-semibold">Username</h5>
                <input type="text" value="{{ Auth::user()->username }}"
                    class="py-3 px-2 focus:border-green-500 focus:ring-green-500 focus:ring-1 w-3/4 form-input @error('username') is-invalid @enderror border-gray-400 rounded-lg bg-accdash text-gray-400 text-sm "
                    name="username" id="username" autocomplete="on">
            </div>
            <div class="form-control py-2">
                <h5 class="text-sm pb-2 text-gray-400 font-semibold">Email</h5>
                <input type="email" value="{{ Auth::user()->email }}"
                    class="py-3 px-2 focus:border-green-500 focus:ring-green-500 focus:ring-1 w-3/4 form-input @error('email') is-invalid @enderror border-gray-400 rounded-lg bg-accdash text-gray-400 text-sm "
                    name="email" id="email" autocomplete="on">
            </div>
            <div class="form-control py-2">
                <h5 class="text-sm pb-2 text-gray-400 font-semibold">Password</h5>
                <input type="text" value="{{ Auth::user()->ulangi_pass }}"
                    class="py-3 px-2 focus:border-green-500 focus:ring-green-500 focus:ring-1 w-3/4 form-input @error('password') is-invalid @enderror border-gray-400 rounded-lg bg-accdash text-gray-400 text-sm "
                    name="password" id="password" autocomplete="on">
            </div>
            <div class="form-control py-2">
                <h5 class="text-sm pb-2 text-gray-400 font-semibold">Ulangi Password</h5>
                <input type="text" value="{{ Auth::user()->ulangi_pass }}"
                    class="py-3 px-2 focus:border-green-500 focus:ring-green-500 focus:ring-1 w-3/4 form-input @error('ulangi_pass') is-invalid @enderror border-gray-400 rounded-lg bg-accdash text-gray-400 text-sm "
                    name="ulangi_pass" id="ulangi_pass" autocomplete="on">
            </div>

            @if (Auth::user()->role === 'customer')
            <div class="form-control py-2">
                <h5 class="text-sm pb-2 text-gray-400 font-semibold">Nama Customer</h5>
                <input type="text" value="{{ Auth::user()->profilCustomer->nama_cust }}"
                    class="py-3 px-2 focus:border-green-500 focus:ring-green-500 focus:ring-1 w-3/4 form-input @error('nama_cust') is-invalid @enderror border-gray-400 rounded-lg bg-accdash text-gray-400 text-sm "
                    name="nama_cust" id="nama_cust" autocomplete="on">
            </div>
            <div class="form-control py-2">
                <h5 class="text-sm pb-2 text-gray-400 font-semibold">No Induk</h5>
                <input type="number" value="{{ Auth::user()->profilCustomer->no_induk }}"
                    class="py-3 px-2 focus:border-green-500 focus:ring-green-500 focus:ring-1 w-3/4 form-input @error('no_induk') is-invalid @enderror border-gray-400 rounded-lg bg-accdash text-gray-400 text-sm "
                    name="no_induk" id="no_induk" autocomplete="on">
            </div>
            <div class="form-control py-2">
                <h5 class="text-sm pb-2 text-gray-400 font-semibold">No WA</h5>
                <input type="number" value="{{ Auth::user()->profilCustomer->no_wa }}"
                    class="py-3 px-2 focus:border-green-500 focus:ring-green-500 focus:ring-1 w-3/4 form-input @error('no_wa') is-invalid @enderror border-gray-400 rounded-lg bg-accdash text-gray-400 text-sm "
                    name="no_wa" id="no_wa" autocomplete="on">
            </div>
            <div class="form-control py-2">
                <h5 class="text-sm pb-2 text-gray-400 font-semibold">Asal Kelas</h5>
                <select class="form-control form-select @error('cust_kelas_id') is-invalid @enderror w-3/4 border-gray-400 rounded-lg bg-accdash text-gray-400 text-sm" name="cust_kelas_id" id="cust_kelas_id">
                    @foreach ($kelas as $kelas)
                        <option value="{{ $kelas->kelas_id }}" {{ $kelas->kelas_id === Auth::user()->profilCustomer->cust_kelas_id ? 'selected' : '' }}>{{ $kelas->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            @endif

            @if (Auth::user()->role === 'tenant')
            <div class="form-control py-2">
                <h5 class="text-sm pb-2 text-gray-400 font-semibold">Nama Tenant</h5>
                <input type="text" value="{{ Auth::user()->profilTenant->nama_tenant }}"
                    class="py-3 px-2 focus:border-green-500 focus:ring-green-500 focus:ring-1 w-3/4 form-input @error('nama_tenant') is-invalid @enderror border-gray-400 rounded-lg bg-accdash text-gray-400 text-sm "
                    name="nama_tenant" id="nama_tenant" autocomplete="on">
            </div>
            <div class="form-control py-2">
                <h5 class="text-sm pb-2 text-gray-400 font-semibold">Deskripsi</h5>
                <textarea name="deskripsi" id="deskripsi" class="py-3 px-2 focus:border-green-500 focus:ring-green-500 focus:ring-1 w-3/4 form-input @error('deskripsi') is-invalid @enderror border-gray-400 rounded-lg bg-accdash text-gray-400 text-sm "  rows="5">{{ Auth::user()->profilTenant->deskripsi }}</textarea>
            </div>
            @endif

            <button type="submit"
            class="mt-8 py-4 px-4 w-48 items-center text-md font-semibold rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-500  disabled:opacity-50 disabled:pointer-events-none text-center">
            <p class="text-center">Update Profil</p>
            </button>
        </form>
    </div>
@endsection