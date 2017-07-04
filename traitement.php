<?php
error_reporting(E_ALL); 
include 'recherche.php';

	$bdd = mysqli_connect($serveur,$admin,$mdp,$base);
	
	$typepompe = $_POST['type_pompe'];
	$alimentation = $_POST['alimentation'];
	$application = $_POST['application1'];
	$pression = $_POST['pressionmax'];
	$debit = $_POST['debitmax'];

	$req = "SELECT *
			FROM pompe
			WHERE type_pompe = '$typepompe'
			AND alimentation = '$alimentation'
			AND application1 = '$application'
			AND pressionMaxHauteurMin >= $pression
			AND  dmin > $debit
			ORDER BY pressionMaxHauteurMin 
			";
			

	$result = mysqli_query($bdd, $req);
	$rowcount=mysqli_num_rows($result);	
	?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="author" content="Martinez Manuel" />
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
		  <thead>	
			<tr>
				<th id="pmhm" ><b>pression maximum à hauteur minimale</b></th>
				<th id="pmhma">pression minimum à hauteur maximale</th>
				<th id="dmin">debit mini en l/min</th>
				<th id="dmax">debit maxi en l/min</th>
				<th id="den">diamêtre entrée</th>
				<th id="dsor">diamêtre sortie</th>
				<th id="app1">application</th>
				<th id="app2">application</th>
				<th id="app3">application</th>
				<th id="lien">lien</th>
			</tr>
		  </thead>	

	<?php if (isset($typepompe) && isset($alimentation) && isset($application)  && isset($debit)): ?>
	<p class="ameliore"> Pour votre choix de pompe de type <i><?php echo $typepompe; ?></i> avec une alimentation de type<i> <?php echo $alimentation; ?></p>
	 	<?php while($row = mysqli_fetch_assoc($result)) { 
	 		?>
	 	  <tbody>	
			<tr>
				<td headers="pmhm"><b> <?php echo $row['pressionMaxHauteurMin']; ?></b> </td>
				<td headers="pmhma"> <?php echo $row['pressionMinHauteurMax']; ?> </td>
				<td headers="dmin"> <?php echo $row['dmin']; ?> </td>
				<td headers="dmax"> <?php echo $row['dmax']; ?> </td>
				<td headers="den"> <?php echo $row['diametre_tuyau_entre']; ?> </td>
				<td headers="dsor"> <?php echo $row['diametre_tuyau_sortie']; ?> </td>
				<td headers="app1"> <?php echo $row['application1']; ?> </td>
				<td headers="app2"> <?php echo $row['application2']; ?> </td>
				<td headers="app3"> <?php echo $row['application3']; ?> </td>
				<td headers="lien">
					<?php if ($row['lien']== true): ?>
					<a href=" <?php echo $row['lien']; ?>"target="_blank" style="color:#368BC1" > trouver votre pompe </a>  
					<?php else  :?>
					<a href="contact.php" >nous contacter </a> 				
					<?php endif ; ?>				
				</td>
				<?php  }?>	
			<?php endif ; ?>		
			</tr>
		  </tbody>						
		</table>
		<div class="button">
     <?php if ($rowcount == 0)
			  {
				 echo"<a href='contact.php' class='btn waves-effect waves-light light-blue'>Contactez-nous</a>";
			  }
			else {
				echo"<a href='index.php' class='btn waves-effect waves-light light-blue'>Retour accueil </a> ";
			}
	  ?>
		</div> 
		<!-- code js pour rendre le tableau responsif -->
		<script type="text/javascript">
		var tds = document.getElementsByTagName("td");
    	for(var i=0; i<tds.length; i++){
        var td = tds[i];
        if(td.hasAttribute("headers")){
            var th = document.getElementById(td.getAttribute("headers"));
            if(th != null){
                td.setAttribute("data-headers", th.textContent);
            	}
        	}        
    	}
		</script>   
		
</div>		
		
	<script type="text/javascript" src="Materialize/js/materialize.min.js"></script>
</body>
</html>