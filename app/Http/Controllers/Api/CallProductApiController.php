<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductWithRules;
use App\Models\Product;
use Illuminate\Http\Request;
use Cloudinary\Cloudinary;

class CallProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "hello from index api controller";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddProductWithRules $request)
    {
        $request->validated();

    // 2️⃣ Upload image to Cloudinary
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

    // 3️⃣ Save to DB (save not create ✅)
    $produit = new Product();

    $produit->nom = $request->input('n');
    $produit->prix = $request->input('p');
    $produit->categorie = $request->input('c');
    $produit->image = $imageUrl;

    $produit->save();

    // 4️⃣ JSON response (IMPORTANT)
    return response()->json([
        'success' => true,
        'message' => 'Product created successfully',
        'prodwiyat' => $produit  // in react should be called res.data.prodwiyat
    ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
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
    public function filtrer(Request $request)
{
    // Récupération de la chaîne de caractères de recherche
    $query = $request->input('prodwy'); // just name of param

    // Recherche des articles correspondants
    $produits = Product::where('nom', 'like', "%$query%")->get();

    // Renvoi des articles au format JSON
    return response()->json($produits);





   }
}
