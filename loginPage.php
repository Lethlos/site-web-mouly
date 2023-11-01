<! Doctype html>
<html>

<?php 
	include 'get_data.php';
?>

	<head>
		<title>Gite de Figuiès</title>
		<link rel="stylesheet" href="index.css">
		<meta charset="utf-8">

	</head>
	
	<body>
		<header class = "header">
			<div class = "header-title">
				<img class="logo" src="img/LOGO-figuies.png" height=100px/>
				<h1 class="white"> GITE DE FIGUIES </h1>
				<button id="login">Sign out</button>
			</div>

            <!-- Popup de login -->
            <div class="popup" id="loginPopup">
                <div class="popup-content">
                    <h2>Login</h2>
                    <form id="loginForm">
                        <input type="text" id="username" placeholder="Username" required>
                        <input type="password" id="password" placeholder="Password" required>
                        <button type="button" onclick="checkLogin()">Login</button>
                    </form>
                </div>
            </div>
            <div id="overlay"></div>
	</body>
	<script src="loginPage.js"></script>
</html>