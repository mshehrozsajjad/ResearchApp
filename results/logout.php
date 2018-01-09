<?php
require_once '../config/db.php';

unset($_SESSION['pass']);
 session_destroy();
header('Location:../results/');

?>
