<?php
 //require C_ROOT . '/model/reservation.php';
  
  include '../model/Reservation.php';
  $r=0;
  $id = Reservation::getnbrResv();
 $r = $id+1;
  Reservation::ConfirmerResv($_GET['f'],$_GET['u']);
  
  header("Location:../public/index.php");
?>