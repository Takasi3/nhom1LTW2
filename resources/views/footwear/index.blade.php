@extends("footwear.master")
@section('content')


<div class="colorlib-product">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
				<h2>Best Sellers</h2>
			</div>
		</div>
		<div class="row row-pb-md">


			<?php foreach ($prod['products'] as $key => $value) {
    # code...
    ?>
				<div class="col-lg-3 mb-4 text-center">
					<div class="product-entry border">
						<a href="detail/<?php echo $value['ID']; ?>" class="prod-img">
							<img src="{{ asset('images/products/'. $value['image']) }}" class="img-fluid" alt="Free html5 bootstrap 4 template" href="google.com">
						</a>
						<div class="desc">
							<h2><a href="detail/<?php echo $value['ID']; ?>"><?php echo $value['name'] ?></a></h2>
							<span class="price"><?php echo $value['price'] ?> $</span>
						</div>
					</div>
				</div>



				<?php }?>



			</div>





			<div class="row">
					<div class="block-27">
		               <ul>
			             	<?php echo $prod['products']->render(); ?>
		               </ul>
		            </div>
				<div class="col-md-12 text-center">
					<p><a href="#" class="btn btn-primary btn-lg">Shop All Products</a></p>
				</div>
			</div>
		</div>
	</div>

	<div class="colorlib-partner">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
					<h2>Trusted Partners</h2>
				</div>
			</div>
			<div class="row">


				<?php foreach ($prod['manufactures'] as $key => $value) {

    ?>
					<div class="col partner-col text-center">
						<img src="{{ asset('images/manufactures/'. $value['manu_img']) }}" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>

					<?php }?>


				</div>
			</div>
		</div>
		@endsection