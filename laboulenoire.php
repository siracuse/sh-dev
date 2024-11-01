<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    include('components/header.php');
    ?>
    <title>La Boule Noire - Hari Siracuse | Développeur PHP Symfony</title>
    <meta name="description"
          content="Présentation de La Boule Noire, un projet que j'ai développé avec Symfony. Découvrez les aspects techniques et les solutions que j'ai mises en place en tant que développeur web freelance.">
</head>
<body>


<?php
include('components/navbar.php');
?>


<section class="project">
    <img class="project-img" src="assets/img/projects/laboulenoire.avif" alt="La boule noire - projet symfony">
    <h1>La Boule Noire</h1>
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
            <a class="project-link" href="https://laboule-noire.fr/" target="_blank">laboule-noire.fr</a>
        </div>
    </div>


    <div class="project-description">
        <div data-aos="fade-up">
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
        <div data-aos="fade-up">
            <p class="project-description-title">Intégration</p>
            <p class="project-description-content">
                J'ai pris en charge l'intégration d'une maquette Photoshop conçue par Armand Milan, en utilisant HTML,
                CSS, et JavaScript. Aucun framework ni bibliothèque CSS n'a été utilisé pour cette tâche.
            </p>
        </div>
        <div data-aos="fade-up">
            <p class="project-description-title">Back-end</p>
            <p class="project-description-content">
                J'ai également géré le développement du back-end du site, réalisé avec Symfony. L'objectif était de
                permettre au client, de gérer les spectacles et de modifier leur statut en
                fonction de s'ils sont reportés, complets ou terminés.
            </p>
        </div>
        <div data-aos="fade-up">
            <p class="project-description-title">Screenshots</p>
            <div class="flex-direction-column">
                <figure class="mg-bottom-20">
                    <img src="assets/img/projects/laboulenoire-spectacle.avif" alt="La boule noire - spectacle" class="project-description-content">
                    <figcaption>Page de présentation d'un spectacle</figcaption>
                </figure>

                <figure class="mg-bottom-20">
                    <img src="assets/img/projects/laboulenoire-infos-pratiques.avif" alt="La boule noire - Infos pratiques" class="project-description-content">
                    <figcaption>Page "Infos pratiques"</figcaption>
                </figure>
            </div>

        </div>
    </div>

    <div class="project-next">
        <a href="starkmotors">
            <p class="project-next-caption">projet suivant</p>
            <p>Stark Motors</p>
        </a>
    </div>
</section>


<?php
include('components/footer.php');
?>

</body>
</html>