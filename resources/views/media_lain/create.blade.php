<!-- create.blade.php -->
<?php
    $input_style = 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500';
    $label_style = 'block mb-2 text-sm font-medium text-gray-900 dark:text-white';
    $main_button = 'text-white bg-gray-700 hover:bg-blugraye-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2 text-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800';
?>
@push('styles')
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdn.quilljs.com/1.3.6/quill.js" defer></script>
<script src="https://unpkg.com/quill-paste-smart@latest/dist/quill-paste-smart.js" defer></script>
@endpush

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah berita dari media lain') }}
        </h2>
    </x-slot>


    <div class="block p-6 rounded-lg shadow-lg bg-white">
        <!--div class="card-header">Tambah Berita</div-->
        <div class="card-body">

            <form method="POST" action="{{ route('medialain.store') }}">
                @csrf
                
                <div class="mb-6">
                    <label for="judul" class="{{ $label_style }}">Judul Berita</label>
                    <input name="judul" type="text" id="judul" class="{{ $input_style }}" placeholder="Tulis judul berita" required>
                    @error('judul')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="sumber" class="{{ $label_style }}">Sumber Berita (Link)</label>
                    <input name="sumber" type="text" id="sumber" class="{{ $input_style }}" placeholder="Sumber berita" required>
                    @error('sumber')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <button type="submit" class="{{ $main_button }}">Submit</button>
            </form>
        </div>
    </div>
    
</x-app-layout>