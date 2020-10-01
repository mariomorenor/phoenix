<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return view('layouts.inventario');
    }

    public function mantenimiento_productos()
    {
        return view('modificarProducto');
    }
}
