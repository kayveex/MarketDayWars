{{-- This dashboard only for admins --}}

{{-- Import Dashboard Template  --}}
@extends('Partials.Dashboard.master')

{{-- Breadcrumb Section --}}
@section('breadcrumb')
    <li class="mr-2">
        <a href="#" class="text-gray-200 hover:text-green-600 font-medium">Topup Saldo</a>
    </li>
@endsection

@section('content')
    {{-- Fill Content Here --}}
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6 mb-6">
        <div class="col-span-1 md:col-span-1 lg:col-span-1">
            <!-- Content for the left part -->
            <div class="bg-accdash rounded-md border-t-4 border-green-500 p-6 shadow-md shadow-black/5">
                <div class="flex justify-start gap-4 ">
                    <i class="ri-wallet-2-line text-green-500 text-3xl"></i>
                    <h2 class="text-2xl font-semibold text-green-500">
                        Fitur Topup Saldo
                    </h2>
                </div>
                <div class="flex pt-4">
                    <button type="button"
                        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-green-500 text-bgdash hover:bg-green-700 hover:text-white disabled:opacity-50 disabled:pointer-events-none "
                        data-hs-overlay="#hs-tambah-saldo-modal">
                        Lakukan Topup
                    </button>
                </div>
            </div>
        </div>
        {{-- Modals for Tambah Saldo --}}
        <div id="hs-tambah-saldo-modal"
            class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
            <div
                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                <div
                    class="w-full flex flex-col border shadow-sm rounded-xl bg-accdash border-gray-700 shadow-slate-700/[.7]">
                    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-gray-700">
                        <h3 class="font-bold text-lg text-green-500 ">
                            Fitur Topup
                        </h3>
                        <button type="button"
                            class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent  disabled:opacity-50 disabled:pointer-events-none text-green-500 hover:bg-gray-700 focus:outline-none focus:ring-1 focus:ring-gray-600"
                            data-hs-overlay="#hs-tambah-saldo-modal">
                            <span class="sr-only">Close</span>
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                            </svg>
                        </button>
                    </div>

                    <form action="/saldo/topup" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="p-4 overflow-y-auto">
                            <div class="form-control pb-2">
                                <h5 class="text-sm pb-2 text-green-500 font-semibold">Nominal dalam Rupiah</h5>
                                <input type="number"
                                    class="py-3 px-2 focus:border-green-500 focus:ring-green-500 focus:ring-1 w-full form-input @error('jumlah') is-invalid @enderror border-green-500 rounded-lg bg-accdash text-green-500 text-sm "
                                    name="jumlah" id="jumlah" autocomplete="off">
                            </div>
                            <div class="form-control">
                                <h5 class="text-sm pb-2 text-green-500 font-semibold">Target Customer</h5>
                                {{-- Advanced Search Feature --}}
                                <select name="cashflow_uid" id="cashflow_uid" data-hs-select='{
                                    "hasSearch": true,
                                    "searchPlaceholder": "Cari disini... 🔎",
                                    "searchClasses": "block w-full text-sm rounded-lg before:absolute before:inset-0 before:z-[1] bg-accdash border-green-500 text-green-500 focus:outline-none focus:ring-1 focus:border-green-500 focus:ring-green-500 py-2 px-3",
                                    "searchWrapperClasses": "p-2 -mx-1 sticky top-0 bg-accdash",
                                    "toggleTag": "<button type=\"button\"><span class=\"me-2\" data-icon></span><span class=\"text-green-500\" data-title></span></button>",
                                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-accdash border rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1] border-green-500 text-green-500 focus:outline-none focus:ring-1 focus:ring-green-500",
                                    "dropdownClasses": "mt-2 max-h-72 pb-1 px-1 space-y-0.5 z-20 w-full bg-accdash border border-green-500 rounded-lg overflow-hidden overflow-y-auto dark:bg-accdash dark:border-green-500",
                                    "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-green-700 rounded-lg focus:outline-none focus:bg-gray-100 bg-accdash dark:hover:bg-green-700 dark:text-gray-200 dark:focus:bg-slate-800",
                                    "optionTemplate": "<div><div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div class=\"text-gray-800 dark:text-gray-200\" data-title></div></div></div>"
                                  }' class="hidden">
                                  <option >Cari Disini.. 🔎</option>
                                  @foreach ($custs as $cust)
                                  <option value="{{ $cust->cust_uid }}" data-hs-select-option='{
                                      "icon": "<img class=\"inline-block size-4 rounded-full\" src=\"{{ asset($cust->custToUsers->foto) }}\" />"}'>
                                      {{ $cust->nama_cust }}
                                  </option>     
                              @endforeach
                              
                                </select>
                            </div>
                        </div>
                        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                            <button type="submit"
                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-green-500 text-accdash hover:bg-green-700 hover:text-white disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-nonefocus:ring-1 focus:ring-gray-600">
                                Jalankan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-span-1 md:col-span-2 lg:col-span-2">
            <!-- Content for the right part -->
            <div class="bg-accdash rounded-md border-t-4 border-green-500 p-6 shadow-md shadow-black/5">
                <div class="flex justify-between mb-6">
                    <div>
                        <div class="text-2xl font-semibold mb-1 text-green-500">Riwayat Topup Saldo</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
