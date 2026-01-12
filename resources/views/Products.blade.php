@extends('Layout')

@section('title', 'Shop - Store4U Premium Products')

@section('content')

<!-- Page Header -->
<section class="bg-section-bg py-12">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-text-main mb-4">
                Our <span class="text-eco-green">Collection</span>
            </h1>
            <p class="text-text-muted max-w-2xl mx-auto">
                Browse our selection of premium eco-friendly sport products
            </p>
        </div>
    </div>
</section>

<!-- Filters & Products -->
<section class="py-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- Sidebar Filters -->
            <aside class="lg:w-64 flex-shrink-0">
                <div class="bg-white rounded-lg shadow-md p-6 sticky top-24">
                    <h3 class="font-bold text-lg mb-4 text-text-main">Filters</h3>
                    
                    <!-- Categories -->
                    <div class="mb-6">
                        <h4 class="font-semibold text-sm text-text-muted mb-3">Catégories</h4>
                        <div class="space-y-2 max-h-96 overflow-y-auto pr-2">
                            <label class="flex items-center cursor-pointer group">
                                <input type="checkbox" value="all" class="category-filter w-4 h-4 text-eco-green border-gray-300 rounded focus:ring-eco-green" checked>
                                <span class="ml-2 text-sm text-text-main group-hover:text-eco-green transition-colors">Tous les produits</span>
                            </label>
                            
                            <!-- Vêtements de sport -->
                            <div class="border-l-2 border-gray-200 pl-3 ml-2">
                                <p class="font-semibold text-xs text-eco-green mb-2">👕 Vêtements de sport</p>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="tshirts" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">T-shirts / débardeurs</span>
                                </label>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="shorts" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Shorts / pantalons</span>
                                </label>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="hoodies" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Sweats / hoodies</span>
                                </label>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="ensembles" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Ensembles survêtements</span>
                                </label>
                                <label class="flex items-center cursor-pointer group">
                                    <input type="checkbox" value="maillots" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Maillots d'équipe</span>
                                </label>
                            </div>
                            
                            <!-- Chaussures -->
                            <div class="border-l-2 border-gray-200 pl-3 ml-2">
                                <p class="font-semibold text-xs text-eco-green mb-2">👟 Chaussures</p>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="sneakers" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Sneakers / baskets</span>
                                </label>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="running" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Chaussures de running</span>
                                </label>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="football" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Chaussures de foot</span>
                                </label>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="basketball" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Chaussures de basket</span>
                                </label>
                                <label class="flex items-center cursor-pointer group">
                                    <input type="checkbox" value="training" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Chaussures de training</span>
                                </label>
                            </div>
                            
                            <!-- Accessoires -->
                            <div class="border-l-2 border-gray-200 pl-3 ml-2">
                                <p class="font-semibold text-xs text-eco-green mb-2">🎒 Accessoires</p>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="caps" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Casquettes / bonnets</span>
                                </label>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="socks" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Chaussettes sportives</span>
                                </label>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="gloves" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Gants (fitness, boxe)</span>
                                </label>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="protections" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Protections</span>
                                </label>
                                <label class="flex items-center cursor-pointer group">
                                    <input type="checkbox" value="bags" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Sacs de sport</span>
                                </label>
                            </div>
                            
                            <!-- Équipements -->
                            <div class="border-l-2 border-gray-200 pl-3 ml-2">
                                <p class="font-semibold text-xs text-eco-green mb-2">⚽ Équipements</p>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="balls" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Ballons</span>
                                </label>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="rackets" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Raquettes</span>
                                </label>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="weights" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Haltères / poids</span>
                                </label>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="yoga" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Tapis de yoga</span>
                                </label>
                                <label class="flex items-center cursor-pointer group">
                                    <input type="checkbox" value="ropes" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Cordes à sauter</span>
                                </label>
                            </div>
                            
                            <!-- Nutrition -->
                            <div class="border-l-2 border-gray-200 pl-3 ml-2">
                                <p class="font-semibold text-xs text-eco-green mb-2">🥤 Nutrition & Santé</p>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="protein" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Barres protéinées</span>
                                </label>
                                <label class="flex items-center cursor-pointer group mb-1">
                                    <input type="checkbox" value="shakers" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Shakers / bouteilles</span>
                                </label>
                                <label class="flex items-center cursor-pointer group">
                                    <input type="checkbox" value="supplements" class="category-filter w-3 h-3 text-eco-green border-gray-300 rounded focus:ring-eco-green">
                                    <span class="ml-2 text-xs text-text-main group-hover:text-eco-green transition-colors">Suppléments</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Price Range -->
                    <div class="mb-6">
                        <h4 class="font-semibold text-sm text-text-muted mb-3">Price Range</h4>
                        <div class="space-y-2">
                            <label class="flex items-center cursor-pointer group">
                                <input type="radio" name="price" class="w-4 h-4 text-eco-green border-gray-300 focus:ring-eco-green">
                                <span class="ml-2 text-sm text-text-main group-hover:text-eco-green transition-colors">All Prices</span>
                            </label>
                            <label class="flex items-center cursor-pointer group">
                                <input type="radio" name="price" class="w-4 h-4 text-eco-green border-gray-300 focus:ring-eco-green">
                                <span class="ml-2 text-sm text-text-main group-hover:text-eco-green transition-colors">Under $25</span>
                            </label>
                            <label class="flex items-center cursor-pointer group">
                                <input type="radio" name="price" class="w-4 h-4 text-eco-green border-gray-300 focus:ring-eco-green">
                                <span class="ml-2 text-sm text-text-main group-hover:text-eco-green transition-colors">$25 - $50</span>
                            </label>
                            <label class="flex items-center cursor-pointer group">
                                <input type="radio" name="price" class="w-4 h-4 text-eco-green border-gray-300 focus:ring-eco-green">
                                <span class="ml-2 text-sm text-text-main group-hover:text-eco-green transition-colors">$50 - $100</span>
                            </label>
                            <label class="flex items-center cursor-pointer group">
                                <input type="radio" name="price" class="w-4 h-4 text-eco-green border-gray-300 focus:ring-eco-green">
                                <span class="ml-2 text-sm text-text-main group-hover:text-eco-green transition-colors">Over $100</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Eco Badge -->
                    <div class="bg-eco-green/10 rounded-lg p-4 border border-eco-green/20">
                        <div class="flex items-center space-x-2 mb-2">
                            <svg class="w-5 h-5 text-eco-green" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-semibold text-sm text-eco-green">Eco-Certified</span>
                        </div>
                        <p class="text-xs text-text-muted">All products made from sustainable materials</p>
                    </div>
                </div>
            </aside>
            
            <!-- Products Grid -->
            <div class="flex-1">
                <!-- Sort Bar -->
                <div class="bg-white rounded-lg shadow-md p-4 mb-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <p class="text-sm text-text-muted">
                        Showing <span id="productCount" class="font-semibold text-text-main">12</span> products
                    </p>
                    <div class="flex items-center space-x-2">
                        <label class="text-sm text-text-muted">Sort by:</label>
                        <select id="sortSelect" class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-eco-green focus:border-transparent">
                            <option value="featured">Featured</option>
                            <option value="price-asc">Price: Low to High</option>
                            <option value="price-desc">Price: High to Low</option>
                            <option value="newest">Newest</option>
                        </select>
                    </div>
                </div>
                
                @php
                    $products = [
                        ['name' => 'T-Shirt Performance Eco', 'desc' => 'Coton biologique respirant', 'price' => 29.99, 'category' => 'tshirts', 'img' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=600&h=600&fit=crop'],
                        ['name' => 'Chaussures Run Pro', 'desc' => 'Matériaux recyclés', 'price' => 89.99, 'category' => 'running', 'img' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=600&h=600&fit=crop'],
                        ['name' => 'Short de Training', 'desc' => 'Tissu technique respirant', 'price' => 34.99, 'category' => 'shorts', 'img' => 'https://images.unsplash.com/photo-1591195853828-11db59a44f6b?w=600&h=600&fit=crop'],
                        ['name' => 'Bouteille Eco Sport', 'desc' => '750ml acier inoxydable', 'price' => 24.99, 'category' => 'shakers', 'img' => 'https://images.unsplash.com/photo-1602143407151-7111542de6e8?w=600&h=600&fit=crop'],
                        ['name' => 'Sac de Sport Recyclé', 'desc' => 'Plastique océanique recyclé', 'price' => 39.99, 'category' => 'bags', 'img' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=600&h=600&fit=crop'],
                        ['name' => 'Tapis Yoga Liège', 'desc' => 'Liège naturel antidérapant', 'price' => 54.99, 'category' => 'yoga', 'img' => 'https://images.unsplash.com/photo-1601925260368-ae2f83cf8b7f?w=600&h=600&fit=crop'],
                        ['name' => 'Hoodie Performance', 'desc' => 'Coton bio ultra doux', 'price' => 59.99, 'category' => 'hoodies', 'img' => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=600&h=600&fit=crop'],
                        ['name' => 'Basket Pro Rebound', 'desc' => 'Amorti haute performance', 'price' => 119.99, 'category' => 'basketball', 'img' => 'https://images.unsplash.com/photo-1608231387042-66d1773070a5?w=600&h=600&fit=crop'],
                        ['name' => 'Gants de Training', 'desc' => 'Protection optimale', 'price' => 19.99, 'category' => 'gloves', 'img' => 'https://images.unsplash.com/photo-1517836357463-d25dfeac3438?w=600&h=600&fit=crop'],
                        ['name' => 'Shaker Protein Pro', 'desc' => 'Sans BPA, 700ml', 'price' => 16.99, 'category' => 'shakers', 'img' => 'https://images.unsplash.com/photo-1622597467836-f3285f2131b8?w=600&h=600&fit=crop'],
                        ['name' => 'Bandes de Résistance', 'desc' => 'Latex naturel, set de 5', 'price' => 27.99, 'category' => 'weights', 'img' => 'https://images.unsplash.com/photo-1598289431512-b97b0917affc?w=600&h=600&fit=crop'],
                        ['name' => 'Casquette Sport Pro', 'desc' => 'Polyester recyclé mesh', 'price' => 22.99, 'category' => 'caps', 'img' => 'https://images.unsplash.com/photo-1588850561407-ed78c282e89b?w=600&h=600&fit=crop'],
                        ['name' => 'Chaussettes Running', 'desc' => 'Antifriction, respirantes', 'price' => 12.99, 'category' => 'socks', 'img' => 'https://images.unsplash.com/photo-1460353581641-37baddab0fa2?w=600&h=600&fit=crop'],
                        ['name' => 'Ensemble Survêtement', 'desc' => 'Coupe athlétique', 'price' => 79.99, 'category' => 'ensembles', 'img' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=600&h=600&fit=crop'],
                        ['name' => 'Maillot Équipe Green', 'desc' => 'Tissu recyclé officiel', 'price' => 69.99, 'category' => 'maillots', 'img' => 'https://images.unsplash.com/photo-1580714200454-4a47e2b66b81?w=600&h=600&fit=crop'],
                        ['name' => 'Sneakers Urbaines Eco', 'desc' => 'Semelle mousse recyclée', 'price' => 99.99, 'category' => 'sneakers', 'img' => 'https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=600&h=600&fit=crop'],
                        ['name' => 'Chaussures de Foot Pro', 'desc' => 'Crampons biodégradables', 'price' => 109.99, 'category' => 'football', 'img' => 'https://images.unsplash.com/photo-1579952363873-27f3bade9f55?w=600&h=600&fit=crop'],
                        ['name' => 'Chaussures Training Grip', 'desc' => 'Stabilité multi-surfaces', 'price' => 74.99, 'category' => 'training', 'img' => 'https://images.unsplash.com/photo-1515296726888-31e187e4bb98?w=600&h=600&fit=crop'],
                        ['name' => 'Coquilles & Protections', 'desc' => 'Légères et recyclées', 'price' => 31.99, 'category' => 'protections', 'img' => 'https://images.unsplash.com/photo-1599058917212-d750089bc07e?w=600&h=600&fit=crop'],
                        ['name' => 'Ballon Match Pro', 'desc' => 'Surface microtexturée', 'price' => 29.49, 'category' => 'balls', 'img' => 'https://images.unsplash.com/photo-1575361204480-aadea25e6e68?w=600&h=600&fit=crop'],
                        ['name' => 'Raquette Multi-Sport', 'desc' => 'Cordage écologique', 'price' => 129.00, 'category' => 'rackets', 'img' => 'https://images.unsplash.com/photo-1617882767284-df11cfeaa0c2?w=600&h=600&fit=crop'],
                        ['name' => 'Corde à Sauter Pro', 'desc' => 'Roulements fluides', 'price' => 14.50, 'category' => 'ropes', 'img' => 'https://images.unsplash.com/photo-1598971639058-fab3c3109a00?w=600&h=600&fit=crop'],
                        ['name' => 'Barres Protéinées Bio', 'desc' => 'Protéines végétales', 'price' => 21.90, 'category' => 'protein', 'img' => 'https://images.unsplash.com/photo-1579954115545-a95591f28bfc?w=600&h=600&fit=crop'],
                        ['name' => 'Pack Suppléments Vital', 'desc' => 'Oméga + vitamines', 'price' => 34.50, 'category' => 'supplements', 'img' => 'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=600&h=600&fit=crop'],
                        ['name' => 'T-Shirt DryFit', 'desc' => 'Anti-transpiration', 'price' => 26.99, 'category' => 'tshirts', 'img' => 'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=600&h=600&fit=crop'],
                        ['name' => 'Short Flex Move', 'desc' => 'Élastique et léger', 'price' => 32.99, 'category' => 'shorts', 'img' => 'https://images.unsplash.com/photo-1586790170083-2f9ceadc732d?w=600&h=600&fit=crop'],
                        ['name' => 'Hoodie Zippé Air', 'desc' => 'Coupe ergonomique', 'price' => 64.99, 'category' => 'hoodies', 'img' => 'https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?w=600&h=600&fit=crop'],
                        ['name' => 'Chaussures Trail Grip', 'desc' => 'Accroche tous terrains', 'price' => 92.50, 'category' => 'running', 'img' => 'https://images.unsplash.com/photo-1539185441755-769473a23570?w=600&h=600&fit=crop'],
                        ['name' => 'Basket Dunk Elite', 'desc' => 'Tige maintenue', 'price' => 124.00, 'category' => 'basketball', 'img' => 'https://images.unsplash.com/photo-1516478177764-9fe5bd7e9717?w=600&h=600&fit=crop'],
                        ['name' => 'Casquette Ultralight', 'desc' => 'Anti-UV, respirante', 'price' => 18.99, 'category' => 'caps', 'img' => 'https://images.unsplash.com/photo-1575428652377-a2d80e2277fc?w=600&h=600&fit=crop'],
                        ['name' => 'Sac à Dos Gym', 'desc' => 'Compartiments aérés', 'price' => 44.99, 'category' => 'bags', 'img' => 'https://images.unsplash.com/photo-1622560480605-d83c853bc5c3?w=600&h=600&fit=crop'],
                        ['name' => 'Bloc Yoga Nature', 'desc' => 'Liège naturel', 'price' => 48.99, 'category' => 'yoga', 'img' => 'https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?w=600&h=600&fit=crop'],
                        ['name' => 'Set Haltères Modulables', 'desc' => 'Poids ajustables', 'price' => 59.99, 'category' => 'weights', 'img' => 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=600&h=600&fit=crop'],
                        ['name' => 'Gants Grip Power', 'desc' => 'Paume silicone', 'price' => 27.49, 'category' => 'gloves', 'img' => 'https://images.unsplash.com/photo-1587691592099-24045742c181?w=600&h=600&fit=crop'],
                        ['name' => 'Chaussettes Compression', 'desc' => 'Maintien mollets', 'price' => 9.99, 'category' => 'socks', 'img' => 'https://images.unsplash.com/photo-1586363104862-3a5e2ab60d99?w=600&h=600&fit=crop'],
                        ['name' => 'Bouteille Isotherme', 'desc' => 'Garde 12h au frais', 'price' => 19.99, 'category' => 'shakers', 'img' => 'https://images.unsplash.com/photo-1523362628745-0c100150b504?w=600&h=600&fit=crop'],
                        ['name' => 'Protein Vegan Mix', 'desc' => 'Saveur vanille', 'price' => 25.99, 'category' => 'protein', 'img' => 'https://images.unsplash.com/photo-1593095948071-474c5cc2989d?w=600&h=600&fit=crop'],
                        ['name' => 'Pack Recovery', 'desc' => 'BCAA + électrolytes', 'price' => 42.99, 'category' => 'supplements', 'img' => 'https://images.unsplash.com/photo-1591434704916-b6a3c6e11113?w=600&h=600&fit=crop'],
                        ['name' => 'Chaussures Foot Speed', 'desc' => 'Tige légère', 'price' => 114.00, 'category' => 'football', 'img' => 'https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=600&h=600&fit=crop'],
                        ['name' => 'Sneakers Street Eco', 'desc' => 'Look urbain', 'price' => 89.00, 'category' => 'sneakers', 'img' => 'https://images.unsplash.com/photo-1560769629-975ec94e6a86?w=600&h=600&fit=crop'],
                        ['name' => 'Chaussures Training Core', 'desc' => 'Drop minimal', 'price' => 68.50, 'category' => 'training', 'img' => 'https://images.unsplash.com/photo-1575537302964-96cd47c06b1b?w=600&h=600&fit=crop'],
                        ['name' => 'Ballon Entraînement', 'desc' => 'Surface texturée', 'price' => 34.99, 'category' => 'balls', 'img' => 'https://images.unsplash.com/photo-1614632537197-38a17061c2bd?w=600&h=600&fit=crop'],
                        ['name' => 'Raquette Elite', 'desc' => 'Cadre carbone', 'price' => 139.99, 'category' => 'rackets', 'img' => 'https://images.unsplash.com/photo-1622163642998-1ea32b0bbc67?w=600&h=600&fit=crop'],
                        ['name' => 'Corde Speed Rope', 'desc' => 'Réglable aluminium', 'price' => 17.99, 'category' => 'ropes', 'img' => 'https://images.unsplash.com/photo-1599058917212-d750089bc07e?w=600&h=600&fit=crop'],
                        ['name' => 'Maillot Collector', 'desc' => 'Édition limitée', 'price' => 74.99, 'category' => 'maillots', 'img' => 'https://images.unsplash.com/photo-1579952363873-27f3bade9f55?w=600&h=600&fit=crop'],
                        ['name' => 'Ensemble Travel', 'desc' => 'Polaire légère', 'price' => 88.00, 'category' => 'ensembles', 'img' => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=600&h=600&fit=crop'],
                        ['name' => 'Genouillères Performance', 'desc' => 'Maintien articulations', 'price' => 36.99, 'category' => 'protections', 'img' => 'https://images.unsplash.com/photo-1526661934754-ff93f5f840a9?w=600&h=600&fit=crop'],
                        ['name' => 'Short Minimal', 'desc' => 'Séchage rapide', 'price' => 29.49, 'category' => 'shorts', 'img' => 'https://images.unsplash.com/photo-1591195853828-11db59a44f6b?w=600&h=600&fit=crop'],
                        ['name' => 'T-Shirt Daily', 'desc' => 'Fibre bambou', 'price' => 24.90, 'category' => 'tshirts', 'img' => 'https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?w=600&h=600&fit=crop'],
                        ['name' => 'Sac Weekend Sport', 'desc' => 'Volume 40L', 'price' => 52.00, 'category' => 'bags', 'img' => 'https://images.unsplash.com/photo-1547949003-9792a18a2601?w=600&h=600&fit=crop'],
                    ];
                @endphp

                <!-- Products Grid -->
                <div id="productsGrid" class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                    @foreach($products as $product)
                        <div class="product-card bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group" data-category="{{ $product['category'] }}" data-price="{{ $product['price'] }}">
                            <div class="relative overflow-hidden bg-gray-100 aspect-square">
                                <div class="absolute top-3 left-3 z-10">
                                    <span class="inline-block px-3 py-1 bg-success text-white text-xs font-semibold rounded-full">ECO</span>
                                </div>
                                <img src="{{ $product['img'] }}" alt="{{ e($product['name']) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                            </div>
                            <div class="p-5">
                                <h3 class="font-semibold text-text-main mb-1">{{ $product['name'] }}</h3>
                                <p class="text-sm text-text-muted mb-3">{{ $product['desc'] }}</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-2xl font-bold text-eco-green">{{ number_format($product['price'], 2, ',', '') }}€</span>
                                    <button class="add-to-cart-btn px-4 py-2 bg-cta-accent hover:bg-yellow-500 text-white text-sm font-semibold rounded-lg transition-all transform hover:scale-105">
                                        Ajouter
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- Pagination -->
                <div id="paginationContainer" class="mt-12 flex justify-center">
                    <nav class="flex items-center space-x-2">
                        <button id="prevBtn" class="px-3 py-2 border border-gray-300 rounded-lg text-text-muted hover:bg-eco-green hover:text-white hover:border-eco-green transition-colors">
                            Previous
                        </button>
                        <div id="pageNumbers" class="flex items-center space-x-2"></div>
                        <button id="nextBtn" class="px-3 py-2 border border-gray-300 rounded-lg text-text-muted hover:bg-eco-green hover:text-white hover:border-eco-green transition-colors">
                            Next
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // State variables
    let currentPage = 1;
    const productsPerPage = 9;
    let allProducts = Array.from(document.querySelectorAll('.product-card'));
    let filteredProducts = [...allProducts];
    
    // Get elements
    const categoryFilters = document.querySelectorAll('.category-filter');
    const allCheckbox = document.querySelector('.category-filter[value="all"]');
    const productCount = document.getElementById('productCount');
    const productsGrid = document.getElementById('productsGrid');
    const sortSelect = document.getElementById('sortSelect');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const pageNumbers = document.getElementById('pageNumbers');
    
    // Attach cart increment using event delegation
    productsGrid.addEventListener('click', function(e) {
        if (e.target.classList.contains('add-to-cart-btn')) {
            if (typeof window.updateCartCount === 'function') {
                window.updateCartCount();
            }
        }
    });
    
    // Filter functionality
    function filterProducts() {
        const selectedCategories = Array.from(categoryFilters)
            .filter(checkbox => checkbox.checked && checkbox.value !== 'all')
            .map(checkbox => checkbox.value);
        
        if (selectedCategories.length === 0 || allCheckbox.checked) {
            filteredProducts = [...allProducts];
        } else {
            filteredProducts = allProducts.filter(product => 
                selectedCategories.includes(product.dataset.category)
            );
        }
        
        currentPage = 1;
        sortProducts();
        displayProducts();
        updatePagination();
        updateProductCount();
    }
    
    // Sort functionality
    function sortProducts() {
        const sortValue = sortSelect.value;
        
        filteredProducts.sort((a, b) => {
            const priceA = parseFloat(a.dataset.price);
            const priceB = parseFloat(b.dataset.price);
            
            switch(sortValue) {
                case 'price-asc':
                    return priceA - priceB;
                case 'price-desc':
                    return priceB - priceA;
                case 'newest':
                case 'featured':
                default:
                    return 0;
            }
        });
    }
    
    // Display products for current page
    function displayProducts() {
        const start = (currentPage - 1) * productsPerPage;
        const end = start + productsPerPage;
        const productsToShow = filteredProducts.slice(start, end);
        
        // Clear grid
        productsGrid.innerHTML = '';
        
        // Append products to show
        productsToShow.forEach(product => {
            productsGrid.appendChild(product);
        });
        
        // If no products, show message
        if (filteredProducts.length === 0) {
            productsGrid.innerHTML = '<div class="col-span-full text-center py-12"><p class="text-text-muted text-lg">Aucun produit trouvé</p></div>';
        }
    }
    
    // Update pagination buttons
    function updatePagination() {
        const totalPages = Math.ceil(filteredProducts.length / productsPerPage);
        
        // Clear page numbers
        pageNumbers.innerHTML = '';
        
        // Create page buttons
        for (let i = 1; i <= totalPages; i++) {
            const pageBtn = document.createElement('button');
            pageBtn.textContent = i;
            pageBtn.className = i === currentPage 
                ? 'px-4 py-2 bg-eco-green text-white rounded-lg font-semibold'
                : 'px-4 py-2 border border-gray-300 rounded-lg text-text-muted hover:bg-eco-green hover:text-white hover:border-eco-green transition-colors';
            
            pageBtn.addEventListener('click', () => {
                currentPage = i;
                displayProducts();
                updatePagination();
                scrollToTop();
            });
            
            pageNumbers.appendChild(pageBtn);
        }
        
        // Enable/disable prev/next buttons
        prevBtn.disabled = currentPage === 1;
        nextBtn.disabled = currentPage === totalPages || totalPages === 0;
        
        prevBtn.className = currentPage === 1
            ? 'px-3 py-2 border border-gray-300 rounded-lg text-gray-300 cursor-not-allowed'
            : 'px-3 py-2 border border-gray-300 rounded-lg text-text-muted hover:bg-eco-green hover:text-white hover:border-eco-green transition-colors';
        
        nextBtn.className = (currentPage === totalPages || totalPages === 0)
            ? 'px-3 py-2 border border-gray-300 rounded-lg text-gray-300 cursor-not-allowed'
            : 'px-3 py-2 border border-gray-300 rounded-lg text-text-muted hover:bg-eco-green hover:text-white hover:border-eco-green transition-colors';
    }
    
    // Update product count
    function updateProductCount() {
        productCount.textContent = filteredProducts.length;
    }
    
    // Scroll to top
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
    
    // Event listeners
    categoryFilters.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            if (this.value === 'all' && this.checked) {
                categoryFilters.forEach(cb => {
                    if (cb.value !== 'all') cb.checked = false;
                });
            } else if (this.value !== 'all' && this.checked) {
                allCheckbox.checked = false;
            }
            
            // Check if no category is selected
            const anyChecked = Array.from(categoryFilters).some(cb => cb.checked);
            if (!anyChecked) {
                allCheckbox.checked = true;
            }
            
            filterProducts();
        });
    });
    
    sortSelect.addEventListener('change', function() {
        sortProducts();
        displayProducts();
    });
    
    prevBtn.addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--;
            displayProducts();
            updatePagination();
            scrollToTop();
        }
    });
    
    nextBtn.addEventListener('click', function() {
        const totalPages = Math.ceil(filteredProducts.length / productsPerPage);
        if (currentPage < totalPages) {
            currentPage++;
            displayProducts();
            updatePagination();
            scrollToTop();
        }
    });
    
    // Initial render
    displayProducts();
    updatePagination();
    updateProductCount();
});
</script>

@endsection