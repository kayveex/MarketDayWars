<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Warspreneur - Registrasi Customer</title>
    {{-- TailwindCSS --}}
    @vite('resources/css/app.css')
    {{-- Font Awesome 5 --}}
    <script src="https://kit.fontawesome.com/1568b4f3ba.js" crossorigin="anonymous"></script>
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
        .tab {
            font-size: 14px;
            color: #374151;
        }

        .tabpanel-content {
            display: block;
            opacity: 1;
        }

        .tab-panel {
            display: none;
        }

        .tab-panel.active {
            display: block;
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
    </style>
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
                <h1 class="flex-initial w-80 font-semibold text-xl mx-auto text-gray-700 py-2">Register Sebagai Customer
                </h1>
            </div>
            <hr class="hr-auth">
            <form class="form_action px-8" action="" method="POST">
                @csrf
                {{-- Percobaan terakhir --}}
                <div role="tablist" class="tabs tabs-sm tabs-bordered font-semibold py-4">
                    <a id="tab1" role="tab" class="tab cursor-pointer tab-active">Tahap Awal</a>
                    <a id="tab2" role="tab" class="tab cursor-pointer">Tahap Akhir</a>
                </div>

                <div class="tab-content p-4">
                    <!-- Tahap 1 -->
                    <div id="tabpanel1" class="tab-panel active px-2">
                        <div class="form-control">
                            <h5 class="py-2 text-sm text-gray-700 font-medium">Username</h5>
                            <input type="text"
                                class="form-input @error('username') is-invalid @enderror border-gray-300 rounded-lg bg-gray-200 text-gray-700 text-sm "
                                name="username" id="username" placeholder="Contoh: 7a-13" autocomplete="off">
                        </div>
                        <div class="form-control pt-2">
                            <h5 class="py-2 text-sm text-gray-700 font-medium">Email</h5>
                            <input type="email"
                                class="form-input @error('email') is-invalid @enderror border-gray-300 rounded-lg bg-gray-200 text-gray-700 text-sm "
                                name="email" id="email" placeholder="Gunakan email sekolah!" autocomplete="off">
                        </div>
                        <div class="flex pt-2">
                            <div class="form-control left">
                                <h5 class="py-2 text-sm text-gray-700 font-medium">Password</h5>
                                <input type="password"
                                    class="form-input @error('password') is-invalid @enderror border-gray-300 rounded-lg bg-gray-200 text-gray-700 text-sm "
                                    name="password" id="password" placeholder="Min huruf: 6; Max: 16"
                                    autocomplete="off">
                            </div>
                            <div class="form-control right">
                                <h5 class="py-2 text-sm text-gray-700 font-medium">Ulangi Password</h5>
                                <input type="password"
                                    class="form-input @error('ulangi_pass') is-invalid @enderror border-gray-300 rounded-lg bg-gray-200 text-gray-700 text-sm "
                                    name="ulangi_pass" id="ulangi_pass" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-control pt-2">
                            <h5 class="py-2 text-sm text-gray-700 font-medium">Upload Foto Profil</h5>
                            {{-- <input type="file"
                                class="form-input @error('foto') is-invalid @enderror border-gray-300 rounded-lg bg-gray-200 text-gray-700 text-sm file-input-xs"
                                name="foto" id="foto" accept="image/*"> --}}
                            <input type="file" name="foto" id="foto" accept="image/*"
                                class="file-input text-gray-700 text-sm file-input-bordered file-input-sm w-full max-w-xs @error('foto') is-invalid @enderror">
                        </div>

                    </div>

                    <!-- Tahap 2 -->
                    <div id="tabpanel2" class="hidden tab-panel px-2">
                        <!-- Konten tahap 2 -->
                        <div class="form-control ">
                            <h5 class="py-2 text-sm text-gray-700 font-medium">Nama Lengkap</h5>
                            <input type="text"
                                class="form-input @error('nama_cust') is-invalid @enderror border-gray-300 rounded-lg bg-gray-200 text-gray-700 text-sm "
                                name="nama_cust" id="nama_cust" autocomplete="off">
                        </div>
                        <div class="form-control pt-2">
                            <h5 class="py-2 text-sm text-gray-700 font-medium">Nomor Induk</h5>
                            <input type="number"
                                class="form-input @error('no_induk') is-invalid @enderror border-gray-300 rounded-lg bg-gray-200 text-gray-700 text-sm "
                                name="no_induk" id="no_induk" autocomplete="off">
                        </div>
                        <div class="flex pt-2">
                            <div class="form-control left">
                                <h5 class="py-2 text-sm text-gray-700 font-medium">Nomor WhatsApp</h5>
                                <input type="number"
                                    class="form-input @error('no_wa') is-invalid @enderror border-gray-300 rounded-lg bg-gray-200 text-gray-700 text-sm "
                                    name="no_wa" id="no_wa" placeholder="08xx-xxxx-xxxx" autocomplete="off">
                            </div>
                            <div class="form-control right">
                                <h5 class="py-2 text-sm text-gray-700 font-medium">Asal Kelas</h5>
                                <select
                                    class="form-control form-select @error('asal_kelas') is-invalid @enderror border-gray-300 rounded-lg bg-gray-200 text-gray-700 text-sm"
                                    name="asal_kelas" id="asal_kelas">
                                    <!-- Opsi-opsi asal kelas -->
                                    <option value="">Saya dari kelas...</option>
                                    <!-- Tambahkan opsi sesuai kebutuhan -->
                                </select>
                            </div>

                        </div>
                        <button id="submit_btn" type="submit" class="btn">Register</button>
                    </div>
                </div>
            </form>
            {{-- Bagian Form - End --}}
        </div>
    </div>
    {{-- Javascripts - Start --}}
    <script>
        // Percobaan Terakhir
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.tab');
            const tabPanels = document.querySelectorAll('.tab-panel');

            tabs.forEach((tab, index) => {
                tab.addEventListener('click', () => {
                    // Remove 'tab-active' class from all tabs
                    tabs.forEach(t => {
                        t.classList.remove('tab-active');
                    });

                    // Remove 'active' class from all tab panels
                    tabPanels.forEach(panel => {
                        panel.classList.remove('active');
                    });

                    // Add 'tab-active' class to the clicked tab
                    tab.classList.add('tab-active');

                    // Add 'active' class to the corresponding tab panel
                    tabPanels[index].classList.add('active');
                });
            });
        });
    </script>
</body>

</html>
