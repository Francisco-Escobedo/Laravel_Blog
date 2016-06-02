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

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/weather_map', 'HomeController@showWeatherMap');

Route::get('/simplesimon', 'HomeController@showSimpleSimon');

Route::get('/whackamole', 'HomeController@showWhackamole');

Route::get('/whackamole', 'HomeController@RollDice{guess?}');

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

Route::resource('posts', 'PostsController');
