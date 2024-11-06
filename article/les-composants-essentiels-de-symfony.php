<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    include('../components/header.php');
    ?>
    <title>Les composants essentiels de Symfony - Hari Siracuse</title>
    <meta name="description"
          content="Découvrez dans cet article, les composants principaux de Symfony et leurs rôles.">
</head>
<body>

<nav>
    <ul>
        <li><a href="/">Projets</a></li>
        <li><a href="/blog">Blog</a></li>
        <li><a href="/about">À propos</a></li>
        <li><a href="https://www.linkedin.com/in/harichandra-siracuse/" target="_blank">In</a></li>
    </ul>
</nav>

<section class="project">

    <img class="project-img" src="../assets/img/blog/les-composants-principaux-de-symfony.jpg"
         alt="Symfony : Le framework PHP incontournable en 2024">
    <h1>Les composants essentiels de Symfony</h1>
    <div class="project-details">
        <div>
            <p class="project-details-title">Le 06/11/2024 </p>
        </div>
    </div>

    <div class="project-description">
        <div data-aos="fade-up" class="blog-description-transition mg-bottom-80">
            <p class=" mg-bottom-40m-80d">Le framework symfony repose sur un en ensemble de composants <br> dont je vais
                vous présenter quelques-uns dans cet article. </p>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">HttpFoundation : La base des requêtes et des réponses HTTP</p>
            <p class="project-description-content">
                Dans une application web, il y a constamment des échanges entre le client (généralement un navigateur)
                et un serveur. En php natif, ces échanges sont gérés par des variables globales comme <span
                        class="code-primary">$_GET</span>, <span class="code-primary">$_POST</span>,
                <span class="code-primary">$_SESSION</span>, et les réponses sont générées via les fonctions comme <span
                        class="code-primary">echo</span>,
                <span class="code-primary">header</span>. Cependant, traiter directement ces variables et fonctions peut
                être fastidieux, surtout
                lorsqu’il s’agit de respecter les bonnes pratiques et norme de sécurité. <br><br>
                Pour remédier à ce problème, une approche orientée objet s’impose, et c’est là qu’intervient le
                composant <span class="bold">HttpFoundation</span>. Il va vous fournir toutes les classes nécessaires
                pour gérer les échanges
                entre client et serveur de manière fiable et sécurisée.
            </p>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">Routing : Le guide des URLs vers les actions</p>
            <p class="project-description-content">
                Le rôle principal du composant Routing de Symfony est de gérer la <span
                        class="bold">correspondance</span> entre les <span class="bold">urls entrante</span>
                et les <span class="bold">actions à exécuter</span>. Ce composant offre également d’autres
                fonctionnalités pratiques comme la
                génération d’urls optimisées pour le référencement. <br><br>
                <span class="bold">Exemple</span> : <span class="monokai-pink">/article/les-composants-essentiels-de-symfony</span>
                au lieu de <span class="monokai-pink">index.php?article_id=57</span>. <br><br>
                De plus, vous pouvez définir des contraintes de paramètres et utiliser des expressions régulières pour
                valider les urls avant leur traitement, renforçant ainsi l’intégrité des données et la sécurité de
                l’application.
            </p>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">Security : Un système de sécurité robuste et modulable</p>
            <div class="project-description-content flex-direction-column ">
                <p class="mg-bottom-20">
                    Le composant Security de Symfony fournit de nombreux outils pour <span class="bold">sécuriser</span>
                    votre application web. Ce
                    composant intègre des fonctionnalités d’authentification et d’autorisation, le chiffrement des mots
                    de passe ainsi que la gestion des rôles et permissions pour contrôler l’accès aux différentes
                    parties du site web.
                </p>
                <ul class="list-style-type-disc">
                    <li><span class="bold">Authentification</span> : le composant Security prend en charge plusieurs
                        méthodes d’authentification comme un formulaire de connexion, une API ou encore
                        l’authentification http.
                    </li>
                    <li><span class="bold">Restriction d’accès</span> : Il est possible d’attribuer des rôles pour
                        chaque utilisateur (<span class="monokai-pink">ROLE_ADMIN</span>, <span class="monokai-pink">ROLE_USER</span>,
                        etc), et de restreindre l’accès en fonction des rôles
                        définit. Vous pouvez également limiter certains accès en fonction de l’adresse IP de
                        l’utilisateur.
                    </li>
                    <li><span class="bold">Chiffrement des mots de passe</span> : concernant le chiffrement des mots de
                        passe, le composant Security sélectionne automatiquement le meilleur chiffrement disponible. En
                        2024, il
                        utilise Bcrypt, un algorithme basé sur le chiffrement Blowfish.
                    </li>
                </ul>
                <p>Le composant Security apporte toutes les fonctionnalités qu’une application web a besoin pour
                    développer un espace utilisateur et administrateur sécurisé.</p>
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">Twig : Un moteur de template pour des vues flexibles</p>
            <p class="project-description-content">
                Twig est le <span class="bold">moteur de template</span> par défaut de Symfony et joue un rôle clé dans
                le rendu des vues. Il
                facilite la séparation entre la logique applicative et le code HTML dans les applications web,
                améliorant ainsi la lisibilité et la maintenance des projets web. <br><br>
                Avec Twig, les développeurs disposent d’un large éventail de <span class="bold">filtres</span> (<span
                        class="code-primary">upper</span>, <span class="code-primary">lower</span>) et de <span
                        class="bold">fonctions</span>
                (<span class="code-primary">range</span>, <span class="code-primary">dump</span>) pour manipuler les
                données directement dans le template. <br><br>
                Au niveau de la sécurité, Twig s’assure d’échapper automatiquement les variables affichées. <br><br>
                Enfin, Twig propose des fonctionnalités avancées comme l’héritage de template, permettant de créer des
                template de base réutilisable pour différentes pages d’un site (remplaçant le include de PHP). Cette
                fonctionnalité réduit la duplication de code et simplifie la structure du site internet.
            </p>
        </div>


        <div data-aos="fade-up">
            <p class="project-description-title">Form : La gestion des formulaires simplifiée</p>
            <p class="project-description-content">
                Le composant Form de symfony est un composant permettant de simplifier la <span class="bold">gestion des formulaires</span>.
                Il
                prend en charge la construction du formulaire, l’affichage et le traitement des données de manière
                sécurisé. <br><br>
                Ce composant s’intègre parfaitement avec le composant Validator, rendant la gestion des formulaires plus
                efficace.
            </p>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">Validator : Validation des données d’entrée</p>
            <div class="project-description-content flex-direction-column">
                <p class="mg-bottom-20">Le composant Validator de symfony est un composant permettant de <span
                            class="bold">valider les
                    données</span> saisies dans les
                    formulaires, dont nous avons défini les critères en amont. Il existe de nombreuses contraintes de
                    validation prête à être utilisé comme : </p>
                <ul class="list-style-type-disc">
                    <li><span class="bold">NotBlank</span> : vérifie qu’une valeur n’est pas vide.</li>
                    <li><span class="bold">Email</span> : vérifie que la valeur est une adresse mail valide.</li>
                </ul>
                <p>Ce composant permet également de créer des contraintes personnalisées en plus des contraintes déjà
                    présentes et de personnaliser les messages d’erreur. En l’utilisant avec Form, chaque champ pourra
                    être
                    validé, renforçant la sécurité et la fiabilité des données.</p>
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">Conclusion</p>
            <p class="project-description-content">
                Je vous ai présenté ici quelques-uns des composants les plus connus et utilisés de Symfony, mais il en
                existe beaucoup d’autres, chacun ayant leur rôle et leurs avantages spécifiques. Vous pouvez retrouver
                la liste complète juste ici : <a class="blog-sources-link" href="https://symfony.com/components" target="_blank">Symfony Components</a>.<br><br>
                Maîtriser ces composants est indispensable pour optimiser vos applications et offrir une expérience
                utilisateur de qualité.
            </p>
        </div>
    </div>

    <div class="project-next">
        <a href="cest-quoi-symfony.php">
            <p class="project-next-caption">Article suivant</p>
            <p>C'est quoi Symfony ?</p>
        </a>
    </div>

</section>

<?php
include('../components/footer.php');
?>

</body>
</html>