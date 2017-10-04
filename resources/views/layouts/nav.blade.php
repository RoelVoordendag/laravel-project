<nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-mr-center nav-justified w-100"> 
                <li class='nav-item active'>
                    <a class='nav-link' href="{{url('/user')}}">Home</a>
                </li>
                @auth
                <li class="nav-item active">            
                    <a class='nav-link'href="{{url('/admin')}}">Admin</a>
                </li>
                @endauth
                @auth
                  <li class="nav-item active">            
                    <a class='nav-link'href="{{url('/admin/writer')}}">Writer</a>
                </li>
                @endauth
                @auth
                    <li class='nav-item active'>
                        <a class='nav-link' href="{{url('/logout')}}">Logout</a>
                    </li>
                @endauth
                <li class="nav-item active">
                @auth
                        <a class="nav-link" href="{{url('/user/profile')}}">{{Auth::user()->name}}</a>
                @else
                        <a class='nav-link'href="{{url('/login')}}">Login</a>
                @endauth
                </li>

            </ul>
          </div>
        </nav>
