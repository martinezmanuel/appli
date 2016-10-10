<!DOCTYPE html>
<html lang="fr">
<head>
	 <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Css Materialize -->
	<link type="text/css" rel="stylesheet" href="Materialize/css/materialize.min.css"  media="screen,projection"/>

	<link type="text/css" rel="stylesheet" href="Materialize/css/style.css"/>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta charset="UTF-8">
	<title>Résultat de recherche</title>
</head>
<body>
	<h1> Résultat de votre recherche </h1>
	<?php
	// Connection à la Base de Données (via PDO)
	$pdo_hostname	= 'localhost'; 	// voir hébergeur ou "localhost" en local
	$pdo_database	= 'AppliPompe'; 		// nom de la BdD
	$pdo_username	= 'root'; 		// identifiant "root" en local
	$pdo_password	= 'root'; 			// mot de passe 
// ------------------------
	try {
    $pdo_connect_bd = 'mysql:host='.$pdo_hostname.';dbname='.$pdo_database.'';
    $pdo_extra_params = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"	// encodage UTF-8
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,		// rapport d'erreurs sous forme d'exceptions
		PDO::ATTR_PERSISTENT => true, 						// Connexions persistantes
		);
    $pdo = new PDO($pdo_connect_bd, $pdo_username, $pdo_password, $pdo_extra_params); // instancie la connexion
	}
	catch(PDOException $e) {
    $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
	}
	// lancement de la requête (on impose aucune condition puisque l'on désire obtenir la liste complète des propriétaires
	$sql = 'SELECT * FROM pompe WHERE application1 = ? AND type_pompe = ? AND alimentation = ?';

	// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
	$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

	//déclaration de mes variables
	$application = $_POST['application1'];

	$typepompe = $_POST['type_pompe'];

	$alimentation = $_POST['alimentation'];

	// on va scanner tous les tuples un par un
	while ($data = mysql_fetch_array($req)) {
	// on affiche les résultats
	echo 'liquide : '$data['application1']'<br />';
	echo 'type de pompe: '.$data['type_pompe'].'<br />';
	echo 'alimentation:'.$data['alimentation'].'<br />';
	}
	mysql_free_result ($req);
	mysql_close ();
	?>
	<script type="text/javascript" src="Materialize/js/materialize.min.js"></script>
</body>
</html>