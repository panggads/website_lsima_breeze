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

    @include('/site/_section_medsos', ['title' => 'Media Sosial'])
    

    @endsection