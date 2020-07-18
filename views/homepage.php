<?php
$title = 'home';
$meta = 'Créateur de site web, site sur mesure, développement web et référencement naturel. Services de développement web localisé en Drôme Ardèche. Venez vous renseigner.';
ob_start(); ?>
<div id="promo">
    <div class="jumbotron">
        <h1>Création de site web</h1>
        <p>Création de site vitrine, blog, intégration et développement web.</p>
        <p><a href="/P5_benoit_coste/index.php?action=contact" class="btn btn-primary" role="button">Me contacter</a></p>
    </div>
</div>
<div id="background-presentation">
    <div class="site-section" id="presentation">
        <h2 class="title-font-size">Qui suis-je?</h2>
        <div class="row">
            <p id="p_pres"><br><br>Je m'appel Benoit Coste j’habite dans la région de valence dans la drôme.<br>
                Passionné d’informatique depuis tout petit j’ai acquis diverses expérience.<br>
                Plus de 5 ans d'experiences en travaillant dans l'informatique.<br>
                J’ai ensuite passé le cap et me suis lancé dans le développement web et la programmation.<br>
                J’ai suivi une formation en ligne avec l’organisme OpenClassroom.<br>
                J’en apprend toujours plus de jours en jours.<br>
                Je suis aujourd'hui passionné par le développement web et la création de site internet.<br></p>
            <div class="profil-side">
                <img class="img-responsive img-profil" src="assets/img/profil-photo-0.png" alt="photo-profil" />
            </div>
        </div>
    </div>
</div>
<!--  anime data aos-->
<section id="services" class="content-section bg-primary text-white text-center">
    <div class="container">
        <div class="content-section-heading">
            <h3 class="text-secondary mb-0">Services</h3>
            <h2 class="mb-5 title-font-size">Mon travail de développeur web</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0" data-aos="zoom-out-up" data-aos-duration="1300"><span class="mx-auto service-icon rounded-circle mb-3" data-aos="zoom-out-down" data-aos-duration="1300"><i class="icon-screen-smartphone"></i></span>
                <h4><strong>Responsive</strong></h4>
                <p class="mb-0 size-skills-text">Sites adapté aux tablettes et téléphones</p>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0" data-aos="zoom-out-up" data-aos-duration="1300" data-aos-delay="250"><span class="mx-auto service-icon rounded-circle mb-3" data-aos="zoom-out-down" data-aos-duration="1300" data-aos-delay="350"><i class="icon-globe"></i></span>
                <h4><strong>Développement</strong></h4>
                <p class="mb-0 size-skills-text">- HTML<br>- CSS<br>- JS<br>- PHP<br>- BOOTSTRAP</p>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0" data-aos="zoom-in-up" data-aos-duration="1300" data-aos-delay="500"><span class="mx-auto service-icon rounded-circle mb-3" data-aos="zoom-out-down" data-aos-duration="1300" data-aos-delay="600"><i class="icon-screen-desktop"></i></span>
                <h4><strong>Wordpress</strong></h4>
                <p class="mb-0 size-skills-text"><span>Création de site sur mesure&nbsp;</p>
            </div>
            <div class="col-md-6 col-lg-3 mb-5 mb-lg-0" data-aos="zoom-in-up" data-aos-duration="1300" data-aos-delay="500"><span class="mx-auto service-icon rounded-circle mb-3" data-aos="zoom-out-down" data-aos-duration="1300" data-aos-delay="850"><i class="icon-social-google"></i></span>
                <h4><strong>Référencement</strong></h4>
                <p class="mb-0 size-skills-text"><span>Référencement Naturel&nbsp;</p>
            </div>
        </div>
    </div>
</section>
<!--  -->
<div class="colored-section-skills">
    <div class="container site-section" id="skills-picture">
        <br>
        <h2 class="mb-5 title-font-size">Projets web réalisé</h2>
        <p><br></p>
        <div class="row table-skills">
        <p class="sub-title-responsive">Site d'office de tourisme de Strasbourg (non-officiel)</p>
            <div class="col item-skills">
                        <a class="card-link" href="https://otstrasbourg.costeb.fr/" target="_blank">
                            <ul id="slides">
                                <li class="slide showing">
                                    <img src="assets\img\otwp1.PNG" alt="office-tourisme-strasbourg-1">
                                </li>
                                <li class="slide">
                                    <img src="assets\img\otwp2.PNG" alt="office-tourisme-strasbourg-2">
                                </li>
                                <li class="slide">
                                    <img src="assets\img\otwp3.PNG" alt="office-tourisme-strasbourg-3">
                                </li>
                            </ul>
                        </a>
                        <p class="sub-title">Site d'office de tourisme de Strasbourg (non-officiel)</p>       
            </div>
            <p class="sub-title-responsive" >Application de location de vélos</p>
            <div class="col item-skills">
                        <a class="card-link" href="https://velolib.costeb.fr/" target="_blank">
                            <ul id="slides2">
                                <li class="slide showing"><img src="assets\img\bike-loc-1.PNG" alt="bike-location-one"></li>
                                <li class="slide"><img src="assets\img\bike-loc-2.PNG" alt="bike-location-two"></li>
                                <li class="slide"><img src="assets\img\bike-loc-3.PNG" alt="bike-location-three"></li>
                            </ul>
                        </a>
                        <p class="sub-title" >Application de location de vélos</p>
            </div>
            <p class="sub-title-responsive">Blog pour un écrivain</p>
            <div class="col item-skills">
                        <a class="card-link" href="https://p4-blog-jean-f.costeb.fr/home" target="_blank">
                            <ul id="slides3">
                                <li class="slide showing"><img src="assets\img\blog-1.PNG" alt="blog-writer-one"></li>
                                <li class="slide"><img src="assets\img\blog-2.PNG" alt="blog-writer-two"></li>
                                <li class="slide"><img src="assets\img\blog-3.PNG" alt="blog-writer-three"></li>
                            </ul>
                      </a>
                      <p class="sub-title">Blog pour un écrivain</p>
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