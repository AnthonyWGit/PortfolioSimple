<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio developpeur web et web mobile Anthony Wetzstein">
    <meta name="keywords" content="Portfolio, Wetzstein, Anthony, web, mobile, développeur, programmation">
    <link href="stylesheet.css" rel="stylesheet">
    <script async defer src="/altcha.js" type="module"></script>
    <script src="./js.js" defer></script>
    <title>Portfolio A.W</title>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <header class="header" id="top">
                <nav class="l_navbar">
                    <ul class="flex flex-align-items-center flex-justify-content-around flex-grow-full">
                        <li>
                            <div class="flex flex-align-items-center flex-justify-content-center lang-div">
                                Français <img class="lang-flag" src="./img/flag-for-france-svgrepo-com.svg">
                            </div>
                        </li>
                    </ul>
                </nav>
                <nav class="p_navbar">
                    <a href="" class="logo">Logo</a>
                    <input class="menu-btn" type="checkbox" id="menu-btn" />
                    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                    <ul class="menu">
                    <li><a href="#apropos">A propos</a></li>
                    <li><a href="#projects">Projets</a></li>
                    <li><a href="#contact">Contact</a></li>
                    </ul>
                </navbar>
              </header>
              <div class="flash hack-hidden">
                <p>
                </p>
            </div>
            <section class="intro apropos" id="apropos">
                <h1 class="t-center introTitle">Bienvenue</h1>
                <div class="txt-right-img-left flex">
                    <aside>
                        <div class="img-myself">
                            <img class="img-intro" src="./img/placeholder.png">
                        </div>                        
                    </aside>
                    <div class="apropos-text-wrapper">
                        <p class="apropos-text">
                            Profitez de cet espace presque entièrement navigable sans Javascript. Activez le pour voir le message interactif du formulaire.
                        </p>
                        <p class="apropos-text">
                            Curieux de beaucoup de choses, j'ai au cours de mon parcours académique décroché une licence en sciences de la vie à
                            l'Université de Strasbourg.
                        </p>
                        <p class="apropos-text">
                            Après un certains nombres d'obstacles, j'ai changé de parcours professionnel et me suis orienté vers la programmation.
                            Développeur novice, en recherche perpétuelle d'opportunités pour me développer.
                        </p>                              
                    </div>
              
                </div>

                <div class="skills">
                    <h2 class="t-center">
                        Mes compétences
                    </h2>
                    <h3 class="t-center">Front-end</h3>
                    <div class="skill-wrapper">
                        <ul class="banner technical-skills">
                            <li>
                                <div class="iconText">
                                    <img class="icon" src="./img/html-5-svgrepo-com.svg">
                                    <figcaption>HTML</figcaption>
                                </div>
                            </li>
                            <li>
                                <div class="iconText">
                                    <img class="icon" src="./img/css.svg">
                                    <figcaption>CSS</figcaption>
                                </div>
                            </li>
                            <li>
                                <div class="iconText">
                                    <img class="icon" src="./img/js.svg">
                                    <figcaption>Javscript</figcaption>
                                </div>
                            </li>
                        </ul>                        
                    </div>
                    <h3 class="t-center">Back-end</h3>
                    <div class="skill-wrapper">
                        <ul class="banner technical-skills">
                            <li>
                                <div class="iconText">
                                    <img class="icon" src="./img/php.svg">
                                    <figcaption>PHP</figcaption>
                                </div>
                            </li>
                            <li>
                                <div class="iconText">
                                    <img class="icon" src="./img/python-svgrepo-com.svg">
                                    <figcaption>Python</figcaption>
                                </div>
                            </li>
                            <li>
                                <div class="iconText">
                                    <img class="icon" src="./img/mysql-svgrepo-com-white.svg">
                                    <figcaption>MySQL</figcaption>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h3 class="t-center">Soft skills</h3>
                    <p class="italic advice t-center">Sur un ordinateur, survolez à la souris le bandeau pour découvrir mes qualités !</p>
                    <p class="italic advice t-center">Si vous visitez ce site sur mobile, cliquez !</p>
                    <div class="skill-wrapper">
                        <ul class="banner traits">
                            <li>
                                <div class="iconText">
                                    <img class="icon" src="./img/thinking.svg">
                                    <figcaption>Curieux</figcaption>
                                </div>
                            </li>
                            <li>
                                <div class="iconText">
                                    <img class="icon" src="./img/target-and-arrow-svgrepo-com.svg">
                                    <figcaption>Déterminé</figcaption>
                                </div>
                            </li>
                            <li>
                                <div class="iconText">
                                    <img class="icon" src="./img/hourglass-svgrepo-com.svg">
                                    <figcaption>Patient</figcaption>
                                </div>
                            </li>
                            <li>
                                <div class="iconText">
                                    <img class="icon" src="./img/water-svgrepo-com.svg">
                                    <figcaption>Sensible</figcaption>
                                </div>
                            </li>
                            <li>
                                <div class="iconText">
                                    <img class="icon" src="./img/quill-svgrepo-com.svg">
                                    <figcaption>Diplomate</figcaption>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="interests">
                    <h2 class="t-center">Ce qui me passionne</h2>
                    <div class="grid">
                      <div class="cell jv">
                        <img src="./img/controller-svgrepo-com.svg">
                        <figcaption>
                            <h3 class="t-center">Jeux videos</h3>
                            <p class="interest-desc auto-hyphens">
                                Loisir qui m'accompagne depuis longtemps dans ma vie. Le côté technique du milieu est
                                autant fascinant que ce que dernier peut produire. Je suis un grand afficionado des genres RPG (occidentaux ou japons) et STR.
                            </p>
                        </figcaption>
                      </div>
                      <div class="cell cuisine">
                        <img src="./img/cooking-food-kitchen-meal-svgrepo-com.svg">
                        <figcaption>
                            <h3 class="t-center">Cuisine</h3>
                            <p class="interest-desc auto-hyphens">
                                Prendre du temps pour préparer un moment de partage comme un repas est une activité que j'apprécie. De par mon parcours académique le côté nutrition est fascinant, tout autant que la technique et les détails
                                à respecter pour réussir une bonne recette. C'est un loisir pour soi ainsi que pour les autres.
                            </p>
                        </figcaption>
                      </div>
                      <div class="cell biologie">
                        <img src="./img/dna-3-svgrepo-com.svg">
                        <figcaption>
                            <h3 class="t-center">Biologie</h3>
                            <p class="interest-desc auto-hyphens">
                                Mon premier domaine d'étude. C'est un champ d'étude large et varié qui fait l'interface avec d'autres domaines comme la psychologie,
                                les statistiques, la physique, la linguistique...
                            </p>
                        </figcaption>
                      </div>
                      <div class="cell musique">
                        <img src="./img/headset-svgrepo-com.svg">
                        <figcaption>
                            <h3 class="t-center">Musique</h3>
                            <p class="interest-desc auto-hyphens">
                                J'ai été joueur de haubois durant ma jeunesse. Peut-être qu'un jour je reprendrais un instrument à vent.
                                J'ai toujours une partie de mon solfège en tête et je suis toujours impressionné par les grandes compositions.
                            </p>
                        </figcaption>
                      </div>
                    </div>
                </div>
            </section>
            <section class="introCarousel" id="projects">
                <h1>Mes projets</h1>
                <div class="slider">
                    <div class="ctrl-menu">
                        <a href="#slide-1">1</a>
                        <a href="#slide-2">2</a>
                        <a href="#slide-3">3</a>
                        <a href="#slide-4">4</a>
                        <a href="#slide-5">5</a>
                    </div>
                    <div class="slides">
                      <div id="slide-1">
                        <h1>
                            Ad Temporis Finem
                        </h1>
                        <div class="img_arrow">
                            <img src="./img/placeholder.png">
                            <a href="#slide-2" class="nav-arrow-r">></a>
                            <a href="#slide-5" class="nav-arrow-l"><</a>
                        </div>
                        <p>
                            Jeu par navigateur crée avec Symfony 6.3. Incarnez un aventurier dans un monde de fantasy où se croisent des panthéons de plusieurs mythologies de différentes civilisations. Utilisation de JS/Jquery, implementation d'un site adaptatif, 
                            utilisation de MyQSL. Projet de présentation d'examen. 
                        </p>
                      </div>
                      <div id="slide-2">
                        <h1>
                            Portfolio version minijeu JS 
                        </h1>
                        <div class="img_arrow">
                            <img src="./img/jsgame.png">
                            <a href="#slide-3" class="nav-arrow-r">></a>
                            <a href="#slide-1" class="nav-arrow-l"><</a>
                        </div>
                        <p>
                            Projet en cours. Suivi d'un tutorial pour la création d'une version de ce portfolio interactive en version mini jeu.
                            JS pur, avec utilisation d'un algorythme de pathfinding A star.
                        </p>
                      </div>
                      <div id="slide-3">
                        <h1>
                            Intrasessions
                        </h1>
                        <div class="img_arrow">
                            <img src="./img/placeholder.png">
                            <a href="#slide-4" class="nav-arrow-r">></a>
                            <a href="#slide-2" class="nav-arrow-l"><</a>
                        </div>
                        <p>
                            Simulation d'une application intranet d'organisme de formation. Utilisation de JS, mySQL, Symfony 6.3. Utilisation de l'API leafleat pour poser des sessions de formation physique sur une carte
                        </p>
                      </div>
                      <div id="slide-4">
                        <h1>
                            Autres projets Github
                        </h1>
                        <div class="img_arrow">
                            <img src="./img/placeholder.png">
                            <a href="#slide-5" class="nav-arrow-r">></a>
                            <a href="#slide-3" class="nav-arrow-l"><</a>
                        </div>
                        <p>
                            Mes autres projets : exercices, brouillons, etc.
                        </p>
                      </div>
                      <div id="slide-5">
                        <h1>
                            Divers
                        </h1>
                        <div class="img_arrow">
                            <img src="./img/placeholder.png">
                            <a href="#slide-1" class="nav-arrow-r">></a>
                            <a href="#slide-4" class="nav-arrow-l"><</a>
                        </div>
                        <p>
                            Espace en construction. Contiendra des projets indépendants hors du GitHub
                        </p>
                      </div>
                    </div>
                  </div>
            </section>
            <section class="section-contact" id="contact">
                <details class="details">   
                    <summary class="t-center"><span class="sum-border">Exemple de formulaire</span></summary>
                    <h1 class="t-center contact-title">Contact</h1>
                    <p class="t-center italic warning">Le mail crée par le formulaire a été rendu <span class="bold big">inactif</span> jusqu'à l'implémentation d'un captcha solide. Contactez-moi avec les <span class="bold big">liens</span> en fin de section !</p>
                    <p class="t-center italic warning">Testez le tout de même pour faire apparaître un message en haut de l'écran.</p>   
                    <div class="wrapper-form hidden" id="true-form">
                        <form id="contact-form" action="submit.php" method="post">
                            <input type="email" id="email" placeholder="Votre email *" name="email" required>
                            <label for="email"></label>
                            <input type="text" id="subject" placeholder="Sujet *" name="subject" required>
                            <label for="subject"></label>
                            <textarea id="content" name="content" placeholder="Corps du message *" required></textarea> 
                            <label for="content"></label>
                            <button id="send-form">Envoyer</button>
                        </form>
                    </div>
                    <noscript>
                        <div class="wrapper-form">
                            <form id="contact-form" action="" method="post">
                                <input type="email" id="email" placeholder="Votre email *" name="email" required>
                                <label for="email"></label>
                                <input type="text" id="subject" placeholder="Sujet *" name="subject" required>
                                <label for="subject"></label>
                                <textarea id="content" name="content" placeholder="Corps du message *" required></textarea> 
                                <label for="content"></label>
                                <button id="send-form">Envoyer</button>
                            </form>
                        </div>
                    </noscript>
                </details>
                <div class="contact-list">
                    <ul class="col-1 flex flex-column">
                        <li>
                            <div class="icon-text-contact">
                                <img src="./img/mail-send-svgrepo-com.svg">
                                <figcaption><span class="bold contact-icon-text">Mail</span> : <span class="italic">anthony.wetzstein(at)gmail.com</span></figcaption>
                            </div>
                        </li>
                        <li>
                            <div class="icon-text-contact">
                                <img src="./img/mobile-phone-svgrepo-com.svg">
                                <figcaption><span class="bold contact-icon-text">Téléphone</span> : <span class="italic">sur demande</span></figcaption>
                            </div>
                        </li>
                    </ul>
                    <ul class="col-2 flex flex-column">
                        <li>
                            <div class="icon-text-contact">
                                <a href="https://github.com/AnthonyWGit">
                                    <img src="./img/github-142-svgrepo-com.svg">
                                    <figcaption><span class="bold contact-icon-text">Github</span></figcaption>
                                </a>                                
                            </div>
                        </li>
                        <li>
                            <div class="icon-text-contact">
                                <a href="https://www.linkedin.com/in/anthony-wetzstein-a25631173/">
                                    <img src="./img/linkedin-svgrepo-com.svg">
                                    <figcaption><span class="bold contact-icon-text">LinkedIn</span></figcaption>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <footer id="footer">
            <div class="text-white large footer-text">
                <p>
                    Anthony Wetzstein tous droits réservés
                </p>
                <p>
                    Vectors and icons by <a class="svg-repo" href="https://www.svgrepo.com" target="_blank">SVG Repo</a>
                </p>
            </div>
        </footer>
    </div>
    <div class="container-top">
        <a href="#" class="top"></a>
      </div>
</body>
</html>


