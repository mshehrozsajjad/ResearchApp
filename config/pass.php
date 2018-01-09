<?PHP
if(isset($_SESSION['pass'])){

  if($_SESSION['pass'] != $pass){

    header('Location:login.php');

  }

}else{
  header('Location:login.php');

}


?>
