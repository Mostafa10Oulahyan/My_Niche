@extends('Layout')

@section('title', 'Dashboard - Store4U')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold mb-4">Welcome back, {{ Auth::user()->name }}!</h2>
                    <p class="mb-4">You are logged in as a <strong>{{ Auth::user()->role }}</strong>.</p>

                    @if(Auth::user()->role === 'ADMIN')
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- <a href="{{ url('/products/create') }}" -->
                            <a href="{{ route('web.products.create') }}"
                                class="block p-6 bg-blue-50 border border-blue-200 rounded-lg hover:bg-blue-100 transition">
                                <h3 class="font-bold text-blue-800">Add New Product</h3>
                                <p class="text-blue-600">Create a new product listing in the store.</p>
                            </a>
                            <a href="/espaceadmin"
                                class="block p-6 bg-green-50 border border-green-200 rounded-lg hover:bg-green-100 transition">
                                <h3 class="font-bold text-green-800">Manage Products</h3>
                                <p class="text-green-600">View, edit, or delete existing products.</p>
                            </a>
                        </div>
                    @else
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-6">
                            <h3 class="font-bold text-gray-800">My Client Space</h3>
                            <p class="text-gray-600 mb-4">Access your orders and personal information.</p>
                            <a href="/espaceclient"
                                class="inline-block bg-eco-green text-white px-4 py-2 rounded hover:bg-green-700 transition">Go
                                to Client Space</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection