<nav x-data="{ open: false }" class="bg-blue-200 fixed-top border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 py-2 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center py-2">
                    <img src="{{asset('img/logo.png')}}" style="max-width:7%;position:relative;"  alt="..." >
                    <h2 class="text-primary pt-2">{{ __('DIGITAL INNOVATION HP') }} </h2>
                    
                </div>
                
                <!-- Navigation Links -->
                <div class="space-x-8 py-2 items-center sm:-my-px sm:flex">
                    <a href="/" :active="request()->routeIs('welcome')">
                        {{ __('Home') }}
                    </a>
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
                </div>
            </div>
        </div>
    </div>
</nav>
