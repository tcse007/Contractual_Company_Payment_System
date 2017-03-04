@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
			<h1> User Activation Form</h1><hr>
			<div class="panel panel-default" >			
				<div class="panel-heading"> User Activation Form</div>
				<div class="panel-body">              		 
					<form method="post" action="{{URL::to('admin/home/user_update')}}" enctype="multipart/form-data">						
						<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
						<input name="id" type="hidden" value="{{$user->id }}"/>									   
						<div class="checkbox">
							Status:<label><input type="checkbox" name="active" value="1" >Active</label>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop