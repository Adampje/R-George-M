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

    <form action="./index.php?content=carreer_script" method="post">
    <div class="container mt-5">
        <div class="center col-12 col-sm-6 name-item">
        <tr>
            <th scope="col">id</th>
            <th scope="col">Datum</th>
            <th scope="col">Tijd</th>
            <th scope="col">Vak</th>
            <th scope="col">Commentaar</th>
          </tr> 
        </div>
        <br>
<!-- Datum les -->
        <div class="center col-12 col-sm-6 name-item">
            <label for="Datum" class="form-label"></label>
            <input name="datum" type="datum" class="form-control" id="datum" aria-describedby="datum" placeholder="Wanneer is deze les?" required autofocus/>
            <div id="datum" class="form-text text-muted"></div>
        </div>
<!-- Hoe laat is de les -->
        <div class="center col-12 col-sm-6 name-item">
            <label for="Tijd" class="form-label"></label>
            <input name="Tijd" type="Tijd" class="form-control" id="Tijd" aria-describedby="Tijd" placeholder="Hoe laat is deze les?" required autofocus/>
            <div id="Tijd" class="form-text text-muted"></div>
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

        <div class="center col-12 col-sm-6 name-item">
            <label for="InputTelefoonnummer" class="form-label"></label>
            <input name="telefoonnummer" type="name" class="form-control" id="InputTelefoonnummer" aria-describedby="telefoonnummerHelp" placeholder="Telefoonnummer*" required autofocus/>
            <div id="telefoonnummerHelp" class="form-text text-muted"></div>
        </div>
        <br>
        <div class="position-item">
            <div class="center col-12 col-sm-6 name-item">
                <p style="margin:auto;">Voor welke positie soliciteer je?<span class="required">*</span></p>
                <br>
                <label for="InputPositie" class="form-label"></label>

            </div>
            <br>

            <div class="btn-block">
                <button type="nav-link" >Opslaan</button>

            </div>
    </form>
    </div>

    <br>

</body>

</html>