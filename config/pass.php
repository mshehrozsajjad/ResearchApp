<?php
$totalResponse = 0;
$totalClick = 0;

if(isset($_SESSION['pass'])){



  if($_SESSION['pass'] == $pass){
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
        echo "<script type='text/javascript'>window.location.href = 'login.php';</script>";

        exit();
  }


}else{
    echo "<script type='text/javascript'>window.location.href = 'login.php';</script>";

  exit();


}

?>
