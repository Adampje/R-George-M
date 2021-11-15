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
            <label for="InputVolledigenaam" class="form-label"></label>
            <input name="volledigenaam" type="name" class="form-control" id="InputVolledigenaam" aria-describedby="volledigenaamHelp" placeholder="Volledige naam*" required autofocus/>
            <div id="volledigenaamHelp" class="form-text text-muted"></div>
        </div>
        <br>
        <div class="center col-12 col-sm-6 name-item">
            <label for="InputEmail" class="form-label"></label>
            <input name="email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="E-mailadress*" required autofocus/>
            <div id="emailHelp" class="form-text text-muted"></div>
        </div>
        <br>
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
                <select id="positie" name="positie" class="form-control"required>
                    <option value="1">Ober</option>
                    <option value="2">Barista</option>
                    <option value="3">Barman</option>
                    <option value="4">Kok</option>
                    <option value="5">Keukenhulp</option>
                    <option value="6">Afwasser</option>
                </select>
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