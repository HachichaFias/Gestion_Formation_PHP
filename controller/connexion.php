<?php



if (isset ($_POST['login']) && $_POST['password'] ){
    require C_ROOT.'/model/utilisateurManager.php';
    require  C_ROOT . '/model/Bdd.php';
    $data = array(
        'login' => $_POST['login'] ,
        'm2p'   => $_POST['password']
    );
    $res = utilisateurManager::authentification($data);
    if($res) // nom d'utilisateur et mot de passe correctes
        {   $estAdmin = utilisateurManager::getInfosUser($_POST['login']);
            $_SESSION['user'] = $_POST['login'] ;
            
            if ($estAdmin=="1"){
                $_SESSION['admin'] = true;
            }else{
            }
           header( 'Location: index.php');
        }
        else
        {
            $msg= 'Login ou mot de passe incorrect';
            require C_ROOT . '/vues/home.php';
         // header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    { $msg= 'Login ou mot de passe incorrect';
        require C_ROOT . '/vues/home.php';
      // header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }



