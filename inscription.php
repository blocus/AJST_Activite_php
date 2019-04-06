<?php
require("setup.php");
if(isset($_SESSION["user"])){
   header('Location: index.php');
}

if(isset($_POST["insc"])){
   $nom = $_POST["nom"];
   $prenom = $_POST["prenom"];
   $email = $_POST["email"];
   $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
   $sexe = $_POST["sexe"];

   $sql = "SELECT count(*) as nb FROM user WHERE email = '$email'";
   $rep = $dbc->query($sql);
   $rep = $rep->fetch_assoc();

   if($rep["nb"] == 0){
      $sql = "INSERT INTO user
              VALUES(NULL, '$nom', '$prenom', '$email', '$password', '$sexe')
             ";
      $dbc->query($sql);
      echo "vous êtes inscrit";
   }else{
      echo "Vous êtes déja inscrit";
   }
}else{
?>
<form action="#" method="POST">
   <input type="text" name="nom" placeholder="Nom" required/><br>
   <input type="text" name="prenom" placeholder="Prénom" required/><br>
   <input type="email" name="email" placeholder="E-mail" required/><br>
   <input type="password" name="password" placeholder="Mot de Passe" required/><br>
   Sexe : <br />
   H : <input type="radio" name="sexe" value="H" required/><br>
   F : <input type="radio" name="sexe" value="F" required/><br>
   <input type="submit" name="insc" value="S'inscrire"/><br>
</form>
<a href="/">Retour</a>
<?php
}
 ?>
