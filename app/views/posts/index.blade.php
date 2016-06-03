@extends('layouts.master')

@section('content')

<div class="container">
@foreach($posts as $post)
    <h1>{{{$post->title}}} </h1>
    <p> <img src="{{{$post->image_url}}}" height="100" width="100"> </p>
    <p> {{{$post->body}}} </p>
    <p> Tags: {{{$post->tags}}} </p>
    <p> Written on: {{{$post->created_at}}} </p>
@endforeach
{{ $posts->links() }}
</div>

@stop