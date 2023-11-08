<! Doctype html>
<html>

	<head>
		<title>Gite de Figuiès</title>
		<link rel="stylesheet" href="index.css">
		<meta charset="utf-8">

	</head>
	
	<body>
		<header class = "header">
		<form action="signOut.php" method="post" enctype="multipart/form-data">
			<div class = "header-title">
				<img class="logo" src="img/LOGO-figuies.png" height=100px/>
				<h1 class="white"> GITE DE FIGUIES </h1>
				<button id="login">Sign out</button>
			</div>
		</form>

            <!-- Popup de login -->
            <div class="popup" id="loginPopup">
                <div class="popup-content">
                    <h2>Login</h2>
                    <form id="loginForm" name="loginForm" action="login.php" method="post" enctype="multipart/form-data">
                        <input type="text" id="username" name="username" placeholder="Username" required>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <button type="submit" name="submit">Login</button>
                    </form>
                </div>
            </div>
            <div id="overlay"></div>
	</body>
	<script src="loginPage.js"></script>
</html>