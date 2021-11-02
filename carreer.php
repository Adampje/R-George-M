<!DOCTYPE html>
<html lang="en">



<head>
    <style>
<<<<<<< Updated upstream
=======
        #footer {
            display: none;
        }

>>>>>>> Stashed changes
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
    <br>
<<<<<<< Updated upstream
    <img src="./img/georgecarreer.jpg"style='position:absolute; right:25px; top:5;' width="500" height="600" alt="">
=======

>>>>>>> Stashed changes

    <p style="  font-family: Times New Roman, Times, serif;;font-size:20px;">Ben jij iemand die graag aan het werk gaat en geniet van het blij maken van andere,<br>
        dan ben jij een persoon die wij zoeken!<br>
        <br>Werken bij George Marina kan op vele manieren, wij hebben
        <br>altijd belangstelling voor; obers, barmannen of barvrouwen, keukenhulp, <br>chefkok en afwasser.
    </p>


<<<<<<< Updated upstream

    <div class="name-item">
        <input type="text" name="name" placeholder="Volledige naam*" required />
    </div>
    <br>
    <div class="name-item">
        <input type="text" name="name" placeholder="E-mail adress*" required />
    </div>
    <br>
    <div class="name-item">
        <input type="text" name="name" placeholder="Telefoonnummer*" required />
    </div>
    <br>
    <div class="position-item">
        <div class="item">
            <p style="right: 165px;">Voor welke positie soliciteer je?<span class="required">*</span></p>
            <select required>
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
            <button type="submit" href="/">Versturen</button>
        <!-- <?php header("Refresh: 5; ./index.php?content=message&alert=solicatie-succes"); ?> -->

        </div>





=======
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
>>>>>>> Stashed changes

</body>

</html>