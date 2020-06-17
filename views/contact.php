<?php
$title = 'contact';
ob_start(); ?>
<div class="contact-clean">
    <form action="/P5_benoit_coste/index.php?action=contact/create" method="post">
        <h2 class="text-center">Me contacter</h2>
        <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Nom"></div>
        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
        <div class="form-group"><input class="form-control" type="text" name="locate" placeholder="Localisation"></div>
        <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
        <div class="form-group"><button class="btn btn-primary" type="submit">Envoyer</button></div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('views/template.php'); ?>