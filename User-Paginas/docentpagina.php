<?php
include("./connect_db.php");

// Dit is de select query voor het opvragen van alle records uit de tabel users.
$sql = "SELECT * FROM `rooster`";

// Dit is de functie edie de query $sql via de verbinding $conn naar de database stuurt.

    $result = mysqli_query($conn, $sql);

    $records = "";

        // De while loop geeft alle gegevens weer uit de tabel users.

        while ($record = mysqli_fetch_assoc($result)) {
            $records .= "<tr>
            <th><th scope='row'>" . $record["Week"] . "</th>
            <td>"  . $record["Datum"] . "</td>
            <td>"  . $record["Tijd"] . "</td>
            <td>"  . $record["lokaal"] . "</td>
            <td>"  . $record["Klas"] . "</td>
            <td> 
            </td>
            </tr>";
        }
        ?>

           <table class="table table-hover">
  <thead>
    <tr>
    <th scope="col"></th>
      <th scope="col">Week</th>
      <th scope="col">Datum</th>
      <th scope="col">Tijd</th>
      <th scope="col">Lokaal</th>
      <th scope="col">Klas</th>
    </tr>
  </thead>
  <?php
echo $records;
  ?>