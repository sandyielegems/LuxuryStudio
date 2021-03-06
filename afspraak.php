<section class="ftco-section ftco-appointment">
    <div class="overlay"></div>
    <div class="container">
        <div class="col-md appointment pl-md-5 ftco-animate">
            <h3 class="mb-5">AFSPRAAK MAKEN</h3>
            <form action="includes/afspraak.inc.php" class="appointment-form" method="post">

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
                        <input <?php $invalid_class_name ?? "" ?> type="email" class="form-control" name="mail">
                    </div>

                    <div class="col-md-6">
                        <div class="input-wrap">
                            <label class="text-white" for="date">Gewenste datum</label>
                            <div class="icon"><span class="ion-md-calendar"></span></div>
                            <input type="text" id="appointment_date" class="form-control" name="date">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-wrap">
                            <label class="text-white" for="hour">Gewenste uur</label>
                            <div class="icon"><span class="ion-md-time"></span></div>
                            <input type="time" id="default-picker" class="form-control" name="hour">
                        </div>
                    </div>
                </div>

                <!-- radio buttons  -->
                <!-- <div class="form-check pt-4">
                    <label class="form-check-label text-white">
                        <input type="radio" class="form-check-input" name="optradio1">Behandeling 1 - manicure en nagellak
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label text-white">
                        <input type="radio" class="form-check-input" name="optradio2">Behandeling 2 - manicure en gelnagels
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label text-white">
                        <input type="radio" class="form-check-input" name="optradio2">Behandeling 3 - frezen en gelnagels
                    </label>
                </div> -->

                <div class="form-group pt-4">
                    <label class="text-white" for="message">Gewenste behandeling:</label>
                    <textarea cols="30" rows="3" class="form-control" name="message"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit-app" class="btn btn-white btn-outline-white py-3 px-4">Afspraak aanvragen</button>
                </div>
            </form>
        </div>
    </div>
</section>