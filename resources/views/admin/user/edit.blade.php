@extends('layouts.admin-layout')

@section('title')
	Edit user
@endsection

@section('contents')
	<h3>Edit User</h3>
	
	<div class="col-md-10 col-md-offset-1">		
		<form class="form-horizontal" method="POST" action="{{ route('admin.user.postEdit', $user->id) }}">
			<div class="form-group">
			    <label class="control-label col-sm-2" for="name">Name :</label>
			    <div class="col-sm-5">
			      	<input type="text" class="form-control" name="name" value="{{ $user->name }}">
			      	@if($errors->first('name'))
			    		<p style="color:red;">{{$errors->first('name')}}</p>
			    	@endif
			    </div>
			</div>
			<div class="form-group">
			    <label class="control-label col-sm-2" for="email">Email :</label>
			    <div class="col-sm-5">
			      	<input type="text" class="form-control" name="email" value="{{ $user->email }}">
			      	@if($errors->first('email'))
			    		<p style="color:red;">{{$errors->first('email')}}</p>
			    	@endif
			    </div>

			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="role">Role :</label>
				<div class="col-sm-5">
					<select class="form-control" name="role">
						@if($user->role == 1)
							<option value="0">Admin</option>
							<option value="1" selected>User</option>
						@elseif($user->role == 0)
							<option value="0" selected>Admin</option>
							<option value="1">User</option>
						@endif
					</select>
				</div>
			</div>
			<div class="form-group" style="text-align: center;">
				{{ csrf_field() }}
				<button type="submit" class="btn btn-success">Edit</button>
				<a href="{{ url('/admin/user') }}" class="btn btn-primary">Cancel</a>
			</div>
		</form>
	</div>
@endsection