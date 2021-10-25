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
    

    <p style="  font-family: Times New Roman, Times, serif;;font-size:20px;">Ben jij iemand die graag aan het werk gaat en geniet van het blij maken van andere,<br>
        dan ben jij een persoon die wij zoeken!<br>
        <br>Werken bij George Marina kan op vele manieren, wij hebben
        <br>altijd belangstelling voor; obers, barmannen of barvrouwen, keukenhulp, <br>chefkok en afwasser.
    </p>



    <div class="name-item">
        <input type="text" name="name" placeholder="Volledige naam*" required autofocus/>
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
            <p style="margin:auto;">Voor welke positie soliciteer je?<span class="required">*</span></p>
            <br>
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

        <br>

</body>

</html>