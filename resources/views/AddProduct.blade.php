@extends('Layout')
@section('title','add New Product')

@section('content')
<div class="max-w-3xl mx-auto mt-3 px-4">
    @include('incs.flash')
</div>
<div class="max-w-3xl mx-auto px-4">
    <div class="flex justify-center">
        <div class="w-full md:w-2/3">
            <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg shadow">
                <div class="px-6 py-3 border-b border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 text-lg font-medium">{{ __('Ajouter un nouveau produit') }}</div>
                <h2 class="text-center text-amber-50 text-4xl">Add New Product</h2>
                
                <div class="p-6">
                        <form method="POST" action="/products" enctype="multipart/form-data"> 
                            {{-- same  --}}
                        {{-- <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data"> --}}
                            
                            @csrf

                            <div class="mb-4">
                                <label for="n" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">{{ __('Nom du produit') }}</label>
                                <input id="n" type="text" class="block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 rounded-md text-gray-700 dark:text-gray-100" name="n">
                                @error('n')
                                   <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="p" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">{{ __('Prix du produit') }}</label>
                                <input id="p" type="text" class="block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 rounded-md text-gray-700 dark:text-gray-100" name="p">
                                @error('p')
                                   <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="s" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">{{ __('Solde du produit') }}</label>
                                <input id="s" type="text" class="block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 rounded-md text-gray-700 dark:text-gray-100" name="s">
                                @error('s')
                                   <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="c" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">{{ __('Catégorie du produit') }}</label>
                                <input id="c" type="text" class="block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 rounded-md text-gray-700 dark:text-gray-100" name="c">
                                @error('c')
                                   <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                @enderror

                            </div>

                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">{{ __('Image du produit') }}</label>
                                <input id="image" type="file" class="block w-full text-sm text-gray-700 dark:text-gray-200" name="image">
                                @error('image')
                                   <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-0">
                                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md">
                                    {{ __('Ajouter le produit') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
