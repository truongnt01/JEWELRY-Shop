<?php

namespace App\Http\Middleware;

use App\Models\Cart;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserCanCheckoutCartMiddleware
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }
    public function handle(Request $request, Closure $next): Response
    {
        $cart = app(Cart::class)->fisrtOrCreateBy(auth()->user()->id, $this->cart );
        if($cart->products->count() > 0){
               return $next($request);
        }else{
            abort(404, 'Not found any things else!');
        }
     
    }
}
