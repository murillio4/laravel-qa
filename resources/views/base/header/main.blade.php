<a href="{{ route('home') }}" class="-logo">
    <img class="-img" src="{{ asset('images/logo.png') }}"/>
</a>
<nav class="navigation" role="navigation" aria-label="site navigation">
    <ul class="-list">
        <li class="-item {{ active('questions') }}">
            <a id="nav-questions" href="{{ route('questions') }}" class="-link">Questions</a>
        </li>
        <li class="-item {{ active('courses') }}">
            <a id="nav-courses" href="{{ route('courses') }}" class="-link">Courses</a>
        </li>
        <li class="-item {{ active('summarys') }}">
            <a id="nav-summarys" href="{{ route('summarys') }}" class="-link">Summarys</a>
        </li>
        <li class="-item {{ active('tags') }}">
            <a id="nav-tags" href="{{ route('tags') }}" class="-link">Tags</a>
        </li>
        <li class="-item {{ active('users') }}">
            <a id="nav-users" href="{{ route('users') }}" class="-link">Users</a>
        </li>
    </ul>
</nav>
<form id="search" action="/search" method="get" class="searchbar" autocomplete="off" role="search">
    <div class="input-group stylish-input-group">
        <input type="text" class="form-control"  placeholder="Search" >
        <span class="input-group-addon">
            <button type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </span>
    </div>
    {{.csrf}}
</form>
