<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Heebo&family=Nunito+Sans:wght@300&family=Ruda:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <title>Inscription entraineur</title>
    <link rel="icon" href="Images/Logo.png">
</head>
<body>
    <script src="Inscription_entraineur.js"></script>
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
                    <a href="Informations et ressources(2).html">
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
                    <a href="evenement.html">
                    Evenements
                    </a>
                </li>
                
                <li>
                    <a href="">
                    Ressources professionnels
                    </a>
                </li>
            </div>
            </ul>
        </nav>
    <main>
    <?php
    //Connexion BDD
    include 'bdd.php';
    ?>
        <div class="Inscription-entraineur">
        <div class="container">
            
            <div class="titre">
            <h3>Inscrivez-vous</h3>
            <h4>(professionnel du sport)</h4>
        </div>
        <form action="#" class="Inscription">
            
            <label for="mail">Entrez votre email</label> <br>
            <input type="email" name="email" id="email" required=""> <br>
            <label for="name">Entrez votre nom</label> <br>
            <input type="name" name="name" id="name" required> <br>
            <label for="password">Veuillez choisir un mot de passe</label> <br>
            <input type="password" name="password" id="password" required=""> <br>
            <label for="date">Veuillez entrer votre date de naissance</label> <br>
            <input type="date" name="date" id="date" required=""> <br>
            <label for="message">Quelle est votre profession ?</label> <br>
            <textarea name="neuro" id="message" cols="30" rows="5" placeholder="Entrez votre message" required=""></textarea> <br>
            <label for="sport">Quel est le sport que vous dispensez ?</label> <br>
            <textarea name="message" id="message" cols="30" rows="5" placeholder="Entrez votre message"></textarea> <br>
            <button class="inscrire" type="submit">Valider</button> <br>
    </main>

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