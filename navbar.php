<style>
<?php include 'navbar.css'; ?>
</style>

<?php
  $active = (isset($_GET["content"]))?  $_GET["content"]: "";
?>
<nav class="navbar">
 
      <?php
        if ( isset($_SESSION["id"])) {
          switch ($_SESSION["userrole"]) {
            case 'admin': 
              echo '<li class="nav-item'; echo (in_array($active, ["a-home", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=User-Homes\a-home">Home</a>
                    </li>';
            break; 
            case 'root': 
              echo '<li class="nav-item'; echo (in_array($active, ["r-home", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=User-Homes\r-home">Home</a>
                    </li>';
            break; 
            case 'moderator': 
              echo '<li class="nav-item'; echo (in_array($active, ["m-home", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=User-Homes\m-home">Home</a>
                    </li>';
            break; 
            case 'kok': 
              echo '<li class="nav-item'; echo (in_array($active, ["k-home", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=User-Homes\k-home">Home</a>
                    </li>';
            break; 
            case 'barman': 
              echo '<li class="nav-item'; echo (in_array($active, ["b-home", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=User-Homes\b-home">Home</a>
                    </li>';
            break; 
            case 'ober': 
              echo '<li class="nav-item'; echo (in_array($active, ["o-home", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=User-Homes\o-home">Home</a>
                    </li>';
            break; 
            case 'student': 
              echo '<li class="nav-item'; echo (in_array($active, ["s-home", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=User-Homes\s-home">Home</a>
                    </li>';
              echo '<li class="nav-item'; echo ($active == "ziekmelden") ? "$active": ""; echo '">
                <a class="nav-link" href="./index.php?content=ziekmelden">Ziekmelden</a>
              </li>';
              echo '<li class="nav-item'; echo ($active == "s-studentinfo") ? "$active": ""; echo '">
                <a class="nav-link" href="./index.php?content=s-studentinfo">Informatie</a>
              </li>';
            break; 
            case 'begeleider': 
              echo '<li class="nav-item'; echo (in_array($active, ["b-home", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=User-Homes\be-home">Home</a>
                    </li>';
              echo '<li class="nav-item'; echo (in_array($active, ["b-studenteninfo", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=User-Paginas\b-studenteninfo">Studenten</a>
                    </li>';
              echo '<li class="nav-item'; echo (in_array($active, ["b-collegasinfo", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=User-Paginas\b-collegasinfo">Collegas</a>
                   </li>';
              echo '<li class="nav-item'; echo (in_array($active, ["b-reserveringen", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=User-Paginas\b-reserveringen">Reservering-Overzicht</a>
                   </li>';
              echo '<li class="nav-item'; echo (in_array($active, ["b-Weekplanning", ""]))? "active": ""; echo '">
                   <a class="nav-link" aria-current="page" href="./index.php?content=User-Paginas\b-weekplanning">Weekplanning</a>
                </li>';
            break; 
            case 'customer': 
              echo '<li class="nav-item'; echo (in_array($active, ["c-home", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=User-Homes\c-home">Home</a>
                    </li>';
            break; 
            case 'docent': 
              echo '<li class="nav-item'; echo (in_array($active, ["c-home", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=User-Homes\d-home">Home</a>
                    </li>';
            break; 
            case 'eigenaar': 
              echo '<li class="nav-item'; echo (in_array($active, ["e-home", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=User-Homes\e-home">Home</a>
                    </li>';
              echo '<li class="nav-item'; echo (in_array($active, ["b-rooster", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=User-Paginas\b-rooster">Begeleiderrooster</a>
                    </li>';
            break; 
            default:
            break;
          }
        } else {
          
          echo '<li class="nav-item'; echo (in_array($active, ["home", ""]))? "active": ""; echo '">
                  <a class="logo" aria-current="page" href="./index.php?content=home"><img src="./img/GeorgeMarina.png"</a>
                </li>';
        }
        
        ?>
        
           <?php if (!isset($_SESSION) || empty($_SESSION)) : ?> 
        <li class="nav-item <?php echo ($active == "menu")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=menu">Menu</a>
        </li>
        </li>
        <li class="nav-item <?php echo ($active == "aboutus")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=aboutus">About us</a>
        </li>
        <li class="nav-item <?php echo ($active == "reservation")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=reservation">Reservatie</a>
        </li>
        <li class="nav-item <?php echo ($active == "bookingpage")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=bookingpage">Book Event</a>
        </li>
        <li class="nav-item <?php echo ($active == "corona")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=corona">Covid-19</a>
        </li>
        <li class="nav-item <?php echo ($active == "table-information")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=table-information">Tafels</a>
        </li>
        <li class="nav-item <?php echo ($active == "carreer")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=carreer">Solliciteren</a>
        </li>
        <li class="nav-item <?php echo ($active == "gallery")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=gallery">Gallerij</a>
        </li>
        <li class="nav-item <?php echo ($active == "contact")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=contact">Contact</a>
        </li>
        </li>
        
     
        </ul> 
        <?php endif; ?>
            
        
            </ul> 

    



      <ul class="navbar-nav ml-auto"> 
      <?php
      if (isset($_SESSION["id"])) {
       switch($_SESSION["userrole"]) {
        case 'admin': 
          echo '<li class="nav-item'; echo ($active == "adminpage") ? "$active": ""; echo '">
                   <a class="nav-link" href="./index.php?content=User-Paginas\a-users">Users</a>
                </li>';
        break;
        case 'root': 
          echo '<li class="nav-item'; echo ($active == "rootpage") ? "$active": ""; echo '">
                   <a class="nav-link" href="./index.php?content=User-Paginas\rootpage">Rootpage</a>
                </li>';
        break;
        case 'moderator': 
          echo '<li class="nav-item'; echo ($active == "moderatorpage") ? "$active": ""; echo '">
                   <a class="nav-link" href="./index.php?content=User-Paginas\moderatorpage">Moderatorpage</a>
                </li>';
        break;
        case 'customer': 
          echo '<li class="nav-item'; echo ($active == "c-account") ? "$active": ""; echo '">
                  <a class="nav-link" href="./index.php?content=User-Paginas\c-account">Customerpage</a>
                </li>';
        break;
        case 'kok': 
          echo '<li class="nav-item'; echo ($active == "kokpagina") ? "$active": ""; echo '">
                  <a class="nav-link" href="./index.php?content=User-Paginas\kokpagina">Kokpagina</a>
                </li>';
        break;
        case 'barman': 
          echo '<li class="nav-item'; echo ($active == "barmanpagina") ? "$active": ""; echo '">
                  <a class="nav-link" href="./index.php?content=User-Paginas\barmanpagina">Barmanpagina</a>
                </li>';
        break;
        case 'ober': 
          echo '<li class="nav-item'; echo ($active == "oberpagina") ? "$active": ""; echo '">
                  <a class="nav-link" href="./index.php?content=User-Paginas\oberpagina">Oberpagina</a>
                </li>';
        break;
        case 'student': 
          echo '<li class="nav-item'; echo ($active == "studentpagina") ? "$active": ""; echo '">
                  <a class="nav-link" href="./index.php?content=User-Paginas\studentpagina">Studentpagina</a>
                </li>';
          
        break;
        case 'begeleider': 
          echo '<li class="nav-item'; echo ($active == "b-rooster") ? "$active": ""; echo '">
                  <a class="nav-link" href="./index.php?content=User-Paginas\b-rooster">Rooster</a>
                </li>';
        break;
        case 'docent': 
          echo '<li class="nav-item'; echo ($active == "docentpagina") ? "$active": ""; echo '">
                  <a class="nav-link" href="./index.php?content=User-Paginas\d-rooster">Rooster</a>
                </li>';
        break;
        case 'eigenaar': 
          echo '<li class="nav-item'; echo ($active == "eigenaarpagina") ? "$active": ""; echo '">
                  <a class="nav-link" href="./index.php?content=User-Paginas\eigenaarpagina">Eigenaarpagina</a>
                </li>';
        break;
        default:
        break;
      }
      echo  '<li class="nav-item '; echo ($active == "logout")? "active": ""; echo '">
           <a class="nav-link" href="./index.php?content=logout">Uitloggen</a>
            </li>';
      }else{
        echo '<li class="nav-item '; echo ($active == "register")? "active": ""; echo '">
            <a class="nav-link" aria-current="page" href="./index.php?content=register">Registreer</a>
              </li>
              <li class="nav-item '; echo ($active == "login")? "active": ""; echo '">
             <a class="nav-link" href="./index.php?content=login">Inloggen</a>
              </li>';
      }
      ?>
      </ul>
  </div>
</nav>