<?php
require_once "../../options.php";

$email_usr = $_COOKIE["email"];
$site_usr = "";
$doc_user = "";

$sql = "INSERT INTO document (doc, email, site) VALUES ('$doc_usr', '$email_usr', '$site_usr')";

$connector = new mysqli($host_db, $login_db, $password_db, $dbname);
if (!$connector->connect_errno) {
      $res = array ('status'=>'error');
      // $res = $connector->connect_errno . " - " . $connector->connect_error;
}

if ($connector->query($sql)) {
      $file = "../";
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename=' . basename($file));
      header('Content-Transfer-Encoding: binary');
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize($file));
      if ($fd = fopen($file, 'rb')) {
        while (!feof($fd)) {
          print fread($fd, 1024);
        }
        fclose($fd);
      }
      exit;
      //$res = array ('status'=>'ok');
} else {
      // $res = $sql;
      $res = array ('status'=>'error');
      // $res  = $connector->errno . " - " . $connector->error;
}


 ?>
