<?php
require("setup.php");
if(!isset($_SESSION["user"])){
   if(isset($_POST["connect"])){
      $email = $_POST["email"];
      $password = $_POST["password"];
      $sql = "SELECT * FROM user WHERE email='$email'";
      $rep = $dbc->query($sql);
      $nb = $rep->num_rows;
      if ($nb == 1){
         $user = $rep->fetch_assoc();
         $passDB = $user["password"];
         if(password_verify($password, $passDB)){
            $_SESSION["user"] = $user;
            header('Location: index.php');
         }else{
            echo "erreur de connexion";
         }
      }else{
         echo "erreur de connexion";
      }
   }else{
   ?>
   <form action="#" method="POST">
      <input type="email" name="email" placeholder="E-mail" required/><br>
      <input type="password" name="password" placeholder="Mot de Passe" required/><br>
      <input type="submit" name="connect" value="S'inscrire"/><br>
   </form>
   <?php
   }
}else{
   header('Location: index.php');
}

?>
