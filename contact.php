<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8"/>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Css Materialize -->
	<link type="text/css" rel="stylesheet" href="Materialize/css/materialize.min.css"  media="screen,projection"/>
  <!-- Css perso -->
	<link type="text/css" rel="stylesheet" href="Materialize/css/style.css"/>
  <!-- lancement du jquery pour que les scripts passent -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title>Contact</title>
	
</head>

<body>
	<div class="container">

		<strong><h1>Formulaire de contact</h1></strong>

		<div class="row" id="centrage2">
         <form class="col s12" action="send_form.php" method="post">
            <div class="row">
               <div class="input-field col s12">
                  	<i class="material-icons prefix">account_circle</i>
                  	<input placeholder="Nom"  id="inputname" type="text" class="form-control"value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>" required>
                  	<label for="inputname"></label>
               </div>               
            </div>
            <div class="row" >
               <div class="input-field col s12">
               	 	<i class="material-icons prefix">mode_edit</i>
                  	<input placeholder="Email" id="inputemail" type="email" class="validate" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>" required>
                  	<label for="inputemail"></label>
               </div>
            </div>			
            <div class="row" >
               <div class="input-field col s12">
               		<i class="material-icons prefix">message</i>
                  	<input placeholder="Votre demande" id="inputmessage" type="text"value="<?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?>" >
                  	<label for="inputmessage"></label>
               </div>
            </div>

                  <P> 
                      <button class="btn waves-effect waves-light light-blue" type="submit">envoyer<i class="material-icons right">send</i></button>


                  </p>

            

        </form>

    <?php
        unset($_SESSION['inputs']); 
        unset($_SESSION['success']);
        unset($_SESSION['errors']);
    ?>
 

        </div>

	</div>
</body>
</html>