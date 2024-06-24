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
    <img class="project-img" src="img/projects/lbn1.jpg" alt="">
    <h2>La Boule Noire</h2>
    <div class="project-details">
        <div>
            <p class="project-details-title">Rôle</p>
            <p>Intégrateur et Back-end</p>
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
            <a href="https://laboule-noire.fr/" target="_blank">laboule-noire.fr</a>
        </div>
    </div>


    <div class="project-description">
        <div>
            <p class="project-description-title">La Boule Noire</p>
            <p class="project-description-content">
                La Boule noire, située dans le quartier Montmartre à Paris, est une salle de spectacle pouvant
                accueillir 200 personnes. <br><br>Avec son design des années 1970, elle offre une proximité unique entre
                les
                artistes et le public. <br><br>Cette salle est réputée pour sa programmation variée qui inclut autant
                des jeunes
                talents que des stars confirmées dans des genres comme le rock, le metal, les musiques du monde et la
                chanson française.
            </p>
        </div>
        <div>
            <p class="project-description-title">Intégration</p>
            <p class="project-description-content">

                J'ai pris en charge l'intégration d'une maquette Photoshop conçue par Armand Milan, en utilisant HTML,
                CSS, et JavaScript. Aucun framework ni bibliothèque CSS n'a été utilisé pour cette tâche.
            </p>
        </div>
        <div>
            <p class="project-description-title">Back-end</p>
            <p class="project-description-content">
                J'ai également géré le développement du back-end du site, réalisé avec Symfony. L'objectif était de
                permettre au client, de gérer les spectacles et de modifier leur statut en
                fonction de s'ils sont reportés, complets ou terminés.
            </p>
        </div>
        <div>
            <p class="project-description-title">Screenshots</p>
            <div class="flex-direction-column">
                <img src="img/projects/lbn10.jpg" alt="" class="project-description-content mg-bottom-20">
                <img src="img/projects/lbn11.jpg" alt="" class="project-description-content">
            </div>

        </div>
    </div>
</section>


<?php
include ('footer.php');
?>

</body>
</html>