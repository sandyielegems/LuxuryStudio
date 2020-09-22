<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$message_sent = false;


if (isset($_POST['mail']) && $_POST['mail'] != '') {

    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $tel = $_POST['tel'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "sandy.ielegems@gmail.com";
        $body = "";

        $txt .= "U hebt een e-mail ontvangen van " . $firstname . " " . $lastname . ".\n\n" . $message;

        // mail($mailTo, $message, $txt);
        // header("Location: index.php#afspraak?mailsend");

        $message_sent = true;
    } else {
        $invalid_class_name = "form-invalid";
    }
}

?>
<!-- 
<?php
if ($message_sent);
?>

<h3>Thanks, we will contact you</h3>
 -->


<section class="ftco-section ftco-appointment">
    <div class="overlay"></div>
    <div class="container">
        <div class="col-md appointment pl-md-5 ftco-animate">
            <h3 class="mb-3">AFSPRAAK MAKEN</h3>
            <form action="index.php#afspraak" class="appointment-form" method="post">

                <div class="row form-group d-flex">
                    <div class="col-md-6">
                        <label class="text-white" for="firstname">Voornaam</label>
                        <input type="text" class="form-control" name="firstname">
                    </div>
                    <div class="col-md-6">
                        <label class="text-white" for="lastname">Achternaam</label>
                        <input type="text" class="form-control" name="lastname">
                    </div>

                    <div class="col-md-6">
                        <label class="text-white" for="tel">Telefoonnummer</label>
                        <input type="text" class="form-control" name="tel">
                    </div>
                    <div class="col-md-6">
                        <label class="text-white" for="email">E-mail</label>
                        <input <?php $invalid_class_name ?? "" ?> type="email" class="form-control" name="email">
                    </div>

                    <div class="col-md-6">
                        <div class="input-wrap">
                            <label class="text-white" for="date">Datum</label>
                            <div class="icon"><span class="ion-md-calendar"></span></div>
                            <input type="text" id="appointment_date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-wrap">
                            <label class="text-white" for="hour">Gewenste uur</label>
                            <div class="icon"><span class="ion-md-time"></span></div>
                            <input type="time" id="default-picker" class="form-control">
                        </div>
                    </div>
                </div>

                <!-- radio buttons  -->
                <div class="form-check pt-4">
                    <label class="form-check-label text-white">
                        <input type="radio" class="form-check-input" name="optradio">Behandeling 1 - manicure
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label text-white">
                        <input type="radio" class="form-check-input" name="optradio">Behandeling 2 - gelnagels plaatsing
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label text-white">
                        <input type="radio" class="form-check-input" name="optradio">Behandeling 3 - gelnagels bijwerken
                    </label>
                </div>

                <div class="form-group pt-4">
                    <label class="text-white" for="opm">Opmerkingen</label>
                    <textarea name="opm" id="" cols="30" rows="3" class="form-control" name="message"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-white btn-outline-white py-3 px-4">Afspraak aanvragen</button>
                </div>
                <div class="text-white">U zal een e-mail ontvangen met de bevestiging.</div>
            </form>
        </div>
    </div>
</section>