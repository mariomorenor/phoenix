<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Automattic\WooCommerce\Client as Woo;

class ProductController extends Controller
{

    public function index()
    {
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
        $producto->save();
        $stock = new Stock;
        $stock->fill($request->all());
        $producto->stock()->save($stock);

        $woocommerce = new Woo(
            'https://www.ponteoncesd.com/', 
            'ck_27554f89b8abdd8215e861d48e3ec1f6bf6ca51b', 
            'cs_f679cbbd2e943e335c2a7dd0fead8c1494d2477d',
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'query_string_auth' => true 
            ]
        );
    
        $data = [
            'sku'=>$producto->code,
            'name' => $producto->name,
            'type' => $producto->type->type,
            'regular_price' => $producto->regular_price,
            'sale_price'=>$producto->sale_price,
            'description' => $producto->description,
            'short_description' => $producto->short_description,
            'stock_quantity'=>$stock->total_amount,
            
        ];

        $woocommerce->post('products', $data);

        return redirect()->route('products.index')->with('status','successful');
    }

    public function show(Product $product)
    {
        
    }

    public function edit(Product $product)
    {   
        $types = DB::table('product_types')->get();
        $statues = DB::table('status_product')->get();
        return view('Inventario.modificarproducto')->with(['types'=>$types, 'statues'=>$statues, 'producto'=>$product]);
    }


    public function update(Request $request, Product $product)
    {
        $product->fill($request->all());
        $product->save();
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {   
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

    public function show_product(Product $product)
    {
        return response($product,200);
    }

}
