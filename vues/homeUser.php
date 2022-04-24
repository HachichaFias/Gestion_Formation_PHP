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
      <td>intitulé de la formation</td><td>DescriptionFormation</td><td>Nom du formateur </td><td>Date</td><td>Prix</td><td>Nombre de places disponibles</td><td>Score</td>
      <td>etat</td> </tr>
      
     

      <?php
       require  C_ROOT . '/model/Bdd.php';
         require C_ROOT . '/model/Reservation.php';
    require C_ROOT . '/model/formation.php';
     $f = new Formation(null,null,null,null,null,null,null,null,null,null,null);
     $r = new Reservation(null,null,null,null);
     
      $res = $f->getList();
     
     foreach($res as $value ){
         
        $etat = $r->getReservasion($value->id,$_SESSION['user']);
        if( $etat== "0") 
        { $html =  "<a href = '../Controller/ajoutReservation.php?p=ajoutReservaion&f=".$value->id."&u=".$_SESSION['user']."'>ajouter Reservation</a>";
         echo "<tr class='grise'>".$value."<td>".$html."</td></tr>";
      }
 
      
        else if ($etat == "1")
        {
            $html =  "En attente";
            echo "<tr class='grise'>".$value."<td>".$html."</td></tr>";
        }
        
        else  {
            $html =  "Réservation confirmée";
            echo "<tr class='grise' '>".$value."<td style='color:green'>Réservation confirmée</td></tr>";
        }
   
    }
      ?>

    

    
         <br>  </th>

   </table>
</section><br><br><br><br><br><br><br>
</body>
</html>