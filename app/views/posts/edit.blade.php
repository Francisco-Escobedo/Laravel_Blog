@extends('layouts.master')

@section('content')
@include('partials.blogheader')
<h1> Edit blog post  </h1>
<div class="container">
<p> {{ $errors->first('title', '<span class="help-block">:message</span>') }} </p>
<p> {{ $errors->first('image', '<span class="help-block">:message</span>') }} </p>
<p> {{ $errors->first('body', '<span class="help-block">:message</span>') }} </p>
<p> {{ $errors->first('tags', '<span class="help-block">:message</span>') }} </p>

    {{ Form::open(array('action' => array('PostsController@update', $post->id),'class'=>'form-group', 'method'=>'PUT')) }}

        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $post->title ,array('class'=>'form-control', 'placeholder'=>'Enter post title')) }}

        {{ Form::label('image', 'Link to image')}}
        {{ Form::text('image', $post->image_url, array('class'=>'form-control', 'placeholder'=>'Enter URL for image')) }}

        {{ Form::label('body', 'Post Body')}}
        {{ Form::textarea('body', $post->body, array('class'=>'form-control', 'placeholder'=>'Enter post content'))}}

        {{ Form::label('tags', 'Tags')}}
        {{ Form::text('tags', $post->tags, array('class'=>'form-control', 'placeholder'=>'Enter tags')) }}

        <button type="submit" class="btn btn-primary">Submit</button>
    {{ Form::close() }}

</div>
@stop