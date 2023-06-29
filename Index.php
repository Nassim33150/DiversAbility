<?php
include 'bdd.php';
if(isset($_POST['submit'])){
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['age']) AND !empty($_POST['statut']) AND !empty($_POST['messag'])){
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        $statut = htmlspecialchars($_POST['statut']);
        $message = htmlspecialchars($_POST['messag']);
        $insertUser = $mySqlConnection->prepare('INSERT INTO navigateur(nom, prenom, email, age, statut, messag)VALUES(?, ?)');
        $insertUser->execute(array($nom, $prenom, $email, $statut, $message))
    }else{
        echo "Veuillez compléter tous les champs";
    }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Heebo&family=Nunito+Sans:wght@300&family=Ruda:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    
    <title>DiversAbility</title>
    <link rel="icon" href="Images/Logo.png">
</head>
<body>
    <script src="script.js"></script>
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
                    <a href="#">
                        <img src="Images/Logo.png" alt="Logo DiversAbility" style="width: 50px;">
                    </a>
                </li>

              <li>
                <form class="search-form" action="">
                    <input class="search-input" type="search">
                   
                </form>
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
    </header>

           
    <main>
    <section id="infos">
        <h3>Informations et ressources</h3>
        <p>Découvrez une liste des différents sports adaptés <br>pour les personnes neurodivergentes</p>
        <img src="Images/Lutte.jpg" alt="Lutte" style="width: 150px;">
        <button id="button"><a href="Informations et ressources.html">En savoir plus</a></button>
    </section>
    
    <section id="Répertoire">
        <h3>Répertoire clubs sportifs inclusifs</h3>
        <img src="Images/club cenon.png" alt="Lutte" style="width: 100px;">
        <p>Des clubs sportifs proposent  autour de vous  des programmes adaptés et inclusifs pour les personnes neurodivergentes.</p>
        <button id="button"><a href="Repertoire_clubs.html">En savoir plus</a></button>
    
    </section>
    
    <section id="Témoignages">
        <h3>Témoignages et ressources</h3>
        <p>Histoires inspirantes de personnes neurodivergentes qui <br> ont bénéficié de la pratique sportive. </p>
        <img src="Images/Témoignages.jpg" style="width:150px;">
        <button id="button"><a href="Temoignages.html">En savoir plus</a></button>
    </section>
    
    <section id="forum">
        <h3>Forum</h3>
    <p>
       
        Posez des questions, partagez des expériences, demandez des conseils et <br> interagissez avec d'autres personnes impliquées dans le sport inclusif pour les <br> personnes neurodivergentes.
    </p>
    <img src="Images/Forum.jpg" alt="Football" style="width: 150px; height: 100px;">
    <button id="button"><a href="forum(2).html">J'accède au forum !</a></button>
    </section>
    
    
    
    <section id="evenements">
        <h3>Calendrier des événements</h3>
    <p>
        Compétitions, camps d'entraînement journées d'initiation: <br>trouvez des 
        opportunités de participation
        et de soutien.
    </p>
    <img src="Images/calendrier.jpg" style="width:150px">
    <button id="button"><a href="evenement.html">Je trouve un événement !</a></button>
    </section>
    
    
    
    <section id="ressources">
        <h3>Ressources pour les professionnels</h3>
        <p>Formations en ligne et ressources pédagogiques destinées aux entraîneurs, aux <br> éducateurs physiques et aux professionnels du sport afin de renforcer leurs <br> compétences et leur compréhension de l'inclusion des personnes neurodivergentes.
        </p>
        <img src="Images/Formation_entraineur.jpg" alt="entraineur" style="width: 150px; height: 90px;">
        <button id="button"><a href="ressources-pro.html">J'accède aux ressources</a></button>
    
    </section>
    
    

    
    <div id="contact">
        <div class="container">
        <div class="title">
            <h6>Une question ? Un conseil ?</h6>
            <h3>Contactez-nous !</h3>
        </div>
        




        <form action="#" method="POST" >
            
            <input type="text" name="name" placeholder="Entrez votre nom..." required=""  > <br>
           
            <input type="text" name="prenom" placeholder="Entrez votre prénom" required=""><br>
          
            <input type="email" name="email" placeholder="Entrez votre email" required=""><br>
            
            <input type="age" name="age" placeholder="Entrez votre âge" required=""><br>
            <div class="select">
            <select name="statut" id="statut">
                <option selected disabled>Votre statut</option>
                <option value="Pratiquant">Pratiquant</option>
                <option value="Parent">Parent</option>
                <option value="Entraineur">Entraineur</option>
            </select>
        </div>
            <textarea name="message" ></textarea>
               <button class="Envoyer" type="submit">Envoyer</button>      
        </form>
    </div>
</div>
    </main>
        
            
            
                
    <br>
    
    
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

            
       


        
        
        
    
   
        
        
       


