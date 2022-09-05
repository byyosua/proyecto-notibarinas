
<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>Noti-Barina</title>    
	<meta charset="UTF-8">
  	<meta name="description" content="RED SOCIAL">
  	<meta name="keywords" content="FOTO, VIDEO, LIFE STORY">
  	<meta name="author" content="Josue Alejandro Ruza">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Noti Barinas">
    <meta name="description" content="Noti Barinas">
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css"/>  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
		$(document).ready(function() {

			/*//////////////////////////////////////////////////*/
			$('#home').click(function(){
				setTimeout(function() {
					$("#resultpost").load("load/inicio.php");
				},600);
				$("#resultpost").load("rload/inicio.php");
			});
			$('#explore').click(function(){$("#resultpost").load("load/explore.php");});
			$('#myperfil').click(function(){$("#resultpost").load("load/myperfil.php");});
			$('#not').click(function(){});
			$('#pluscog').click(function(){});
			/*//////////////////////////////////////////////////*/
		});
    </script>
</head>
<body>
<main>
	<header>
		<div class="head">
			<div class="head-resul">Noti-Barinas</div>
				<div class="head-resul">
					<a href="#" class="icon-icon"><i id="home" class="bi-pentagon"></i></a>
					<a href="#" class="icon-icon"><i id="explore" class="bi-escape"></i></a>
					<a href="#" class="icon-icon"><i id="myperfil" class="bi-person-circle"></i></a>
					<a href="#" class="icon-icon"><i class="bi-chat-square-dots"></i></a>
					<a href="#" class="icon-icon"><i class="bi-bell"></i></a>
					<a href="#" class="icon-icon"><i class="bi-caret-down"></i></a>
				</div>
		</div> 
	</header>
	<div class="conten">
		<div class="conten-box" id="resultpost">
			<?php require'load/inicio.php'; ?>
		</div>
	</div>
	<footer>
		<div class="footer-cont">
			<div class="footer-resul"><p>Power By Yosua ART</p><p>Noti Barinas</p></div>
			<div class="footer-resul"><p>Derechos reservados copyright</p><p>Josue Alejandro Ruza</p><p>josuealejandroruza2@gmail.com</p></div>
			<div class="footer-resul"><p>Red Sociales</p><p>Ig _theyosua_</p><p>fb byyosua</p></div>
		</div>
	</footer>
</main>
</body>
</html>
