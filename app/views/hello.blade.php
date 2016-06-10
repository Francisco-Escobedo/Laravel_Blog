@extends('layouts.master')

@section('content')
{{ HTML::style('css/landing_page.css'); }}

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand white">franciscoe.xyz</div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle medium" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects<span class="caret"></span></a>
          <ul class="dropdown-menu">
						<li><a href="https://github.com/Francisco-Escobedo">Github</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="https://github.com/Adlister-Edric-Lorena-Pancho/adlister.dev">AdLister (Craigslist "Clone")</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="/posts" class="">Francisco escBlog</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/whackamole">Whack-a-Diglett</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="/weather_map">3 Day Weather Forecast</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="/simplesimon">Simple Simon</a></li>
          </ul>
					<li><a href="/resume" class="medium">Resume</a></li>
					<li><a href="/portfolio" class="medium">Portfolio</a></li>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<a href="/resume"><img src="/img/professionalphoto.jpg" class="img-thumbnail center-block vertical-center bottommargin" height="auto" width="auto"></a>
	<div class="white text-center large hidden-xs">Hello, I am <a href="/resume" class="white"><strong>Francisco Escobedo</strong></a></div> <br>
	<div class="bottompad white text-center large hidden-xs">Full-Stack developer from San Antonio, TX </div>
	<div class="black text-center large hidden-lg hidden-md hidden-sm">Hello, I am <a href="/resume" class="black"><strong>Francisco Escobedo</strong></a></div> <br>
	<div class="smallbottompad black text-center large hidden-lg hidden-md hidden-sm">Full-Stack developer from</div>
	<div class="black text-center large hidden-lg hidden-md hidden-sm">San Antonio, TX</div>
@stop
