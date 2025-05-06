<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1, 'produk' => 'Sabun'],
            ['id' => 2, 'produk' => 'Sampo'],
            ['id' => 3, 'produk' => 'Pasta Gigi']
        ];

        return view('list_product', compact('data'));
    }
}

