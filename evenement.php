<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Heebo&family=Nunito+Sans:wght@300&family=Ruda:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@200&family=Klee+One:wght@600&family=Raleway:wght@300&family=Viga&display=swap" rel="stylesheet">

    <title>Evenements</title>
    <link rel="icon" href="Images/Logo.png">
</head>
<body>
    <script src="evenement.js"></script>
    <nav class="top">
        <div class="welcome-message">
          Bienvenue sur DiversAbility !
        </div>
        <div class="contact-info">
          Contacts : +336634486417 <br>
          <a href="#"><img src="Images/instagram.png" alt="Logo instagram" style="width: 20px; height: 20px;"></a>
          <a href="#"><img src="Images/linkedin.png" alt="Logo Linkedin" style="width: 20px; height: 20px;"></a>
          <a href="#"><img src="Images/twitter.png" alt="Logo instagram" style="width: 20px; height: 20px;"></a>
        </div>
        <div class="login-signup">
            <a href="log_in.html">Connexion/Inscription
            <div class="logo-connexion">
              <img src="Images/connexion (1).png" alt="Connexion" style="width: 25px; height: 25px;">
          </a>
              </div>
          </div>
    </nav>
    <?php
    //Connexion BDD
    include 'bdd.php';
    ?>
    <header>
        <nav class="menu-fixed">
           
            <ul class="menu">

                <li>
                    <a href="Index.html">
                        <img src="Images/Logo.png" alt="Logo DiversAbility" style="width: 50px;">
                    </a>
                </li>
                <div class="liste-menu">
                <li>
                    <a href="apropos.html">
                    A propos de nous
                </a>
                </li>
                <li>
                    <a href="Informations et ressources.html">
                    Informations et ressources
                </a>
                </li>
                <li>
                    <a href="Repertoire_clubs.html">
                    Répertoire clubs
                    </a>
                </li>
                <li>
                    <a href="Temoignages.html">
                    Témoignages
                </a>
                </li>
                <li>
                    <a href="forum(2).html">
                    Forum
                </a>
                </li>
                <li>
                    <a href="#">
                    Evenements
                    </a>
                </li>
                
                <li>
                    <a href="ressources-pro.html">
                    Ressources professionnels
                    </a>
                </li>
                </div>
            </ul>
        </nav>
        <div class="evenements">
        
        <h3>Calendrier <span>des</span> événements</h3>
        <div class="calendrier">
        <img src="Images/calendrier.jpg" alt="Enfants joyeux" style="height:350px; width: 500px;">
        <div class="contenu-calendrier">
        <h4>Juillet 2023</h4>
        <h5>Tournoi de football</h5>
        <p><strong>Date</strong> : 15 juillet à 15h00 </p>
        <p><strong>Lieu</strong> : Le Bouscat</p>
        <p><strong>Niveau recquis :</strong> Débutant accepté</p>
        <p><strong>Enjeux : </strong></p>
        <p><strong>Adaptation(règles) : </strong> pas de tacles</p>
        <p><strong>Modalités d'inscription : </strong></p>
    </div>
        </div>
    </div>
    <footer>
        <div class="Infos-contact">
            <p>Informations de contact :</p>
            <p>Téléphone: 06 63 48 64 17   Adresse email: DiversAbility@gmail.com</p>
            
            <p>Retrouvez nous sur les réseaux sociaux :</p>
            <a href="#"><img src="Images/instagram.png" alt="Logo instagram" style="width: 20px; height: 20px;"></a>
          <a href="#"><img src="Images/linkedin.png" alt="Logo Linkedin" style="width: 20px; height: 20px;"></a>
          <a href="#"><img src="Images/twitter.png" alt="Logo instagram" style="width: 20px; height: 20px;"></a>
        </div>

        <div class="Copyright">
            <p>Tous droits réservés</p><br>
            <img src="Images/Logo.png" alt="Logo" style="width: 20px; height: 20px;">
            © 2023 DiversAbility

        </div>
        <div class="Politique">
           
            <p><a href="#" style="color: white;">Politique de confidentialité</a> </p>


        </div>
    </footer>
</body>
</html>