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
            case 'customer': 
              echo '<li class="nav-item'; echo (in_array($active, ["c-home", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=User-Homes\c-home">Home</a>
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
        
        <li class="nav-item <?php echo ($active == "menu")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=menu">Menu</a>
        </li>
        </li>
        <li class="nav-item <?php echo ($active == "aboutus")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=aboutus">About us</a>
        </li>
        <li class="nav-item <?php echo ($active == "reservation")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=reservation">Reservation</a>
        </li>
        <li class="nav-item <?php echo ($active == "bookingpage")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=bookingpage">Book Event</a>
        </li>
        <li class="nav-item <?php echo ($active == "corona")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=corona">Covid-19</a>
        </li>
        <li class="nav-item <?php echo ($active == "table-information")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=table-information">Tables</a>
        </li>
        <li class="nav-item <?php echo ($active == "carreer")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=carreer">Solliciteren</a>
        </li>
        <li class="nav-item <?php echo ($active == "gallery")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=gallery">Gallery</a>
        </li>
        <li class="nav-item <?php echo ($active == "contact")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=contact">Contact</a>
        </li>
        </li>
     
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