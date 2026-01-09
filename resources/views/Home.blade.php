@extends('Layout')

@section('title', 'EcoSport - Premium Eco-Friendly Sport Products')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-eco-green to-green-700 text-white py-20 md:py-32">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-block mb-4 px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-medium">
                ♻️ 100% Eco-Friendly Materials
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Elevate Your Game with <br><span class="text-yellow-300">Sustainable Sport Gear</span>
            </h1>
            <p class="text-lg md:text-xl mb-8 text-green-100 max-w-2xl mx-auto">
                Performance meets sustainability. Discover premium sport products that help you achieve your goals while protecting the planet.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/products" class="inline-block px-8 py-4 bg-cta-accent hover:bg-yellow-500 text-white font-semibold rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
                    Shop Now
                </a>
                <a href="/about" class="inline-block px-8 py-4 bg-white/10 hover:bg-white/20 backdrop-blur-sm text-white font-semibold rounded-lg border-2 border-white/30 transition-all duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </div>
    
    <!-- Decorative Wave -->
    <div class="absolute bottom-0 left-0 right-0">
        <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
            <path d="M0 0L60 10C120 20 240 40 360 46.7C480 53 600 47 720 43.3C840 40 960 40 1080 46.7C1200 53 1320 67 1380 73.3L1440 80V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0V0Z" fill="white"/>
        </svg>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-eco-green/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-eco-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-text-main">Eco-Friendly</h3>
                <p class="text-text-muted">Made from sustainable materials that care for our planet</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-eco-green/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-eco-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-text-main">High Performance</h3>
                <p class="text-text-muted">Premium quality designed for athletes and active lifestyles</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-eco-green/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-eco-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-text-main">Fair Pricing</h3>
                <p class="text-text-muted">Quality products at competitive prices, directly from us</p>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-16 bg-section-bg">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-text-main mb-4">
                Featured <span class="text-eco-green">Products</span>
            </h2>
            <p class="text-text-muted max-w-2xl mx-auto">
                Discover our best-selling eco-friendly sport gear
            </p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Product Card 1 -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                <div class="relative overflow-hidden bg-gray-100 aspect-square">
                    <div class="absolute top-3 left-3 z-10">
                        <span class="inline-block px-3 py-1 bg-success text-white text-xs font-semibold rounded-full">ECO</span>
                    </div>
                    <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=600&h=600&fit=crop" alt="T-Shirt Sport" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-text-main mb-1">T-Shirt Performance Eco</h3>
                    <p class="text-sm text-text-muted mb-3">Coton biologique respirant</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-eco-green">29,99€</span>
                        <button class="px-4 py-2 bg-cta-accent hover:bg-yellow-500 text-white text-sm font-semibold rounded-lg transition-colors">
                            Ajouter
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Product Card 2 -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                <div class="relative overflow-hidden bg-gray-100 aspect-square">
                    <div class="absolute top-3 left-3 z-10">
                        <span class="inline-block px-3 py-1 bg-success text-white text-xs font-semibold rounded-full">ECO</span>
                    </div>
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=600&h=600&fit=crop" alt="Running Shoes" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-text-main mb-1">Chaussures de Running</h3>
                    <p class="text-sm text-text-muted mb-3">Matériaux recyclés</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-eco-green">89,99€</span>
                        <button class="px-4 py-2 bg-cta-accent hover:bg-yellow-500 text-white text-sm font-semibold rounded-lg transition-colors">
                            Ajouter
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Product Card 3 -->
            <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                <div class="relative overflow-hidden bg-gray-100 aspect-square">
                    <div class="absolute top-3 left-3 z-10">
                        <span class="inline-block px-3 py-1 bg-success text-white text-xs font-semibold rounded-full">ECO</span>
                    </div>
                    <img src="https://images.unsplash.com/photo-1601925260368-ae2f83cf8b7f?w=600&h=600&fit=crop" alt="Yoga Mat" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-text-main mb-1">Tapis Yoga Cork</h3>
                    <p class="text-sm text-text-muted mb-3">Liège naturel & caoutchouc</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xl font-bold text-eco-green">54,99€</span>
                        <button class="px-4 py-2 bg-cta-accent hover:bg-yellow-500 text-white text-sm font-semibold rounded-lg transition-colors">
                            Ajouter
                        </button>
                    </div>
                </div>
            </div>
           
        </div>
        
        <div class="text-center mt-12">
            <a href="/products" class="inline-block px-8 py-3 bg-eco-green hover:bg-green-700 text-white font-semibold rounded-lg transition-colors">
                View All Products
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-eco-green text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">
            Ready to Make a Difference?
        </h2>
        <p class="text-lg mb-8 text-green-100 max-w-2xl mx-auto">
            Join thousands of athletes who choose sustainable performance gear
        </p>
        <a href="/products" class="inline-block px-8 py-4 bg-cta-accent hover:bg-yellow-500 text-white font-semibold rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
            Start Shopping
        </a>
    </div>
</section>
@endsection