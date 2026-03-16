<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with('category')
                ->latest()
                ->get();

    return view('product.index', compact('products'));
    }
    public function create()
    {
        $categoryList = Category::all();
    return view('product.create', compact('categoryList'));
    }
    
    public function store(Request $request){
        //VALIDACION
        $request->validate([
            'name' => 'required|string|max:250',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image'
        ]);

    $newProduct = new Product();
    $newProduct->name = $request->get('name');
    $newProduct->description = $request->get('description');
    $newProduct->price = $request->get('price');
    $newProduct->category_id = $request->get('category_id');
    
    if($request->hasFile('image')) {
        $ruta = $request->file('image')->store('images', 'public');
        $newProduct->image = $ruta;
    }

    $newProduct->save();

    return redirect()->route('product.index')->with('success', 'Producto creado correctamente');
    }

    public function show(Product $producto)
    {
    return view('product.show', compact('producto'));
    }

    public function destroy(Product $producto){
        $producto->delete();
        return redirect()->route('product.index');
    }

}
