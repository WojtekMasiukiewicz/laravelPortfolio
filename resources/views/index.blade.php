<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Wojtek Masiukiewicz</title>
	<meta name="description" content="Programowanie webowe oraz mobilne. HTML, CSS, MySQL, Java, Android" />
	<meta name="keywords" content="programista, www, tworzenie, portfolio, html, css, javascript, java, android" />
	
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lato&amp;subset=latin-ext" rel="stylesheet">
	
	<script src="js/timer.js"></script>
	
</head>
<body onload="odliczanie();">
	
	<div id="container">
		<div class="rectangle">
			<a href="\" class="tilelinkhtml5">
				<div id="logo">Wojtek Masiukiewicz</div>
			</a>
			<div id="zegar">12:00:00</div>
			<div style="clear: both;"></div>
		</div>
		
		<div class="square">
			<div class="tile1">
				<a href="o-mnie" class="tilelink">
					<i class="icon-user"></i><br />O mnie
				</a>
			</div>
			<a href="doswiadczenie-zawodowe" class="tilelinkhtml5">
				<div class="tile1">
					<i class="icon-laptop"></i><br />Doświadczenie
				</div>
			</a>
			<div style="clear: both;"></div>
			
			<div class="tile2">
				<a href="szkola" class="tilelink">
					<i class="icon-graduation-cap"></i><br />Wykształcenie
				</a>
			</div>
			<div class="tile3">
				<a href="kontakt" class="tilelink">
					<i class="icon-mail"></i><br />Kontakt
				</a>
			</div>
			<div style="clear: both;"></div>
			
			<div class="tile4">
				<i>"Experience is the name that everyone gives to his mistakes."</i>
			</div>
			
		</div>
		<div class="square">
			<div class="tile5">
				@yield('content')
				</div>
			<div class="fb">
				<a href="https://www.facebook.com/wojtek.masiukiewicz.9" target="_blank" class="sociallink">
					<i class="icon-facebook"></i>
				</a>
			</div>
			<div class="instagram">
				<a href="https://www.instagram.com/wojtema/" target="_blank" class="sociallink">
					<i class="icon-instagram"></i>
				</a>
			</div>
			<div class="github">
				<a href="https://github.com/WojtekMasiukiewicz" target="_blank" class="sociallink">
					<i class="icon-git"></i>
				</a>
			</div>
			<div class="linkedin">
				<a href="https://www.linkedin.com/in/wojtek-masiukiewicz/" target="_blank" class="sociallink">
					<i class="icon-linkedin"></i>
				</a>
			</div>
			<div style="clear: both;"></div>
		</div>
		<div style="clear: both;"></div>
		
		<div class="rectangle">2017 &copy; Wojtek Masiukiewicz. Kontakt mailowy <i class="icon-mail-alt"></i>wojtekmasiukiewicz@gmail.com</div>
		
	</div>
	
	

</body>
</html>