<pre>
<?php
require("setup.php");
if(!isset($_SESSION["user"])){
   header('Location: index.php');
}
if(!isset($_POST["textPost"])){
   header('Location: index.php');
}
print_r($_POST);

?>
</pre>
