@extends('layouts.master')

@section('content')
<h1> Create a blog post </h1>
<div class="container">
<p> {{ $errors->first('title', '<span class="help-block">:message</span>') }} </p>
<p> {{ $errors->first('image', '<span class="help-block">:message</span>') }} </p>
<p> {{ $errors->first('body', '<span class="help-block">:message</span>') }} </p>
<p> {{ $errors->first('tags', '<span class="help-block">:message</span>') }} </p>

    {{ Form::open(array('action' => 'PostsController@store','class'=>'form-group')) }}

        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null ,array('class'=>'form-control', 'placeholder'=>'Enter post title', 'value'=> "{{{ Input::old('title') }}}")) }}

        {{ Form::label('image', 'Link to image')}}
        {{ Form::text('image', null, array('class'=>'form-control', 'placeholder'=>'Enter URL for image', 'value'=>"{{{ Input::old('image') }}}")) }}

        {{ Form::label('body', 'Post Body')}}
        {{ Form::textarea('body', null, array('class'=>'form-control', 'placeholder'=>'Enter post content', 'value'=>"{{{ Input::old('body') }}}"))}}

        {{ Form::label('tags', 'Tags')}}
        {{ Form::text('tags', null, array('class'=>'form-control', 'placeholder'=>'Enter tags', 'value'=>"{{{ Input::old('tags') }}}")) }}

        <button type="submit" class="btn btn-primary">Submit</button>
    {{ Form::close() }}

</div>
@stop