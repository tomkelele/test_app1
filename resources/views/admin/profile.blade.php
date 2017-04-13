@extends('layouts.admin-layout')

@section('title')
	Profile Admin
@endsection

@section('contents')
	<h3 style="margin-bottom:2%;">{{ Auth::user()->name }}'s Profile</h3>
	<div class="col-md-10 col-md-offset-1">
		<div class="col-sm-4">
			@if(Auth::user()->avatar == '')
				<img src="{{ url('upload/default.png') }}">
			@endif
		</div>
		<div class="col-sm-8">
			<label>Name : </label>
			<p>{{ Auth::user()->name }}</p>
			<label>Email : </label>
			<p>{{ Auth::user()->email }}</p>
			<label>Role : </label>
			@if(Auth::user()->role == 0)
			<p>Admin</p>
			@else
			<p>User</p>
			@endif
			<a href="" class="btn btn-warning">Edit</a>
		</div>
	</div>
@endsection