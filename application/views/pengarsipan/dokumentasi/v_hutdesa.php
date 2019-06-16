<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
	<div align="center">
	<?php
		$images = glob("img_hut/*.*"); 
        for ($i=0; $i<count($images); $i++) 
        {
        	$single_image = $images[$i];
        	?>
        	<img class="img-thumbnail" src="<?php echo $single_image; ?>" width="180" height="180">
    <?php
		}
    ?>
	</div>
	</div>
</body>
</html>