@extends('Customer.layouts.main')
@section('content')
<div class="wrap-breadcrumb parallax-breadcrumb">
	<div class="container"></div>
</div>

<!-- ======= Quick view JS ========= -->
<script> 

function quickbox(){
 if ($(window).width() > 767) {
		$('.quickview-button').magnificPopup({
			type:'iframe',
			delegate: 'a',
			preloader: true,
			tLoading: 'Loading image #%curr%...',
		});
 }	
}
jQuery(document).ready(function() {quickbox();});
jQuery(window).resize(function() {quickbox();});

</script>
<div id="product-category" class="container">
  <ul class="breadcrumb">
        <li><a href="index9328.html?route=common/home"><i class="fa fa-home"></i></a></li>
        <li><a href="index68ea.html?route=product/category&amp;path=33">Swim Spin</a></li>
      </ul>
  <div class="row"><aside id="column-left" class="col-sm-3 hidden-xs">
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
                <a href="index73b3.html?route=product/category&amp;path=59">Crotchless</a>
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
                <a href="index68ea.html?route=product/category&amp;path=33" class="active">Swim Spin </a>
                      </li>
            <li>
                <a href="index616b.html?route=product/category&amp;path=58">Teddy Lingerie</a>
                       </li>
          </ul>	
  </div>
</div>

    <div class="box sidebarFilter">
	<div class="box-heading">Refine Search</div>
	<div class="filterbox">
		<div class="list-group-filter">
			 
			<a class="list-group-item group-name">Color</a>
			<div class="list-group-item">
			  	<div id="filter-group1">
			  					<div class="checkbox">
					<label>
												<input type="checkbox" name="filter[]" value="4" />
						Green
											</label>
				</div>
								<div class="checkbox">
					<label>
												<input type="checkbox" name="filter[]" value="2" />
						Red
											</label>
				</div>
								<div class="checkbox">
					<label>
												<input type="checkbox" name="filter[]" value="3" />
						Yellow
											</label>
				</div>
								<div class="checkbox">
					<label>
												<input type="checkbox" name="filter[]" value="1" />
						Blue
											</label>
				</div>
								</div>
			</div>
			 
			<a class="list-group-item group-name">Size</a>
			<div class="list-group-item">
			  	<div id="filter-group2">
			  					<div class="checkbox">
					<label>
												<input type="checkbox" name="filter[]" value="5" />
						Small
											</label>
				</div>
								<div class="checkbox">
					<label>
												<input type="checkbox" name="filter[]" value="6" />
						Medium
											</label>
				</div>
								<div class="checkbox">
					<label>
												<input type="checkbox" name="filter[]" value="7" />
						Large
											</label>
				</div>
								</div>
			</div>
			 
			<a class="list-group-item group-name">Weight</a>
			<div class="list-group-item">
			  	<div id="filter-group3">
			  					<div class="checkbox">
					<label>
												<input type="checkbox" name="filter[]" value="9" />
						5
											</label>
				</div>
								<div class="checkbox">
					<label>
												<input type="checkbox" name="filter[]" value="10" />
						10
											</label>
				</div>
								<div class="checkbox">
					<label>
												<input type="checkbox" name="filter[]" value="11" />
						15
											</label>
				</div>
								</div>
			</div>
					</div>
		<div class="panel-footer text-right">
			<button type="button" id="button-filter" class="btn btn-primary">Refine Search</button>
		</div>
	</div>
</div>
<script type="text/javascript"><!--
$('#button-filter').on('click', function() {
	filter = [];

	$('input[name^=\'filter\']:checked').each(function(element) {
		filter.push(this.value);
	});

	location = 'indexb577.html?route=product/category&amp;path=33&amp;filter=' + filter.join(',');
});
//--></script>

    		<div class="swiper-viewport">
  <div id="banner0" class="swiper-container  single-banner ">
    <div class="swiper-wrapper">
	      <div class="swiper-slide"><a href="#"><img src="image/cache/catalog/left-banner-1-265x320.jpg" alt="Left banner" class="img-responsive" /></a></div>
      </div>
	  <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  </div>
