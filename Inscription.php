<!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="DominoTrading.css"/>
		<link rel="stylesheet" href="formulaire.css"/>
		<link rel="stylesheet" href="assets/css/jquery.css" />
		<title>Inscription-	Domino Trading</title>
		<meta http-equiv="X-UA-Compstible" content="ie-edge">
	</head>
	<body class="landing">

		<!-- Header -->
			<header class="pio">
				
				<h1 class="pied11"> DOMINO TRADING</h1>
		    	<h4 class="pied11">Former Les Traders a L'excellence</h4>
			
			</header>
			<header id="header" class="alt">
				<a href="#nav">Menu</a>
			</header>
		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="Domino Trading.html">Acceuil</a></li>
					<li><a href="Inscription.php">Inscription</a></li>
					<li><a href="Nous contacter.html">Nous contacter</a></li>
					<li><a href="Foire aux questions.html">Foire aux questions</a></li>
				</ul>
				
			</nav>

		<!-- Section -->
			<section class="op1">
				<article>
					<h2 class="ok">ENREGISTREMENT</h2>
					<p class="ok">L'inscription a ce site est facile.Il vous suffit de remplir les champs ci-dessous et nous allons créer un compte pour vous en un rien de temps.</p>
					<div class="milieu">
						<form method="post"  action="enregistrement.php">
							<fieldset>
								<legend><h3>DETAILS DU COMPTE</h3></legend>
									<p>
										 <label for="nom"> <strong>Nom d'utilisateur(obligatoire)</strong><br/> </label>
										<input type="text" name="Name" size="30" id="nom" placeholder=" Votre nom" required autofocus>
									</p>
									<p>
										<label for="prenom"> <strong>Prénom d'utilisateur(obligatoire)</strong><br/> </label>	
										<input type="text" name="seudo" id="prenom" placeholder=" Votre prenom" required>
									</p>
									<strong>Localisation</strong>
									<p>
										<label for="address"> <strong>Adresse</strong><br/> </label>										
										<input type="text" name="adresse" id="address" placeholder=" Votre adresse" required>
									</p>
									
						    </fieldset>
						    <fieldset>
								<legend><h3>DETAILS DU PROFIL</h3></legend>

									<p>
										<label for="mel"> <strong>Adresse e-mail(obligatoire)</strong><br/> </label>
										<input type="email" name="mail" id="mel" placeholder=" Votre mail" required>
									</p>
									<p>
									 	<label for="tel"> <strong>Numéro de téléphone</strong><br/> </label>									
										<input type="number" name="phone" id="tel" placeholder=" Votre numéro de téléphone" required>
									</p>							</fieldset>
							<p><input type="submit" value="Finaliser inscription" class="button"></p>
						</form>
					</div>
				</article>
			</section>
		<!-- Footer -->
			<footer class="pied02">

				
				<p class="pied11"><< THERE IS NO FREE LUNCH>> Il n'y a pas de repas gratuit</p>
				<p class="pied11">Notre programme de formation s'étend sur une période longue pour vous permettre d'acquérir toutes les compétences pour opérer de manière optimale.</p>
				<p class="pied11"><a class="diep">Une seule exigence</a>: la volonté d'apprendre et de progresser.</p></p>
				<p class="pied2"><strong>Avertissement:</strong></p>
				<p class="pied11">Ce contenu est la propriété exclusive de <a class="diep">DOMINO INSTITUTE DMCC</a>.</p>
				<p class="pied11">Il est donc formellement interdit de diffuser ce contenu sans une autorisation écrite de notre part.</p>
				<p class="eipd"> <a class="deip">  2020 Copyright© DOMINO INSTITUTE DMCC,All Rights Reserved</a> <a class="pied"> Politique de Confidentialité|Mentions Légales</a></p> <br/>

			</footer>
			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>


