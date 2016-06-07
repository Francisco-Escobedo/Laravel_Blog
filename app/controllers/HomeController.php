<?php

class HomeController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showWelcome()
    {
        return View::make('hello');
    }

    public function showResume()
    {
        return View::make('resume');
    }

    public function showPortfolio()
    {
        return View::make('portfolio');
    }

    public function showWeatherMap()
    {
        return View::make('weather_map');
    }

    public function showSimpleSimon()
    {
        return View::make('simplesimon');
    }

    public function showWhackamole()
    {
        return View::make('whackamole');
    }

    // GET
    public function loginForm()
    {
      return View::make('auth.login');
    }

    // POST
    public function doLogin()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        if (Auth::attempt(array('email' => $email, 'password' => $password))) {
            Session::flash('successMessage', 'Successfully logged in');
            $message = Session::get('successMessage');
            return Redirect::intended('/posts');
        } else {
            return Redirect::back()->withInput();
            // login failed, go back to the login screen
        }
    }

		// GET
		public function logout()
		{
			Auth::logout();
      return Redirect::back();
			// flash message, you have successfully logged out
			// redirect to main page
		}




    public function showRollDice($guess = 0)
    {
        $randomNumber = mt_rand(1, 6);
        echo '<h1> Your guess: '.$guess.'<br>Random Number: '.$randomNumber.'</h1>';
        if ($guess == $randomNumber) {
            echo '<h1> Good Guess! </h1>';
        } else {
            echo '<h1>Sorry! Try again.</h1>';
        }

        return View::make('roll-dice');
    }
}
