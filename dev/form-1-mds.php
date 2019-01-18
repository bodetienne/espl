<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Candidature My Digital School</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/style-mds.css" media="all" />
		<link rel="stylesheet" href="css/style-mds-eva.css"> 
		<link rel="stylesheet" href="css/style-mds-alex.css"> 
		<link rel="stylesheet" href="css/style-mds-header-footer.css"> 
		<link rel="icon" type="img" href="elements/favicon.ico.png">
	</head>

	<body>
		<main class="form-main">
			<div class="block-main">
				<div class="page-formulaire-1">
					<div class="aside">
						<?php include 'header.php'; ?>
					</div>
					<div class="main">
						<img class="progression-mds" src="elements/barre-progression-mds-1.png">
						<h1 class="titre-mds">Présente-toi</h1>
						<div class="nom-prenom">
							<?php include('functions/form-elements.php');
							echo textfield("", "Prénom ", "no", "yes");
							echo textfield("", "Nom ", "no", "yes");
							?>
						</div>
						<?php echo createbtn("debut", "Sauvegarder", "#F7B60A", "white", "#F7B60A"); ?>
					</div>
				</div>
			</div>				

			<?php include 'footer.php';?>
		</main>
	    <script type="text/javascript" src="js/jquery.min.js"></script>
      	<script type="text/javascript" src="js/effects.js"></script>
	</body>

</html>