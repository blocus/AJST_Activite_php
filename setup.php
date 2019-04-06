<?php
session_start();
//                    host         user    pass    db
$dbc = mysqli_connect("localhost", "ajst", "ajst", "ajst");
if(isset($_GET['logout'])){
   session_destroy();
   header('Location: index.php');

}
?>
