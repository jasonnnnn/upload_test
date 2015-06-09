<?php # index.php


	#1 Load libraries

	require_once 'form.lib.php';
	require_once 'upload.lib.php';
	require_once 'url.lib.php';


	#2 Logic

	// print_r($_FILES);

	if($_FILES){

		$files = Upload::to_folder('uploads/');


		if($files[0]['error_message'] == false){

			URL::redirect($files[0]['filepath']);

		}else{

			echo $files[0]['error_message'];
		}


		// URL::redirect('uploads/'.$filename);
	}




	#3 load views (is after this php tag)



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload files with PHP</title>
</head>
<body>

	<h1>Upload files with PHP</h1>

	<?= Form::open_upload() ?>

	<div class="form-group">
		
		<?= Form::label('file', 'File:') ?>
		<?= Form::file() ?>
	</div>

	<?= Form::submit() ?>

	<?= Form::close() ?>
	
</body>
</html>
