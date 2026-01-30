@extends('Layout')

@section('title', 'Admin - Store4U Premium Products')

@section('content')

    <div class="max-w-6xl mx-auto p-5">
        <h1 class="text-2xl font-semibold mb-4">Admin Space</h1>
        <a href="{{url('products/create')}}"
            class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md mb-4">Add Product</a>
        <div class="overflow-hidden rounded-lg shadow">
            <table class="min-w-full divide-y divide-gray-200 bg-white">
                <thead class="bg-gray-800">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">Id Product</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">Image</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">Name</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">Category</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">Price</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">Solde</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">Prix Fresh</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-white">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($prod as $p)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm text-gray-700 align-top">{{ $p->id }}</td>
                            <td class="px-6 py-4 align-top"><img src="{{ $p->image }}" alt="{{ $p->nom }}"
                                    class="w-24 h-24 object-cover rounded-md"></td>
                            <td class="px-6 py-4 text-sm text-gray-800 font-medium align-top">{{ $p->nom }}</td>
                            <td class="px-6 py-4 text-sm text-gray-600 align-top">{{ $p->categorie }}</td>
                            <td class="px-6 py-4 text-sm text-green-600 font-semibold align-top">{{ $p->prix }} DH</td>
                            <td class="px-6 py-4 text-sm text-gray-600 align-top">{{ $p->solde }}%</td>
                            <td class="px-6 py-4 text-sm text-gray-600 align-top">{{  $p->prix - $p->prix * $p->solde / 100}} DH
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-600 align-top">
                                <a href="{{ url('products/' . $p->id . '/edit') }}"
                                    class="text-blue-600 hover:text-blue-900">Edit</a>
                                <form action="{{ url('products/' . $p->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900"
                                        onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $prod->links('vendor.pagination.custom') }}
        </div>
    </div>

@endsection