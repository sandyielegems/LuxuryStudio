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
                <h3 class="text-center mt-4 mb-4">Nieuw wachtwoord ingeven</h3>
                <?php
                $selector = $_GET["selector"];
                $validator = $_GET["validator"];

                if (empty($selector) || empty($validator)) {
                    echo "Kan niet gevalideerd worden!";
                } else {
                    if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                ?>
                        <form action="includes/reset-password.inc.php" method="post" class="mb-5">
                            <input type="hidden" name="selector" value="<?php echo $selector ?>">
                            <input type="hidden" name="validator" value="<?php echo $validator ?>">
                            <input type="password" name="pwd" placeholder="Nieuw wachtwoord">
                            <input type="password" name="pwd-repeat" placeholder="Herhaal nieuw wachtwoord">
                            <button class="btn btn-primary" type="submit" name="reset-password-submit">Reset wachtwoord</button>
                        </form>
                <?php
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