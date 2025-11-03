<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    include('../components/header.php');
    ?>
    <title>C'est quoi l'accessibilité web ? - Hari Siracuse</title>
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
    <h1>L'accessibilité web</h1>
    <div class="project-details">
        <div>
            <p class="project-details-title">Le 11/2025</p>
        </div>
    </div>

    <div class="project-description">
        <div data-aos="fade-up">
            <p class="project-description-title">C'est quoi l'accessibilité web ?</p>
            <p class="project-description-content">
                L’<span class="bold">accessibilité web</span> désigne l’ensemble des pratiques et des standards permettant de rendre les contenus
                et services en ligne accessibles à tous, y compris aux personnes en situation de handicap. Cela inclut
                des limitations physiques, visuelles, auditives, cognitives ou encore technologiques. En d'autres
                termes, un site web accessible est conçu pour être utilisable par un maximum de personnes,
                indépendamment de leurs capacités ou des outils qu’elles utilisent pour naviguer (par exemple, des
                lecteurs d’écran ou des claviers alternatifs). <br><br>
                L’accessibilité repose sur des normes telles que les <span class="bold">WCAG</span> (Web Content Accessibility Guidelines), qui
                fournissent des directives pour améliorer l’expérience utilisateur. Cela passe par des actions
                concrètes, comme proposer des textes alternatifs pour les images, assurer un bon contraste des couleurs
                ou encore structurer les pages avec des balises HTML sémantiques adaptées.

            </p>
        </div>

        <div data-aos="fade-up" class="blog-description-transition mg-bottom-80">
            <p class=" mg-bottom-20 key-figure">WCAG</p>
            <p class=" mg-bottom-40m-80d">Web Content Accessibility Guidelines</p>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">Pourquoi est-il important de faire attention à l’accessibilité dans un
                projet web ?</p>
            <div class="project-description-content flex-direction-column ">
                <ul class="list-style-type-disc">
                    <li><span class="bold">Inclure tous les utilisateurs</span> : Plus de 16 % de la population mondiale
                        vit avec un handicap
                        <a class="blog-sources-link"
                           href="https://www.who.int/fr/news-room/fact-sheets/detail/disability-and-health">(Source :
                            OMS - Handicap)</a>.
                        Ne pas prendre en compte l’accessibilité revient à exclure une partie importante de vos
                        utilisateurs potentiels. Cela limite votre audience et nuit à votre impact global.
                    </li>
                    <li><span class="bold">Améliorer l’expérience utilisateur</span> : Les bonnes pratiques en matière
                        d’accessibilité, comme une navigation claire et des textes lisibles, bénéficient à tous les
                        utilisateurs, pas seulement à ceux en situation de handicap. Elles rendent votre site plus
                        intuitif et agréable à utiliser.
                    </li>
                    <li><span class="bold">Respecter les obligations légales</span> : Dans de nombreux pays, la
                        législation impose des standards d’accessibilité pour les sites web publics et, dans certains
                        cas, privés. Ne pas s’y conformer peut entraîner des sanctions ou nuire à la réputation de votre
                        entreprise.
                    </li>
                    <li><span class="bold">Optimiser le référencement naturel (SEO)</span> : Les pratiques
                        d’accessibilité, telles que l’utilisation de balises descriptives ou de textes alternatifs,
                        contribuent aussi à une meilleure indexation par les moteurs de recherche. En rendant votre site
                        accessible, vous améliorez également votre visibilité en ligne.
                    </li>
                    <li><span class="bold">Renforcer l’image de marque</span> : Un site web accessible témoigne de
                        l’engagement de votre entreprise envers la diversité et l’inclusion. Cela montre que vous êtes
                        attentif aux besoins de vos utilisateurs et soucieux de créer un environnement numérique
                        équitable.
                    </li>
                </ul>
            </div>
        </div>

        <div data-aos="fade-up" class="blog-description-transition mg-bottom-80">
            <p class=" mg-bottom-20 key-figure">Intégrer l’accessibilité dès le début d’un projet</p>
            <p class=" mg-bottom-40m-80d">favorise une meilleure expérience utilisateur, accroît votre audience et renforce la
                crédibilité de votre site.</p>
        </div>

        <div data-aos="fade-up">
            <p class="project-description-title">6 Astuces pour améliorer l'accessibilité dans un site web</p>
            <div class="project-description-content flex-direction-column ">
                <p class="mg-bottom-20">
                    Voici quelques astuces concrètes pour rendre votre site web plus inclusif et adapté à tous les
                    utilisateurs :
                </p>
                <ul class="list-style-type-disc">
                    <li><span class="bold">Utiliser des couleurs avec un bon contraste</span> : Assurez-vous que le
                        texte est bien lisible sur son arrière-plan. Cela permet aux personnes malvoyantes ou
                        daltoniennes de distinguer facilement les éléments de la page. Pour cela, respectez les ratios
                        de contraste recommandés par les normes WCAG. Vous pouvez utiliser l’outil
                        <a class="blog-sources-link" href="https://webaim.org/resources/contrastchecker/">Contrast
                            Checker</a>
                        pour vous assurer du bon ratio de contraste de vos couleurs. <br><br>
                    </li>
                    <li><span class="bold">Fournir des équivalents textuels pour les images</span> : Ajoutez des
                        descriptions pertinentes dans l’attribut <span class="code-primary">alt</span> pour toutes vos images. Cela aide les utilisateurs
                        malvoyants à comprendre le contenu visuel grâce à un lecteur d’écran. Si une image est purement
                        décorative, l’attribut alt peut être laissé vide. <br><br>
                        <pre><code>&lt;<span class="red">img</span> <span class="blue">src</span><span
                                        class="yellow">="chat.jpg"</span> <span class="blue">alt</span><span
                                        class="yellow">="Un chat noir assis sur une chaise en bois"</span>&gt;</code></pre>
                        <br>
                        Si une image est purement décorative, laissez l’attribut alt vide :
                        <pre><code>&lt;<span class="red">img</span> <span class="blue">src</span><span
                                        class="yellow">="decoration.jpg"</span> <span class="blue">alt</span><span
                                        class="yellow">=""</span> &gt;</code></pre>
                        <br>
                    </li>
                    <li><span class="bold">Définir la langue par défaut</span> : Indiquez la langue principale de votre
                        contenu avec l’attribut lang dans la balise
                        <span class="code-primary">&lt;html&gt;</span>. Cela permet aux lecteurs d’écran d’adapter leur prononciation et d’offrir une
                        meilleure
                        expérience utilisateur aux personnes non-voyantes. <br><br>
                        <pre><code>&lt;<span class="red">html</span> <span class="blue">lang</span><span
                                        class="yellow">="fr"</span>&gt;</code></pre>
                        <br>
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