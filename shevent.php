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
    <img class="project-img" src="img/projects/shevent.jpg" alt="">
    <h2>SH Event</h2>
    <div class="project-details">
        <div>
            <p class="project-details-title">Rôle</p>
            <p>Développement du site de A à Z</p>
        </div>
        <div>
            <p class="project-details-title">Produit</p>
            <p>Projet personnel</p>
            <p>Site web Symfony 7</p>
        </div>
        <div>
            <p class="project-details-title">URL</p>
            <a href="https://github.com/siracuse/sh-event" target="_blank">github</a>
        </div>
    </div>


    <div class="project-description">
        <div>
            <p class="project-description-title">Contexte</p>
            <div class="project-description-content flex-direction-column">
                J'ai demandé à ChatGPT de simuler une demande client :
                <br><br>
                " En tant que client gérant une entreprise qui organise fréquemment des événements professionnels, j'ai
                identifié le besoin d'un système de gestion d'événements en ligne pour améliorer l'organisation et
                l'expérience des participants. "

                <!--                <br><br><br>-->
                <p class="mg-y-20"><b>Voici quelques éléments clé de mon besoin :</b></p>
                <!--                <br>-->
                <ul class="list-style-type-disc">
                    <li><b>Gestion des événements</b> : J'ai besoin d'une plateforme qui me permette de créer et de
                        gérer différents types d'événements, en fournissant des informations détaillées telles que la
                        date, l'heure, le lieu, la description, les intervenants, etc.
                    </li>
                    <li><b>Inscription en ligne</b> : Les participants doivent pouvoir s'inscrire en ligne aux
                        événements via la plateforme. Cela inclut la possibilité de collecter des informations sur les
                        participants et de générer des confirmations d'inscription automatiques.
                    </li>
                </ul>

            </div>
        </div>
        <div>
            <p class="project-description-title">L'objectif</p>
            <p class="project-description-content">
                L'objectif de ce projet personnel était de m'entraîner sur la nouvelle version de Symfony 7, mais aussi
                sur l'ensemble des étapes de réalisation d'un site web : le maquettage (wireframe
                sur papier), l'intégration et du développement du back-end.
            </p>
        </div>
        <div>
            <p class="project-description-title">Front-end</p>
            <p class="project-description-content">
                Pour la structure et le design du site, je me suis inspiré du site meetup. Les langages utilisés sont
                l'HTML et le CSS native.
            </p>
        </div>

        <div>
            <p class="project-description-title">Back-end</p>
            <div class="project-description-content flex-direction-column">
                <p>Les fonctionnalitées du site sont :</p><br><br>
                <p class="mg-y-20"><b>Pour les utilisateurs</b> :</p>
                <ul class="list-style-type-disc">
                    <li>Possibilité de s'inscrire et de se connecter</li>
                    <li>Possibilité de participer à un événement</li>
                    <li>Possibilité de déposer une annonce (avec validation au préalable par l'administrateur)</li>
                    <li>Une page utilisateur où il peut consulter l'ensemble des événements auxquels il participe</li>
                </ul>
                <p class="mg-y-20"><b>Pour le client (administrateur)</b> :</p>
                <ul class="list-style-type-disc">
                    <li>Possibilité de gérer les événements (CRUD)</li>
                    <li>Possibilité de vérifier les événements créés par les utilisateurs avant publication</li>
                    <li>Possibilité de gérer les utilisateurs</li>
                </ul>
                <p class="mg-y-20"><b>MCD du projet :</b></p>
                <img src="img/projects/shevent-mcd.png" alt="" class="project-description-content">
            </div>
        </div>
        <div>
            <p class="project-description-title">Screenshots</p>
            <div class="flex-direction-column">
                <img src="img/projects/shevent-2.jpg" alt="" class="project-description-content mg-bottom-20">
                <img src="img/projects/shevent-1.jpg" alt="" class="project-description-content">
            </div>
        </div>
    </div>
</section>


<?php
include ('footer.php');
?>

</body>
</html>