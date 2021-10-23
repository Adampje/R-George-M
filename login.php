<link rel="stylesheet" href="register-login.css">

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-6">

            <form action="./index.php?content=login_script" method="post">
                <div class="mb-3">
                    <label for="InputEmail" class="form-label">Vul hier uw e-mailadres in</label>
                    <input name="email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" autofocus>
                    <div id="emailHelp" class="form-text text-muted">Uw privacy is gegarendeerd.</div>
                </div>      
                <div class="mb-3">
                    <label for="InputPassword" class="form-label">Vul hier uw wachtwoord in</label>
                    <input name="password" type="password" class="form-control" id="InputPassword" aria-describedby="passwordHelp" autofocus>
                    <div id="passwordHelp" class="form-text text-muted">Pas op voor meekijkers tijdens het invoeren.</div>
                </div>        

                <button type="submit" class="btn btn-success btn-lg btn-block">Log in</button>
            </form>

        </div>
        <div class="col-12 col-sm-6">
            <img  id="loginimg" src="img\foto3.png" alt="" class=d-block>
     </div>
    <div>

 </div>
