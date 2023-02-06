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
    </head>
    <header class="text-gray-200 bg-gray-800 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="hidden flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img class="mx-auto w-8" src="{{ URL::to('/') }}/img/logo-pengayoman-kecil.png" alt="" />
            </a>
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-5 hover:text-gray-100 hover:cursor-pointer hover:underline underline-offset-4">Smooth L'sima</a>
                <a class="mr-5 hover:text-gray-100 hover:cursor-pointer hover:underline underline-offset-4">Berita</a>
                <a class="mr-5 hover:text-gray-100 hover:cursor-pointer hover:underline underline-offset-4">Profil</a>
                <a class="mr-5 hover:text-gray-100 hover:cursor-pointer hover:underline underline-offset-4">Informasi Publik</a>
                <a class="mr-5 hover:text-gray-100 hover:cursor-pointer hover:underline underline-offset-4">ZI</a>
            </nav>
            
        </div>

        <div class="relative bg-gray-800 ">
            <div class="absolute inset-x-0 bottom-0">
                <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
                <path d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z"></path>
                </svg>
            </div>
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
                <div class="my-6">
                        <img class="rounded h-10 sm:h-36 sm:mx-auto" src="{{ URL::to('/') }}/img/logo-pengayoman-kecil.png" alt="" />
                    </div>
                    <h2 class="mb-6 font-sans font-black text-white  sm:leading-none">
                        <span class="font-medium text-md tracking-normal uppercase text-base">Kementerian Hukum dan Hak Asasi Manusia RI</span><br class="hidden md:block" /><div class="mb-0"></div>
                        <span class="text-yellow-400 text-3xl sm:text-5xl tracking-wide ">LAPAS KELAS I MALANG</span>
                    </h2>
                    
                    <p class="my-12 text-base text-indigo-100 md:text-lg">
                    Akuntabel, Profesional, Inovativ, Kreatif
                    </p>
                   
                    <a
                        href="/"
                        aria-label="Scroll down"
                        class="flex items-center justify-center w-10 h-10 mx-auto text-white duration-300 transform border border-gray-400 rounded-full hover:text-teal-accent-400 hover:border-teal-accent-400 hover:shadow hover:scale-110"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                        <path d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
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
