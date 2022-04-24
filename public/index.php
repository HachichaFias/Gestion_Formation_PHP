<?php

define('C_ROOT', dirname(__DIR__));
if(!isset($_SESSION)) 
{ 
    session_start(); 
}

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}

if (isset($_SESSION['user']) && isset($_SESSION['admin'])) { //Administrateur
    ob_start();
    if ($p === 'home') {
        $titrePage = "Page d'accueil";
       require C_ROOT . '/vues/homeAdmin.php';
    } else if ($p === 'deconnexion') {
        require C_ROOT . '/controller/dexonnexion.php';}
        else if ($p === 'reserve') {
            require C_ROOT . '/vues/ReservationEnAttente.php';}
            else if ($p === 'supprimer') {
                require C_ROOT . '/controller/supprimerForm.php';}
                else if ($p === 'ConfirmerReservation') {
                    require C_ROOT . '/controller/ConfirmerReservation.php';}

                    else if ($p === 'ajouterForm') {
                        require C_ROOT . '/vues/ajouterForm.php';}
                    

        $content = ob_get_clean();
        require C_ROOT . '/vues/templates/default_admin.php';
       
        

} else if (isset($_SESSION['user'])) {        //Utilisateur connecté
    ob_start();
    if ($p === 'home') {
        $titrePage = "Page d'accueil";
        require C_ROOT . '/vues/homeUser.php';  }
    else if ($p === 'deconnexion') {
     require C_ROOT . '/controller/dexonnexion.php';}
    else if ($p === 'ajoutReservaion') {
     require C_ROOT . '/controller/ajoutReservaion.php';}
    else if ($p === 'formation') {
    require C_ROOT . '/vues/DescriptionFormation.php';}
  
        $content = ob_get_clean();
        require C_ROOT . '/vues/templates/default_user.php';
        
    
    
} else {
    //VISITEUR SIMPLE
    ob_start();
    if ($p == 'home') {
        $titrePage = "Page d'accueil";
require C_ROOT . '/vues/home.php';


    } 
    else if ($p === 'connexion') {
        $titrePage = "Connexion";
        require C_ROOT . '/controller/connexion.php';
    }
    else if ($p === 'inscription') {
        $titrePage = "Inscription";
        require C_ROOT . '/vues/inscription.php';
    }
    else if ($p === 'inscrire') {
        $titrePage = "Inscription";
        require C_ROOT . '/controller/traitementInscription.php';
    } else if ($p === 'deconnexion') {
        $titrePage = "deconnexion";
        require C_ROOT . '/controller/dexonnexion.php';
    } 


}

?>