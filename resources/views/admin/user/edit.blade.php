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
			      	@if($errors->first('name'))
			    		<input type="text" class="form-control" name="name" value="{{ old('name') }}">
			    		<p style="color:red;">{{$errors->first('name')}}</p>
			    	@else
			    		<input type="text" class="form-control" name="name" value="{{ $user->name }}">
			    	@endif
			    </div>
			</div>
			<div class="form-group">
			    <label class="control-label col-sm-2" for="email">Email :</label>
			    <div class="col-sm-5">			      	
			      	@if($errors->first('email'))
			      		<input type="text" class="form-control" name="email" value="{{ old('email') }}">
			    		<p style="color:red;">{{$errors->first('email')}}</p>
			    	@else
			    		<input type="text" class="form-control" name="email" value="{{ $user->email }}">
			    	@endif
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