<?php

	$bdd = mysqli_connect('localhost','root','root','AppliPompe');
	
	$typepompe = $_POST['type_pompe'];
	$alimentation = $_POST['alimentation'];
	$application = $_POST['application1'];
	$req = "SELECT *
			FROM pompe
			WHERE type_pompe = '$typepompe'
			AND alimentation = '$alimentation'
			AND application1 = '$application'";
			

	$result = mysqli_query($bdd, $req);
	

	
    /*

/*Libération des résultats*/
	/*mysqli_free_result($result);

/*Fermeture de la connexion*/
	/*mysqli_close($bdd);*/?>
	<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!--Import Google Icon Font-->
	 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<!--Css Materialize -->
	<link type="text/css" rel="stylesheet" href="Materialize/css/materialize.min.css"  media="screen,projection"/>
	<!-- Css perso -->
	<link type="text/css" rel="stylesheet" href="Materialize/css/style.css"/>
	<!-- lancement du jquery pour que les scripts passent -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title>Résultat de recherche</title>
</head>
<body>
<div class="container">

	<strong><h1> Résultat de votre recherche </h1></strong>
	
		<table class="centered">
			
			<tr>
				<td>nom</td>
				<td> pompe</td>
				<td>alimentation</td>
				<td>debit mini en litre</td>
				<td>debit maxi en litre</td>
				<td>hta</td>
				<td>htr</td>
				<td>diametre</td>
				<td>application</td>
				<td>application</td>
				<td>application</td>
				<td>lien</td>
			</tr>
	<?php while($row = mysqli_fetch_assoc($result)) { ?>
			<tr>
				<td> <?php echo $row['nom']; ?> </td>
				<td> <?php echo $row['type_pompe']; ?> </td>
				<td> <?php echo $row['alimentation']; ?> </td>
				<td> <?php echo $row['dmin']; ?> </td>
				<td> <?php echo $row['dmax']; ?> </td>
				<td> <?php echo $row['hta']; ?> </td>
				<td> <?php echo $row['htr']; ?> </td>
				<td> <?php echo $row['diametre_tuyau']; ?> </td>
				<td> <?php echo $row['application1']; ?> </td>
				<td> <?php echo $row['application2']; ?> </td>
				<td> <?php echo $row['application3']; ?> </td>
				<td>
				<?php if ($row['lien']== true): ?>
				<a href=" <?php echo $row['lien']; ?>" > lien </a>  
				<?php else : ?><a href=" contact.php" >nous contacter  </a> 
				
				<?php endif ; ?>
				
				</td>
			
			</tr>	
				<?php } ; ?>				
		</table>
</div>		
		
	<script type="text/javascript" src="Materialize/js/materialize.min.js"></script>
</body>
</html>
