@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->body }}</p>
        </div>
    </div>
    
@endsection