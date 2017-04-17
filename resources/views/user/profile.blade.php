@extends('layouts.user-layout')

@section('title')
        Profile
@endsection

@section('contents')
	<center>
        <a href=""><img src="{{ url('upload/avatar') }}/{{ Auth::user()->avatar }}" name="aboutme" width="140" height="140" class="img-circle"></a>
        <h3>{{ Auth::user()->name }}</h3>
        <em>
        	<form enctype="multipart/form-data" method="POST" action="{{ route('user.changeAvatar') }}">
        		<div class="form-group">
        			<div class="col-md-4 col-md-offset-4">
        				<input type="file" name="photo" class="form-control">
        			</div>
        		</div>
        		<div class="form-group">
        			<div class="col-md-4 col-md-offset-4">
        				<button type="submit" class="btn btn-primary">Change avatar</button>
        				{{ csrf_field() }}
        			</div>
        		</div>
        	</form>
        </em>
        <div class="col-md-12 col-sm-12" style="margin-top: 2%;">
        @if(session()->has('message-error'))
        <div class="alert alert-danger col-md-4 col-md-offset-4"> {{ session()->get('message-error') }} </div>
        @elseif(session()->has('message-success'))
        <div class="alert alert-success col-md-4 col-md-offset-4"> {{ session()->get('message-success') }} </div>
        @endif
        </div>
	</center>
	<div class="clearfix"></div>
@endsection