@extends('Layout')

@section('title', 'Your Cart')

@section('content')
    <!-- <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold mb-6">Your Shopping Cart</h1>
            <p>Your cart is currently empty.</p>
        </div> -->
    @include('incs.flash')

    <div class="container max-w-7xl mx-auto px-4 py-8">
        @include('incs.flash')

        <div class="bg-white shadow-xl rounded-lg overflow-hidden border border-gray-100">
            <!-- Desktop Table View -->
            <div class="overflow-x-auto hidden md:block">
                <table id="cart" class="w-full text-left border-collapse whitespace-nowrap">
                    <thead>
                        <tr class="bg-section-bg text-text-main text-sm uppercase tracking-wider border-b border-gray-200">
                            <th class="p-4 font-semibold">Image</th>
                            <th class="p-4 font-semibold">Name</th>
                            <th class="p-4 font-semibold">Category</th>
                            <th class="p-4 font-semibold">Price</th>
                            <th class="p-4 font-semibold">Solde</th>
                            <th class="p-4 font-semibold">Prix Fresh</th>
                            <th class="p-4 font-semibold">Quantity</th>
                            <th class="p-4 font-semibold text-center">Subtotal</th>
                            <th class="p-4 font-semibold text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @php $total = 0 @endphp
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)
                                @php 
                                    $price = $details['price'];
                                    $solde = isset($details['soldeout']) ? $details['soldeout'] : 0;
                                    $fresh_price = $price - ($price * ($solde / 100));
                                    $quantity = $details['quantity'];
                                    $original_subtotal = $price * $quantity;
                                    $fresh_subtotal = $fresh_price * $quantity;
                                    $total += $fresh_subtotal; 
                                @endphp
                                <tr class="cart-item hover:bg-gray-50 transition-colors duration-200">
                                    <td class="p-4" data-th="Image">
                                        <div class="w-20 h-20 rounded-md overflow-hidden border border-gray-200">
                                            <img src="{{ $details['photo'] }}" alt="{{ $details['name'] }}" class="w-full h-full object-cover object-center" />
                                        </div>
                                    </td>
                                    <td class="p-4 font-medium text-text-main" data-th="Name">
                                        {{ $details['name'] }}
                                    </td>
                                    <td class="p-4 text-text-muted" data-th="Category">
                                        {{ $details['category'] ?? 'N/A' }}
                                    </td>
                                    <td class="p-4 text-eco-green font-medium" data-th="Price">
                                        {{ number_format($price, 2) }} DH
                                    </td>
                                    <td class="p-4 text-text-muted" data-th="Solde">
                                        {{ $solde }}%
                                    </td>
                                    <td class="p-4 text-text-muted" data-th="Prix Fresh">
                                        {{ number_format($fresh_price, 2) }} DH
                                    </td>
                                    <td class="p-4" data-th="Quantity">
                                        <input type="number" value="{{ $quantity }}" 
                                            class="form-control quantity w-20 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-eco-green focus:border-transparent text-center"
                                        />
                                    </td>
                                    <td class="p-4 text-center" data-th="Subtotal">
                                        @if($solde > 0)
                                            <div class="text-xs text-gray-400 line-through">{{ number_format($original_subtotal, 2) }} DH</div>
                                        @endif
                                        <div class="font-bold text-eco-green">{{ number_format($fresh_subtotal, 2) }} DH</div>
                                    </td>
                                    <td class="p-4 text-right actions" data-th="Actions">
                                        <div class="flex items-center justify-end space-x-2">
                                            <button class="update-cart text-white rounded-lg py-2 px-4 bg-blue-500 hover:bg-blue-700 font-medium transition-colors duration-200" data-id="{{ $id }}">
                                                Save
                                            </button>
                                            <button class="remove-from-cart delete text-white rounded-lg py-2 px-4 bg-red-500 hover:bg-red-700 font-medium transition-colors duration-200 ml-2" data-id="{{ $id }}">
                                                Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="9" class="p-8 text-center text-text-muted">
                                    <div class="flex flex-col items-center justify-center space-y-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                        <p class="text-lg">Your cart is currently empty.</p>
                                        <a href="{{ url('/visiteurs/products') }}" class="inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-eco-green hover:bg-green-700 transition-colors duration-200">
                                            Start Shopping
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                    <tfoot class="bg-gray-50 border-t border-gray-200">
                        <tr>
                            <td colspan="9" class="p-6">
                                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 text-right">
                                    <div class="w-full md:w-auto text-left">
                                        <a href="{{ url('/visiteurs/products') }}" class="inline-flex items-center text-eco-green hover:text-green-700 font-medium transition-colors duration-200 group">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 transform group-hover:-translate-x-1 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                            Continue Shopping
                                        </a>
                                    </div>
                                    <div class="text-xl font-bold text-text-main">
                                        Total: <span class="text-eco-green ml-2">{{ number_format($total, 2) }} DH</span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <!-- Mobile Card View -->
            <div class="block md:hidden">
                @if(session('cart'))
                    <div class="space-y-4 p-4">
                        @foreach(session('cart') as $id => $details)
                            @php 
                                $price = $details['price'];
                                $solde = isset($details['soldeout']) ? $details['soldeout'] : 0;
                                $fresh_price = $price - ($price * ($solde / 100));
                                $quantity = $details['quantity'];
                                $original_subtotal = $price * $quantity;
                                $fresh_subtotal = $fresh_price * $quantity;
                            @endphp
                            <div class="cart-item bg-white p-4 rounded-lg border border-gray-200 shadow-sm flex flex-col gap-4">
                                <!-- Header: Image and Basic Info -->
                                <div class="flex items-start gap-4">
                                    <div class="w-20 h-20 flex-shrink-0 rounded-md overflow-hidden border border-gray-200">
                                        <img src="{{ $details['photo'] }}" alt="{{ $details['name'] }}" class="w-full h-full object-cover" />
                                    </div>
                                    <div class="flex-grow">
                                        <h3 class="font-bold text-text-main text-lg">{{ $details['name'] }}</h3>
                                        <p class="text-sm text-text-muted">{{ $details['category'] ?? 'N/A' }}</p>
                                        <div class="mt-1">
                                            @if($solde > 0)
                                                <span class="text-xs text-gray-400 line-through mr-2">{{ number_format($price, 2) }} DH</span>
                                                <span class="text-xs bg-red-100 text-red-600 px-1.5 py-0.5 rounded">{{ $solde }}% OFF</span>
                                            @endif
                                        </div>
                                        <div class="text-eco-green font-bold mt-1">{{ number_format($fresh_price, 2) }} DH</div>
                                    </div>
                                </div>

                                <!-- Quantity and Subtotal -->
                                <div class="flex items-center justify-between bg-gray-50 p-3 rounded-md">
                                    <div class="flex items-center gap-2">
                                        <span class="text-sm font-medium text-gray-600">Qty:</span>
                                        <input type="number" value="{{ $quantity }}" 
                                            class="form-control quantity w-16 px-2 py-1 border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-eco-green text-center text-sm"
                                        />
                                    </div>
                                    <div class="text-right">
                                        <span class="text-xs text-gray-500 block">Subtotal</span>
                                        <span class="font-bold text-eco-green">{{ number_format($fresh_subtotal, 2) }} DH</span>
                                    </div>
                                </div>

                                <!-- Actions -->
                                <div class="flex gap-2">
                                    <button class="update-cart flex-1 bg-blue-50 text-blue-600 hover:bg-blue-100 py-2 rounded-md text-sm font-medium transition-colors" data-id="{{ $id }}">
                                        Save
                                    </button>
                                    <button class="remove-from-cart delete flex-1 bg-red-50 text-red-600 hover:bg-red-100 py-2 rounded-md text-sm font-medium transition-colors" data-id="{{ $id }}">
                                        Delete
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                     <!-- Mobile Total and Buttons -->
                     <div class="p-4 border-t border-gray-200 bg-gray-50">
                        <div class="flex justify-between items-center mb-4">
                            <span class="font-bold text-gray-700">Total:</span>
                            <span class="font-bold text-xl text-eco-green">{{ number_format($total, 2) }} DH</span>
                        </div>
                        <a href="{{ url('/visiteurs/products') }}" class="block w-full text-center py-3 border border-eco-green text-eco-green font-medium rounded-lg hover:bg-eco-green hover:text-white transition-colors">
                            Continue Shopping
                        </a>
                    </div>
                @else
                    <div class="p-8 text-center flex flex-col items-center justify-center space-y-4">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <p class="text-lg text-gray-500">Your cart is currently empty.</p>
                         <a href="{{ url('/visiteurs/products') }}" class="inline-block px-6 py-2 bg-eco-green text-white rounded-md font-medium">
                            Start Shopping
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
@section('scripts')
<script>



// this function is for update card
        $(".update-cart").click(function (e) {
           e.preventDefault();

           var ele = $(this);

            $.ajax({
               url: '{{ route('updateCart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.closest(".cart-item").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ route('removeCart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();

                    }
                });
            }
        });

    </script>

@endsection