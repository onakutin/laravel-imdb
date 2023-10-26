<div class="top-nav">

    <a href="{{ route('home') }}" class="{{ $current_page == 'home' ? 'highlighted' : ''}}">HOME</a>
    <a href="{{ route('movies')}}" class="{{ $current_page == 'movies' ? 'highlighted' : ''}}">MOVIES</a>
    <a href="{{ route('people')}}" class="{{ $current_page == 'people' ? 'highlighted' : ''}}">PEOPLE</a>
    <input type="text" class="quick-search" placeholder="Quick search">

    <div class="sign-register">
        <a href="#">Sign in</a>
        or
        <a href="#">Register</a>
    </div>


</div>