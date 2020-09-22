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

			$sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				echo "SQL statement failed";
			} else {
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);

				while ($row = mysqli_fetch_assoc($result)) {
					echo '<div class="col-md-4 ftco-animate">
							<a href="#" class="img-fluid">
									<div style="background-image: url(images/gallery/' . $row["imgFullNameGallery"] . '); 	background-size:cover; min-height:300px;"></div>
										<h3>' . $row["titleGallery"] . '</h3>
										<p class="text-dark">' . $row["descGallery"] . '</p>
								</a></div>';
				}
			}
			?>
		</div>
	</div>
</section>
<!-- 
<img id="myImg" src="img_snow.jpg" alt="nails" style="width:100%;max-width:300px">
<div id="myModal" class="modal">
	<span class="close">&times;</span>
	<img class="modal-content" id="img01">
	<div id="caption"></div>
</div> -->

<!-- <script>
	// Get the modal
	var modal = document.getElementById("myModal");

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementById("myImg");
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	img.onclick = function() {
		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
	}

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	} -->
<!-- </script> -->