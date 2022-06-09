<?php

//On effectue la connexion à la bdd
$bdd = new PDO('mysql:host=valentmbddovh.mysql.db;dbname=valentmbddovh;charset=utf8', 'valentmbddovh', 'Base7yack1994');

 

//on vérifie si il existe des champs de formulaires qui sont envoyés
if (isset($_POST['message'])) {
  


    // On récupère la saisie dans les champs du formulaire et on met ces valeurs dans des variables
    // Sécurise les variables avec htmlspecialchars contre les failles xss
    $prenom =  htmlspecialchars ($_POST['prenom']);
    
    $nom =  htmlspecialchars ($_POST['nom']);

    $telephone =  htmlspecialchars ($_POST['tel']);

    $email =  htmlspecialchars ($_POST['mail']);
     
    $message = htmlspecialchars ($_POST['message']);





    




      //On prépare la requete pour l'insertion de données, 
      $requete = $bdd->prepare ("INSERT INTO user (prenom, nom, telephone, email, message)
                VALUES (?, ?, ?, ?, ?)");
                
      //On execute la requete avec en paramètre les saisies utilisateurs          
       $requete->execute(array($prenom, $nom, $telephone, $email, $message));  
       
       //Redirection en cas de succès
       header('Location: /views/contact.php');
       echo "Votre message a bien été envoyé.";

    }
    else {
     echo "Erreur. Veuillez réessayer.";
     
}



?>