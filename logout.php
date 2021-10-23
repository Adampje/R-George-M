<?php
 // maak de laden van het session array leeg 
   unset($_SESSION["id"]);
   unset($_SESSION["userrole"]);
   
   // verwijder session_start

   session_destroy();

   header("Location: ./index.php?content=message&alert=logout");
?>