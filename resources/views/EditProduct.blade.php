@extends('Layout')
@section('title','Edit Product')

@section('content')
<div class="max-w-3xl mx-auto py-8 px-4">
    <div class="mb-6">
        @include('incs.flash')
    </div>

    <div class="bg-white shadow-md rounded-lg border border-gray-100">
        <div class="px-6 py-4 border-b border-gray-100">
            <h2 class="text-lg font-semibold text-gray-800">Modifier le produit</h2>
            <p class="text-sm text-gray-500">Mettez à jour les informations du produit ci-dessous.</p>
        </div>

        <div class="p-6">
            <form action="/products/{{ $pro->id }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            {{-- <form action="{{route('products.update', $pro->id)}}" method="POST" enctype="multipart/form-data" class="space-y-6"> --}}
                @csrf
                @method('PUT')

                <div>
                    <label for="n" class="block text-sm font-medium text-gray-700">Nom du produit</label>
                    {{-- <p>{{ $pro->nom }}</p> --}}
                    <div class="mt-1">
                        <input id="n" name="n" type="text" value="{{ old('n', $pro->nom) }}" class="block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" />
                    </div>
                    @error('n') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="p" class="block text-sm font-medium text-gray-700">Prix du produit</label>
                    <div class="mt-1">
                        <input id="p" name="p" type="text" value="{{ old('p', $pro->prix) }}" class="block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" />
                    </div>
                    @error('p') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Image du produit</label>
                    <div class="mt-2 flex items-center gap-4">
                        <input id="image" name="image" value={{$pro->image}} type="file" class="block text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100" />
                        @if($pro->image)
                            <img src="{{ $pro->image }}" alt="{{ $pro->image }}" class="w-28 h-28 object-cover rounded-md border" />
                        @endif
                    </div>
                    @error('image') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="c" class="block text-sm font-medium text-gray-700">Categorie du produit</label>
                    <div class="mt-1">  
                        <input id="c" name="c" type="text" value="{{ old('c', $pro->categorie) }}" class="block w-full shadow-sm sm:text-sm border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" />
                    </div>
                    @error('c') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div class="flex items-center justify-end gap-3">
                    <a href="/products" class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">Cancel</a>
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md text-sm font-medium text-white hover:bg-indigo-700">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


