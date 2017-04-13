@extends('layouts.admin-layout')

@section('title')
Manage User
@endsection

@section('contents')
<h3>Manage User</h3>
<div class="col-md-12">
	@foreach($users as $user)
	<div class="col-md-5 col-sm-5 col-xs-12 profile_details col-md-offset-1">
		<div class="well profile_view">
			<div class="col-sm-12">
				<div class="left col-xs-7">
					<h2>{{ $user->name }}</h2>
					<p><strong>Email: </strong> {{ $user->email }} </p>
				</div>
				<div class="right col-xs-5 text-center">
					@if($user->avatar == null)
					<img src="{{ url('/upload/default.png') }}" alt="" class="img-circle img-responsive">
					@else
					<img src="{{ url('/upload/avatar') }}/{{ $user->avatar }}" alt="" class="img-circle img-responsive">
					@endif
				</div>
			</div>
			<div class="col-xs-12 bottom text-center">
				<div class="pull-right">
					<a href="{{ route('admin.user.edit', $user->id) }}" class="btn btn-warning"><i class="fa fa-pencil-square-o"> </i> Edit</a>
					<a href="{{ route('admin.user.delete', $user->id) }}" class="btn btn-danger"><i class="fa fa-trash-o"> </i> Delete</a>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>
<div class="pull-right">{{ $users->links() }}</div>
@endsection