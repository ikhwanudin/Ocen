@extends ('layouts.master')

@section ('content')
    <h2>Posts</h2>
    @foreach($posts as $post)
        <ul>
            <li>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->body }}</p>
            </li>
        </ul>
    @endforeach
@endsection
