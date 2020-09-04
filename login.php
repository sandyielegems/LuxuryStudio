<?php
include("includes/header.php");
?>

<header>
    <div>

        <?php
        if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">Logout</button>
            </form>';
        } else {
            echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username of e-mail">
            <input type="password" name="pwd" placeholder="Wachtwoord">
            <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>';
        }
        ?>


    </div>
</header>

<?php
include("includes/footer.php");
?>