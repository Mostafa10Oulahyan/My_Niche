<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductWithRules;
use App\Models\Product;
use Illuminate\Http\Request;
use Cloudinary\Cloudinary;
// use Illuminate\Database\Eloquent\Model;

class ProductsResourceCrud extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AddProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddProductWithRules $request)
    {
        $request->validated();

        $cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key'    => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
            ],
        ]);

        $result = $cloudinary->uploadApi()->upload(
            $request->file('image')->getRealPath(),
            [
                'folder' => 'Store4u/productsPhotos',
            ]
        );

        $imageUrl = $result['secure_url'];

        // 3) Save en DB
        $produit = new Product();
        $nom = $request->input('n');
        $prix = $request->input('p');
        $categorie = $request->input('c');


        $produit->nom = $nom;
        $produit->prix = $prix;
        $produit->categorie = $categorie;

        // adapte le nom de colonne selon ta DB :
        // ex: image, image_url, photo, etc.
        $produit->image = $imageUrl;

        $produit->save();

        // 4) Redirect
        return back()->with('success', 'You have successfully added a new Product.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
