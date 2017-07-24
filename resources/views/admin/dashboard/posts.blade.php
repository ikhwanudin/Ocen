@extends('layouts.dashboard')

@section('content')
<div class="card">
	<div class="card-header">Posts</div>
	<div class="card-block">
		<p>List Of all posts</p>
		<ul class="list-group">
        	@foreach($posts as $post)
	        	<li class="list-group-item">
	        		{{ $post->title }}
	        	</li>
        	@endforeach
        </ul>
	</div>
</div>
@endsection
