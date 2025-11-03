<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    include('components/header.php');
    ?>
    <title>SH Chess - Hari Siracuse | Développeur PHP Symfony</title>
    <meta name="description"
          content="Découvrez chess tracker training, un projet développé avec Symfony. J'y ai appliqué mon expertise en développement web freelance pour créer une solution performante et sur mesure.">
</head>
<body>


<?php
include('components/navbar.php');
?>


<section class="project">
    <img class="project-img" src="assets/img/projects/shchess.png" alt="stark motors - projet symfony">
    <h1>Chess Tracker Training</h1>
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
            <!-- <p class="pd-y-5"><a class="project-link" href="https://sh-chess.sh-dev.fr/" target="_blank">sh-chess.sh-dev.fr</a></p> -->
            <p class="pd-y-5"><a class="project-link" href="https://github.com/siracuse/sh-chess" target="_blank">github.com</a></p>
        </div>

    </div>


    <div class="project-description">

        <div data-aos="fade-up">
            <p class="project-description-title">Contexte</p>
            <p class="project-description-content">
            Ce projet a été réalisé dans le cadre d'un <b>hackathon de 3 jours</b>, dont le thème portait sur la création 
            d'une application web. L'objectif était de concevoir, en un temps limité, 
            un produit fonctionnel (MVP), avec une interface claire et minimaliste.
            </p>
        </div>
        <div data-aos="fade-up">
            <p class="project-description-title">Thème</p>
            <p class="project-description-content">
            Chess Tracker Training est une <b>plateforme d'entraînement aux échecs</b>, basée sur la méthode Woodpecker. 
            Les utilisateurs peuvent s'exercer sur des exercices tactiques et améliorer leur reconnaissance 
            des motifs tactiques. Ils peuvent également suivre leur progression dans un espace qui 
            leur est réservé.
            </p>
        </div>
        <div data-aos="fade-up">
            <p class="project-description-title">Stack</p>
            <p class="project-description-content">
            Le projet a été réalisé avec <b>Symfony 7</b>. Pour la gestion de l'échiquier et de la logique, 
            j'ai utilisé 2 bibliothèques JavaScript : <b>chess.js</b> et <b>chessboard.js</b>. Pour les maquettes, 
            j'ai demandé à ChatGPT de les générer, puis je les ai intégrées en <b>CSS natif</b>.
            </p>
        </div>
        <div data-aos="fade-up">
            <p class="project-description-title">Fonctionnalitées</p>
            <div class="project-description-content flex-direction-column">
                <ul class="list-style-type-disc">
                    <li><b>Ajouter ses propres puzzles</b> : créer et gérer une bibliothèque de problèmes tactiques, organisée par thème.</li>
                    <li><b>Suivi des temps et de la progression</b> : visualiser vos performances sur chaque session d'entrainement</li>
                </ul>
            </div>
        </div>
        <div data-aos="fade-up">
            <p class="project-description-title">Screenshots</p>
            <div class="flex-direction-column">
                <figure class="mg-bottom-20">
                    <img src="assets/img/projects/shchess-accueil.jpg" alt="SH Chess - page d'accueil" class="project-description-content">
                    <figcaption>Page "Accueil"</figcaption>
                </figure>

                <figure class="mg-bottom-20">
                    <img src="assets/img/projects/shchess-exercice.jpg" alt="SH Chess - page exercice" class="project-description-content">
                    <figcaption>Page "Exercice"</figcaption>
                </figure>
            </div>
        </div>

    </div>

    <div class="project-next">
        <a href="shevent">
            <p class="project-next-caption">projet suivant</p>
            <p>SH Events</p>
        </a>
    </div>
</section>


<?php
include('components/footer.php');
?>

</body>
</html>