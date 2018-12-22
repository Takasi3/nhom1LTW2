@extends('footwear.master')
@section('content')

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">Home</a></span> / <span>Shopping Cart</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						  @if(count($cart))
						<div class="product-name d-flex">
							<div class="one-forth text-left px-4">
								<span>Product Details</span>
							</div>
							<div class="one-eight text-center">
								<span>Price</span>
							</div>
							<div class="one-eight text-center">
								<span>Quantity</span>
							</div>
							<div class="one-eight text-center">
								<span>Total</span>
							</div>
							<div class="one-eight text-center px-4">
								<span>Remove</span>
							</div>
						</div>

						@foreach($cart as $item)
						<div class="product-cart d-flex">
							<div class="one-forth">
								<div class="product-img" style="background-image: url({{  asset('images/products/'.$item->$options->img) }});">
								</div>
								<div class="display-tc">
									<h3>{{$item->name}}</h3>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="number_format($item->price)}}"</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="{{number_format($item->qty)}}"</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">{{number_format($item->qty)*number_format($item->price)}}</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<a href="#" class="closed"></a>
								</div>
							</div>
						</div>


					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="total-wrap">
							<div class="row">
								<div class="col-sm-8">
									<form action="#">
										<div class="row form-group">
											<div class="col-sm-9">
												<input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number...">
											</div>
											<div class="col-sm-3">
												<input type="submit" value="Apply Coupon" class="btn btn-primary">
											</div>
										</div>
									</form>
								</div>
								<div class="col-sm-4 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Subtotal:</span> <span>$200.00</span></p>
											<p><span>Delivery:</span> <span>$0.00</span></p>
											<p><span>Discount:</span> <span>$45.00</span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Total:</strong></span> <span>$450.00</span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	<!-- jQuery -->
	<script src="{{url('js/jquery.min.js')}}"></script>
   <!-- popper -->
   <script src="{{url('js/popper.min.js')}}"></script>
   <!-- bootstrap 4.1 -->
   <script src="{{url('js/bootstrap.min.js')}}"></script>
   <!-- jQuery easing -->
   <script src="{{url('js/jquery.easing.1.3.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{url('js/jquery.waypoints.min.js')}}"></script>
    <!-- Flexslider -->
    <script src="{{url('js/jquery.flexslider-min.js')}}"></script>
    <!-- Owl carousel -->
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{url('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('js/magnific-popup-options.js')}}"></script>
    <!-- Date Picker -->
    <script src="{{url('js/bootstrap-datepicker.js')}}"></script>
    <!-- Stellar Parallax -->
    <script src="{{url('js/jquery.stellar.min.js')}}"></script>
    <!-- Main -->
    <script src="{{url('js/main.js')}}"></script>
	@endsection
