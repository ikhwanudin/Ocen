@extends('layouts.master')

@section('content')
    <article>
        <h1>Posts</h1>
        <div class="row">
            <div class="col-md-8">
                @if(count($posts) > 0)
                    @foreach($posts as $post)
                        <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                        <small>Created on {{ $post->created_at }}</small>
                        <p>{{ $post->body }}</p>
                    @endforeach
                    {{ $posts->links() }}
                @else
                    <h3>No Post Found</h3>
                @endif
            </div>
        </div>
    </article>
@endsection