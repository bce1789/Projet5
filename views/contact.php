<?php
$title = 'contact';
ob_start(); ?>
<div class="contact-clean">
    <form method="post">
        <h2 class="text-center">Me contacter</h2>
        <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Nom"></div>
        <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Merci d'entrer une adresse email valide</small></div>
        <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
        <div class="form-group"><button class="btn btn-primary" type="submit">Envoyer</button></div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('views/template.php'); ?>