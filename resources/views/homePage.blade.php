
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
