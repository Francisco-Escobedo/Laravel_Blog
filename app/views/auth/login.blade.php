@extends('layouts.master')

@section('content')

@include('partials.blogheader')

<div class='container'>

	<h1>login</h1>
	<!-- Main Form -->
	<div class="login-form-1 col-sm-2">
    {{ Form::open(array('action' => 'HomeController@doLogin','class'=>'login-group', 'method'=>'POST')) }}
      <div class="form-group">
      {{ Form::label('email', 'Email') }}
      {{ Form::text('email', null ,array('class'=>'form-control','input type'=>'email', 'placeholder'=>'Enter Email', 'value'=> "{{{ Input::old('email') }}}")) }}
      </div>

      <div class="form-group">
      {{ Form::label('password', 'Password')}}
      {{ Form::text('password', null, array('class'=>'form-control', 'input type'=>'password', 'placeholder'=>'Enter password', 'value'=>"{{{ Input::old('password') }}}")) }}
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    {{ Form::close() }}
	</div>
	<!-- end:Main Form -->
</div>

@stop
