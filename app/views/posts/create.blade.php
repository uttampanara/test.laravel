@extends('master')

@section('container')
	<h1>Create a new Post</h1>	
	
	{{ Form::open(array('route'=>'posts.store','files'=>true)) }}
		
		<div class="form-group">
	
			{{Form::label('title','title')}}
	
			{{Form::text('title',null,array('class'=>'form-control'))}}
	
		</div>
	
		<div class="form-group">
	
			{{Form::label('thumbnail','thumbnail')}}
	
			{{Form::file('thumbnail')}}
	
		</div>
		
		<div class="form-group">
	
			{{Form::label('body','body')}}
	
			{{Form::textarea('body',null,array('class'=>'form-control'))}}
	
		</div>

		<div class="form-group">
	
			{{Form::submit('Create Post',null,array('class'=>'class'))}}
	
		</div>
	
	{{ Form::close() }}

