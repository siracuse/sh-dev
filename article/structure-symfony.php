<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    include('../components/header.php');
    ?>
    <title>Comprendre la structure d'un projet symfony - Hari Siracuse</title>
    <meta name="description"
          content="Dans cet article, je vous explique ce qu'est l'accessibilité web, de son importance et quelques astuces pour l'améliorer.">
</head>
<body>

<?php
include('../components/navbar.php');
?>

<section class="project">

    <img class="project-img" src="../assets/img/blog/accessibilite-web.jpg"
         alt="Symfony : Le framework PHP incontournable en 2024">
    <h1>Comprendre la structure d'un projet symfony</h1>
    <div class="project-details">
        <div>
            <p class="project-details-title">Le 11/2025</p>
        </div>
    </div>

    <div class="project-description">
        <div data-aos="fade-up">
            <p class="project-description-title">Introduction</p>
            <div class="project-description-content flex-direction-column ">
                <p class="mg-bottom-20">
                    Dans cet article, nous allons découvrir la structure d'un projet Symfony et expliquer le role des principaux dossiers et fichier. Il s'agit d'une première approche, destinée aux débutants : nous ne rentrerons pas dans les détails techniques, mais l'objectif est de se repérer facilement dans l'architecture d'un projet Symfony 7.
                </p>
                <figure class="mg-bottom-20 text-align-center" data-aos="fade-up">
                    <img src="../assets/img/blog/structure-symfony-arborescence" alt="La boule noire - spectacle" class="project-image-center">
                    <figcaption>Arborescence d'un projet symfony</figcaption>
                </figure>    
            </div>

        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">assets/</p>
            <div class="project-description-content flex-direction-column ">
                <ul class="list-style-type-disc">
                    <p class="mg-bottom-20">
                        Le dossier <span class="monokai-pink">assets/</span> a pour rôle de gérer les ressources front-end comme les fichiers CSS et le javascript. AssetMapper est un composant de Symfony qui facilite la gestion de ces fichiers. En production, on exécute la commande <span class="code-primary">bin/console assets:install</span>. AssetMapper va alors copier les fichiers qui étaient présents dans <span class="monokai-pink">assets/</span> dans le dossier <span class="monokai-pink">public/assets/</span>, pour qu'ils soient accessibles par le navigateur.
                    </p>    
                </ul>
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">bin/</p>
            <div class="project-description-content flex-direction-column ">
                <ul class="list-style-type-disc">
                    <p class="mg-bottom-20">
                        Le dossier <span class="monokai-pink">bin/</span> va contenir des scripts exécutables nécessaires pour effectuer des opérations dans notre projet.
                    </p>
                    <p class="mg-bottom-20">
                        À l'intérieur, on retrouve le fichier <span class="monokai-pink">console</span>. Ce script nous donne accès à toutes les commandes internes et personnalisées de symfony. Avec elle nous pouvons générer des controleurs, des entités, des formulaires, bref, tout un tas de commande qui nous seront utiles pour notre projet.
                    </p>  
                </ul>
            </div>
        </div>


        <div data-aos="fade-up">
            <p class="project-description-title">config/</p>
            <div class="project-description-content flex-direction-column ">
                <p class="mg-bottom-20">
                    Le dossier <span class="monokai-pink">config/</span> est un dossier contenant tout la configuration de notre projet symfony : composants, services, bundles, etc.
                </p>    
                <ul class="list-style-type-disc">
                    <li><span class="bold">le fichier bundles.php</span> : Ce fichier déclare   tous les bundles activés de notre application.
                    </li>
                    <li><span class="bold">le dossier packages/</span> : On retrouve la     configuration de chaque bundles déclarer dans le bundles.php
                    </li>  
                </ul>
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">migrations/</p>
            <div class="project-description-content flex-direction-column ">
                <p class="mg-bottom-20">
                    Le dossier <span class="monokai-pink">migrations/</span> est un dossier relative à Doctrine. C'est un dossier qui va contenir tous les fichiers de migration Doctrine. En gros, ces fichiers vont d'écrire les modifications successives (en SQL) que nous apportons à la base de données. On peut considéré ces fichiers, et donc ce dossier comme une mémoire de toutes les évolutions de notre base de données.
                </p>    
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">public/</p>
            <div class="project-description-content flex-direction-column ">
                <p class="mg-bottom-20">
                    Le dossier <span class="monokai-pink">public/</span> est le dossier racine de notre site web. Toutes les requêtes passent par ce dossier.
                    C'est le seul dossier accessible aux utilisateurs. Tout ce qui se trouve en dehors de ce dossier n'est pas directement accessible par HTTP.
                </p>    
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">src/</p>
            <div class="project-description-content flex-direction-column ">
                <p class="mg-bottom-20">
                    Le dossier <span class="monokai-pink">src/</span> est l'un des dossiers où nous allons le plus travailler dans notre projet. Il contient toutes la logique de notre application. On y retrouve les controllers, les entités, les formulaires, etc.
                </p>    
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">templates/</p>
            <div class="project-description-content flex-direction-column ">
                <p class="mg-bottom-20">
                    Le dossier <span class="monokai-pink">templates/</span> va contenir toutes les vues de notre application, principalement des fichiers twig.
                </p>    
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">tests/</p>
            <div class="project-description-content flex-direction-column ">
                <p class="mg-bottom-20">
                    Le dossier <span class="monokai-pink">test/</span> va contenir l'ensemble des tests automatisés de notre application. Il existe plusieurs type de test. Nous avons les tests unitaires pour tester une classe isolée. Ensuite les tests fonctionnels pour tester un flux complet, une route, un controller. Et enfin les tests d'intégration pour tester un service avec ses dépendances réelles.
                </p>    
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">translations/</p>
            <div class="project-description-content flex-direction-column ">
                <p class="mg-bottom-20">
                    Le dossier <span class="monokai-pink">translations/</span> va contenir toutes les traductions de notre application, si nous voulons un site multilingue.
                </p>    
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">var/</p>
            <div class="project-description-content flex-direction-column ">
                <p class="mg-bottom-20">
                    Le dossier <span class="monokai-pink">var/</span> va contenir toutes les données générées automatiquement par symfony pendant son fonctionnement. Il s'agira principalement de fichier log et du cache. Les logs sont des fichiers qui enregistre tout ce qui se passe dans notre application. Il peut être utile pour débugger notre application. Le cache quant à lui, va nous permettre d'accélérer Symfony. En effet, le cache est un endroit où l'on va stocker des résultats déjà calculés pour éviter le refaire encore et encore. On pourrait dire que le cache est comme une mémoire rapide, qui garde temporairement des données pour accélérer les choses.
                </p>    
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">vendor/</p>
            <div class="project-description-content flex-direction-column ">
                <p class="mg-bottom-20">
                    Le dossier <span class="monokai-pink">vendor/</span> contient toutes les dépendances externes à Symfony. Ce sont toutes les bibliothèques et packages installés par Composer.
                </p>    
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">.env/</p>
            <div class="project-description-content flex-direction-column ">
                <p class="mg-bottom-20">
                    Le fichier <span class="monokai-pink">.env</span> contient toutes les variables d'environnement du projet. C'est un fichier de configuration, qui va nous permettre de définir la connexion à la base de données, la connexion au mailer, des clés secrètes, etc.
                </p>    
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">composer.json et composer.lock</p>
            <div class="project-description-content flex-direction-column ">
                <p class="mg-bottom-20">
                    Le <span class="monokai-pink">composer.json</span> est le fichier de configuration principale de composer. Elle liste toutes les bibliothèques dont symfony a besoin pour notre application.
                    Le <span class="monokai-pink">composer.lock</span> quant à lui, va définir les versions exactes de ces bibliothèques. 
                </p>    
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">compose.yaml</p>
            <div class="project-description-content flex-direction-column ">
                <p class="mg-bottom-20">
                    Le fichier <span class="monokai-pink">compose.yaml</span>, est un fichier de configuration destiner à définir les conteneurs Docker nécessaire pour notre environnement de développement symfony.
                </p>    
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">blabla</p>
            <div class="project-description-content flex-direction-column ">
                <p class="mg-bottom-20">
                    Le dossier config est un dossier contenant tout la configuration de notre projet symfony : composnats, services, bundles, etc.
                </p>
                <ul class="list-style-type-disc">
                    <li><span class="bold">le fichier bundles.php</span> : Ce fichier déclare tous les bundles activés de ton application.
                    </li>
                    <li><span class="bold">le dossier packages/</span> : On retrouve la configuration de chaque bundles déclarer dans le bundles.php
                    </li>
                    <li><span class="bold">le fichier services.yaml</span> : 
                    </li>
                    <li><span class="bold">Utiliser un HTML sémantique</span> :
                        Structurez vos pages en utilisant les balises HTML adaptées, comme
                        <span class="code-primary">&lt;header&gt;</span>, <span class="code-primary">&lt;main&gt;</span>, <span class="code-primary">&lt;nav&gt;</span>, etc.
                        Cela facilite la navigation pour tous les utilisateurs, y compris
                        ceux qui se servent de technologies d’assistance pour parcourir le contenu.
                        <br><br>
                        <pre><code>&lt;<span class="red">article</span>&gt;
    &lt;<span class="red">h1</span>&gt;Accessibilité web&lt;/<span class="red">h1</span>&gt;
    &lt;<span class="red">p</span>&gt;Rendre le web accessible à tous !&lt;/<span class="red">p</span>&gt;
