@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="/css/simplesimon.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<h1 class="center"> The Simplest of Simons </h1>

<p class="center" id="round"> </p>

<button class = "center" id="randomNumbers">Start</button>

<button class = "center" id="reset">Reset</button>

<div id="canvas">
<ul class='gameBoard'>
    <li class='sliceRed'>
        <div id= 'colorRed' class='slice-contentsRed'></div>
    </li>
    <li class='sliceYellow'>
        <div id= 'colorYellow' class='slice-contentsYellow'></div>
    </li>
    <li class='sliceBlue'>
        <div id= 'colorBlue' class='slice-contentsBlue'></div>
    </li>
    <li class='sliceGreen'>
        <div id= 'colorGreen' class='slice-contentsGreen'></div>
    </li>
</ul>
</div>

<script src="/js/simple.js"> </script> 

@stop
