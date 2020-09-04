<?php
include("includes/header.php");
?>

<main>
    <div>
        <section>
            <h1>Signup</h1>
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p>Vul alle velden in</p>';
                } else if ($_GET['error'] == "invalidmailuid") {
                    echo '<p>Foute username en e-mail</p>';
                } else if ($_GET['error'] == "invaliduid") {
                    echo '<p>Foute username</p>';
                } else if ($_GET['error'] == "invalidmail") {
                    echo '<p>Fout e-mail</p>';
                } else if ($_GET['error'] == "passwordcheck") {
                    echo '<p>Uw wachtwoorden komen niet overeen</p>';
                } else if ($_GET['error'] == "usertaken") {
                    echo '<p>Username bestaat al</p>';
                }
            } else if ($_GET['signup'] == "success") {
                echo '<p>U bent succesvol ingelogd</p>';
            }
            ?>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username"><br>
                <input type="text" name="mail" placeholder="E-mail"><br>
                <input type="password" name="pwd" placeholder="Password"><br>
                <input type="password" name="pwd-repeat" placeholder="Repeat password"><br>
                <button type="submit" name="signup-submit">Signup</button>
        </section>
    </div>
</main>

<?php
include("includes/footer.php");
?>