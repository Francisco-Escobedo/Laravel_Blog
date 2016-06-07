<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/posts">Francisco escBlog</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        @if(Auth::check())
        <li><a href="/posts/create">Create Post</a></li>
        <li><a href="/posts/1/edit">Edit Post</a></li>
        <li><a href="/posts/delete">Delete Post</a></li>
        @endif
        <li><a href="/posts">All Posts</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
            <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        @else
            <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>
