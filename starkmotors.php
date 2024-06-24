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
include('navbar.php');
?>


<section class="project">
    <img class="project-img" src="img/projects/starkmotors.jpg" alt="">
    <h2>Stark Motors</h2>
    <div class="project-details">
        <div>
            <p class="project-details-title">Rôle</p>
            <p>Back-end</p>
        </div>
        <div>
            <p class="project-details-title">TEAM</p>
            <p>Maquette par Armand Milan</p>
        </div>
        <div>
            <p class="project-details-title">Produit</p>
            <p>Site web <br>Symfony 3</p>
        </div>
        <div>
            <p class="project-details-title">URL</p>
            <a href="https://starkmotors.fr/" target="_blank">starkmotors.fr</a>
        </div>
    </div>


    <div class="project-description">
        <div>
            <p class="project-description-title">Stark Motors</p>
            <p class="project-description-content">
                Stark Motors, dirigé par une équipe de passionnés de voitures, offre les voitures
                les plus belles et authentiques. <br><br>
                Leur gamme de services inclut la livraison à domicile, des solutions de
                financement, des conseils, la personnalisation esthétique, le dépôt-vente et la recherche sur mesure.
            </p>
        </div>
        <div>
            <p class="project-description-title">Back-end</p>
            <p class="project-description-content">
                Je me suis occupé du back-end du site, réalisé avec Symfony. L'objectif était de
                permettre au client, de pouvoir gérer l'ajout de nouveau véhicule facilement sur leur site.
            </p>
        </div>
        <div>
            <p class="project-description-title">Screenshots</p>
            <div class="flex-direction-column">
                <img src="img/projects/starkmotors-1.jpg" alt="" class="project-description-content mg-bottom-20">
                <img src="img/projects/starkmotors-2.jpg" alt="" class="project-description-content">
            </div>

        </div>
    </div>
</section>


<?php
include ('footer.php');
?>

</body>
</html>