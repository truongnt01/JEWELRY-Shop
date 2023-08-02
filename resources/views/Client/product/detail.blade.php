@extends('Client.Layout.index')
@section('title','Detail Product')
@section('content')
<div id="site-main" class="site-main">
    <div id="main-content" class="main-content">
        <div id="primary" class="content-area">
            <div id="title" class="page-title">
                <div class="section-container">
                    <div class="content-title-heading">
                        <h1 class="text-title-heading">
                            Bora Armchair
                        </h1>
                    </div>
                    <div class="breadcrumbs">
                        <a href="{{ route('client.home') }}">Home</a><span class="delimiter"></span><a href="shop-grid-left.html">Shop</a><span class="delimiter"></span>Bora Armchair
                    </div>
                </div>
            </div>

            <div id="content" class="site-content" role="main">
                <div class="shop-details zoom" data-product_layout_thumb="scroll" data-zoom_scroll="true" data-zoom_contain_lens="true" data-zoomtype="inner" data-lenssize="200" data-lensshape="square" data-lensborder="" data-bordersize="2" data-bordercolour="#f9b61e" data-popup="false">	
                    <div class="product-top-info">
                        <div class="section-padding">
                            <div class="section-container p-l-r">
                                <div class="row">
                                    <div class="product-images col-lg-7 col-md-12 col-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="content-thumbnail-scroll">
                                                    <div class="image-thumbnail slick-carousel slick-vertical" data-asnavfor=".image-additional" data-centermode="true" data-focusonselect="true" data-columns4="5" data-columns3="4" data-columns2="4" data-columns1="4" data-columns="4" data-nav="true" data-vertical="&quot;true&quot;" data-verticalswiping="&quot;true&quot;">
                                                        {{-- Img Product Detail --}}
                                                            <div class="img-item slick-slide">
                                                                <span class="img-thumbnail-scroll">
                                                                    <img width="600" height="600" src="{{ $data->images->count() > 0 ? asset('upload/'.$data->images->first()->url)  : 'upload/default.jpg' }}" alt="">
                                                                </span>
                                                            </div>
                                                        {{-- End Img Product Detail --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-10">
                                                <div class="scroll-image main-image">
                                                    <div class="image-additional slick-carousel" data-asnavfor=".image-thumbnail" data-fade="true" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns="1" data-nav="true">
                                                        <div class="img-item slick-slide">
                                                            <img width="900" height="900" src="media/product/1.jpg" alt="" title="">
                                                        </div>
                                                        <div class="img-item slick-slide">
                                                            <img width="900" height="900" src="media/product/1-2.jpg" alt="" title="">
                                                        </div>
                                                        <div class="img-item slick-slide">
                                                            <img width="900" height="900" src="media/product/2.jpg" alt="" title="">
                                                        </div>
                                                        <div class="img-item slick-slide">
                                                            <img width="900" height="900" src="media/product/2-2.jpg" alt="" title="">
                                                        </div>
                                                        <div class="img-item slick-slide">
                                                            <img width="900" height="900" src="media/product/3.jpg" alt="" title="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-info col-lg-5 col-md-12 col-12 ">
                                        <h1 class="title">{{ $data->name }}</h1>
                                        <span class="price">
                                            {{-- <del aria-hidden="true"><span>{{ $data->price }}</span></del>  --}}
                                            <ins><span>${{ $data->price }}</span></ins>
                                        </span>
                                        <div class="rating">
                                            <div class="star star-5"></div>
                                            <div class="review-count">
                                                (3<span> reviews</span>)
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p>{{ $data->description }}</p>
                                        </div>
                                        {{-- <div class="variations">
                                            <table cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td class="label">Size</td>
                                                        <td class="attributes">
                                                            <ul class="text">
                                                                <li><span>L</span></li>
                                                                <li><span>M</span></li>
                                                                <li><span>S</span></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="label">Color</td>
                                                        <td class="attributes">
                                                            <ul class="colors">
                                                                <li><span class="color-1"></span></li>
                                                                <li><span class="color-2"></span></li>
                                                                <li><span class="color-3"></span></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> --}}
                                        <div class="buttons">
                                            <div class="add-to-cart-wrap">
                                                <div class="quantity">
                                                    <button type="button" class="plus">+</button>
                                                    <input type="number" class="qty" step="1" min="0" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">
                                                    <button type="button" class="minus">-</button>	
                                                </div>
                                                <div class="btn-add-to-cart">
                                                    <a href="#" tabindex="0">Add to cart</a>
                                                </div>
                                            </div>
                                            <div class="btn-quick-buy" data-title="Wishlist">
                                                <button class="product-btn">Buy It Now</button>
                                            </div>
                                            <div class="btn-wishlist" data-title="Wishlist">
                                                <button class="product-btn">Add to wishlist</button>
                                            </div>
                                            <div class="btn-compare" data-title="Compare">
                                                <button class="product-btn">Compare</button>
                                            </div>
                                        </div>
                                        <div class="product-meta">
                                            <span class="sku-wrapper">SKU: <span class="sku">D2300-3-2-2</span></span>
                                            <span class="posted-in">Category: <a href="shop-grid-left.html" rel="tag">Bracelets</a></span>
                                            <span class="tagged-as">Tags: <a href="shop-grid-left.html" rel="tag">Hot</a>, <a href="shop-grid-left.html" rel="tag">Trend</a></span>
                                        </div>
                                        <div class="social-share">
                                            <a href="#" title="Facebook" class="share-facebook" target="_blank"><i class="fa fa-facebook"></i>Facebook</a>
                                            <a href="#" title="Twitter" class="share-twitter"><i class="fa fa-twitter"></i>Twitter</a>
                                            <a href="#" title="Pinterest" class="share-pinterest"><i class="fa fa-pinterest"></i>Pinterest</a>
                                        </div>					
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-tabs">
                        <div class="section-padding">
                            <div class="section-container p-l-r">
                                <div class="product-tabs-wrap">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews (1)</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                                           {!! $data->description !!}
                                        </div>
                                        <div class="tab-pane fade" id="additional-information" role="tabpanel">
                                            <table class="product-attributes">
                                                <tbody>
                                                    <tr class="attribute-item">
                                                        <th class="attribute-label">Color</th>
                                                        <td class="attribute-value">Antique, Chestnut, Grullo</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                                            <div id="reviews" class="product-reviews">
                                                <div id="comments">
                                                    <h2 class="reviews-title">1 review for <span>Bora Armchair</span></h2>
                                                    <ol class="comment-list">
                                                        <li class="review">
                                                            <div class="content-comment-container">
                                                                <div class="comment-container">
                                                                    <img src="media/user.jpg" class="avatar" height="60" width="60" alt="">
                                                                    <div class="comment-text">
                                                                        <div class="rating small">
                                                                            <div class="star star-5"></div>
                                                                        </div>
                                                                        <div class="review-author">Peter Capidal</div>
                                                                        <div class="review-time">January 12, 2023</div>
                                                                    </div>
                                                                </div>
                                                                <div class="description">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                                                </div>	
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </div>
                                                <div id="review-form">
                                                    <div id="respond" class="comment-respond">
                                                        <span id="reply-title" class="comment-reply-title">Add a review</span>
                                                        <form action="#" method="post" id="comment-form" class="comment-form">
                                                            <p class="comment-notes">
                                                                <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                                            </p>
                                                            <div class="comment-form-rating">
                                                                <label for="rating">Your rating</label>
                                                                <p class="stars">
                                                                    <span>
                                                                        <a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a>						
                                                                    </span>					
                                                                </p>
                                                            </div>
                                                            <p class="comment-form-comment">
                                                                <textarea id="comment" name="comment" placeholder="Your Reviews *" cols="45" rows="8" aria-required="true" required=""></textarea>
                                                            </p>
                                                            <div class="content-info-reviews">
                                                                <p class="comment-form-author">
                                                                    <input id="author" name="author" placeholder="Name *" type="text" value="" size="30" aria-required="true" required="">
                                                                </p>
                                                                <p class="comment-form-email">
                                                                    <input id="email" name="email" placeholder="Email *" type="email" value="" size="30" aria-required="true" required="">
                                                                </p>
                                                                <p class="form-submit">
                                                                    <input name="submit" type="submit" id="submit" class="submit" value="Submit"> 
                                                                </p>	
                                                            </div>
                                                        </form><!-- #respond -->
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-related">
                        <div class="section-padding">
                            <div class="section-container p-l-r">
                                <div class="block block-products slider">
                                    <div class="block-title"><h2>Related Products</h2></div>
                                    <div class="block-content">
                                        <div class="content-product-list slick-wrap">
                                            <div class="slick-sliders products-list grid" data-slidestoscroll="true" data-dots="false" data-nav="1" data-columns4="1" data-columns3="2" data-columns2="3" data-columns1="3" data-columns1440="4" data-columns="4">
                                                
                                                @foreach ($show as $item)
                                                    {{-- Bottom show --}}
                                                    <div class="item-product slick-slide">
                                                        <div class="items">
                                                            <div class="products-entry clearfix product-wapper">
                                                                <div class="products-thumb">
                                                                    <div class="product-lable">
                                                                        <div class="hot">Hot</div>
                                                                    </div>
                                                                    <div class="product-thumb-hover">
                                                                        <a href="{{ route('client.products.show' , $item->id) }}">
                                                                            <img width="600" height="600" src="{{ $item->images->count() > 0 ? asset('upload/'.$item->images->first()->url)  : 'upload/default.jpg' }}" alt="">
                                                                            
                                                                        </a>
                                                                    </div>		
                                                                    <div class="product-button">
                                                                        <div class="btn-add-to-cart" data-title="Add to cart">
                                                                            <a rel="nofollow" href="#" class="product-btn button">Add to cart</a>
                                                                        </div>
                                                                        <div class="btn-wishlist" data-title="Wishlist">
                                                                            <button class="product-btn">Add to wishlist</button>
                                                                        </div>
                                                                        <div class="btn-compare" data-title="Compare">
                                                                            <button class="product-btn">Compare</button>
                                                                        </div>
                                                                        <span class="product-quickview" data-title="Quick View">
                                                                            <a href="{{ route('client.products.show' , $item->id) }}" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                        </span>		
                                                                    </div>
                                                                </div>
                                                                <div class="products-content">
                                                                    <div class="contents text-center">
                                                                        <h3 class="product-title"><a href="{{ route('client.products.show' , $item->id) }}">{{ $item->name }}</a></h3>
                                                                        <div class="rating">
                                                                            <div class="star star-5"></div>
                                                                        </div>
                                                                        <span class="price">{{ $item->price }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                {{-- End Bottom show --}}
                                                @endforeach
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #main-content -->
</div>
@endsection