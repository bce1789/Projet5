<?php
$title = 'contact';
$meta = 'Me contacter afin de réaliser ensemble votre projet web, site internet simple sur mesure avec les fonctionnalités dont vous avez envie. Des réalisations rapide sans se ruiner.';
ob_start(); ?>
<p></p>
<div class="container">
    <div class="jumbotron background-contact-list">
        <div class="contact-clean">
            <form action="/P5_benoit_coste/index.php?action=contact/create" method="post">
                <h2 class="text-center">Me contacter</h2>
                <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Nom" required value="<?= isset($_POST['username']) ? $_POST['username'] : '' ?>"></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>"></div>
                <div class="form-group"><input class="form-control" id="ville" type="text" name="locate" placeholder="Localisation" required value="<?= isset($_POST['locate']) ? $_POST['locate'] : '' ?>"></div>
                <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14" required></textarea></div>
                <div>
                    <input type="radio" id="radio-rgpd" name="rgpd" value="rgpd" required>
                    <label for="rgpd">J'accepte que mes données personnelles soient utilisées par le titulaire du site à des fins de prises de contacts</label>
                </div>
                <div class="form-group"><button class="btn btn-primary" type="submit">Envoyer</button></div>
            </form>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('views/template.php'); ?>