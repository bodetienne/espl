<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Candidature My Digital School</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/style-mds.css" media="all" />
		<link rel="stylesheet" href="css/style-mds-eva.css"> 
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
					<?php function createbtn ($id, $txt, $color, $bg, $border) {
					    echo'<button type="button" name="button" class="btn-presentation" id="' . $id .'"
					    style="color : ' . $color .'; background : ' . $bg .'; border : 1px solid ' . $border. ';"
					    >'.$txt.'</button>';
					}; ?>
					
					<div class="container-lgn">
						<div class="lgn lgn-1">
							<a href="https://www.mydigitalschool.com/demande-de-documentation"><?php echo createbtn("doc", "Recevoir la documentation", "#FFFFFF", "#FFBD1D", "#FFBD1D");?></a>
							<a href="form-1-mds.php"><?php echo createbtn("debut", "Commencer ma candidature", "#FFFFFF", "#FF8A22", "#FF8A22");?></a>
							<a href="connexion-mds.php"><?php echo createbtn("reprendre", "Reprendre ma candidature", "#FFFFFF", "#4BC4CF", "#4BC4CF");?></a>
						</div>
					</div>
						
				</div>
			</div>				

			<?php include 'footer.php';?>
		</main>
	    <script type="text/javascript" src="js/jquery.min.js"></script>
      	<script type="text/javascript" src="js/effects.js"></script>
	</body>

</html>