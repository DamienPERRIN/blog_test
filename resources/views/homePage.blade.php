
<div id="landing_page" class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Landing Page
        </div>

        <div class="links">
            <a href="https://github.com/DamienPERRIN?tab=repositories">Mon GitHub</a>
        </div>
        <h2>Formulaire de contact pour {{ $name }}</h2>
        <form id="" method="POST" action="/">
            {{-- @csrf --}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" placeholder="Nom">
            <input type="text" placeholder="Prénom">
            <input type="submit">
        </form>
    </div>
    <button class="" type="button">TOP</button>
</div>
<footer>
    <p>@ 2019 Damien</p>
</footer>

