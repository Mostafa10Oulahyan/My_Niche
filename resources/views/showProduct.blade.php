@extends('Layout')

@section('title', $pro->nom . ' - Store4U')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <div class="max-w-6xl mx-auto bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <!-- Product Image -->
                <div class="h-96 md:h-auto relative bg-gray-50 flex items-center justify-center p-8">
                    <img src="{{ $pro->image }}" alt="{{ $pro->nom }}"
                        class="max-w-full max-h-full object-contain hover:scale-105 transition-transform duration-500">

                    @if($pro->solde > 0)
                        <div class="absolute top-6 right-6 bg-red-500 text-white font-bold px-3 py-1.5 rounded-full shadow-lg">
                            -{{ $pro->solde }}% OFF
                        </div>
                    @endif
                </div>

                <!-- Product Details -->
                <div class="p-8 md:p-12 flex flex-col justify-center">
                    <div class="mb-6">
                        <span
                            class="inline-block bg-eco-green/10 text-eco-green text-sm font-semibold px-3 py-1 rounded-full mb-3">
                            {{ $pro->categorie }}
                        </span>
                        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $pro->nom }}</h1>

                        <div class="flex items-center space-x-4 mb-6">
                            @if($pro->solde > 0)
                                @php
                                    $finalPrice = $pro->prix - ($pro->prix * $pro->solde / 100);
                                @endphp
                                <div class="flex flex-col">
                                    <span class="text-3xl font-bold text-eco-green">{{ number_format($finalPrice, 2) }}
                                        DH</span>
                                    <span class="text-sm text-gray-400 line-through">was
                                        {{ number_format($pro->prix, 2) }} DH</span>
                                </div>
                            @else
                                <span class="text-3xl font-bold text-gray-900">{{ number_format($pro->prix, 2) }} DH</span>
                            @endif
                        </div>
                    </div>

                    <div class="prose text-gray-600 mb-8">
                        <p class="leading-relaxed">
                            Experience premium quality with our {{ $pro->nom }}. Designed for athletes who demand the
                            best in performance and sustainability. Made with eco-friendly materials to help you reach your
                            goals while protecting the planet.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 mt-auto">
                        <button
                            class="flex-1 bg-eco-green hover:bg-green-700 text-white font-bold py-4 px-8 rounded-xl transition-all shadow-lg shadow-green-200 flex items-center justify-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span>Add to Cart</span>
                        </button>
                        <a href="{{ url('/espaceclient') }}"
                            class="flex-1 border-2 border-gray-200 hover:border-gray-300 text-gray-700 font-bold py-4 px-8 rounded-xl transition-all flex items-center justify-center">
                            Back to Shop
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Products Section (Placeholder) -->
        <div class="max-w-6xl mx-auto mt-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">You might also like</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <!-- We could implement related products loop here later -->
            </div>
        </div>
    </div>
@endsection