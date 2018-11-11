
        <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="/"><img height="50" src="{{asset('assets/img/icon.jpg')}}" width="50"></a> <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/">About</a>
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
                            <li style="list-style: none">
                                @if (Auth::guest())
                            </li>

                            <li class="pr-1">
                                <a href="{{route('login')}}">Login  <i class="fa fa-user"></i></a>
                            </li>

                            <li class="auth">
                                <a href="{{route('register')}}">Sign Up <i class="fa fa-user-plus"></i></a>
                            </li>
                        </ul>
                        @else
                        <ul>
                            <li class="nav-item">
                                <a aria-expanded="true" class="dropdown-toggle" data-toggle="dropdown" href="/myposts" role="button">{{ strtoupper(Auth::user()->name) }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="text-success" href="/posts/create">New Post</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            </li>

                            <li style="list-style: none; display: inline">
                                <form action="{{route('logout')}}" id="logout-form" method="post" name="logout-form" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
   