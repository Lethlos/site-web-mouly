<! Doctype html>
<html>

<?php 
	include 'get_data.php';
?>

	<head>
		<title>Gite de Figuiès</title>
		<link rel="stylesheet" href="index.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Shantell+Sans&display=swap" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.js"></script>
		<meta charset="utf-8">

	</head>
	
	<body>
		<header class = "header">
			<div class = "header-title">
				<img class="logo" src="img/LOGO-figuies.png" height=100px/>
				<h1 class="white"> GITE DE FIGUIES </h1>
				<button id="login">Sign in</button>
			</div>
			<nav class="header-menu">
				<div><a href="#Photos">Photos</a></div>
				<b class="element-separator">|</b>
				<div><a href="#Equipement-services">Équipement et services</a></div>
				<b class="element-separator">|</b>
				<div><a href="#Tarifs">Tarif</a></div>
				<b class="element-separator">|</b>
				<div><a href="#Capacité">Capacité</a></div>
				<b class="element-separator">|</b>
				<div><a href="#Localisation">Localisation</a></div>
				<b class="element-separator">|</b>
				<div><a href="#Disponibilité">Disponibilités</a></div>
				<b class="element-separator">|</b>
				<div><a href="#Contact">Contact</a></div>
			</nav>
		</header>
		<div class="flex_row_center">
		<div class="content">
		<p class="firstSentence"> Et si on préparait votre prochaine escale dans le Rouerge ? </p>
		<!-- Conteneur principal de tout le diaporama -->
		<div class="flex_division_diapo">
			<div> </div>
			<div class="diapo">
				<!-- Conteneur des "diapos" -->
				<div class="elements">
							<?php 
							include 'view.php';
							?>
						</div>
				<!-- Flèches de navigation -->
				<i id="nav-gauche" class="las la-chevron-left"><img src="img/arrow.png" alt="←" width="40px"></i>
				<i id="nav-droite" class="las la-chevron-right"><img src="img/arrow.png" alt="→" width="40px" reversed></i>
			</div>
			<div> </div>
		</div>
		<p class="align_center">
			<?php echo $description; ?>
		</p>
		<div class="flex_division">
			<div class="flex_col">
				<div>
					<h1 id="Equipement-services" class="ancres"> Équipement et services </h1>
					<ul>
					<li> service 1 </li>
					<li> service 2 </li>
					<li> service 3 </li>
					<li> service 4 </li>
					</ul>
				</div>
				<div>
					<h1 id="Capacité" class="ancres"> Capacités </h1>
					<div class="flex_row"> 
						<span> <div class="flex_row"> <img src="img/bed_icon.svg" width="60 px"/> Lit : <?php echo $bed; ?></div></span>
						<span> <div class="flex_row"> <img src="img/place_icon.svg" width="60 px"/> Place : <?php echo $place; ?> </div></span>
						<span> <div class="flex_row"> <img src="img/room_icon.svg" width="60 px"/> Chambre : <?php echo $bedroom; ?> </div></span>
						<div></div>
					</div>
					<h1 id="Tarifs" > Tarifs </h1>
					Semaine moyenne saison à <?php echo $week; ?> €<br/>

					Nuitée Moyenne saison à <?php echo $night; ?> €<br/>

					Semaine haute saison à <?php echo $week_high; ?> €<br/>

					Nuitée haute saison à <?php echo $night_high; ?> €<br/>
					<h1> Moyen de paiement </h1>
					<ul>
						<li> Cheque </li>
						<li> Espece </li>
						<li> Virement </li>
					</ul>
					<h1 id="Disponibilité" class="ancres"> Disponibilité </h1>
					<div id="calendar"></div>
				</div>
			</div>
			<div class="responsive_decalage">
				<h1 id="Localisation" class="ancres"> Localisation </h1>
				<div> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45571.61785354719!2d2.4521229965790443!3d44.4490344683737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b28229b9ad4bb3%3A0x53e8b9991335fc4d!2s140%20Figuies%2C%2012330%20Salles-la-Source!5e0!3m2!1sfr!2sfr!4v1696322224607!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
				<div class="align_center"> Adresse : <?php echo $address; ?>, <?php echo $postcode; ?> <?php echo $city; ?> </div>
			</div>
			‎ 
		</div>   
		</div>
		</div>
		<footer>
			<h1 id="Contact" class="white"> Contact : </h1>
			<div>
				<h3> Tel : <?php echo $phone; ?></h3>
				<h3> mail :  <?php echo $mail; ?></h3>
			</div>
			
			<div> <img src="img/facebook.png" /> <?php echo $mail; ?></div>
			<div> <img src="img/twitter.png" /> <?php echo $mail; ?></div>
			<div> <img src="img/instagram.png" /> <?php echo $mail; ?></div>
			
		</footer>

<script src="index2.js"></script>
	</body>
	
</html>