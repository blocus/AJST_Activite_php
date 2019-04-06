<?php
require("setup.php");
if(isset($_SESSION["user"])){
   ?>
   <a href="index.php?logout">Se déconnecter</a>
   <?php
}else{
   ?>
   <a href="inscription.php">inscription</a><br />
   <a href="connexion.php">connexion</a>
   <?php
}
?>
