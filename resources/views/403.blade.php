<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warspreneur - 403 Forbidden</title>
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
            height: 450px;
            border-top: 5px solid var(--Extended-green-500, #22C55E);
            box-shadow: 0px 3.049px 16.619px 0px rgba(0, 0, 0, 0.25);
            background-color: #242A31;
        }

        #submit_btn {
            width: 100%;
            background: #22C55E;
            border: none;
            margin-top: 2rem;


        }

        #submit_btn:hover {
            background: #15803D;
            color: #F0FDF4;
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
        <div id="auth-section" class="rounded-lg px-8 py-4">
            {{-- Bagian Konten - Start --}}
            <h1 class="flex-initial w-96 font-semibold text-2xl mx-auto text-green-500 py-2">
                403 - Akses Tidak Disetujui
            </h1>

            <div class="flex justify-center items-center py-4">
                <img src="{{ asset('assets/img/403pic.png') }}" alt="">
            </div>

            @if (Auth::check())
                <a href="/dashboard">
                    <button id="submit_btn" type="submit"
                        class="py-3 px-4 gap-x-2 text-md font-semibold rounded-lg border border-transparent  text-gray-700">Kembali
                        ke Beranda
                    </button>
                </a>
            @else
                <a href="/">
                    <button id="submit_btn" type="submit"
                        class="py-3 px-4 gap-x-2 text-md font-semibold rounded-lg border border-transparent  text-gray-700">Kembali
                        ke Beranda
                    </button>
                </a>
            @endif
            {{-- Bagian Konten - End --}}
        </div>
    </div>

</body>

</html>
