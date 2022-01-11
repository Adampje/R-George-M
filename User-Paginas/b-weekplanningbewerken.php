<!DOCTYPE html>
<html lang="en">

<head>
    <style>

        #footer{
             display: none;
        }

        h1 {
            position: relative;
            text-align: center;
        }

        p {
            position: relative;
            text-align: center;
        }

        div {
            position: relative;
            text-align: center;
            margin: auto;   
        }

        input {
            width: calc(30% - 10px);
            padding: 5px;
        }

        select {
            width: calc(30% - 10px);
            padding: 7px 0;
        }

        button {
            width: calc(30% - 10px);
            
        }
        
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<!-- Template tabel -->
<table class="table caption-top">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    <form action="./index.php?content=User-Scripts\b-weekplanning_script" method="post">
    <div class="container mt-5">

<!-- Datum -->
        <div class="center col-12 col-sm-6 name-item">
            <label for="datum" class="form-label"></label>
            <input name="datum" type="date" class="form-control" id="datum" aria-describedby="datum" placeholder="Wanneer is deze les?" required autofocus/>
            <div id="datum" class="form-text text-muted"></div>
        </div>
        
<!-- Hoe laat is de les -->
        <div class="center col-12 col-sm-6 name-item">
            <label for="tijd" class="form-label"></label>
            <input name="tijd" type="time" class="form-control" id="tijd" aria-describedby="tijd" placeholder="Hoe laat is deze les?" required autofocus/>
            <div id="tijd" class="form-text text-muted"></div>
        </div>

<!-- Welk vak is dit -->
<div class="center col-12 col-sm-6 name-item">
            <label for="vak" class="form-label"></label>
            <input name="vak" type="vak" class="form-control" id="vak" aria-describedby="vak" placeholder="Welk vak is dit?" required autofocus/>
            <div id="vak" class="form-text text-muted"></div>
        </div>
<!-- Eventuele commentaar voor de les -->
<div class="center col-12 col-sm-6 name-item">
            <label for="commentaar" class="form-label"></label>
            <input name="commentaar" type="commentaar" class="form-control" id="commentaar" aria-describedby="commentaar" placeholder="Voeg commentaar toe" required autofocus/>
            <div id="commentaar" class="form-text text-muted"></div>
        </div>

            <div class="btn-block">
                <button type="nav-link" >Opslaan</button>

            </div>
    </form>
    </div>

    <br>

</body>

</html>