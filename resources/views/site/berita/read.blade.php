@extends('layouts.subguest')

@section('content')
    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto flex flex-col md:flex-row">
        <div class="basis-12/12 md:basis-9/12">
          <?php $coverUrl = $detail->cover ? asset('img/berita/' . $detail->cover) : null; ?>
          @if($coverUrl)
            <img src="/img/berita/{{ $detail->cover }}">
          @else
            <img class="w-full" src="https://dummyimage.com/1280x720 " alt="blog">
          @endif
          
          <h1 class="mt-5 title-font text-2xl font-medium text-gray-900 mb-3">{{ $detail->judul }}</h1>     
          
          <div class="text-left">
            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>

              Diposting oleh : 0
            </span>  

            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
            </svg>

              {{ date('d M Y', strtotime($detail->tanggal))}}
            </span>  
            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            Dilihat: {{ $detail->dibaca }}
            </span>   
          </div>
          <div class="my-6 border-t-2 border-gray-100">
            <p class="mt-6">{!! $detail->isi !!}</p>
          </div>

        </div>
        <div class="basis-12/12 md:basis-4/12 md:ml-8">
          <div class="flex flex-wrap -m-4">
            @forelse($beritas as $row)
            <div class="p-4">
              <div class="bg-gray-100 bg-opacity-75 px-8 py-10 rounded-lg overflow-hidden text-left relative">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">BERITA</h2>
                <h1 class="title-font sm:text-xl text-lg font-medium text-gray-900 mb-3">{{ $row->judul }}</h1>
                <p class="leading-relaxed mb-3">{!! Illuminate\Support\Str::limit($row->isi, 150, '...') !!}</p>
                <a href="{{ route('read', ['id' => $row->id]) }}" class="text-indigo-500 inline-flex items-center">Selengkapnya
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
                
              </div>
            </div>
            @empty

            @endforelse
          </div>

          <div class="relative mt-12 text-right">
            <a href="#" class="py-3 px-6 bg-slate-800 text-slate-100 rounded-lg hover:bg-slate-900">Lihat semua berita</a>
          </div>
        </div>
      </div>
    </section>
    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <h1 class="text-center mb-3  font-medium text-xl md:text-3xl"><span class="text-yellow-500 font-bold">BERITA</span> DARI MEDIA LAIN</h1>   
        <p class="text-center mb-12 md:mb-28">Perkembangan terbaru dari kami melalui berita media lain</p>
        <div class="flex flex-wrap -mx-4 -my-8">
          @forelse($medialains as $row)
          <div class="py-8 px-4 lg:w-1/3">
            <div class="h-full flex items-start">
              <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">{{ date('M', strtotime($row->tanggal)) }}</span>
                <span class="font-medium text-lg text-gray-800 title-font leading-none">{{ date('d', strtotime($row->tanggal))}}</span>
              </div>
              <div class="flex-grow pl-6">
                <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">Berita dari media lain</h2>
                <h1 class="title-font text-xl font-medium text-gray-900 mb-3">{{ $row->judul }}</h1>     
                <a href="{{ $row->sumber }}" target="_blank" class="text-indigo-500 inline-flex items-center mt-0">Selengkapnya      
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          @empty

          @endforelse
        </div>
        <div class="relative mt-16 text-right">
            <a href="#" class="py-3 px-6 bg-slate-800 text-slate-100 rounded-lg hover:bg-slate-900">Lihat semua berita media lain</a>
          </div>
      </div>
    </section>


    <section class="bg-slate-50 text-gray-600 body-font pb-12">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="text-center mb-3  font-medium text-xl md:text-3xl"><span class="text-yellow-500 font-bold">IKUTI</span> KAMI DI MEDIA SOSIAL</h1>   
            <p class="text-center mb-2 md:mb-12">Tetap Terhubung dengan Kami di Media Sosial dan Dapatkan Informasi Terbaru Setiap Hari</p> 
          </div> 
          <div class="flex flex-wrap -m-4 text-center">
            <div class="p-4 md:w-1/4 w-1/2">
              <div class="border-2 border-gray-200 px-4 py-6 rounded-lg hover:bg-slate-700 hover:scale-105 transition duration-500 group">
                <svg class="transition group-hover:text-white mx-auto mb-2" xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                <h2 class="transition group-hover:text-white title-font font-medium text-3xl text-gray-900">Facebook</h2>
                <a href="https://www.facebook.com/lapassijimalang/" target="_blank" class="cursor-pointer transition group-hover:text-indigo-300 text-indigo-500 inline-flex items-center mt-1">Ikuti Kami
                </a>
              </div>
            </div>
            <div class="p-4 md:w-1/4 w-1/2">
              <div class="border-2 border-gray-200 px-4 py-6 rounded-lg hover:bg-slate-700 hover:scale-105 transition duration-500 group">
                <svg class="transition group-hover:text-white mx-auto mb-2" xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                <h2 class="transition group-hover:text-white title-font font-medium text-3xl text-gray-900">Instragram</h2>
                <a href="https://www.instagram.com/lapaskelas1malang/?hl=id" target="_blank" class="cursor-pointer transition group-hover:text-indigo-300 text-indigo-500 inline-flex items-center mt-1">Ikuti Kami
                </a>
              </div>
            </div>
            <div class="p-4 md:w-1/4 w-1/2">
              <div class="border-2 border-gray-200 px-4 py-6 rounded-lg hover:bg-slate-700 hover:scale-105 transition duration-500 group">
                <svg class="transition group-hover:text-white  mx-auto mb-2" xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                <h2 class="transition group-hover:text-white title-font font-medium text-3xl text-gray-900">Twitter</h2>
                <a href="https://twitter.com/lapas1malang" target="_blank" class="cursor-pointer transition group-hover:text-indigo-300 text-indigo-500 inline-flex items-center mt-1">Ikuti Kami
                </a>
              </div>
            </div>
            <div class="p-4 md:w-1/4 w-1/2">
              <div class="border-2 border-gray-200 px-4 py-6 rounded-lg hover:bg-slate-700 hover:scale-105 transition duration-500 group">
                <svg class="transition group-hover:text-white  mx-auto mb-2" xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg>
                <h2 class="transition group-hover:text-white title-font font-medium text-3xl text-gray-900">Youtube</h2>
                <a href="https://www.youtube.com/channel/UCE1Davdkzo05V1jTBkpHN7w" target="_blank" class="cursor-pointer transition group-hover:text-indigo-300 text-indigo-500 inline-flex items-center mt-1">Ikuti Kami
                </a>
              </div>
            </div>
          </div>
        </div>
    </section>

    @endsection