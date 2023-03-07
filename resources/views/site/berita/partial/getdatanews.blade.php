@forelse($data as $row)

<?php
  $coverUrl = $row->cover ? asset('img/berita/' . $row->cover) : null;
?>
  <div class="p-4 md:w-1/3">
    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden hover:scale-105 transition-transform duration-700 ease-out">
        @if ($coverUrl)
          <img class="lg:h-64 md:h-56 w-full object-cover object-center border-b-2 border-yellow-400" src="{{ $coverUrl }}" alt="Cover Image" id="image-cover">
        @else
          <img class="lg:h-56 md:h-48 w-full object-cover object-center" src="https://dummyimage.com/1280x720 " alt="blog">
        @endif
      
      <div class="p-6">
        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ date('d M Y', strtotime($row->tanggal))}}</h2>
        <h1 class="title-font text-lg font-semibold text-gray-900 mb-3">{{ $row->judul }}</h1>
        <div class="leading-relaxed mb-3">{!! Illuminate\Support\Str::limit($row->isi, 150, '...') !!}</div>
        <div class="flex items-center flex-wrap ">
          <a href="{{ route('read', ['id' => $row->id]) }}" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Selengkapnya
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
          <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
              <circle cx="12" cy="12" r="3"></circle>
            </svg>{{ $row->dibaca }}
          </span>
          <span class="text-gray-400 inline-flex items-center leading-none text-sm">
            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
            </svg>0
          </span>
        </div>
      </div>
    </div>
  </div>
@empty

@endforelse