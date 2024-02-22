{{-- Import Dashboard Template  --}}
@extends('Partials.Dashboard.master')


@section('breadcrumb')
    <li class="mr-2">
        <a href="#" class="text-gray-200 hover:text-green-600 font-medium">Saldo Saya</a>
    </li>
@endsection

{{-- Content Section --}}
@section('content')
    {{-- Fill Content Here --}}
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-6 mb-6">
        <div class="col-span-1 md:col-span-1 lg:col-span-1">
            <!-- Content for the left part -->
            <div class="bg-accdash rounded-md border-t-4 border-green-500 p-6 shadow-md shadow-black/5">
                <div class="flex justify-start gap-4 ">
                    <i class="ri-wallet-2-line text-green-500 text-4xl"></i>
                    <div class="flex flex-col">
                        <h2 class="text-sm font-regular text-gray-400">
                            Total Saldo Aktif
                        </h2>
                        <h2 class="text-2xl font-semibold text-green-500">
                            {{ 'Rp ' . number_format($balance, 0, ',', '.') }}
                        </h2>
                    </div>
                </div>
                <div class="flex pt-4">
                    <button type="button"
                        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-green-500 text-bgdash hover:bg-green-700 hover:text-white disabled:opacity-50 disabled:pointer-events-none "
                        data-hs-overlay="#hs-tambah-saldo-modal">
                        Panduan Topup
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
                            Panduan Topup
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
                    <div class="p-4 overflow-y-auto">
                      <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-gray-700">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-1 md:col-span-2 lg:col-span-2">
            <!-- Content for the right part -->
            <div class="bg-accdash rounded-md border-t-4 border-green-500 p-6 shadow-md shadow-black/5">
                <div class="flex justify-between mb-6">
                    <div>
                        <div class="text-2xl font-semibold mb-1 text-green-500">10</div>
                        <div class="text-sm font-medium text-gray-400">Active orders</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
