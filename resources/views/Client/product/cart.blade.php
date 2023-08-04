@extends('Client.Layout.index')
@section('title','Cart Product')
@section('content')

<div id="site-main" class="site-main">
    @if (session('message'))
        <div class="row">
            <h3 class="text-danger">{{ session('message') }}</h3>
        </div>
    @endif
    <div id="main-content" class="main-content">
        <div id="primary" class="content-area">
            <div id="title" class="page-title">
                <div class="section-container">
                    <div class="content-title-heading">
                        <h1 class="text-title-heading">
                            Shopping Cart
                        </h1>
                    </div>
                    <div class="breadcrumbs">
                        <a href="{{ route('client.home') }}">Home</a><span class="delimiter"></span><a href="shop-grid-left.html">Shop</a><span class="delimiter"></span>Shopping Cart
                    </div>
                </div>
            </div>

            <div id="content" class="site-content" role="main">
                <div class="section-padding">
                    <div class="section-container p-l-r">
                        <div class="shop-cart">	
                            <div class="row">
                                <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                                   
                                        <div class="table-responsive">
                                            <table class="cart-items table" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th class="product-thumbnail">Product</th>
                                                        <th class="product-price">Price</th>
                                                        <th class="product-quantity">Quantity</th>
                                                        <th class="product-subtotal">Subtotal</th>
                                                        <th class="product-remove">&nbsp;</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- Cart Detail --}}
                                                    @foreach ($data->products as $item)
                                                         <tr class="cart-item" id="row-{{ $item->id }}">		
                                                            <td class="product-thumbnail">
                                                                <a href="shop-details.html">
                                                                    <img width="600" height="600" src="{{ $item->product->image_path }}" class="product-image" alt="">
                                                                </a>				
                                                                <div class="product-name">
                                                                    <a href="shop-details.html">{{ $item->product->name }}</a>								
                                                                </div>
                                                            </td>
                                                            <td class="product-price">
                                                                <span class="price" style="{{ $item->product->sale ? 'text-decoration: line-through' : '' }}">
                                                                    ${{ $item->product->price }}
                                                                </span>
                                                                @if ($item->product->sale)
                                                                    <span class="price">${{ $item->product->sale_price }}</span>
                                                                @endif
                                                            </td>
                                                            <td class="product-quantity">
                                                                <div class="quantity">
                                                                    <button type="button" class="minus btn-update-quantity" data-action="{{ route('client.carts.update_product_quantity',$item->id) }}" data-id="{{ $item->id }}">-</button>	
                                                                    <input type="number" class="qty" id="productQuantityInput-{{ $item->id }}" min="1" value="{{ $item->product_quantity }}" title="Qty" size="4" inputmode="numeric">
                                                                    <button type="button" class="plus btn-update-quantity" data-action="{{ route('client.carts.update_product_quantity',$item->id) }}" data-id="{{ $item->id }}">+</button>
                                                                </div>
                                                            </td>
                                                            <td class="product-subtotal">
                                                                <span id="cartProductPrice{{ $item->id }}">${{ $item->product->sale ? $item->product->sale_price * $item->product_quantity : $item->product->price * $item->product_quantity }}</span>
                                                            </td>
                                                            <td class="product-remove">
                                                                <button class="remove btn-remove-product" data-action="{{ route('client.carts.remove_product', $item->id) }}">×</button>								
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                       
                                                    {{--End Cart Detail --}}
                                                    <tr>
                                                        <form action="{{ route('client.carts.apply_coupon') }}" class="mb-5" method="POST">
                                                            @csrf
                                        
                                                            <td colspan="6" class="actions">
                                                                <div class="bottom-cart">
                                                                    <div class="coupon">
                                                                        <input type="text" name="coupon_code" class="input-text" id="coupon-code" value="{{ Session::get('coupon_code') }}" placeholder="Coupon code"> 
                                                                        <button type="submit" name="apply_coupon" class="button" value="Apply coupon">Apply coupon</button>
                                                                    </div>
                                                                    {{-- <h2><a href="shop-grid-left.html">Continue Shopping</a></h2>
                                                                    <button type="submit" name="update_cart" class="button" value="Update cart">Update cart</button> --}}
                                                                </div>	
                                                            </td>
                                                        </form>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    
                                </div>
                                <div class="col-xl-4 col-lg-12 col-md-12 col-12">
                                    <div class="cart-totals">
                                        <h2>Cart totals</h2>
                                        <div>
                                            {{-- <div class="cart-subtotal">
                                                <div class="title">Subtotal</div>
                                                <div><span>$480.00</span></div>
                                            </div>
                                            <div class="shipping-totals">
                                                <div class="title">Shipping</div>
                                                <div>
                                                    <ul class="shipping-methods custom-radio">
                                                        <li>
                                                            <input type="radio" name="shipping_method" data-index="0" value="free_shipping" class="shipping_method" checked="checked"><label>Free shipping</label>
                                                        </li>
                                                        <li>
                                                            <input type="radio" name="shipping_method" data-index="0" value="flat_rate" class="shipping_method"><label>Flat rate</label>					
                                                        </li>
                                                    </ul>
                                                    <p class="shipping-desc">
                                                        Shipping options will be updated during checkout.				
                                                    </p>
                                                </div>
                                            </div> --}}
                                            <div class="order-total" >
                                                <div class="title">Total Recent</div>
                                                <div><span class="total-price" data-price="{{ $data->total_price }}">${{ $data->total_price }}</span></div>
                                                
                                            </div>

                                            @if (session('discount_amount_price'))
                                                <div class="order-total" >
                                                    <div class="title">Coupon</div>
                                                    <div class="coupon-div" data-price="{{ 
                                                        session('discount_amount_price')
                                                    }}">{{ session('discount_amount_price') }}%</div>
                                                </div>
                                            @endif

                                            <div class="order-total" >
                                                <div class="title">Total</div>
                                                <div><span class="total-price" data-price="{{ $data->total_price }}">${{ $data->total_price }}</span></div>
                                                
                                            </div>
                                        </div>
                                        <div class="proceed-to-checkout">		
                                            <a href="{{ route('client.checkout.index') }}" class="checkout-button button">
                                                Proceed to checkout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-cart-empty">
                            <div class="notices-wrapper">
                                <p class="cart-empty">Your cart is currently empty.</p>
                            </div>	
                            <div class="return-to-shop">
                                <a class="button" href="shop-grid-left.html">
                                    Return to shop		
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #main-content -->
</div>
@endsection
@section('script')
    <script src="{{ asset('client/cart/cart.js') }}"></script> 
@endsection