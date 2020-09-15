<?php
include("includes/header.php");
?>

<?php
include("includes/header-photo.php");
?>

<?php
include("includes/navbar.php");
?>

<main class="text-center mt-4">
    <?php
    if (isset($_SESSION['userId'])) {
        echo '<p>U bent ingelogd</p>';
    } else {
        echo '<p>U bent uitgelogd</p>';
    }
    ?>
</main>

<?php
include("login.php");
?>

<?php
include("overons.php");
?>

<a name="promo"></a>
<?php
include("promo.php");
?>

<a name="gallery"></a>
<?php
include("gallery.php");
?>

<a name="prijzen"></a>
<?php
include("prijzen.php");
?>

<a name="afspraak"></a>
<?php
include("afspraak.php");
?>

<a name="contact"></a>
<?php
include("includes/footer.php");
?>