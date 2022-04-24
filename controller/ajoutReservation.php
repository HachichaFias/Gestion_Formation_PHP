<?php
 //require C_ROOT . '/model/reservation.php';
  $r=0;
  include '../model/Reservation.php';
  $id = Reservation::getnbrResv();
 $r = $id+1;
  $res = new Reservation( $r,0,$_GET['u'],$_GET['f']);
  $res->AjouterReservation();
  
  header("Location:../public/index.php");
?>