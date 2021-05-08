<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title><?=$act_title?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="stylesheet" href="https://bootswatch.com/3/paper/bootstrap.css" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style.css?v=19" />
		<!-- jQuery 1.8 or later, 33 KB -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<!-- Fotorama from CDNJS, 19 KB -->
		<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
	</head>

	<body>
		<div id="topline">
			<?php
				include('topline.php');
			?>
		</div>
		
		<div id="slider">
			<?php
				include('slidebar.php');
			?>
		</div>
		
		<div id="wrapper">
			<div class="content">
				<div class="conthead"><h1><?=$content_title?></h1></div>
			</div>
			
			<?php
				if($error){
					echo "<p style='padding:25px; font-size:22px; color:red;'>".$error."</p>";
				}else{
					include($tmpFile);
				}
			?>
			
		</div>
		
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
	</body>
</html>