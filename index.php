<?php
require("setup.php");
?>
<html>
   <head>
      <link rel="stylesheet" href="assets/css/main.css" />
      <title>Welcome to my website</title>
   </head>
   <body>
      <header>
         <div id="logo">
            MySite
         </div>
         <ul class="navTop">
            <?php
               if(isset($_SESSION["user"])){
               ?>
                  <li>
                     <a href="profile.php"><?php echo $_SESSION["user"]["nom"] ?></a>
                  </li>
                  <li>
                     <a href="index.php?logout">Se déconnecter</a>
                  </li>
               <?php
               }else{
               ?>
                  <li>
                     <a href="inscription.php">Inscription</a>
                  </li>
                  <li>
                     <a href="connexion.php">Connexion</a>
                  </li>
               <?php
               }
            ?>
         </ul>
      </header>
      <?php
         if(isset($_SESSION["user"])){
            echo "<nav class='sideBar'></nav>";
         }
       ?>
      <section>
         <?php
         if(isset($_SESSION["user"])){
            ?>
               <form class="addPost" action="addPost.php" method="POST">
                  <textarea name="textPost"></textarea>
                  <button name="sendTextPost" type="submit">Envoyer</button>
               </form>
            <?php
         }
         ?>
      </section>
      <footer>
         <a target="_blank" href="https://github.com/blocus/AJST_Activite_php">Lien GitHub</a>
      </footer>
   </body>
</html>
