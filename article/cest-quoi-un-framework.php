<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    include('../components/header.php');
    ?>
    <title>C'est quoi un framework ? - Hari Siracuse</title>
    <meta name="description"
          content="Dans cet article, je vous explique ce qu'est un framework, ses avantages, ses inconvénients, son fonctionnement.">
</head>
<body>

<?php
include('../components/navbar.php');
?>

<section class="project">

    <img class="project-img" src="../assets/img/blog/cest-quoi-un-framework.jpg"
         alt="Symfony : Le framework PHP incontournable en 2024">
    <h1>C’est quoi un framework ?</h1>
    <div class="project-details">
        <div>
            <p class="project-details-title">Le 15/11/2024 </p>
        </div>
    </div>

    <div class="project-description">

        <div data-aos="fade-up">
            <p class="project-description-title">Contexte</p>
            <p class="project-description-content">Dans le développement web moderne, répondre aux besoins des clients
                tout en respectant leurs contraintes de temps et de sécurité est devenu crucial. Les projets doivent
                être livrés <span class="bold">rapidement</span>, tout en étant <span class="bold">fonctionnels</span>, et <span class="bold">sécurisés</span> contre les nouvelles menaces.
                C’est dans ce contexte que les <span class="bold">frameworks</span> se révèlent indispensables.
            </p>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">Qu'est-ce qu'un framework ?</p>
            <p class="project-description-content">En développement web, un framework est un <span class="bold">ensemble cohérent de
                bibliothèques et de règles</span> conçu pour structurer et faciliter la création d’applications web. Grâce à un
                framework, les développeurs peuvent se concentrer sur les fonctionnalités spécifiques de leurs projets
                sans avoir à réinventer la roue. On peut voir un framework est comme une boite à outils qui facilite le
                travail des développeurs tout en garantissant une qualité et une cohérence de code.
            </p>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">Comment fonctionne un framework ? <br>Cadre et Structure de code</p>
            <div class="project-description-content flex-direction-column">
                <p class="mg-bottom-20">Nous venons de voir qu'un framework impose une structure de code. Prenons un exemple concret : Symfony. Ce framework impose une façon d’organiser
                    son code source en suivant le <span class="bold">modèle MVC</span>. <br><br>
                    Le MCV est un design partern qui signifie Modèle-Vue-Controller. En suivant ce modèle, le code
                    source se divise en trois parties :
                </p>
                <ul class="list-style-type-disc">
                    <li><span class="bold">Modèle</span> Le modèle gère tout ce qui est relative aux données, comme leur
                        stockage, modification, récupération ou suppression.
                    </li>
                    <li><span class="bold">Vue</span> La vue permet d’afficher l’interface utilisateur. Elle contient
                        essentiellement du code HTML, mais peut inclure du XML, ou du texte brut).
                    </li>
                    <li><span class="bold">Contrôleur</span> Le contrôleur va faire le lien entre la vue et le modèle.
                        Lorsque l’utilisateur effectue une action ou une requête, c’est le contrôleur qui est appelé en
                        premier.
                    </li>
                </ul>
                <p>En plus de cette architecture, Symfony contient également plusieurs composants, dont certains d’entre
                    eux sont expliqués dans <a class="blog-sources-link" href="https://www.sh-dev.fr/article/les-composants-essentiels-de-symfony">cet article</a>.</p>
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">Comment fonctionne un framework ? <br>Librairie vs Framework : Principe d'inversion</p>
            <p class="project-description-content">Il est important de souligner la différence entre une <span class="bold">librairie</span> (ou
                bibliothèque) et un <span class="bold">framework</span>. <br><br>
                Une <span class="bold">librairie</span> fournit un ensemble de code préconçu, comme des fonctions prêtes à l’emploi. Le
                développeur peut les appeler sans avoir à réécrire les mêmes fonctionnalités encore et encore pour ses
                différents projets. Il a un contrôle presque total sur cette bibliothèque, dans le sens où il peut
                l’utiliser où il le veut et quand il veut. <br><br>
                Exemples de librairies : Faker, une librairie PHP utilisée pour générer des données factices. <br><br>
                Un <span class="bold">framework</span>, au contraire, fournit une structure et une architecture prédéfinies. Il suit le principe
                d’<span class="bold">inversion de contrôle</span>. C’est le framework qui appelle le code du développeur et non l’inverse. En tant
                que développeur, nous nous occupons uniquement de la gestion des données que nous y injectons, leurs
                traitements et leurs affichages. Tout le reste, est pris en charge par le framework.
            </p>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">Pourquoi utiliser un <br>framework ?</p>
            <div class="project-description-content flex-direction-column">
                <p class="mg-bottom-20">
                    Les avantages d’utiliser un framework sont nombreux :
                </p>
                <ul class="list-style-type-disc">
                    <li><span class="bold">Gain de temps </span>: Les frameworks sont fournis avec des fonctionnalités
                        prêtes à l’emploi, nous permettant ainsi de nous concentrer que sur les fonctionnalités
                        spécifiques du projet. Utiliser un framework nous évite de devoir redévelopper des
                        fonctionnalités récurrentes comme les systèmes de sécurité ou encore la gestion des
                        utilisateurs.
                    </li>
                    <li><span class="bold">Code organisé et structuré </span>: Les frameworks imposent une structure de
                        code claire pour le code et l’arborescence des fichiers, optimisant ainsi la lisibilité et la
                        maintenabilité. Elle permet aussi de faciliter le travail en équipe, permettant à chaque membre
                        de comprendre le code rapidement, et de travailler sur des fonctionnalités bien précises.
                    </li>
                    <li><span class="bold">Réduction des bugs et sécurité renforcée </span>: Les frameworks sont basés
                        sur des standards élevés en matière de sécurité et sont constamment mis à jour pour corriger les
                        vulnérabilités et les adapter aux nouvelles menaces. <br><br>
                        <span class="bold">Dans le cas de Symfony</span> : il suit les normes PHP Standards Recommendations-1, PSR-2, PSR-4 et
                        PSR-12. Il intègre également des protections contre les vulnérabilités répertoriées dans le
                        OWASP Top 10, telles que l’injection SQL (via ORM Doctrine avec requêtes préparées), les
                        attaques XSS (échappement automatique des sorties dans Twig), etc.
                    </li>
                    <li><span class="bold">Grande communauté et documentation </span>: Les frameworks populaires
                        disposent souvent d’une grande communauté, assez conséquente pour pouvoir avoir du contenu de
                        type formation et tuto sur l’utilisation du framework en lui-même. Ces ressources facilitent
                        l’apprentissage, le débogage et permettent de demander de l’aide directement à la communauté
                        lorsqu’on rencontre des blocages.
                    </li>
                </ul>
            </div>
        </div>


        <div data-aos="fade-up">
            <p class="project-description-title">Les différents types de framework</p>
            <div class="project-description-content flex-direction-column">
                <p class="mg-bottom-20">
                    Il existe plusieurs types de frameworks, chacun destiné à des aspects spécifiques du développement :
                </p>
                <ul class="list-style-type-disc">
                    <li><span class="bold">Frameworks Front-End </span>: Ces frameworks sont utilisés côté client
                        principalement pour le développement d’interface visuelle. Ils facilitent la création de
                        composants réutilisables. Exemples populaires : React et Angular.
                    </li>
                    <li><span class="bold">Frameworks Back-End </span>: Ces frameworks sont utilisés côté serveur pour
                        le développement de la logique applicative, de la gestion des bases de données, les API et la
                        sécurité. Exemples populaires : Symfony et Laravel.
                    </li>
                    <li><span class="bold">Frameworks CSS </span>: Ces frameworks offrent des outils et des styles
                        préconçus permettant de créer des designs cohérents très rapidement. Ils incluent des grilles,
                        des typographies, ou des classes prêtes à l’emploi. Exemples populaires : Bootstrap et Tailwind.
                    </li>
                </ul>
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">Les inconvénients</p>
            <div class="project-description-content flex-direction-column">
                <p class="mg-bottom-20">
                    Voyons maintenant les inconvénients d’un framework :
                </p>
                <ul class="list-style-type-disc">
                    <li><span class="bold">Courbe d’apprentissage </span>: L’apprentissage d’un framework peut prendre
                        beaucoup de temps, surtout pour ceux qui commencent dans le développement web. Les frameworks
                        imposent souvent une structure de code stricte, nécessitant des connaissances approfondies du
                        langage associé. Par exemple, des frameworks comme Symfony ou Laravel demandent d’avoir une
                        bonne compréhension de concepts comme la programmation orientée objet, les namespaces, le
                        système MVC et le langage PHP dans son ensemble.
                    </li>
                    <li><span class="bold">Risques de dépendance </span>: Utiliser un framework rend le projet dépendant
                        de celui-ci. Si le framework est abandonné par ses développeurs ou sa communauté et devient
                        obsolète, il peut être difficile de migrer vers une autre solution.
                    </li>
                </ul>
            </div>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">Conclusion</p>
            <p class="project-description-content">Malgré leurs défauts, les <span class="bold">frameworks</span> restent des alliés précieux pour
                livrer des projets sécurisés et fiables rapidement. On pourrait maintenant se poser la question de comment choisir le
                bon framework ? <br><br>
                Comme nous l'avons vu dans la partie « différents types de frameworks », il en existe plusieurs, chacun
                conçu pour des usages spécifiques. Le choix dépendra principalement du type de projet à réaliser, des
                besoins particuliers (interface utilisateur, gestion serveur, sécurité, etc.) et du langage de
                programmation préféré.

            </p>
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