@extends('layouts.master')

@section('content')

@include('partials.blogheader')

<div class='container'>
    <h1> {{{$post->title}}} </h1>
    <p class = "pull-left"> <img src="{{{$post->image_url}}}" height="200" width="200"> </p>
    <div class="text-justify">
    <p> {{{$post->body}}} </p>
    <p> Tags: {{{$post->tags}}} </p>
    <p> Written on: {{$post->created_at->setTimezone('America/Chicago')->format('D, M d \a\t h:ia T');}} </p>
    </div>
</div>
@stop
