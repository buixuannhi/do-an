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
        <li><a href="index70a9.html?route=product/category&amp;path=57">Best Gym Lingerie</a></li>
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
                <a href="index70a9.html?route=product/category&amp;path=57" class="active">Best Gym Lingerie </a>
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

	location = 'index2a35.html?route=product/category&amp;path=57&amp;filter=' + filter.join(',');
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
				 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=57&amp;sort=p.sort_order&amp;order=ASC " selected="selected">Default</option>
								 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=57&amp;sort=pd.name&amp;order=ASC ">Name (A - Z) </option>
				 				 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=57&amp;sort=pd.name&amp;order=DESC ">Name (Z - A) </option>
				 				 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=57&amp;sort=p.price&amp;order=ASC ">Price (Low &gt; High) </option>
				 				 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=57&amp;sort=p.price&amp;order=DESC ">Price (High &gt; Low) </option>
				 				 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=57&amp;sort=rating&amp;order=DESC ">Rating (Highest) </option>
				 				 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=57&amp;sort=rating&amp;order=ASC ">Rating (Lowest) </option>
				 				 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=57&amp;sort=p.model&amp;order=ASC ">Model (A - Z) </option>
				 				 
								<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=57&amp;sort=p.model&amp;order=DESC ">Model (Z - A) </option>
				 							  </select>
			</div>
		 </div>
		 <div class="show-wrapper">
			<div class="col-md-1 text-right show">
			  <label class="control-label" for="input-limit">Show:</label>
			</div>
			<div class="col-md-2 text-right limit">
			  <select id="input-limit" class="form-control" onchange="location = this.value;">
												<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=57&amp;limit=12 " selected="selected">12</option>
																<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=57&amp;limit=25 ">25 </option>
																<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=57&amp;limit=50 ">50 </option>
																<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=57&amp;limit=75 ">75 </option>
																<option value="https://capricathemes.com/opencart/OPC09/OPC090211/OPC2/index.php?route=product/category&amp;path=57&amp;limit=100 ">100 </option>
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
											<a href="indexd754.html?route=product/product&amp;path=57&amp;product_id=43">
							<img src="image/cache/catalog/02-254x298.jpg" title="Aliquam Porro Quaerat" alt="Aliquam Porro Quaerat" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/14-254x298.jpg" title="Aliquam Porro Quaerat" alt="Aliquam Porro Quaerat"/>
						</a>
										
					        
										
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('43');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="indexed30.html?route=product/quick_view&amp;path=57&amp;product_id=43">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('43');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('43 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="indexd754.html?route=product/product&amp;path=57&amp;product_id=43">Aliquam Porro Quaerat</a></h4>

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
											<a href="index3d85.html?route=product/product&amp;path=57&amp;product_id=35">
							<img src="image/cache/catalog/03-254x298.jpg" title="Commodi Consequatur" alt="Commodi Consequatur" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/04-254x298.jpg" title="Commodi Consequatur" alt="Commodi Consequatur"/>
						</a>
										
											<div class="saleback">
							<span class="saleicon sale">Sale</span>         
						</div>
										
					        
						<div class="percentsaving">2% Off</div>
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('35');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="indexd959.html?route=product/quick_view&amp;path=57&amp;product_id=35">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('35');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('35 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="index3d85.html?route=product/product&amp;path=57&amp;product_id=35">Commodi Consequatur</a></h4>

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
											<a href="index7e2c.html?route=product/product&amp;path=57&amp;product_id=45">
							<img src="image/cache/catalog/10-254x298.jpg" title="Neque Porro Quisquam" alt="Neque Porro Quisquam" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/01-254x298.jpg" title="Neque Porro Quisquam" alt="Neque Porro Quisquam"/>
						</a>
										
											<div class="saleback">
							<span class="saleicon sale">Sale</span>         
						</div>
										
					        
						<div class="percentsaving">3% Off</div>
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('45');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index5b9e.html?route=product/quick_view&amp;path=57&amp;product_id=45">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('45');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('45 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="index7e2c.html?route=product/product&amp;path=57&amp;product_id=45">Neque Porro Quisquam</a></h4>

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
											<a href="index620e.html?route=product/product&amp;path=57&amp;product_id=41">
							<img src="image/cache/catalog/11-254x298.jpg" title="Nostrud Exercitation" alt="Nostrud Exercitation" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/12-254x298.jpg" title="Nostrud Exercitation" alt="Nostrud Exercitation"/>
						</a>
										
											<div class="saleback">
							<span class="saleicon sale">Sale</span>         
						</div>
										
					        
						<div class="percentsaving">6% Off</div>
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('41');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="indexec9f.html?route=product/quick_view&amp;path=57&amp;product_id=41">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('41');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('41 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="index620e.html?route=product/product&amp;path=57&amp;product_id=41">Nostrud Exercitation</a></h4>

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
											<a href="indexd667.html?route=product/product&amp;path=57&amp;product_id=40">
							<img src="image/cache/catalog/13-254x298.jpg" title="Praesentium Voluptatum" alt="Praesentium Voluptatum" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/04-254x298.jpg" title="Praesentium Voluptatum" alt="Praesentium Voluptatum"/>
						</a>
										
					        
										
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('40');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index62f4.html?route=product/quick_view&amp;path=57&amp;product_id=40">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('40');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('40 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="indexd667.html?route=product/product&amp;path=57&amp;product_id=40">Praesentium Voluptatum</a></h4>

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
											<a href="index1031.html?route=product/product&amp;path=57&amp;product_id=32">
							<img src="image/cache/catalog/14-254x298.jpg" title="Reprehenderit Aliquam" alt="Reprehenderit Aliquam" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/15-254x298.jpg" title="Reprehenderit Aliquam" alt="Reprehenderit Aliquam"/>
						</a>
										
											<div class="saleback">
							<span class="saleicon sale">Sale</span>         
						</div>
										
					        
						<div class="percentsaving">7% Off</div>
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('32');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index71fc.html?route=product/quick_view&amp;path=57&amp;product_id=32">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('32');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('32 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="index1031.html?route=product/product&amp;path=57&amp;product_id=32">Reprehenderit Aliquam</a></h4>

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
                <div class="product-layout product-list col-xs-12">
          <div class="product-block product-thumb">
		  	<div class="product-block-inner">
				<div class="image">					
											<a href="indexbca4.html?route=product/product&amp;path=57&amp;product_id=28">
							<img src="image/cache/catalog/07-254x298.jpg" title="Voluptas Assumenda" alt="Voluptas Assumenda" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/01-254x298.jpg" title="Voluptas Assumenda" alt="Voluptas Assumenda"/>
						</a>
										
					        
										
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('28');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="index62e1.html?route=product/quick_view&amp;path=57&amp;product_id=28">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('28');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('28 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="indexbca4.html?route=product/product&amp;path=57&amp;product_id=28">Voluptas Assumenda</a></h4>

					  	<div class="rating list-rate">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
					  
					   							<p class="price">
														$122.00
																					<span class="price-tax">Ex Tax: $100.00</span>
														</p>
					  
					   <div class="rating">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
									

						<p class="desc">..</p>
              		
					  <button type="button" class="addtocart" onclick="cart.add('28', '1 ');"><span>Add to Cart</span></button>
						
				  </div>
				</div>
			</div>
          </div>
        </div>
                <div class="product-layout product-list col-xs-12">
          <div class="product-block product-thumb">
		  	<div class="product-block-inner">
				<div class="image">					
											<a href="index5d44.html?route=product/product&amp;path=57&amp;product_id=48">
							<img src="image/cache/catalog/15-254x298.jpg" title="Voluptates Repudiandae" alt="Voluptates Repudiandae" class="img-responsive reg-image"/>
							<img class="img-responsive hover-image" src="image/cache/catalog/01-254x298.jpg" title="Voluptates Repudiandae" alt="Voluptates Repudiandae"/>
						</a>
										
											<div class="saleback">
							<span class="saleicon sale">Sale</span>         
						</div>
										
					        
						<div class="percentsaving">13% Off</div>
											
					<div class="button-group">
						<button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('48');"><i class="fa fa-heart"></i></button>
						<div class="quickview-button" data-toggle="tooltip" title="Quick view"> <a class="quickbox" href="indexf232.html?route=product/quick_view&amp;path=57&amp;product_id=48">
							<i class="fa fa-eye" aria-hidden="true"></i></a></div>
						<button type="button" class="compare" data-toggle="tooltip" title="Add to Compare" onclick="compare.add('48');"><i class="fa fa-exchange"></i></button>
						<button type="button" class="addtocart" data-toggle="tooltip" title="Add to Cart " onclick="cart.add('48 ');"><i class="fa fa-shopping-cart"></i><span>Add to Cart</span> </button>
				  	</div>
				</div>
            	
				<div class="product-details">
              		<div class="caption">
					  <h4><a href="index5d44.html?route=product/product&amp;path=57&amp;product_id=48">Voluptates Repudiandae</a></h4>

					  	<div class="rating list-rate">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
					  
					   							<p class="price">
														<span class="price-new">$122.00</span> <span class="price-old">$140.00</span>
																					<span class="price-tax">Ex Tax: $100.00</span>
														</p>
					  
					   <div class="rating">
						  							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 							 							 <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
							 							 						</div>
									

						<p class="desc">More room to move.
		
			With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video..</p>
              		
					  <button type="button" class="addtocart" onclick="cart.add('48', '1 ');"><span>Add to Cart</span></button>
						
				  </div>
				</div>
			</div>
          </div>
        </div>
              </div>
       <div class="pagination-wrapper">
			<div class="col-sm-6 text-left page-link"></div>
			<div class="col-sm-6 text-right page-result">Showing 1 to 8 of 8 (1 Pages)</div>
	   </div>     
                  </div>
    </div>
</div>
@stop