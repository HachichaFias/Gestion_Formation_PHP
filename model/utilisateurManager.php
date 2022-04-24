<?php


class utilisateurManager
{

    public static  function ajouterUtilisateur($donneesUser){
        $bdd = Bdd::getPDO()->prepare('insert into utilisateur values (:login , :password , :nom, :cin, :date_naiss, :email , 0)');
 
     
        $bdd->execute($donneesUser);

    }

    public static function authentification($data)
    {
        $req = Bdd::getPDO()->prepare('select * from utilisateur where login = :login ');
        $req->bindParam('login', $data['login']);
        $req->execute();
 
      
        $res = $req->fetch(PDO::FETCH_OBJ);
        if ($res != null) {

           if($data['m2p'] == $res->password) {
                return true;
            }
            return false;

        }
      
    }


   
    

    public static function getInfosUser($login){
        $req = Bdd::getPDO()->prepare('select role from utilisateur where login = :login ');
        $req->bindParam('login', $login);
        $req->execute();
        $res = $req->fetchAll(\PDO::FETCH_ASSOC);
        $l = $res[0]["role"];
        return $l;
        
        
        
       
    }
    public static function updateInfosPersoUser($data){
        $req = Bdd::getPDO()->prepare('update  utilisateur set nom = :nom , prenom = :prenom , mail = :mail where login = :login ');
        $req->execute($data);
    }
    public static function updateM2pUser($data){
        $req = Bdd::getPDO()->prepare('update  utilisateur set m2p = :m2p where login = :login ');
        $req->execute($data);
    }
}