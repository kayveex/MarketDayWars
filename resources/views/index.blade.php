<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warspreneur - By SMP Waringin</title>
    {{-- Tailwind CSS & Preline --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Font is using Remix Icon, with NPM are included --}}

    {{-- Inline CSS - Start --}}
    <style>
        /* Section Main - Start */
        #background_index {
            height: 1536px;
            width: 100%;
        }


        /* Section Main - End */

        /* Section Navbar - Start */
        #navbar_index {
            border-radius: 14px;
            padding-left: 70px;
            padding-right: 70px;
        }




        /* Section Navbar - End */


        /* Section Hero - Start */

        .wrap_header {
            background: #1D232A;

            height: 768px;
        }

        /* Section Hero - End */

        /* Section Tentang Kami - Start */
        .wrap_middle {
            background: linear-gradient(180deg, #1D232A 32.29%, #1C362F 70.48%, #1A613A 106.84%, rgba(22, 163, 74, 0.39) 161.91%);
            height: 768px;
        }

        /* Section Tentang Kami - End */

        /* Section Daftar Tenant - Start */
        .wrap_end {
            background: #1B5838;
            height: 768px;
        }

        /* Section Daftar Tenant - End */

        /* Footer - Start */
        #footer {
            border-top: 3px solid var(--Default-yellow-300, #FCD34D);
            background: #1D232A;
            height: 120px;
        }

        /* Footer - End */
    </style>


    {{-- Inline CSS - End --}}
</head>

<body id="background_index" class="font-wars">
    {{-- Wrap Header --}}
    <div class="wrap_header p-5">
        {{-- Navigation Bar - Start --}}
        <header id="navbar_index"
            class=" shadow-md rounded-lg flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-green-600 text-sm py-4">
            <nav class="max-w-[85rem] w-full mx-auto px-4 flex flex-wrap basis-full items-center justify-between"
                aria-label="Global">
                <a class="sm:order-1 flex-none text-xl font-semibold" href="/">
                    <img src="{{ asset('assets/img/navlogo.png') }}" alt="">
                </a>
                <div class="sm:order-3 flex items-center gap-x-2">
                    <button type="button" id="hamburger"
                        class="sm:hidden hs-collapse-toggle p-2.5 inline-flex justify-center items-center gap-x-2 rounded-lg text-white hover:text-black  hover:bg-yellow-400 disabled:opacity-50 disabled:pointer-events-none "
                        data-hs-collapse="#navbar-alignment" aria-controls="navbar-alignment"
                        aria-label="Toggle navigation">
                        <svg class="hs-collapse-open:hidden flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block hidden flex-shrink-0 w-4 h-4"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                    <a class=" py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg text-yellow-300  hover:text-gray-800 disabled:opacity-50 disabled:pointer-events-none"
                        href="/login">
                        Login
                    </a>
                    <a class=" py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg bg-yellow-300 text-gray-800 shadow-sm hover:bg-yellow-400 disabled:opacity-50 disabled:pointer-events-none"
                        href="#">
                        Register
                    </a>
                </div>
                <div id="navbar-alignment"
                    class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:grow-0 sm:basis-auto sm:block sm:order-2">
                    <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:mt-0 sm:ps-5">
                        <a class="font-semibold text-white hover:text-yellow-300" href="#">Beranda</a>
                        <a class="font-semibold text-white hover:text-yellow-300" href="#">Tentang Kami</a>
                        <a class="font-semibold text-white hover:text-yellow-300" href="#">Daftar Tenant</a>
                    </div>
                </div>
            </nav>
        </header>
        {{-- Navigation Bar- End --}}

        {{-- Section Hero - Start --}}

        {{-- Section Hero - End --}}
    </div>

    {{-- Wrap Middle --}}
    <div class="wrap_middle p-5"></div>


    {{-- Wrap End --}}
    <div class="wrap_end p-5"></div>

    {{-- Footer --}}
    <footer id="footer" class="w-full py-10 px-4 sm:px-6 lg:px-8 mx-auto">

    </footer>



</body>

</html>
