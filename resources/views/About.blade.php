@extends('Layout')

@section('title', 'About Us - Store4U Story')

@section('content')

<!-- Page Header -->
<section class="bg-section-bg py-12">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-text-main mb-4">
                About <span class="text-eco-green">Store4u</span>
            </h1>
            <p class="text-text-muted max-w-2xl mx-auto">
                The story of passion, performance, and planet
            </p>
        </div>
    </div>
</section>

<!-- Main Story Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            
            <!-- Introduction -->
            <div class="mb-16 text-center">
                <div class="w-20 h-20 bg-eco-green/10 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-eco-green" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-text-main mb-6">
                    Managed by One Passionate <span class="text-eco-green">Independent Seller</span>
                </h2>
                <div class="prose prose-lg max-w-none text-text-muted">
                    <p class="mb-4 text-lg leading-relaxed">
                        Hi! I'm the person behind Store4U. What started as a personal mission to find sustainable sport gear 
                        has grown into a carefully curated collection of eco-friendly products for athletes who care about 
                        their performance <span class="text-eco-green font-semibold">and</span> the planet.
                    </p>
                </div>
            </div>
            
            <!-- Values Grid -->
            <div class="grid md:grid-cols-2 gap-8 mb-16">
                
                <!-- Value 1 -->
                <div class="bg-white rounded-xl shadow-md p-8 border-t-4 border-eco-green">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-12 bg-eco-green/10 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-eco-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-text-main">Passion for Sport</h3>
                    </div>
                    <p class="text-text-muted leading-relaxed">
                        As an athlete myself, I understand what it takes to perform at your best. Every product in this store 
                        is something I'd use personally—tested for quality, comfort, and durability.
                    </p>
                </div>
                
                <!-- Value 2 -->
                <div class="bg-white rounded-xl shadow-md p-8 border-t-4 border-success">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-12 bg-success/10 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-success" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-text-main">Eco Commitment</h3>
                    </div>
                    <p class="text-text-muted leading-relaxed">
                        100% of our products are made from sustainable materials—organic cotton, recycled plastics, 
                        natural rubber, and bamboo. No compromises on our environmental responsibility.
                    </p>
                </div>
                
                <!-- Value 3 -->
                <div class="bg-white rounded-xl shadow-md p-8 border-t-4 border-cta-accent">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-12 bg-cta-accent/10 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-cta-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-text-main">Product Quality</h3>
                    </div>
                    <p class="text-text-muted leading-relaxed">
                        I personally vet every supplier and product. Quality is non-negotiable—these products need to 
                        meet the demands of real athletes while staying true to eco-friendly principles.
                    </p>
                </div>
                
                <!-- Value 4 -->
                <div class="bg-white rounded-xl shadow-md p-8 border-t-4 border-soft-earth">
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-12 h-12 bg-soft-earth/10 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-soft-earth" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-text-main">Trust & Reliability</h3>
                    </div>
                    <p class="text-text-muted leading-relaxed">
                        As a solo seller, your trust means everything to me. I'm committed to transparent communication, 
                        fast shipping, and standing behind every product I sell.
                    </p>
                </div>
                
            </div>
            
            <!-- Mission Statement -->
            <div class="bg-gradient-to-br from-eco-green to-green-700 text-white rounded-2xl p-12 text-center shadow-xl">
                <h3 class="text-2xl md:text-3xl font-bold mb-4">
                    My Mission
                </h3>
                <p class="text-lg leading-relaxed text-green-100 max-w-2xl mx-auto">
                    To provide <span class="font-semibold text-yellow-300">high-performance sport products</span> that don't 
                    cost the earth. I believe athletes shouldn't have to choose between their goals and the planet's future.
                </p>
            </div>
            
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-16 bg-section-bg">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-text-main mb-12">
                Why Choose <span class="text-eco-green">Store4U</span>?
            </h2>
            
            <div class="space-y-6">
                
                <!-- Reason 1 -->
                <div class="bg-white rounded-xl shadow-md p-6 flex items-start space-x-4 hover:shadow-lg transition-shadow">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-eco-green rounded-full flex items-center justify-center text-white font-bold">
                            1
                        </div>
                    </div>
                    <div>
                        <h4 class="font-semibold text-lg text-text-main mb-2">Direct From Source</h4>
                        <p class="text-text-muted">
                            No middlemen means better prices for you and more support for sustainable manufacturers.
                        </p>
                    </div>
                </div>
                
                <!-- Reason 2 -->
                <div class="bg-white rounded-xl shadow-md p-6 flex items-start space-x-4 hover:shadow-lg transition-shadow">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-eco-green rounded-full flex items-center justify-center text-white font-bold">
                            2
                        </div>
                    </div>
                    <div>
                        <h4 class="font-semibold text-lg text-text-main mb-2">Carefully Curated Selection</h4>
                        <p class="text-text-muted">
                            Every product is hand-picked and tested. If it's not good enough for me, it won't be here.
                        </p>
                    </div>
                </div>
                
                <!-- Reason 3 -->
                <div class="bg-white rounded-xl shadow-md p-6 flex items-start space-x-4 hover:shadow-lg transition-shadow">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-eco-green rounded-full flex items-center justify-center text-white font-bold">
                            3
                        </div>
                    </div>
                    <div>
                        <h4 class="font-semibold text-lg text-text-main mb-2">Personal Customer Service</h4>
                        <p class="text-text-muted">
                            When you contact us, you're talking directly to me—no call centers, no bots. Just real help.
                        </p>
                    </div>
                </div>
                
                <!-- Reason 4 -->
                <div class="bg-white rounded-xl shadow-md p-6 flex items-start space-x-4 hover:shadow-lg transition-shadow">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 bg-eco-green rounded-full flex items-center justify-center text-white font-bold">
                            4
                        </div>
                    </div>
                    <div>
                        <h4 class="font-semibold text-lg text-text-main mb-2">Sustainability Verified</h4>
                        <p class="text-text-muted">
                            I personally verify the eco-credentials of every supplier. You can trust that "eco" really means eco.
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-2xl mx-auto">
            <h2 class="text-3xl font-bold text-text-main mb-4">
                Join the Movement
            </h2>
            <p class="text-text-muted mb-8 text-lg">
                Every purchase supports sustainable manufacturing and helps reduce the environmental impact of sports gear.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                {{-- <a href="/products" class="inline-block px-8 py-4 bg-cta-accent hover:bg-yellow-500 text-white font-semibold rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
                    Shop Now
                </a> --}}
                <a href="{{route("visiteurs.products")}}" class="inline-block px-8 py-4 bg-cta-accent hover:bg-yellow-500 text-white font-semibold rounded-lg shadow-lg transform hover:scale-105 transition-all duration-300">
                    Shop Now
                </a>
                <a href="{{ route("email.form") }}" class="inline-block px-8 py-4 bg-eco-green hover:bg-green-700 text-white font-semibold rounded-lg transition-colors">
                    Get in Touch
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
