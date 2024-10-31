@extends('User.idetail')
@section('content')

    <!-- Page Header -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Testimonial</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="{{ url('/Home') }}">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white"><a class="text-white" href="{{ url('/menupelanggan') }}">Menu</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white"><a class="text-white" href="{{ url('/#') }}">Detail</a></p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="assetsLand/images/menu-2.jpg" class="image-popup"><img src="assetsLand/images/menu-2.jpg" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>Creamy Latte Coffee</h3>
    				<p class="price"><span>$4.90</span></p>
    				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
    				<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.
    					</p>
    					<div class="row mt-4">
    						<div class="col-md-6">
    							<div class="form-group d-flex">
    	              <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                      	<option value="">Small</option>
                        <option value="">Medium</option>
                        <option value="">Large</option>
                        <option value="">Extra Large</option>
                      </select>
                    </div>
    	            </div>
    						</div>
    						<div class="w-100"></div>
    						<div class="input-group col-md-6 d-flex mb-3">
                 	<span class="input-group-btn mr-2">
                    	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                       <i class="icon-minus"></i>
                    	</button>
                		</span>
                 	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                 	<span class="input-group-btn ml-2">
                    	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                         <i class="icon-plus"></i>
                     </button>
                 	</span>
              	</div>
          	</div>
          	<p><a href="cart.html" class="btn btn-primary py-3 px-5">Add to Cart</a></p>
    			</div>
    		</div>
    	</div>
    </section>
@endsection