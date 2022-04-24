    <!DOCTYPE HTML>

<html>

	<head>
	  <title>Insription</title>
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
	
		<a href="index.php">ACCUEIL</a>
		
		<h1>INSCRIPTION</h1>

		<hr size="50" color="landscape">
        <center>
			
			<?php if(isset($_POST['login']))
					include("traitement/traiInscrire.php");
					echo '<br>';
			?>
            <h3>* = Champ obligatoire</h3>
    		<form method="POST" action="traiInscrire.php">

    			<label for="login" class="identifie"> Login* </label><br>
                <input type="text" name="login" id="" placeholder="Ex:20160001" size="80%" autofocus maxlength="20" required><br/><br>

    			<label for="nom" class="identifie"> Nom* </label><br>
                <input type="text" name="nom" id="nom" placeholder="Ex:kouadio"size="80%" required><br/><br>

    			<label for="cin" class="identifie"> Cin* </label> <br>
                <input type="text" name="cin" id="cin" placeholder="Ex:kevin"size="80%" required ><br/><br>

    			<label for="email" class="identifie"> Email </label><br>
                <input type="email" name="email" id="email"placeholder="Ex:kevin@gmail.com"size="80%"><br/><br>

    			<label for="role" class="identifie">role </label><br>
                <input type="tel" name="role" id="telephone" placeholder="Ex:05421451" size="80%" required><br/><br>
               
                <label for="password" class="identifie">password </label><br>
                <input type="tel" name="password" id="telephone" placeholder="Ex:05421451" size="80%" required><br/><br>

               
    		  

                    
                    <div class="liste">
                        <label for="naissance">Date de naissance*</label><br>
                        <input type="date" name="naissance" id="naissance" placeholder="Ex:AA-MM-JJ">
                    </div>
                

                

    			


    			<p><input type="submit" value="  Valider " class="envoie">

    			<input type="reset" value="Mettre à zero" class="envoie"></p>

    	 	<form>
        </center>

    </div>
</body>
 </html>