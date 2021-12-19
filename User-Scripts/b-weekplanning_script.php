<?php

 include("./connect_db.php");

  $datum = ($_POST["datum"]);
  $tijd = ($_POST["tijd"]);
  $vak = ($_POST["vak"]);
  $commentaar = ($_POST["commentaar"]);

var_dump($datum, $tijd, $vak, $commentaar);
exit;

// console.log ($datum)
// console.log ($tijd)
// console.log ($vak)
// console.log ($commentaar)

// Dit is de sql-query die de ingevulde gegevens wegschrijft naar de tabel nummers
$sql = "INSERT INTO `weekplanningbegeleider` (`datum`, `tijd`, `vak`, `commentaar`) VALUES ($datum, $tijd, $vak, $commentaar)"; 

// insert into begeleidersrooster (id , datum, tijd, vak, commentaar) VALUES (null,'2021/10/10',14,'les','commentaar');
// echo $sql; exit();
// Dit is de functie die de query $sql via de verbinding $conn naar de database stuurt.
mysqli_query($conn, $sql);

header("Location: ./index.php?content=message&alert=weekplanning-succes");

?>