<header class="header w-full">
    <!--! topHeader -->
    <div class="top-header w-screen flex flex-col items-center justify-between border-b">
        <div class="flex w-full bg-green-800 items-center justify-between p-5 md:px-20 border-b">
            <div class="icons hidden lg:flex items-center gap-2">
                <a href="" class="text-gray-700 bg-gray-300/50 p-1 rounded-md hover:scale-110 hover:text-white hover:bg-green-400 flex items-center justify-center transition-all">
                    <i class="bi bi-instagram text-xl"></i>
                </a>
                <a href="https://github.com/Kennn711" class="text-gray-700 bg-gray-300/50 p-1 rounded-md hover:scale-110 hover:text-white hover:bg-green-400 flex items-center justify-center transition-all">
                    <i class="bi bi-github text-xl"></i>
                </a>
            </div>
        </div>
        
        <!-- Navbar -->
        <div class="bg-gray-100 shadow-md flex flex-row items-center justify-between w-full p-6 md:px-24">
            <!-- Logo -->
            <h1 class="font-semibold text-sm sm:text-4xl text-gray-600">ShoeCycle</h1>

            <form class="hidden lg:block -ml-24 justify-center flex-grow">
                <div class="desktopNavbar">
                    <nav class="flex-grow flex justify-center">
                        <ul class="flex gap-12 font-bold text-gray-600">
                            <li class="nav_items">
                                <a href="{{ route('order.view') }}" class="hover:underline">BELI SEPATU</a>
                            </li>
                            <li class="nav_items">
                                <a href="{{ route('transaction-customer.index') }}" class="hover:underline">RIWAYAT TRANSAKSI</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <label class="absolute right-2 top-2" for="search">
                    <i class="fa-solid fa-magnifying-glass cursor-pointer"></i>
                </label>
            </form>
            
            <!-- Avatar & Keranjang -->
            <div class="flex items-center gap-4 ml-auto">
                <!-- Avatar -->
                <div class="relative">
                    @if (empty(Auth::user()->avatar))
                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-8 h-8 md:w-10 md:h-10 rounded-full cursor-pointer" src="{{ asset('uploads/avatar/empty-avatar.webp') }}" alt="User dropdown" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);">
                    @else
                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-8 h-8 md:w-10 md:h-10 rounded-full cursor-pointer" src="{{ asset('uploads/avatar/' . Auth::user()->avatar) }}" alt="User dropdown" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);">
                    @endif

                    <!-- Dropdown menu -->
                    <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600 absolute top-full mt-2 right-0">
                        <div class="px-4 py-1 sm:py-3 text-xs sm:text-sm text-gray-900 dark:text-white">
                            <div>Hai, {{ Auth::user()->name }}!</div>
                            <div class="font-medium truncate">{{ Auth::user()->email }}</div>
                        </div>
                        <ul class="py-1 sm:py-2 text-xs sm:text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                            <li>
                                <a href="{{ route('complete.profile') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pengaturan Akun</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="{{ route('auth.logout') }}" class="block px-4 py-1 sm:py-2 text-xs sm:text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                <i class="bi bi-box-arrow-in-right text-green-900"></i> Keluar</a>
                        </div>
                    </div>
                </div>

                <!-- Keranjang -->
                <div class="relative">
                    <a href="{{ route('view.cart') }}">
                        <span class="text-[0.5rem] md:text-xs text-center font-semibold text-white absolute top-0 left-5 md:left-7 w-2 md:w-3 h-2 md:h-3 bg-green-900 rounded-full">{{ session('count_cart') }}</span>
                        <i class="bi bi-cart4 text-green-900 text-xl md:text-3xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
<!-- Tampilan Mobile Navbar -->
@include('layouts-customer/partial/mobile-navbar')
</header>
