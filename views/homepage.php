<?php
$title = 'home';
ob_start(); ?>
<div id="promo">
    <div class="jumbotron">
        <h1>Heading text</h1>
        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
        <p><a class="btn btn-primary" role="button">Learn more</a></p>
    </div>
</div>
<div class="container site-section" id="presentation">
    <h1>Un titre de présentation</h1>
    <p id="p_pres"><br>Nullam&nbsp;id&nbsp;dolor&nbsp;id&nbsp;nibh&nbsp;ultricies&nbsp;vehicula&nbsp;ut&nbsp;id&nbsp;elit.<br>Cras&nbsp;justo&nbsp;odio,&nbsp;dapibus&nbsp;ac&nbsp;facilisis&nbsp;in<br>Nullam&nbsp;id&nbsp;dolor&nbsp;id&nbsp;nibh&nbsp;ultricies&nbsp;vehicula&nbsp;ut&nbsp;id&nbsp;elit.<br><br></p>
</div>
<div class="colored-section-skills">
    <div class="container site-section" id="skills">
        <h1>Mes compétences</h1>
        <p><br></p>
        <div class="row table-skills">
            <div class="col item-skills"><i class="fas fa-laptop-code"></i>
                <h2>Développement</h2>
                <p>- HTML<br>- CSS<br>- JS<br>- PHP</p>
            </div>
            <div class="col item-skills"><i class="fas fa-sitemap"></i>
                <h2>Wordpress</h2>
                <p>Création de site sur mesure.<br><br></p>
            </div>
            <div class="col item-skills"><i class="fas fa-palette"></i>
                <h2>Référencement</h2>
                <p>Référencement naturel.<br><br><br></p>
            </div>
        </div>
    </div>
    <div class="container site-section" id="skills-picture">
        <h1>Projets réalisé</h1>
        <p><br></p>
        <div class="row table-skills">
            <div class="col item-skills">
                <div class="card">
                    <div class="card-body">
                        <a class="card-link" href="https://bce1789.github.io/Webagency/" target="_blank">
                            <ul id="slides">
                                <li class="slide showing"><img src="assets\img\webagency-1.PNG" alt="webagency-one"></li>
                                <li class="slide"><img src="assets\img\webagency-2.PNG" alt="webagency-two"></li>
                                <li class="slide"><img src="assets\img\webagency-3.PNG" alt="webagency-three"></li>
                            </ul>
                        </a>
                    </div>
                </div>
                <p>Site vitrine d'agence web</p>
            </div>
            <div class="col item-skills">
                <div class="card">
                    <div class="card-body">
                        <a class="card-link" href="https://velolib.costeb.fr/" target="_blank">
                            <ul id="slides2">
                                <li class="slide showing"><img src="assets\img\bike-loc-1.PNG" alt="bike-location-one"></li>
                                <li class="slide"><img src="assets\img\bike-loc-2.PNG" alt="bike-location-two"></li>
                                <li class="slide"><img src="assets\img\bike-loc-3.PNG" alt="bike-location-three"></li>
                            </ul>
                        </a>
                    </div>
                </div>
                <p>Application de location de vélos</p>
            </div>
            <div class="col item-skills">
            <div class="card">
                    <div class="card-body">
                        <a class="card-link" href="https://p4-blog-jean-f.costeb.fr/home" target="_blank">
                            <ul id="slides3">
                                <li class="slide showing"><img src="assets\img\blog-1.PNG" alt="blog-writer-one"></li>
                                <li class="slide"><img src="assets\img\blog-2.PNG" alt="blog-writer-two"></li>
                                <li class="slide"><img src="assets\img\blog-3.PNG" alt="blog-writer-three"></li>
                            </ul>
                        </a>
                    </div>
                </div>
                <p>Blog pour un écrivain</p>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/slideShow.js">
</script>
<script>
    const showSlide = new SlideShow('#slides');
    const showSlide2 = new SlideShow('#slides2');
    const showSlide3 = new SlideShow('#slides3');
</script>
<?php $content = ob_get_clean(); ?>
<?php require('views/template.php'); ?>