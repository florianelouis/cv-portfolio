<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header("Content-type: text/html; charset=utf-8");
if (isset($_GET["nom"]) && isset($_GET["email"]) && isset($_GET["message"])) {
    if (($_GET["nom"] != "") && ($_GET["email"] != "") && ($_GET["message"] != "")) {
        require(__DIR__ . "/src/PHPMailer.php"); // Ajoute le fichier contenant le code de la classe PHPMailer
        require(__DIR__ . "/src/SMTP.php"); // le code de la classe SMTP
        require(__DIR__ . "/src/Exception.php"); // le code de la classe Exception
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        // Configuration du serveur SMTP
        $mail->SMTPDebug = 0; // Active/désactive les messages de mise au point
        $mail->isSMTP(); // Utilise le protocole SMTP
        $mail->Host = "smtp.gmail.com"; // Configure le nom du serveur serveur SMTP
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS; // Active le cryptage sécurisé TLS
        $mail->Port = 465; // Configure le numéro de port
        $mail->SMTPAuth = true; // Active le mode authentification
        $mail->Username = "i2300526.iut@gmail.com"; // Identifiant du compte SMTP
        $mail->Password = "zkegbkkzfmxgruiy"; // Mot de passe du compte SMTP
        // Destinataires
        $mail->setFrom("i2300526.iut@gmail.com", "Mailer");
        $mail->addAddress("florianelouis49@gmail.com", "Floriane Louis"); // Ajout des destinataires
        $mail->addAddress("Floriane.Louis.Etu@univ-lemans.fr", "Floriane Louis");
        $mail->addAddress("floriane.louis.pro@gmail.com", "Floriane Louis");
        $mail->addAddress($_GET["nom"], $_GET["email"], $_GET["message"]);
        // Contenu du mail
        $mail->isHTML(true);
        //$mail->Subject = "Formulaire de contact";
        $mail->Subject = $_GET["nom"] . " " . $_GET["email"];
        //$mail->Body = "Bonjour " . $_GET["nom"] . ", merci, je vous contacterais au plus vite.";
        $mail->Body = $_GET["message"];
        $mail->CharSet = PHPMailer\PHPMailer\PHPMailer::CHARSET_UTF8;
        $retour = $mail->send();
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="description" content="CV et Portfolio sous forme de site web, réalisé par Floriane Louis. Ce travail a été effectué dans le but de rechercher une alternance ou un stage dans le cadre de mes études.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="http://www.perso.univ-lemans.fr/~i2300526/cv-floriane-louis/">
    <meta name="twitter:title" content="Floriane Louis - CV et Portfolio">
    <meta name="twitter:description" content="CV et Portfolio sous forme de site web, réalisé par Floriane Louis. Ce travail a été effectué dans le but de rechercher une alternance ou un stage dans le cadre de mes études.">
    <meta name="twitter:image" content="./images/floriane.webp">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.perso.univ-lemans.fr/~i2300526/cv-floriane-louis/">
    <meta property="og:title" content="Floriane Louis - CV et Portfolio">
    <meta property="og:site-name" content="Cette page contient des informations relatives à Floriane Louis ainsi qu'une brève présentation de ses projets sous forme de galerie">
    <meta property="og:image" content="./images/floriane.webp">
    <meta property="og:image:width" content="1903">
    <meta property="og:image:height" content="938">

    <title>CV | Floriane Louis</title>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <header>
        <nav>
            <h1>Curriculum vitae Portfolio</h1>
            <ul>
                <li><a href="#presentation">Présentation</a></li>
                <li><a href="#atouts">Atouts</a></li>
                <li><a href="#galerie">Galerie</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <section id="presentation">
            <h2>Présentation</h2>
            <div class="texteEtPhoto">
                <div class="textePresentation">
                    <h3>Floriane Louis</h3>
                    <p>Je m’appelle Floriane Louis et j’ai 18 ans.<br> Je suis étudiante en première année de <abbr title="Bachelor Universitaire de Technologie">BUT</abbr>
                        en Métiers du Multimédia et de l’Internet à l’
                        <a href="https://www.google.com/maps/place/D%C3%A9partement+M%C3%A9tiers+du+Multim%C3%A9dia+et+de+l'Internet/@48.0873385,-0.7602606,17.27z/data=!3m1!5s0x48090203691785cd:0x5e26ba00c5b4816d!4m6!3m5!1s0x4809020369168ccd:0x7ce08ddd63f8ba76!8m2!3d48.0863433!4d-0.7589824!16s%2Fg%2F1tfss89h?authuser=0&entry=ttu">
                            <abbr title="Institut Universitaire de Technologie">IUT</abbr>
                            de Laval.
                        </a><br>Le <abbr title="Bachelor Universitaire de Technologie">BUT</abbr> <abbr title="Métiers du Multimédia et de l'Internet">MMI</abbr> est une formation qui se prépare
                        en
                        trois
                        ans et qui permet d’acquérir le grade de
                        licence.
                        <br>J’ai choisi cette formation, car je m’intéresse beaucoup à la création. J’aime, entre autres,
                        réaliser des logos, faire des
                        chartes graphiques et photographier divers sujets.
                    </p>
                </div>
                <div class="floriane">
                    <img src="images/floriane.webp" alt="photo de Floriane">
                </div>
            </div>
            <hr>
        </section>
        <section id="atouts">
            <h2>Atouts</h2>
            <div class="atouts">
                <h3>Compétences</h3>
                <div class="competences">
                    <?php
                    $lecteur = new SplFileObject("./private/competences.csv", 'r');
                    while ($lecteur->eof() == false) { // Boucle sur chaque compétence
                        $ligne = $lecteur->fgets(); // récupère la ligne et passe à la ligne suivante
                        if ($ligne != "") {
                            $tab = explode(";", $ligne);
                            $nomCompetence = $tab[0];
                            $niveauCompetence = $tab[1];
                            $descriptionCompetence = $tab[2];
                            $image = $tab[3];
                    ?>

                            <div class="logiciel">
                                <div class="blocDescriptionLogiciel">
                                    <div class="descriptionLogiciel">
                                        <h4 class="titreLogiciel"><?php echo ($nomCompetence); ?></h4>
                                        <p class="texteLogiciel"><?php echo ($descriptionCompetence); ?></p>
                                    </div>
                                </div>
                                <img src=<?php echo ($image); ?> alt="" class="logoLogiciel">
                                <div class="nomBarre">
                                    <progress max="100" value=<?php echo ($niveauCompetence); ?>></progress>
                                </div>
                            </div>
                    <?php
                        }
                    } // Fin de la boucle
                    ?>
                </div>
                <div class="pointsFortsEtFaibles">
                    <div class="pointsForts blanc">
                        <h3 class="blanc centre">Points forts</h3>
                        <?php
                        $lecteur = new SplFileObject("private/points-forts.csv", 'r');
                        while ($lecteur->eof() == false) {
                            $ligne = $lecteur->fgets();
                            if ($ligne != "") {
                                $tab = explode(";", $ligne);
                                $pointsForts = $tab[0];
                        ?>
                                <p><?php echo ($pointsForts); ?></p>
                        <?php
                            }
                        }
                        $lecteur = null;
                        ?>
                    </div>
                    <div class="pointsFaibles blanc">
                        <h3 class="blanc centre">Points faibles</h3>
                        <?php
                        $lecteur = new SplFileObject("private/points-faibles.csv", 'r');
                        while ($lecteur->eof() == false) {
                            $ligne = $lecteur->fgets();
                            if ($ligne != "") {
                                $tab = explode(";", $ligne);
                                $pointsFaibles = $tab[0];
                        ?>
                                <p><?php echo ($pointsFaibles); ?></p>
                        <?php
                            }
                        }
                        $lecteur = null;
                        ?>
                    </div>
                </div>
                <div class="parcoursEtExperiencesPro">
                    <div class="parcours">
                        <h3 class="centre">Parcours</h3>
                        <div class="passe">
                            <h4 class="titreColore vertical-text">Passé</h4>
                            <ul>
                                <li>
                                    2023 : <strong>Baccalauréat Général</strong> mention Bien,
                                    <a href="https://bergson.paysdelaloire.e-lyco.fr/">lycée Henri Bergson</a>
                                </li>
                                <li>
                                    2022-2023 : Terminale : <strong>spécialités Mathématiques</strong> et
                                    <strong>Numérique
                                        et
                                        Sciences Informatiques</strong>
                                </li>
                                <li>
                                    2022 : Abandon spécialité Physique-Chimie
                                </li>
                                <li>
                                    2021 -2022 : Première : spécialités Mathématiques, Numérique et Sciences
                                    Informatiques
                                    et
                                    Physique-Chimie
                                </li>
                                <li>
                                    2020 : Diplôme National du Brevet mention Très Bien,
                                    <a href="https://college-sainte-emilie-cande.anjou.e-lyco.fr/">collège Sainte
                                        Émilie</a>
                                </li>
                                <li>
                                    2019 : Stage de troisième dans une
                                    <a href="https://www.poinsot-immobilier.com/agencies/agence-immobiliere-saint-florent-le-vieil/">agence
                                        immobilière</a>
                                </li>
                            </ul>
                        </div>
                        <div class="futur">
                            <h4 class="titreColore vertical-text">Futur</h4>
                            <p>Après l'obtention de mon <abbr title="Bachelor Universitaire de Technologie">BUT</abbr>
                                <abbr title="Métiers du Multimédia et de l'Internet">MMI</abbr>, je souhaite
                                travailler
                                dans
                                le
                                domaine de la création numérique et, peut-être, devenir web
                                designer.
                            </p>
                        </div>
                    </div>
                    <div class="experiencesPro">
                        <h3 class="centre">Expériences professionnelles</h3>
                        <ul>
                            <li>
                                août 2023 : cueillette de pommes, Les Vergers du Bouillonnais Loireauxence
                            </li>
                            <li>
                                juillet 2023 : agent de propreté, Super U Varades
                            </li>
                            <li>
                                juin 2023 : éclaircissage de pommiers, Les Vergers du Bouillonnais Loireauxence
                            </li>
                            <li>
                                vacances Toussaint 2022 : cueillette de pommes, Les Vergers du Bouillonnais,
                                Loireauxence
                            </li>
                            <li>
                                juin 2022 : éclaircissage de pommiers, Les Vergers du Bouillonnais Loireauxence
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <hr>
        </section>
        <section id="galerie">
            <h2>Galerie</h2>
            <p>Voici un aperçu de certains projets que j’ai réalisés. Vous pouvez cliquer sur l’un d’entre eux pour
                obtenir plus d’informations.</p>
            <div class="galerie photo">
                <a href="./galerie.php?name=1">
                    <ul>
                        <li class="mask-circle transition filter">
                            <img src="images/fleur-jaune.webp" alt="Un hibiscus jaune">
                        </li>
                    </ul>
                </a>
                <a href="./galerie.php?name=2">
                    <ul>
                        <li class="mask-circle transition filter">
                            <img src="images/affiche1.webp" alt="Une affiche">
                        </li>
                    </ul>
                </a>
                <a href="./galerie.php?name=3">
                    <ul>
                        <li class="mask-circle transition filter">
                            <img src="images/logo-bonbon.webp" alt="Un logo rose, orange et jaune avec les lettres F O R">
                        </li>
                    </ul>
                </a>
                <a href="./galerie.php?name=4">
                    <ul>
                        <li class="mask-circle transition filter">
                            <img src="images/logo-geekverse.webp" alt="Un logo bleu, violet et noir avec les lettres G V">
                        </li>
                    </ul>
                </a>
                <a href="./galerie.php?name=5">
                    <ul>
                        <li class="mask-circle transition filter">
                            <img src="images/photos.webp" alt="Un collage photos">
                        </li>
                    </ul>
                </a>
                <a href="./galerie.php?name=6">
                    <ul>
                        <li class="mask-circle transition filter">
                            <img src="images/snake1.webp" alt="Un jeu Snake">
                        </li>
                    </ul>
                </a>
            </div>
            <hr>
        </section>
        <section id="contact">
            <h2>Contact</h2>
            <div class="formulaireEtCoordonnees">
                <article class="formulaire">
                    <h3 class="centre">Formulaire</h3>
                    <form action="./index.php#contact" method="get">
                        <div>
                            <label for="nom">Nom :</label>
                            <input type="text" id="nom" name="nom" required>
                        </div>
                        <div>
                            <label for="email">E-mail :</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div>
                            <label for="message">Message :</label>
                            <textarea name="message" id="message" rows="5" cols="50" required placeholder="Écrivez votre message ici..."></textarea>
                        </div>
                        <div>
                            <input type="submit" value="Envoyer">
                            <i class="fa-regular fa-paper-plane"></i>
                        </div>
                    </form>
                    <?php
                    if (isset($retour)) {
                        if ($retour == true) {
                            echo ('<div><p>Votre message a été transmis à Floriane Louis</p></div>');
                        } else {
                            echo ('<div><p>Votre message n\'a pas été transmis.</p></div>');
                        }
                    }
                    ?>
                </article>
                <article class="coordonnees">
                    <h3 class="scotch centre">Mes coordonnées</h3>
                    <div class="email">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:floriane.louis.pro@gmail.com">floriane.louis.pro@gmail.com</a>
                    </div>
                    <div class="linkedin">
                        <i class="fa-brands fa-linkedin"></i>
                        <a href="https://www.linkedin.com/in/floriane-louis-63034529b/">Floriane louis</a>
                    </div>
                    <div class="phone">
                        <i class="fa-solid fa-phone"></i>
                        <a href="phoneto:0769873430">0769873430</a>
                    </div>
                    <div class="instagram">
                        <i class="fa-brands fa-instagram"></i>
                        <a href="https://www.instagram.com/florianelouis.pro/">@florianelouis.pro</a>
                    </div>
                    <div class="map">
                        <i class="fa-solid fa-location-dot"></i>
                        <a href="https://www.google.com/maps/place/53000+Laval/@48.0578442,-0.8103821,13z/data=!3m1!4b1!4m6!3m5!1s0x4808fde9fc596bc1:0x40d37521e0d16e0!8m2!3d48.0706163!4d-0.7729604!16zL20vMDJseDVm?authuser=0&entry=ttu">Laval</a>
                        <a href="https://www.google.com/maps/place/Angers/@47.4819466,-0.6041341,13z/data=!3m1!4b1!4m6!3m5!1s0x480878da00e58e9d:0x40d37521e0d9c30!8m2!3d47.4711616!4d-0.5518257!16zL20vMGw0bGo?authuser=0&entry=ttu">Angers</a>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy;Floriane Louis, IUT de Laval</p>
    </footer>
</body>

</html>