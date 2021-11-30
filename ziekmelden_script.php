<?php

 include("./connect_db.php");

  $volledigenaam = ($_POST["volledigenaam"]);
  $leerlingnummer = ($_POST["leerlingnummer"]);
  $geboortedatum = ($_POST["geboortedatum"]);
  
// Dit is de sql-query die de ingevulde gegevens wegschrijft naar de tabel nummers
$sql = "INSERT INTO `ziekmelden` (`id`, `volledigenaam`, `leerlingnummer`, `geboortedatum`) VALUES (NULL, '$volledigenaam', '$leerlingnummer', '$geboortedatum')"; 


// echo $sql; exit();
// Dit is de funcit edie de query $sql via de verbinding $conn naar de database stuurt.
mysqli_query($conn, $sql);

header("Location: ./index.php?content=message&alert=ziekmelden-succes");

?>