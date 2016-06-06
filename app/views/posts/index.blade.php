@extends('layouts.master')

@section('content')

@include('partials.blogheader')

<div class="container">

<div class="text-center text-justify">
@foreach($posts as $post)
    <h1><a href="posts/{{{$post->id}}}">{{{$post->title}}} </a></h1>
    <p> <img src="{{{$post->image_url}}}" height="100" width="100"> </p>
    <p> {{{$post->body}}} </p>
    <p> Tags: {{{$post->tags}}} </p>
    <p> Written on: {{{$post->created_at}}} </p>
@endforeach
{{ $posts->links() }}
</div>
</div>

@stop