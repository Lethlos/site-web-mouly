<! Doctype html>
<html>

	<head>
		<title>Gite de Figuiès</title>
		<link rel="stylesheet" href="normelize.css">
		<link rel="stylesheet" href="index.css">
		<script src="edition_page.js"></script>
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Amaranth&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Shantell+Sans&display=swap" rel="stylesheet">
		<meta charset="utf-8">
	</head>
	
	<body>
		<header class = "header">
			<div class = "header-title">
				<img class="logo" src="img/LOGO-figuies.png" height=100px/>
				<h1 class="white"> GITE DE FIGUIES </h1>
				<button id="login">Sign out</button>
			</div>
		</header>
		<div class="flex_row_center">
		<div class="content">
			<form action="imgupload.php" method="post" enctype="multipart/form-data">
				<label>Select Image File:</label>
				<input type="file" name="image">
				<input type="submit" name="submit" value="Upload">
			</form>
			<h1 id="Photos" class="ancres"> Photos</h1>
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
		<form action="/ma-page-de-traitement" method="post">
			<textarea id="msg" name="user_message">
				Le spam est l'un des problèmes les plus courants rencontrés par les utilisateurs d'Internet. Les courriers indésirables sont non seulement une nuisance, mais peuvent également contenir des liens ou des pièces jointes malveillants, menaçant la sécurité des ordinateurs et des données personnelles. Dans ce contexte, la détection de spam est un enjeu majeur pour les experts en sécurité informatique.Le spam est l'un des problèmes les plus courants rencontrés par les utilisateurs d'Internet. Les courriers indésirables sont non seulement une nuisance, mais peuvent également contenir des liens ou des pièces jointes malveillants, menaçant la sécurité des ordinateurs et des données personnelles. Dans ce contexte, la détection de spam est un enjeu majeur pour les experts en sécurité informatique.Le spam est l'un des problèmes les plus courants rencontrés par les utilisateurs d'Internet. Les courriers indésirables sont non seulement une nuisance, mais peuvent également contenir des liens ou des pièces jointes malveillants, menaçant la sécurité des ordinateurs et des données personnelles. Dans ce contexte, la détection de spam est un enjeu majeur pour les experts en sécurité informatique.Le spam est l'un des problèmes les plus courants rencontrés par les utilisateurs d'Internet. Les courriers indésirables sont non seulement une nuisance, mais peuvent également contenir des liens ou des pièces jointes malveillants, menaçant la sécurité des ordinateurs et des données personnelles. Dans ce contexte, la détection de spam est un enjeu majeur pour les experts en sécurité informatique.Le spam est l'un des problèmes les plus courants rencontrés par les utilisateurs d'Internet. Les courriers indésirables sont non seulement une nuisance, mais peuvent également contenir des liens ou des pièces jointes malveillants, menaçant la sécurité des ordinateurs et des données personnelles. Dans ce contexte, la détection de spam est un enjeu majeur pour les experts en sécurité informatique.Le spam est l'un des problèmes les plus courants rencontrés par les utilisateurs d'Internet. Les courriers indésirables sont non seulement une nuisance, mais peuvent également contenir des liens ou des pièces jointes malveillants, menaçant la sécurité des ordinateurs et des données personnelles. Dans ce contexte, la détection de spam est un enjeu majeur pour les experts en sécurité informatique.
			</textarea>
			<h1 id="Equipement-services" class="ancres"> Équipement et services </h1>
			<div class="flex_col">
				<span>
					<input type="checkbox" id="serv1" name="serv1" checked />
					<label for="serv1">service 1</label>
				</span>
				<span>
					<input type="checkbox" id="serv2" name="serv2" checked />
					<label for="serv2">service 2</label>
				</span>
				<span>
					<input type="checkbox" id="serv3" name="serv3" checked />
					<label for="serv3">service 3</label>
				</span>
				<span>
					<input type="checkbox" id="serv4" name="serv4" checked />
					<label for="serv4">service 4</label>
				</span>
				<span>
					<input type="checkbox" id="serv5" name="serv5" checked />	
					<label for="serv5">service 5</label>
				</span>
			</div>
			<div>
				<h1 id="Capacité" class="ancres"> Capacités </h1>
				<div class="flex_row capacityDiv">
					<span>
						<label for="Lit">Lit :</label>
						<input type="number" id="inputBed" name="inputBed" value="4"/>
					</span>
					<span>
						<label for="Place">Place :</label>
						<input type="number" id="inputPlace" name="inputPlace" value="2"/>
					</span>
					<span>
						<label for="Chambre">Chambre :</label>
						<input type="number" id="inputRoom" name="inputRoom" value="6"/>
					</span>
					<span></span>
					<span></span>
					<span></span>
				</div>
				
				<h1> Tarifs </h1>
				<div class="flex_col rateDiv">
					<span>
						<label for="inputPriceWeek">Semaine moyenne saison à </label>
						<input type="number" id="inputPriceWeek" name="inputPriceWeek" value="550"/> €
					</span></br>
					<span>
						<label for="inputPriceNight">Nuitée Moyenne saison à </label>
						<input type="number" id="inputPriceNight" name="inputPriceNight" value="85"/> €
					</span></br>
					<span>
						<label for="inputPriceHighWeek">Semaine haute saison à </label>
						<input type="number" id="inputPriceHighWeek" name="inputPriceHighWeek" value="650"/> €
					</span></br>
					<span>
						<label for="inputPriceHighNight">Nuitée haute saison à </label>
						<input type="number" id="inputPriceHighNight" name="inputPriceHighNight" value="110"/> €
					</span></br>
				</div>
				<h1> Moyen de paiement </h1>
				<div class="flex_col">
					<span>
						<input type="checkbox" id="Espece_accepte" name="Espece_accepte" checked />
						<label for="Espece_accepte">Espece</label>
					</span>
					<span>
						<input type="checkbox" id="Cheque_accepte" name="Cheque_accepte" checked />
						<label for="Cheque_accepte">Cheque</label>	
					</span>
					<span>
						<input type="checkbox" id="Virement_accepte" name="Virement_accepte" checked />
						<label for="Virement_accepte">Virement</label>
					</span>
				</div>
				
				<h1> Localisation </h1>
				<div class="flex_col localisationDiv">
					<span>
						<label for="inputAdress">Adresse </label>
						<input type="text" id="inputAdress" name="inputAdress" value="140 rue de Figuiès"/>
					</span></br>
					<span >
						<label for="inputCP">Code Postal </label>
						<input type="number" id="inputCP" name="inputCP" value="12330"/>
						<span id="errInputCP" class="errMessage"></span>
					</span></br>
					<span>
						<label for="inputCity">Ville </label>
						<input type="text" id="inputCity" name="inputCity" value="Salles-la-Source"/>
					</span></br>
				</div>
				
				<h1 id="Disponibilité" class="ancres"> Disponibilité </h1>
				<img src="img/DisponibiliteTODO.png"/>
				
				<h1> Contact </h1>
				<div class="flex_col contactDiv">
					<span>
						<label for="inputNumTel">Tel </label>
						<input type="text" id="inputNumTel" name="inputNumTel" value="05 65 76 89 01"/>
						<span id="errInputNumTel" class="errMessage"></span>
					</span></br>
					<span>
						<label for="Place">Mail</label>
						<input type="text" id="Place" name="nb_place" value="gitefigiues@gmail.com"/>
					</span></br>
					<span>
						<label for="inputFacebook">Facebook </label>
						<input type="text" id="inputFacebook" name="inputFacebook" value="monFacebook"/>
						<span id="errInputFacebook" class="errMessage"></span>
					</span></br>
					<span>
						<label for="inputX">X </label>
						<input type="text" id="inputX" name="inputX" value="@monTwitter"/>
					</span></br>
					<span>
						<label for="inputInsta">Instagram </label>
						<input type="text" id="inputInsta" name="inputInsta" value="@monInsta"/>
					</span></br>
				</div>
			</div>
		</form>
		</div>
		</div>			‎
		<footer>
			<h1 id="Contact" class="white"> Contact : </h1>
			<div>
				<h3> Tel : 05 65 76 89 01</h3>
				<h3> mail :  gitefigiues@gmail.com</h3>
			</div>
			
			<div> <img src="img/facebook.png" width="40px" height="40px"/> monFacebook</div>
			<div> <img src="img/twitter.png" width="40px" height="40px"/> @monTwitter</div>
			<div> <img src="img/instagram.png" width="40px" height="40px"/> @monInsta</div>
			
		</footer>

<script src="index2.js"></script>
	</body>
	
</html>