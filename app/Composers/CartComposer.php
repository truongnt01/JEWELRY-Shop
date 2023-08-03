<?php

namespace App\Composers;

use App\Models\Category;
use App\Models\Cart;
use Illuminate\View\View;

class CartComposer
{
    protected $cart;
    
    public function __construct(Cart $cart)
    {
        $this->cart =  $cart;
    }

    public function compose(View $view): void
    {
        $view->with('countProductInCart', $this->countProductInCart());
    }

    public function countProductInCart()
    {
        if (auth()->check()) {
            $cart = $this->cart->getBy(auth()->user()->id);

            return $cart ? $cart->products->count() : 0;
        }

        return 0;
    }
}
