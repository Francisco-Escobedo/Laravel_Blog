@extends('layouts.master')

@section('content')

@include('partials.blogheader')

{{ HTML::style('css/404.css') }}
<div >
  <h1 class="text-center" id="index"> The page you're looking for can't be found</h1>
</div>

<img class="center-block" src='/img/404.gif'>


@stop