&lt;/<span class="red">article</span>&gt;</code></pre>
                        <br>
                    </li>
                    <li><span class="bold">Adopter un design responsive</span> : Adoptez un design responsive pour
                        ajuster l’affichage aux différentes tailles d’écran et niveaux d’agrandissement, comme sur les
                        appareils mobiles et tablettes. Privilégiez l’utilisation d’unités relatives, comme les <span class="code-primary">em</span> ou
                        <span class="code-primary">rem</span>, pour permettre une mise à l’échelle fluide du texte et des éléments, en fonction des
                        préférences des utilisateurs ou de la taille de l’écran. <br><br>
                        <pre><code><span class="red">h1</span> {font-size: <span class="blue">1.5em</span>;}

<span class="red">@media</span> <span class="blue">all</span> <span
        class="red">and</span> (min-width: <span
        class="purple">768</span><span class="blue">px</span>) {
    <span class="red">h1</span> {font-size: <span class="blue">2em</span>;}
}</code></pre>
                        <br>
                    </li>
                    <li><span class="bold">Associer les labels et les champs de formulaire avec l’attribut for</span>
                        : Pour les formulaires, liez les champs de saisie à leurs labels en utilisant l’attribut <span class="code-primary">for</span> et
                        l’identifiant correspondant <span class="code-primary">id</span>. Cela permet aux utilisateurs de comprendre facilement à quoi
                        sert chaque champ, notamment lorsqu’ils utilisent un lecteur d’écran.
                        <br><br>
                        <pre><code>&lt;<span class="red">label</span> <span class="blue">for</span><span
                                        class="yellow">="email"</span>&gt;Adresse e-mail :&lt;/<span class="red">label</span>&gt;
&lt;<span class="red">input</span> <span class="blue">type</span><span
                                        class="yellow">="email"</span> <span class="blue">name</span><span
                                        class="yellow">="email"</span> <span class="blue">id</span><span class="yellow">="email"</span> <span class="blue">required</span> &gt;
</code></pre>
                        <br>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="project-next">
        <a href="pourquoi-utiliser-symfony-dans-vos-projets">
            <p class="project-next-caption">Article suivant</p>
            <p>Pourquoi utiliser symfony dans vos projets</p>
        </a>
    </div>

</section>

<?php
include('../components/footer.php');
?>

</body>
</html>