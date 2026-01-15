@extends('Layout')

@section('title', 'Shop - Store4U Premium Products')

@section('content')

<style>
    .products-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    .products-table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .products-table th {
        background: #333;
        color: white;
        padding: 15px;
        text-align: left;
        font-weight: 600;
    }
    .products-table td {
        padding: 15px;
        border-bottom: 1px solid #ddd;
    }
    .products-table tr:hover {
        background: #f5f5f5;
    }
    .product-image {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 8px;
    }
    .product-name {
        font-weight: 500;
        color: #333;
    }
    .product-price {
        font-size: 18px;
        font-weight: bold;
        color: #27ae60;
    }
    .product-category {
        color: #666;
        font-size: 14px;
    }
</style>

<div class="products-container">
    <h1 class="">Our Products</h1>
    <table class="products-table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prod as $p)
            <tr>
                <td><img src="{{ $p->image }}" alt="{{ $p->nom }}" class="product-image"></td>
                <td class="product-name">{{ $p->nom }}</td>
                <td class="product-category">{{ $p->categorie }}</td>
                <td class="product-price">${{ $p->prix }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection