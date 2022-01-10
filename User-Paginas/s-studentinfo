<?php
include("./connect_db.php");

// Dit is de select query voor het opvragen van alle records uit de tabel users.
$sql = "SELECT * FROM medewerker";

// Dit is de functie edie de query $sql via de verbinding $conn naar de database stuurt.

    $result = mysqli_query($conn, $sql);

    $records = "";

        // De while loop geeft alle gegevens weer uit de tabel users.

        while ($record = mysqli_fetch_assoc($result)) {
            $records .= "<tr>
            <th><th scope='row'>" . $record["email"] . "</th>
            <td>"  . $record["achternaam"] . "</td>
            <td>"  . $record["tussenvoegsel"] . "</td>
            <td>"  . $record["voornaam"] . "</td>
            <td>"  . $record["mobiel"] . "</td>
            <td>"  . $record["afkorting"] . "</td>
            <td> 
            </td>
            </tr>";
        }
        ?>
        
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
     <!-- Mijn CSS -->
    <link rel="stylesheet" href="./menu.css">

           <table class="table table-hover table-dark">
  <thead>
    <tr>
    <th scope="col"></th>
      <th scope="col">Email</th>
      <th scope="col">Achternaam</th>
      <th scope="col">tussenvoegsel</th>
      <th scope="col">Voornaam</th>
      <th scope="col">Mobiel</th>
      <th scope="col">Afkorting</th>
    </tr>
  </thead>
  <?php
echo $records;
  ?>