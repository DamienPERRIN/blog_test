@extends('layout')

@section('welcome')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>
        <form method="GET" action="{{ route('home') }}" style="margin-bottom: 50px">
            @method('POST') {{-- hidden field --}}
            <button type="submit">To home_page</button>
        </form>
        <div class="links">
            <a href="https://laravel.com/docs">Docs</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://blog.laravel.com">Blog</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>

<div class="container">
    @yield('content')
</div>

<div id="landing_page" class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
                Landing Page
            </div>

            <div class="links">
                <a href="https://github.com/DamienPERRIN?tab=repositories">Mon GitHub</a>
            </div>
            <h2>Formulaire de contact pour </h2>
            <form id="" method="POST" action="/">
                {{-- @csrf --}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" placeholder="Nom">
                <input type="text" placeholder="Prénom">
                <input type="submit">
            </form>
        </div>
    </div>
</div>
@endsection

