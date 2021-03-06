<?php
$title = 'signupPage';
$meta = 'Enregistrement pour recevoir les newsletter et les dernières informations concernant mes prestations web, enregistrez vous afin de ne rien manquer sur les futures opportunités.';
ob_start(); ?>
<p></p>
<div class="container">
    <div class="jumbotron background-contact-list">
        <div class="contact-clean">
            <form action="/P5_benoit_coste/index.php?action=signup" method="post" autocomplete="off">
                <h2 class="text-center">Enregistrement</h2>
                <div class="form-group"><input class="form-control" type="text" name="userName" placeholder="Nom" required></div>
                <div class="form-group"><input class="form-control" type="password" name="userPassword" placeholder="Mot de passe" required></div>
                <div class="form-group"><input class="form-control" type="password" name="userPassword_confirm" placeholder="Confirmation mot de passe" required></div>
                <div class="form-group"><input class="form-control" type="email" name="userMail" placeholder="Email" autocomplete="off" required></div>
                <input type="radio" id="radio-rgpd" name="rgpd" value="rgpd" required>
                    <label for="rgpd">J'accepte que mes données personnelles soient gardées et utilisées par le titulaire du site à des fins de prises de contacts ou de transmissions de newsletters</label>
                <div class="form-group"><button class="btn btn-primary" type="submit">S'enregister</button></div>
            </form>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('views/template.php'); ?>