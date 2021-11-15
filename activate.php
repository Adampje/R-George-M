<link rel="stylesheet" href="register-login.css">

<?php
if (!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"]))){
    header("Location: ./index.php?content=message&alert=hacker-alert");
}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-6">
            <form action="./index.php?content=activate_script" method="post">
                <div class="mb-3">
                    <label for="InputPassword" class="form-label">Kies een nieuw wachtwoord</label>
                    <input name="password" type="password" class="form-control" id="InputPassword" aria-describedby="passwordHelp" autofocus>
                    <div id="passwordHelp" class="form-text">Kies een veilig wachtwoord.</div>
                </div>          
                <div class="mb-3">
                    <label for="InputPasswordCheck" class="form-label">Typ het wachtwoord opnieuw </label>
                    <input name="passwordCheck" type="password" class="form-control" id="InputPasswordCheck" aria-describedby="passwordHelpCheck">
                    <div id="passwordHelpCheck" class="form-text">Ter controle voert u nogmaals uw wachtwoord in.</div>
                </div>      
                <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">      
                <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">    
                <button type="submit" class="btn btn-success btn-lg btn-block">Activeer</button>
            </form>
        </div>
        <div class="col-12 col-sm-6">
            <img  id="restaurantimg" src="img\foto2.png" alt="Restaurant Launge" class=d-block>
     </div>
    <div>

 </div>