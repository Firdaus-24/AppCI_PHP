<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blueprint: <?php echo $mine; ?></title>
	<meta name="description" content="Blueprint: A basic template for a page stack navigation effect" />
	<meta name="keywords" content="blueprint, template, html, css, page stack, 3d, perspective, navigation, menu" />
	<meta name="author" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="<?php echo base_url().'application/assets/template/bootstrapcdn/font-awesome.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'application/assets/bootstrap4cdn/css/bootstrap.min.css'; ?>" />
</head>

<body>
	<?php echo $contents."<br><br>"; ?>

	<a href="<?php echo base_url().'portal/Portal'; ?>"><button class="btn btn-primary">Isi Data</button></a>

	<a href="<?php echo base_url().'portal/Daftar'; ?>"><button class="btn btn-success">Lihat Data</button></a>

</body>

</html>
