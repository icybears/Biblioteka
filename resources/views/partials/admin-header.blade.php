<header>
    <nav class="red accent-3">
        <div class="nav-wrapper container ">
             <a href=" {{ route('admin.index') }}" class="brand-logo">Library2000</a>
            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
            <li class='{{ request()->is("admin") ? "active" : "" }}'><a href="{{ route('admin.index') }}">Main</a></li>
            <li class='{{ request()->is("admin/books/create") ? "active" : "" }}'><a href="{{ route('admin.createBook') }}">Add a Book</a></li>
            <li class='{{ request()->is("admin/books") ? "active" : "" }}'><a href="{{ route('admin.books') }}">Manage Books</a></li>
            <li class='{{ request()->is("library") ? "active" : "" }}'><a href="{{ route('library') }}">Library</a></li>            
            <li class='{{ request()->is("logout") ? "active" : "" }}'><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
            <ul class="side-nav" id="mobile-menu">
                    <li class='{{ request()->is("admin") ? "active" : "" }}'><a href="{{ route('admin.index') }}">Main</a></li>
                    <li class='{{ request()->is("admin/books/create") ? "active" : "" }}'><a href="{{ route('admin.createBook') }}">Add a Book</a></li>
                    <li class='{{ request()->is("admin/books") ? "active" : "" }}'><a href="{{ route('admin.books') }}">Manage Books</a></li>
                    <li class='{{ request()->is("library") ? "active" : "" }}'><a href="{{ route('library') }}">Library</a></li>            
                    <li class='{{ request()->is("logout") ? "active" : "" }}'><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>
    </nav>
</header>