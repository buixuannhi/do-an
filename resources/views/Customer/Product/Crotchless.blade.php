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
<div id="product-category" class="container">
    <ul class="breadcrumb">
        <li><a href="index9328.html?route=common/home"><i class="fa fa-home"></i></a></li>
        <li><a href="index73b3.html?route=product/category&amp;path=59">Crotchless</a></li>
    </ul>
    <div class="row">
        <aside id="column-left" class="col-sm-3 hidden-xs">
            <div class="box">
                <div class="box-heading">Categories</div>
                <div class="box-content">
                    <ul class="box-category treeview-list treeview">
                        <li>
                            <a href="index98dc.html?route=product/category&amp;path=20">Chemises</a>
                        </li>
                        <li>
                            <a href="index6067.html?route=product/category&amp;path=60">Bodysuits</a>
                        </li>
                        <li>
                            <a href="index73b3.html?route=product/category&amp;path=59" class="active">Crotchless </a>
                        </li>
                        <li>
                            <a href="index1647.html?route=product/category&amp;path=25">Corset</a>
                        </li>
                        <li>
                            <a href="indexb152.html?route=product/category&amp;path=17">Bustier</a>
                        </li>
                        <li>
                            <a href="indexc957.html?route=product/category&amp;path=24">Babydoll</a>
                        </li>
                        <li>
                            <a href="index70a9.html?route=product/category&amp;path=57">Best Gym Lingerie</a>
                        </li>
                        <li>
                            <a href="index68ea.html?route=product/category&amp;path=33">Swim Spin</a>
                        </li>
                        <li>
                            <a href="index616b.html?route=product/category&amp;path=58">Teddy Lingerie</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="swiper-viewport">
                <div id="banner0" class="swiper-container  single-banner ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><a href="#"><img src="image/cache/catalog/left-banner-1-265x320.jpg"
                                    alt="Left banner" class="img-responsive" /></a></div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <script type="text/javascript">
            <!--
            $('#banner0').swiper({
                effect: 'fade',
                autoplay: 2500,
                pagination: '.swiper-pagination', // If we need pagination
                autoplayDisableOnInteraction: false
            });
            -->
            </script>
            <div class="box bestseller">
                <div class="container">
                    <div class="box-heading">Bestseller Products</div>
                    <div class="box-content">

                        <div class="box-product  productbox-grid" id="bestseller-grid">
                            <div class="product-items">
                                <div class="product-block product-thumb transition">
                                    <div class="product-block-inner">
                                        <div class="image">
                                            <a href="index0f47.html?route=product/product&amp;product_id=29">
                                                <img src="image/cache/catalog/06-85x99.jpg"
                                                    title="Laborum Porro Eveniet" alt="Laborum Porro Eveniet"
                                                    class="img-responsive reg-image" />
                                                <img class="img-responsive hover-image"
                                                    src="image/cache/catalog/07-85x99.jpg" title="Laborum Porro Eveniet"
                                                    alt="Laborum Porro Eveniet" />
                                            </a>




                                            <div class="button-group">
                                                <button class="wishlist" type="button" data-toggle="tooltip"
                                                    title="Add to Wish List " onclick="wishlist.add('29 ');"><i
                                                        class="fa fa-heart"></i></button>
                                                <div class="quickview-button" data-toggle="tooltip" title="Quick view">
                                                    <a class="quickbox"
                                                        href="indexf72e.html?route=product/quick_view&amp;product_id=29">
                                                        <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                <button class="compare" type="button" data-toggle="tooltip"
                                                    title="Add to Compare " onclick="compare.add('29 ');"><i
                                                        class="fa fa-exchange"></i></button>
                                                <button type="button" class="addtocart" data-toggle="tooltip"
                                                    title="Add to Cart " onclick="cart.add('29 ');"><span>Add to
                                                        Cart</span> </button>
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



                                                <button type="button" class="addtocart" title="Add to Cart "
                                                    onclick="cart.add('29 ');"><span>Add to Cart</span> </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-items">
                                <div class="product-block product-thumb transition">
                                    <div class="product-block-inner">
                                        <div class="image">
                                            <a href="indexb8ca.html?route=product/product&amp;product_id=43">
                                                <img src="image/cache/catalog/02-85x99.jpg"
                                                    title="Aliquam Porro Quaerat" alt="Aliquam Porro Quaerat"
                                                    class="img-responsive reg-image" />
                                                <img class="img-responsive hover-image"
                                                    src="image/cache/catalog/14-85x99.jpg" title="Aliquam Porro Quaerat"
                                                    alt="Aliquam Porro Quaerat" />
                                            </a>




                                            <div class="button-group">
                                                <button class="wishlist" type="button" data-toggle="tooltip"
                                                    title="Add to Wish List " onclick="wishlist.add('43 ');"><i
                                                        class="fa fa-heart"></i></button>
                                                <div class="quickview-button" data-toggle="tooltip" title="Quick view">
                                                    <a class="quickbox"
                                                        href="indexff8a.html?route=product/quick_view&amp;product_id=43">
                                                        <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                <button class="compare" type="button" data-toggle="tooltip"
                                                    title="Add to Compare " onclick="compare.add('43 ');"><i
                                                        class="fa fa-exchange"></i></button>
                                                <button type="button" class="addtocart" data-toggle="tooltip"
                                                    title="Add to Cart " onclick="cart.add('43 ');"><span>Add to
                                                        Cart</span> </button>
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



                                                <button type="button" class="addtocart" title="Add to Cart "
                                                    onclick="cart.add('43 ');"><span>Add to Cart</span> </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-items">
                                <div class="product-block product-thumb transition">
                                    <div class="product-block-inner">
                                        <div class="image">
                                            <a href="indexfac8.html?route=product/product&amp;product_id=35">
                                                <img src="image/cache/catalog/03-85x99.jpg" title="Commodi Consequatur"
                                                    alt="Commodi Consequatur" class="img-responsive reg-image" />
                                                <img class="img-responsive hover-image"
                                                    src="image/cache/catalog/04-85x99.jpg" title="Commodi Consequatur"
                                                    alt="Commodi Consequatur" />
                                            </a>


                                            <span class="saleicon sale">Sale</span>


                                            <div class="percentsaving">2% Off</div>

                                            <div class="button-group">
                                                <button class="wishlist" type="button" data-toggle="tooltip"
                                                    title="Add to Wish List " onclick="wishlist.add('35 ');"><i
                                                        class="fa fa-heart"></i></button>
                                                <div class="quickview-button" data-toggle="tooltip" title="Quick view">
                                                    <a class="quickbox"
                                                        href="index0a97.html?route=product/quick_view&amp;product_id=35">
                                                        <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                                <button class="compare" type="button" data-toggle="tooltip"
                                                    title="Add to Compare " onclick="compare.add('35 ');"><i
                                                        class="fa fa-exchange"></i></button>
                                                <button type="button" class="addtocart" data-toggle="tooltip"
                                                    title="Add to Cart " onclick="cart.add('35 ');"><span>Add to
                                                        Cart</span> </button>
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



                                                <button type="button" class="addtocart" title="Add to Cart "
                                                    onclick="cart.add('35 ');"><span>Add to Cart</span> </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <span class="bestseller_default_width" style="display:none; visibility:hidden"></span>

        </aside>

        <div id="content" class="col-sm-9">


            <div class="category_filter">
                <div class="col-md-4 btn-list-grid">
                    <div class="btn-group">
                        <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip"
                            title="Grid"><i class="fa fa-th"></i></button>
                        <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip"
                            title="List"><i class="fa fa-th-list"></i></button>
                    </div>
                </div>
                <div class="compare-total"><a href="index6431.html?route=product/compare" id="compare-total"> Product
                        Compare (0)</a></div>
                <div class="pagination-right">
                    <div class="sort-by-wrapper">
                        <div class="col-md-2 text-right sort-by">
                            <label class="control-label" for="input-sort">Sort By:</label>
                        </div>
                        <div class="col-md-3 text-right sort">
                            <select id="input-sort" class="form-control" onchange="location = this.value;">

                                <option
                                    value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=59&amp;sort=p.sort_order&amp;order=ASC "
                                    selected="selected">Default</option>

                                <option
                                    value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=59&amp;sort=pd.name&amp;order=ASC ">
                                    Name (A - Z) </option>

                                <option
                                    value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=59&amp;sort=pd.name&amp;order=DESC ">
                                    Name (Z - A) </option>

                                <option
                                    value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=59&amp;sort=p.price&amp;order=ASC ">
                                    Price (Low &gt; High) </option>

                                <option
                                    value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=59&amp;sort=p.price&amp;order=DESC ">
                                    Price (High &gt; Low) </option>

                                <option
                                    value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=59&amp;sort=rating&amp;order=DESC ">
                                    Rating (Highest) </option>

                                <option
                                    value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=59&amp;sort=rating&amp;order=ASC ">
                                    Rating (Lowest) </option>

                                <option
                                    value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=59&amp;sort=p.model&amp;order=ASC ">
                                    Model (A - Z) </option>

                                <option
                                    value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=59&amp;sort=p.model&amp;order=DESC ">
                                    Model (Z - A) </option>
                            </select>
                        </div>
                    </div>
                    <div class="show-wrapper">
                        <div class="col-md-1 text-right show">
                            <label class="control-label" for="input-limit">Show:</label>
                        </div>
                        <div class="col-md-2 text-right limit">
                            <select id="input-limit" class="form-control" onchange="location = this.value;">
                                <option
                                    value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=59&amp;limit=12 "
                                    selected="selected">12</option>
                                <option
                                    value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=59&amp;limit=25 ">
                                    25 </option>
                                <option
                                    value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=59&amp;limit=50 ">
                                    50 </option>
                                <option
                                    value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=59&amp;limit=75 ">
                                    75 </option>
                                <option
                                    value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=59&amp;limit=100 ">
                                    100 </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row cat_prod">
                <div class="product-layout product-list col-xs-12">
                    <div class="product-block product-thumb">
                        <div class="product-block-inner">
                            <div class="image">
                                <a href="indexb545.html?route=product/product&amp;path=59&amp;product_id=47">
                                    <img src="image/cache/catalog/01-254x298.jpg" title="Accusantium Doloremque"
                                        alt="Accusantium Doloremque" class="img-responsive reg-image" />
                                    <img class="img-responsive hover-image" src="image/cache/catalog/02-254x298.jpg"
                                        title="Accusantium Doloremque" alt="Accusantium Doloremque" />
                                </a>




                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                        title="Add to Wish List" onclick="wishlist.add('47');"><i
                                            class="fa fa-heart"></i></button>
                                    <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a
                                            class="quickbox"
                                            href="index4829.html?route=product/quick_view&amp;path=59&amp;product_id=47">
                                            <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare"
                                        onclick="compare.add('47');"><i class="fa fa-exchange"></i></button>
                                    <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart "
                                        onclick="cart.add('47 ');"><i class="fa fa-shopping-cart"></i><span>Add to
                                            Cart</span> </button>
                                </div>
                            </div>

                            <div class="product-details">
                                <div class="caption">
                                    <h4><a href="indexb545.html?route=product/product&amp;path=59&amp;product_id=47">Accusantium
                                            Doloremque</a></h4>

                                    <div class="rating list-rate">
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


                                    <p class="desc">Stop your co-workers in their tracks with the stunning new 30-inch
                                        diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features
                                        best-in-class performance and presenta..</p>

                                    <button type="button" class="addtocart" onclick="cart.add('47', '1 ');"><span>Add to
                                            Cart</span></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-block product-thumb">
                        <div class="product-block-inner">
                            <div class="image">
                                <a href="indexc75c.html?route=product/product&amp;path=59&amp;product_id=43">
                                    <img src="image/cache/catalog/02-254x298.jpg" title="Aliquam Porro Quaerat"
                                        alt="Aliquam Porro Quaerat" class="img-responsive reg-image" />
                                    <img class="img-responsive hover-image" src="image/cache/catalog/14-254x298.jpg"
                                        title="Aliquam Porro Quaerat" alt="Aliquam Porro Quaerat" />
                                </a>




                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                        title="Add to Wish List" onclick="wishlist.add('43');"><i
                                            class="fa fa-heart"></i></button>
                                    <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a
                                            class="quickbox"
                                            href="indexa8cd.html?route=product/quick_view&amp;path=59&amp;product_id=43">
                                            <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare"
                                        onclick="compare.add('43');"><i class="fa fa-exchange"></i></button>
                                    <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart "
                                        onclick="cart.add('43 ');"><i class="fa fa-shopping-cart"></i><span>Add to
                                            Cart</span> </button>
                                </div>
                            </div>

                            <div class="product-details">
                                <div class="caption">
                                    <h4><a href="indexc75c.html?route=product/product&amp;path=59&amp;product_id=43">Aliquam
                                            Porro Quaerat</a></h4>

                                    <div class="rating list-rate">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>

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
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>


                                    <p class="desc">Intel Core 2 Duo processor

                                        Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new
                                        MacBook is the fastest ever.

                                        1GB memory, larger hard drives
                                        ..</p>

                                    <button type="button" class="addtocart" onclick="cart.add('43', '1 ');"><span>Add to
                                            Cart</span></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-block product-thumb">
                        <div class="product-block-inner">
                            <div class="image">
                                <a href="index8844.html?route=product/product&amp;path=59&amp;product_id=35">
                                    <img src="image/cache/catalog/03-254x298.jpg" title="Commodi Consequatur"
                                        alt="Commodi Consequatur" class="img-responsive reg-image" />
                                    <img class="img-responsive hover-image" src="image/cache/catalog/04-254x298.jpg"
                                        title="Commodi Consequatur" alt="Commodi Consequatur" />
                                </a>

                                <div class="saleback">
                                    <span class="saleicon sale">Sale</span>
                                </div>


                                <div class="percentsaving">2% Off</div>

                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                        title="Add to Wish List" onclick="wishlist.add('35');"><i
                                            class="fa fa-heart"></i></button>
                                    <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a
                                            class="quickbox"
                                            href="index07b7.html?route=product/quick_view&amp;path=59&amp;product_id=35">
                                            <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare"
                                        onclick="compare.add('35');"><i class="fa fa-exchange"></i></button>
                                    <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart "
                                        onclick="cart.add('35 ');"><i class="fa fa-shopping-cart"></i><span>Add to
                                            Cart</span> </button>
                                </div>
                            </div>

                            <div class="product-details">
                                <div class="caption">
                                    <h4><a href="index8844.html?route=product/product&amp;path=59&amp;product_id=35">Commodi
                                            Consequatur</a></h4>

                                    <div class="rating list-rate">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>

                                    <p class="price">
                                        <span class="price-new">$134.00</span> <span class="price-old">$136.40</span>
                                        <span class="price-tax">Ex Tax: $110.00</span>
                                    </p>

                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>


                                    <p class="desc">The standard Lorem Ipsum passage, used since the 1500
                                        Fashion has been creating well-designed collections since 2010. The brand offers
                                        feminine designs delivering stylish sep..</p>

                                    <button type="button" class="addtocart" onclick="cart.add('35', '1 ');"><span>Add to
                                            Cart</span></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-block product-thumb">
                        <div class="product-block-inner">
                            <div class="image">
                                <a href="indexf8bc.html?route=product/product&amp;path=59&amp;product_id=30">
                                    <img src="image/cache/catalog/05-254x298.jpg" title="Exercitat Virginia Voluptates"
                                        alt="Exercitat Virginia Voluptates" class="img-responsive reg-image" />
                                    <img class="img-responsive hover-image" src="image/cache/catalog/11-254x298.jpg"
                                        title="Exercitat Virginia Voluptates" alt="Exercitat Virginia Voluptates" />
                                </a>

                                <div class="saleback">
                                    <span class="saleicon sale">Sale</span>
                                </div>


                                <div class="percentsaving">11% Off</div>

                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                        title="Add to Wish List" onclick="wishlist.add('30');"><i
                                            class="fa fa-heart"></i></button>
                                    <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a
                                            class="quickbox"
                                            href="index34da.html?route=product/quick_view&amp;path=59&amp;product_id=30">
                                            <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare"
                                        onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
                                    <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart "
                                        onclick="cart.add('30 ');"><i class="fa fa-shopping-cart"></i><span>Add to
                                            Cart</span> </button>
                                </div>
                            </div>

                            <div class="product-details">
                                <div class="caption">
                                    <h4><a href="indexf8bc.html?route=product/product&amp;path=59&amp;product_id=30">Exercitat
                                            Virginia Voluptates</a></h4>

                                    <div class="rating list-rate">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>

                                    <p class="price">
                                        <span class="price-new">$104.00</span> <span class="price-old">$116.00</span>
                                        <span class="price-tax">Ex Tax: $85.00</span>
                                    </p>

                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>


                                    <p class="desc">The standard Lorem Ipsum passage, used since the 1500
                                        Fashion has been creating well-designed collections since 2010. The brand offers
                                        feminine designs delivering stylish sep..</p>

                                    <button type="button" class="addtocart" onclick="cart.add('30', '1 ');"><span>Add to
                                            Cart</span></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-block product-thumb">
                        <div class="product-block-inner">
                            <div class="image">
                                <a href="index052b.html?route=product/product&amp;path=59&amp;product_id=29">
                                    <img src="image/cache/catalog/06-254x298.jpg" title="Laborum Porro Eveniet"
                                        alt="Laborum Porro Eveniet" class="img-responsive reg-image" />
                                    <img class="img-responsive hover-image" src="image/cache/catalog/07-254x298.jpg"
                                        title="Laborum Porro Eveniet" alt="Laborum Porro Eveniet" />
                                </a>




                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                        title="Add to Wish List" onclick="wishlist.add('29');"><i
                                            class="fa fa-heart"></i></button>
                                    <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a
                                            class="quickbox"
                                            href="indexc8b2.html?route=product/quick_view&amp;path=59&amp;product_id=29">
                                            <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare"
                                        onclick="compare.add('29');"><i class="fa fa-exchange"></i></button>
                                    <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart "
                                        onclick="cart.add('29 ');"><i class="fa fa-shopping-cart"></i><span>Add to
                                            Cart</span> </button>
                                </div>
                            </div>

                            <div class="product-details">
                                <div class="caption">
                                    <h4><a href="index052b.html?route=product/product&amp;path=59&amp;product_id=29">Laborum
                                            Porro Eveniet</a></h4>

                                    <div class="rating list-rate">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>

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
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>


                                    <p class="desc">Redefine your workday with the Palm Treo Pro smartphone. Perfectly
                                        balanced, you can respond to business and personal email, stay on top of
                                        appointments and contacts, and use ..</p>

                                    <button type="button" class="addtocart" onclick="cart.add('29', '1 ');"><span>Add to
                                            Cart</span></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-block product-thumb">
                        <div class="product-block-inner">
                            <div class="image">
                                <a href="indexf759.html?route=product/product&amp;path=59&amp;product_id=31">
                                    <img src="image/cache/catalog/08-254x298.jpg" title="Laudant Doloremque"
                                        alt="Laudant Doloremque" class="img-responsive reg-image" />
                                    <img class="img-responsive hover-image" src="image/cache/catalog/13-254x298.jpg"
                                        title="Laudant Doloremque" alt="Laudant Doloremque" />
                                </a>

                                <div class="saleback">
                                    <span class="saleicon sale">Sale</span>
                                </div>


                                <div class="percentsaving">6% Off</div>

                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                        title="Add to Wish List" onclick="wishlist.add('31');"><i
                                            class="fa fa-heart"></i></button>
                                    <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a
                                            class="quickbox"
                                            href="index3eb9.html?route=product/quick_view&amp;path=59&amp;product_id=31">
                                            <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare"
                                        onclick="compare.add('31');"><i class="fa fa-exchange"></i></button>
                                    <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart "
                                        onclick="cart.add('31 ');"><i class="fa fa-shopping-cart"></i><span>Add to
                                            Cart</span> </button>
                                </div>
                            </div>

                            <div class="product-details">
                                <div class="caption">
                                    <h4><a href="indexf759.html?route=product/product&amp;path=59&amp;product_id=31">Laudant
                                            Doloremque</a></h4>

                                    <div class="rating list-rate">
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

                                    <p class="price">
                                        <span class="price-new">$92.00</span> <span class="price-old">$98.00</span>
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


                                    <p class="desc">The D300 reacts with lightning speed, powering up in a mere 0.13
                                        seconds and shooting with an imperceptible 45-millisecond shutter release lag
                                        time. The D300 is capable of sho..</p>

                                    <button type="button" class="addtocart" onclick="cart.add('31', '1 ');"><span>Add to
                                            Cart</span></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-layout product-list col-xs-12">
                    <div class="product-block product-thumb">
                        <div class="product-block-inner">
                            <div class="image">
                                <a href="index9f5d.html?route=product/product&amp;path=59&amp;product_id=36">
                                    <img src="image/cache/catalog/09-254x298.jpg" title="Necessitatibus  Praesentium"
                                        alt="Necessitatibus  Praesentium" class="img-responsive reg-image" />
                                    <img class="img-responsive hover-image" src="image/cache/catalog/15-254x298.jpg"
                                        title="Necessitatibus  Praesentium" alt="Necessitatibus  Praesentium" />
                                </a>




                                <div class="button-group">
                                    <button type="button" class="wishlist" data-toggle="tooltip"
                                        title="Add to Wish List" onclick="wishlist.add('36');"><i
                                            class="fa fa-heart"></i></button>
                                    <div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a
                                            class="quickbox"
                                            href="index11c6.html?route=product/quick_view&amp;path=59&amp;product_id=36">
                                            <i class="fa fa-eye" aria-hidden="true"></i></a></div>
                                    <button type="button" class="compare" data-toggle="tooltip" title="Add to Compare"
                                        onclick="compare.add('36');"><i class="fa fa-exchange"></i></button>
                                    <button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart "
                                        onclick="cart.add('36 ');"><i class="fa fa-shopping-cart"></i><span>Add to
                                            Cart</span> </button>
                                </div>
                            </div>

                            <div class="product-details">
                                <div class="caption">
                                    <h4><a href="index9f5d.html?route=product/product&amp;path=59&amp;product_id=36">Necessitatibus
                                            Praesentium</a></h4>

                                    <div class="rating list-rate">
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

                                    <p class="price">
                                        $119.60
                                        <span class="price-tax">Ex Tax: $98.00</span>
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


                                    <p class="desc">Video in your pocket.

                                        Its the small iPod with one very big idea: video. The worlds most popular music
                                        player now lets you enjoy movies, TV shows, and more on a two-inch ..</p>

                                    <button type="button" class="addtocart" onclick="cart.add('36', '1 ');"><span>Add to
                                            Cart</span></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination-wrapper">
                <div class="col-sm-6 text-left page-link"></div>
                <div class="col-sm-6 text-right page-result">Showing 1 to 7 of 7 (1 Pages)</div>
            </div>
        </div>
    </div>
</div>
@stop