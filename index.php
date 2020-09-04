<?php
include("includes/header.php");
?>

<main>
    <?php
    if (isset($_SESSION['userId'])) {
        echo '<p>U bent ingelogd</p>';
    } else {
        echo '<p>U bent uitgelogd</p>';
    }
    ?>
</main>

<?php
include("includes/content.php");
?>

<?php
include("includes/footer.php");
?>