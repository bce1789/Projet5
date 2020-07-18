<?php
$title = 'connect';
$meta = 'Page de connexion afin d\'accéder par la suite à une partie administrateur, permettant la gestion de données utilisateur. Afin de fournir des prestations web personnalisé.';
ob_start(); ?>
<p></p>
<div class="container">
    <div class="jumbotron background-contact-list">
        <div class="contact-clean">
            <form action="/P5_benoit_coste/index.php?action=login" method="post">
                <h2 class="text-center">Connexion</h2>
                <div class="form-group"><input class="form-control" type="text" name="userName" placeholder="Nom ou Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="userPassword" placeholder="Mot de passe"></div>
                <div class="form-group"><button class="btn btn-primary" type="submit">Connexion</button></div>
            </form>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('views/template.php'); ?>