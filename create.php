<?php

 include("./connect_db.php");

  
 $Naam = ($_POST["Naam"]);
 $telefoonnummer = ($_POST["telefoonnummer"]);
 $personen = ($_POST["personen"]);
 $tafelofbar = ($_POST["tafelofbar"]);
 $datumoftijd = ($_POST["datumoftijd"]);

if (empty($Naam) || empty($telefoonnummer)|| empty($personen) || empty($tafelofbar) || empty($datumoftijd)) {
  // Check of de loginformvelden zijn ingevuld...
  header("Location: ./index.php?content=message&alert=emptyfield");
} else {
// Dit is de sql-query die de ingevulde gegevens wegschrijft naar de tabel nummers
$sql = "INSERT INTO `reserveren` (`id`, `Naam`, `telefoonnummer`, `personen`, `tafelofbar`, `datumoftijd`) VALUES (NULL, '$Naam','$telefoonnummer', '$personen', '$tafelofbar', '$datumoftijd')"; 

//  
// Dit is de functie die de query $sql via de verbinding $conn naar de database stuurt.
$succes=mysqli_query($conn, $sql);
// var_dump($succes);

header("Location: ./index.php?content=message&alert=reservatie-success");
}
?>

 