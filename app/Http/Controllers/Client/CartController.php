<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Resources\Cart\CartResource;
use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


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
        $cart = $this->cart->fisrtOrCreateBy(auth()->user()->id, $this->cart)->load('products');

        return view('Client.product.cart', ['data' => $cart]);
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

    public function updateQuantityProduct(Request $request, $id)
    {
        $cartProduct =  $this->cartProduct->find($id);
        $dataUpdate = $request->all();

        $cartProduct->update($dataUpdate);
        $cart =  $cartProduct->cart;

        return response()->json([
            'product_cart_id' => $id,
            'cart' => new CartResource($cart),
            'remove_product' => $dataUpdate['product_quantity'] < 1,
            'cart_product_price' => $cartProduct->total_price
        ], Response::HTTP_OK);
    }


    public function removeProductInCart($id)
    {
        $cartProduct = $this->cartProduct->find($id);
        $cartProduct->delete();
        $cart = $cartProduct->cart;
        return response()->json([
            'product_cart_id' => $id,
            'cart' => new CartResource($cart),
        ], Response::HTTP_OK);
    }

    public function applyCoupon(Request $request)
    {
        $name = $request->input('coupon_code');

        $coupon = $this->coupon->firstWithExperyDate($name, auth()->user()->id);

        if ($coupon) {
            $message = 'Successfully applied coupon code';
            Session::put('coupon_id', $coupon->id);
            Session::put('discount_amount_price', $coupon->value);
            Session::put('coupon_code', $coupon->name);
        } else {
            Session::forget(['coupon_id', 'discount_amount_price', 'coupon_code']);
            $message = 'Coupon code does not exist or has expired';
        }

        return redirect()->route('client.carts.index')->with(['message' => $message]);
    }

    public function checkOut()
    {
        $cart = $this->cart->fisrtOrCreateBy(auth()->user()->id, $this->cart)->load('products');

        return view('Client.product.checkout', ['data' => $cart]);
    }
}
