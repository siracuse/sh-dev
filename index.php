<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    include('components/header.php');
    ?>

    <title>Hari Siracuse - Développeur PHP Symfony Freelance</title>
    <meta name="description" content="Portfolio en ligne de Hari Siracuse, développeur web spécialisé en Symfony. Découvrez mon parcours, mes compétences et mes projets en tant que freelance." />

</head>
<body>


<?php
include ('components/navbar.php');
?>


<section class="homepage">
    <h1>Hari SIRACUSE - Développeur Symfony</h1>
    <p>Des projets Symfony qui parlent d'eux-mêmes - Avec plus de quatre ans d'expérience et une multitude de projets à mon
        actif, explorez mon portfolio afin de découvrir mes diverses réalisations.</p>
</section>


<section class="projects">
    <div class="projects-unit" data-aos="zoom-in">
        <a href="shevent">
            <img src="assets/img/shevent.jpg" alt="miniature du projet shevent">
        </a>
        <div class="overlay">
            <p>SH Event</p>
        </div>
    </div>

    <div class="projects-unit" data-aos="zoom-in">
        <a href="laboulenoire">
            <img src="assets/img/laboulenoire.jpg" alt="miniature du projet la boule noire">
        </a>
        <div class="overlay">
            <p>La Boule Noire</p>
        </div>
    </div>

    <div class="projects-unit" data-aos="zoom-in">
        <a href="starkmotors">
            <img src="assets/img/starkmotors.jpg" alt="miniature du projet stark motors">
        </a>
        <div class="overlay">
            <p>Stark Motors</p>
        </div>
    </div>
</section>

<?php
include ('components/footer.php');
?>


</body>
</html>