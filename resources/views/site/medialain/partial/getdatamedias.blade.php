@forelse($data as $row)
          <div class="py-8 px-4 lg:w-1/3">
            <div class="h-full flex items-start">
              <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">{{ date('M', strtotime($row->tanggal)) }}</span>
                <span class="font-medium text-lg text-gray-800 title-font leading-none">{{ date('d', strtotime($row->tanggal))}}</span>
              </div>
              <div class="flex-grow pl-6">
                <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">Berita dari media lain</h2>
                <h1 class="title-font text-sm md:text-xl font-medium text-gray-900 mb-3">{{ $row->judul }}</h1>     
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