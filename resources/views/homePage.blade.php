
<div class="content">
    <div class="title m-b-md">
        Landing Page
    </div>

    <div class="links">
        <a href="https://github.com/DamienPERRIN?tab=repositories">Mon GitHub</a>
    </div>
    <h2>Formulaire de contact pour l'envoi d'un mail</h2>
    <form id="" method="POST" action="mail">
        @csrf
        <div class="row">
            <input type="text" placeholder="Nom">
            <input type="text" placeholder="Prénom">
            <input type="email" placeholder="Email">
        </div>
        <div class="row">
            <input type="textarea" placeholder="Que voulez-vous dire ?">
        </div>
        <input type="submit">
    </form>
</div>
