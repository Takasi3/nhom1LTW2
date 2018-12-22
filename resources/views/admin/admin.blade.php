@extends('admin.master_admin')
@section('content')
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Manage Products</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><a href="{{ url('add_product/') }}"> <i class="icon-plus"></i> </a></span>
						<h5>Products</h5>
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered table-striped">
							<thead>
							<tr>
								<th></th>
								<th>Name</th>
								<th>Category</th>
								<th>Producer</th>
								<th>Description</th>
								<th>Price ($)</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
									<?php
									
							foreach($getAllProducts as $value){
							?>
							<tr class="">
							
								<td><img style="width: 100px" src='<?php echo asset('images/products/'.$value->{'image'}) ?>'> </td>
								<td>{{ $value->name }}</td>
								<td><?php echo $value->manu->manu_name ?></td>
								<td><?php echo $value->protype->type_name ?></td>
								<td><?php echo $value['description'] ?></td>
								<td><?php echo $value['price'] ?></td>
								<td>
									<a href="admin/{{ $value->ID }}/edit" class="btn btn-success btn-mini">Edit</a>
									<form action="{{ url('admin/'.$value->ID) }}" method="POST">
										 
										<input type="hidden" name="_method" value="DELETE">
    									<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
   										<input type="submit" value="Delete" class="btn btn-danger btn-mini">
									</form>
                    						
								</td>
							</tr>
						<?php } ?>
							
							
						</tbody>
						</table>
						<ul class="pagination">
							<li class="active"><a href=""><?php echo str_replace("/?", "?", $getAllProducts->render()) ?></a></li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->
@endsection