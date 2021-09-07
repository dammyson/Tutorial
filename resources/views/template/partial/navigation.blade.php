<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
              <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              </button>
              <a href="#" class="navbar-brand">Falcon escrow</a>
        </div>

        <div class="navbar-collapse collapse" id="navbar">
             @if(Auth::check())
                  <ul class="nav navbar-nav">
                      <li><a href="#">Timeline</a></li>
                      <li><a href="#">Friends</a></li>
                  </ul>
                  <form class="navbar-form navbar-left">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>

              @endif


              <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <li><a href="#">{{ Auth::user()->getNameOrUsername() }}</a></li>
                        <li><a href="#">Update Profile</a></li>
                        <li><a href="{{ url('logout')}}">Sign Out</a></li>
                    @else
                    <li><a href="{{ url('signup') }}">Sign Up</a></li>
                    <li><a href="{{ url('login') }}">Sign in</a></li>
                    @endif
              </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
