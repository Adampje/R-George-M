<?php

include("./connectdb.php");



  $Voornaam = ($_POST["Voornaam"]);
  $Achternaam = ($_POST["Achternaam"]);
  $personen = ($_POST["personen"]);
  $tafelofbar = ($_POST["tafelofbar"]);
  
// Dit is de sql-query die de ingevulde gegevens wegschrijft naar de tabel nummers
$sql = "INSERT INTO `reserveren` (`id`, `Voornaam`, `Achternaam`, `personen`, `tafelofbar`) VALUES (NULL, '$Voornaam', '$Achternaam', '$personen', '$tafelofbar')"; 


// echo $sql; exit();
// Dit is de funcit edie de query $sql via de verbinding $conn naar de database stuurt.
mysqli_query($conn, $sql);

header("Location: ./reservationcomplete.php");

?>