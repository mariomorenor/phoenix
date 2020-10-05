<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return view('layouts.inventario');
    }

    public function mantenimiento_productos()
    {
        return view('Inventario.modificarproducto');
    }

    public function entrada_inventario()
    {
        $producto = Product::all();
        return view('Inventario.entradaProducto')->with(["productos"=>$producto]);
    }
}
