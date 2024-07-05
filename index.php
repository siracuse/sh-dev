<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harichandra SIRACUSE - Portfolio Développeur web back-end</title>
    <meta name="description"
          content="Développeur back-end PHP Symfony à Lyon. Retrouver sur mon site web mon portfolio, mes expériences et mon parcours scolaire de développeur back-end php"/>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href="img/SH.ico" rel="shortcut icon" type="image/x-icon"/>
</head>
<body>


<?php
include ('navbar.php');
?>


<section class="homepage">
    <h1>Harichandra SIRACUSE - Développeur Symfony</h1>
    <p>Des projets Symfony qui parlent d'eux-mêmes - Avec plus de quatre ans d'expérience et une multitude de projets à mon
        actif, explorez mon portfolio afin de découvrir mes diverses réalisations.</p>
</section>


<section class="projects">
    <div class="projects-unit">
        <a href="shevent.php">
            <img src="img/shevent.jpg" alt="">
        </a>
        <div class="overlay">
            <p>SH Event</p>
        </div>
    </div>

    <div class="projects-unit">
        <a href="laboulenoire.php">
            <img src="img/laboulenoire.jpg" alt="">
        </a>
        <div class="overlay">
            <p>La Boule Noire</p>
        </div>
    </div>

    <div class="projects-unit">
        <a href="starkmotors.php">
            <img src="img/starkmotors.jpg" alt="">
        </a>
        <div class="overlay">
            <p>Stark Motors</p>
        </div>
    </div>
</section>

<?php
include ('footer.php');
?>


</body>
</html>