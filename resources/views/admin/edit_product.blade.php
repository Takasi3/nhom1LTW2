@extends('admin.master_admin')
@section('content')

<!-- BEGIN CONTENT -->
<?php //var_dump($getProductByID); ?>
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Edit Product</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
						<h5>Product Detail</h5>
					</div>
					<div class="widget-content nopadding">

						<!-- BEGIN USER FORM -->
						<form action="{{ url('/admin/'.$data['getProductByID']->ID) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
							<input type="hidden" name="_method" value="PUT">
							<div class="control-group">
								<label class="control-label">Name :</label>
								<div class="controls">
									<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
									<input type="text" class="span11" placeholder="Product name" name="name" value="{{ $data['getProductByID']->name }}" /> *
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Choose a product type :</label>
								<div class="controls">
									<select name="type_id">
										
											
										<option value="{{ $data['getProductByID']->type_ID }}">Old : {{ $data['getProductByID']->protype->type_name }}</option>

										@foreach ($data['Type'] as $item)

											<option value="{{ $item->type_ID }}">{{ $item->type_name }}</option>

										@endforeach
								
										
									</select> *
								</div>
							</div>
							<div class="control-group">
								<label class="control-label">Choose a manufacture :</label>
								<div class="controls">
									<select name="manu_id" value="{{ $data['getProductByID']->manu_name }}">
										
											
											
										<option value="{{ $data['getProductByID']->manu_ID }}">Old : {{ $data['getProductByID']->manu->manu_name }}</option>

										@foreach ($data['Manu'] as $item)

											<option value="{{ $item->manu_ID }}">{{ $item->manu_name }}</option>

										@endforeach
										
									</select> *
								</div>
								<div class="control-group">
									<label class="control-label">Choose an image :</label>
									<div class="controls">
										<input type="file" name="fileUpload" id="fileUpload">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"  >Description</label>
									<div class="controls">
										<textarea class="span11" placeholder="Description" name = "description" >{{ $data['getProductByID']->description }}</textarea>
									</div>
									<div class="control-group">
										<label class="control-label">Price :</label>
										<div class="controls">
											<input type="text" class="span11" placeholder="price" name ="price" value="{{ $data['getProductByID']->price }}" /> *
										</div>

									</div>

									<div class="form-actions">
										<button type="submit" class="btn btn-success">Edit</button>
									</div>
								</div>

						</form>
						<!-- END USER FORM -->


					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- END CONTENT -->

@endsection
