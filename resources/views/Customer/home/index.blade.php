@extends('Customer.layouts.main')
@section('content')

<div class="wrap-breadcrumb parallax-breadcrumb">
    <div class="container"></div>
</div>

<!-- ======= Quick view JS ========= -->
<script>
function quickbox() {
    if ($(window).width() > 767) {
        $('.quickview-button').magnificPopup({
            type: 'iframe',
            delegate: 'a',
            preloader: true,
            tLoading: 'Loading image #%curr%...',
        });
    }
}
jQuery(document).ready(function() {
    quickbox();
});
jQuery(window).resize(function() {
    quickbox();
});
</script>
<div class="content-top">
    <div class="main-slider">
        <div id="spinner"></div>
        <div class="swiper-viewport">

            <div id="slideshow0" class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-center "><a href="#"><img
                                src="image/cache/catalog/main-banner-1-1903x700.jpg" alt="Mainbanner1"
                                class="img-responsive" /></a></div>
                    <div class="swiper-slide text-center "><a href="#"><img
                                src="image/cache/catalog/main-banner-2-1903x700.jpg" alt="Mainbanner2"
                                class="img-responsive" /></a></div>
                </div>
            </div>

            <div class="swiper-pagination slideshow0"></div>

            <div class="swiper-pager">
                <ul class="swiper-pager-button">
                    <li class="swiper-button-prev">
                        <a class="swiper-prev"></a>
                    </li>
                    <li class="swiper-button-next">
                        <a class="swiper-next"></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <script type="text/javascript">
   
    $('#slideshow0').swiper({
        mode: 'horizontal',
        slidesPerView: 1,
        pagination: '.slideshow0',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 0,
        autoplay: 5000,
        autoplayDisableOnInteraction: true,
        loop: true,
        effect: 'random'
    });

    // Can also be used with $(document).ready()
    $(window).load(function() {
        $("#spinner").fadeOut("slow");
    });
 
    </script>

</div>

