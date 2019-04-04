<!DOCTYPE html>
<html>
<head>
	<script src="{{ asset('js/jquery.js') }}"></script>
    <link href="{{ asset('css/www.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('page_title')</title>
</head>
<body>
	<div class="header-image">
		<img src="{{ URL::to('/') }}/images/head.jpg">
	</div>
    <div class="container master">
    	@if(!isset($role))
		    @guest
		    @else
		        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
		            <div class="container">
		                <a class="navbar-brand" href="{{ url('/') }}">
		                    {{ config('app.name', 'Laravel') }}
		                </a>
		                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
		                    <span class="navbar-toggler-icon"></span>
		                </button>

		                <div class="collapse navbar-collapse" id="navbarSupportedContent">
		                    <!-- Left Side Of Navbar -->
		                    <ul class="navbar-nav mr-auto">

		                    </ul>

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
		    @endguest
		    @endif
        @yield('content')
    </div>
</body>
</html>
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
