<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cart;
    protected $product;
    protected $cartProduct;
    protected $coupon;
    protected $order;

    public function __construct(Product $product, Cart $cart, Coupon $coupon, Order $order, CartProduct $cartProduct)
    {
        $this->product = $product;
        $this->cart = $cart;
        $this->cartProduct = $cartProduct;
        $this->coupon = $coupon;
        $this->order = $order;
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = $this->product->findOrFail($request->product_id);
        
        $cart = $this->cart->fisrtOrCreateBy(auth()->user()->id, $this->cart);
        $cartProduct = $this->cartProduct->getBy($cart->id, $product->id);
        if ($cartProduct) {
            $quantity = $cartProduct->product_quantity;
            $cartProduct->update(['product_quantity' => ($quantity + $request->product_quantity)]);
        } else {
            $dataCreate['cart_id'] = $cart->id;
            $dataCreate['product_quantity'] = $request->product_quantity ?? 1;
            $dataCreate['product_price'] = $product->price;
            $dataCreate['product_id'] = $request->product_id;
            $this->cartProduct->create($dataCreate);
        }
        return back()->with(['message' => 'Add To Cart Success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
}
