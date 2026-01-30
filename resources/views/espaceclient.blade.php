@extends('Layout')

@section('title', 'Shop - Store4U Premium Products')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row justify-between items-center mb-8">
        <!-- Spacer to center title on desktop -->
        <div class="hidden md:block w-1/3"></div>
        
        <h1 class="text-3xl font-bold text-gray-800 text-center w-full md:w-1/3 mb-4 md:mb-0">Our Collection</h1>
        
        <!-- Filter -->
        <div class="w-full md:w-1/3 flex justify-center md:justify-end">
            <form action="{{ url('espaceclient') }}" method="GET" class="flex items-center">
                <select name="category" onchange="this.form.submit()" 
                    class="bg-white border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-eco-green focus:border-eco-green block w-full px-4 py-2.5 shadow-sm">
                    <option value="">All Categories</option>
                    @foreach($categories as $cat)
                        <option value="{{ $cat->categorie }}" {{ request('category') == $cat->categorie ? 'selected' : '' }}>
                            {{ $cat->categorie }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach($prod as $p)
            <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 overflow-hidden border border-gray-100 flex flex-col group">
                
                <!-- Image Container -->
                <div class="relative h-64 overflow-hidden bg-gray-50">
                    <img src="{{ $p->image }}" alt="{{ $p->nom }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    
                    @if($p->solde > 0)
                        <div class="absolute top-3 right-3 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full shadow-sm">
                            -{{ $p->solde }}% OFF
                        </div>
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
                                <p class="text-xs text-gray-400 line-through mb-0.5">{{ number_format($p->prix, 2) }} DH</p>
                                <p class="text-xl font-bold text-green-600">{{ number_format($finalPrice, 2) }} DH</p>
                            @else
                                <p class="text-xl font-bold text-gray-800">{{ number_format($p->prix, 2) }} DH</p>
                            @endif
                        </div>
                        <button class="py-2 bg-blue-600 rounded-lg text-white px-4 font-bold hover:bg-blue-700 transition-colors duration-200 ">
                            Add To Cart
                        </button>
                        
                        <a href="{{ route('pro.showProd', $p->id) }}" class="bg-gray-50 hover:bg-eco-green hover:text-white text-gray-700 p-2 rounded-full transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
