<?php
    if (empty($_POST["email"])) {
        header("Location: ./index.php?content=message&alert=no-email");
    } else {
        include("./connect_db.php");
        include("./functions.php");


        $email = sanitize($_POST["email"]);


        $sql = "SELECT * FROM `register` WHERE `email` = '$email'";    


        $result = mysqli_query($conn, $sql);

        if  (mysqli_num_rows($result)) {
            header("Location: ./index.php?content=message&alert=emailexists");  

        }else{
          
            // Maakt een password hash en haalt de tijd en datum op 
            // op basis van de php-cuntie microtime
            // en geeft dit terug in een $array
            $array = mk_password_hash_from_microtime();

            $sql = "INSERT INTO `register` (`id` ,
                                            `email`,
                                            `password`,
                                            `userrole`,
                                            `activated`)
                    VALUES                  (NULL,
                                              '$email',
                                              '{$array["password_hash"]}',
                                              'customer',
                                              0)";

 
           if  (mysqli_query($conn, $sql)) {
            
            $id = mysqli_insert_id($conn);

            $to = $email;
            $subject = "Activatielink voor uw account van georgemarina.nl";
            $message = '<!doctype html>
                                <html lang="en">
                                    <head>
                                    <!-- Required meta tags -->
                                    <meta charset="utf-8">
                                    <meta name="viewport" content="width=device-width, initial-scale=1">
                                
                                    <!-- Bootstrap CSS -->
                                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

                                    <style>
                                        body {
                                            background-color: #dddddd;
                                            font-size 1.3em;
                                        }     
                                    </style>


                                    <title>Hello, world!</title>
                                    </head>
                                    <body>
                                    <h3>'. $array["date"] . " - " . $array["time"] .' </h3>
                                    <h2>Beste Gebruiker,</h2>
                                    <p>U heeft zich onlangs geregistreerd voor de site http://restaurantgeorgemarina.nl </p>
                                    <p>Klik <a href="http://restaurantgeorgemarina.nl/index.php?content=activate&id=' .  $id .'& 
                                    pwh=' . $array['password_hash'] .'"> hier</a> voor het activeren en wijzigen van het wachtwoord van uw account</p>
                                    <p>M. Amhaini </p>
                                    <p>CEO Georgemarina INC. </p>
                                   


                                
                                    <!-- Optional JavaScript; choose one of the two! -->
                                
                                    <!-- Option 1: Bootstrap Bundle with Popper -->
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
                                
                                    <!-- Option 2: Separate Popper and Bootstrap JS -->
                                    <!--
                                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
                                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
                                    -->
                                    </body>
                                </html>';
                                

            $headers = "MINE-Version: 1.0\r\n";
            $headers = "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "From: admin@georgemarina.nl\r\n";
            $headers .=  "Cc: moderator@georgemarina.nl\r\n";
            $headers .= "Bcc: root@georgemarina.nl";

            mail ($to , $subject ,  $message, $headers);    

                header("Location: ./index.php?content=message&alert=register-success");
           } else {
                header("Location: ./index.php?content=message&alert=register-error");
           }                     
        }
    }
?>