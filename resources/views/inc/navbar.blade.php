<nav class="navbar navbar-expand-md site-header sticky-top py-1 ">
    <div class="container ">
        <a class="navbar-brand py-2" href="{{ url('/home') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Home</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" col-md-6 collapse navbar-collapse container d-flex   justify-content-between float-left" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            {{--<a class="py-2 d-none d-md-inline-block" href="/home">Home</a>--}}
            <a class="py-2 d-none d-md-inline-block" href="/about">About Us</a>
            <a class="py-2 d-none d-md-inline-block" href="/posts">Blog</a>
            <a class="py-2 d-none d-md-inline-block" href="/services">Services</a>
            {{--<a class="py-2 d-none d-md-inline-block" href="/posts/create">Create Post</a>--}}
        </div>
        <div class="float-right">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/home') }}">Home
                            </a>
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