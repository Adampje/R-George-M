<?php
include("./connect_db.php");

// Dit is de select query voor het opvragen van alle records uit de tabel users.
$sql = "SELECT * FROM begeleidersrooster";

// Dit is de functie edie de query $sql via de verbinding $conn naar de database stuurt.

    $result = mysqli_query($conn, $sql);

    $records = "";

        // De while loop geeft alle gegevens weer uit de tabel users.

        while ($record = mysqli_fetch_assoc($result)) {
            $records .= "<tr>
            <th><th scope='row'>" . $record["id"] . "</th>
            <td>"  . $record["begeleider"] . "</td>
            <td>"  . $record["werkDatum"] . "</td>
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
      <th scope="col">ID</th>
      <th scope="col">Begeleider</th>
      <th scope="col">werkDatum</th>
    </tr>
  </thead>
  <?php
echo $records;
  ?>