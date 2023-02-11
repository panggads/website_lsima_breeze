<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', () => { //fungsi di load setelah seluruh DOM termuat
                document.querySelector('.toggle-mobile-menu').addEventListener('click', () => {
                    document.querySelector('.mobile-menu').classList.toggle('hidden');
                    //alert('ok');
                });
            });
            
        </script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <header class="text-gray-200 bg-gray-800 py-2 px-4 body-font">
            <div class="max-w-7xl mx-auto">
                <div class="relative flex items-center justify-between">
                    <!--Logo-->
                    <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                        <!--img class="mx-auto w-8" src="{{ URL::to('/') }}/img/logo-pengayoman-kecil.png" alt="" /-->
                        <span class="sm:block hidden ml-2 text-xl font-bold tracking-wide text-yellow-400 uppercase">LAPAS I MALANG</span>
                    </a>
                    <div class="sm:block hidden">
                        <!--Dekstop menu-->
                        <ul class="flex items-center space-x-8 lg:flex">
                            <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Product</a></li>
                            <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Features</a></li>
                            <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">Pricing</a></li>
                            <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-100 transition-colors duration-200 hover:text-teal-accent-400">About us</a></li>
                            <li>
                            <a
                                href="/"
                                class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                                aria-label="Sign up"
                                title="Sign up"
                            >
                                Sign up
                            </a>
                            </li>
                        </ul>
                    </div>
                <!-- Mobile menu hamburger -->
                <div class="sm:hidden">
                    <button aria-label="Open Menu" title="Open Menu" class="toggle-mobile-menu p-2 -mr-1 transition duration-200 rounded focus:outline-none focus:shadow-outline">
                        <svg class="w-5 text-white" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M23,13H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,13,23,13z"></path>
                            <path fill="currentColor" d="M23,6H1C0.4,6,0,5.6,0,5s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,6,23,6z"></path>
                            <path fill="currentColor" d="M23,20H1c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S23.6,20,23,20z"></path>
                        </svg>
                    </button>
                    <!-- Mobile menu dropdown -->
                    <div class="mobile-menu absolute top-0 left-0 w-full hidden">
                    <div class="p-5 bg-white border rounded shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                        <div>
                            <a href="/" aria-label="Company" title="Company" class="inline-flex items-center">
                            <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor" fill="none">
                                <rect x="3" y="1" width="7" height="12"></rect>
                                <rect x="3" y="17" width="7" height="6"></rect>
                                <rect x="14" y="1" width="7" height="6"></rect>
                                <rect x="14" y="11" width="7" height="12"></rect>
                            </svg>
                            <span class="ml-2 text-xl font-bold tracking-wide text-gray-800 uppercase">Company</span>
                            </a>
                        </div>
                        <div>
                            <button aria-label="Close Menu" title="Close Menu" class="p-2 -mt-2 -mr-2 transition duration-200 rounded hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                            <svg class="w-5 text-gray-600" viewBox="0 0 24 24">
                                <path
                                fill="currentColor"
                                d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z"
                                ></path>
                            </svg>
                            </button>
                        </div>
                        </div>
                        <nav>
                        <ul class="space-y-4">
                            <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Product</a></li>
                            <li><a href="/" aria-label="Our product" title="Our product" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Features</a></li>
                            <li><a href="/" aria-label="Product pricing" title="Product pricing" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">Pricing</a></li>
                            <li><a href="/" aria-label="About us" title="About us" class="font-medium tracking-wide text-gray-700 transition-colors duration-200 hover:text-deep-purple-accent-400">About us</a></li>
                        </ul>
                        </nav>
                    </div>
                    </div>
              
                </div>
                </div>
            </div>
    </header>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            @yield('content')
        </div>
    </body>
    <footer class="text-gray-200 body-font bg-gray-600">
      <div class="container px-5 py-24 mx-auto">
        <div class="-mx-4 -mb-10 text-center">
          <div class="mb-10 px-4">
            <h2 class="title-font text-2xl font-bold text-gray-100 mt-6 mb-3 uppercase">Lembaga Pemasyarakatan Kelas I Malang</h2>
            <p class="leading-relaxed text-base">Jl. Asahan, Bunulrejo, Kec. Blimbing, Kota Malang, Jawa Timur 65123
              <br>
              <span class="text-gray-300 mt-2 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                <span class="mx-3">(0341) 491201</span>
              </span>
              
              <span class="text-gray-300 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
            </svg>

                <span class="ml-3">lapasmalanglowokwaru@gmail.com</span>
              </span>
               
            </p>
            <button class="flex mx-auto mt-12 text-gray-700 font-semibold bg-gray-100 border-0 py-2 px-5 focus:outline-none hover:bg-gray-200 rounded">GOOGLE MAPS</button>
          </div>
        </div>
      </div>
      <div class="bg-gray-800">
        <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            
          </a>
          <p class="text-sm text-gray-200 sm:ml-6 sm:mt-0 mt-4">
            
          </p>
          <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
            <a class="text-gray-200">
            © 2023 LAPAS KELAS I MALANG
            </a>
            
          </span>
        </div>
      </div>
    </footer>
</html>
