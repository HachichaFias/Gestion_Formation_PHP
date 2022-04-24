<?php
 if (!isset($_SESSION['user']))
{ 
    header("Location:../public/index.php");
}
?>
<?php 
include '../model/formation.php';
$r = Formation::deleteFormation($_GET['id']);


header("Location:../public/index.php");
?>