<?php
 if (!isset($_SESSION['user']))
{ 
    header("Location:../public/index.php");
}
?>
<?php
include_once("myparam.inc.php");
class Formation{
 
  
  private $data = array();
  function __construct($id,$int,$desc,$frns,$dt,$nbp,$nbr,$prix,$sc,$nbsc){
    $this->id = $id;
    $this->intitule=$int;
      $this->DescriptionFormation=$desc;
      $this->NomF=$frns;
      $this->prix=$prix;
      $this->Date=$dt;
      $this->NombrePlace=$nbp;
      $this->NombreResv=$nbr;
      $this->Score=$sc;
      $this->nbScore=$nbsc;
      
     
  }public function __toString() {
    $nb = $this->NombrePlace -$this->NombreResv;
    if($nb<0) $nb=0;
    $s = "<td><a href ='../public/index.php?p=formation&f=".$this->id ."'>$this->intitule</a></td><td>$this->DescriptionFormation</td><td>$this->NomF</td><td>  $this->Date</td><td>$this->prix</td><td>  $nb </td><td>  $this->Score</td>";
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
    public function AjouterFormation(){  
 

include_once("myparam.inc.php");


$conn = new mysqli(MYHOST,MYUSER,MYPASS,"projet");
if ($conn->connect_error) 
{
die("Oups!! la connexion a échoué: " . $conn->connect_error);
} 

$stmt = $conn->prepare("INSERT INTO `formation` (`id`, `intitule`, `formateur`, `description`, `date`, `nbPlace`
, `nbReservation`, `prix`, `score`, `nbScore`) VALUES (?, ?, ?, ?,?, ?, 0, ?,0, 0);");
$stmt->bind_param("sssssid", $this->id, $this->intitule,$this->NomF,$this->DescriptionFormation,$this->Date,$this->NombrePlace,$this->prix);
$stmt->execute();
$conn->close();
    }
    
public static function deleteFormation($idf)
    {include_once("myparam.inc.php");
    

$conn = new mysqli(MYHOST,MYUSER,MYPASS,"projet");
if ($conn->connect_error) 
{
die("Oups!! la connexion a échoué: " . $conn->connect_error);
} 
        $req = "DELETE FROM formation WHERE id = ".$idf;
        if ($conn->query($req) === TRUE) {
            
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        $conn->close();
    }


    public static function getList()
  {include_once("myparam.inc.php");
  
    $conn = new mysqli(MYHOST,MYUSER,MYPASS,"projet");
    if ($conn->connect_error) 
{
die("Oups!! la connexion a échoué: " . $conn->connect_error);
} 
    $forms = array();

    $req = "SELECT * FROM formation";
        $result = $conn->query($req);

    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_array(MYSQLI_NUM)) 
        {
            $a=new Formation($row[0],$row[1],$row[3],$row[2],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9]);
            $forms[] =  $a ;
 
        }

    return $forms;
  }

}
public static function getFormation($id)
  {include_once("myparam.inc.php");
  
    $conn = new mysqli(MYHOST,MYUSER,MYPASS,"projet");
    if ($conn->connect_error) 
{
die("Oups!! la connexion a échoué: " . $conn->connect_error);
} 
  

    $req = "SELECT * FROM formation where id = ".$id."";
        $result = $conn->query($req);

    if ($result->num_rows > 0) 
    {
        if($row = $result->fetch_array(MYSQLI_NUM)) 
        {
            $a=new Formation($row[0],$row[1],$row[3],$row[2],$row[4],$row[5],$row[6],$row[7],$row[8],$row[9]);
            return  $a ;
 
        }

    
  }

}


public function Rating($sc,$nsc){  
 

    include_once("myparam.inc.php");
    
    
    $conn = new mysqli(MYHOST,MYUSER,MYPASS,"projet");
    if ($conn->connect_error) 
    {
    die("Oups!! la connexion a échoué: " . $conn->connect_error);
    } 
    
    $req = "update  `formation` SET score='".$sc."',nbScore='".$nsc."'
        where id = '".$this->id."'";

    $result = $conn->query($req);
    $conn->close();
        }

public static function getnbrform()
  {include_once("myparam.inc.php");
    $db_username = MYUSER;
    $db_password = MYPASS;
    $db_name     = 'projet';
    $db_host     = MYHOST;
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    
    
  
        $requete = "SELECT count(*) FROM Formation ";
  $exec_requete = mysqli_query($db,$requete);
  $reponse      = mysqli_fetch_array($exec_requete);
  $count = $reponse['count(*)'];
  return $count;
    
   
  

  }
  
  
  public static function setnbrResv($f)
  {include_once("myparam.inc.php");
    include_once("formation.php");

$conn = new mysqli(MYHOST,MYUSER,MYPASS,"projet");
if ($conn->connect_error) 
{
die("Oups!! la connexion a échoué: " . $conn->connect_error);
} 
      $req = "update formation set nbReservation=(SELECT count(*) FROM Reservation where etat=1 and 	id_formation=".$f.") ";
      $result = $conn->query($req);
      if ($conn->query($req) === TRUE) {
     
     
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
  }

  }
			?>