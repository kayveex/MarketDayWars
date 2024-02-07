<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warspreneur - Registrasi Tenant</title>
    {{-- Tailwind CSS & Preline --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Font is using Remix Icon, with NPM are included --}}

    {{-- Inline CSS - Start --}}
    <style>
        #background-auth {
            background: linear-gradient(180deg, #1D232A 32.29%, #1C362F 70.48%, #1A613A 106.84%, rgba(22, 163, 74, 0.39) 161.91%) !important;
            width: 100%;
            height: 110vh;
            background-size: cover;
        }

        #logo-auth {
            padding-top: 6.25rem;
            padding-bottom: 35px;
        }

        #auth-section {
            width: 784px;
            height: 485px;
            border-top: 5px solid var(--Extended-green-500, #22C55E);
            box-shadow: 0px 3.049px 16.619px 0px rgba(0, 0, 0, 0.25);
        }

        .hr-auth {
            border-width: 2px;
            border-color: #D1D5DB;
        }

        .back_btn:hover path {
            fill: #22C55E !important;

        }

        .form-control {
            display: block;
        }

        /* form-input CSS -Start */

        .form-input {
            width: 100%;
            border-width: 3px;
        }

        .form-input:active {
            border-color: #22C55E;
        }

        .form-input:hover {
            border-color: #22C55E;
        }

        .form-input::selection {
            border-color: #22C55E;
        }

        /* form-input CSS - End */
        #submit_btn {
            width: 100%;
            color: #F0FDF4;
            background: #22C55E;
            border: none;
            margin-top: 2rem;


        }

        #submit_btn:hover {
            background: #15803D;
        }

        #buat_disini {
            padding-top: 1.5rem;
        }

        #link_disini {
            color: #22C55E;
            font-weight: bold;
        }

        #link_disini:hover {
            color: #15803D;
        }

        /* Tabs - Start */
        .form_section {
            margin-top: -0.75rem;
        }

        .tab {
            text-decoration: underline 2px;
            text-underline-offset: 4px;
        }

        .left,
        .right {
            width: 50%;
        }

        .left {
            margin-right: 5rem;
        }

        .form-select {
            width: 100%;
        }

        .custom-file-upload {
            /* Border color equivalent to bg-green-500 */
            color: #fff;
            /* Text color */
            background-color: #22C55E;
            /* bg-green-500 equivalent color */
            padding: 4px 12px;
            border-radius: 4px;
            cursor: pointer;
            display: inline-block;
        }

        .custom-file-upload input[type="file"] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            cursor: pointer;
        }

        #deskripsi {
            border-width: 3px;
        }
    </style>
    {{-- Inline CSS - End --}}
</head>

