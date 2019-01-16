<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Candidature My Digital School</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/style-mds.css" media="all" />
		<link rel="stylesheet" href="css/style-mds-eva.css"> 
		<link rel="icon" type="img" href="elements/favicon.ico.png">
	</head>

	<body>
		<main class="form-main">
			<div class="block-main">
				<div class="page-presentation">
					<div class="logo">
						<img class="logo-mds" src="elements/logo-mds.png">
					</div>
					<div class="texte-mds">
						<h1 class="titre-mds">Bienvenue sur le site d'inscription en ligne de My Digital School !</h1>
						<div class="intro-mds">
							<p>Nous te proposons de remplir ton dossier de candidature en ligne, simplement et facilement.</p>
							<p>Plus de <span class="blue">documentation</span> au sujet de My Digital School Angers est également disponible avec le lien ci-dessous. Tu peux aussi <span class="blue">commencer ta candidature</span> ou la <span class="blue">reprendre là où tu l'avais laissée</span>.</p>
						</div>				
					</div>
					<?php include('functions/form-elements.php'); ?>
					
					<div class="container-lgn">
						<div class="lgn lgn-1">
						<?php echo createbtn("doc", "Recevoir </br>la documentation", "#FFFFFF", "#FFBD1D", "#FFBD1D");
						echo createbtn("debut", "Commencer </br>ma candidature", "#FFFFFF", "#FF8A22", "#FF8A22");
						echo createbtn("reprendre", "Reprendre </br>ma candidature", "#FFFFFF", "#4BC4CF", "#4BC4CF");

						?>
						</div>
					</div>
						
				</div>
			</div>


				

			</div><?php include 'footer.php';?>
		</main>
	    <script type="text/javascript" src="js/jquery.min.js"></script>
      	<script type="text/javascript" src="js/effects.js"></script>
	</body>

</html>