{{-- <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
        <a class="navbar-brand" href="/lsapp/public/index">LSAPP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="/lsapp/public/index">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/lsapp/public/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/lsapp/public/services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/lsapp/public/posts">Blog</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li class="nav-item"> 
                    <a class="nav-link" href="/lsapp/public/posts/create">Create Post</a>
             </li>
          </ul>
        </div>
      </nav>

 --}}








      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/index') }}">
                    {{ config('app.name', 'LSAPP') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                            <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                <a class="nav-link" href="/lsapp/public/index">Home <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/lsapp/public/about">About</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="/lsapp/public/services">Services</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="/lsapp/public/posts">Blog</a>
                              </li>
                            </ul>
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/lsapp/public/dashboard"> Dashboard </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
