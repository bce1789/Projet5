<?php
$title = 'contact';
ob_start(); ?>
<p></p>
<div class="container">
    <div class="jumbotron background-contact-list">
        <div class="contact-clean">
            <form action="/P5_benoit_coste/index.php?action=contact/create" method="post">
                <h2 class="text-center">Me contacter</h2>
                <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Nom" required></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
                <div class="form-group"><input class="form-control" id="ville" type="text" name="locate" placeholder="Localisation" required></div>
                <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14" required></textarea></div>
                <div>
                    <input type="radio" id="radio-rgpd" name="rgpd" value="rgpd" required>
                    <label for="rgpd">J'accepte que mes données personnelles soient gardées et utilisées par le titulaire du site à des fins de prises de contacts</label>
                </div>
                <div class="form-group"><button class="btn btn-primary" type="submit">Envoyer</button></div>
            </form>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('views/template.php'); ?>