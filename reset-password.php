<?php
include("includes/header.php");
?>

<?php
include("includes/navbar.php");
?>

<main>
    <div class="container">
        <div class="text-center">
            <section>
                <h3 class="text-center mt-4">Wachtwoord resetten</h3>
                <p>Een e-mail zal u verzonden worden met instructies hoe u uw wachtwoord kan resetten.</p>

                <form action="includes/reset-request.inc.php" method="post" class="mb-5">
                    <input type="text" name="email" placeholder="e-mailadres">
                    <button class="btn btn-primary" type="submit" name="reset-request-submit">Ontvang uw nieuw wachtwoord per mail</button>
                </form>

                <?php
                if (isset($_GET["reset"])) {
                    if ($_GET["reset"] == "succes") {
                        echo '<p class="signupsucces">Check uw mailbox!</p>';
                    }
                }

                ?>

            </section>
        </div>
    </div>
</main>

<?php
include("includes/footer.php");
?>