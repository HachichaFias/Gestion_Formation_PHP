<?php
 if (!isset($_SESSION['user']))
{ 
    header("Location:../public/index.php");
}
?>
<?php
include_once("myparam.inc.php");
class Reservation{
 
  
  private $data = array();
  function __construct($id,$int,$login,$frns){
    $this->id = $id;
    $this->etat=$int;
      $this->login=$login;
      $this->id_formation=$frns;
      
      
  }public function __toString() {
    $nb = $this->NombrePlace -$this->NombreResv;
    if($nb<0)
    $nb=0;
    $s = "<td>$this->id </td><td> $this->login</td><td>  $this->id_formation</td>";
    return $s;
  }
  public function __get($attr) {
    if (!isset($this->$attr)) return "erreur";
    else return ($this->$attr);}
    public function __set($attr,$value) {
    $this->$attr = $value; }
    public function __isset($name) {
        return isset($this->data[$name]);
    }

    public static function create($id,$int,$login,$frns) {
      return new self($id,$int,$login,$frns);
  }

  public function setNombreResv($nbr) {
      $this->nbr = $nbr;
      return $this;
  }
    public function AjouterReservation(){  
 

include_once("myparam.inc.php");


$conn = new mysqli(MYHOST,MYUSER,MYPASS,"projet");
if ($conn->connect_error) 
{
die("Oups!! la connexion a échoué: " . $conn->connect_error);
} 

$req = "INSERT INTO `Reservation` (`id`, `etat`, `login`, `id_formation`) 
    VALUES ('".$this->id."', '".$this->etat."', '".$this->login."', '".$this->id_formation."' )        ;";
$result = $conn->query($req);
$conn->close();
    }
    


    public static function ConfirmerResv($f,$u)
    {include_once("myparam.inc.php");
      include_once("formation.php");

$conn = new mysqli(MYHOST,MYUSER,MYPASS,"projet");
if ($conn->connect_error) 
{
die("Oups!! la connexion a échoué: " . $conn->connect_error);
} 
        $req = "UPDATE `reservation` SET etat = 1 WHERE `login` = '".$u."' and id_formation = ".$f;
        $result = $conn->query($req);
        if ($conn->query($req) === TRUE) {
          $conn->close();
          Formation::setnbrResv($f);
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }







    public static function getReservasion($f,$u)
  {include_once("myparam.inc.php");
  
    $conn = new mysqli(MYHOST,MYUSER,MYPASS,"projet");
    if ($conn->connect_error) 
{
die("Oups!! la connexion a échoué: " . $conn->connect_error);
} 
$sql = "SELECT etat FROM Reservation where  id_formation ='".$f."' and login = '".$u."'";

    if ($result = $conn->query($sql)) {
        if($obj = $result->fetch_object()){
           if($line=$obj->etat==0)
           return 1;
           return 2;
        }
    }
   
  

  return 0;
  }
  public static function getAllReservasion($f)
  {include_once("myparam.inc.php");
  
    $conn = new mysqli(MYHOST,MYUSER,MYPASS,"projet");
    if ($conn->connect_error) 
{
die("Oups!! la connexion a échoué: " . $conn->connect_error);
} 
$req = "SELECT reservation.*,formation.nbPlace,formation.nbReservation FROM reservation,formation where etat =0 and  formation.id=reservation.id_formation and formation.id=".$f;
        $result = $conn->query($req);
   $allr = array();
   $cal = 0;
      while($row = $result->fetch_array(MYSQLI_NUM)) 
      {   
        $a=new Reservation($row[0],$row[1],$row[2],$row[3]);
        $cal = $row[4]-$row[5];
        $a= Reservation::create($row[0],$row[1],$row[2],$row[3],$cal)->setNombreResv($cal);
    
        $allr[]=  $a;

      }

  return $allr;
    
  
  }
  public static function getnbrResv()
  {include_once("myparam.inc.php");
    $db_username = MYUSER;
    $db_password = MYPASS;
    $db_name     = 'projet';
    $db_host     = MYHOST;
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    
    
  
        $requete = "SELECT count(*) FROM Reservation ";
  $exec_requete = mysqli_query($db,$requete);
  $reponse      = mysqli_fetch_array($exec_requete);
  $count = $reponse['count(*)'];
  return $count;
    
   
  


  }
  public static function getnbrResvAtt($f)
  {include_once("myparam.inc.php");
    $db_username = MYUSER;
    $db_password = MYPASS;
    $db_name     = 'projet';
    $db_host     = MYHOST;
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
        $requete = "SELECT count(*) FROM Reservation where etat = 0 and id_formation= ".$f ;
  $exec_requete = mysqli_query($db,$requete);
  $reponse      = mysqli_fetch_array($exec_requete);
  $count = $reponse['count(*)'];
  return $count;
    
   
  


  }
}
			?>