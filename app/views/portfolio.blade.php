@extends('layouts.master_material')

@section('content')
  <nav class="white" role="navigation">
    <a id="logo-container" href="#" class="brand-logo black-text left">Francisco E. Escobedo</a>
    <div class="nav-wrapper container">
      
      <ul class="right hide-on-med-and-down">
        <li><a href="#"></a></li>

      </ul>

    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center white-text text-lighten-5">Projects, Websites, and More</h1>
        <div class="row center">
          <h5 class="header col s12 light"></h5>
        </div>
        <div class="row center">
          <a href="/resume" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Learn More</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="/img/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <img class="materialboxed" data-caption="3 Day Forecast" width="270" src="/img/weathermap.png">
            <h5 class="center"><a href="/weather_map">3 Day Forecast</a></h5>

            <p class="light">Forecast for the next three days utilizing Google Maps and OpenWeatherMap API's. This mash-up allows the marker to be dragged and dropped anywhere on the map, returning the forecast for the designated location. </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <img class="materialboxed" data-caption="Simple Simon Game" width="310" src="/img/simplesimongame.png">
            <h5 class="center"><a href="/simplesimon">Simple Simon</a></h5>

            <p class="light">Memory Game created using HTML, CSS, and JavaScript. Follow the randomly generated flashing patterns to test your memory.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <img class="materialboxed" data-caption="Whack-A-Mole Game" width="341" src="/img/whackamolegame.png">
            <h5 class="center"><a href="/whackamole">Whack-a-Mole </a></h5>

            <p class="light">Arcade style game. Utilizes HTML, CSS, and JavaScript to randomize position of moles on the game-board. Click the moles before they disappear and beat your own high score! Best viewed full-screen in a desktop or laptop browser. </p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h4 class="header col s12 light">Experience with HTML, CSS, JavaScript, jQuery, MySQL, Laravel, and PHP.</h4>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="/img/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Me</h4>
          <p class="left-align light">I am interested in work with large data sets, creating web applications to facilitate work flow, health care related projects, and process optimization. I have worked with project management teams, contracting, financial reporting, and sales teams. Self motivated, constantly working to improve, and learn applicable skills.  </p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h4 class="header col s12 light">Diversified experience with programming and Health Care familiarity.</h4>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="/img/background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Bio</h5>
          <p class="grey-text text-lighten-4">Originally from San Antonio, graduate of Trinity University. Employed with Molina Health Care from 2013 to 2015 in Bothell, WA (North of Seattle), and returned back to San Antonio to pursue a Masters in Health Care Administration, again at Trinity. Enrolled in Code Up to acquire programming skills for use in the Health Care setting. </p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="https://www.facebook.com/francisco.e.escobedo" target="_blank">Facebook</a></li>
            <li><a class="white-text" href="https://www.instagram.com/franciscoees/" target="_blank">Instagram</a></li>
            <li><a class="white-text" href="https://twitter.com/fescobed" target="_blank">Twitter</a></li>
            <li><a class="white-text" href="https://www.linkedin.com/in/francisco-escobedo-a2915628?trk=nav_responsive_tab_profile_pic" target="_blank">LinkedIn</a></li>
          </ul>
        </div>

      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-5">Francisco E Escobedo</a>
      </div>
    </div>
  </footer>
@stop