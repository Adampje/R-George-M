<?php
$id = $_GET["id"];

include("./connect_db.php");

$sql = "SELECT * FROM `student` WHERE `id` = $id";

$result = mysqli_query($conn, $sql);

$record = mysqli_fetch_assoc($result);

// echo "<pre>"; var_dump($record); echo "</pre>";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>GeorgeMarina</title>
    <style>
        .div {
            text-align: center;
        }
    </style>
  </head>
  <body>
        <div class="row">
            <div class="col-6">`
              <form action= "./s-studentinfo_update_script.php" method= "post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Voornaam</label>
                    <input type="game" class="form-control" id="voornaam" aria-describedby="emailHelp" placeholder="Enter game" name= "voornaam" value="<?php echo $record["voornaam"]; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Achternaam</label>
                    <input type="game" class="form-control" id="achternaam" aria-describedby="emailHelp" placeholder="Enter game" name= "achternaam" value="<?php echo $record["achternaam"];?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Telefoonnummer</label>
                    <input type="game" class="form-control" id="mobiel" aria-describedby="emailHelp" placeholder="Enter game" name= "mobiel" value="<?php echo $record["mobiel"];?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mailadress</label>
                    <input type="game" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter game" name= "email" value="<?php echo $record["email"];?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Woonplaats</label>
                    <input type="game" class="form-control" id="woonplaats" aria-describedby="emailHelp" placeholder="Enter game" name= "woonplaats" value="<?php echo $record["woonplaats"];?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Straatnaam</label>
                    <input type="game" class="form-control" id="straat" aria-describedby="emailHelp" placeholder="Enter game" name= "straat" value="<?php echo $record["straat"];?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Postcode</label>
                    <input type="game" class="form-control" id="postcode" aria-describedby="emailHelp" placeholder="Enter game" name= "postcode" value="<?php echo $record["postcode"];?>">
                </div>
                <input type="hidden" value= "<?php echo $id; ?>" name="id">
                <button type="submit" class="btn btn-primary">Bewerken</button>
                </form>
            </div>
            <div class="col-6"></div>
        </div>
        <div class="row">
            <div class="col-12"></div>
        </div>    
    </main>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
  </body>
</html>