<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warspreneur - Login</title>
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

        .form-control {
            display: block;
        }


        /* form-input CSS -Start */

        .form-input {
            width: 100%;
            border-width: 2px;
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
            margin-top: 45px;
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
    </style>
</head>

<body id="background-auth" class="font-wars">
    {{-- Logo Warspreneur - Start --}}
    <div id="logo-auth" class="flex justify-center items-center">
        <img src="{{ asset('assets/img/logo-auth.png') }}" alt="">
    </div>
    {{-- Logo Warspreneur - End --}}

    {{-- Form Content - Start --}}
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
                <h1 class="flex-initial w-32 font-semibold text-xl mx-auto text-gray-700 py-2">Login Menu</h1>
            </div>
            <hr class="hr-auth">
            {{-- Bagian Header Atas - End --}}
            {{-- Bagian Form - Start --}}
            <form class="form_action px-8" action="/login" method="POST">
                @csrf
                <div class="form-control pt-6">
                    <h5 class="py-2 text-sm text-gray-700 font-medium">Username</h5>
                    <input type="text"
                        class="form-input @error('username') is-invalid @enderror border-gray-300 rounded-lg bg-gray-200 text-gray-700 text-sm "
                        name="username" id="username" value="{{ old('username') }}">
                </div>
                <div class="form-control pt-2">
                    <h5 class="py-2 text-sm text-gray-700 font-medium">Password</h5>
                    <input type="password"
                        class="form-input @error('password') is-invalid @enderror border-gray-300 rounded-lg bg-gray-200 text-gray-700 text-sm "
                        name="password" id="password" value="{{ old('password') }}">
                </div>
                <button id="submit_btn" type="submit"
                    class="py-3 px-4 gap-x-2 text-sm font-semibold rounded-lg border border-transparent  text-white">
                    Login
                </button>
                <p id="buat_disini" class="text-sm text-center text-gray-700">Tidak memiliki akun? <a id="link_disini"
                        href="/select">Buat Disini</a>
                </p>
            </form>
            {{-- Bagian Form - End --}}


        </div>
    </div>

    {{-- Form Content - End --}}


</body>

</html>
