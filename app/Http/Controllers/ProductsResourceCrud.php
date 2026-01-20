<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductWithRules;
use App\Models\Product;
use Illuminate\Http\Request;
use Cloudinary\Cloudinary;
use Illuminate\Database\Eloquent\Model;

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
        $product = Product::find($id);
        return view('EditProduct')->with('pro', $product);
        // equivalent a : 
        // return view('EditProduct', ['pro' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddProductWithRules $request, string $id)
    {
        $request->validated();

        // récupérer les nouvelles valeurs des champs :
        $nom = $request->input('n');
        $prix = $request->input('p');
        $categorie = $request->input('c');
        $image = '';



        // récupérer l'objet Produit via l'id
        $Produit = Product::find($id);


        // update with save
        $Produit->nom = $nom;
        $Produit->prix = $prix;
        $Produit->categorie = $categorie;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->getClientOriginalName();
            // upload cloudinary
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

            $image = $result['secure_url'];
        } else {
            $image = $Produit->image;
        }
        $Produit->image = $image;
        $Produit->save();
        return back()->with('successupdate', 'You have successfully updated a product.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Produit = Product::find($id);
        // delete with delete
        $Produit->delete();
        return back()->with('successdelete', 'You have successfully deleted a product.');
    }
}
