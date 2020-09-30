<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $productos = Product::all();
        return view('Inventario.productos');
    }

    public function create()
    {
        
    }

    public function store(ProductRequest $request)
    {
        $producto=new Product();
        $producto->fill($request->all());
        $producto->save();
        return redirect()->route('producto.index');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        $product->fill($request->all());
        $product->save();
        return redirect()->route('producto.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('Inventario.productos');
    }

    public function listProducts(Request $request)
    {
        $products = Product::all();
        return response()->json([
            "rows"=>$products
        ]);
    }

}
