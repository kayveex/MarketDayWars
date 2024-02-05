<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warspreneur - Pilihan Registrasi</title>
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
            width: 350px;
            height: 450px;
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

        /* Custom Start */
        #customer-select {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .section {
            padding-bottom: 2rem;
        }

        .desc {
            width: 8.75rem;
            text-align: justify;
        }

        .desc-right {
            text-align: right;
        }

        .title-right {
            text-align: right;
        }

        /* Custom End */
    </style>
    {{-- Inline CSS - End --}}
</head>

<body id="background-auth" class="font-wars">
    {{-- Logo Warspreneur - Start --}}
    <div id="logo-auth" class="flex justify-center items-center">
        <img src="{{ asset('assets/img/logo-auth.png') }}" alt="">
    </div>
    {{-- Logo Warspreneur - End --}}
    <div class="flex items-center justify-center">
        <div id="auth-section" class="rounded-lg  bg-gray-100">
            {{-- Bagian Header Atas - Start --}}
            <div id="top-header" class="flex justify-start px-8 py-2">
                <a class="pt-2" href="#">
                    <svg class="back_btn" xmlns="http://www.w3.org/2000/svg" height="24" width="21"
                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#374151"
                            d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                    </svg>
                </a>
                <h1 class="flex-initial w-64 font-semibold text-xl mx-auto ms-10 text-gray-700 py-2">Register Menu</h1>
            </div>
            <hr class="hr-auth">
            {{-- Bagian Header Atas - End --}}
            {{-- Bagian Pilihan Customer - Start --}}
            <div class="flex flex-col" id="customer-select">
                <div class="section flex flex-row">
                    <div class="flex-1">
                        <a class="select_btn" href="#">
                            <img src="{{ asset('assets/img/customer_btn.svg') }}" alt="">
                        </a>
                    </div>
                    <div class="flex-1 py-6 px-4">
                        <div class="justify-start">
                            <h2 class="font-semibold text-base text-gray-700">Customer</h2>
                            <p class="desc text-xs text-gray-500">Dengan akun customer, anda dapat membeli
                                barang dari
                                tenant.</p>
                        </div>
                    </div>
                </div>
                <div class="section flex flex-row">
                    <div class="flex-1 py-6 px-4">
                        <div class="justify-start">
                            <h2 class="title-right font-semibold text-base text-gray-700">Tenant</h2>
                            <p class="desc desc-right text-xs text-gray-500">
                                Dengan akun Tenant, anda dapat menjual barang-barang.
                            </p>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="justify-start">
                            <a class="select_btn" href="#">
                                <img src="{{ asset('assets/img/tenant_btn.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
