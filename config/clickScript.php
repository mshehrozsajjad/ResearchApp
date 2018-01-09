<?php
if(isset($_GET['p']) && isset($_GET['t']) ){
  $page = $_GET['p'];
  $typeOfClick = $_GET['t'];
  $linkId = $_GET['l'];

  try
  {
    $stmt = $DB_con->prepare("INSERT into clicks  (`type_id`,`page`,`user_id`, `link_id`) VALUES ( :type , :page , :uid ,:lid ); ");
    $stmt->bindparam(":type", $typeOfClick);
    $stmt->bindparam(":page", $page);
    $stmt->bindparam(":uid", $userId);
    $stmt->bindparam(":lid", $linkId);
    $stmt->execute();

    //echo "Hogya";
  }
  catch(PDOException $e)
  {
    //echo $e->getMessage();
  }


}



?>
