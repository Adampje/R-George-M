<?php

 include("./connect_db.php");

  $datum = ($_POST["datum"]);
  $tijd = ($_POST["tijd"]);
  $vak = ($_POST["vak"]);
  $commentaar = ($_POST["commentaar"]);

// Dit is de sql-query die de ingevulde gegevens wegschrijft naar de tabel nummers
$sql = "INSERT INTO `weekplanningbegeleider` (`id`, `datum`, `tijd`, `vak`, `commentaar`) VALUES (NULL, '$datum','$tijd', '$vak', '$commentaar')"; 

//  
// Dit is de functie die de query $sql via de verbinding $conn naar de database stuurt.
$succes=mysqli_query($conn, $sql);
// var_dump($succes);

header("Location: ./index.php?content=message&alert=weekplanning-succes");

?>