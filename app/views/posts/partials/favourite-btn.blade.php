@if(in_array($post->id,$favourite))

	{{ Form::open(['method'=>'delete','route'=>['favourite.destroy',$post->id]]) }}

@else

	{{ Form::open(['route'=>'favourite.store']) }}
		{{Form::hidden('post_id',$post->id)}}

@endif

<button type="submit" class="btn-naked">	

	<i class="glyphicon glyphicon-heart {{ in_array($post->id,$favourite)?'favourited':'not-favourited' }}"></i>

</button>

{{ Form::close() }}