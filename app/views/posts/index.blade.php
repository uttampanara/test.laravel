@extends('master')

@section('container')

	@foreach(array_chunk($posts->all(),4) as $row)

		<div class="row">

			@foreach($row as $post)

				@include('posts/partials/post')

			@endforeach

		</div>

	@endforeach
	
@stop