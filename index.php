<?php
require_once "options.php";

if ($_GET["lang"]) {
  $lang = $_GET["lang"];
} elseif ($_COOKIE["lang"]) {
  $lang = $_COOKIE["lang"];
} else {
  $lang = $defualt_lang; // defualt
};

setcookie("lang", $lang);

$name = "site_". $lang .".json";
$string = file_get_contents($name);
$json_a = json_decode($string, true);

$html = file_get_contents("template/index.html");

foreach ($json_a as $key => $value) {
  $html = str_replace("{"."$key"."}", $value, $html);
};

echo $html;
?>