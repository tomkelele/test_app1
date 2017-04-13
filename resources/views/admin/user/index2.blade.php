@extends('layouts.admin-layout')

@section('title')
	Manage User
@endsection

@section('contents')
	<h3>Manage User</h3>
	<div class="col-md-10 col-md-offset-1">
		@if(session()->has('message'))
		<div class="alert alert-success">
			{{ session()->get('message') }}
		</div>
		@endif
		<table class="table">
			<thead>
				<th>Name</th>
				<th>Email</th>
				<th>Role</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
					<td>{{$user->name}}</td>		
					<td>{{$user->email}}</td>	
					@if($user->role == 1)
					<td>User</td>
					@elseif($user->role == 0)
					<td>Admin</td>
					@endif	
					<td>
						<a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-warning">Edit</a>
						<a href="{{ route('admin.user.delete', $user->id) }}" class="btn btn-danger">Delete</a>
					</td>		
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection