@extends('footwear.master')
@section('content')

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="">Home</a></span> / <span>BOOT</span></p>
					</div>
				</div>
			</div>
		</div>

		<div class="breadcrumbs-two">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs-img" style="background-image: url(images/cover-img-1.jpg);">
							<h2>BOOT's</h2>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
						<h2>View All Products</h2>
					</div>
				</div>
				<div class="row row-pb-md">
				<?php
				//var_dump($prod);
				foreach ($prod['products'] as $value) {
					?>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="detail/<?php echo $value['ID']; ?>" class="prod-img">
								<img src="<?php echo  asset('images/products/'. $value['image']) ?>" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="detail/<?php echo $value['ID']; ?>"><?php echo $value['name']; ?></a></h2>
								<span class="price"><?php echo $value['price']; ?> $</span>
							</div>
						</div>
					</div>
					<?php } ?>
					
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="block-27">
		               <ul>
			          <?php echo str_replace("/?", "?", $prod['products']->render()); ?>
		               </ul>
		            </div>
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
				<?php foreach ($prod['manufactures'] as $value) {
					# code...
				 ?>
					<div class="col partner-col text-center">
						<img src="{{ asset('images/manufactures/'. $value['manu_img']) }}" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<?php } ?>
					</div>
				</div>
			</div>
		</div>
@endsection	