			<!DOCTYPE html>
			<html lang="en">
			<head>
				<meta charset="utf-8">
				<link rel="stylesheet" type="text/css" href="css/style.css">
				<title>Rick & Morty	</title>
				<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
			</head>
			<body>

				<div >
					<div >
						<div  id="cabecera" >
							<img alt="banner" src="img/rick-and-morty-banner.jpg" style="width: 100%">
						</div>
					</div>

					<nav>
						<table id="navigation">
							<tr>
								<td class="menuA"><a href="#descripcion">DESCRIPCION</a></td>
								<td class="menuA"><a href="#temporadasG">TEMPORADAS</a></td>
								<td class="menuA"><a href="#actores">ACTORES</a></td>
								<td class="menuA"><a href="#video">VIDEOS</a></td>
								<td class="menuA"><a href="merchandising.php" target="_blank">MERCHANDISING</a></td>
								</tr>
							</table>
						</nav>

						<div >
							<div  id="descripcion">

								<h3>Descripcion </h3>

								<p>
									Rick Sánchez es un ejemplo de típico "científico loco". Es un genio, pero es irresponsable, alcohólico, egoísta, un poco depresivo y claramente con poca cordura. Rick por diferentes razones termina mudándose a la casa de su hija Beth y en ese momento se encuentra con su nieto Morty; un joven de 14 años tímido y no muy listo. Al juntarse con su nieto, Rick y Morty vivirán una variedad de aventuras a lo largo del Cosmos y Universos paralelos. Y es mediante tantas vivencias y reflexiones que Rick busca que su nieto Morty no acabe como su padre, Jerry, un hombre muy poco exitoso que a pesar de tener buenas intenciones resulta ser bastante inútil en muchas ocasiones y depende mucho de su esposa, Beth, madre de Morty.<br>

									A pesar de ser muy apegados, Rick y su nieto, experimentarán momentos en los que Summer, hermana de Morty, se unirá en ocasiones a las pintorescas aventuras provocadas por Rick.
								</p>
							</div>
						</div>

						<div id="temporadasG">
							<h4 style="margin-left:0%;border: none;">Temporadas</h4>
							<!-- Menu Desplegable 1 -->
									<button class="acordeon">Temporada 1</button>
										<div class="panel">
	  										<ol>
												<li>
												Pilot
												</li>
												<li>
													Lawnmower Dog
												</li>
												<li>
													Anatomy Park
												</li>
												<li>
													M. Night Shaynm-aliens!
												</li>
												<li>
													Meeseks and Destroy
												</li>
												<li>
													Rick Potion #9
												</li>
												<li >
													Raising Gazopazorp
												</li>
												<li >
													Rixty Minutes
												</li>
												<li >
													Something Ricked This Way Comes
												</li>
												<li>
													Close Rick.counters of the Rick Kind
												</li>
												<li >
													Ricksy Business
												</li>
											</ol>
										</div>

							<!-- Menu Desplegable 2 -->
								<button class="acordeon">Temporada 2</button>
									<div class="panel">
										 <ol>
											<li >
												A Rickle in Time
											</li>
											<li >
												Mortynight Run
											</li>
											<li >
											Auto Erotick Assimilation
											</li>
											<li >
												Total Rickall
											</li>
											<li >
												Get Schwifty
											</li>
											<li >
												The Ricks Must Be Crazy
											</li>
											<li >
												Big Troublein Little Sanchez
											</li>
											<li >
												Interdimensional Cable 2: Tempting Fate
											</li>
											<li >
												Look Who´s Purging Now
											</li>
											<li >
												The Wedding squanchers
											</li>
										</ol>
	</div>

							<!-- Menu Desplegable 3 -->

										<button class="acordeon">Temporada 3</button>
										<div class="panel">
										 	<ol>
												<li >
													The Rickshank Rickdemption
												</li>
												<li >
													Rickmancing the Stone
												</li>
												<li >
													Pickle Rick
												</li>
												<li >
													Vindicators 3: The Return of Worldender
												</li>
												<li >
													The Whirly Dirly Conspiracy
												</li>
												<li >
													Rest and Ricklaxation
												</li>
												<li >
													The Ricklantis Mixup
												</li>
												<li >
													Morty´s Mind Blowers
												</li>
												<li >
													The ABC´s of Beth
												</li>
												<li >
													The Rickchurian Mortydate
												</li>
											</ol>
										</div>

						<!-- Menu Desplegable 4 -->
						<button class="acordeon">Temporada 4</button>
							<div class="panel">
							 	<ol>
									<li>
										<!-- Script para calcular cuantos dias quedan para que salga la temporada 4 -->
										<script>
										today = new Date();
										estreno = new Date("Novenber 1, 2019");
										msPerDay = 24 * 60 * 60 * 1000 ;
										timeLeft = (estreno.getTime() - today.getTime());
										e_daysLeft = timeLeft / msPerDay;
										daysLeft = Math.floor(e_daysLeft);
										document.write("Quedan " + daysLeft + " días...");
										</script>
									</li>
								</ol>
							</div>

					<!-- Menu Desplegable 5 -->
					<button class="acordeon">Episodios Especiales</button>
							<div class="panel">
							 	<div >
									<ol>
										<li>
											Bushworld Adventures
										</li>
									</ol>
								</div>
							</div>

