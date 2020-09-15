    <!-- gallery -->
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Foto's</h2>
                </div>
            </div>

            <div class="col-md-4 ftco-animate">
                <div href="#" class="work-entry">
                    <?php
                    include_once 'includes/dbh.inc.php';

                    $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "SQL statement failed";
                    } else {
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<a href="#" class="work-entry">
									<div style="background-image: url(../images/gallery/' . $row["imgFullNameGallery"] . ');"></div>
										<h3>' . $row["titleGallery"] . '</h3>
										<p>' . $row["descGallery"] . '</p>
								</a>';
                        }
                    }
                    ?>
                </div>
            </div>


            <!-- upload form  -->

            <?php
            if (isset($_SESSION['username'])) {
                echo '<div>
				<form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
					<input type="text" name="filename" placeholder="File name ...">
					<input type="text" name="filetitle" placeholder="Image title ...">
					<input type="text" name="filedesc" placeholder="Image description ...">
					<input type="file" name="file">
					<button type="submit" name="submit">UPLOAD</button>
				</form>
			</div>';
            }
            ?>

            <!-- <div>
                <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="filename" placeholder="File name ...">
                    <input type="text" name="filetitle" placeholder="Image title ...">
                    <input type="text" name="filedesc" placeholder="Image description ...">
                    <input type="file" name="file">
                    <button type="submit" name="submit">UPLOAD</button>
                </form>
            </div> -->

            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="work-entry">
                        <img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="info d-flex align-items-center">
                            <div>
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-search"></span>
                                </div>
                                <h3>Lips Makeover</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="work-entry">
                        <img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="info d-flex align-items-center">
                            <div>
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-search"></span>
                                </div>
                                <h3>Hair Style</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="work-entry">
                        <img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="info d-flex align-items-center">
                            <div>
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-search"></span>
                                </div>
                                <h3>Makeup</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- <div class="col-md-4 ftco-animate">
                    <a href="#" class="work-entry">
                        <img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="info d-flex align-items-center">
                            <div>
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-search"></span>
                                </div>
                                <h3>Lips Makeover</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="work-entry">
                        <img src="images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="info d-flex align-items-center">
                            <div>
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-search"></span>
                                </div>
                                <h3>Hair Style</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="work-entry">
                        <img src="images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="info d-flex align-items-center">
                            <div>
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-search"></span>
                                </div>
                                <h3>Makeup</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="work-entry">
                        <img src="images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="info d-flex align-items-center">
                            <div>
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-search"></span>
                                </div>
                                <h3>Lips Makeover</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="work-entry">
                        <img src="images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="info d-flex align-items-center">
                            <div>
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-search"></span>
                                </div>
                                <h3>Hair Style</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="work-entry">
                        <img src="images/work-9.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="info d-flex align-items-center">
                            <div>
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-search"></span>
                                </div>
                                <h3>Makeup</h3>
                            </div>
                        </div>
                    </a>
                </div> -->
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <ul>
                            <li><a href="#">&lt;</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&gt;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>