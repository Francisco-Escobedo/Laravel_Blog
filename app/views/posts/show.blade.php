@extends('layouts.master')

@section('content')

@include('partials.blogheader')

<div class='container'>

    <h1> {{{$post->title}}} </h1>
    <p class = "pull-right"> <img src="{{{$post->image_url}}}" height="200" width="200"> </p>
    <div class="text-justify">
    <p> {{{$post->body}}} </p>
    <p> Written by: {{{$post->user->username}}} </p>
    <p> Tags: {{{$post->tags}}} </p>
    <p> Written on: {{$post->created_at->setTimezone('America/Chicago')->format('D, M d \a\t h:ia T');}} </p>

    @if(null !== Auth::user())
      @if(Auth::user()->username == $post->user->username)

        <div class="input-group">
          <span class="input-group-btn">
            <a class="btn btn-info" href="/posts/{{$post->id}}/edit" role="button">Edit</a>
          </span>

          {{ Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'delete')) }}
            <button type="submit" class="btn btn-danger btn-mini">Delete</button>
          {{ Form::close() }}
        </div>
      @endif
    @endif

  </div>
</div>
@stop
