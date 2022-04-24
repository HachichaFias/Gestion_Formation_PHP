<?php
 if (!isset($_SESSION['user']))
{ 
    header("Location:../public/index.php");
}
?>
<!DOCTYPE HTML>

<html>

	<head>
	  <title>Ajouter Formation</title>
	  <meta charset="utf-8"/>
      <style>
         .bloc_page
         {
             margin: auto;
             width:900px;

         }

         input
         {
             height: 20px;
         }
         h1
         {
             text-align: center;

         }
         center
         {
            /* border: 10px ridge #2421CC;
             border-radius: 20px 20px 20px 20px;
             box-shadow : 6px 6px 12px blue;*/
             position:relative;

         }

        .identifie
        {
            position:absolute;
            left:200px;
        }
        .envoie
        {
            height: 40px;
            width: 150px;
        }
        .liste
        {
            display:inline-block;
            margin-right:20px;
        }
		
		a
		{
			font-style: italic;
			font-size: x-large;
		}

      </style>
	</head>

<body>
	
    <div class="bloc_page">
	
		<a href="../public/index.php">ACCUEIL</a>
		
		<h1>Ajouter Formation</h1>

		<hr size="50" color="red">
        <center>
			
		
            <h3>* = Champ obligatoire</h3>
    		<form method="POST" action="../controller/ajouterFormation.php">

    		
    			<label  class="identifie"> intitulé* </label><br>
                <input type="text" name="intt"  size="80%" required><br/><br>

    			<label class="identifie">formateur* </label> <br>
                <input type="text" name="form" size="80%" required ><br/><br>

    			<label  class="identifie"> description </label><br>
                <input type="" name="desc" size="80%"><br/><br>

                <div class="liste">
                        <label for="naissance">Date</label><br>
                        <input  type="date" name="date"  placeholder="Ex:AA-MM-JJ">
                    </div>
                    <br><br>

            	<label  class="identifie">nbPlace </label><br>
                <input type="float" name="nbplace" size="80%" required><br/><br>
               
                <label  class="identifie">prix </label><br>
                <input type="float" name="prix" size="80%" required><br/><br>
               

    			<p><input type="submit" value="  Valider " class="envoie">

    			<input type="reset" value="Mettre à zero" class="envoie"></p>

    	 	<form>
        </center>

    </div>
</body>
 </html>