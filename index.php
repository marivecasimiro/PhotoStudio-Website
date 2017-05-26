<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<title>Estudio Fotográfico</title>
</head>
<body>
<?php

	include('header.php');
		
if(isset($_GET['pag']))
{
	$pag = $_GET['pag'];
	if($pag == 'inicio') include ('inicio.php');
	if($pag == 'sobrenosotros') include ('sobrenosotros.php');
	if($pag == 'portafolio') include ('portafolio.php');
	if($pag == 'contacto') include ('contacto.php');

}else
{
	include('inicio.php');
}
	include('footer.php');

	?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
  <script src="js/bootstrap.js"></script>
  
  
</body>
</html>