
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
          <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="/"><img src="{{asset('assets/img/icon.jpg')}}" height="50"  width="50"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase">
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="/services">Services</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="/posts">Posts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="/contacts">Contact</a>
                </li>
              </ul>
              <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                     @if (Auth::guest())
                    <li class="pr-1"><a href="{{ route('login') }}">Login</a></li>
                    <li class="auth"><a href="{{ route('register') }}">Register</a></li>
                  </ul>
                @else
                <ul>
                <li  class="nav-item pr-2">
                  <a href="/myposts" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">
                            {{ strtoupper(Auth::user()->name) }} 
                  </a>
                </li>
         
                  <li  class="nav-item pr-2">
                    <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                  </a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </ul>
                         
                @endif
                  <a href="/posts/create" class="text-success">New Post</a>
              </ul>
            </div>
          </div>
        </div>
      </nav>

          

       