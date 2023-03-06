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
    <body>
    <header class="bg-cover bg-center h-full md:h-screen bg-gray-900">
      <div class="absolute top-0 right-0 w-full h-full bg-cover bg-center" style="background-image: url(img/bg-head.jpg); opacity: 0.04;"></div>
      <div class="h-screen w-full absolute"></div>
      
      <div class="container mx-auto flex p-5 items-center relative pt-6">
        <a class="p-2 mb-0 shadow-sm hidden">
         <img class="w-8" alt="hero" src="img/logo-pengayoman-kecil.png"> 
        </a>

        <nav class="hidden md:block ml-auto flex-wrap items-center text-base font-sans font-medium justify-center z-50">
          <a href="" class="text-base font-semibold leading-6 cursor-pointer mx-6 text-slate-50 hover:text-gray-900 hover:bg-yellow-400 hover:rounded-lg py-1 px-3">Beranda</a>
          <a href="" class="text-base font-semibold leading-6 cursor-pointer mx-6 text-slate-50 hover:text-gray-900 hover:bg-yellow-400 hover:rounded-lg py-1 px-3">Berita</a> 
          <a href="" class="text-base font-semibold leading-6 cursor-pointer mx-6 text-slate-50 hover:text-gray-900 hover:bg-yellow-400 hover:rounded-lg py-1 px-3">Profil</a>
          <a href="" class="text-base font-semibold leading-6 cursor-pointer mx-6 text-slate-50 hover:text-gray-900 hover:bg-yellow-400 hover:rounded-lg py-1 px-3">Informasi Publik</a>
          <a href="" class="text-base font-semibold leading-6 cursor-pointer mx-6 text-slate-50 hover:text-gray-900 hover:bg-yellow-400 hover:rounded-lg py-1 px-3">WBS</a>
          <a href="" class="text-base font-semibold leading-6 cursor-pointer mx-6 text-slate-50 hover:text-gray-900 hover:bg-yellow-400 hover:rounded-lg py-1 px-3">ZI</a>
        </nav>

        <div class="ml-auto md:hidden relative"> 
            <button id="open-mobile-menu" class="p-1 -mr-1 transition duration-1000 rounded bg-slate-900 bg-opacity-90 text-gray-50 hover:text-yellow-400 outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>      
            </button> 
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
                        <li><a href="/" class="font-normal text-gray-700 transition duration-200 hover:scale-125 hover:text-yellow-500">Beranda</a></li>
                        <li><a href="/" class="font-normal text-gray-700 transition duration-200 hover:scale-125 hover:text-yellow-500">Berita</a></li>
                        <li><a href="/" class="font-normal text-gray-700 transition duration-200 hover:scale-125 hover:text-yellow-500">Profil</a></li>
                        <li><a href="/" class="font-normal text-gray-700 transition duration-200 hover:scale-125 hover:text-yellow-500">Informasi Publik</a></li>
                        <li><a href="/" class="font-normal text-gray-700 transition duration-200 hover:scale-125 hover:text-yellow-500">WBS</a></li>
                        <li><a href="/" class="font-normal text-gray-700 transition duration-200 hover:scale-125 hover:text-yellow-500">Zona Integritas</a></li>
                    </ul>
                </nav>
            </div>
        </div>
      </div>
         
      <svg class="absolute bottom-0 right-0" version="1.1" xmlns="http://www.w3.org/2000/svg"
		xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice"> 
		<defs>
			<linearGradient id="bg">
				<stop offset="0%" style="stop-color:rgba(255, 251, 212, 0.06)"></stop>
				<stop offset="70%" style="stop-color:rgba(130, 130, 130, 0.6)"></stop>
				<stop offset="100%" style="stop-color:rgba(221, 221, 221, 0.2)"></stop>
			</linearGradient>
			<path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
	s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
		</defs>
		<g>
			<use xlink:href='#wave' opacity=".3">
				<animateTransform
          attributeName="transform"
          attributeType="XML"
          type="translate"
          dur="10s"
          calcMode="spline"
          values="270 230; -334 180; 270 230"
          keyTimes="0; .5; 1"
          keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
          repeatCount="indefinite" />
			</use>
			<use xlink:href='#wave' opacity=".6">
				<animateTransform
          attributeName="transform"
          attributeType="XML"
          type="translate"
          dur="8s"
          calcMode="spline"
          values="-270 230;243 220;-270 230"
          keyTimes="0; .6; 1"
          keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
          repeatCount="indefinite" />
			</use>
			<use xlink:href='#wave' opacty=".9">
				<animateTransform
          attributeName="transform"
          attributeType="XML"
          type="translate"
          dur="6s"
          calcMode="spline"
          values="0 230;-140 200;0 230"
          keyTimes="0; .4; 1"
          keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
          repeatCount="indefinite" />
			</use>
		</g>
	</svg>

      <div class="relative mx-auto h-4/5 flex justify-center items-center w-full px-4 py-16 ">
            <div class="flex flex-col mb-16 sm:text-center sm:mb-0">
              <div id="tagline" class="opacity-0 transition-opacity duration-1000 max-w-xl mb-10 mx-auto text-center lg:max-w-6xl md:mb-12">
                <a class="p-2 mb-0 shadow-lg"> 
                  <img class="w-12 mx-auto" alt="hero" src="img/logo-pengayoman-kecil.png"> 
                 </a>
                <h2 class="text-slate-50 uppercase text-sm md:text-lg">Kementerian Hukum dan HAM RI</h2>
                <h2 class="max-w-full mb-6 font-sans text-lg md:text-3xl font-bold leading-loose tracking-normal text-slate-200 md:mx-auto">
                  <span class="inline-block">LEMBAGA PEMASYARAKATAN KELAS I MALANG</span> 
                </h2>
                <p class="text-sm inline-block text-gray-400 md:text-lg"> 
                  Selamat datang di website Lapas I Malang, kami berkomitmen untuk menjaga keamanan dan membangun kepribadian para warga binaan serta memberikan pelayanan yang optimal.

                  
                  
                </p>
                <div class="relative group mx-auto w-20 opacity-60"  onclick="scrollToInovasi()"> 
                  <svg class="mx-auto mt-12 md:mt-32 text-slate-50 w-12 h-12 group-hover:animate-bounce" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span class="group-hover:opacity-100 opacity-0 transition-opacity duration-1000 text-slate-50 text-xs">Click Me!</span> 
                </div>
                
                 
              </div>
              
            </div>
      </div>
      
    </header>
    <body>
        {{ $slot }}
    </body>

    <footer class="text-slate-300 body-font">
      <div class="bg-slate-900">
          <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
            <p class="text-sm text-gray-100 sm:ml-6 sm:mt-0 mt-4">© 2023 — Created by 
              <a href="https://www.instagram.com/pangga.ds/" rel="noopener noreferrer" class="text-gray-100 ml-1" target="_blank">@pangga.ds</a>
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

        //const animate = document.querySelector('.animate-section');

        //window.addEventListener('scroll', () => {
        //  const taglineTop = animate.getBoundingClientRect().top;
        //  const windowHeight = window.innerHeight;

        //  if (taglineTop < windowHeight) {
        //    animate.classList.remove('translate-y-full');
        //  }else{
            //animate.classList.toggle('translate-x-full');           g   
        //  }
        //});
        
        function scrollToInovasi() {
          var inovasiSection = document.getElementById("inovasi"); // get the section element by its ID
          inovasiSection.scrollIntoView({behavior: "smooth"}); // scroll smoothly to the section
        }

        document.addEventListener('DOMContentLoaded', () => {
          document.getElementById('tagline').classList.add('opacity-100');
        });
    </script>
</body>
</html>
