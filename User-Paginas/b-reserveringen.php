<?php

include("./connect_db.php");

// Dit is de select query voor het opvragen van alle records uit de tabel users
$sql = "SELECT * FROM `reserveren`";

// Dit is de funcite die de query $sql via de verbinding $conn naar de database stuurt 

$sql = "SELECT * FROM `reserveren` order by id ";

$result = mysqli_query($conn, $sql);

$records = "";
// Dit is de while loop van alle records
while ($record = mysqli_fetch_assoc($result)){
    $records .= "<tr>
                  <th scope='row'>" . $record["id"] . "</th>
                <td>" . $record["Voornaam"] . "</td>  
                <td>" . $record["Achternaam"] . "</td>
                <td>" . $record["personen"] . "</td>
                <td>" . $record["tafelofbar"] . "</td>
                <td>
              </td>
            </tr>";
}
  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
     <!-- Mijn CSS -->
    <link rel="stylesheet" href="./menu.css">

      <!-- Op deze plek komt de tabel -->
      <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">id</th>
<<<<<<< Updated upstream
            <th scope="col">Voornaam</th>
            <th scope="col">Achternaam</th>
=======
            <th scope="col">Naam</th>
            <th scope="col">Tel</th>
>>>>>>> Stashed changes
            <th scope="col">Personen</th>
            <th scope="col">Tafel | Bar</th>
            <th scope="col">Datum / Tijd</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
              echo $records;
          ?>
        </tbody>
      </table>
    
</html>




