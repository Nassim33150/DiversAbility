<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations et ressources</title>
    <link rel="icon" href="Images/Logo.png">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&family=Heebo&family=Nunito+Sans:wght@300&family=Ruda:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <script src="Informations et ressources.js"></script>
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
                    <a href="#">
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
            
            <div class=Infos-et-ressources>
                <h3>Informations <span>&</span>  ressources</h3>
                <img src="Images/Lutte.jpg" alt="Lutte" style="height:300px; width: 500px;">
                <p>Dans cette rubrique, nous vous proposons une liste de différents sports  adaptés pour les personnes neurodivergentes.
Afin de vous donner une proposition personnalisée en fonction de vos préférences et vos besoins, veuillez-vous connecter;</p>
            </div>

            <div class="identification">
                <div class="container">

                    <div class="titre">
                        <h3>Connexion</h3> <br>
                        
                    </div>
                    <form action="ressources-pro." class="Connexion">
                        
                        <label for="mail">E-mail :</label> <br>
                        <input type="email" name="email" placeholder="Entrez votre email" required=""> <br>
                        <label for="password">Mot de passe :</label> <br>
                        <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required=""> <br>
                        <button class="connecter" type="submit">Se connecter</button> <br>
                        
                    </form>
                </div>

                <?php
    //Connexion BDD
    include 'bdd.php';
    //inscription utilisateur
    if(isset($_POST['submit'])){
        if(!empty($_POST['email']) AND !empty($_POST['nom']) AND !empty($_POST['password']) AND !empty($_POST['date']) AND !empty($_POST['adresse']) AND !empty($_POST['ville'])) AND !empty($_POST['cp']) AND !empty($_POST['neuro']) AND !empty($_POST['sport']){
            $email = htmlspecialchars($_POST['email']);
            $nom = htmlspecialchars($_POST['nom']);
            $password = sha1($_POST['password']);
            $date = htmlspecialchars($_POST['date']);
            $adresse = htmlspecialchars($_POST['adresse']);
            $ville = htmlspecialchars($_POST['ville'])
            $cp = htmlspecialchars($_POST['cp'])
            $neuro = htmlspecialchars($_POST['neuro'])
            $sport = htmlspecialchars($_POST['sport'])

            $insertUser = $mySqlConnection->prepare('INSERT INTO utilisateur(nom, passwor, mail, date_naissance, neuro, sport, adresse, cp, ville)VALUES(?, ?)');
            $insertUser->execute(array($nom, $password, $email, $date, $neuro, $sport $adresse, $cp, $ville));
        }else{
            echo "Veuillez compléter tous les champs";
        }
    }
    ?>

                
                <div class="container">
                    
                    <div class="titre">
                    <h3>Inscrivez-vous</h3> 
                </div>
                <form action="#" class="Inscription">
                    
                    <label for="mail">E-mail :</label> <br>
                    <input type="email" name="email" id="email" required="" placeholder="Entrez votre email"> <br>
                    <label for="name">Nom :</label> <br>
                    <input type="name" name="name" id="name" required="" placeholder="Entrez votre nom"> <br>
                    <label for="password">Veuillez choisir un mot de passe :</label> <br>
                    <input type="password" name="password" id="password" required="" placeholder="Entrez votre mot de passe"> <br>
                    <label for="date">Date de naissance :</label> <br>
                    <input type="date" name="date" id="date" required=""> <br>
                    <label for="adresse">Votre adresse postale :</label> <br>
                    <input type="adresse" name="adresse" id="adresse" required="" placeholder="Entrez votre adresse"> <br>
                    <label for="ville">Votre ville :</label> <br>
                    <input type="ville" id="ville" name="ville" placeholder="Entrez votre ville" required=""> <br>
                    <label for="cp">Votre code postal :</label> <br>
                    <input type="cp" name="cp" id="cp" required="" placeholder="Entrez votre code postal"> <br>
                    <label for="message">Quel type de neurodivergence avez-vous ?</label> <br>
                    <textarea name="neuro" id="message" cols="30" rows="5" placeholder="Entrez votre message" required=""></textarea> <br>
                    <label for="sport">Quelle est votre activité sportive préférée ?</label> <br>
                    <textarea name="message" id="message" cols="30" rows="5" required="" placeholder="Entrez votre message"></textarea> <br>
                    <button class="inscrire" type="submit">Valider</button> <br>
                    <p>Si vous êtes entraineur ou éducateur, veuillez vous <br><a href="Inscription_entraineur.html"><span class="log-in">inscrire ici</span></a> </p>
                    


                </form>



            </div>

              

  
                
            
        </main>
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
                    