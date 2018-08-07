<header>
    <nav class="blue accent-2 ">
        <div class="nav-wrapper container ">
             <a href=" {{ route('home') }}" class="brand-logo"> <img id="logo-img" width="30px" src="{{ asset('img/crown.svg') }}" alt="Olive Wreath Logo">{{ config('app.name') }}</a>
            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li class='{{ request()->is("library") ? "active" : "" }}'><a href="{{ route('library') }}">Library</a></li>
                <li class='{{ request()->is("about") ? "active" : "" }}'><a href="{{ route('about') }}">About us</a></li>
                <li class='{{ request()->is("admin") ? "active" : "" }}'><a href="{{ route('admin.index') }}">Staff Area</a></li>
                @if(auth()->check())
            
                <li class='{{ request()->is("logout") ? "active" : "" }}'>
                    <a href="{{ route('logout') }}">Logout</a>
                </li>
                @endif
            </ul>
            <ul class="side-nav" id="mobile-menu">
                    <li class='{{ request()->is("library") ? "active" : "" }}'><a href="{{ route('library') }}">Library</a></li>
                    <li class='{{ request()->is("about") ? "active" : "" }}'><a href="{{ route('about') }}">About us</a></li>
                    <li class='{{ request()->is("admin") ? "active" : "" }}'><a href="{{ route('admin.index') }}">Staff Area</a></li>
                    @if(auth()->check())
                
                    <li class='{{ request()->is("logout") ? "active" : "" }}'>
                        <a href="{{ route('logout') }}">Logout</a>
                    </li>
                    @endif
            </ul>
        </div>
    </nav>
</header>