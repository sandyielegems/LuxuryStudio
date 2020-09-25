<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h2 class="mb-1">Foto's</h2>
			</div>
		</div>

		<!-- upload form  -->
		<?php
		if (isset($_SESSION['userId'])) {
			echo '<div class="text-center">
				<form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
					<input type="text" name="filename" placeholder="File name ..." class="mb-3">
					<input type="text" name="filetitle" placeholder="Image title ..." class="mb-3">
					<input type="text" name="filedesc" placeholder="Image description ..." class="mb-3">
					<input type="file" name="file"><br>
					<button type="submit" name="submit" class="btn btn-primary mb-4">UPLOAD</button>
				</form>
			</div>';
		}
		?>

		<!-- gallery -->
		<div class="row">
			<?php
			include_once 'includes/dbh.inc.php';

			$sql = "SELECT * FROM gallery ORDER BY orderGallery DESC LIMIT 3;";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				echo "SQL statement failed";
			} else {
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);

				while ($row = mysqli_fetch_assoc($result)) {
					echo '<div class="col-md-4 ftco-animate img-fluid">
									<div style="background-image: url(images/gallery/' . $row["imgFullNameGallery"] . '); 	background-size:cover; min-height:400px;"></div>
										<h5>' . $row["titleGallery"] . '</h5>
										<p class="text-dark">' . $row["descGallery"] . '</p>
								</div>';
				}
			}
			?>
		</div>
	</div>
	<p class="button text-center mt-4"><a href="gallery-single.php" class="btn btn-primary btn-outline-primary px-4 py-3">Meer foto's</a></p>
</section>