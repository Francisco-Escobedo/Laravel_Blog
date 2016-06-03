@extends('layouts.master')

@section('content')
<h1> Create a blog post </h1>
<div class="container">
<p> {{ $errors->first('title', '<span class="help-block">:message</span>') }} </p>
<p> {{ $errors->first('image', '<span class="help-block">:message</span>') }} </p>
<p> {{ $errors->first('body', '<span class="help-block">:message</span>') }} </p>
<p> {{ $errors->first('tags', '<span class="help-block">:message</span>') }} </p>

    <form action='{{{ action('PostsController@store') }}}' method='POST'>

        <fieldset class="form-group">
            <label for="inputTitle">Title</label>
            <input type="text" class="form-control" id="inputTitle" placeholder="Enter post title" name="title" value="{{{ Input::old('title') }}}">
        </fieldset>

        <fieldset class="form-group">
            <label for="inputImage">Link to image</label>
            <input type="text" class="form-control" id="inputImage" placeholder="Enter URL for image" name="image" value="{{{ Input::old('image') }}}">
        </fieldset>

        <fieldset class="form-group">
            <label for="Textarea">Post Body</label>
            <textarea type="text" class="form-control" id="Textarea" rows="3" name="body">{{{ Input::old('body') }}}</textarea>
        </fieldset>

        <fieldset class="form-group">
            <label for="inputTags">Tags</label>
            <input type="text" class="form-control" id="inputTags" placeholder="Enter tags" name="tags" value="{{{ Input::old('tags') }}}">
            <small class="text-muted">Separate tags with a comma e.g. food, cars, travel</small>
        </fieldset>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@stop