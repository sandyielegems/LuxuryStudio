<header>
    <div class="container">
        <?php
        if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method="post">
            <p class="button text-right"><button class="btn btn-primary mt-4" type="submit" name="logout-submit">Logout</button></p></form>';
        } else {
            echo
                '<form action="includes/login.inc.php" method="post">
            <p class="button text-center mt-4"><input type="text" name="mailuid" placeholder="E-mail of gebruikersnaam">
            <input type="password" name="pwd" placeholder="Wachtwoord">
            <button class="btn btn-primary" type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php" class="nav-link text-center">Nog geen login? Registreer hier</a></p>

            <a href="reset-password.php" class="nav-link text-center">Wachtwoord vergeten?</a>';

            if (isset($_GET["newPwd"])) {
                if ($_GET["newPwd"] == "passwordupdated") {
                    echo '<p class="signupsucces">Uw wachtwoord is gereset!</p>';
                }
            }
        }
        ?>
    </div>
</header>