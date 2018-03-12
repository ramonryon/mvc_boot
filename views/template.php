<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MVC Padrão com Bootstrap</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
	<link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
</head>

<body>

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	
	<script type="text/javascript">var BASE_URL = "<?php echo BASE_URL; ?>";</script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>

</html>