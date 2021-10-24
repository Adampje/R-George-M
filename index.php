<!DOCTYPE html>
<html lang="en">
<head>
<h1 STYLE="font-size: 35px;  font-family: Arial, 'Reservations', Times, serif;">Reserveren</h1>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<img src='img/GeorgeMarina.png' style='position:absolute; top:0; right:0;' width='100' height='100' alt='logoo' />

  <hr style="height:30px;border-width:0;color:black;background-color:white">
  <hr style="height:2px;border-width:0;color:black;background-color:black">

</head>
<body>

<img src='img/seatingchart.png' style='position:absolute; top:40; right:0;' width='500' height='500' alt='logoo' />

<form action="./create.php" method="post">
  <div class="col">
    <label for="formGroupExampleInput">Voornaam</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder=". . ." 
    id="Voornaam" name="Voornaam">
  </div>
  <div class="col">
    <label for="formGroupExampleInput2">Achternaam</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder=". . ."
    id="Achternaam" name="Achternaam">
  </div>
  <div class="form-group col-md-4">
      <label for="inputState">personen</label>
      <select id="personen" name="personen"class="form-control">
        <option selected>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
      </select>
</div>
  <div class="form-group col-md-4">
      <label for="inputState">Tafel of bar?</label>
      <select id="tafelofbar" name="tafelofbar" class="form-control">
        <option selected>...</option>
        <option>tafel</option>
        <option>bar</option>
      </select>
</div>
<hr style="height:5px;border-width:0;color:black;background-color:white">
<button type="submit" class="btn btn-outline-dark">Verzenden</button>
</form>

<hr style="height:5px;border-width:0;color:black;background-color:white">
  <p STYLE="font-size: 20px; font-family: Arial, 'Reservations', Times, serif;">
      Hier kunt u reserveren om bij ons te komen eten!</p>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html> 