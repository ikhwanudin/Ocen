@extends('layouts.master')

@section('content')
	<h1>{{ $page->title }}</h1>
	<hr>
	<p>{{ $page->content }}</p>
@endsection