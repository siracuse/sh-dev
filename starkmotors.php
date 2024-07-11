<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    include('components/header.php');
    ?>
</head>
<body>


<?php
include('components/navbar.php');
?>


<section class="project">
    <img class="project-img" src="assets/img/projects/starkmotors.jpg" alt="">
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
        <div data-aos="fade-up">
            <p class="project-description-title">Stark Motors</p>
            <p class="project-description-content">
                Stark Motors, dirigé par une équipe de passionnés de voitures, offre les voitures
                les plus belles et authentiques. <br><br>
                Leur gamme de services inclut la livraison à domicile, des solutions de
                financement, des conseils, la personnalisation esthétique, le dépôt-vente et la recherche sur mesure.
            </p>
        </div>
        <div data-aos="fade-up">
            <p class="project-description-title">Back-end</p>
            <p class="project-description-content">
                Je me suis occupé du back-end du site, réalisé avec Symfony. L'objectif était de
                permettre au client, de pouvoir gérer l'ajout de nouveau véhicule facilement sur leur site.
            </p>
        </div>
        <div data-aos="fade-up">
            <p class="project-description-title">Screenshots</p>
            <div class="flex-direction-column">
                <figure class="mg-bottom-20">
                    <img src="assets/img/projects/starkmotors-1.jpg" alt="" class="project-description-content">
                    <figcaption>Page "Shop"</figcaption>
                </figure>

                <figure class="mg-bottom-20">
                    <img src="assets/img/projects/starkmotors-2.jpg" alt="" class="project-description-content">
                    <figcaption>Page "Shop"</figcaption>
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