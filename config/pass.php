<?PHP
$totalResponse = 0;
$totalClick = 0;
if(isset($_SESSION['pass'])){



  if($_SESSION['pass'] != $pass){

    header('Location:login.php');

  }
  $stmt = $DB_con->prepare("SELECT COUNT(`id` ) as count FROM `visitor`;");
  $stmt->execute();

  if($stmt->rowCount()>0) {
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    $totalResponse = $result['count'];
  }

  $stmt = $DB_con->prepare("SELECT count(*) as count FROM `clicks`;");
  $stmt->execute();

  if($stmt->rowCount()>0) {
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    $totalClick = $result['count'];
  }

}else{
  header('Location:login.php');

}

?>
