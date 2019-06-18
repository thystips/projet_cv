<?php require_once('./php/vars.php'); ?>
<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?= $fav_icon ?>" type="image/x-icon" />
        <title><?= $website_name ?></title>

        <!-- Icon css link -->
        <link href="./vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="./css/font-awesome.min.css" rel="stylesheet">
        <link href="./vendors/linears-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="./css/bootstrap.min.css" rel="stylesheet">

        <!-- Extra plugin css -->
        <link href="./vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="./vendors/animate-css/animate.css" rel="stylesheet">

        <link href="./css/style.css" rel="stylesheet">
        <link href="./css/responsive.css" rel="stylesheet">

        <link rel="stylesheet" href="./css/colors/past.css">
    </head>

    <body class="dark_bg" data-spy="scroll" data-target="#bs-example-navbar-collapse-1" data-offset="80"
        data-scroll-animation="true">

        <div id="preloader">
            <div id="preloader_spinner">
                <div class="spinner"></div>
            </div>
        </div>

        <!--================ First header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Boutons de navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img id="navbar_brand-logo" src="<?= $logo ?>"
                                alt="Logo" title="Logo"></a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#about">à propos de moi</a></li>
                            <li><a href="#skill">compétences</a></li>
                            <li><a href="#education">parcours</a></li>
                            <li><a href="#portfolio">portfolio</a></li>
                            <li><a href="#contact">contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--================End header Area =================-->

        <!--================Total container Area =================-->
        <div class="container main_container">
            <div class="content_inner_bg row m0">
                <section class="about_person_area pad" id="about">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="person_img">
                                <img src="<?= $profile_pic ?>" alt="Owner's Picture" title="Owner's Picture">
                                <a class="download_btn" href="<?= $lien_cv ?>"><span>Télécharger mon CV</span></a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="row person_details">
                                <h3>Je suis <span><?= $user_name ?></span></h3>
                                <h4><?= $work ?></h4>
                                <p><?= $description ?></p>
                                <div class="person_information">
                                    <ul>
                                        <li><a>Age</a></li>
                                        <li><a>Nationalité</a></li>
                                        <li><a>Adresse</a></li>
                                        <li><a>Téléphone</a></li>
                                        <li><a>Email</a></li>
                                        <li><a>Site Web</a></li>
                                    </ul>
                                    <ul>
                                        <li><a><?= $age ?></a></li>
                                        <li><a><?= $nationality ?></a></li>
                                        <li><a><?= $address ?></a></li>
                                        <li><a href="tel:+33640235596"><?= $phone ?></a></li>
                                        <li><a
                                                href="mailto:<?= $email ?>?subject=email from <?= $url ?>"><?= $email ?></a>
                                        </li>
                                        <li><a href="https://<?= $url ?>"><?= $url ?></a></li>
                                    </ul>
                                </div>
                                <!-- Social -->
                                <ul class="social_icon">
                                    <?php foreach ($social as $social_footer) : ?>
                                    <li style="">
                                        <a href="https://<?= $social_footer['lien'] ?>"><i
                                                class="fa fa-<?= $social_footer['name'] ?>"></i></a>
                                    </li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" myskill_area pad" id="skill">
                    <div class="main_title">
                        <h2>Mes compétences</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6 wow fadeInUp animated">
                            <div class="skill_text">
                                <h4><?= $cat_comp1 ?></h4>
                                <p><?= $description_comp1 ?></p>
                            </div>
                            <div class="skill_item_inner">

                                <?php foreach ($competences_gauche as $competences_gauche) : ?>
                                <div class="single_skill">
                                    <h4><?= $competences_gauche['Nom'] ?></h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                            aria-valuenow="<?= $competences_gauche['Pourcentage'] ?>" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress_parcent"><?= $competences_gauche['Niveau'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                        <div class=" col-md-6 wow fadeInUp animated">
                            <div class="skill_text">
                                <h4><?= $cat_comp2 ?></h4>
                                <p><?= $description_comp2 ?></p>
                            </div>
                            <div class="skill_item_inner">

                                <?php foreach ($competences_droite as $competences_droite) : ?>
                                <div class="single_skill">
                                    <h4><?= $competences_droite['Nom'] ?></h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                            aria-valuenow="<?= $competences_droite['Pourcentage'] ?>" aria-valuemin="0"
                                            aria-valuemax="100">
                                            <div class="progress_parcent"><?= $competences_droite['Niveau'] ?></div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </section>
                <section class=" education_area pad" id="education">
                    <div class="main_title">
                        <h2>Parcours</h2>
                    </div>
                    <div class="education_inner_area">
                        <?php foreach ($experiences as $experiences) : ?>
                        <div class="education_item wow fadeInUp animated" data-line="<?= $experiences['lettre'] ?>">
                            <h6><?= $experiences['date'] ?></h6>
                            <a href=" #">
                                <h4><?= $experiences['nom'] ?></h4>
                            </a>
                            <h5><?= $experiences['Lieu'] ?></h5>
                            <p><?= $experiences['description'] ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <section class="portfolio_area pad" id="portfolio">
                    <div class="main_title">
                        <h2>Portfolio</h2>
                    </div>
                    <div class="porfolio_menu">
                        <ul class="causes_filter">
                            <li class="active" data-filter="*"><a href="">All</a></li>
                            <?php foreach ($projets_cat as $projets_cat) : ?>
                            <li data-filter=".<?= $projets_cat['Lcat'] ?>"><a
                                    href=""><?= $projets_cat['Categorie'] ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class=" row">
                        <div class="portfolio_list_inner">
                            <?php foreach ($projets as $projets) : ?>
                            <div class="col-md-4 photo <?= $projets['Lcat'] ?>">
                                <div class="portfolio_item">
                                    <div class="portfolio_img">
                                        <a href="<?= $projets['Lien_projet'] ?>" title="<?= $projets['Nom'] ?>"><img
                                                src="<?= $projets['Image'] ?>" alt="Image-<?= $projets['Nom'] ?>"></a>
                                    </div>
                                    <div class="portfolio_title">
                                        <a href="<?= $projets['Lien_projet'] ?>">
                                            <h4><?= $projets['Nom'] ?></h4>
                                        </a>
                                        <h5><?= $projets['Description'] ?></h5>';
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>

                <section class=" contact_area pad" id="contact">
                    <div class="main_title">
                        <h2>Me contacter</h2>
                    </div>
                    <div class="row">
                        <!-- Contact text -->
                        <div class="col-md-6">
                            <div class="left_contact_details wow fadeInUp animated">
                                <div class="contact_title">
                                    <h3>Informations de contact</h3>
                                </div>
                                <p><?= $info_contact ?></p>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Adresse</h4>
                                        <p><?= $address ?></p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Téléphone</h4>
                                        <p><?= $phone ?></p>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4>Adresses Email</h4>
                                        <p><?= $email ?></p>
                                        <!-- <p>antoine.thys@ynov.com</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- ContactForm -->
                            <div class="contact_from_area wow fadeInUp animated">
                                <div class="contact_title">
                                    <h3>Envoyer un message:</h3>
                                </div>
                                <div class="row">
                                    <form action="./php/contact_process.php" method="post" id="contactForm">
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Prénom*">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" name="last" id="last"
                                                placeholder="Nom">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Votre adresse Email*">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <input type="text" class="form-control" name="subject" id="subject"
                                                placeholder="Sujet*">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea class="form-control" rows="1" id="message" name="message"
                                                placeholder="Message*"></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <button class="btn btn-default contact_btn" type="submit"><span>Envoyer le
                                                    Message</span></button>
                                        </div>
                                    </form>
                                    <div id="success">
                                        <p>Votre message a été envoyé avec succès.</p>
                                    </div>
                                    <div id="error">
                                        <p>Désolé un problème est survenu ! Votre message n'a pas
                                            été
                                            envoyé.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div style="height: 1px;padding: 3%"></div>
            </div>
        </div>
        <!--================End Total container Area =================-->

        <!--================footer Area =================-->
        <footer class="footer_area">
            <div class="footer_inner">
                <div class="container">
                    <img id="footer-logo" src="<?= $footer_logo ?>" alt="footer logo">
                    <!-- Social -->
                    <ul class="social_icon">
                        <?php foreach ($social as $social) : ?>
                        <li style="">
                            <a href="https://<?= $social['lien'] ?>"><i class="fa fa-<?= $social['name'] ?>"></i></a>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="container">
                    <div class="pull-right">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#about">à propos de moi</a></li>
                            <li><a href="#skill">compétences</a></li>
                            <li><a href="#education">parcours</a></li>
                            <li><a href="#portfolio">portfolio</a></li>
                            <li><a href="#contact">contact</a></li>
                        </ul>
                    </div>
                    <div class="pull-left">
                        <h5>
                            <!-- Licence -->
                            <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img
                                    alt="Licence Creative Commons" style="border-width:0"
                                    src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a>
                        </h5>
                    </div>
                    <div class="pull-left">
                        <h5> <?php
                            echo '<span xmlns:dct="http://purl.org/dc/terms/" property="dct:title"> ' . $url . ' </span> de <a xmlns:cc="http://creativecommons.org/ns#" href="https://' . $url . '" property="cc:attributionName" rel="cc:attributionURL"> ' . $user_name . ' </a> est mis à disposition selon les termes de la <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">licence Creative Commons Attribution - Partage dans les Mêmes Conditions 4.0 International</a>.' ?>
                        </h5>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End footer Area =================-->

        <!-- jQuery -->
        <script src="./js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="./js/bootstrap.min.js"></script>

        <!-- Extra plugin js -->
        <script src="./vendors/counter-up/waypoints.min.js"></script>
        <script src="./vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="./vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="./vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="./vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="./vendors/style-switcher/styleswitcher.js"></script>
        <script src="./vendors/style-switcher/switcher-active.js"></script>
        <script src="./vendors/animate-css/wow.min.js"></script>

        <!-- Scroll and Progress -->
        <script src="./js/theme.js"></script>

        <!-- contact js -->
        <script src="./js/jquery.form.js"></script>
        <script src="./js/jquery.validate.min.js"></script>
        <script src="./js/contact.js"></script>

        <!-- For dev -->
        <script src="./js/holder.min.js"></script>
    </body>

</html>
