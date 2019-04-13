<?php
session_start();
$config = array(
   "host" => "127.0.0.1",
   "user" => "ajst",
   "pass" => "ajst",
   "name" => "ajst"
);

$dbc = mysqli_connect($config["host"], $config["user"], $config["pass"], $config["name"]);
if(isset($_GET['logout'])){
   session_destroy();
   header('Location: index.php');

}
?>
