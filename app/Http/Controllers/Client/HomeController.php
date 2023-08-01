<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    public function index()
    {
        $product = $this->product->latest('id')->paginate(10);

        return view('Client.dashboard.index', ['data' => $product]);
    }
}
