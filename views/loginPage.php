<?php
$title = 'connect';
ob_start(); ?>
<p></p>
<div class="container">
    <div class="jumbotron background-contact-list">
        <div class="contact-clean">
            <form action="/P5_benoit_coste/index.php?action=login" method="post">
                <h2 class="text-center">Connection</h2>
                <div class="form-group"><input class="form-control" type="text" name="userName" placeholder="Nom"></div>
                <div class="form-group"><input class="form-control" type="password" name="userPassword" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary" type="submit">Connexion</button></div>
            </form>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('views/template.php'); ?>