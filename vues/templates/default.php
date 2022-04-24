<!DOCTYPE html>
<html lang="fr">


 

<head>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo ($titrePage) ?></title>

	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<style> 
        /* Modify the background color */ 
          
        .navbar-custom { 
            background-color: #191970
			; 
        } 
        /* Modify brand and text color */ 
          
        .navbar-custom .navbar-brand, 
        .navbar-custom .navbar-text { 
            color: #fff; 
        
		} 
		.navbar .navbar-nav > li .navbar-item ,
.navbar .navbar-brand{
                       color: #fff; }
		
    </style>
	
</head>
<body class="bg-light"  >
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom  ">
    <a class="navbar-brand" href="index.php">Best Bidding</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent ">
        <ul class="navbar-nav mr-auto ">
            <li class="nav-item " >
                <a class="nav-link " href="index.php?p=produits"  style="color:#fff ">Produits <span class="sr-only" >(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=categorie" style="color:#fff " >Catégories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=inscriptionUser" style="color:#fff " >S'inscrire</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=search" style="color:#fff " >Rechercher</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0"  method="POST" action="index.php?p=connexion">
            <div class="form-group">
                <input class="form-control mr-sm-2" name="log" type="text" placeholder="login" aria-label="Login">
                <input class="form-control mr-sm-2" name="m2p" type="password" placeholder="Mot de passe" aria-label="Mot de passe">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Connexion</button>
            </div>

        </form>

    </div>
</nav>	

<!-- contenu -->

</div>


<div  class="container vng-header vng-header-v3  navbar-custom" id="particles-js">
    <?=$content ?>
</div>






<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

	


</body>
	<script src="particles.js?v=1.9" type="text/javascript" charset="utf-8"></script>



		<!-- Config for Particles -->
		<script src="particles-conf.js?v=1.9" type="text/javascript" charset="utf-8"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.16/moment-timezone-with-data.min.js"></script>

		<script src="aos.js?v=1.9" type="text/javascript" charset="utf-8"></script>
		<script src="lightcase.js?v=1.9" type="text/javascript"></script>

		<!-- APP JS -->
		<script src="app.js?v=1.9" type="text/javascript" charset="utf-8"></script>
	
</html>