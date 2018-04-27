<header>
    <nav class="indigo accent-3">
        <div class="nav-wrapper container ">
             <a href=" {{ route('index') }}" class="brand-logo">Library2000</a>
            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('library') }}">Library</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
            <ul class="side-nav" id="mobile-menu">
            <li><a href="#">Library</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="#">Login</a></li>
            </ul>
        </div>
    </nav>
</header>