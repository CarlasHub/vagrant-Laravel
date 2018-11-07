
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="/"><img src="{{asset('assets/img/icon.jpg')}}" height="50"  width="50"></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
              </li>
               <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/posts">Posts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/posts/create">
                <i class="fas fa-pen"></i>
                </i>create</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/contacts">Contact</a>
              </li>
              <!-- Authentication Links -->
            @if (Auth::guest())
                <li class="auth"><a href="{{ route('login') }}">Login</a></li>
                <li class="auth"><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
            </ul>
          </div>
           
      </div>
    </nav>


       