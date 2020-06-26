<?php
$title = 'home';
ob_start(); ?>
<div id="promo">
    <div class="jumbotron">
        <h1>Création de site web</h1>
        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
        <p><a class="btn btn-primary" role="button">Learn more</a></p>
    </div>
</div>
<div class="container site-section" id="presentation">
    <h1>Qui suis-je?</h1>
    <div class="row">
        <p id="p_pres"><br><br>Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br>
            Blanditiis, repellat accusamus.<br> Explicabo minus quod saepe ducimus natus cumque praesentium.<br>
            Nam quis recusandae aperiam, quae laborum ipsum ad quia delectus hic?<br>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit.<br></p>
        <div class="profil-side">
            <img class="img-responsive img-profil" src="assets/img/profil-photo-2.jpg" alt="photo-profil" />
        </div>
    </div>
</div>
<br>
<!--  anime data aos-->
<section id="services" class="content-section bg-primary text-white text-center">
        <div class="container">
            <div class="content-section-heading">
                <h3 class="text-secondary mb-0">Services</h3>
                <h2 class="mb-5">Ce que je propose</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0" data-aos="zoom-out-up" data-aos-duration="1300"><span class="mx-auto service-icon rounded-circle mb-3" data-aos="zoom-out-down" data-aos-duration="1300"><i class="icon-screen-smartphone"></i></span>
                    <h4><strong>Responsive</strong></h4>
                    <p class="mb-0 size-skills-text">Sites adapté aux tablettes et téléphones</p>
                </div>
                <div class="col-md-6 col-lg-3 mb-5 mb-lg-0" data-aos="zoom-out-up" data-aos-duration="1300" data-aos-delay="250"><span class="mx-auto service-icon rounded-circle mb-3" data-aos="zoom-out-down" data-aos-duration="1300" data-aos-delay="350"><i class="icon-globe"></i></span>
                    <h4><strong>Développement</strong></h4>
                    <p class="mb-0 size-skills-text">- HTML<br>- CSS<br>- JS<br>- PHP</p>
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
        <h1>Projets réalisé</h1>
        <p><br></p>
        <div class="row table-skills">
            <div class="col item-skills">
                <div class="card">
                    <div class="card-body">
                        <a class="card-link" href="https://bce1789.github.io/Webagency/" target="_blank">
                            <ul id="slides">
                                <li class="slide showing">
                                    <img src="assets\img\webagency-1.PNG" alt="webagency-one">
                                </li>
                                <li class="slide">
                                    <img src="assets\img\webagency-2.PNG" alt="webagency-two">
                                </li>
                                <li class="slide">
                                    <img src="assets\img\webagency-3.PNG" alt="webagency-three">
                                </li>
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