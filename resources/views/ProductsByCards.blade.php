@extends('Layout')

@section('title', 'Shop - Store4U Premium Products')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Our Collection</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach($products as $p)
            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden border border-gray-100 flex flex-col group">
                
                <!-- Image Container -->
                <div class="relative h-64 overflow-hidden bg-gray-50">
                    <img src="{{ $p->image }}" alt="{{ $p->nom }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    
                    @if($p->solde > 0)
                        <!-- <div class="absolute top-3 right-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full shadow-sm">
                            -{{ $p->solde }}% OFF
                        </div> -->
                    @endif
                    
                    <div class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm text-gray-800 text-xs font-medium px-2 py-1 rounded shadow-sm">
                        {{ $p->categorie }}
                    </div>
                </div>

                <!-- Content -->
                <div class="p-5 flex flex-col flex-grow">
                    <h2 class="text-lg font-bold text-gray-800 mb-2 line-clamp-1 group-hover:text-eco-green transition-colors">{{ $p->nom }}</h2>
                    
                    <div class="mt-auto pt-4 flex items-end justify-between">
                        <div>
                            @if($p->solde > 0)
                                @php
                                    $finalPrice = $p->prix - ($p->prix * $p->solde / 100);
                                @endphp
                                <!-- <p class="text-xs text-gray-400 line-through mb-0.5">{{ number_format($p->prix, 2) }} DH</p> -->
                                <p class="text-xl font-bold text-green-600">{{ number_format($finalPrice, 2) }} DH</p>
                            @else
                                <p class="text-xl font-bold text-gray-800">{{ number_format($p->prix, 2) }} DH</p>
                            @endif
                        </div>
                        <button class="py-2 bg-blue-600 rounded-lg text-white px-4 font-bold hover:bg-blue-700 transition-colors duration-200 ">
                            Add To Cart
                        </button>
                        
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
