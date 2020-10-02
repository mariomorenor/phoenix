<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Foundation\Testing\WithoutEvents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ProductType;

class ProductController extends Controller
{

    public function index()
    {
        $productos = Product::all();
        return view('Inventario.productos');
    }

    public function create()
    {
        $types = DB::table('product_types')->get();
        $statues = DB::table('status_product')->get();
        return view('Inventario.ingresoProducto')->with(['types'=>$types, 'statues'=>$statues]);
    }

    public function store(ProductRequest $request)
    {
        $producto=new Product();
        $producto->fill($request->all());
        $producto->product_type_id = $request->product_type;
        $producto->status_product_id = $request->status_product;
        $producto->save();
        return redirect()->route('producto.index');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit($id)
    {   
        $product = Product::find($id);
        $types = DB::table('product_types')->get();
        $statues = DB::table('status_product')->get();
        return view('Inventario.modificarproducto')->with(['types'=>$types, 'statues'=>$statues, 'producto'=>$product]);
    }


    public function update(Request $request, Product $product)
    {
        $product->fill($request->all());
        $product->save();
        return redirect()->route('producto.index');
    }

    public function destroy($id)
    {   
        $product = Product::find($id);
        $product->delete();
        return response('producto eliminado',200);
    }

    public function listProducts(Request $request)
    {
        $products = Product::all();
        return response()->json([
            "rows"=>$products
        ]);
    }

}
