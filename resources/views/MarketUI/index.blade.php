<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warspreneur - By SMP Waringin</title>
    {{-- TailwindCSS --}}
    @vite('resources/css/app.css')
    {{-- Font Awesome 5 --}}
    <script src="https://kit.fontawesome.com/1568b4f3ba.js" crossorigin="anonymous"></script>
</head>

<body class="m-5 font-wars">
    {{-- Navbar Start --}}
    <div class="navbar rounded-2xl px-8 py-4  bg-green-600">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path fill="#f9fafb"
                            d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class=" menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-green-200 text-gray-900 font-semibold rounded-box w-52">
                    <li class="hover:text-green-800"><a>Beranda</a></li>
                    <li class="hover:text-green-800"><a>Tentang Kami</a></li>
                    <li class="hover:text-green-800"><a>Daftar Tenant</a></li>
                    <hr class="leading-3 border-green-800 ">
                    <li class="hover:text-green-800 text-blue-500"><a>Login</a></li>
                    <li class="hover:text-green-800 text-cyan-500"><a>Register</a></li>
                </ul>
            </div>
            <a href="#" class="btn btn-ghost hover:bg-green-500 text-xl">
                <img src="{{ asset('assets/img/navlogo.png') }}" alt="">
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="text-gray-50 font-semibold text-lg menu menu-horizontal px-1">
                <li class="hover:text-yellow-300"><a>Beranda</a></li>
                <li class="hover:text-yellow-300"><a>Tentang Kami</a></li>
                <li class="hover:text-yellow-300"><a>Daftar Tenant</a></li>
            </ul>
        </div>
        <div class="navbar-end gap-3 pe-8 hidden sm:flex">
            <a class="btn btn-ghost text-yellow-300 hover:text-black btn-md rounded-2xl px-6 font-bold text-lg">
                Login
            </a>
            <a class="btn btn-warning btn-md rounded-2xl px-6 font-bold text-lg shadow-sm">Register</a>
        </div>
    </div>
    {{-- Navbar End --}}
</body>

</html>
