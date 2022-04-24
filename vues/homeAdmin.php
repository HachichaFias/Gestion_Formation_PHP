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

            

       



</header>
<br><br><br>

<section align="center" >
   <table align="center" class="tab" border="1" >
      <tr style="color: red;" class="grise">
      <td>L’intitulé de la formation </td><td>Nombre de place total </td><td>Le nombre de réservations confirmées</td><td>Le nombre de réservation en attentes</td><td>Supprimer</td>
      </tr>
      
     

      <?php
       require  C_ROOT . '/model/Bdd.php';
         require C_ROOT . '/model/Reservation.php';
    require C_ROOT . '/model/formation.php';
     $f = new Formation(null,null,null,null,null,null,null,null,null,null,null);
     $r = new Reservation(null,null,null,null);
     
      $res = $f->getList();
     $x=0;
     foreach($res as $value ){
         $x=$value->NombreResv;
        
        echo "<tr style='color: black;' class='grise'><td>".$value->intitule."</td><td>".$value->NombrePlace."</td><td>".$x."</td><td> <a href = '../public/index.php?p=reserve&f=".$value->id."'>". Reservation::getnbrResvAtt($value->id)."</a></td><td><a href = '../public/index.php?p=supprimer&id=".$value->id."'>supprimer</a></td></tr>";
   
    }
      ?>

    

    
         <br>  </th>

   </table>
   <br><br>
   <p><a href="../public/index.php?p=ajouterForm"><button class="btn btn-outline-success my-2 my-sm-0"   >ajouter nouvelle formation</button></a></p>
   
</section><br><br><br><br><br><br><br>
</body>
</html>