<artical class="col-md-3">

	<h2>{{ $post->title }}</h2>

	<div class="body">{{ $post->body }}</div>
		
		@include('posts/partials/favourite-btn')

</artical>