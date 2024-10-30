<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    include('components/header.php');
    ?>

    <title>Blog - Hari Siracuse | Développeur PHP Symfony</title>
    <meta name="description"
          content="Bienvenue sur mon blog ! Je suis Hari Siracuse, développeur web freelance spécialisé en Symfony. Je partage ici mes conseils, tutoriels et réflexions sur le développement web."/>

</head>
<body>

<?php
include('components/navbar.php');
?>

<section class="homepage title-blog">
    <h1>Espace blog</h1>
    <p>Plusieurs articles autour du domaine web</p>
</section>

<section class="blog">
    <div class="container blog-grid">
        <a class="blog-unit" href="article/cest-quoi-symfony">
            <div><img src="assets/img/blog/symfony-minia-1.jpg" alt=""></div>
            <div>
                <h2 class="blog-unit-title">Symfony : C'est quoi Symfony ?</h2>
                <p class="blog-unit-date">30/10/2024</p>
                <p class="blog-unit-description">Symfony, l’un des frameworks PHP open source les plus populaires, est
                    devenu un pilier du développement web ...</p>
            </div>
        </a>

        <a class="blog-unit" href="article/pourquoi-utiliser-symfony-dans-vos-projets">
            <div><img src="assets/img/blog/symfony-minia-2.jpg" alt=""></div>
            <div>
                <h2 class="blog-unit-title">Pourquoi choisir Symfony pour votre projet web ?</h2>
                <p class="blog-unit-date">30/10/2024</p>
                <p class="blog-unit-description">Schoisir le bon framework est une étape cruciale pour garantir la
                    réussite d’un projet.</p>
            </div>
        </a>
    </div>

</section>


<?php
include('components/footer.php');
?>

</body>
</html>