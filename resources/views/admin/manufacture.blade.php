@extends('admin.master_admin')
@section('content')
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Manage Producer</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"><a href="form_manufacture.html"><i class="icon-plus"></i></a></span>
						<h5>Products</h5>
					</div>
					<div class="widget-content nopadding">
						<table class="table table-bordered table-striped">
							<thead>
							<tr>
								<th>Manu_Id</th>
								<th>Manu_Name</th>
								<th>Manu_image</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
								<?php

							foreach($getManuProducts as $value){
							?>
							<tr class="">
								<td><?php echo $value['manu_ID'] ?></td>
								<td><?php echo $value['manu_name'] ?></td>
									<td><img style="width: 100px" src='<?php echo asset('images/manufactures/'.$value->{'manu_img'}) ?>'> </td>
								<td>
									<a href="manufacture/{{ $value->manu_ID }}/edit" class="btn btn-success btn-mini">Edit</a>
									<form action="{{ url('manufacture/'.$value->manu_ID) }}" method="POST">
										 
										<input type="hidden" name="_method" value="DELETE">
    									<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
   										<input type="submit" value="Delete" class="btn btn-danger btn-mini">
									</form>
								</td>
							</tr>
							<?php } ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTENT -->

@endsection