<div class="row home_row">

    <div id="content" class="col-sm-12">
        <div id="czbannercmsblock" class="block czbanners">
            <div class="czbanner_container container">
                <div class="cmsbanners">
                    <div class="one-third cmsbanner-part1">
                        <div class="cmsbanner-inner">
                            <div class="cmsbanner cmsbanner1"><a href="#" class="banner-anchor"><img
                                        src="image/catalog/cms-banner-1.jpg" alt="cms-banner1"
                                        class="banner-image1"></a>
                                <div class="cmsbanner-text">
                                    <div class="title">30% Discount</div>
                                    <div class="main-title">Latest Collection</div>
                                    <div class="shop-button"><a href="#">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one-third cmsbanner-part2">
                        <div class="cmsbanner-inner">
                            <div class="cmsbanner cmsbanner2"><a href="#" class="banner-anchor"><img
                                        src="image/catalog/cms-banner-2.jpg" alt="cms-banner2"
                                        class="banner-image2"></a>
                                <div class="cmsbanner-text">
                                    <div class="title">20% Discount</div>
                                    <div class="main-title">Stylish Collection</div>
                                    <div class="shop-button"><a href="#">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="one-third cmsbanner-part3">
                        <div class="cmsbanner-inner">
                            <div class="cmsbanner cmsbanner3"><a href="#" class="banner-anchor"><img
                                        src="image/catalog/cms-banner-3.jpg" alt="cms-banner3"
                                        class="banner-image3"></a>
                                <div class="cmsbanner-text">
                                    <div class="title">25% Discount</div>
                                    <div class="main-title">Weekend Special</div>
                                    <div class="shop-button"><a href="#">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hometab box" id="product_tabmodule">
            <div class="container">
                <div class="tab-head">
                    <div class="hometab-heading box-heading">
                        Popular Products
                    </div>

                    <div id="categorytabs" class="htabs">
                        <ul class="etabs">
                            <li class="tab">
                                <a href="#categorytab-49" data-toggle="tab">Basque</a>
                            </li>
                            <li class="tab">
                                <a href="#categorytab-53" data-toggle="tab">Zentai</a>
                            </li>
                            <li class="tab">
                                <a href="#categorytab-39" data-toggle="tab">Camisole</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="categorytab-right">

                    <div id="categorytab-49" class="tab-content">
                        <div class="box">
                            <div class="box-content">

                                <div class="customNavigation">
                                    <a class="fa prev fa-arrow-left">&nbsp;</a>
                                    <a class="fa next fa-arrow-right">&nbsp;</a>
                                </div>

                                <div class="box-product product-carousel" id="tabcategory0-carousel">
                                @foreach($product as $p)
                                    <li class="double-slideitem slider-item">
                                 
                                        <ul>
                                  
                                                   
                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexd21c.html?route=product/product&amp;product_id=47">
                                                                <img src="{{$p->image}}"
                                                                    title="Accusantium Doloremque"
                                                                    alt="Accusantium Doloremque"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/02-254x298.jpg"
                                                                    title="Accusantium Doloremque"
                                                                    alt="Accusantium Doloremque" />
                                                            </a>




                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('47 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="index7f5a.html?route=product/quick_view&amp;product_id=47">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('47 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('47 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexd21c.html?route=product/product&amp;product_id=47">{{$p->name}} </a></h4>

                                                                <p class="price">
                                                                    ${{$p->price}}
                                                                    <span class="price-tax">Ex Tax: ${{$p->price_sale}}</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </ul>
                                     
                                    </li>  
                                    @endforeach  
                                </div>
                            </div>
                        </div>

                        <span class="tabcategory0_default_width" style="display:none; visibility:hidden"></span>


                    </div>

                    <div id="categorytab-53" class="tab-content">
                        <div class="box">
                            <div class="box-content">

                                <div class="customNavigation">
                                    <a class="fa prev fa-arrow-left">&nbsp;</a>
                                    <a class="fa next fa-arrow-right">&nbsp;</a>
                                </div>

                                <div class="box-product product-carousel" id="tabcategory1-carousel">


                                    <li class="double-slideitem slider-item">
                                        <ul>

                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexd21c.html?route=product/product&amp;product_id=47">
                                                                <img src="image/cache/catalog/01-254x298.jpg"
                                                                    title="Accusantium Doloremque"
                                                                    alt="Accusantium Doloremque"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/02-254x298.jpg"
                                                                    title="Accusantium Doloremque"
                                                                    alt="Accusantium Doloremque" />
                                                            </a>




                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('47 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="index7f5a.html?route=product/quick_view&amp;product_id=47">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('47 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('47 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexd21c.html?route=product/product&amp;product_id=47">Accusantium
                                                                        Doloremque </a></h4>

                                                                <p class="price">
                                                                    $104.00
                                                                    <span class="price-tax">Ex Tax: $85.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexb8ca.html?route=product/product&amp;product_id=43">
                                                                <img src="image/cache/catalog/02-254x298.jpg"
                                                                    title="Aliquam Porro Quaerat"
                                                                    alt="Aliquam Porro Quaerat"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/14-254x298.jpg"
                                                                    title="Aliquam Porro Quaerat"
                                                                    alt="Aliquam Porro Quaerat" />
                                                            </a>




                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('43 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="indexff8a.html?route=product/quick_view&amp;product_id=43">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('43 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('43 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexb8ca.html?route=product/product&amp;product_id=43">Aliquam
                                                                        Porro Quaerat </a></h4>

                                                                <p class="price">
                                                                    $108.80
                                                                    <span class="price-tax">Ex Tax: $89.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </ul>
                                    </li>


                                    <li class="double-slideitem slider-item">
                                        <ul>

                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexfac8.html?route=product/product&amp;product_id=35">
                                                                <img src="image/cache/catalog/03-254x298.jpg"
                                                                    title="Commodi Consequatur"
                                                                    alt="Commodi Consequatur" class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/04-254x298.jpg"
                                                                    title="Commodi Consequatur"
                                                                    alt="Commodi Consequatur" />
                                                            </a>

                                                            <span class="saleicon sale">Sale</span>


                                                            <div class="percentsaving">2% Off</div>

                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('35 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="index0a97.html?route=product/quick_view&amp;product_id=35">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('35 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('35 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexfac8.html?route=product/product&amp;product_id=35">Commodi
                                                                        Consequatur </a></h4>

                                                                <p class="price">
                                                                    <span class="price-new">$134.00</span> <span
                                                                        class="price-old">$136.40</span>
                                                                    <span class="price-tax">Ex Tax: $110.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexbb02.html?route=product/product&amp;product_id=42">
                                                                <img src="image/cache/catalog/04-254x298.jpg"
                                                                    title="Consectetur Hampden"
                                                                    alt="Consectetur Hampden" class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/10-254x298.jpg"
                                                                    title="Consectetur Hampden"
                                                                    alt="Consectetur Hampden" />
                                                            </a>

                                                            <span class="saleicon sale">Sale</span>


                                                            <div class="percentsaving">8% Off</div>

                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('42 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="index6d6f.html?route=product/quick_view&amp;product_id=42">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('42 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('42 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexbb02.html?route=product/product&amp;product_id=42">Consectetur
                                                                        Hampden </a></h4>

                                                                <p class="price">
                                                                    <span class="price-new">$110.00</span> <span
                                                                        class="price-old">$119.60</span>
                                                                    <span class="price-tax">Ex Tax: $90.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </ul>
                                    </li>


                                    <li class="double-slideitem slider-item">
                                        <ul>

                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexbfcf.html?route=product/product&amp;product_id=31">
                                                                <img src="image/cache/catalog/08-254x298.jpg"
                                                                    title="Laudant Doloremque" alt="Laudant Doloremque"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/13-254x298.jpg"
                                                                    title="Laudant Doloremque"
                                                                    alt="Laudant Doloremque" />
                                                            </a>

                                                            <span class="saleicon sale">Sale</span>


                                                            <div class="percentsaving">6% Off</div>

                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('31 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="index73c4.html?route=product/quick_view&amp;product_id=31">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('31 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('31 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexbfcf.html?route=product/product&amp;product_id=31">Laudant
                                                                        Doloremque </a></h4>

                                                                <p class="price">
                                                                    <span class="price-new">$92.00</span> <span
                                                                        class="price-old">$98.00</span>
                                                                    <span class="price-tax">Ex Tax: $75.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="index5e0b.html?route=product/product&amp;product_id=36">
                                                                <img src="image/cache/catalog/09-254x298.jpg"
                                                                    title="Necessitatibus  Praesentium"
                                                                    alt="Necessitatibus  Praesentium"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/15-254x298.jpg"
                                                                    title="Necessitatibus  Praesentium"
                                                                    alt="Necessitatibus  Praesentium" />
                                                            </a>




                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('36 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="index0d3e.html?route=product/quick_view&amp;product_id=36">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('36 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('36 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="index5e0b.html?route=product/product&amp;product_id=36">Necessitatibus
                                                                        Praesentium </a></h4>

                                                                <p class="price">
                                                                    $119.60
                                                                    <span class="price-tax">Ex Tax: $98.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </ul>
                                    </li>


                                    <li class="double-slideitem slider-item">
                                        <ul>

                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="index531d.html?route=product/product&amp;product_id=45">
                                                                <img src="image/cache/catalog/10-254x298.jpg"
                                                                    title="Neque Porro Quisquam"
                                                                    alt="Neque Porro Quisquam" class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/01-254x298.jpg"
                                                                    title="Neque Porro Quisquam"
                                                                    alt="Neque Porro Quisquam" />
                                                            </a>

                                                            <span class="saleicon sale">Sale</span>


                                                            <div class="percentsaving">3% Off</div>

                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('45 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="index63bb.html?route=product/quick_view&amp;product_id=45">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('45 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('45 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="index531d.html?route=product/product&amp;product_id=45">Neque
                                                                        Porro Quisquam </a></h4>

                                                                <p class="price">
                                                                    <span class="price-new">$115.00</span> <span
                                                                        class="price-old">$118.00</span>
                                                                    <span class="price-tax">Ex Tax: $115.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexcae8.html?route=product/product&amp;product_id=41">
                                                                <img src="image/cache/catalog/11-254x298.jpg"
                                                                    title="Nostrud Exercitation"
                                                                    alt="Nostrud Exercitation" class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/12-254x298.jpg"
                                                                    title="Nostrud Exercitation"
                                                                    alt="Nostrud Exercitation" />
                                                            </a>

                                                            <span class="saleicon sale">Sale</span>


                                                            <div class="percentsaving">6% Off</div>

                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('41 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="index059b.html?route=product/quick_view&amp;product_id=41">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('41 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('41 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexcae8.html?route=product/product&amp;product_id=41">Nostrud
                                                                        Exercitation </a></h4>

                                                                <p class="price">
                                                                    <span class="price-new">$78.80</span> <span
                                                                        class="price-old">$83.60</span>
                                                                    <span class="price-tax">Ex Tax: $64.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </ul>
                                    </li>


                                    <li class="double-slideitem slider-item">
                                        <ul>

                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexc21e.html?route=product/product&amp;product_id=34">
                                                                <img src="image/cache/catalog/12-254x298.jpg"
                                                                    title="Occasion Praesentium"
                                                                    alt="Occasion Praesentium" class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/13-254x298.jpg"
                                                                    title="Occasion Praesentium"
                                                                    alt="Occasion Praesentium" />
                                                            </a>




                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('34 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="indexa341.html?route=product/quick_view&amp;product_id=34">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('34 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('34 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexc21e.html?route=product/product&amp;product_id=34">Occasion
                                                                        Praesentium </a></h4>

                                                                <p class="price">
                                                                    $105.20
                                                                    <span class="price-tax">Ex Tax: $86.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="index9144.html?route=product/product&amp;product_id=40">
                                                                <img src="image/cache/catalog/13-254x298.jpg"
                                                                    title="Praesentium Voluptatum"
                                                                    alt="Praesentium Voluptatum"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/04-254x298.jpg"
                                                                    title="Praesentium Voluptatum"
                                                                    alt="Praesentium Voluptatum" />
                                                            </a>




                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('40 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="index9aba.html?route=product/quick_view&amp;product_id=40">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('40 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('40 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="index9144.html?route=product/product&amp;product_id=40">Praesentium
                                                                        Voluptatum </a></h4>

                                                                <p class="price">
                                                                    $128.00
                                                                    <span class="price-tax">Ex Tax: $105.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </ul>
                                    </li>


                                    <li class="double-slideitem slider-item">
                                        <ul>

                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexa17e.html?route=product/product&amp;product_id=32">
                                                                <img src="image/cache/catalog/14-254x298.jpg"
                                                                    title="Reprehenderit Aliquam"
                                                                    alt="Reprehenderit Aliquam"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/15-254x298.jpg"
                                                                    title="Reprehenderit Aliquam"
                                                                    alt="Reprehenderit Aliquam" />
                                                            </a>

                                                            <span class="saleicon sale">Sale</span>


                                                            <div class="percentsaving">7% Off</div>

                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('32 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="indexcc95.html?route=product/quick_view&amp;product_id=32">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('32 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('32 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexa17e.html?route=product/product&amp;product_id=32">Reprehenderit
                                                                        Aliquam </a></h4>

                                                                <p class="price">
                                                                    <span class="price-new">$110.00</span> <span
                                                                        class="price-old">$118.40</span>
                                                                    <span class="price-tax">Ex Tax: $90.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexb77e.html?route=product/product&amp;product_id=48">
                                                                <img src="image/cache/catalog/15-254x298.jpg"
                                                                    title="Voluptates Repudiandae"
                                                                    alt="Voluptates Repudiandae"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/01-254x298.jpg"
                                                                    title="Voluptates Repudiandae"
                                                                    alt="Voluptates Repudiandae" />
                                                            </a>

                                                            <span class="saleicon sale">Sale</span>


                                                            <div class="percentsaving">13% Off</div>

                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('48 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="indexdd37.html?route=product/quick_view&amp;product_id=48">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('48 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('48 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexb77e.html?route=product/product&amp;product_id=48">Voluptates
                                                                        Repudiandae </a></h4>

                                                                <p class="price">
                                                                    <span class="price-new">$122.00</span> <span
                                                                        class="price-old">$140.00</span>
                                                                    <span class="price-tax">Ex Tax: $100.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </ul>
                                    </li>

                                </div>
                            </div>
                        </div>

                        <span class="tabcategory1_default_width" style="display:none; visibility:hidden"></span>


                    </div>

                    <div id="categorytab-39" class="tab-content">
                        <div class="box">
                            <div class="box-content">

                                <div class="customNavigation">
                                    <a class="fa prev fa-arrow-left">&nbsp;</a>
                                    <a class="fa next fa-arrow-right">&nbsp;</a>
                                </div>

                                <div class="box-product product-carousel" id="tabcategory2-carousel">


                                    <li class="double-slideitem slider-item">
                                        <ul>

                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexd21c.html?route=product/product&amp;product_id=47">
                                                                <img src="image/cache/catalog/01-254x298.jpg"
                                                                    title="Accusantium Doloremque"
                                                                    alt="Accusantium Doloremque"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/02-254x298.jpg"
                                                                    title="Accusantium Doloremque"
                                                                    alt="Accusantium Doloremque" />
                                                            </a>




                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('47 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="index7f5a.html?route=product/quick_view&amp;product_id=47">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('47 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('47 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexd21c.html?route=product/product&amp;product_id=47">Accusantium
                                                                        Doloremque </a></h4>

                                                                <p class="price">
                                                                    $104.00
                                                                    <span class="price-tax">Ex Tax: $85.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexb8ca.html?route=product/product&amp;product_id=43">
                                                                <img src="image/cache/catalog/02-254x298.jpg"
                                                                    title="Aliquam Porro Quaerat"
                                                                    alt="Aliquam Porro Quaerat"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/14-254x298.jpg"
                                                                    title="Aliquam Porro Quaerat"
                                                                    alt="Aliquam Porro Quaerat" />
                                                            </a>




                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('43 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="indexff8a.html?route=product/quick_view&amp;product_id=43">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('43 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('43 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexb8ca.html?route=product/product&amp;product_id=43">Aliquam
                                                                        Porro Quaerat </a></h4>

                                                                <p class="price">
                                                                    $108.80
                                                                    <span class="price-tax">Ex Tax: $89.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </ul>
                                    </li>


                                    <li class="double-slideitem slider-item">
                                        <ul>

                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexbb02.html?route=product/product&amp;product_id=42">
                                                                <img src="image/cache/catalog/04-254x298.jpg"
                                                                    title="Consectetur Hampden"
                                                                    alt="Consectetur Hampden" class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/10-254x298.jpg"
                                                                    title="Consectetur Hampden"
                                                                    alt="Consectetur Hampden" />
                                                            </a>

                                                            <span class="saleicon sale">Sale</span>


                                                            <div class="percentsaving">8% Off</div>

                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('42 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="index6d6f.html?route=product/quick_view&amp;product_id=42">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('42 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('42 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexbb02.html?route=product/product&amp;product_id=42">Consectetur
                                                                        Hampden </a></h4>

                                                                <p class="price">
                                                                    <span class="price-new">$110.00</span> <span
                                                                        class="price-old">$119.60</span>
                                                                    <span class="price-tax">Ex Tax: $90.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexf073.html?route=product/product&amp;product_id=30">
                                                                <img src="image/cache/catalog/05-254x298.jpg"
                                                                    title="Exercitat Virginia Voluptates"
                                                                    alt="Exercitat Virginia Voluptates"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/11-254x298.jpg"
                                                                    title="Exercitat Virginia Voluptates"
                                                                    alt="Exercitat Virginia Voluptates" />
                                                            </a>

                                                            <span class="saleicon sale">Sale</span>


                                                            <div class="percentsaving">11% Off</div>

                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('30 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="indexeca1.html?route=product/quick_view&amp;product_id=30">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('30 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('30 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexf073.html?route=product/product&amp;product_id=30">Exercitat
                                                                        Virginia Voluptates </a></h4>

                                                                <p class="price">
                                                                    <span class="price-new">$104.00</span> <span
                                                                        class="price-old">$116.00</span>
                                                                    <span class="price-tax">Ex Tax: $85.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </ul>
                                    </li>


                                    <li class="double-slideitem slider-item">
                                        <ul>

                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexbfcf.html?route=product/product&amp;product_id=31">
                                                                <img src="image/cache/catalog/08-254x298.jpg"
                                                                    title="Laudant Doloremque" alt="Laudant Doloremque"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/13-254x298.jpg"
                                                                    title="Laudant Doloremque"
                                                                    alt="Laudant Doloremque" />
                                                            </a>

                                                            <span class="saleicon sale">Sale</span>


                                                            <div class="percentsaving">6% Off</div>

                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('31 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="index73c4.html?route=product/quick_view&amp;product_id=31">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('31 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('31 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexbfcf.html?route=product/product&amp;product_id=31">Laudant
                                                                        Doloremque </a></h4>

                                                                <p class="price">
                                                                    <span class="price-new">$92.00</span> <span
                                                                        class="price-old">$98.00</span>
                                                                    <span class="price-tax">Ex Tax: $75.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="index5e0b.html?route=product/product&amp;product_id=36">
                                                                <img src="image/cache/catalog/09-254x298.jpg"
                                                                    title="Necessitatibus  Praesentium"
                                                                    alt="Necessitatibus  Praesentium"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/15-254x298.jpg"
                                                                    title="Necessitatibus  Praesentium"
                                                                    alt="Necessitatibus  Praesentium" />
                                                            </a>




                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('36 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="index0d3e.html?route=product/quick_view&amp;product_id=36">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('36 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('36 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="index5e0b.html?route=product/product&amp;product_id=36">Necessitatibus
                                                                        Praesentium </a></h4>

                                                                <p class="price">
                                                                    $119.60
                                                                    <span class="price-tax">Ex Tax: $98.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </ul>
                                    </li>


                                    <li class="double-slideitem slider-item">
                                        <ul>

                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="index531d.html?route=product/product&amp;product_id=45">
                                                                <img src="image/cache/catalog/10-254x298.jpg"
                                                                    title="Neque Porro Quisquam"
                                                                    alt="Neque Porro Quisquam" class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/01-254x298.jpg"
                                                                    title="Neque Porro Quisquam"
                                                                    alt="Neque Porro Quisquam" />
                                                            </a>

                                                            <span class="saleicon sale">Sale</span>


                                                            <div class="percentsaving">3% Off</div>

                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('45 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="index63bb.html?route=product/quick_view&amp;product_id=45">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('45 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('45 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="index531d.html?route=product/product&amp;product_id=45">Neque
                                                                        Porro Quisquam </a></h4>

                                                                <p class="price">
                                                                    <span class="price-new">$115.00</span> <span
                                                                        class="price-old">$118.00</span>
                                                                    <span class="price-tax">Ex Tax: $115.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexc21e.html?route=product/product&amp;product_id=34">
                                                                <img src="image/cache/catalog/12-254x298.jpg"
                                                                    title="Occasion Praesentium"
                                                                    alt="Occasion Praesentium" class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/13-254x298.jpg"
                                                                    title="Occasion Praesentium"
                                                                    alt="Occasion Praesentium" />
                                                            </a>




                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('34 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="indexa341.html?route=product/quick_view&amp;product_id=34">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('34 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('34 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexc21e.html?route=product/product&amp;product_id=34">Occasion
                                                                        Praesentium </a></h4>

                                                                <p class="price">
                                                                    $105.20
                                                                    <span class="price-tax">Ex Tax: $86.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </ul>
                                    </li>


                                    <li class="double-slideitem slider-item">
                                        <ul>

                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="index9144.html?route=product/product&amp;product_id=40">
                                                                <img src="image/cache/catalog/13-254x298.jpg"
                                                                    title="Praesentium Voluptatum"
                                                                    alt="Praesentium Voluptatum"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/04-254x298.jpg"
                                                                    title="Praesentium Voluptatum"
                                                                    alt="Praesentium Voluptatum" />
                                                            </a>




                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('40 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="index9aba.html?route=product/quick_view&amp;product_id=40">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('40 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('40 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="index9144.html?route=product/product&amp;product_id=40">Praesentium
                                                                        Voluptatum </a></h4>

                                                                <p class="price">
                                                                    $128.00
                                                                    <span class="price-tax">Ex Tax: $105.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexa17e.html?route=product/product&amp;product_id=32">
                                                                <img src="image/cache/catalog/14-254x298.jpg"
                                                                    title="Reprehenderit Aliquam"
                                                                    alt="Reprehenderit Aliquam"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/15-254x298.jpg"
                                                                    title="Reprehenderit Aliquam"
                                                                    alt="Reprehenderit Aliquam" />
                                                            </a>

                                                            <span class="saleicon sale">Sale</span>


                                                            <div class="percentsaving">7% Off</div>

                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('32 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="indexcc95.html?route=product/quick_view&amp;product_id=32">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('32 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('32 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexa17e.html?route=product/product&amp;product_id=32">Reprehenderit
                                                                        Aliquam </a></h4>

                                                                <p class="price">
                                                                    <span class="price-new">$110.00</span> <span
                                                                        class="price-old">$118.40</span>
                                                                    <span class="price-tax">Ex Tax: $90.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </ul>
                                    </li>


                                    <li class="double-slideitem slider-item">
                                        <ul>

                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="index6320.html?route=product/product&amp;product_id=28">
                                                                <img src="image/cache/catalog/07-254x298.jpg"
                                                                    title="Voluptas Assumenda" alt="Voluptas Assumenda"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/01-254x298.jpg"
                                                                    title="Voluptas Assumenda"
                                                                    alt="Voluptas Assumenda" />
                                                            </a>




                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('28 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="index097a.html?route=product/quick_view&amp;product_id=28">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('28 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('28 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="index6320.html?route=product/product&amp;product_id=28">Voluptas
                                                                        Assumenda </a></h4>

                                                                <p class="price">
                                                                    $122.00
                                                                    <span class="price-tax">Ex Tax: $100.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="slider-item">
                                                <div class="product-block product-thumb">
                                                    <div class="product-block-inner">
                                                        <div class="image">
                                                            <a
                                                                href="indexb77e.html?route=product/product&amp;product_id=48">
                                                                <img src="image/cache/catalog/15-254x298.jpg"
                                                                    title="Voluptates Repudiandae"
                                                                    alt="Voluptates Repudiandae"
                                                                    class="img-responsive" />
                                                                <img class="img-responsive hover-image"
                                                                    src="image/cache/catalog/01-254x298.jpg"
                                                                    title="Voluptates Repudiandae"
                                                                    alt="Voluptates Repudiandae" />
                                                            </a>

                                                            <span class="saleicon sale">Sale</span>


                                                            <div class="percentsaving">13% Off</div>

                                                            <div class="stock_status"></div>

                                                            <div class="button-group">
                                                                <button class="wishlist" type="button"
                                                                    data-toggle="tooltip" title="Add to Wish List "
                                                                    onclick="wishlist.add('48 ');">
                                                                    <i class="fa fa-heart"></i></button>
                                                                <div class="quickview-button" data-toggle="tooltip"
                                                                    title="Quick view"> <a class="quickbox"
                                                                        href="indexdd37.html?route=product/quick_view&amp;product_id=48">
                                                                        <i class="fa fa-eye" aria-hidden="true"></i></a>
                                                                </div>
                                                                <button class="compare" type="button"
                                                                    data-toggle="tooltip" title="Add to Compare "
                                                                    onclick="compare.add('48 ');">
                                                                    <i class="fa fa-exchange"></i></button>
                                                                <button type="button" title="Add to Cart"
                                                                    data-toggle="tooltip" class="addtocart"
                                                                    onclick="cart.add('48 ');">
                                                                    <i class="fa fa-shopping-cart"></i><span>Add to
                                                                        Cart</span></button>
                                                            </div>
                                                        </div>

                                                        <div class="product-details">
                                                            <div class="caption">

                                                                <h4><a
                                                                        href="indexb77e.html?route=product/product&amp;product_id=48">Voluptates
                                                                        Repudiandae </a></h4>

                                                                <p class="price">
                                                                    <span class="price-new">$122.00</span> <span
                                                                        class="price-old">$140.00</span>
                                                                    <span class="price-tax">Ex Tax: $100.00</span>
                                                                </p>

                                                                <div class="rating">
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    <span class="fa fa-stack"><i
                                                                            class="fa fa-star fa-stack-2x"></i><i
                                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </ul>
                                    </li>

                                </div>
                            </div>
                        </div>

                        <span class="tabcategory2_default_width" style="display:none; visibility:hidden"></span>


                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
        $('#categorytabs a').tabs();
        </script>
        <div id="czcategorylistblock" class="czcategory_listblock">
            <div class="parallax czparallax_1" data-source-url="image/catalog/categoryimg-parallax-bg.jpg">
                <div class="categorylist-container container">
                    <div class="categorylist-inner">
                        <div class="box-heading">Top Category</div>
                        <div class="customNavigation"><a class="btn-prev czcategorylist_prev">prev</a> <a
                                class="btn-next czcategorylist_next">next</a></div>
                        <div class="czcategory_block">
                            <div class="category_lists">
                                <ul id="ourcategory-carousel" class="owl-carousel">
                                    <li class="category_item item">
                                        <div class="cate_image">
                                            <div class="cate-inner">
                                                <a href="#"><img src="image/catalog/categorylist-img1.jpg"
                                                        class="img-responsive" alt="category-icon1.png"></a>
                                                <div class="category_details">
                                                    <div class="category_list">
                                                        <div class="category_title"><a href="#">Chemises</a>
                                                            <div>
                                                                <div class="category_subtitle">15 items</div>
                                                                <div class="category_desc">it is a long established fact
                                                                    that reader will be distracted by the readable
                                                                    contient of an adipisci...</div>
                                                                <div class="view_more"><a href="#">View More</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="category_item item">
                                        <div class="cate_image">
                                            <div class="cate-inner">
                                                <a href="#"><img src="image/catalog/categorylist-img2.jpg"
                                                        class="img-responsive" alt="category-icon2.png"></a>
                                                <div class="category_details">
                                                    <div class="category_list">
                                                        <div class="category_title"><a href="#">Bodysuits</a>
                                                            <div>
                                                                <div class="category_subtitle">12 items</div>
                                                                <div class="category_desc">Lorem Ipsum generators on the
                                                                    Internet tend to repeat predefined chunks as
                                                                    necessary, making...</div>
                                                                <div class="view_more"><a href="#">View More</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="category_item item">
                                        <div class="cate_image">
                                            <div class="cate-inner">
                                                <a href="#"><img src="image/catalog/categorylist-img3.jpg"
                                                        class="img-responsive" alt="category-icon3.png"></a>
                                                <div class="category_details">
                                                    <div class="category_list">
                                                        <div class="category_title"><a href="#">Crotchless</a>
                                                            <div>
                                                                <div class="category_subtitle">14 items</div>
                                                                <div class="category_desc">perspiciatis unde omnis iste
                                                                    natus error sit voluptatem accusantium doloremque
                                                                    laudantium,...</div>
                                                                <div class="view_more"><a href="#">View More</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="category_item item">
                                        <div class="cate_image">
                                            <div class="cate-inner">
                                                <a href="#"><img src="image/catalog/categorylist-img4.jpg"
                                                        class="img-responsive" alt="category-icon4.png"></a>
                                                <div class="category_details">
                                                    <div class="category_list">
                                                        <div class="category_title"><a href="#">Babydoll</a>
                                                            <div>
                                                                <div class="category_subtitle">20 items</div>
                                                                <div class="category_desc">Neque porro quisquam est, qui
                                                                    dolorem ipsum quia dolor sit amet, consectetur,
                                                                    adipisci velit,...</div>
                                                                <div class="view_more"><a href="#">View More</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="category_item item">
                                        <div class="cate_image">
                                            <div class="cate-inner">
                                                <a href="#"><img src="image/catalog/categorylist-img5.jpg"
                                                        class="img-responsive" alt="category-icon5.png"></a>
                                                <div class="category_details">
                                                    <div class="category_list">
                                                        <div class="category_title"><a href="#">Corset</a>
                                                            <div>
                                                                <div class="category_subtitle">16 items</div>
                                                                <div class="category_desc">certain circumstances and
                                                                    owing to the claims of duty or the obligations of
                                                                    business it will...</div>
                                                                <div class="view_more"><a href="#">View More</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="czoffercmsblock" class="block czoffer-cms">
            <div class="container">
                <div class="offercmsdetail">
                    <div class="offercms-text">
                        <div class="offer-title">Free Shipping</div>
                        <div class="offer-desc">Free Delivery Now On Your First Order and over $200</div>
                        <div class="offer-price">- Only $200*</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box featured">
            <div class="container">
                <div class="box-head">
                    <div class="box-heading">Featurde Products</div>
                </div>
                <div class="box-content">
                    <div class="customNavigation">
                        <a class="fa prev fa-arrow-left">&nbsp;</a>
                        <a class="fa next fa-arrow-right">&nbsp;</a>
                    </div>

                    <div class="box-product product-carousel" id="featured-carousel">
                        <div class="slider-item">
                            <div class="product-block product-thumb transition">
                                <div class="product-block-inner">
                                    <div class="image">
                                        <a href="indexfac8.html?route=product/product&amp;product_id=35">
                                            <img src="image/cache/catalog/03-254x298.jpg" title="Commodi Consequatur"
                                                alt="Commodi Consequatur" class="img-responsive reg-image" />
                                            <img class="img-responsive hover-image"
                                                src="image/cache/catalog/04-254x298.jpg" title="Commodi Consequatur"
                                                alt="Commodi Consequatur" />
                                        </a>


                                        <span class="saleicon sale">Sale</span>


                                        <div class="percentsaving">2% Off</div>

                                        <div class="button-group">
                                            <button class="wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List " onclick="wishlist.add('35 ');"><i
                                                    class="fa fa-heart"></i></button>
                                            <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a
                                                    class="quickbox"
                                                    href="index0a97.html?route=product/quick_view&amp;product_id=35">
                                                    <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                            <button class="compare" type="button" data-toggle="tooltip"
                                                title="Add to Compare " onclick="compare.add('35 ');"><i
                                                    class="fa fa-exchange"></i></button>
                                            <button type="button" class="addtocart" data-toggle="tooltip"
                                                title="Add to Cart " onclick="cart.add('35 ');"><i
                                                    class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
                                        </div>
                                    </div>

                                    <div class="product-details">
                                        <div class="caption">

                                            <h4><a href="indexfac8.html?route=product/product&amp;product_id=35">Commodi
                                                    Consequatur </a></h4>

                                            <p class="price">
                                                <span class="price-new">$134.00</span> <span
                                                    class="price-old">$136.40</span>
                                                <span class="price-tax">Ex Tax: $110.00</span>
                                            </p>

                                            <div class="rating">
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="product-block product-thumb transition">
                                <div class="product-block-inner">
                                    <div class="image">
                                        <a href="indexbb02.html?route=product/product&amp;product_id=42">
                                            <img src="image/cache/catalog/04-254x298.jpg" title="Consectetur Hampden"
                                                alt="Consectetur Hampden" class="img-responsive reg-image" />
                                            <img class="img-responsive hover-image"
                                                src="image/cache/catalog/10-254x298.jpg" title="Consectetur Hampden"
                                                alt="Consectetur Hampden" />
                                        </a>


                                        <span class="saleicon sale">Sale</span>


                                        <div class="percentsaving">8% Off</div>

                                        <div class="button-group">
                                            <button class="wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List " onclick="wishlist.add('42 ');"><i
                                                    class="fa fa-heart"></i></button>
                                            <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a
                                                    class="quickbox"
                                                    href="index6d6f.html?route=product/quick_view&amp;product_id=42">
                                                    <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                            <button class="compare" type="button" data-toggle="tooltip"
                                                title="Add to Compare " onclick="compare.add('42 ');"><i
                                                    class="fa fa-exchange"></i></button>
                                            <button type="button" class="addtocart" data-toggle="tooltip"
                                                title="Add to Cart " onclick="cart.add('42 ');"><i
                                                    class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
                                        </div>
                                    </div>

                                    <div class="product-details">
                                        <div class="caption">

                                            <h4><a href="indexbb02.html?route=product/product&amp;product_id=42">Consectetur
                                                    Hampden </a></h4>

                                            <p class="price">
                                                <span class="price-new">$110.00</span> <span
                                                    class="price-old">$119.60</span>
                                                <span class="price-tax">Ex Tax: $90.00</span>
                                            </p>

                                            <div class="rating">
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="product-block product-thumb transition">
                                <div class="product-block-inner">
                                    <div class="image">
                                        <a href="indexb8ca.html?route=product/product&amp;product_id=43">
                                            <img src="image/cache/catalog/02-254x298.jpg" title="Aliquam Porro Quaerat"
                                                alt="Aliquam Porro Quaerat" class="img-responsive reg-image" />
                                            <img class="img-responsive hover-image"
                                                src="image/cache/catalog/14-254x298.jpg" title="Aliquam Porro Quaerat"
                                                alt="Aliquam Porro Quaerat" />
                                        </a>




                                        <div class="button-group">
                                            <button class="wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List " onclick="wishlist.add('43 ');"><i
                                                    class="fa fa-heart"></i></button>
                                            <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a
                                                    class="quickbox"
                                                    href="indexff8a.html?route=product/quick_view&amp;product_id=43">
                                                    <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                            <button class="compare" type="button" data-toggle="tooltip"
                                                title="Add to Compare " onclick="compare.add('43 ');"><i
                                                    class="fa fa-exchange"></i></button>
                                            <button type="button" class="addtocart" data-toggle="tooltip"
                                                title="Add to Cart " onclick="cart.add('43 ');"><i
                                                    class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
                                        </div>
                                    </div>

                                    <div class="product-details">
                                        <div class="caption">

                                            <h4><a href="indexb8ca.html?route=product/product&amp;product_id=43">Aliquam
                                                    Porro Quaerat </a></h4>

                                            <p class="price">
                                                $108.80
                                                <span class="price-tax">Ex Tax: $89.00</span>
                                            </p>

                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="product-block product-thumb transition">
                                <div class="product-block-inner">
                                    <div class="image">
                                        <a href="indexd21c.html?route=product/product&amp;product_id=47">
                                            <img src="image/cache/catalog/01-254x298.jpg" title="Accusantium Doloremque"
                                                alt="Accusantium Doloremque" class="img-responsive reg-image" />
                                            <img class="img-responsive hover-image"
                                                src="image/cache/catalog/02-254x298.jpg" title="Accusantium Doloremque"
                                                alt="Accusantium Doloremque" />
                                        </a>




                                        <div class="button-group">
                                            <button class="wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List " onclick="wishlist.add('47 ');"><i
                                                    class="fa fa-heart"></i></button>
                                            <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a
                                                    class="quickbox"
                                                    href="index7f5a.html?route=product/quick_view&amp;product_id=47">
                                                    <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                            <button class="compare" type="button" data-toggle="tooltip"
                                                title="Add to Compare " onclick="compare.add('47 ');"><i
                                                    class="fa fa-exchange"></i></button>
                                            <button type="button" class="addtocart" data-toggle="tooltip"
                                                title="Add to Cart " onclick="cart.add('47 ');"><i
                                                    class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
                                        </div>
                                    </div>

                                    <div class="product-details">
                                        <div class="caption">

                                            <h4><a href="indexd21c.html?route=product/product&amp;product_id=47">Accusantium
                                                    Doloremque </a></h4>

                                            <p class="price">
                                                $104.00
                                                <span class="price-tax">Ex Tax: $85.00</span>
                                            </p>

                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="product-block product-thumb transition">
                                <div class="product-block-inner">
                                    <div class="image">
                                        <a href="indexf073.html?route=product/product&amp;product_id=30">
                                            <img src="image/cache/catalog/05-254x298.jpg"
                                                title="Exercitat Virginia Voluptates"
                                                alt="Exercitat Virginia Voluptates" class="img-responsive reg-image" />
                                            <img class="img-responsive hover-image"
                                                src="image/cache/catalog/11-254x298.jpg"
                                                title="Exercitat Virginia Voluptates"
                                                alt="Exercitat Virginia Voluptates" />
                                        </a>


                                        <span class="saleicon sale">Sale</span>


                                        <div class="percentsaving">11% Off</div>

                                        <div class="button-group">
                                            <button class="wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List " onclick="wishlist.add('30 ');"><i
                                                    class="fa fa-heart"></i></button>
                                            <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a
                                                    class="quickbox"
                                                    href="indexeca1.html?route=product/quick_view&amp;product_id=30">
                                                    <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                            <button class="compare" type="button" data-toggle="tooltip"
                                                title="Add to Compare " onclick="compare.add('30 ');"><i
                                                    class="fa fa-exchange"></i></button>
                                            <button type="button" class="addtocart" data-toggle="tooltip"
                                                title="Add to Cart " onclick="cart.add('30 ');"><i
                                                    class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
                                        </div>
                                    </div>

                                    <div class="product-details">
                                        <div class="caption">

                                            <h4><a href="indexf073.html?route=product/product&amp;product_id=30">Exercitat
                                                    Virginia Voluptates </a></h4>

                                            <p class="price">
                                                <span class="price-new">$104.00</span> <span
                                                    class="price-old">$116.00</span>
                                                <span class="price-tax">Ex Tax: $85.00</span>
                                            </p>

                                            <div class="rating">
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="product-block product-thumb transition">
                                <div class="product-block-inner">
                                    <div class="image">
                                        <a href="indexbfcf.html?route=product/product&amp;product_id=31">
                                            <img src="image/cache/catalog/08-254x298.jpg" title="Laudant Doloremque"
                                                alt="Laudant Doloremque" class="img-responsive reg-image" />
                                            <img class="img-responsive hover-image"
                                                src="image/cache/catalog/13-254x298.jpg" title="Laudant Doloremque"
                                                alt="Laudant Doloremque" />
                                        </a>


                                        <span class="saleicon sale">Sale</span>


                                        <div class="percentsaving">6% Off</div>

                                        <div class="button-group">
                                            <button class="wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List " onclick="wishlist.add('31 ');"><i
                                                    class="fa fa-heart"></i></button>
                                            <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a
                                                    class="quickbox"
                                                    href="index73c4.html?route=product/quick_view&amp;product_id=31">
                                                    <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                            <button class="compare" type="button" data-toggle="tooltip"
                                                title="Add to Compare " onclick="compare.add('31 ');"><i
                                                    class="fa fa-exchange"></i></button>
                                            <button type="button" class="addtocart" data-toggle="tooltip"
                                                title="Add to Cart " onclick="cart.add('31 ');"><i
                                                    class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
                                        </div>
                                    </div>

                                    <div class="product-details">
                                        <div class="caption">

                                            <h4><a href="indexbfcf.html?route=product/product&amp;product_id=31">Laudant
                                                    Doloremque </a></h4>

                                            <p class="price">
                                                <span class="price-new">$92.00</span> <span
                                                    class="price-old">$98.00</span>
                                                <span class="price-tax">Ex Tax: $75.00</span>
                                            </p>

                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="product-block product-thumb transition">
                                <div class="product-block-inner">
                                    <div class="image">
                                        <a href="index0f47.html?route=product/product&amp;product_id=29">
                                            <img src="image/cache/catalog/06-254x298.jpg" title="Laborum Porro Eveniet"
                                                alt="Laborum Porro Eveniet" class="img-responsive reg-image" />
                                            <img class="img-responsive hover-image"
                                                src="image/cache/catalog/07-254x298.jpg" title="Laborum Porro Eveniet"
                                                alt="Laborum Porro Eveniet" />
                                        </a>




                                        <div class="button-group">
                                            <button class="wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List " onclick="wishlist.add('29 ');"><i
                                                    class="fa fa-heart"></i></button>
                                            <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a
                                                    class="quickbox"
                                                    href="indexf72e.html?route=product/quick_view&amp;product_id=29">
                                                    <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                            <button class="compare" type="button" data-toggle="tooltip"
                                                title="Add to Compare " onclick="compare.add('29 ');"><i
                                                    class="fa fa-exchange"></i></button>
                                            <button type="button" class="addtocart" data-toggle="tooltip"
                                                title="Add to Cart " onclick="cart.add('29 ');"><i
                                                    class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
                                        </div>
                                    </div>

                                    <div class="product-details">
                                        <div class="caption">

                                            <h4><a href="index0f47.html?route=product/product&amp;product_id=29">Laborum
                                                    Porro Eveniet </a></h4>

                                            <p class="price">
                                                $97.99
                                                <span class="price-tax">Ex Tax: $79.99</span>
                                            </p>

                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="product-block product-thumb transition">
                                <div class="product-block-inner">
                                    <div class="image">
                                        <a href="indexcae8.html?route=product/product&amp;product_id=41">
                                            <img src="image/cache/catalog/11-254x298.jpg" title="Nostrud Exercitation"
                                                alt="Nostrud Exercitation" class="img-responsive reg-image" />
                                            <img class="img-responsive hover-image"
                                                src="image/cache/catalog/12-254x298.jpg" title="Nostrud Exercitation"
                                                alt="Nostrud Exercitation" />
                                        </a>


                                        <span class="saleicon sale">Sale</span>


                                        <div class="percentsaving">6% Off</div>

                                        <div class="button-group">
                                            <button class="wishlist" type="button" data-toggle="tooltip"
                                                title="Add to Wish List " onclick="wishlist.add('41 ');"><i
                                                    class="fa fa-heart"></i></button>
                                            <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a
                                                    class="quickbox"
                                                    href="index059b.html?route=product/quick_view&amp;product_id=41">
                                                    <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                            <button class="compare" type="button" data-toggle="tooltip"
                                                title="Add to Compare " onclick="compare.add('41 ');"><i
                                                    class="fa fa-exchange"></i></button>
                                            <button type="button" class="addtocart" data-toggle="tooltip"
                                                title="Add to Cart " onclick="cart.add('41 ');"><i
                                                    class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
                                        </div>
                                    </div>

                                    <div class="product-details">
                                        <div class="caption">

                                            <h4><a href="indexcae8.html?route=product/product&amp;product_id=41">Nostrud
                                                    Exercitation </a></h4>

                                            <p class="price">
                                                <span class="price-new">$78.80</span> <span
                                                    class="price-old">$83.60</span>
                                                <span class="price-tax">Ex Tax: $64.00</span>
                                            </p>

                                            <div class="rating">
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="featured_default_width" style="display:none; visibility:hidden"></span>
                </div>

            </div>
        </div>


        <div class="box blogs">
            <div class="container">

                <div class="box-head">
                    <div class="box-heading">Latest Blog</div>
                </div>
                <div class="box-content">
                    <div class="customNavigation">
                        <a class="fa prev czblog_prev"></a>
                        <a class="fa next czblog_next"></a>
                    </div>

                    <div class="box-product  owl-carousel blogcarousel " id="blog-carousel">

                        <div class="blog-item">
                            <div class="product-block">
                                <div class="product-block-inner">

                                    <div class="blog-left">
                                        <div class="blog-image">
                                            <img src="image/cache/catalog/blog-1-1105x671.jpg" alt="Latest Blog"
                                                title="Latest Blog" class="img-thumbnail" />
                                            <div class="post-image-hover"> </div>
                                            <p class="post_hover"><a class="icon zoom" title="Click to view Full Image "
                                                    href="image/cache/catalog/blog-1-1105x671.jpg"
                                                    data-lightbox="example-set"><i class="fa fa-search-plus"></i> </a>
                                                <a class="icon readmore_link" title="Click to view Read More "
                                                    href="index5a4b.html?route=information/blogger&amp;blogger_id=1"><i
                                                        class="fa fa-link"></i></a>
                                            </p>
                                        </div>

                                    </div>


                                    <div class="blog-right">

                                        <div class="date-comment">
                                            <div class="date-time"> <i class="fa fa-calendar"></i>Feb 28, 2020</div>
                                        </div>

                                        <h4 class="blog_title"><a
                                                href="index5a4b.html?route=information/blogger&amp;blogger_id=1">Lorem
                                                Ipsum is therefore always free from repetition</a> </h4>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-item">
                            <div class="product-block">
                                <div class="product-block-inner">

                                    <div class="blog-left">
                                        <div class="blog-image">
                                            <img src="image/cache/catalog/blog-4-1105x671.jpg" alt="Latest Blog"
                                                title="Latest Blog" class="img-thumbnail" />
                                            <div class="post-image-hover"> </div>
                                            <p class="post_hover"><a class="icon zoom" title="Click to view Full Image "
                                                    href="image/cache/catalog/blog-4-1105x671.jpg"
                                                    data-lightbox="example-set"><i class="fa fa-search-plus"></i> </a>
                                                <a class="icon readmore_link" title="Click to view Read More "
                                                    href="index4b1d.html?route=information/blogger&amp;blogger_id=4"><i
                                                        class="fa fa-link"></i></a>
                                            </p>
                                        </div>

                                    </div>


                                    <div class="blog-right">

                                        <div class="date-comment">
                                            <div class="date-time"> <i class="fa fa-calendar"></i>Feb 18, 2020</div>
                                        </div>

                                        <h4 class="blog_title"><a
                                                href="index4b1d.html?route=information/blogger&amp;blogger_id=4">Lorem
                                                Ipsum is therefore always free from repetition humour</a> </h4>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-item">
                            <div class="product-block">
                                <div class="product-block-inner">

                                    <div class="blog-left">
                                        <div class="blog-image">
                                            <img src="image/cache/catalog/blog-3-1105x671.jpg" alt="Latest Blog"
                                                title="Latest Blog" class="img-thumbnail" />
                                            <div class="post-image-hover"> </div>
                                            <p class="post_hover"><a class="icon zoom" title="Click to view Full Image "
                                                    href="image/cache/catalog/blog-3-1105x671.jpg"
                                                    data-lightbox="example-set"><i class="fa fa-search-plus"></i> </a>
                                                <a class="icon readmore_link" title="Click to view Read More "
                                                    href="indexaa69.html?route=information/blogger&amp;blogger_id=3"><i
                                                        class="fa fa-link"></i></a>
                                            </p>
                                        </div>

                                    </div>


                                    <div class="blog-right">

                                        <div class="date-comment">
                                            <div class="date-time"> <i class="fa fa-calendar"></i>Feb 14, 2020</div>
                                        </div>

                                        <h4 class="blog_title"><a
                                                href="indexaa69.html?route=information/blogger&amp;blogger_id=3">Many
                                                desktop publishing packages and web page editors</a> </h4>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-item">
                            <div class="product-block">
                                <div class="product-block-inner">

                                    <div class="blog-left">
                                        <div class="blog-image">
                                            <img src="image/cache/catalog/blog-2-1105x671.jpg" alt="Latest Blog"
                                                title="Latest Blog" class="img-thumbnail" />
                                            <div class="post-image-hover"> </div>
                                            <p class="post_hover"><a class="icon zoom" title="Click to view Full Image "
                                                    href="image/cache/catalog/blog-2-1105x671.jpg"
                                                    data-lightbox="example-set"><i class="fa fa-search-plus"></i> </a>
                                                <a class="icon readmore_link" title="Click to view Read More "
                                                    href="index5463.html?route=information/blogger&amp;blogger_id=2"><i
                                                        class="fa fa-link"></i></a>
                                            </p>
                                        </div>

                                    </div>


                                    <div class="blog-right">

                                        <div class="date-comment">
                                            <div class="date-time"> <i class="fa fa-calendar"></i>Feb 10, 2020</div>
                                        </div>

                                        <h4 class="blog_title"><a
                                                href="index5463.html?route=information/blogger&amp;blogger_id=2">Contrary
                                                to popular belief Lorem Ipsum is not simply random text</a> </h4>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-item">
                            <div class="product-block">
                                <div class="product-block-inner">

                                    <div class="blog-left">
                                        <div class="blog-image">
                                            <img src="image/cache/catalog/blog-5-1105x671.jpg" alt="Latest Blog"
                                                title="Latest Blog" class="img-thumbnail" />
                                            <div class="post-image-hover"> </div>
                                            <p class="post_hover"><a class="icon zoom" title="Click to view Full Image "
                                                    href="image/cache/catalog/blog-5-1105x671.jpg"
                                                    data-lightbox="example-set"><i class="fa fa-search-plus"></i> </a>
                                                <a class="icon readmore_link" title="Click to view Read More "
                                                    href="indexed5d.html?route=information/blogger&amp;blogger_id=5"><i
                                                        class="fa fa-link"></i></a>
                                            </p>
                                        </div>

                                    </div>


                                    <div class="blog-right">

                                        <div class="date-comment">
                                            <div class="date-time"> <i class="fa fa-calendar"></i>Jan 28, 2020</div>
                                        </div>

                                        <h4 class="blog_title"><a
                                                href="indexed5d.html?route=information/blogger&amp;blogger_id=5">The
                                                standard chunk of Lorem Ipsum used since the 1500s</a> </h4>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-item">
                            <div class="product-block">
                                <div class="product-block-inner">

                                    <div class="blog-left">
                                        <div class="blog-image">
                                            <img src="image/cache/catalog/blog-6-1105x671.jpg" alt="Latest Blog"
                                                title="Latest Blog" class="img-thumbnail" />
                                            <div class="post-image-hover"> </div>
                                            <p class="post_hover"><a class="icon zoom" title="Click to view Full Image "
                                                    href="image/cache/catalog/blog-6-1105x671.jpg"
                                                    data-lightbox="example-set"><i class="fa fa-search-plus"></i> </a>
                                                <a class="icon readmore_link" title="Click to view Read More "
                                                    href="index2c9f.html?route=information/blogger&amp;blogger_id=6"><i
                                                        class="fa fa-link"></i></a>
                                            </p>
                                        </div>

                                    </div>


                                    <div class="blog-right">

                                        <div class="date-comment">
                                            <div class="date-time"> <i class="fa fa-calendar"></i>Jan 25, 2020</div>
                                        </div>

                                        <h4 class="blog_title"><a
                                                href="index2c9f.html?route=information/blogger&amp;blogger_id=6">There
                                                are many variations of passages of Lorem Ipsum available</a> </h4>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="buttons text-center">
                        <button type="button" onclick="location='indexc295.html?route=information/blogger/blogs';"
                            class="btn btn-primary">See all Blogs</button>
                    </div>
                </div>
            </div>
        </div>
        <span class="blog_default_width" style="display:none; visibility:hidden"></span>

        <script type="text/javascript">

        $(document).ready(function() {
            $('.blogcarousel').owlCarousel({
                items: 4,
                singleItem: false,
                navigation: false,
                pagination: false,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [991, 2],
                itemsTablet: [480, 1]
            });
            // Custom Navigation Events
            $(".czblog_next").click(function() {
                $('.blogcarousel').trigger('owl.next');
            })
            $(".czblog_prev").click(function() {
                $('.blogcarousel').trigger('owl.prev');
            });
        });
   
        </script>
        <div id="carousel-0" class="banners-slider-carousel box">
            <div class="container">
                <div class="box-heading">Top Brands</div>
                <div class="carousel-block">
                    <div class="customNavigation">
                        <a class="brand-prev fa prev">&nbsp;</a>
                        <a class="brand-next fa next">&nbsp;</a>
                    </div>
                    <div class="brand-carousel" id="module-0-carousel">
                        <div class="slider-item">
                            <div class="product-block">
                                <div class="product-block-inner">
                                    <img src="image/cache/catalog/1-130x87.png" alt="Starbucks" />
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="product-block">
                                <div class="product-block-inner">
                                    <img src="image/cache/catalog/2-130x87.png" alt="Nintendo" />
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="product-block">
                                <div class="product-block-inner">
                                    <img src="image/cache/catalog/3-130x87.png" alt="Dell" />
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="product-block">
                                <div class="product-block-inner">
                                    <img src="image/cache/catalog/4-130x87.png" alt="Disney" />
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="product-block">
                                <div class="product-block-inner">
                                    <img src="image/cache/catalog/5-130x87.png" alt="Harley Davidson" />
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="product-block">
                                <div class="product-block-inner">
                                    <img src="image/cache/catalog/6-130x87.png" alt="Canon" />
                                </div>
                            </div>
                        </div>
                        <div class="slider-item">
                            <div class="product-block">
                                <div class="product-block-inner">
                                    <img src="image/cache/catalog/7-130x87.png" alt="Burger King" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="module_default_width" style="display:none; visibility:hidden"></span>
    </div>

</div>

<span class="testimonial_default_width" style="display: none; visibility: hidden;"></span>

<script type="text/javascript">
$(document).ready(function() {

    $('#ourcategory-carousel').owlCarousel({
        items: 4,
        singleItem: false,
        navigation: false,
        pagination: true,
        autoPlay: false,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [650, 2],
        itemsMobile: [400, 1]
    });
    // Custom Navigation Events
    $(".czcategorylist_next").click(function() {
        $('#ourcategory-carousel').trigger('owl.next');
    })
    $(".czcategorylist_prev").click(function() {
        $('#ourcategory-carousel').trigger('owl.prev');
    });

    $('.brand-carousel').owlCarousel({
        items: 6,
        itemsDesktop: [1199, 4],
        itemsDesktopSmall: [991, 3],
        itemsTablet: [480, 2],
        itemsMobile: [320, 1],
        singleItem: false,
        navigation: false,
        pagination: false,
        autoPlay: true
    });
    // Custom Navigation Events
    $(".brand-next").click(function() {
        $('.brand-carousel').trigger('owl.next');
    })
    $(".brand-prev").click(function() {
        $('.brand-carousel').trigger('owl.prev');
    });

    $('#testimonial-carousel').owlCarousel({
        singleItem: true,
        navigation: false,
        pagination: true,
        autoPlay: true
    });

});
</script>
@stop