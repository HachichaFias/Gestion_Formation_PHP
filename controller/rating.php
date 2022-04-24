<?php

include '../model/formation.php';
$f = Formation::getFormation($_GET['f']);

echo $f;
//score = (nbScore *score + newScore)/(nbScore + 1) 
?>