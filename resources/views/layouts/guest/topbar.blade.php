{{-- <nav x-data="{ open: false }" > --}}
    <!-- Primary Navigation Menu -->
{{-- 
                <!-- Logo -->
                <div class="shrink-0 items-center py-2">
                    <img src="{{asset('img/logo.png')}}" style="max-width:7%;position:relative;"  alt="..." >
                    <h2 class="text-primary pt-2">{{ __('DIGITAL INNOVATION HP') }} </h2>
                </div> --}}

    <!-- Navigation Links -->
    <div class="topnav" id="myTopnav">
            <a  class="nav-home"  href="/" :active="request()->routeIs('dashboard')"> {{ __('DIGITAL INNOVATION') }}</a>
            <a href="/#about" :active="request()->routeIs('dashboard')">
                {{ __('About') }}
            </a>
            <a href="/#contact" :active="request()->routeIs('dashboard')">
                {{ __('Contact') }}
            </a>
            @if (Route::has('login'))
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @endif
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
    </div>
    
{{-- </nav> --}}

