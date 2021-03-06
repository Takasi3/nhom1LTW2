
@extends('admin.master_admin')
@section('content')
<!-- BEGIN CONTENT -->
<div id="content">
	<div id="content-header">
		<div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i> Home</a></div>
		<h1>Edit Manufactures</h1>
	</div>
	<div class="container-fluid">
		<hr>
		<div class="row-fluid">
			<div class="span12">
				<div class="widget-box">
					<div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
						<h5>Manufacture Detail</h5>
					</div>
					<div class="widget-content nopadding">

						<!-- BEGIN USER FORM -->
						<form action="{{ url('/manufacture/'.$data['getManufactureByID']->manu_ID) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
							<div class="control-group">
								<input type="hidden" name="_method" value="PUT">
								<label class="control-label">Manufacture Name :</label>
								<div class="controls">
									<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
									<input type="text" class="span11" placeholder="Manufacture name" name="manu_name" value="{{ $data['getManufactureByID']->manu_name }}" /> *
								</div>
							</div>

	
							<div class="control-group">
									<label class="control-label">Choose an image :</label>
									<div class="controls">
										<input type="file" name="fileUpload" id="fileUpload">
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