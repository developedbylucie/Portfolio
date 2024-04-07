<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucie Freihaut - Développeuse Web Fullstack Junior</title>
    <link rel="stylesheet" href="styles.css">
    <!-- Polices -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caudex:ital,wght@0,400;0,700;1,400;1,700&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <!-- police Montserrat -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> -->
    <meta name="description" content="Portfolio de Lucie Freihaut, développeuse web fullstack junior à la recherche d'une alternance pour la rentrée 2024.">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="" />
</head>

<body>
    <?php require('header.php'); ?>

<main role="main">

    <h1>Lucie Freihaut</h1>
    <p class="">Développeuse Web Fullstack Junior</p>
    <p class="">Recherche une alternance de 2 ans - Troyes ou Reims</p>
    <a href="#about">Découvrir plus</a>

    <!-- A propos -->
    <section id="about">
        <h2>A propos de moi</h2>
        <div>
            <img src="img/photo_lucie.jpg" alt="Photo de Lucie Freihaut">
            <p>Etudiante en 1ère année de BUT Métiers du Multimédia et de l'Internet à Troyes, je recherche une alternance pour la rentrée 2024 dans le développement web. 
                Je m'intéresse à tout ce qui m'entoure et j'aime apprendre, découvrir, essayer et partager.</p>
            <div>
                <a href="pdf/CV_Lucie_Freihaut.pdf">CV</a>
                <a href="#contact">Me contacter</a>
            </div>
        </div>
    </section>

    <!-- Mes projets -->
    <section>
        <h2>Mes projets</h2>
        <a href="http://mmi23a08.mmi-troyes.fr/portfolio/">
            <figure class="">
                <img src="img/projets/portfolio1.PNG" alt="Portfolio universitaire">
                <figcaption>
                    <div>
                        <p class="">Dev Front</p>
                        <p class="">Dev Back</p>
                        <p class="">Bootstrap</p>
                    </div>
                    <p>Portfolio</p>
                    <p>Site portfolio réalisé en 3 jours avec bootstrap pour un projet universitaire</p>
                </figcaption>
            </figure>
        </a>

        <a href="http://mmi23a08.sae105.ovh/">
            <figure class="">
                <img src="img/projets/sae105.PNG" alt="Page d'accueil di site ANIMA Film">
                <figcaption>
                    <div>
                        <p class="">Dev Front</p>
                        <p class="">DataBase</p>
                        <p class="">Dev Back</p>
                    </div>
                    <p>ANIMA Film</p>
                    <p>Premier site web statique avec json et datatable</p>
                </figcaption>
            </figure>
        </a>

        <a href="https://mmi23a08.sae203.ovh/">
            <figure class="">
                <img src="img/projets/sae203.PNG" alt="Page d'accueil du sit Plant'soin">
                <figcaption>
                    <div>
                        <p class="">Dev Front</p>
                        <p class="">DataBase</p>
                        <p class="">Dev Back</p>
                    </div>
                    <p>Plant'soin</p>
                    <p>Premier site web responsive et dynamique avec MySQL</p>
                </figcaption>
            </figure>
        </a>

        <a href="http://www.youtube.com/@mmitv3200">
            <figure class="">
                <img src="img/projets/logo-vect.png" alt="Logo de la WebTV">
                <figcaption>
                    <div>
                        <p class="">Esquisses</p>
                        <p class="">Illustrator</p>
                    </div>
                    <p>WebTV</p>
                    <p>Création du logo de la WebTV de l'IUT de Troyes</p>
                </figcaption>
            </figure>
        </a>

        <a href="">
            <figure class="">
                <img src="img/projets/logo_pigathlon.png" alt="Logo et illustrations">
                <figcaption>
                    <div>
                        <p class="">Esquisses</p>
                        <p class="">Illustrator</p>
                    </div>
                    <p>PIGathlon</p>
                    <p>Création d'un logo et d'illustrations pour un serious game, un projet étudiant</p>
                </figcaption>
            </figure>
        </a>

    </section>

    <section>
        <h2>Mes passions</h2>
        <h3>Photographie & nature</h3>
        <div class="body-slider">
            <div class="slider-wrapper">
                <div class="slider">
                    <div id="slide-1" class="slide">
                        <img src="" alt="Photo de ">
                    </div>
                    <div id="slide-2" class="slide">
                        <img src="" alt="Photo de ">
                    </div>
                    <div id="slide-3" class="slide">
                        <img src="" alt="Photo de ">
                    </div>
                    <div id="slide-4" class="slide">
                        <img src="" alt="Photo de ">
                    </div>
                    <div id="slide-5" class="slide">
                        <img src="" alt="Photo de ">
                    </div>
                    <div id="slide-6" class="slide">
                        <img src="" alt="Photo de ">
                    </div>
                </div>

                <!-- <div class="dots">
                    <a href="#slide-1"></a>
                    <a href="#slide-2"></a>
                    <a href="#slide-3"></a>
                    <a href="#slide-4"></a>
                    <a href="#slide-5"></a>
                    <a href="#slide-6"></a>
                </div> -->
            </div>
        </div>


        <h3>Sport</h3>
        <figure>
            <img src="" alt="Photo de ">
            <figcaption>
                <p></p>
            </figcaption>
        </figure>
        <figure>
            <img src="" alt="Photo de ">
            <figcaption>
                <p></p>
            </figcaption>
        </figure>

    </section>

    <section>
        <h2>Me contacter</h2>
        <?php
            if (isset($_SESSION['information'])) {
                echo '<p class="message-submit">'.$_SESSION['information'].'</p>'."\n";
                session_unset();
            }
        ?>
        <div>
            <form action="envoi_mail.php" method="post">
                <label class="" for="name">Nom</label>
                <input class="form-control" type="text" name="name" data-sb-validations="required">
                <div class="invalid-feedback" data-sb-feedback="name:required">Un nom est requis.</div>

                <label class="" for="first-name">Prénom</label>
                <input class="" type="text" name="first-name" required>

                <label class="" for="email">Email</label>
                <input class="" type="email" name="email" id="" required>

                <label class="" for="subject">Sujet</label>
                <input class="" type="text" name="subject" required>

                <label class="" for="message">Message</label>
                <input class="" type="text" name="message" required>

                <input class="" type="submit" value="Envoyer">
            </form>
        </div>

    </section>
    
    <!-- <section class="section">
        <h3>Projets universitaires</h3>           

        <div class="categorie">
            <h4>R112 - Intégration</h4>
            <ul>
                <li><a class="lien" href="/travaux/r112/sequence1/index.html">
                    <p>Séquence 1 : Batman</p>
                    <!- <img class="image" src="images/batman.jpg" alt="logo de Batman" title="Séquence 1 : Batman"> --
                </a></li>

                <li><a class="lien" href="/travaux/r112/bonus1/index.html">
                    <p>Bonus 1 : Golf la fontaine</p>
                    <!- <img class="image" src="images/golf.jpg" alt="terrain de golf" title="Bonus 1 : Golf la fontaine"> --
                </a></li>

                <li><a class="lien" href="/travaux/r112/bonus2/index.html">
                    <p>Bonus 2 : Antique Café</p>
                    <!- <img class="image" src="images/antique-cafe.jpg" alt="photo intérieure d'un café" title="Bonus 2 : Antique Café"> --
                </a></li>

                <li><a class="lien" href="/travaux/r112/sequence2/index.html">
                    <p>Séquence 2 : Yoko's kitchen</p>
                    <!- <img class="image" src="images/yoko.jpg" alt="photo intérieure d'un restaurant" title="Séquence 2 : Yoko's kitchen"> --
                </a></li>

                <li><a class="lien" href="/travaux/r112/sequence3/index.html">
                    <p>Séquence 3 : M.Patate</p>
                    <!- <img class="image" src="images/monsieur_patate.jpg" alt="monsieur patate" title="Séquence 3 : M.Patate"> --
                </a></li>

                <li><a class="lien" href="/travaux/r112/sequence4/index.html">
                    <p>Séquence 4 : John Doe</p>
                    <!- <img class="image" src="images/illustration.png" alt="photo identité" title="Séquence 4 : John Doe"> --
                </a></li>

                <li><a class="lien" href="/travaux/r112/sequence5/index.html">
                    <p>Séquence 5 : Arboretum</p>
                    <!- <img class="image" src="images/arboretum.jpg" alt="illustration d'un arboretum" title="Séquence 5 : Arboretum"> --
                </a></li>

                <li><a class="lien" href="/travaux/r112/sequence6/index.html"> 
                    <p>Séquence 6 : Gamers</p>
                    <!- <img class="image" src="images/deuxieme_generation.png" alt="image tirée de pokémon de la deuxième génération" title="Séquence 6 : Gamers"> --
                </a></li>
            </ul>

        </div>

        <div class="categorie">
            <h4>R212 - Intégration</h4>
            <ul>
                <li><a class="lien" href="/travaux/r212/sequence1/index.html">
                        <p>Séquence 1 : Monopoly</p>
                        <!- <img class="image" src="images/monopoly.jpg" alt="plateau de monopoly" title="Séquence 1 : Monopoly"> --
                    </a></li>
                        
                <li><a class="lien" href="/travaux/r212/sequence2/index.html">
                        <p>Séquence 2 : Skateboard responsive</p>
                        <!- <img class="image" src="images/skateboard.jpg" alt="skateboard" title="Séquence 2 : Skateboard responsive"> --
                    </a></li>
            </ul>
        </div>


        <div class="categorie">
            <h4>Autres projets</h4>
            <ul>
                <li><a class="lien" href="http://mmi23a08.sae105.ovh/">
                        <p>Réalisation d'un premier site web sur une passion</p>
                        <!-- <img class="image" src="" alt="" title=""> --
                    </a></li>
                        
                <li><a class="lien" href="https://mmi23a08.sae203.ovh/">
                        <p>Réalisation d'un site web responsive utilisant une base de données</p>
                        <!-- <img class="image" src="" alt="" title=""> --
                    </a></li>
            </ul>
        </div>

        <span id="projet-perso"></span>
    </section>


    <section class="section">
        <div>
            <h3>Projets personnels</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis iste molestiae esse blanditiis, quia earum laudantium, modi nihil iusto culpa, maiores quis praesentium eius vero ad provident. Sequi, saepe sit.</p>

            <ul>
                <li><a class="lien" href="">
                        <h4>Création d'un logo et d'illustrations pour un serious game</h4>
                        <p>Bénévole pour un projet étudiant</p>
                        <!- <img class="image" src="" alt="" title=""> --
                    </a></li>
                        
                <li><a class="lien" href="">
                        <h4>Création d'un logo personnel</h4>
                        <p>Commentaire</p>
                        <!- <img class="image" src="" alt="" title=""> --
                    </a></li>
            </ul>
            
        </div>

        </div>

        <span id="passions"></span>
    </section>

    <div clas="marge-menu"></div>
    
    <section class="section">
        <div>
            <h3>Passions</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis iste molestiae esse blanditiis, quia earum laudantium, modi nihil iusto culpa, maiores quis praesentium eius vero ad provident. Sequi, saepe sit.</p>
            
            <ul>
                <li><a class="lien" href="">
                        <h4>Création d'un logo et d'illustrations pour un serious game</h4>
                        <p>Bénévole pour un projet étudiant</p>
                        <!- <img class="image" src="" alt="" title=""> --
                    </a></li>
                        
                <li><a class="lien" href="">
                        <h4>Création d'un logo personnel</h4>
                        <p>Commentaire</p>
                        <!- <img class="image" src="" alt="" title=""> --
                    </a></li>
            </ul>
            
            <a href="">Insta</a>
        </div>
        <span id="competences"></span>
    </section>

    <section class="section">
        <div>
            <h3>Compétences</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis iste molestiae esse blanditiis, quia earum laudantium, modi nihil iusto culpa, maiores quis praesentium eius vero ad provident. Sequi, saepe sit.</p>
        </div>
        <span id="contact"></span>
    </section>

    <section class="section section-contact">
        <div>
            <h3>Contact</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis iste molestiae esse blanditiis, quia earum laudantium, modi nihil iusto culpa, maiores quis praesentium eius vero ad provident. Sequi, saepe sit.</p>
            <ul>
                <li><p><a href="#">CV</a></p></li>
                <li><p><a href="#">Linkedin</a></p></li>
            </ul>
        </div>

    </section> -->

</main>
    <?php require ('footer.php'); ?>