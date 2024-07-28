<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header("Content-type: text/html; charset=utf-8");
$tab = [];
$nom = " ";
$image = " ";
$presentation = " ";
$date = " ";
$contexte = " ";
$outils = " ";
$complement1 = " ";
$tags = " ";

if (isset($_GET["name"])) {
    $lecteur = new SplFileObject("private/galerie.csv", 'r');
    while ($lecteur->eof() == false) {
        $ligne = $lecteur->fgets();
        $numLigne = $lecteur->key();
        if (($ligne != "") && ($numLigne == $_GET["name"])) {
            $tab = explode(";", $ligne);
            $nom = $tab[0];
            $image = $tab[1];
            $presentation = $tab[2];
            $date = $tab[3];
            $contexte = $tab[4];
            $outils = $tab[5];
            $complement1 = $tab[6];
            $tags = $tab[7];
        }
    }
}
else if (isset($_GET["precedent"])){
    $numLigne = $numLigne - 1;
}else if (isset($_GET["suivant"])){
    $numLigne = $numLigne + 1;
}
$lecteur = null;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Galerie présentant les projets de Floriane Louis. Ce travail a été effectué dans le but de rechercher une alternance ou un stage dans le cadre de mes études.">
    <title>Galerie | Floriane Louis</title>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="http://www.perso.univ-lemans.fr/~i2300526/cv-floriane-louis/">
    <meta name="twitter:title" content="Floriane Louis - CV et Portfolio">
    <meta name="twitter:description" content="Galerie présentant les projets de Floriane Louis. Ce travail a été effectué dans le but de rechercher une alternance ou un stage dans le cadre de mes études.">
    <meta name="twitter:image" content="./images/floriane.webp">
    
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.perso.univ-lemans.fr/~i2300526/cv-floriane-louis/">
    <meta property="og:title" content="Floriane Louis - CV et Portfolio">
    <meta property="og:site-name" content="Cette page contient des informations relatives à Floriane Louis ainsi qu'une brève présentation de ses projets sous forme de galerie">
    <meta property="og:image" content="./images/floriane.webp">
    <meta property="og:image:width" content="1903">
    <meta property="og:image:height" content="938">

    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno&family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>
    <main>
        <h1 class="centre"><?php echo ($nom) ?></h1>
        <a href="./index.php#galerie"><i class="fa-solid fa-angles-left"></i>Retour à la galerie</a>
        <div class="pageGalerie">
            <div class="box-image">
                <img src="<?php echo ($image) ?>" alt="image du projet" class="image-projet">
            </div>
            <div class="details">
                <h3>Présentation détaillée</h3>
                <p><?php echo ($presentation) ?></p>
            </div>
            <div>
                <h3>Tags</h3>
                <p><?php echo ($tags) ?></p>
            </div>
            <div>
                <h3>Date de création</h3>
                <p><?php echo ($date) ?></p>
            </div>

            <div>
                <h3>Contexte</h3>
                <p><?php echo ($contexte) ?></p>
            </div>

            <div>
                <h3>Outils utilisés</h3>
                <p><?php echo ($outils) ?></p>
            </div>
            <div>
                <h3>Image complémentaire</h3>
                <img src="<?php echo ($complement1) ?>" alt="image complémentaire" class="image-complementaire">
            </div>
        </div>
        <div class="navigationProjets">
            <div class="precedent">
                <i class="fa-solid fa-chevron-left"></i>
                <p>Projet précédent</p>
            </div>
            <div class="suivant">
                <p>Découvrir le projet suivant</p>
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>
    </main>
</body>

</html>