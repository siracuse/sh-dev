<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    include('components/header.php');
    ?>
    <title>Blog - Hari Siracuse | Développeur PHP Symfony</title>
    <meta name="description"
          content="Bienvenue sur mon blog ! Je suis Hari Siracuse, développeur web freelance spécialisé en Symfony. Je partage ici mes conseils, tutoriels et réflexions sur le développement web.">
</head>
<body>

<?php
include('components/navbar.php');
?>

<section class="homepage title-blog">
    <h1>Espace blog</h1>
    <p>
        Bienvenue sur mon blog dédié au domaine du développement web. Retrouvez-y des articles enrichissants et des
        conseils pratiques pour progresser sur Symfony.
    </p>
</section>

<section class="blog">
    <div class="container blog-grid">

        <a class="blog-unit" href="article/les-composants-essentiels-de-symfony">
            <div><img src="assets/img/blog/les-composants-essentiels-de-symfony.jpg"
                      alt="article de blog : Pourquoi choisir Symfony pour votre projet web"></div>
            <div>
                <h2 class="blog-unit-title">Les composants essentiels de Symfony</h2>
                <p class="blog-unit-date">06/11/2024</p>
                <p class="blog-unit-description">Découvrez dans cet article, les composants principaux de Symfony et
                    leurs rôles.</p>
            </div>
        </a>

        <a class="blog-unit" href="article/cest-quoi-symfony">
            <div><img src="assets/img/blog/cest-quoi-symfony.jpg" alt="article de blog : C'est quoi Symfony ?"></div>
            <div>
                <h2 class="blog-unit-title">Symfony : C'est quoi Symfony ?</h2>
                <p class="blog-unit-date">30/10/2024</p>
                <p class="blog-unit-description">Dans cet article, je vous explique ce qu'est Symfony, son histoire et
                    la richesse de sa communauté.</p>
            </div>
        </a>

        <a class="blog-unit" href="article/pourquoi-utiliser-symfony-dans-vos-projets">
            <div><img src="assets/img/blog/pourquoi-utiliser-symfony-dans-vos-projets.jpg"
                      alt="article de blog : Pourquoi choisir Symfony pour votre projet web"></div>
            <div>
                <h2 class="blog-unit-title">Pourquoi choisir Symfony pour votre projet web ?</h2>
                <p class="blog-unit-date">30/10/2024</p>
                <p class="blog-unit-description">Découvrez pourquoi Symfony est un choix judicieux pour vos projets web.
                    Dans cet article, j'explique les avantages de ce framework robuste et flexible.</p>
            </div>
        </a>

    </div>
</section>

<?php
include('components/footer.php');
?>

</body>
</html>