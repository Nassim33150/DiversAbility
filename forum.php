<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Heebo&family=Nunito+Sans:wght@300&family=Ruda:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Klee+One:wght@600&family=Raleway:wght@300&family=Viga&display=swap" rel="stylesheet">

    <title>Forum</title>
    <link rel="icon" href="Images/Logo.png">
</head>

<body>
    <script src="forum.js"></script>
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
            <a href="#">Déconnexion
            <div class="logo-connexion">
              <img src="Images/connexion (1).png" alt="Connexion" style="width: 25px; height: 25px;">
          </a>
              </div>
          </div>
    </nav>
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
                    <a href="#">
                    Forum
                </a>
                </li>
                <li>
                    <a href="evenement(2).html">
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
    <main>
        <div class="forum">
            <h3>Fo<span>r</span>um</h3>
        <p>Bienvenue sur le forum, l'espace de discussion où vous pouvez échanger entre membres de DiversAbility en posant des questions, en partageant des expériences, <br> en demandant des conseils et en interagissant avec d'autres personnes impliquées dans le sport inclusif pour les personnes neurodivergentes.
        </p>

        </div>

        <div class="regles">
            <p>
               Voici quelques règles à respecter concernant l'espace de discussion :
            </p> <br>
                <em>
                    <ul>
                    <li>Soyez respectueux envers les autres membres du forum, évitez les insultes, le harcèlement ou les attaques personnelles.</li> <br>
                    <li>N'utilisez pas de langage offensant, discriminatoire ou diffamatoire.</li> <br>
                    <li>Respectez les opinions différentes et engagez des discussions constructives.</li>
                </ul>
                </em>
        </div>

       
                
                    

           
    </main>
    <?php
    //Connexion BDD
    include 'bdd.php';
    ?>
    <div class="chat">
            
        
        <div class="container-chat">
            <div class="header-chat">
                <h4>DiversAbilityChat</h4>
                <h6>3 membres</h6>
            </div>
            <div class="body-chat">
                <p class="message">Bonjour</p>
                <p class="message user-message">Salut</p>
            </div>
            <div class="footer">
                <form action="">
                    <input type="text" name=""> 
                    <button>Envoyer</button>
                </form>
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
    