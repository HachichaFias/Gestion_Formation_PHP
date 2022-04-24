<?php
 if (!isset($_SESSION['user']))
{ 
    header("Location:../public/index.php");
}
?>

<html>
    <title>Formation</title>
    <style>
 body {
  background-color: lightblue;
}
</style>
<body>
<table style="color: white;  ;" border="1">
<?php 
 require  C_ROOT . '/model/Bdd.php';
 require C_ROOT . '/model/Reservation.php';
require C_ROOT . '/model/formation.php';
 $f = Formation::getFormation($_GET['f']);



echo "<tr><td>id</td><td>".$f->id."</td></tr>
<tr><td>intitulé</td><td>".$f->intitule."</td></tr>
<tr><td>formateur</td><td>".$f->NomF."</td></tr>
<tr><td>description</td><td>".$f->DescriptionFormation."</td></tr>
<tr><td>date</td><td>".$f->Date."</td></tr>
<tr><td>nbPlace</td><td>".$f->NombrePlace."</td></tr>
<tr><td>nbReservation</td><td>".$f->NombreResv."</td></tr>
<tr><td>prix</td><td>".$f->prix."</td></tr>
<tr><td>score</td><td>".$f->Score."</td></tr>
<tr><td>nbScore</td><td>".$f->nbScore."</td></tr>
"
;
if(isset($_POST['rate'])){//score = (nbScore *score + newScore)/(nbScore + 1) 
$r=0;
$r += ($f->nbScore*$f->Score+$_POST['rate'])/($f->nbScore+1);
echo $r;
echo $f->id;
 $f->Rating($r,$f->nbScore+1);
 header( 'Location: index.php');
}

?>
</table>
<br><br>

<form style="color: wheat;" method="POST" >

<input type="radio" id="0" name="rate" value="0" checked>
<label for="male">0</label><br>
<input type="radio" id="1" name="rate" value="1">
<label for="male">1</label><br>
<input type="radio" id="2" name="rate" value="2">
<label for="male">2</label><br>
<input type="radio" id="3" name="rate" value="3">
<label for="male">3</label><br>
<input type="radio" id="4" name="rate" value="4">
<label for="male">4</label><br>
<input type="radio" id="5" name="rate" value="5">
<label for="male">5</label><br>
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Valider</button></p>
</form> 
</body>
</html>