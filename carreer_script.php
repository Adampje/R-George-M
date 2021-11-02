<?php

 include("./connect_db.php");

  $volledigenaam = ($_POST["volledigenaam"]);
  $email = ($_POST["email"]);
  $telefoonnummer = ($_POST["telefoonnummer"]);
  $positie = ($_POST["positie"]);
  
// Dit is de sql-query die de ingevulde gegevens wegschrijft naar de tabel nummers
$sql = "INSERT INTO `soliciteren` (`id`, `volledigenaam`, `email`, `telefoonnummer`, `positie`) VALUES (NULL, '$volledigenaam', '$email', '$telefoonnummer', '$positie')"; 


// echo $sql; exit();
// Dit is de funcit edie de query $sql via de verbinding $conn naar de database stuurt.
mysqli_query($conn, $sql);

header("Location: ./index.php?content=message&alert=solicitatie-succes");

?>