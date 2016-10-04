<?php

// Connection à la Base de Données (via PDO)
	$pdo_hostname	= 'localhost'; 	// voir hébergeur ou "localhost" en local
	$pdo_database	= 'AppliPompe'; 		// nom de la BdD
	$pdo_username	= 'root'; 		// identifiant "root" en local
	$pdo_password	= 'root'; 			// mot de passe (vide en local)
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

$application = $_POST['application1'];
$typepompe = $_POST['type_pompe'];
$alimentation = $_POST['alimentation'];

$req = $bdd->prepare('SELECT nom FROM pompe WHERE application1 = ? AND type_pompe = ? AND alimentation = ?');

$req->execute(array($_GET['application1'], $_GET['type_pompe'], $_GET['alimentation']));

if(isset($application AND $typepompe AND $alimentation)){
    header('Location:result.php');
}

?>