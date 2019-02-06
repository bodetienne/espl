<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Candidature My Digital School</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/style-mds.css" media="all" />
		<link rel="stylesheet" href="css/style-mds-eva.css"> 
		<link rel="stylesheet" href="css/style-mds-structure.css"> 
		<link rel="stylesheet" href="css/style-mds-header-footer.css"> 
		<link rel="icon" type="img" href="elements/favicon.ico.png">
	</head>

	<body>
		<main class="form-main">
			<div class="block-main">
				<div class="page-presentation">
					<?php include 'header.php'; ?>
					<div class="texte-mds">
						<h1 class="titre-mds">Bienvenue sur le site d'inscription en ligne de My Digital School !</h1>
						<div class="intro-mds">
							<p>Nous te proposons de remplir ton dossier de candidature en ligne, simplement et facilement.</p>
							<p>Plus de <span class="yellow">documentation</span> au sujet de My Digital School Angers est également disponible avec le lien ci-dessous. Tu peux aussi <span class="orange">commencer ta candidature</span> ou la <span class="blue">reprendre là où tu l'avais laissée</span>.</p>
						</div>				
					</div>
					
					<div class="container-button">
						<a href="https://www.mydigitalschool.com/demande-de-documentation" class="doc"><button type="button">Recevoir la documentation</button></a>
						<a href="form-1-mds.php" class="begin"><button type="button">Commencer ma candidature</button></a>
						<a href="connexion-mds.php" class="continue"><button type="button">Reprendre ma candidature</button></a>
					
					</div>
						
				</div>
			</div>				

			<?php include 'footer.php';?>
		</main>
	    <script type="text/javascript" src="js/jquery.min.js"></script>
      	<script type="text/javascript" src="js/effects.js"></script>
	</body>

</html>