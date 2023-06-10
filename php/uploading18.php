<!DOCTYPE html>
<html>
<head>
	<title>File Upload Example</title>
</head>
<body>
	<?php
		if(isset($_POST['submit'])){
			$upload_dir = "uploads/";
			$target_file = $upload_dir . basename($_FILES['file']['name']);
			$file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
			}
			// Allow certain file formats
			elseif($file_type != "txt" && $file_type != "pdf" && $file_type != "doc" && $file_type != "docx") {
				echo "Sorry, only TXT, PDF, DOC & DOCX files are allowed.";
			}
			// Upload file
			elseif (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
				echo "The file ". htmlspecialchars( basename( $_FILES['file']['name'])). " has been uploaded.";
			} 
			else {
				echo "Sorry, there was an error uploading your file.";
			}
		}
	?>

	<form action="" method="POST" enctype="multipart/form-data">
		<input type="file" name="file" required>
		<button type="submit" name="submit">Upload File</button>
	</form>
</body>
</html>
