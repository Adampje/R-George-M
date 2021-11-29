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

           <table class="table table-hover">
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