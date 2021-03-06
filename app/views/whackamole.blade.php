@extends('layouts.master')

@section('title')
    Whack-a-Diglett Game
@stop

@section('content')

    <head>
    <title>Whack-a-Diglett Game</title>

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link rel="stylesheet"  href="/css/whackamole.css">

    <!-- Page icon -->
    <link rel="icon" href="/img/dugtrio.png">

    <!-- Page Title in Pokemon style font -->
    <img src="/img/pkmnfont.png" alt="Pokemon Font">

</head>
<body>

    <!-- JavaScript for game -->
    <script src="/js/whackamole.js"></script>

    <!-- paragraphs containing number values -->
    <p class= "container" id="score"> </p>

    <p class= "container" id="timer"> </p>

    <p class= "container" id="highScore"> </p>

    <!-- Grid that contains game board -->
    <div class="container">
        <div class="row">
            <div class="col-md-2 size">
                <div id="box1" class="diglett"></div>
            </div>
            <div class="col-md-2 size">
                <div id="box2" class="diglett"></div>
            </div>
            <div class="col-md-2 size">
                <div id="box3" class="diglett"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 size">
                <div id="box4" class="diglett"></div>
            </div>
            <div class="col-md-2 size">
                <div id="box5" class="diglett"></div>
            </div>
            <div class="col-md-2 size">
                <div id="box6" class="diglett"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 size">
                <div id="box7" class="diglett"></div>
            </div>
            <div class="col-md-2 size">
                <div id="box8" class="diglett"></div>
            </div>
            <div class="col-md-2 size">
                <div id="box9" class="diglett"></div>
            </div>
        </div>
    </div>

    <!-- buttons to start and restart game -->
    <button type="button" class="btn btn-primary" id="startButton">Start Game</button>


@stop
