<?php
    var_dump($_POST);
    include("./connect_db.php");
    include("./functions.php");


    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);


    if (empty($email) || empty($password)) {
        // Check of de loginformvelden zijn ingevuld...
        header("Location: ./index.php?content=message&alert=loginform-empty");
    } else {

                    $sql = "SELECT * FROM `register` WHERE `email` = '$email'";

                    $result = mysqli_query($conn, $sql);
                    
                    if (!mysqli_num_rows($result)) {
                        // Email onbekend...
                        header("Location: ./index.php?content=message&alert=email-unknown");
                    } else {

                                $record = mysqli_fetch_assoc($result);

                                if (!$record["activated"]) {
                                    header("Location: ./index.php?content=message&alert=not-activated&email=$email");  
                                } elseif (!password_verify($password, $record["password"])) {                             
                                    header("Location: ./index.php?content=message&alert=no-pw-match&email=$email");  
                                } else {
                                    // password matched
                          
                                    $_SESSION["id"] = $record["id"];
                                    $_SESSION["userrole"] = $record["userrole"];
                                    
                                    switch($record["userrole"]) {
                                        case 'customer':
                                            header("Location: ./index.php?content=User-Homes\c-home");   
                                        break; 
                                        case 'kok':
                                            header("Location: ./index.php?content=User-Homes\k-home");   
                                        break; 
                                        case 'barman':
                                            header("Location: ./index.php?content=User-Homes\b-home");   
                                        break; 
                                        case 'ober':
                                            header("Location: ./index.php?content=User-Homes\o-home");   
                                        break; 
                                        case 'admin':
                                            header("Location: ./index.php?content=User-Homes\a-home");   
                                        break; 
                                        case 'moderator':
                                            header("Location: ./index.php?content=User-Homes\m-home");   
                                        break; 
                                        case 'root':
                                            header("Location: ./index.php?content=User-Homes/r-home");   
                                        break; 
                                        case 'student':
                                            header("Location: ./index.php?content=User-Homes/s-home");   
                                        break;
                                        case 'docent':
                                            header("Location: ./index.php?content=User-Homes/d-home");   
                                        break; 
                                        case 'begeleider':
                                            header("Location: ./index.php?content=User-Homes/be-home");   
                                        break; 
                                        case 'eigenaar':
                                            header("Location: ./index.php?content=User-Homes/be-home");   
                                        break; 
                                        default:
                                            header("Location: ./index.php?content=home");   
                                        break;
                                    }


                                }
                    }   // Email onbekend...



        // Check of de loginformvelden zijn ingevuld...
  
    }

?>  
