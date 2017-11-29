<?php

require_once "options.php";
$email_usr = $_POST["email"];
$site_usr = "";

$sql = "INSERT INTO email (email, site) VALUES ('$email_usr', '$site_usr')";

$connector = new mysqli($host_db, $login_db, $password_db, $dbname);
if (!$connector->connect_errno) {
      // $res = array ('status'=>'error');
      $res = $connector->connect_errno . " - " . $connector->connect_error;
}

if ($connector->query($sql)) {
      $res = array ('status'=>'ok');
} else {
      // $res = $sql;
      $res = array ('status'=>'error');
      // $res  = $connector->errno . " - " . $connector->error;
}

echo json_encode($res);

 ?>
