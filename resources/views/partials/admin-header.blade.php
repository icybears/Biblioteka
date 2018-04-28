<header>
    <nav class="red accent-3">
        <div class="nav-wrapper container ">
             <a href=" {{ route('index') }}" class="brand-logo">Library2000</a>
            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('admin') }}">Add a Book</a></li>
            <li><a href="{{ route('register') }}">Manage Books</a></li>
            <li><a href="{{ route('login') }}">Manage Users</a></li>
            </ul>
            <ul class="side-nav" id="mobile-menu">
            <li><a href="#">Add a Book</a></li>
            <li><a href="#">Manage Books</a></li>
            <li><a href="#">Manage Users</a></li>
            </ul>
        </div>
    </nav>
</header>