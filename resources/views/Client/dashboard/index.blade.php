@extends('Client.Layout.index')
@section('title','Home')
@section('content')
<div id="site-main" class="site-main">
    <div id="main-content" class="main-content">
        <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
                <section class="section m-b-70">
                    <!-- Block Sliders -->
                    <div class="block block-sliders auto-height color-white nav-center">
                        <div class="slick-sliders" data-autoplay="true" data-dots="true" data-nav="true" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="1" data-columns1440="1" data-columns="1">
                            <div class="item slick-slide">
                                <div class="item-content">
                                    <div class="content-image">
                                        <img width="1920" height="1080" src="{{ asset('client/media/slider/1-1.jpg') }}" alt="Image Slider">
                                    </div>
                                    <div class="item-info horizontal-start vertical-middle">
                                        <div class="content">
                                            <h2 class="title-slider">Discover a <br>world of jewelry</h2>
                                            <a class="button-slider button button-white button-outline thick-border" href="shop-grid-left.html">Explore Bestseller</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item slick-slide">
                                <div class="item-content">
                                    <div class="content-image">
                                        <img width="1920" height="1080" src="{{ asset('client/media/slider/1-2.jpg') }}" alt="Image Slider">
                                    </div>
                                    <div class="item-info horizontal-start vertical-middle">
                                        <div class="content">
                                            <h2 class="title-slider">Discover the<br> Best of the Best</h2>
                                            <a class="button-slider button button-white button-outline thick-border" href="shop-grid-left.html">Explore Bestseller</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item slick-slide">
                                <div class="item-content">
                                    <div class="content-image">
                                        <img width="1920" height="1080" src="{{ asset('client/media/slider/1-3.jpg') }}" alt="Image Slider">
                                    </div>
                                    <div class="item-info horizontal-start vertical-middle">
                                        <div class="content">
                                            <h2 class="title-slider">Oh,<br> Hello Newness!</h2>
                                            <a class="button-slider button button-white button-outline thick-border" href="shop-grid-left.html">Explore Bestseller</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-padding m-b-70">
                    <div class="section-container large">
                        <!-- Block Banners (Layout 1) -->
                        <div class="block block-banners layout-1 banners-effect">
                            <div class="block-widget-wrap small-space">
                                <div class="row">
                                    <div class="section-column left sm-m-b">
                                        <div class="block-widget-banner">
                                            <div class="bg-banner">
                                                <div class="banner-wrapper banners">
                                                    <div class="banner-image">
                                                        <a href="">
                                                            <img width="630" height="457" src="{{ asset('client/media/banner/banner-1-1.jpg') }}" alt="Banner Image">
                                                        </a>
                                                    </div>
                                                    <div class="banner-wrapper-infor">
                                                        <div class="info">
                                                            <div class="content">
                                                                <h3 class="title-banner">New Arrivals</h3>
                                                                <a class="button" href="shop-grid-left.html">Shop Now</a>						
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-column center sm-m-b">
                                        <div class="block-widget-banner">
                                            <div class="bg-banner">
                                                <div class="banner-wrapper banners">
                                                    <div class="banner-image">
                                                        <a href="shop-grid-left.html">
                                                            <img width="450" height="457" src="{{ asset('client/media/banner/banner-1-2.jpg') }}" alt="Banner Image">
                                                        </a>
                                                    </div>
                                                    <div class="banner-wrapper-infor text-center">
                                                        <div class="info">
                                                            <div class="content">
                                                                <h3 class="title-banner">Best Seller</h3>
                                                                <a class="button center" href="shop-grid-left.html">Shop Now</a>						
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="section-column right">
                                        <div class="block-widget-banner">
                                            <div class="bg-banner">
                                                <div class="banner-wrapper banners">
                                                    <div class="banner-image">
                                                        <a href="shop-grid-left.html">
                                                            <img width="630" height="457" src="{{ asset('client/media/banner/banner-1-3.jpg') }}" alt="Banner Image">
                                                        </a>
                                                    </div>
                                                    <div class="banner-wrapper-infor">
                                                        <div class="info">
                                                            <div class="content">
                                                                <h3 class="title-banner">Clearance Sale</h3>
                                                                <a class="button" href="shop-grid-left.html">Shop Now</a>						
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-padding m-b-70">
                    <div class="section-container">
                        <!-- Block Product Categories -->
                        <div class="block block-product-cats slider round-border">
                            <div class="block-widget-wrap">
                                <div class="block-title"><h2>Top Categories</h2></div>
                                <div class="block-content">
                                    <div class="product-cats-list slick-wrap">
                                        <div class="slick-sliders content-category" data-dots="0" data-slidestoscroll="true" data-nav="1" data-columns4="2" data-columns3="3" data-columns2="3" data-columns1="5" data-columns1440="5" data-columns="5">
                                            {{-- Top Categoires --}}
                                            @foreach ($category as $item)
                                                <div class="item item-product-cat slick-slide">	
                                                    <div class="item-product-cat-content">
                                                        <a href="{{ route('client.products.index', ['category_id' => $item->id]) }}">
                                                            <div class="item-image animation-horizontal">
                                                                <img width="258" height="258" src="{{ asset('client/media/product/cat-1.jpg') }}" alt="Bracelets">
                                                            </div>
                                                        </a>			
                                                        <div class="product-cat-content-info">
                                                            <h2 class="item-title">
                                                                <a href="{{ route('client.products.index', ['category_id' => $item->id]) }}">{{ $item->name }}</a>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            
                                            {{-- End Top Categoires --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section background-img bg-img-1 m-b-70">
                    <!-- Block Intro -->
                    <div class="block block-intro">
                        <div class="row">
                            <div class="section-column left">
                                <div class="intro-wrap">
                                    <h2 class="intro-title">Handcrafted<br> &amp; Ethically Sourced</h2>
                                    <div class="intro-item">
                                        <div class="icon">
                                            <span class="wrap animation-horizontal">
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" height="100%" viewBox="0 0 512.001 512.001" width="100%"><g><g><g><g><path d="m479.371 131.029c-3.099 0-6.154-1.436-8.11-4.139-3.236-4.475-2.233-10.727 2.241-13.963l22.638-16.376c4.475-3.239 10.727-2.233 13.964 2.241 3.236 4.475 2.233 10.727-2.241 13.963l-22.638 16.376c-1.772 1.281-3.823 1.898-5.854 1.898z"></path></g></g><g><g><path d="m32.63 131.029c-2.032 0-4.082-.617-5.854-1.898l-22.637-16.376c-4.475-3.237-5.478-9.488-2.241-13.963 3.238-4.474 9.49-5.478 13.964-2.241l22.638 16.375c4.475 3.237 5.478 9.488 2.241 13.963-1.956 2.703-5.012 4.14-8.111 4.14z"></path></g></g><g><g><path d="m256.001 49.025c-5.522 0-10-4.477-10-10v-23.867c0-5.523 4.478-10 10-10s10 4.477 10 10v23.866c0 5.523-4.478 10.001-10 10.001z"></path></g></g><g><path d="m492.647 215.277-77.499-133.949c-1.787-3.09-5.086-4.992-8.655-4.992h-300.986c-3.569 0-6.868 1.902-8.655 4.992l-77.498 133.949c-2.092 3.614-1.717 8.147.939 11.369l227.991 276.558c1.899 2.305 4.729 3.639 7.716 3.639s5.816-1.334 7.716-3.639l85.631-103.871 1.009.399 22.572 57.368c1.505 3.824 5.196 6.338 9.306 6.338s7.801-2.514 9.306-6.338l22.572-57.368 57.228-22.623c3.817-1.509 6.324-5.196 6.324-9.3s-2.507-7.791-6.323-9.3l-57.229-22.623-4.026-10.231 81.621-99.009c2.657-3.222 3.032-7.754.94-11.369zm-25.994-4.992h-113.904l53.737-103.991zm-210.652 248.864-67.465-228.863h22.259c5.522 0 10-4.477 10-10s-4.478-10-10-10h-17.303l62.508-102.427 62.508 102.426h-17.301c-5.522 0-10 4.477-10 10s4.478 10 10 10h22.26zm79.601-259.246-63.204-103.567h116.722zm-167.918 30.382 65.943 223.697-184.414-223.697zm8.713-30.382-53.517-103.567h116.722zm-70.883-93.609 53.736 103.991h-113.902zm172.86 347.689 21.836-74.074 29.588 11.696zm162.089-86.174-37.741 14.919c-2.577 1.019-4.615 3.06-5.63 5.638l-14.857 37.76-14.857-37.76c-1.015-2.578-3.053-4.62-5.63-5.638l-37.741-14.919 37.742-14.92c2.576-1.019 4.614-3.06 5.629-5.638l14.857-37.76 14.857 37.76c1.015 2.578 3.053 4.62 5.629 5.638zm-48.923-89.291c-1.505-3.824-5.196-6.338-9.306-6.338s-7.801 2.514-9.306 6.338l-22.572 57.368-42.071 16.631 36.032-122.232h118.47l-61.075 74.087z"></path><g><path d="m256.18 230.291c-4.12 0-7.897-2.638-9.35-6.483-1.491-3.948-.269-8.58 3.006-11.255 3.235-2.643 7.897-2.987 11.481-.842 3.583 2.144 5.496 6.426 4.674 10.529-.924 4.61-5.103 8.051-9.811 8.051z"></path></g></g></g></g></svg>
                                            </span>
                                        </div>
                                        <div class="content">
                                            <h3 class="title">FAIR PRICING</h3>
                                            <div class="text">Nullam quis ante. Pellentesque libero tortor, tincidunt et, tinciduntamet est.In hac habitasse platea dictumst. Praesent nec nisl a purus blandit viverra</div>
                                        </div>
                                    </div>
                                    <div class="intro-item">
                                        <div class="icon">
                                            <span class="wrap animation-horizontal">
                                                <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" height="100%" viewBox="0 0 511.985 511.985" width="100%"><g><g><path d="m256.002 19.995c-4.193 0-8.038-2.714-9.438-6.667-1.415-3.996-.091-8.565 3.231-11.192 3.218-2.545 7.81-2.846 11.333-.741 3.587 2.144 5.493 6.408 4.697 10.512-.902 4.643-5.097 8.088-9.823 8.088z"></path><path d="m486.898 258.449c12.552-6.567 20.748-20.113 19.768-35.14-.641-9.838-5.073-18.839-12.478-25.343-4.91-4.312-10.737-7.185-16.974-8.444-14.109-91.307-83.346-165.063-174.016-184.544-5.399-1.16-10.723 2.277-11.883 7.68-1.162 5.402 2.278 10.723 7.68 11.884 82.042 17.628 144.813 84.063 158.199 166.49-14.984 5.483-25.248 20.366-24.158 37.083.64 9.831 5.066 18.824 12.46 25.326-8.551 4.454-14.918 11.927-17.963 21.102-3.64 10.962-1.835 22.447 3.935 31.503-1.269-.047-2.548-.03-3.833.054-9.835.642-18.83 5.079-25.331 12.493-7.141 8.146-10.047 18.579-8.897 28.58-.57-.221-1.148-.429-1.732-.623-9.356-3.111-19.359-2.388-28.169 2.032-8.947 4.489-15.278 12.151-18.315 20.944l-81.746-89.114-.161-.16c-4.044-4.041-10.602-4.025-14.626.035l-.032.032c-.002.002-81.832 89.207-81.832 89.207-3.037-8.793-9.368-16.455-18.315-20.944-8.81-4.42-18.817-5.144-28.169-2.032-.584.194-1.162.402-1.732.623 1.15-10.002-1.756-20.435-8.897-28.581-6.501-7.413-15.496-11.85-25.331-12.492-1.284-.085-2.563-.103-3.831-.056 5.769-9.056 7.574-20.539 3.935-31.5-3.046-9.176-9.413-16.649-17.964-21.103 7.394-6.502 11.819-15.495 12.46-25.326 1.09-16.717-9.173-31.6-24.157-37.083 13.363-82.19 76.353-148.774 157.896-166.426 5.366-1.162 9.066-6.345 8.026-11.735-1.066-5.526-6.455-9.066-11.928-7.893-90.28 19.398-159.919 93.388-174.016 184.542-6.234 1.26-12.064 4.135-16.973 8.446-7.405 6.504-11.838 15.504-12.479 25.343-.98 15.028 7.216 28.573 19.768 35.14-10.777 9.503-15.465 24.89-10.66 39.366 3.107 9.358 9.668 16.946 18.478 21.365 5.21 2.614 10.837 3.935 16.5 3.935.477 0 .955-.01 1.433-.028-8.588 13.487-7.683 31.584 3.374 44.198 6.501 7.413 15.496 11.85 25.331 12.492.822.054 1.64.08 2.455.08 4.598 0 9.089-.848 13.29-2.48-1.698 14.954 5.912 30.08 20.119 37.209 5.21 2.614 10.836 3.934 16.499 3.934 3.914 0 7.847-.631 11.67-1.902 4.973-1.653 9.445-4.285 13.207-7.712l91.792 100.065c.005.005.018.019.04.04 4.089 3.962 10.592 3.958 14.72.036l.03-.029 91.836-100.113c3.762 3.427 8.234 6.058 13.207 7.712 3.824 1.271 7.755 1.902 11.67 1.902 5.662 0 11.289-1.32 16.499-3.934 14.206-7.128 21.817-22.255 20.119-37.209 4.201 1.632 8.691 2.48 13.29 2.48.815 0 1.634-.026 2.455-.08 9.835-.642 18.83-5.079 25.331-12.493 11.057-12.613 11.962-30.709 3.375-44.197.477.019.955.028 1.432.028 5.662 0 11.29-1.321 16.5-3.935 8.809-4.419 15.371-12.007 18.478-21.365 4.806-14.475.117-29.862-10.659-39.365zm-18.146-49.608c4.491-.292 8.841 1.184 12.229 4.16 3.391 2.979 5.422 7.101 5.716 11.61.607 9.302-6.459 17.364-15.749 17.971-4.492.296-8.841-1.183-12.23-4.159-3.391-2.978-5.421-7.101-5.715-11.609-.606-9.303 6.459-17.366 15.749-17.973zm-212.76 224.088-32.196-38.257 32.196-38.257 32.195 38.257zm10.006-95.702v-24.429l65.927 71.869h-26.004zm-20.011-24.429v24.429l-39.924 47.44h-26.003zm-220.7-88.188c.294-4.507 2.324-8.63 5.716-11.609 3.106-2.728 7.014-4.197 11.109-4.197.371 0 .746.012 1.121.036 9.29.607 16.355 8.67 15.749 17.973-.294 4.507-2.324 8.631-5.715 11.609-3.389 2.974-7.728 4.445-12.23 4.159-9.291-.606-16.357-8.668-15.75-17.971zm16.591 76.684c-4.032-2.023-7.036-5.497-8.459-9.783-2.937-8.849 1.863-18.438 10.7-21.377 1.749-.581 3.547-.87 5.337-.87 2.59 0 5.163.604 7.546 1.8 4.031 2.023 7.036 5.496 8.459 9.783 2.937 8.849-1.863 18.438-10.701 21.377-4.278 1.422-8.854 1.093-12.882-.93zm51.2 54.354c-3.389 2.977-7.74 4.454-12.23 4.16-4.499-.294-8.614-2.324-11.588-5.716-6.145-7.01-5.447-17.715 1.557-23.864 3.105-2.728 7.013-4.197 11.107-4.197.373 0 .747.012 1.123.036 4.499.294 8.614 2.324 11.588 5.716 6.142 7.011 5.445 17.717-1.557 23.865zm44.184 41.98c-4.28 1.422-8.854 1.093-12.882-.929-8.327-4.177-11.704-14.358-7.528-22.695 2.022-4.035 5.491-7.042 9.77-8.465 1.749-.581 3.546-.87 5.336-.87 2.59 0 5.164.604 7.547 1.8 8.326 4.177 11.704 14.357 7.528 22.694-2.021 4.036-5.492 7.042-9.771 8.465zm68.801 7.05 39.924 47.44v24.429l-65.927-71.869zm59.935 71.869v-24.429l39.923-47.44h26.004zm121.606-79.848c-4.029 2.023-8.604 2.352-12.882.929-4.279-1.423-7.749-4.429-9.771-8.465-4.175-8.337-.797-18.517 7.528-22.694 4.03-2.022 8.604-2.354 12.883-.93 4.279 1.423 7.748 4.429 9.77 8.465 4.176 8.337.799 18.518-7.528 22.695zm55.122-42.607c-2.974 3.392-7.09 5.423-11.588 5.717-4.488.293-8.841-1.183-12.229-4.16-.001 0-.001 0-.001 0-7.003-6.149-7.699-16.855-1.556-23.863 2.974-3.392 7.09-5.423 11.588-5.717.375-.024.749-.036 1.123-.036 4.094 0 8.001 1.469 11.108 4.197 7.002 6.148 7.699 16.853 1.555 23.862zm35.839-62.581c-1.423 4.286-4.426 7.76-8.459 9.783-4.03 2.023-8.604 2.353-12.882.93-8.838-2.939-13.638-12.528-10.7-21.378 1.422-4.285 4.426-7.759 8.458-9.782 4.03-2.023 8.604-2.353 12.882-.93 8.838 2.94 13.638 12.529 10.701 21.377z"></path></g></g></svg>
                                            </span>
                                        </div>
                                        <div class="content">
                                            <h3 class="title">HIGH QUALITY</h3>
                                            <div class="text">Nullam quis ante. Pellentesque libero tortor, tincidunt et, tinciduntamet est.In hac habitasse platea dictumst. Praesent nec nisl a purus blandit viverra</div>
                                        </div>
                                    </div>
                                    <div class="intro-btn">
                                        <a href="shop-grid-left.html" class="button button-black button-arrow animation-horizontal">LEARN MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="section-column right">
                                <a href="#">
                                    <img class="hover-opacity" width="820" height="674" src="{{ asset('client/media/banner/intro-1.jpg') }}" alt="intro">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-padding m-b-70">
                    <div class="section-container large">
                        <!-- Block Products -->
                        <div class="block block-products slider">
                            <div class="block-widget-wrap">
                                <div class="block-title"><h2>Trending Products</h2></div>
                                <div class="block-content">
                                    <div class="content-product-list slick-wrap">
                                        <div class="slick-sliders products-list grid" data-slidestoscroll="true" data-dots="false" data-nav="1" data-columns4="1" data-columns3="2" data-columns2="2" data-columns1="3" data-columns1440="4" data-columns="4">
                                        @foreach ($data as $item)
                                             {{-- Trending Product --}}
                                             
                                                <div class="items">
                                                    <div class="products-entry clearfix product-wapper">
                                                        <div class="products-thumb">
                                                            <div class="product-lable">
                                                                <div class="hot">Hot</div>
                                                            </div>
                                                            <div class="product-thumb-hover">
                                                                <a href="{{ route('client.products.show', $item->id) }}">
                                                                    <img width="600" height="600" src="{{ $item->images->count() > 0 ? asset('upload/'.$item->images->first()->url)  : 'upload/default.jpg' }}" class="post-image" alt="">
                                                                    <img width="600" height="600" src="{{ asset('client/media/product/1-2.jpg') }}" class="hover-image back" alt="">
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
                                                                    <a href="#" class="quickview quickview-button">Quick View <i class="icon-search"></i></a>
                                                                </span>		
                                                            </div>
                                                        </div>
                                                        <div class="products-content">
                                                            <div class="contents">
                                                                <div class="rating">
                                                                    <div class="star star-0"></div><span class="count">(0 review)</span>
                                                                </div>
                                                                <h3 class="product-title"><a href="shop-details.html">{{ $item->name }}</a></h3>
                                                                <span class="price">${{ $item->price }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                        {{-- End Trending Product --}}          
                                        @endforeach            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-padding">
                    <div class="section-container large">
                        <!-- Block Banners (Layout 2) -->
                        <div class="block block-banners layout-2 banners-effect">
                            <div class="block-widget-wrap">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="block-widget-banner m-b-15">
                                            <div class="bg-banner">
                                                <div class="banner-wrapper banners">
                                                    <div class="banner-image">
                                                        <a href="shop-grid-left.html">
                                                            <img width="856" height="496" src="{{ asset('client/media/banner/banner-1-4.jpg') }}" alt="Banner Image">
                                                        </a>
                                                    </div>
                                                    <div class="banner-wrapper-infor">
                                                        <div class="info">
                                                            <div class="content">
                                                                <h3 class="title-banner">Summer Collections</h3>
                                                                <div class="banner-image-description">
                                                                      Freshwater pearl necklace and earrings
                                                                </div>
                                                                <a class="button button-outline thick-border border-white button-arrow" href="shop-grid-left.html">Explore</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="block-widget-banner">
                                            <div class="bg-banner">
                                                <div class="banner-wrapper banners">
                                                    <div class="banner-image">
                                                        <a href="shop-grid-left.html">
                                                            <img width="856" height="496" src="{{ asset('client/media/banner/banner-1-5.jpg') }}" alt="Banner Image">
                                                        </a>
                                                    </div>
                                                    <div class="banner-wrapper-infor">
                                                        <div class="info">
                                                            <div class="content">
                                                                <h3 class="title-banner"> Make It Memorable</h3>
                                                                <div class="banner-image-description">
                                                                     Freshwater pearl necklace and earrings
                                                                </div>
                                                                <a class="button button-outline thick-border border-white button-arrow" href="shop-grid-left.html">Explore</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-padding background-img bg-img-2 m-b-70 p-t-140 p-b-70 m-t-n-130">
                    <div class="section-container">
                        <!-- Block Testimonial -->
                        <div class="block block-testimonial layout-2">
                            <div class="block-widget-wrap">
                                <div class="block-title"><h2>What Our Customers Say</h2></div>
                                <div class="block-content">
                                    <div class="testimonial-wrap slick-wrap">
                                        <div class="slick-sliders" data-slidestoscroll="true" data-slidestoscroll="true" data-nav="1" data-dots="0" data-columns4="1" data-columns3="1" data-columns2="1" data-columns1="2" data-columns="3">
                                            <div class="testimonial-content">
                                                <div class="item">
                                                    <div class="testimonial-item">
                                                        <div class="testimonial-icon">
                                                            <div class="rating">
                                                                <div class="star star-5"></div>
                                                            </div>
                                                        </div>
                                                        <h2 class="testimonial-title">“Amazing piece of history”</h2>
                                                        <div class="testimonial-excerpt">
                                                            Blood bank canine teeth larynx occupational therapist oncologist optician plaque spinal tap stat strep... 
                                                        </div>								
                                                    </div>
                                                    <div class="testimonial-image image-position-top">
                                                        <div class="thumbnail">
                                                            <img width="110" height="110" src="{{ asset('client/media/testimonial/1.jpg') }}" alt="">							
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <h2 class="testimonial-customer-name">Robet Smith</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-content">
                                                <div class="item">
                                                    <div class="testimonial-item">
                                                        <div class="testimonial-icon">
                                                            <div class="rating">
                                                                <div class="star star-4"></div>
                                                            </div>
                                                        </div>
                                                        <h2 class="testimonial-title">“Fabulous Grounds”</h2>
                                                        <div class="testimonial-excerpt">
                                                            Blood bank canine teeth larynx occupational therapist oncologist optician plaque spinal tap stat strep... 
                                                        </div>								
                                                    </div>
                                                    <div class="testimonial-image image-position-top">
                                                        <div class="thumbnail">
                                                            <img width="110" height="110" src="{{ asset('client/media/testimonial/2.jpg') }}" alt="">							
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <h2 class="testimonial-customer-name">Saitama One</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-content">
                                                <div class="item">
                                                    <div class="testimonial-item">
                                                        <div class="testimonial-icon">
                                                            <div class="rating">
                                                                <div class="star star-5"></div>
                                                            </div>
                                                        </div>
                                                        <h2 class="testimonial-title">“Great vineyard tour and tasting!”</h2>
                                                        <div class="testimonial-excerpt">
                                                            Blood bank canine teeth larynx occupational therapist oncologist optician plaque spinal tap stat strep... 
                                                        </div>								
                                                    </div>
                                                    <div class="testimonial-image image-position-top">
                                                        <div class="thumbnail">
                                                            <img width="110" height="110" src="{{ asset('client/media/testimonial/3.jpg') }}" alt="">							
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <h2 class="testimonial-customer-name">Sara Colinton</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-content">
                                                <div class="item">
                                                    <div class="testimonial-item">
                                                        <div class="testimonial-icon">
                                                            <div class="rating">
                                                                <div class="star star-5"></div>
                                                            </div>
                                                        </div>
                                                        <h2 class="testimonial-title">“Stunning Design”</h2>
                                                        <div class="testimonial-excerpt">
                                                            Blood bank canine teeth larynx occupational therapist oncologist optician plaque spinal tap stat strep... 
                                                        </div>								
                                                    </div>
                                                    <div class="testimonial-image image-position-top">
                                                        <div class="thumbnail">
                                                            <img width="110" height="110" src="{{ asset('client/media/testimonial/4.jpg') }}" alt="">							
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <h2 class="testimonial-customer-name">Shetty Jamie</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-padding m-b-80">
                    <div class="section-container">
                        <!-- Block Newsletter (Layout 2) -->
                        <div class="block block-newsletter layout-2 one-col">
                            <div class="block-widget-wrap">
                                <div class="newsletter-title-wrap">
                                    <h2 class="newsletter-title">Latest From MoJuri!</h2>
                                    <div class="newsletter-text">Sign-up to receive 10% off your next purchase. Plus hear about new arrivals and offers.</div>
                                </div>
                                <form action="#" method="post" class="newsletter-form">
                                    <input type="email" name="your-email" value="" size="40" placeholder="Email address">
                                    <span class="btn-submit">
                                        <input type="submit" value="SUBSCRIBE">
                                    </span>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section section-padding top-border p-t-10 p-b-10 m-b-0">
                    <div class="section-container">
                        <!-- Block Image -->
                        <div class="block block-image slider">
                            <div class="block-widget-wrap">
                                <div class="slick-wrap">
                                    <div class="slick-sliders" data-nav="0" data-columns4="1" data-columns3="2" data-columns2="3" data-columns1="4" data-columns1440="4" data-columns="5">
                                        <div class="item slick-slide">
                                            <div class="item-image animation-horizontal">
                                                <a href="#"> 
                                                    <img width="450" height="450" src="{{ asset('client/media/brand/1.jpg') }}" alt="Brand 1">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item slick-slide">
                                            <div class="item-image animation-horizontal">
                                                <a href="#"> 
                                                    <img width="450" height="450" src="{{ asset('client/media/brand/2.jpg') }}" alt="Brand 2">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item slick-slide">
                                            <div class="item-image animation-horizontal">
                                                <a href="#"> 
                                                    <img width="450" height="450" src="{{ asset('client/media/brand/3.jpg') }}" alt="Brand 3">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item slick-slide">
                                            <div class="item-image animation-horizontal">
                                                <a href="#"> 
                                                    <img width="450" height="450" src="{{ asset('client/media/brand/4.jpg') }}" alt="Brand 4">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item slick-slide">
                                            <div class="item-image animation-horizontal">
                                                <a href="#"> 
                                                    <img width="450" height="450" src="{{ asset('client/media/brand/5.jpg') }}" alt="Brand 5">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div><!-- #content -->
        </div><!-- #primary -->
    </div><!-- #main-content -->
</div>
@endsection