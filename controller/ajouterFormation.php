<?php 


include '../model/formation.php';
$n=0;

$id = Formation::getnbrform();
$n=$id+1;

$f = new Formation($n,$_POST['intt'],$_POST['desc'],$_POST['form'],$_POST['date'],$_POST['nbplace'],0,$_POST['prix'],0,0);

$a = $f->AjouterFormation();


header("Location:../public/index.php");
?>