<body id="background-auth" class="font-wars">
    {{-- Error Alert --}}
    @if ($errors->any())
        <div id="dismiss-alert"
            class="bg-red-100 bg-opacity-5 mx-4 mt-4 hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 border border-red-600 text-sm text-red-600 rounded-lg p-4"
            role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="flex-shrink-0 h-4 w-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10" />
                        <path d="m15 9-6 6" />
                        <path d="m9 9 6 6" />
                    </svg>
                </div>
                <div class="ms-2">
                    <div class="text-sm font-medium">
                        Peringatan!
                    </div>
                    <ul class="list-disc space-y-1 ps-5">
                        @foreach ($errors->all() as $item)
                            <li>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="ps-3 ms-auto">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button"
                            class="inline-flex  rounded-lg p-1.5 text-red-600 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-50 focus:ring-red-600 dark:bg-transparent "
                            data-hs-remove-element="#dismiss-alert">
                            <span class="sr-only">Dismiss</span>
                            <svg class="flex-shrink-0 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- Logo Warspreneur - Start --}}
    <div id="logo-auth" class="flex justify-center items-center">
        <img src="{{ asset('assets/img/logo-auth.png') }}" alt="">
    </div>
    {{-- Logo Warspreneur - End --}}

    {{-- Form Content - Start --}}
    <section class="flex items-center justify-center">
        <div id="auth-section" class="rounded-lg bg-gray-100">
            {{-- Top Header - Start --}}
            <div id="top-header" class="flex justify-start px-8 py-2">
                <a class="pt-2" href="/select">
                    <svg class="back_btn" xmlns="http://www.w3.org/2000/svg" height="24" width="21"
                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#374151"
                            d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                    </svg>
                </a>
                <h1 class="flex-initial w-80 font-semibold text-xl mx-auto text-gray-700 py-2">Register Sebagai Tenant
                </h1>
            </div>
            <hr class="hr-auth">
            {{-- Top Header - End --}}

            <form action="/tenant-regis/post" method="post" class="form_action px-8" enctype="multipart/form-data">
                @csrf
                <div class=" border-gray-700">
                    <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
                        <button type="button"
                            class="underline tab font-semibold hs-tab-active:font-semibold hs-tab-active:border-gray-700 hs-tab-active:text-gray-700 py-2 px-1 inline-flex items-center gap-x-2 text-md whitespace-nowrap text-gray-400 hover:text-gray-700 focus:outline-none  disabled:opacity-50 disabled:pointer-events-none active"
                            id="tabs-with-underline-item-1" data-hs-tab="#tabs-with-underline-1"
                            aria-controls="tabs-with-underline-1" role="tab">
                            Tahap Awal
                        </button>
                        <button type="button"
                            class="underline tab font-semibold hs-tab-active:font-semibold hs-tab-active:border-gray-700 hs-tab-active:text-gray-700 py-4 px-1 inline-flex items-center gap-x-2  text-md whitespace-nowrap text-gray-400 hover:text-gray-700 focus:outline-none  disabled:opacity-50 disabled:pointer-events-none"
                            id="tabs-with-underline-item-2" data-hs-tab="#tabs-with-underline-2"
                            aria-controls="tabs-with-underline-2" role="tab">
                            Tahap Akhir
                        </button>
                    </nav>
                </div>

                <div class="form_section">
                    {{-- Tahap Awal - Start --}}
                    <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1"
                        class="tabpanel">
                        <div class="form-control">
                            <h5 class="py-2 text-sm text-gray-700 font-medium">Username</h5>
                            <input type="text"
                                class="form-input @error('username') is-invalid @enderror border-gray-300 rounded-lg bg-gray-200 text-gray-700 text-sm focus:border-green-500  focus:ring-green-500 "
                                name="username" id="username" placeholder="Contoh: vendor-7a" autocomplete="off">
                        </div>
                        <div class="form-control pt-2">
                            <h5 class="py-2 text-sm text-gray-700 font-medium">Email</h5>
                            <input type="email"
                                class="form-input @error('email') is-invalid @enderror border-gray-300 rounded-lg bg-gray-200 text-gray-700 text-sm focus:border-green-500  focus:ring-green-500 "
                                name="email" id="email" placeholder="Gunakan email pribadi"
                                autocomplete="off">
                        </div>
                        <div class="flex pt-2">
                            <div class="form-control left">
                                <h5 class="py-2 text-sm text-gray-700 font-medium">Password</h5>
                                <input type="password"
                                    class="form-input @error('password') is-invalid @enderror border-gray-300 rounded-lg bg-gray-200 text-gray-700 text-sm focus:border-green-500  focus:ring-green-500"
                                    name="password" id="password" placeholder="Min huruf: 6; Max: 16"
                                    autocomplete="off">
                            </div>
                            <div class="form-control right">
                                <h5 class="py-2 text-sm text-gray-700 font-medium">Ulangi Password</h5>
                                <input type="password"
                                    class="form-input @error('ulangi_pass') is-invalid @enderror border-gray-300 rounded-lg bg-gray-200 text-gray-700 text-sm focus:border-green-500  focus:ring-green-500 "
                                    name="ulangi_pass" id="ulangi_pass" autocomplete="off">
                            </div>
                        </div>

                        <div class="form-control pt-2">
                            <h5 class="py-2 text-sm text-gray-700 font-medium">Upload Foto Profil</h5>
                            <label class="custom-file-upload"> Klik Disini
                                <input type="file" name="foto" id="foto" class="file-input">
                            </label>
                        </div>

                    </div>
                    {{-- Tahap Awal - End --}}

                    {{-- Tahap Akhir - Start --}}
                    <div id="tabs-with-underline-2" class="hidden" role="tabpanel" class="tabpanel"
                        aria-labelledby="tabs-with-underline-item-2">
                        <div class="form-control ">
                            <h5 class="py-2 text-sm text-gray-700 font-medium">Nama Tenant</h5>
                            <input type="text"
                                class="form-input @error('nama_tenant') is-invalid @enderror border-gray-300 rounded-lg bg-gray-200 text-gray-700 text-sm focus:border-green-500  focus:ring-green-500 "
                                name="nama_tenant" id="nama_tenant" autocomplete="off">
                        </div>
                        <div class="form-control pt-2">
                            <h5 class="py-2 text-sm text-gray-700 font-medium">Deskripsi Tenant</h5>
                            <textarea id="deskripsi" name="deskripsi"
                                class="text-gray-700 py-3 px-4 block w-full bg-gray-200 border-gray-300 rounded-lg text-sm hover:border-green-500 focus:border-green-500  focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none @error('deskripsi') is-invalid @enderror"
                                rows="5"></textarea>
                        </div>
                        <button id="submit_btn" type="submit"
                            class="py-3 px-4 gap-x-2 text-md font-semibold rounded-lg border border-transparent  text-white">Register</button>
                    </div>
                    {{-- Tahap Akhir - End --}}
                </div>
            </form>
        </div>

    </section>
    {{-- Form Content - End --}}

</body>

</html>
