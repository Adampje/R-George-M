<?php
// Maak contact met de database
 include("./connect_db.php");

$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$mobiel = $_POST["mobiel"];
$email = $_POST["email"];
$woonplaats = $_POST["woonplaats"];
$straat = $_POST["straat"];
$postcode = $_POST["postcode"];
$id = $_POST["id"];


$sql = "UPDATE `student` 
          SET   `voornaam` = '$voornaam', 
                `achternaam` = '$achternaam', 
                `mobiel` = '$mobiel',
                `email` = '$email', 
                `woonplaats` = '$woonplaats', 
                `straat` = '$straat',
                `postcode` = '$postcode'
            WHERE `id` = $id;";

mysqli_query($conn, $sql);

header("Location: ./index.php?content=s-studentinfo");
?>