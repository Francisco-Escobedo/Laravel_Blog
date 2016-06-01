<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/resume', function()
{
    return View::make('resume');
});

Route::get('/portfolio', function()
{
    return View::make('portfolio');
});

Route::get('/rolldice/{guess?}', function($guess='0')
{
    $randomNumber = mt_rand(1,6);
    echo '<h1> Your guess: '. $guess. '<br>Random Number: '.$randomNumber.'</h1>';
    if ($guess == $randomNumber){
        echo '<h1> Good Guess! </h1>';
    } else {
        echo '<h1>Sorry! Try again.</h1>';
    }
    return View::make('roll-dice');

});