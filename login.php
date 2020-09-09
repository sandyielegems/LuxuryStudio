<header>
    <div>

        <?php
        if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method="post">
            <p class="button text-center"><button class="btn btn-primary btn-outline-primary px-4 py-3" type="submit" name="logout-submit">Logout</button></p></form>';
        } else {
            echo '<form action="includes/login.inc.php" method="post">
            <p class="button text-center"><input type="text" name="mailuid" placeholder="Username of e-mail">
            <input type="password" name="pwd" placeholder="Wachtwoord">
            <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php" class="nav-link text-center">Nog geen login? Signup</a></p>';
        }
        ?>

    </div>
</header>