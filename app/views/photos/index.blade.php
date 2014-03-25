@extends('master')
@section('container')
	<h1>Upload Photo</h1>	
	
	{{ Form::open(array('route'=>'photos.store','files'=>true)) }}
		{{ Form::hidden('user_id',Auth::user()->id) }}
		<div class="form-group">
	
			{{Form::label('title','Title :')}}

			{{Form::text('title',null,array('class'=>'form-control'))}}
	
		</div>
	
		<div class="form-group">
	
			{{Form::label('upload','Upload :')}}
	
			{{Form::file('upload')}}
	
		</div>
		
		<div class="form-group">
	
			{{Form::submit('Upload Photo',null,array('class'=>'class'))}}
	
		</div>
	
	{{ Form::close() }}