<! Doctype html>
<html>

<?php 
	include 'get_data.php';
?>

<head>
	<title>Gite de Figuiès</title>
	<link rel="stylesheet" href="index.css">
	<script src="edition_page.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Amaranth&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.0/main.js"></script>
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
		<div class="content flex_col">
			<h1 id="Photos" class="ancres"> Photos</h1>
			<div class="PhotoDiv">
				<form action="imgupload.php" method="post" enctype="multipart/form-data">
					<div class="flex_col" >
						<label>Sélectionnez une image:</label>
						<input  style="width: 100%;" type="file" name="image">
						<input  style="width: 100px;" type="submit" name="submit" value="Envoyer">
					</div>
				</form>
				<br/>
				<form action="imgdelete.php" method="post" enctype="multipart/form-data">
					<div class="flex_col">
						<?php
							include 'view_imgdelete.php';
						?>
					</div>
					<input style="width: 175px;" type="submit" name="submit" value="Supprimer la selection">
				</form>
				<h2>Rendu</h2>
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
			</div>
			<form id="form_envoi" action="page_save.php" method="post">
				<textarea id="msg" name="user_message" placeholder="Description du gite">
					<?php echo $description; ?>
				</textarea>
				<h1 id="Equipement-services" class="ancres"> Équipement et services </h1>
				<div class="flex_col">
					<?php
					import_services_admin($db);
					?>
				</div>
				<h1 id="Capacity" class="ancres"> Capacités </h1>
				<div class="flex_row capacityDiv">
					<span>
						<label for="inputBed">Lit :</label>
						<input type="number" id="inputBed" name="inputBed" value="<?php echo $bed; ?>">
					</span>
					<span>
						<label for="inputPlace">Place :</label>
						<input type="number" id="inputPlace" name="inputPlace" value="<?php echo $place; ?>"/>
					</span>
					<span>
						<label for="inputRoom">Chambre :</label>
						<input type="number" id="inputRoom" name="inputRoom" value="<?php echo $bedroom; ?>"/>
					</span>
					<span></span>
					<span></span>
					<span></span>
				</div>
				
				<h1> Tarifs </h1>
				<div class="flex_col rateDiv">
					<span>
						<label for="inputPriceWeek">Semaine moyenne saison à </label>
						<input type="number" id="inputPriceWeek" name="inputPriceWeek" value="<?php echo $week; ?>"/> €
					</span></br>
					<span>
						<label for="inputPriceNight">Nuitée Moyenne saison à </label>
						<input type="number" id="inputPriceNight" name="inputPriceNight" value="<?php echo $night; ?>"/> €
					</span></br>
					<span>
						<label for="inputPriceHighWeek">Semaine haute saison à </label>
						<input type="number" id="inputPriceHighWeek" name="inputPriceHighWeek" value="<?php echo $week_high; ?>"/> €
					</span></br>
					<span>
						<label for="inputPriceHighNight">Nuitée haute saison à </label>
						<input type="number" id="inputPriceHighNight" name="inputPriceHighNight" value="<?php echo $night_high; ?>"/> €
					</span></br>
				</div>
				<h1> Moyen de paiement </h1>
				<div class="flex_col">
					<?php
						import_payments_admin($db);
					?>
				</div>
				
				<h1> Localisation </h1>
				<div class="flex_col localisationDiv">
					<span>
						<label for="inputAdress">Adresse </label>
						<input type="text" id="inputAdress" name="inputAdress" value="<?php echo $address; ?>"/>
					</span></br>
					<span >
						<label for="inputCP">Code Postal </label>
						<input type="number" id="inputCP" name="inputCP" value="<?php echo $postcode; ?>"/>
						<span id="errInputCP" class="errMessage"></span>
					</span></br>
					<span>
						<label for="inputCity">Ville </label>
						<input type="text" id="inputCity" name="inputCity" value="<?php echo $city; ?>"/>
					</span></br>
				</div>
				
				<h1 id="Disponibilité" class="ancres"> Disponibilité </h1>
				<div class="DispoDiv">
					<div class="margin_bottom">
						<p>Nouvelle réservation : 
						Du <input type="date" class="datePicker" id="inputStartAddDate" name="selectedDate"></input>
						Au <input type="date" class="datePicker" id="inputEndAddDate" name="selectedDate"></input>
						<input style="width: 175px;" type="submit" name="submitReservation" value="Valider"></input>
						<span id="errSelectedAddDate" class="errMessage">* Veuillez choisir un interval valide</span>
						</p>

						<label for="dateDropdown">Supprimer la réserveration débuttant le : </label>
						<select id="dateDropdown">
							<!-- Remplir la liste déroulante avec les dates de début à partir du tableau reservations -->
							<option value="">Sélectionnez une date</option>
							<!-- Boucle pour ajouter les options à partir du tableau de réservations -->
						</select>
						<input style="width: 175px;" type="submit" name="submitDeleteReservation" value="Supprimer"></input>
						<span id="errSelectedDelDate" class="errMessage">* Veuillez choisir une date</span>
						</p>
					</div>
					<div id="calendar"></div>
				</div>
				
				
				
				<h1> Contact </h1>
				<div class="flex_col contactDiv">
					<span>
						<label for="inputNumTel">Tel </label>
						<input type="text" id="inputNumTel" name="inputNumTel" value="<?php echo $phone; ?>"/>
						<span id="errInputNumTel" class="errMessage"></span>
					</span><br/>
					<span>
						<label for="inputMail">Mail</label>
						<input type="text" id="inputMail" name="inputMail" value="<?php echo $mail; ?>"/>
						<span id="errInputMail" class="errMessage"></span>
					</span><br/>
					<span>
						<label for="inputFacebook">Facebook </label>
						<input type="text" id="inputFacebook" name="inputFacebook" value="<?php echo $facebook; ?>"/>
						<span id="errInputFacebook" class="errMessage"></span>
					</span><br/>
					<span>
						<label for="inputX">X </label>
						<input type="text" id="inputX" name="inputX" value="<?php echo $x; ?>"/>
					</span><br/>
					<span>
						<label for="inputInsta">Instagram </label>
						<input type="text" id="inputInsta" name="inputInsta" value="<?php echo $instagram; ?>"/>
					</span>
					<br/>
				</div>
				<div>

					
				</div>			
			</form>
		</div>
	</div>			‎
	<footer>
		<div> <button id="boutonAnnulerEnvoi"> Annuler les modifications </button> </div>
		<div> <button id="boutonEnvoi"> Enregistrer les modifications </button> </div>		
	</footer>
	
	<script src="index2.js"></script>
</body>

</html>