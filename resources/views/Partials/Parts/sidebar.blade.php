{{-- Fitur Untuk Admin --}}

@if (Auth::user()->role == 'admin')
    <!-- start: Sidebar -->
    <div class="fixed left-0 top-0 w-64 h-full bg-green-800 p-4 z-50 sidebar-menu transition-transform">
        <a href="#" class="flex items-center pb-4 border-b border-b-white border-opacity-15">
            <img src="{{ asset('assets/img/dash_logo.png') }}" alt="">
        </a>
        <ul class="mt-4">
            <li class="mb-1 group active">
                <a href="#"
                    class="flex items-center py-2 px-4 text-gray-200 hover:bg-gray-50 hover:bg-opacity-15 hover:text-gray-200 rounded-md group-[.active]:bg-gray-50 group-[.active]:bg-opacity-15 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Dashboard</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="#"
                    class="flex items-center py-2 px-4 text-gray-200 hover:bg-gray-50 hover:bg-opacity-15 hover:text-gray-200 rounded-md group-[.active]:bg-gray-50 group-[.active]:bg-opacity-15 group-[.active]:text-white group-[.selected]:bg-gray-50 group-[.selected]:bg-opacity-15 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class="ri-settings-line mr-3 text-lg"></i>
                    <span class="text-sm">Master</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="#"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">
                            Nama Kelas
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">
                            Kategori
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">
                            Sub Kategori
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">
                            Akun User
                        </a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="#"
                    class="flex items-center py-2 px-4 text-gray-200 hover:bg-gray-50 hover:bg-opacity-15 hover:text-gray-200 rounded-md group-[.active]:bg-gray-50 group-[.active]:bg-opacity-15 group-[.active]:text-white group-[.selected]:bg-gray-50 group-[.selected]:bg-opacity-15 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class="ri-edit-line mr-3 text-lg"></i>
                    <span class="text-sm">Registrasi Akun</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="#"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">
                            Customer
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">
                            Tenant
                        </a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group">
                <a href="#"
                    class="flex items-center py-2 px-4 text-gray-200 hover:bg-gray-50 hover:bg-opacity-15 hover:text-gray-200 rounded-md group-[.active]:bg-gray-50 group-[.active]:bg-opacity-15 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="ri-wallet-line mr-3 text-lg"></i>
                    <span class="text-sm">Saldo</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="#"
                    class="flex items-center py-2 px-4 text-gray-200 hover:bg-gray-50 hover:bg-opacity-15 hover:text-gray-200 rounded-md group-[.active]:bg-gray-50 group-[.active]:bg-opacity-15 group-[.active]:text-white group-[.selected]:bg-gray-50 group-[.selected]:bg-opacity-15 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class="ri-folder-chart-line mr-3 text-lg"></i>
                    <span class="text-sm">Laporan</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="#"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">
                            Customer
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">
                            Tenant
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">
                            Kategori
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">
                            Sub Kategori
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">
                            Item
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#"
                            class="text-gray-300 text-sm flex items-center hover:text-gray-100 before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">
                            Transaksi
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
    <!-- end: Sidebar -->
@endif

{{-- Fitur Untuk Customer --}}
@if (Auth::user()->role == "customer")
    
@endif

{{-- Fitur Untuk Tenant --}}
@if (Auth::user()->role == "tenant")
    
@endif