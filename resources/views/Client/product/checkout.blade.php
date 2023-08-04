@extends('Client.Layout.index')
@section('title','CheckOut')
@section('content')
<div id="site-main" class="site-main">
    
      
          <div id="main-content" class="main-content">
        <div id="primary" class="content-area">
            <div id="title" class="page-title">
                <div class="section-container">
                    <div class="content-title-heading">
                        <h1 class="text-title-heading">
                            Checkout
                        </h1>
                    </div>
                    <div class="breadcrumbs">
                        <a href="{{ route('client.home') }}">Home</a><span class="delimiter"></span><a href="shop-grid-left.html">Shop</a><span class="delimiter"></span>Checkout
                    </div>
                </div>
            </div>

            <div id="content" class="site-content" role="main">
                <div class="section-padding">
                    <div class="section-container p-l-r">
                        <div class="shop-checkout">
                            <form name="checkout" method="post" class="checkout" action="{{ route('client.checkout.process') }}" autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-8 col-lg-7 col-md-12 col-12">
                                        <div class="customer-details">
                                            <div class="billing-fields">
                                                <h3>Billing Details</h3>
                                                <div class="billing-fields-wrapper">
                                                    <p class="form-row form-row-first validate-required">
                                                        <label>Name <span class="required" title="required">*</span></label>
                                                        <span class="input-wrapper">
                                                            <input type="text" class="input-text" name="customer_name" value="{{ old('customer_name') }}" placeholder="Truong">
                                                        </span>
                                                    </p>
                                                    <p class="form-row address-field validate-required form-row-wide">
                                                        <label>Email<span class="required" title="required">*</span></label>
                                                        <span class="input-wrapper">
                                                            <input type="text" class="input-text" name="customer_email"  value="{{ old('customer_email') }}" placeholder="NaN@email.com">
                                                        </span>
                                                    </p>
                                                    <p class="form-row address-field validate-required form-row-wide">
                                                        <label>Street address <span class="required" title="required">*</span></label>
                                                        <span class="input-wrapper">
                                                            <input type="text" class="input-text" name="customer_address"  value="{{ old('customer_address') }}" placeholder="Null Street">
                                                        </span>
                                                    </p>
                                                    <p class="form-row form-row-wide validate-required validate-phone">
                                                        <label>Phone <span class="required" title="required">*</span></label>
                                                        <span class="input-wrapper">
                                                            <input type="text" class="input-text" name="customer_phone" value="{{ old('customer_phone') }}" placeholder="+123 456 789">
                                                        </span>
                                                    </p>
                                                    <p class="form-row form-row-wide validate-required validate-email">
                                                        <label>Note<span class="required" title="required">*</span></label>
                                                        <span class="input-wrapper">
                                                            <input type="text" class="input-text" name="note" value="{{ old('note') }}" autocomplete="off" placeholder="Great">
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>                                          
                                        </div>                                        
                                    </div>
                                    <div class="col-xl-4 col-lg-5 col-md-12 col-12">
                                        <div class="checkout-review-order">
                                            <div class="checkout-review-order-table">
                                                <h3 class="review-order-title">Product</h3>
                                                <div class="cart-items">
                                                    @foreach ($data->products as $item)
                                                        <div class="cart-item">
                                                            <div class="info-product">
                                                                <div class="product-name">
                                                                {{ $item->product->name }}
                                                                    <strong class="product-quantity">{{ $item->product_quantity }}x</strong>											
                                                                </div>
                                                            </div>
                                                            <div class="product-total">
                                                                <span style="{{ $item->product->sale ? 'text-decoration: line-through' : '' }}">
                                                                    ${{ $item->product_quantity * $item->product->price }}
                                                                </span>
                                                                @if ($item->product->sale)
                                                                    <span> ${{ $item->product_quantity * $item->product->sale_price }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                        
                                                    
                                                </div>
                                                {{-- <div class="cart-subtotal">
                                                    <h2>Subtotal</h2>
                                                    <div class="subtotal-price">
                                                        <span class="total-price" data-price="{{ $data->total_price }}">${{ $data->total_price }}</span>
                                                    </div>
                                                </div> --}}
                                                <div class="shipping-totals shipping">
                                                    <h2>Shipping</h2>
                                                    <div data-title="Shipping">
                                                        <ul class="shipping-methods custom-radio">
                                                            <li>
                                                                <input type="radio" name="shipping_method" data-index="0" value="free_shipping" class="shipping_method" checked="checked"><label>Free shipping</label>
                                                            </li>
                                                           
                                                        </ul>
                                                    </div>
                                                </div>
                                                @if (session('discount_amount_price'))
                                                    <div class="order-total">
                                                    <h2>Coupon</h2>
                                                    <div >
                                                        <strong>
                                                            <span class="coupon-div" data-price="{{ session('discount_amount_price') }}">{{ session('discount_amount_price') }}%</span>
                                                        </strong> 
                                                    </div>
                                                </div>
                                                @endif
                                                <div class="order-total">
                                                    <h2>Total</h2>
                                                    <div >
                                                        <strong>
                                                            <span class="total-price"  data-price="{{ $data->total_price }}">${{ $data->total_price }}</span>
                                                            <input type="hidden" value="{{ $data->total_price }}" name="total">
                                                        </strong> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="payment" class="checkout-payment">
                                                <ul class="payment-methods methods custom-radio">
                                                    
                                                    
                                                    <li class="payment-method">
                                                        <input type="radio" class="input-radio" name="payment" value="monney" value="cod">
                                                        <label>Cash on delivery</label>
                                                        <div class="payment-box">
                                                            <p>Pay with cash upon delivery.</p>
                                                        </div>
                                                    </li>
                                                    
                                                </ul>
                                                <div class="form-row place-order">
                                                    <div class="terms-and-conditions-wrapper">
                                                        <div class="privacy-policy-text"></div>
                                                    </div>
                                                    <button class="button alt" name="checkout_place_order" value="Place order">Place order</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #main-content -->
    
  
</div>
@endsection
@section('script')
    <script>
        $(function(){
            getTotalValue()

            function getTotalValue() {
                let total = $('.total-price').data('price')
                let couponPrice = $('.coupon-div')?.data('price') ?? 0;
                let shiping = $('.shipping').data('price')
                $('.total-price-all').text(`$${total + shiping - couponPrice}`)
                $('#total').val(total + shiping - couponPrice)
            }


        });
    </script>
@endsection