<!-- Script para que los menus sean en modo acordeon y se abran y cierren -->
	<script>
	var acc = document.getElementsByClassName("acordeon");
	var i;

	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
	    this.classList.toggle("active");
	    var panel = this.nextElementSibling;
	    if (panel.style.display == "block") {
	      panel.style.display = "none";
	    } else {
	      panel.style.display = "block";
	    }
	  });
	}
	</script>
	<!-- Fin Script -->

			</div>
			<!-- Actores de doblaje -->
			<div id="actores" >
				<h4>Actores de doblaje</h4>
				<table class="reparto">
					<tbody style="text-align: center;">
						<tr class="reparto">
							<td>Imagen</td>
							<td>Personaje</td>
							<td colspan="2">Actor</td>
						</tr>
						<tr class="reparto">
							<td><img alt="rick" src="img/rick.jpg"></td>
							<td>Rick Sanchez</td>
							<td rowspan="2"><a href="https://www.imdb.com/name/nm1551598/?ref_=nv_sr_1?ref_=nv_sr_1" target="_blank">Justin Roiland</a></td>
							<td rowspan="2"><a href="https://www.imdb.com/name/nm1551598/?ref_=nv_sr_1?ref_=nv_sr_1" target="_blank"><img class="imgtabla" alt="Justin Roiland" src="img/justin.jpg"></a></td>
						</tr>
						<tr class="reparto">
							<td><img alt="Morty" src="img/morty.jpg"></td>
							<td>Mortimer "Morty" Smith</td>
						</tr>
						<tr class="reparto">
							<td><img alt="Summer" src="img/summer.jpg"></td>
							<td>Summer Smith</td>
							<td><a href="https://www.imdb.com/name/nm0334561/?ref_=nv_sr_1?ref_=nv_sr_1" target="_blank">Spencer Grammer</a></td>
							<td><a href="https://www.imdb.com/name/nm0334561/?ref_=nv_sr_1?ref_=nv_sr_1" target="_blank"><img alt="Spencer Grammer" class="imgtabla" src="img/spencer.jpg"></a></td>

						</tr>
						<tr class="reparto">
							<td><img alt="Beth" src="img/beth.jpg"></td>
							<td>Beth Sanchez Smith</td>
							<td><a href="https://www.imdb.com/name/nm0149950/?ref_=nv_sr_1?ref_=nv_sr_1" target="_blank" >Sarah Chalke</a></td>
							<td><a href="https://www.imdb.com/name/nm0149950/?ref_=nv_sr_1?ref_=nv_sr_1" target="_blank"><img alt="Sarah Chalke" class="imgtabla" src="img/sarah.jpg"></a></td>

						</tr>
						<tr class="reparto">
							<td><img alt="Jerry" src="img/jerry.jpg"></td>
							<td>Jerry Smith</td>
							<td><a href="https://www.imdb.com/name/nm0663177/?ref_=fn_al_nm_1" target="_blank">Chris Parnell</a></td>
							<td><a href="https://www.imdb.com/name/nm0663177/?ref_=fn_al_nm_1" target="_blank"><img alt="Chris Parnell" class="imgtabla" src="img/chris.jpg"></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>


			<video controls id="video">
				<source src="capituloEspecial.mp4" type="video/mp4">
			</video>

		<footer id="footer">
			<p>Rick & Morty &copy;
				<?php
				echo date("Y/m/d"). date("H:i:s");
				?>

			</p>
			<a href="https://www.adultswim.com/streams/rick-and-morty" target="_blank"><img alt="Adult Swim" id="AS" src="img/AS.png"></a>
			<a href="https://www.imdb.com/title/tt2861424/" target="_blank"><img alt="IMDB" class="foot" src="img/imdb.png"></a>
			<img alt="Netflix" class="foot" src="img/Netflix.png">
			<div class="certificados">
				<img style="height: 50px" src="img/html5.png" alt="HTML5 validator">
				<img style="height: 50px" src="img/css3.png" alt="CSS3 validator">
			</div>
		</footer>


		</body>
		</html>
