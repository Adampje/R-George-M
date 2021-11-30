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

    <form action="./index.php?content=ziekmelden_script" method="post">
    <div class="container mt-5">
        <div class="center col-12 col-sm-6 name-item">
            <label for="InputVolledigenaam" class="form-label"></label>
            <input name="volledigenaam" type="name" class="form-control" id="InputVolledigenaam" aria-describedby="volledigenaamHelp" placeholder="Volledige naam*" required autofocus/>
            <div id="volledigenaamHelp" class="form-text text-muted"></div>
        </div>
        <br>
        <div class="center col-12 col-sm-6 name-item">
            <label for="InputLeerlingnummer" class="form-label"></label>
            <input name="leerlingnummer" type="name" class="form-control" id="InputLeerlingnummer" aria-describedby="leerlingnummerHelp" placeholder="Leerlingnummer*" required autofocus/>
            <div id="leerlingnummerHelp" class="form-text text-muted"></div>
        </div>
        <br>
        <div class="center col-12 col-sm-6 name-item">
            <label for="InputGeboortedatum" class="form-label"></label>
            <input name="geboortedatum" type="name" class="form-control" id="InputGeboortedatum" aria-describedby="geboortedatumHelp" placeholder="Geboortedatum*" required autofocus/>
            <div id="geboortedatumHelp" class="form-text text-muted"></div>
        </div>
            <br>

            <div class="btn-block">
                <button type="nav-link" >Versturen</button>

            </div>
    </form>
    </div>

    <br>

</body>

</html>