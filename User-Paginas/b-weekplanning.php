<?php
include("./connect_db.php");
// Dit is de select query voor het opvragen van alle records uit de tabel users
$sql = "SELECT * FROM `weekplanningBegeleider`";

// Dit is de funcite die de query $sql via de verbinding $conn naar de database stuurt 

$sql = "SELECT * FROM `weekplanningBegeleider` order by id ";

$result = mysqli_query($conn, $sql);

$records = "";
// Dit is de while loop van alle records
while ($record = mysqli_fetch_assoc($result)){
    $records .= "<tr>
                  <th scope='row'>" . $record["id"] . "</th>
                <td>" . $record["datum"] . "</td>  
                <td>" . $record["tijd"] . "</td>
                <td>" . $record["vak"] . "</td>
                <td>" . $record["commentaar"] . "</td>
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

      <!-- Op deze plek staat de tabel -->
      <table class="table table-hover table-dark">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Datum</th>
            <th scope="col">Tijd</th>
            <th scope="col">Vak</th>
            <th scope="col">Commentaar</th>
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


<a href='./index.php?content=User-Paginas\b-weekplanningbewerken'><button>Bewerken</button></a>