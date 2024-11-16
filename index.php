<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    include('components/header.php');
    ?>
    <title>Hari Siracuse - Développeur Symfony | PHP</title>
    <meta name="description"
          content="Bienvenue sur mon portfolio en ligne ! Je suis Hari Siracuse, développeur web spécialisé en Symfony. Découvrez mon parcours, mes compétences et les projets que j’ai réalisés.">
</head>
<body>


<?php
include('components/navbar.php');
?>


<section class="homepage">
    <h1>Hari SIRACUSE - Développeur Symfony</h1>
    <p>Des projets Symfony qui parlent d'eux-mêmes - Avec plus de quatre ans d'expérience et une multitude de projets à
        mon actif, explorez mon portfolio afin de découvrir mes diverses réalisations.</p>
</section>

<h2 class="subtitle-index">Mes projets</h2>
<section class="projects">
    <div class="projects-unit" data-aos="zoom-in">
        <a href="shevent">
            <img width="374" height="374" src="assets/img/shevent.avif" alt="miniature du projet shevent">
        </a>
        <div class="overlay">
            <p>SH Event</p>
        </div>
    </div>

    <div class="projects-unit" data-aos="zoom-in">
        <a href="laboulenoire">
            <img width="374" height="374" src="assets/img/laboulenoire.avif" alt="miniature du projet la boule noire">
        </a>
        <div class="overlay">
            <p>La Boule Noire</p>
        </div>
    </div>

    <div class="projects-unit" data-aos="zoom-in">
        <a href="starkmotors">
            <img width="374" height="374" src="assets/img/starkmotors.avif" alt="miniature du projet stark motors">
        </a>
        <div class="overlay">
            <p>Stark Motors</p>
        </div>
    </div>
</section>


<h2 class="subtitle-index mt-80">Mes derniers articles de blog</h2>
<section class="blog">
    <div class="container blog-grid">

        <a class="blog-unit" href="article/cest-quoi-un-framework" data-aos="zoom-in">
            <div><img src="assets/img/blog/explication-framework.jpg"
                      alt="article de blog : Pourquoi choisir Symfony pour votre projet web"></div>
            <div>
                <h2 class="blog-unit-title">C'est quoi un framework ?</h2>
                <p class="blog-unit-date">15/11/2024</p>
                <p class="blog-unit-description">Tout savoir sur les frameworks, les avantages, le fonctionnement ...</p>
            </div>
        </a>

        <a class="blog-unit" href="article/les-composants-essentiels-de-symfony" data-aos="zoom-in">
            <div><img src="assets/img/blog/les-composants-essentiels-de-symfony.jpg"
                      alt="article de blog : Pourquoi choisir Symfony pour votre projet web"></div>
            <div>
                <h2 class="blog-unit-title">Les composants essentiels de Symfony</h2>
                <p class="blog-unit-date">06/11/2024</p>
                <p class="blog-unit-description">Découvrez dans cet article, les composants principaux de Symfony et
                    leurs rôles.</p>
            </div>
        </a>

    </div>
</section>


<?php
include('components/footer.php');
?>


</body>
</html>