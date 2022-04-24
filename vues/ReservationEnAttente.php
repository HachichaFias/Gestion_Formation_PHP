<?php
 if (!isset($_SESSION['user']))
{ 
    header("Location:../public/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/sos.css" />
   
    <meta charset="UTF-8">
    <title>My Formation </title>
</head>
<body>
<div class="imZ" </div>
<header>
   <div class="img4"></div>

      <img <div align="left" src="images/loo.jpg" class="img1" width=40px height=10px></div></th>

            

       


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</ul>
</nav>
</header>
<br>

<section align="center" >
   <table align="center" class="tab" border="1" >
      <tr style="color: red;" class="grise">
      <td>id Reservation</td><td>User Name</td><td>id formation </td><td>Nombre de places disponibles</td><td>etat</td>
       </tr>
      
     

      <?php
       require  C_ROOT . '/model/Bdd.php';
         require C_ROOT . '/model/Reservation.php';
    require C_ROOT . '/model/formation.php';
     $f = new Formation(null,null,null,null,null,null,null,null,null,null,null);

     
     $list = Reservation::getALLReservasion($_GET['f']);
     
     foreach($list as $value ){
         
        $etat = $value->etat;
        if($value->nbr>0)
         $html =  "<a href = '../Controller/ConfirmerReservation.php?p=ConfirmerReservation&f=".$value->id_formation."&u=".$value->login."'>Confirmer la  Reservation</a>";
        else 
        $html = "Formation pleine";

         echo "<tr class='grise'>".$value."<td>$value->nbr</td><td> $html</td></tr>";
      
      
       
   
    }
      ?>

    

    
         <br>  </th>

   </table>
</section><br><br><br><br><br><br><br>
</body>
</html>