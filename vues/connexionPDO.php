<?php
 if (!isset($_SESSION['user']))
{ 
    header("Location:../public/index.php");
}
?>
<?php
define("MYHOST","localhost");
define("MYUSER","root");
define("MYPASS","");
//Inclusion des paramètres de connexion
//Connexion au serveur
$db = new mysqli(MYHOST,MYUSER,MYPASS,"projet");
//Affichage d'un message en cas d'erreurs
if ($db->connect_error) {
die("Connection failed: " . $db->connect_error);
}





?> 
