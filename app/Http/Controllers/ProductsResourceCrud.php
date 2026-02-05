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
        $products = Product::all();
        return view("ProductsByCards", compact("products"));
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
                'api_key' => env('CLOUDINARY_API_KEY'),
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
        $Solde = $request->input('s');


        $produit->nom = $nom;
        $produit->prix = $prix;
        $produit->categorie = $categorie;
        $produit->solde = $Solde;

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
        $product = Product::findOrFail($id);
        return view('showProduct', ['pro' => $product]);
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
        $solde = $request->input('s');
        $image = '';



        // récupérer l'objet Produit via l'id
        $Produit = Product::find($id);


        // update with save
        $Produit->nom = $nom;
        $Produit->prix = $prix;
        $Produit->categorie = $categorie;
        $Produit->solde = $solde;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->getClientOriginalName();
            // upload cloudinary
            $cloudinary = new Cloudinary([
                'cloud' => [
                    'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                    'api_key' => env('CLOUDINARY_API_KEY'),
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
    public function espaceadmin()
    {
        $products = Product::paginate(10);
        return view('espaceadmin', ['prod' => $products]);
    }
    public function espaceclient(Request $request)
    {
        $query = Product::query();

        // Filter by category if provided
        if ($request->has('category') && $request->filled('category')) { // category of select 
            $query->where('categorie', $request->category);
        }
        $products = $query->paginate(10);
        $categories = Product::select('categorie')->distinct()->orderBy('categorie')->get();
        return view('espaceclient', [
            'prod' => $products,
            'categories' => $categories
        ]);
    }
    public function cart()
    {
        return view("Cart");
    }
    public function addTocart(string $id)
    {

        $product = Product::find($id);


        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if (!$cart) {

            $cart = [
                $id => [
                    "name" => $product->nom,
                    "price" => $product->prix,
                    "quantity" => 1,
                    "soldeout" => $product->solde,
                    "category" => $product->categorie,
                    "photo" => $product->image
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart); // this code put product of choose in cart

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->nom,
            "price" => $product->prix,
            "quantity" => 1,
            "soldeout" => $product->solde,
            "category" => $product->categorie,
            "photo" => $product->image
        ];

        session()->put('cart', $cart); // this code put product of choose in cart

    }
    public function updateCart(Request $request)
    {
        if ($request->input('id') and $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }
    public function removeCart(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }
}
