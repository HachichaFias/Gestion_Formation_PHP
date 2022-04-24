<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo ($titrePage) ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
		<style> 
        /* Modify the background color */ 
          
        .navbar-custom { 
            background-color: 		rgb(119, 13, 0); 
        } 
        /* Modify brand and text color */ 
          
        .navbar-custom .navbar-brand, 
        .navbar-custom .navbar-text { 
            color: #fff; 
        } 
    </style>
	 
</head>
<body class="bg-light" >
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom " >
    <h1 style="color: green;">My Formation<br><h5><br><br>Administrateur</h5>
    __________________________________________________________________________________________________________________________________________________
        
        <a style="text-align: center;" href="index.php?p=deconnexion" >
            <button class="btn btn-outline-danger my-2 my-sm-0" style="color:#fff">Déconnexion</button>
        </a>

    </div>
</nav>
<!-- contenu -->
<div class="container  vng-header vng-header-v3 navbar-custom" id="particles-js">
    <?= $content ?>
</div>




</div>

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
		<script src="particles.js?v=1.9" type="text/javascript" charset="utf-8"></script>	
		<!-- Config for Particles -->
		<script src="particles-conf.js?v=1.9" type="text/javascript" charset="utf-8"></script>
		
			<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.16/moment-timezone-with-data.min.js"></script>

		<script src="aos.js?v=1.9" type="text/javascript" charset="utf-8"></script>
		<script src="lightcase.js?v=1.9" type="text/javascript"></script>

		<!-- APP JS -->
		<script src="app.js?v=1.9" type="text/javascript" charset="utf-8"></script>
</html>