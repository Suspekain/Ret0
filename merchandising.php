<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Rick & Morty</title>

	<link href="css/style.css" rel="stylesheet">
	<link rel="icon" type="image/jpg" href="img/favicon.jpg" alt="favicon">
</head>
<body>

	<div class="container-fluid">
		<div class="row" >
			<div  id="cabecera">
				<img style="height: 80px;" alt="banner" src="img/rick-and-morty-banner.jpg">
			</div>
		</div>
	</div>
	<a href="index.php"><button class="volver">🡐 Volver</button></a>

	<!-- Body, productos -->
	<h2 style="margin: 3%">Merchandising oficial de Rick y Morty</h2>
	<div class="row" style="width: 95%;margin-left: 2.5%;">
		<div class="column">
			<div class="card">
				<img alt="funkoRick" src="img/merch/funko.jpg"  class="merch">
				<div class="container">
					<h2>Funko Rick</h2>
					<p class="title">40€</p>
					<p><button class="button">Comprar</button></p>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="card">
				<img alt="Camiseta" src="img/merch/shirt.jpg" class="merch">
				<div class="container">
					<h2>Camiseta</h2>
					<p class="title">50€</p>
					<p><button class="button">Comprar</button></p>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="card">
				<img alt="PortalGun" src="img/merch/portalgun.jpg" class="merch">
				<div class="container">
					<h2>Portal Gun</h2>
					<p class="title">120€</p>
					<p><button class="button">Comprar</button></p>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="width: 95%;margin-left: 2.5%;">
		<div class="column">
			<div class="card">
				<img alt="FunkoPickleRick" src="img/merch/funko2.jpg" class="merch">
				<div class="container">
					<h2>Funko Pickle Rick</h2>
					<p class="title">45€</p>
					<p><button class="button">Comprar</button></p>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="card">
				<img alt="CamisetaRick" src="img/merch/shirt2.jpg" class="merch">
				<div class="container">
					<h2>Camiseta</h2>
					<p class="title">40€</p>
					<p><button class="button">Comprar</button></p>
				</div>
			</div>
		</div>
		<div class="column">
			<div class="card">
				<img alt="Juego" src="img/merch/game.jpg" class="merch">
				<div class="container">
					<h2>Juego</h2>
					<p class="title">70€</p>
					<p><button class="button">Comprar</button></p>
				</div>
			</div>
		</div>
	</div>
	
	<a href="index.php"><button class="volver">🡐 Volver</button></a>


	<footer>
		<p>Rick&Morty &copy;
			<script type="text/javascript">
				var today = new Date();
				var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
				var time = today.getHours() + ":" + today.getMinutes();
				var dateTime = date+' '+time;
				document.write(dateTime);
			</script>
		</p> 
	</footer>
</body>
</html>
