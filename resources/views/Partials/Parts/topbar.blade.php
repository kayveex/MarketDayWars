{{-- Top Bar --}}
<div class="py-2 px-6 bg-accdash flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
    <button type="button" class="text-lg text-gray-200 hover:text-green-600 sidebar-toggle">
        <i class="ri-menu-line"></i>
    </button>
    <ul class="flex items-center text-sm ml-4">
        {{-- Breadcrumb section - Start --}}
        @yield('breadcrumb')
        {{-- <li class="mr-2">
            <a href="#" class="text-gray-200 hover:text-green-600 font-medium">Dashboard</a>
        </li>
        <li class="text-gray-600 mr-2 font-medium">/</li>
        <li class="text-gray-600 mr-2 font-medium">Analytics</li> --}}
        {{-- Breadcrumb section - End --}}
    </ul>
    <ul class="ml-auto flex items-center">
        {{-- Profile Button --}}
        <li class="dropdown ml-3">
            <button id="profile_btn" type="button"
                class="dropdown-toggle flex items-center gap-2  hover:bg-green-700 hover:rounded-lg p-2 ">
                <h4 class="text-gray-200 text-xs ps-2 "><span>@ </span>{{ Auth::user()->username }}</h4>
                @if (Auth::user()->role == 'customer' || Auth::user()->role == 'tenant')
                    <img src="{{ asset(Auth::user()->foto) }}" alt=""
                        class="w-8 h-8 rounded-full block object-cover align-middle">
                @endif
                @if (Auth::user()->role == 'admin')
                    <img src="{{ asset('assets/img/admico.png') }}" alt=""
                        class="w-8 h-8 rounded-full block object-cover align-middle">
                @endif

                <i class="ri-equalizer-2-line text-gray-200 "></i>
            </button>
            <ul
                class="dropdown-menu shadow-md shadow-black/5 z-30 hidden rounded-md bg-accdash w-full max-w-[140px] border-2 border-gray-600 ">
                
                @if (Auth::user()->role === 'tenant' || Auth::user()->role === 'customer')
                <li class="flex hover:bg-green-700  ">
                    <i class="ri-user-4-line  text-gray-200 py-2 ms-4"></i>
                    <a href="/profile/{{ Auth::user()->id }}" class="flex items-center text-[13px] py-1 px-2 text-gray-200">Profil
                        Saya</a>
                </li>   
                @endif

                <li class="flex hover:bg-green-700">
                    <i class="ri-logout-box-r-line py-2 ms-4 text-red-500 "></i>
                    <a href="/logout" class="flex items-center text-[13px] py-1 px-2 text-red-500">Logout</a>
                </li>
            </ul>
        </li>
        {{-- Notifications --}}
        @if (Auth::user()->role != 'admin')
        <li class="dropdown">
            <button type="button"
                class="dropdown-toggle text-gray-200 w-8 h-8 rounded flex items-center justify-center hover:bg-green-700 ">
                <i class="ri-notification-3-line"></i>
            </button>
            <div
                class="dropdown-menu shadow-lg shadow-black/5 z-30 hidden max-w-md min-w-sm w-full bg-accdash rounded-md border-2 border-green-600 ">
                <div class="flex items-center px-4 pt-4 py-2 border-b border-b-green-600 notification-tab">
                    <h4 class="text-green-600 text-sm font-bold">Notifikasi</h4>
                </div>
                <div class="my-2">
                    <ul class="max-h-64 overflow-y-auto" data-tab-for="notification" data-page="notifications">
                        @foreach ($notifikasi as $item)
                            <li>
                                <a href="#" class="py-2 px-4 flex items-center hover:bg-green-600 group">
                                        <i class="ri-information-line text-green-600 group-hover:text-white w-8 h-6"></i>
                                    <div class="ml-2">
                                        <div class="text-[13px] text-green-600 font-medium truncate group-hover:text-white">
                                            {{ $item->pesan }}
                                        </div>
                                        <div class="text-[11px] text-gray-200">{{ \Carbon\Carbon::parse($item->created_at)->locale('id')->diffForHumans() }}</div>
                                    </div>
                                </a>
                            </li> 
                        @endforeach
                    </ul>
                </div>
            </div>
        </li>
        @endif

    </ul>
</div>
