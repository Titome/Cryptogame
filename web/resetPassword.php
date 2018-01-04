<?php
require('layout/dbconnect.php');
require('layout/top.php');

if(!isset($_SESSION['nick']) || $_SESSION['nick'] === 'Guest') {
    ?>
    <div class="container-fluid black-div underTopDiv">
        <div class="container-fluid mb-3 mt-2 pb-1 knowMore">
            <h1>Mot de passe oublié</h1>
        </div>
        <div class="row justify-content-around mt-5">
            <div class="col-sm-3">
                <form action="/web/resetedPassword.php" method="post">
                    <label for="nick">Pseudo</label>
                    <input class="form-control" type="text" name="nick" id="nick" required>
                    <label class="mt-2" for="newPwd">Nouveau mot de passe</label>
                    <input class="form-control" type="password" name="newPwd" id="newPwd" required>
                    <label class="mt-2" for="newPwd2">Confirmation du <br> nouveau mot de passe</label>
                    <input class="form-control" type="password" name="newPwd2" id="newPwd2" required>
                    <label class="mt-2" for="pinCode">Cope pin</label>
                    <input class="form-control" type="password" name="pinCode" id="pinCode" pattern="[0-9]*" inputmode="numeric" required>
                    <button class="btn btn-outline-success mt-3" type="submit">Réinitialiser le mot de passe</button>
                </form>
            </div>
        </div>
    </div>
    <?php
} else {
    ?>
    <div class="container-fluid black-div underTopDiv">
        <div class="container-fluid mb-3 mt-2 pb-1 knowMore">
            <h1>Oups !</h1>
        </div>
        <div>
            <p class="mt-5">Comment êtes-vous arrivés ici ?!</p>
            <p class="mt-5">Vous allez être redirigé automatiquement dans 3 secondes.</p>
            <p>Si rien ne se passe, <a href="/index.php">vous pouvez cliquer ici.</a></p>
        </div>
    </div>
    <!-- Redirection automatique au bout de 3 secondes sur l'index -->
    <meta http-equiv="refresh" content="3; URL=/index.php">
    <?php
}
require('layout/bottom.php');
?>