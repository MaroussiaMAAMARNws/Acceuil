<?php
$nom = "MAAMAR";
$prenom = "Maroussia";
$titre = "Alternance cheffe de projet digitale";

$bref = [
    "region" => "Normandie",
    "vehicule" =>"Permis B - Véhiculé",
    "phone" => "06.49.60.95.49",
    "email" => "maroussia.maamar@hotmail.fr",
    "linkedin" => "https://www.linkedin.com/in/maroussia-maamar/"
];


$presentation = "Après avoir travaillé des années dans la 
                        restauration, et animée par la création 
                        de contenus, je souhaite travailler sur le 
                        marketing digital. Dans le cadre de ma 
                        formation en alternance (3 semaines en 
                        entreprise et 1 semaine à l’école), je suis 
                        à la recherche d’une entreprise .";

$skills = [
    "Polyvalence et adaptabilité",
    "Autodidacte",
    "Curiosité et Créativité",
    "Travail en équipe et en autonomie"
];

$formations = [
    [
        "ecole" => "Normandie Web School",
        "annee" => "2024-2027",
        "diplome" => "Bachelor Chef de projet digital (Alternance)",
        "notions" => "Conception numérique, Spécialisation communication digitale, Développement de projet"
    ],
    [
        "ecole" => "Ecole O’Clock",
        "annee" => "2023-2024",
        "diplome" => "Développeur Web et Web mobile",
        "notions" => "1500 heures, Projet tutoré de 2 mois"
    ]
];

$langues = [
    [
        "langue" => "Allemand",
        "niveau"=> "C1"
    ],
    [
        "langue" => "Anglais",
        "niveau"=> "C1 plus"
    ]
];

$competences =  [
    "HTML",
    "CSS",
    "Javascrpit",
    "SQL",
    "Suite Adobe",
    "Canva", 
    "Office 365",
    "Sonny Vegas Pro",
    "VSCode"
];

$experiences = [
    [
        "poste" => " Stage Chargée de communication",
        "annee" => "Mars-Juillet 2025",
        "entreprise" => "MEGAMA COMMUNICATION",
        "description" => "Community Management - Content Management - Production de support de communication - SEO/SEA - Refonte site Internet"
    ],
    [
        "poste" => " Stage Développeur Web",
        "annee" => "Avril-Juin 2024",
        "entreprise" => "Ecole O’Clock",
        "description" => "Création d’un site internet - Réalisation du cahier des charges (MCD, charte graphique, arborescence, etc....) - Gestion base de données - Méthode Agile - Front-End, Back-end"
    ],
    [
        "poste" => "Assistante de Département",
        "annee" => "2022-2023",
        "entreprise" => "Disneyland Paris - Walt Disney Imagineering",
        "description" => "Création de design communication interne - Gestion base de données DBeaver - Arborescence - MCD/MLD - Première approche de codage (HTML, 
                                Javascript) - Tâche RH / Gestion d’équipe"
    ],
]
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV de <?php echo $prenom . " " . $nom; ?></title>
    <link rel="stylesheet" href="assets/css/style_bis.css">
</head>
<body>
    <header class="principal">
        <nav>
            <ul>
                <li><a href="index.html" class="nav grow-rotate">Accueil</a></li>
                <li><a href="#" class="nav grow-rotate">À propos</a></li>
                <li><a href="#" class="nav grow-rotate">Contact</a></li>
                <li><a href="cv.php" class="nav grow-rotate">Mon CV</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Mon CV</h1>
        <section>
            <div>
                <div>
                        <h2><?php echo $prenom . " " . $nom; ?></h2>
                            <h3 class="metier"><?php echo $titre; ?></h3>
                                <div class="navigation">
                                    <img src="../assets/images/photo_CV_Marou.png" alt="photo maroussia" id="photo">
                                </div>
                                <nav class="menu" id="menus">
                                    <ul>
                                        <li><a href="#contacts" class="nav grow-rotate">En bref...</a></li>
                                        <li><a href="#presentations" class="nav grow-rotate">Parlons de moi</a></li>
                                        <li><a href="#formations" class="nav grow-rotate">Mon apprentissage</a></li>
                                        <li><a href="#experiences" class="nav grow-rotate">Mes expériences</a></li>
                                        <li><a href="#cv" class="nav grow-rotate">Mon CV à télécharger</a></li>
                                    </ul>
                                </nav>
                </div>
            </div>        
        </section>
        <section id="contacts">
            <div>
                <div>
                    <div>
                        <h4>En bref...</h4>
                        <ul class="liste">
                            <li><?= $bref['region']; ?></li>
                            <li><?= $bref['vehicule']; ?></li>
                            <li><a href="<?= $bref['phone']; ?>"><?= $bref['phone']; ?></a></li>
                            <li><a href="mailto:<?= $bref['email']; ?>"><?= $bref['email']; ?></a></li>
                            <li>Linkedin :<a href="<?= $bref['linkedin'];?>"><?php echo $prenom . " " . $nom; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <section id="presentations">
            <div>
                <h4>Qui suis-je ?</h4>
                    <p><?php echo $presentation; ?></p>
            </div>
            <div>
                <h4>Soft Skills</h4>
                    <ul>
                        <?php foreach ($skills as $skill): ?>
                <li><?php echo $skill; ?></li>
            <?php endforeach; ?>
                    </ul>
            </div>
            <div>
                <h4>Mes centres d'intérêt</h4>
                    <p> A remplir plus en détails</p>
            </div>
        <section id="formations">
            <div>
                <h4>Formation</h4>
                <article>
                    <?php foreach ($formations as $formation): ?>
                <h5><?php echo $formation['ecole']; ?> - <?php echo $formation['annee'];?></h5>
                <h6><?php echo $formation['diplome']; ?></h6>
                <p><?php echo $formation['notions']; ?></p>
            </div>
        <?php endforeach; ?>
            </div>
            <div>
                <h4>Langues</h4>
                    <ul>
                        <?php foreach ($langues as $langue): ?>
                            <li><?php echo $langue['langue']. " ".$langue['niveau']; ?></li>
                        <?php endforeach; ?>
                    </ul>
            </div>
            <div>
                <h4>Compétences</h4>
                    <ul>
                        <?php foreach ($competences as $competence): ?>
                <li><?php echo $competence; ?></li>
            <?php endforeach; ?>
                    </ul>
            </div>
        <section id="experiences">
            <h4>Expérience</h4>
            <?php foreach ($experiences as $exp): ?>
            <article>
                <h5><?php echo $exp['poste']; ?> - <?php echo $exp['annee'];?></h5>
                    <h6><?php echo $exp['entreprise']; ?></h6>
                        <ul>
                            <li><?php echo $exp['description']; ?></li>
                        </ul>
            </article>
            <?php endforeach; ?>
            
        <section id="cv">
            <h4>Convaincu ?</h4>
            <p>Je suis la professionnelle que vous recherchez?</p>
            <p>Vous voulez parlez de moi à votre entourage?</p>
            <p>Mon CV sur mon site est sympa mais vous voulez une version simplifié?</p>
            <p>Je peux réaliser vos souhaits ! Cliquez <a href="assets/pdf/CV_Maroussia_MAAMAR_Alternance_Cheffe_de_projet_digital_2.pdf" download="CV-Maroussia-MAAMAR">ICI</a> pour télécharger mon CV en PDF</p>
    </main>
    <footer>
        <div>
            <p>&copy;Copyright 2024</p>
            <a href="https://www.linkedin.com/in/maroussia-maamar/">Maroussia MAAMAR</a>
        </div>
    </footer>
</body>
</html>