
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

              
         <br>
             

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
   <table align="center" class="tab" >
       <tr class="grise">
           <th>

    <a href="index.php?p=connexion"><h3><i><b><u> Authentification</u></b></i></h3></a>
    <form class="my-2 my-lg-0 "  method="POST" action="index.php?p=connexion">
    <div class="form-group">
        <input class="form-control mr-sm-2" name="login" type="text" placeholder="login" aria-label="Login">
        <br>
        <input class="form-control mr-sm-2" name="password" type="password" placeholder="Mot de passe" aria-label="Mot de passe">
        <br>
        <div style="color:red"><?php  if (isset($msg)) {echo $msg ; unset($msg);} ?></div>
        <br>
        <p><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Connexion</button></p>
        <br>
    </div>

</form>
<a href="index.php?p=inscription">inscription</a>
    <P> <img <div align="center" src="images/ac1.jpg" class="img2" </div><br></P>
         <br>  </th></tr>

   </table>
</section><br><br><br><br><br><br><br>
<div class="footer">
<a href="https://www.linkedin.com/in/firas-hachicha-0b794b1a9/">Powered By Firas Hachicha</a>

</div>
</body>
</html>