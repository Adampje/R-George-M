
<?php
  $active = (isset($_GET["content"]))?  $_GET["content"]: "";
?>
<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid px-1">
    <a class="navbar-brand" href="./index.php?content=home">GeorgeMarina</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
      <ul class="navbar-nav">
      <?php
        if ( isset($_SESSION["id"])) {
          switch ($_SESSION["userrole"]) {
            case 'admin': 
              echo '<li class="nav-item'; echo (in_array($active, ["a-home", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=a-home">Home</a>
                    </li>';
            break; 
            case 'root': 
              echo '<li class="nav-item'; echo (in_array($active, ["r-home", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=r-home">Home</a>
                    </li>';
            break; 
            case 'moderator': 
              echo '<li class="nav-item'; echo (in_array($active, ["m-home", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=m-home">Home</a>
                    </li>';
            break; 
            case 'customer': 
              echo '<li class="nav-item'; echo (in_array($active, ["c-home", ""]))? "active": ""; echo '">
                      <a class="nav-link" aria-current="page" href="./index.php?content=c-home">Home</a>
                    </li>';
            break; 
            default:
            break;
          }
        } else {
          echo '<li class="nav-item'; echo (in_array($active, ["home", ""]))? "active": ""; echo '">
                  <a class="nav-link" aria-current="page" href="./index.php?content=home">Home</a>
                </li>';
        }
        ?>
        
        <li class="nav-item <?php echo ($active == "contact")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=contact">Contact</a>
        </li>
        </li>
        <li class="nav-item <?php echo ($active == "menu")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=lunch">Menu</a>
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
        
        </ul> 



      <ul class="navbar-nav ml-auto"> 
      <?php
      if (isset($_SESSION["id"])) {
       switch($_SESSION["userrole"]) {
        case 'admin': 
          echo '<li class="nav-item'; echo ($active == "rootpage") ? "$active": ""; echo '">
                   <a class="nav-link" href="./index.php?content=a-users">Users</a>
                </li>';
        break;
        case 'root': 
          echo '<li class="nav-item'; echo ($active == "rootpage") ? "$active": ""; echo '">
                   <a class="nav-link" href="./index.php?content=rootpage">Rootpage</a>
                </li>';
        break;
        case 'moderator': 
          echo '<li class="nav-item'; echo ($active == "moderatorpage") ? "$active": ""; echo '">
                   <a class="nav-link" href="./index.php?content=moderatorpage">Moderatorpage</a>
                </li>';
        break;
        case 'customer': 
          echo '<li class="nav-item'; echo ($active == "moderatorpage") ? "$active": ""; echo '">
                  <a class="nav-link" href="./index.php?content=c-account">Customerpage</a>
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
      <img src="img\GeorgeMarina.png" alt="logo" class="image-fluid" width="100px" height="100px" >
      
      </ul>
  </div>
</nav>