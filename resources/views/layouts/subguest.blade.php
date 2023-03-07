<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('scripts')
    </head>
    <header class="isolate bg-gray-900">

        <div class="container mx-auto relative px-6 py-3 lg:px-8">
            <nav class="flex items-center justify-between" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="{{ route('index') }}" class="-m-1.5 p-1.5">
                    <span class="sr-only">Lapas I Malang</span>
                    <img class="w-7" alt="hero" src="/img/logo-pengayoman-kecil.png"> 
                    </a>
                </div>
                
                <div class="hidden md:flex lg:gap-x-12">
                    <a href="{{ route('index') }}" class="text-base font-semibold leading-6 text-gray-100 hover:text-gray-900 hover:bg-yellow-400 hover:rounded-lg py-1 px-3">Beranda</a>
            
                    <a href="#" class="text-base font-semibold leading-6 text-gray-100 hover:text-gray-900 hover:bg-yellow-400 hover:rounded-lg py-1 px-3">Berita</a>
            
                    <a href="#" class="text-base font-semibold leading-6 text-gray-100 hover:text-gray-900 hover:bg-yellow-400 hover:rounded-lg py-1 px-3">Profil</a>
            
                    <a href="#" class="text-base font-semibold leading-6 text-gray-100 hover:text-gray-900 hover:bg-yellow-400 hover:rounded-lg py-1 px-3">Informasi Publik</a>

                    <a href="#" class="text-base font-semibold leading-6 text-gray-100 hover:text-gray-900 hover:bg-yellow-400 hover:rounded-lg py-1 px-3">WBS</a>

                    <a href="#" class="text-base font-semibold leading-6 text-gray-100 hover:text-gray-900 hover:bg-yellow-400 hover:rounded-lg py-1 px-3">ZI</a>
                
                </div> 
                <div class="flex md:hidden">
                    <button id="open-mobile-menu" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-100">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div id="mobile-menu" class="z-50 transition duration-1000 transform translate-x-full bg-slate-50 w-3/4 h-screen fixed right-0 top-0">
                <div class="flex border-b-2 text-slate-700 border-slate-200 px-5 pb-3  pt-3">
                    <span class="font-semibold">MENU</span>
                    <button id="close-mobile-menu" class="ml-auto hover:text-yellow-600 transition-transform duration-700 hover:rotate-90 focus:rotate-90">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                          </svg>                          
                    </button>
                </div>
                <nav class="px-5 pb-3 pt-3">
                    <ul class="space-y-4">
                        <li><a href="{{ route('index') }}" class="font-normal text-gray-700 transition duration-200 hover:scale-125 hover:text-yellow-500">Beranda</a></li>
                        <li><a href="/" class="font-normal text-gray-700 transition duration-200 hover:scale-125 hover:text-yellow-500">Berita</a></li>
                        <li><a href="/" class="font-normal text-gray-700 transition duration-200 hover:scale-125 hover:text-yellow-500">Profil</a></li>
                        <li><a href="/" class="font-normal text-gray-700 transition duration-200 hover:scale-125 hover:text-yellow-500">Informasi Publik</a></li>
                        <li><a href="/" class="font-normal text-gray-700 transition duration-200 hover:scale-125 hover:text-yellow-500">WBS</a></li>
                        <li><a href="/" class="font-normal text-gray-700 transition duration-200 hover:scale-125 hover:text-yellow-500">Zona Integritas</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

   
 </div>
    </header>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            @yield('content')
        </div>

        <footer class="text-slate-300 body-font">
            <div class="bg-slate-900">
                <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
                    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <img class="w-5" alt="hero" src="/img/logo-pengayoman-kecil.png"> 

                    <span class="ml-3 text-sm font-semibold text-slate-300">LAPAS I MALANG</span>
                    </a>
                    <p class="text-sm text-gray-400 sm:ml-6 sm:mt-0 mt-4">© 2023 —
                    <a href="" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@Itpsng</a>
                    </p>
                    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                    <a class="text-gray-400">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-400">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-400">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-400">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                    </span>
                </div>
            </div>
        </footer>
        <script>
        //Start Hamburger Menu
        document.getElementById('close-mobile-menu').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('translate-x-full');
        });

        document.getElementById('open-mobile-menu').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('translate-x-full');
        });
        //END Hamburger Menu
    </script>
    </body>
</html>
