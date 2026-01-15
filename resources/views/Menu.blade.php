<nav class="container mx-auto px-4 py-4">
    <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <a href="/" class="flex items-center space-x-2">
                <img src="{{ asset('images/store4u_logo (1).png') }}" alt="Store4U Logo" class="h-12 w-auto">
            </a>
        </div>
        
        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center space-x-8">
            <a href="/" class="text-text-main hover:text-eco-green transition-colors font-medium">Home</a>
            {{-- <a href="/products" class="text-text-main hover:text-eco-green transition-colors font-medium">Shop</a> --}}
            <a href="/products" class="block py-2 text-text-main hover:text-eco-green transition-colors font-medium">Products</a>
            
            <a href="/about" class="text-text-main hover:text-eco-green transition-colors font-medium">About Us</a>
            <a href="/contact" class="text-text-main hover:text-eco-green transition-colors font-medium">Contact</a>
        </div>
        
        <!-- Cart & Actions -->
        <div class="flex items-center space-x-4">
            <button class="relative p-2 hover:bg-section-bg rounded-full transition-colors">
                <svg class="w-6 h-6 text-text-main" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                </svg>
                <span id="cartCount" class="absolute -top-1 -right-1 bg-eco-green text-white text-xs w-5 h-5 rounded-full flex items-center justify-center">0</span>
            </button>
            
            <!-- Mobile Menu Button -->
            <button id="mobileMenuBtn" class="md:hidden p-2 hover:bg-section-bg rounded-lg transition-colors">
                <svg id="menuIcon" class="w-6 h-6 text-text-main" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="closeIcon" class="w-6 h-6 text-text-main hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile Navigation -->
    <div id="mobileMenu" class="hidden md:hidden mt-4 pb-4 space-y-2 border-t pt-4">
        <a href="/" class="block py-2 text-text-main hover:text-eco-green transition-colors font-medium">Home</a>
        {{-- <a href="/products" class="block py-2 text-text-main hover:text-eco-green transition-colors font-medium">Shop</a> --}}
        <a href="/about" class="block py-2 text-text-main hover:text-eco-green transition-colors font-medium">About Us</a>
        <a href="/products" class="block py-2 text-text-main hover:text-eco-green transition-colors font-medium">Products</a>
        <a href="/contact" class="block py-2 text-text-main hover:text-eco-green transition-colors font-medium">Contact</a>
        
    </div>
</nav>

<script>
    // Mobile Menu Toggle
    document.getElementById('mobileMenuBtn').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobileMenu');
        const menuIcon = document.getElementById('menuIcon');
        const closeIcon = document.getElementById('closeIcon');
        
        mobileMenu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });
    
    // Cart counter functionality
    window.updateCartCount = function() {
        const cartCount = document.getElementById('cartCount');
        let currentCount = parseInt(cartCount.textContent) || 0;
        currentCount++;
        cartCount.textContent = currentCount;
        
        // Add animation
        cartCount.classList.add('scale-125');
        setTimeout(() => {
            cartCount.classList.remove('scale-125');
        }, 200);
    };
</script>