  <?php
  // S'il y des données de postées
if ($_SERVER['REQUEST_METHOD']=='POST') {
  // Code PHP pour traiter l'envoi de l'email
 
  $nombreErreur = 0; // Variable qui compte le nombre d'erreur
  // Définit toutes les erreurs possibles
  if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
    $nombreErreur++; // On incrémente la variable qui compte les erreurs
    $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
  } else { // Sinon, cela signifie que la variable existe (c'est normal)
    if (empty($_POST['email'])) { // Si la variable est vide
      $nombreErreur++; // On incrémente la variable qui compte les erreurs
      $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
    } else {
      if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $nombreErreur++; // On incrémente la variable qui compte les erreurs
        $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
      }
    }
  }
 
  if (!isset($_POST['message'])) {
    $nombreErreur++;
    $erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
  } else {
    if (empty($_POST['message'])) {
      $nombreErreur++;
      $erreur5 = '<p>Vous avez oublié de donner un message.</p>';
    }
  }    // (3) Ici, il sera possible d'ajouter plus tard un code pour vérifier un captcha anti-spam.
 
  if ($nombreErreur==0) { 
     
      // Récupération des variables et sécurisation des données
      $nom     = htmlentities($_POST['name']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
      $email   = htmlentities($_POST['email']);
      $message = htmlentities($_POST['message']);
     
      // Variables concernant l'email
     
      $destinataire = 'm.martinez@agram.fr'; // Adresse email du webmaster (à personnaliser)
      $sujet = 'Titre du message'; // Titre de l'email
      $contenu = '<html><head><title>Titre du message</title></head><body>';
      $contenu .= '<p>Bonjour, vous avez reçu un message à partir de l application de recherche de pompe.</p>';
      $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
      $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
      $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
      $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
     
      // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
      $headers = 'MIME-Version: 1.0'."\r\n";
      $headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
     
      // Envoyer l'email
      mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
      echo '<h2>Votre message a été envoyé!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
      // (2) Fin du code pour traiter l'envoi de l'email
      } 

    else { // S'il y a un moins une erreur
    echo '<div style="border:1px solid #000000; padding:5px;">';
    echo '<p style="color:#000000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
    if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
    if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
    if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
    if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
    if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
    // (4) Ici, il sera possible d'ajouter un code d'erreur supplémentaire si un captcha anti-spam est erroné.
    echo '</div>';
  }
}
   
      
    
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	 <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
   <meta name="author" content="Martinez Manuel" />
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Css Materialize -->
	<link type="text/css" rel="stylesheet" href="Materialize/css/materialize.min.css"  media="screen"/>
  <!-- Css perso -->
	<link type="text/css" rel="stylesheet" href="Materialize/css/style.css"/>
  <!-- lancement du jquery pour que les scripts passent -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title>Contact</title>
	
</head>

<body>
	<div class="container">

		<h1>Formulaire de contact</h1>

		<div class="row" id="centrage2">
         <form class="col s12" action="contact.php" method="post">
            <div class="row">
               <div class="input-field col s12">
                  	<i class="material-icons prefix">account_circle</i>
                  	<input placeholder="Nom" name="name" id="inputname" pattern="([a-zA-Z\s]){1,30}" type="text" class="form-control" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>" required>
                  	<label for="inputname"></label>
               </div>               
            </div>
            <div class="row" >
               <div class="input-field col s12">
               	 	<i class="material-icons prefix">mode_edit</i>
                  	<input placeholder="Email" name="email" id="inputemail" type="email" class="validate" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>" required>
                  	<label for="inputemail"></label>
               </div>
            </div>			
            <div class="row" >
               <div class="input-field col s12">
               		<i class="material-icons prefix">message</i>
                  	<input placeholder="Votre demande" name="message" id="inputmessage" type="text" value="<?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?>" required >
                  	<label for="inputmessage"></label>
               </div>
            </div>

                  <div class="button">
                      <button class="btn waves-effect waves-light light-blue" type="submit">envoyer<i class="material-icons right">send</i></button>
                      <input class="btn waves-effect waves-light light-blue" id="return" type="button" onclick="location.href='index.php';" value="retour accueil" />

                  </div>

            

        </form>

   
 

        </div>

	</div>
</body>
</html>