</div>
<script type="text/javascript"><!--
$('#banner0').swiper({
	effect: 'fade',
	autoplay: 2500,
    pagination: '.swiper-pagination',  // If we need pagination
    autoplayDisableOnInteraction: false
});
--></script> 
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
							<img src="image/cache/catalog/06-85x99.jpg" title="Laborum Porro Eveniet" alt="Laborum Porro Eveniet" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/07-85x99.jpg" title="Laborum Porro Eveniet" alt="Laborum Porro Eveniet"/>
						</a>
												
						        
												
												
						<div class="button-group">
							<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('29 ');"><i class="fa fa-heart"></i></button>
							<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="indexf72e.html?route=product/quick_view&amp;product_id=29">
								<i class="fa fa-eye" aria-hidden="true"></i></a></div>
							<button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('29 ');"><i class="fa fa-exchange"></i></button>
							<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('29 ');"><span>Add to Cart</span> </button>
						</div>
					</div>
					
      				<div class="product-details">
						<div class="caption">

							<h4><a href="index0f47.html?route=product/product&amp;product_id=29">Laborum Porro Eveniet </a></h4>

															<p class="price">
																$97.99
																								<span class="price-tax">Ex Tax: $79.99</span>
																</p>
														
							<div class="rating">
								 								 								 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
								 								 								 								 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
								 								 								 								 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
								 								 								 								 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
								 								 								 								 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
								 								 							</div>
							
														
							
							<button type="button" class="addtocart" title="Add to Cart " onclick="cart.add('29 ');"><span>Add to Cart</span> </button>				
														
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
							<img src="image/cache/catalog/02-85x99.jpg" title="Aliquam Porro Quaerat" alt="Aliquam Porro Quaerat" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/14-85x99.jpg" title="Aliquam Porro Quaerat" alt="Aliquam Porro Quaerat"/>
						</a>
												
						        
												
												
						<div class="button-group">
							<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('43 ');"><i class="fa fa-heart"></i></button>
							<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="indexff8a.html?route=product/quick_view&amp;product_id=43">
								<i class="fa fa-eye" aria-hidden="true"></i></a></div>
							<button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('43 ');"><i class="fa fa-exchange"></i></button>
							<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('43 ');"><span>Add to Cart</span> </button>
						</div>
					</div>
					
      				<div class="product-details">
						<div class="caption">

							<h4><a href="indexb8ca.html?route=product/product&amp;product_id=43">Aliquam Porro Quaerat </a></h4>

															<p class="price">
																$108.80
																								<span class="price-tax">Ex Tax: $89.00</span>
																</p>
														
							<div class="rating">
								 								 								 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
								 								 								 								 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
								 								 								 								 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
								 								 								 								 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
								 								 								 								 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
								 								 							</div>
							
														
							
							<button type="button" class="addtocart" title="Add to Cart " onclick="cart.add('43 ');"><span>Add to Cart</span> </button>				
														
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
							<img src="image/cache/catalog/03-85x99.jpg" title="Commodi Consequatur" alt="Commodi Consequatur" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/04-85x99.jpg" title="Commodi Consequatur" alt="Commodi Consequatur"/>
						</a>
												
						   
						<span class="saleicon sale">Sale</span>  
												
						        
							<div class="percentsaving">2% Off</div>
												
						<div class="button-group">
							<button class="wishlist" type="button" data-toggle="tooltip" title="Add to Wish List " onclick="wishlist.add('35 ');"><i class="fa fa-heart"></i></button>
							<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index0a97.html?route=product/quick_view&amp;product_id=35">
								<i class="fa fa-eye" aria-hidden="true"></i></a></div>
							<button class="compare" type="button" data-toggle="tooltip" title="Add to Compare " onclick="compare.add('35 ');"><i class="fa fa-exchange"></i></button>
							<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('35 ');"><span>Add to Cart</span> </button>
						</div>
					</div>
					
      				<div class="product-details">
						<div class="caption">

							<h4><a href="indexfac8.html?route=product/product&amp;product_id=35">Commodi Consequatur </a></h4>

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
							
														
							
							<button type="button" class="addtocart" title="Add to Cart " onclick="cart.add('35 ');"><span>Add to Cart</span> </button>				
														
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
  
            <div class="row category_thumb">
                <div class="col-sm-2 category_img"><img src="image/cache/catalog/category-banner-1105x200.jpg" alt="Swim Spin" title="Swim Spin" class="img-thumbnail" /></div>
        
		<div class="col-sm-12"> 
		    <h1 class="page-title">Swim Spin</h1>
		</div>

              </div>     
             	   
            <div class="category_filter">
        <div class="col-md-4 btn-list-grid">
          <div class="btn-group">
            <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
			<button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>            
          </div>
        </div>
		<div class="compare-total"><a href="index6431.html?route=product/compare" id="compare-total"> Product Compare (0)</a></div>
		<div class="pagination-right">
		 <div class="sort-by-wrapper">
			<div class="col-md-2 text-right sort-by">
			  <label class="control-label" for="input-sort">Sort By:</label>
			</div>
			<div class="col-md-3 text-right sort">
			  <select id="input-sort" class="form-control" onchange="location = this.value;">
				 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=33&amp;sort=p.sort_order&amp;order=ASC " selected="selected">Default</option>
								 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=33&amp;sort=pd.name&amp;order=ASC ">Name (A - Z) </option>
				 				 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=33&amp;sort=pd.name&amp;order=DESC ">Name (Z - A) </option>
				 				 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=33&amp;sort=p.price&amp;order=ASC ">Price (Low &gt; High) </option>
				 				 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=33&amp;sort=p.price&amp;order=DESC ">Price (High &gt; Low) </option>
				 				 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=33&amp;sort=rating&amp;order=DESC ">Rating (Highest) </option>
				 				 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=33&amp;sort=rating&amp;order=ASC ">Rating (Lowest) </option>
				 				 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=33&amp;sort=p.model&amp;order=ASC ">Model (A - Z) </option>
				 				 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=33&amp;sort=p.model&amp;order=DESC ">Model (Z - A) </option>
				 							  </select>
			</div>
		 </div>
		 <div class="show-wrapper">
			<div class="col-md-1 text-right show">
			  <label class="control-label" for="input-limit">Show:</label>
			</div>
			<div class="col-md-2 text-right limit">
			  <select id="input-limit" class="form-control" onchange="location = this.value;">
												<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=33&amp;limit=12 " selected="selected">12</option>
																<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=33&amp;limit=25 ">25 </option>
																<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=33&amp;limit=50 ">50 </option>
																<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=33&amp;limit=75 ">75 </option>
																<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=33&amp;limit=100 ">100 </option>
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
											<a href="index2f44.html?route=product/product&amp;path=33&amp;product_id=47">
							<img src="image/cache/catalog/01-254x298.jpg" title="Accusantium Doloremque" alt="Accusantium Doloremque" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/02-254x298.jpg" title="Accusantium Doloremque" alt="Accusantium Doloremque"/>
						</a>
										
					        
										
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('47');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index6d5c-2.html?route=product/quick_view&amp;path=33&amp;product_id=47">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('47');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('47 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="index2f44.html?route=product/product&amp;path=33&amp;product_id=47">Accusantium Doloremque</a></h4>

					  	<div class="rating list-rate">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
					  
					   							<p class="price">
														$104.00
																					<span class="price-tax">Ex Tax: $85.00</span>
														</p>
					  
					   <div class="rating">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
									

						<p class="desc">Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presenta..</p>
              		
					  <button type="button" class="addtocart" onclick="cart.add('47', '1 ');"><span>Add to Cart</span></button>
						
				  </div>
				</div>
			</div>
          </div>
        </div>
                <div class="product-layout product-list col-xs-12">
          <div class="product-block product-thumb">
		  	<div class="product-block-inner">
				<div class="image">					
											<a href="indexf4ef.html?route=product/product&amp;path=33&amp;product_id=43">
							<img src="image/cache/catalog/02-254x298.jpg" title="Aliquam Porro Quaerat" alt="Aliquam Porro Quaerat" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/14-254x298.jpg" title="Aliquam Porro Quaerat" alt="Aliquam Porro Quaerat"/>
						</a>
										
					        
										
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('43');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="indexc01e.html?route=product/quick_view&amp;path=33&amp;product_id=43">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('43');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('43 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="indexf4ef.html?route=product/product&amp;path=33&amp;product_id=43">Aliquam Porro Quaerat</a></h4>

					  	<div class="rating list-rate">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
					  
					   							<p class="price">
														$108.80
																					<span class="price-tax">Ex Tax: $89.00</span>
														</p>
					  
					   <div class="rating">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
									

						<p class="desc">Intel Core 2 Duo processor
	
		Powered by an Intel Core 2 Duo processor at speeds up to 2.16GHz, the new MacBook is the fastest ever.
	
		1GB memory, larger hard drives
	..</p>
              		
					  <button type="button" class="addtocart" onclick="cart.add('43', '1 ');"><span>Add to Cart</span></button>
						
				  </div>
				</div>
			</div>
          </div>
        </div>
                <div class="product-layout product-list col-xs-12">
          <div class="product-block product-thumb">
		  	<div class="product-block-inner">
				<div class="image">					
											<a href="indexdcc9.html?route=product/product&amp;path=33&amp;product_id=35">
							<img src="image/cache/catalog/03-254x298.jpg" title="Commodi Consequatur" alt="Commodi Consequatur" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/04-254x298.jpg" title="Commodi Consequatur" alt="Commodi Consequatur"/>
						</a>
										
											<div class="saleback">
							<span class="saleicon sale">Sale</span>         
						</div>
										
					        
						<div class="percentsaving">2% Off</div>
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('35');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="indexeae0.html?route=product/quick_view&amp;path=33&amp;product_id=35">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('35');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('35 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="indexdcc9.html?route=product/product&amp;path=33&amp;product_id=35">Commodi Consequatur</a></h4>

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
Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish sep..</p>
              		
					  <button type="button" class="addtocart" onclick="cart.add('35', '1 ');"><span>Add to Cart</span></button>
						
				  </div>
				</div>
			</div>
          </div>
        </div>
                <div class="product-layout product-list col-xs-12">
          <div class="product-block product-thumb">
		  	<div class="product-block-inner">
				<div class="image">					
											<a href="indexbd00.html?route=product/product&amp;path=33&amp;product_id=30">
							<img src="image/cache/catalog/05-254x298.jpg" title="Exercitat Virginia Voluptates" alt="Exercitat Virginia Voluptates" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/11-254x298.jpg" title="Exercitat Virginia Voluptates" alt="Exercitat Virginia Voluptates"/>
						</a>
										
											<div class="saleback">
							<span class="saleicon sale">Sale</span>         
						</div>
										
					        
						<div class="percentsaving">11% Off</div>
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="indexa345.html?route=product/quick_view&amp;path=33&amp;product_id=30">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('30');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('30 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="indexbd00.html?route=product/product&amp;path=33&amp;product_id=30">Exercitat Virginia Voluptates</a></h4>

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
Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish sep..</p>
              		
					  <button type="button" class="addtocart" onclick="cart.add('30', '1 ');"><span>Add to Cart</span></button>
						
				  </div>
				</div>
			</div>
          </div>
        </div>
                <div class="product-layout product-list col-xs-12">
          <div class="product-block product-thumb">
		  	<div class="product-block-inner">
				<div class="image">					
											<a href="index41ec.html?route=product/product&amp;path=33&amp;product_id=29">
							<img src="image/cache/catalog/06-254x298.jpg" title="Laborum Porro Eveniet" alt="Laborum Porro Eveniet" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/07-254x298.jpg" title="Laborum Porro Eveniet" alt="Laborum Porro Eveniet"/>
						</a>
										
					        
										
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('29');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index255c.html?route=product/quick_view&amp;path=33&amp;product_id=29">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('29');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('29 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="index41ec.html?route=product/product&amp;path=33&amp;product_id=29">Laborum Porro Eveniet</a></h4>

					  	<div class="rating list-rate">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
					  
					   							<p class="price">
														$97.99
																					<span class="price-tax">Ex Tax: $79.99</span>
														</p>
					  
					   <div class="rating">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
									

						<p class="desc">Redefine your workday with the Palm Treo Pro smartphone. Perfectly balanced, you can respond to business and personal email, stay on top of appointments and contacts, and use ..</p>
              		
					  <button type="button" class="addtocart" onclick="cart.add('29', '1 ');"><span>Add to Cart</span></button>
						
				  </div>
				</div>
			</div>
          </div>
        </div>
                <div class="product-layout product-list col-xs-12">
          <div class="product-block product-thumb">
		  	<div class="product-block-inner">
				<div class="image">					
											<a href="index9566.html?route=product/product&amp;path=33&amp;product_id=31">
							<img src="image/cache/catalog/08-254x298.jpg" title="Laudant Doloremque" alt="Laudant Doloremque" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/13-254x298.jpg" title="Laudant Doloremque" alt="Laudant Doloremque"/>
						</a>
										
											<div class="saleback">
							<span class="saleicon sale">Sale</span>         
						</div>
										
					        
						<div class="percentsaving">6% Off</div>
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('31');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index873e.html?route=product/quick_view&amp;path=33&amp;product_id=31">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('31');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('31 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="index9566.html?route=product/product&amp;path=33&amp;product_id=31">Laudant Doloremque</a></h4>

					  	<div class="rating list-rate">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
					  
					   							<p class="price">
														<span class="price-new">$92.00</span> <span class="price-old">$98.00</span>
																					<span class="price-tax">Ex Tax: $75.00</span>
														</p>
					  
					   <div class="rating">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
									

						<p class="desc">The D300 reacts with lightning speed, powering up in a mere 0.13 seconds and shooting with an imperceptible 45-millisecond shutter release lag time. The D300 is capable of sho..</p>
              		
					  <button type="button" class="addtocart" onclick="cart.add('31', '1 ');"><span>Add to Cart</span></button>
						
				  </div>
				</div>
			</div>
          </div>
        </div>
                <div class="product-layout product-list col-xs-12">
          <div class="product-block product-thumb">
		  	<div class="product-block-inner">
				<div class="image">					
											<a href="index38b1.html?route=product/product&amp;path=33&amp;product_id=36">
							<img src="image/cache/catalog/09-254x298.jpg" title="Necessitatibus  Praesentium" alt="Necessitatibus  Praesentium" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/15-254x298.jpg" title="Necessitatibus  Praesentium" alt="Necessitatibus  Praesentium"/>
						</a>
										
					        
										
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('36');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index80eb.html?route=product/quick_view&amp;path=33&amp;product_id=36">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('36');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('36 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="index38b1.html?route=product/product&amp;path=33&amp;product_id=36">Necessitatibus  Praesentium</a></h4>

					  	<div class="rating list-rate">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
					  
					   							<p class="price">
														$119.60
																					<span class="price-tax">Ex Tax: $98.00</span>
														</p>
					  
					   <div class="rating">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
									

						<p class="desc">Video in your pocket.
	
		Its the small iPod with one very big idea: video. The worlds most popular music player now lets you enjoy movies, TV shows, and more on a two-inch ..</p>
              		
					  <button type="button" class="addtocart" onclick="cart.add('36', '1 ');"><span>Add to Cart</span></button>
						
				  </div>
				</div>
			</div>
          </div>
        </div>
                <div class="product-layout product-list col-xs-12">
          <div class="product-block product-thumb">
		  	<div class="product-block-inner">
				<div class="image">					
											<a href="index9647.html?route=product/product&amp;path=33&amp;product_id=45">
							<img src="image/cache/catalog/10-254x298.jpg" title="Neque Porro Quisquam" alt="Neque Porro Quisquam" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/01-254x298.jpg" title="Neque Porro Quisquam" alt="Neque Porro Quisquam"/>
						</a>
										
											<div class="saleback">
							<span class="saleicon sale">Sale</span>         
						</div>
										
					        
						<div class="percentsaving">3% Off</div>
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('45');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index1555.html?route=product/quick_view&amp;path=33&amp;product_id=45">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('45');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('45 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="index9647.html?route=product/product&amp;path=33&amp;product_id=45">Neque Porro Quisquam</a></h4>

					  	<div class="rating list-rate">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
					  
					   							<p class="price">
														<span class="price-new">$115.00</span> <span class="price-old">$118.00</span>
																					<span class="price-tax">Ex Tax: $115.00</span>
														</p>
					  
					   <div class="rating">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
									

						<p class="desc">Latest Intel mobile architecture
		
			Powered by the most advanced mobile processors from Intel, the new Core 2 Duo MacBook Pro is over 50% faster than the original Core Du..</p>
              		
					  <button type="button" class="addtocart" onclick="cart.add('45', '1 ');"><span>Add to Cart</span></button>
						
				  </div>
				</div>
			</div>
          </div>
        </div>
                <div class="product-layout product-list col-xs-12">
          <div class="product-block product-thumb">
		  	<div class="product-block-inner">
				<div class="image">					
											<a href="index2e66.html?route=product/product&amp;path=33&amp;product_id=41">
							<img src="image/cache/catalog/11-254x298.jpg" title="Nostrud Exercitation" alt="Nostrud Exercitation" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/12-254x298.jpg" title="Nostrud Exercitation" alt="Nostrud Exercitation"/>
						</a>
										
											<div class="saleback">
							<span class="saleicon sale">Sale</span>         
						</div>
										
					        
						<div class="percentsaving">6% Off</div>
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('41');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index550e.html?route=product/quick_view&amp;path=33&amp;product_id=41">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('41');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('41 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="index2e66.html?route=product/product&amp;path=33&amp;product_id=41">Nostrud Exercitation</a></h4>

					  	<div class="rating list-rate">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
					  
					   							<p class="price">
														<span class="price-new">$78.80</span> <span class="price-old">$83.60</span>
																					<span class="price-tax">Ex Tax: $64.00</span>
														</p>
					  
					   <div class="rating">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
									

						<p class="desc">Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors. And more memory standard. Combine this with Mac OS X Leopard and i..</p>
              		
					  <button type="button" class="addtocart" onclick="cart.add('41', '1 ');"><span>Add to Cart</span></button>
						
				  </div>
				</div>
			</div>
          </div>
        </div>
                <div class="product-layout product-list col-xs-12">
          <div class="product-block product-thumb">
		  	<div class="product-block-inner">
				<div class="image">					
											<a href="index417e.html?route=product/product&amp;path=33&amp;product_id=34">
							<img src="image/cache/catalog/12-254x298.jpg" title="Occasion Praesentium" alt="Occasion Praesentium" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/13-254x298.jpg" title="Occasion Praesentium" alt="Occasion Praesentium"/>
						</a>
										
					        
										
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('34');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index0770.html?route=product/quick_view&amp;path=33&amp;product_id=34">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('34');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('34 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="index417e.html?route=product/product&amp;path=33&amp;product_id=34">Occasion Praesentium</a></h4>

					  	<div class="rating list-rate">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
					  
					   							<p class="price">
														$105.20
																					<span class="price-tax">Ex Tax: $86.00</span>
														</p>
					  
					   <div class="rating">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
									

						<p class="desc">Born to be worn.
	
		Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your m..</p>
              		
					  <button type="button" class="addtocart" onclick="cart.add('34', '1 ');"><span>Add to Cart</span></button>
						
				  </div>
				</div>
			</div>
          </div>
        </div>
                <div class="product-layout product-list col-xs-12">
          <div class="product-block product-thumb">
		  	<div class="product-block-inner">
				<div class="image">					
											<a href="index8023.html?route=product/product&amp;path=33&amp;product_id=40">
							<img src="image/cache/catalog/13-254x298.jpg" title="Praesentium Voluptatum" alt="Praesentium Voluptatum" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/04-254x298.jpg" title="Praesentium Voluptatum" alt="Praesentium Voluptatum"/>
						</a>
										
					        
										
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('40');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index68fb.html?route=product/quick_view&amp;path=33&amp;product_id=40">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('40');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('40 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="index8023.html?route=product/product&amp;path=33&amp;product_id=40">Praesentium Voluptatum</a></h4>

					  	<div class="rating list-rate">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
					  
					   							<p class="price">
														$128.00
																					<span class="price-tax">Ex Tax: $105.00</span>
														</p>
					  
					   <div class="rating">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
									

						<p class="desc">iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also aut..</p>
              		
					  <button type="button" class="addtocart" onclick="cart.add('40', '1 ');"><span>Add to Cart</span></button>
						
				  </div>
				</div>
			</div>
          </div>
        </div>
                <div class="product-layout product-list col-xs-12">
          <div class="product-block product-thumb">
		  	<div class="product-block-inner">
				<div class="image">					
											<a href="index8fdd.html?route=product/product&amp;path=33&amp;product_id=32">
							<img src="image/cache/catalog/14-254x298.jpg" title="Reprehenderit Aliquam" alt="Reprehenderit Aliquam" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/15-254x298.jpg" title="Reprehenderit Aliquam" alt="Reprehenderit Aliquam"/>
						</a>
										
											<div class="saleback">
							<span class="saleicon sale">Sale</span>         
						</div>
										
					        
						<div class="percentsaving">7% Off</div>
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('32');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index6108.html?route=product/quick_view&amp;path=33&amp;product_id=32">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('32');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('32 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="index8fdd.html?route=product/product&amp;path=33&amp;product_id=32">Reprehenderit Aliquam</a></h4>

					  	<div class="rating list-rate">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
					  
					   							<p class="price">
														<span class="price-new">$110.00</span> <span class="price-old">$118.40</span>
																					<span class="price-tax">Ex Tax: $90.00</span>
														</p>
					  
					   <div class="rating">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
									

						<p class="desc">Revolutionary multi-touch interface.
	iPod touch features the same multi-touch screen technology as iPhone. Pinch to zoom in on a photo. Scroll through your songs and videos ..</p>
              		
					  <button type="button" class="addtocart" onclick="cart.add('32', '1 ');"><span>Add to Cart</span></button>
						
				  </div>
				</div>
			</div>
          </div>
        </div>
              </div>
       <div class="pagination-wrapper">
			<div class="col-sm-6 text-left page-link"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="index0f49.html?route=product/category&amp;path=33&amp;page=2">2</a></li><li><a href="index0f49.html?route=product/category&amp;path=33&amp;page=2">&gt;</a></li><li><a href="index0f49.html?route=product/category&amp;path=33&amp;page=2">&gt;|</a></li></ul></div>
			<div class="col-sm-6 text-right page-result">Showing 1 to 12 of 14 (2 Pages)</div>
	   </div>     
                  </div>
    </div>
</div>

@stop