<?php
$title = 'erreur';
$meta = 'Page d\'erreur suite à une mauvaise redirection, ou un lien érroné veuillez réessayer';
ob_start(); ?>
<p></p>
<div class="container">
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-template">
                        <h2> Oops!</h2>
                        <h3> 404 Not Found</h3>
                        <div class="error-details">
                            Désolé cette page est inaccessible!
                        </div>
                        <p></p>
                        <div class="error-actions">
                            <a href="/P5_benoit_coste/index.php" class="btn btn-primary btn-lg">
                                <span class="glyphicon glyphicon-home"></span>
                                Revenir à l'Accueil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('views/template.php'); ?>