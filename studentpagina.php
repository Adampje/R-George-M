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
 <br>
    <label for="start"></label>
        <input type="date" id="start" name="trip-start"
            value="2021-11-29"
            min="2021-01-01" max="2021-12-31">
<br>
<br>
    <label for="appt"></label>
        <input type="time" id="appt" name="appt"
            min="09:00" max="18:00" required>
<br>
<br>
    <div class="btn-block">
        <button type="nav-link" >Versturen</button>

    </div>
    </form>
    </div>

    <br>
    <div class="form-group">
     <label>Date:</label>
     <input class="form-control marg-left-10" name="date"  type="text" id="datepicker">
 </div>

 

</body>

</html>