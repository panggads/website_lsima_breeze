<?php
    $input_style = 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500';
    $label_style = 'block mb-2 text-sm font-medium text-gray-900 dark:text-white';
    $main_button = 'text-white bg-gray-700 hover:bg-blugraye-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800';
    $coverUrl = $berita->cover ? asset('img/medialain/' . $berita->cover) : null;
?>

@push('styles')

@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
    // handle file input change event to compress the selected image before sending the AJAX request
$(document).on('change', '#image', function() {
    var file = $(this).get(0).files[0];
    if (file) {
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onloadend = function() {
            var img = new Image();
            img.src = reader.result;
            img.onload = function() {
                var canvas = document.createElement('canvas');
                var ctx = canvas.getContext('2d');
                canvas.width = 500; // set the maximum width of the compressed image
                canvas.height = canvas.width * img.height / img.width;
                ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
                var dataURL = canvas.toDataURL('image/jpeg', 0.8); // set the compression quality to 80%
                $('#image').attr('value', dataURL);
            };
        };
    }
});

// handle form submit event to upload the compressed image with AJAX
$(document).on('submit', '#image-upload-form', function(event) {
    event.preventDefault();
    // disable the submit button and show the loading spinner
    $('#image-upload-btn').prop('disabled', true);
    $('#loading-spinner').removeClass('hidden');
    var formData = new FormData(this);
    $.ajax({
        url: "upload",
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            // enable the submit button and hide the loading spinner
            $('#image-upload-btn').prop('disabled', false);
            $('#loading-spinner').addClass('hidden');
            // handle the success response
            $('#image-cover').attr('src', '/'+response.url);
            console.log(response.url);
        },
        error: function(xhr, status, error) {
            // enable the submit button and hide the loading spinner
            $('#image-upload-btn').prop('disabled', false);
            $('#loading-spinner').addClass('hidden');
            // handle the error response
            console.log(xhr.responseText);
        }
    });
});

</script>

@endpush

<x-app-layout>

    <!-- component -->
<section class="mx-auto">
    <div class="ml-auto">
            <a href="{{ route('medialain.index') }}" class="flex items-center justify-center px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-sky-600 rounded-lg shrink-0 w-36">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>
                <span class="ml-2">Kembali</span>
            </a>
    </div>

    <section class="text-gray-600 body-font mt-6">
        <div class="mx-auto flex flex-col md:flex-row">

            <div class=" basis-6/12 md:mr-4 bg-white px-6 py-8">
                <h1 class="mb-6 font-bold">Edit berita</h1>
                
                <div class="mt-0">
                    <div class="mt-0">
     
                    <form id="image-upload-form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm mb-2" for="image">
                                Pilih gambar untuk dijadikan cover
                            </label>
                            <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight" id="image" type="file" name="image">
                        </div>
                        <div class="mb-4 flex">
                            <input type="hidden" name="id" value="{{ $berita->id }}">
                            <button id="image-upload-btn" class="bg-sky-500 hover:bg-sky-700 text-white font-semibold py-1 px-2 rounded text-sm" type="submit">
                                Upload Image
                            </button>
                            <div role="status" id="loading-spinner" class="ml-4 hidden">
                                <svg aria-hidden="true" class="inline w-4 h-4 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                </svg>
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        
                    </form>
                    
                    

                    </div>


                    <div class=" mt-4 pt-4 sm:mt-0 text-left">
                        <form method="POST" action="{{ route('berita.update', $berita->id) }}">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-6">
                                <label for="judul" class="{{ $label_style }}">Judul Berita</label>
                                <input name="judul" type="text" id="judul" class="{{ $input_style }}" placeholder="Tulis judul berita" value="{{ $berita->judul }}" required>
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="sumber" class="{{ $label_style }}">Sumber Berita</label>
                                <input name="sumber" type="text" id="sumber" class="{{ $input_style }}" placeholder="Sumber berita" value="{{ $berita->sumber }}" required>
                                @error('sumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <button type="submit" class="{{ $main_button }}">Simpan Perubahan</button>
                        </form>    

                        @if(session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 mt-3 text-sm rounded relative" role="alert">
                                <strong class="font-bold">Success!</strong>
                                <span class="block sm:inline">{{ session('success') }}</span>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-2">
                                    <svg class="fill-current h-5 w-5 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <title>Close</title>
                                        <path d="M14.348 5.652a1 1 0 0 0-1.414 0L10 8.586 7.066 5.652a1 1 0 0 0-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 1 0 1.414 1.414L10 11.414l2.934 2.934a1 1 0 0 0 1.414-1.414L11.414 10l2.934-2.934a1 1 0 0 0 0-1.414z"/>
                                    </svg>
                                </span>
                            </div>
                        @endif

                    </div>
                </div>
            </div>

            <div class="basis-6/12 md:ml-4 my-12 md:my-0 bg-white px-6 py-8">
                <h1 class="mb-6 font-bold">Preview Berita</h1>
                <div class="rounded-lg h-64 overflow-hidden">
                @if ($coverUrl)
                    <img src="{{ $coverUrl }}" alt="Cover Image" id="image-cover">
                @else
                    <img id="image-cover" alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1200x500">
                @endif
                    
                </div>
                <div class="mt-10">
                    <div class=" mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                        <h1 class="font-semibold text-2xl">{{ $berita->judul }}</h1>
                        <div>
                            <span class="text-slate-400 text-sm">{{ $berita->tanggal }}</span>
                        </div>
                        <a href="{{ $berita->sumber }}" target="_blank" class="leading-relaxed text-sm my-6">{{ $berita->sumber }}</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
</section>
  
</x-app-layout>
