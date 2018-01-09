<?php

require_once  'db.php';

if(isset($_SESSION['pass'])){

  if($_SESSION['pass'] == $pass){

    header('Location:../results/');

  }

}

if(isset($_POST['pass'])){

  if($_POST['pass'] == $pass){
    $_SESSION['pass'] = $_POST['pass'];

    header('Location:../results/');

  }

}else{
  header('Location:../results/login.php');

}


?>
