<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Candidature My Digital School</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/style-mds.css" media="all" />
		<link rel="stylesheet" href="css/style-mds-alex.css">
		<link rel="stylesheet" href="css/style-mds-header-footer.css">
		<link rel="icon" type="img" href="elements/favicon.ico.png">
	</head>

	<body>
		<main class="form-main aide">
			<div class="block-main">
				<div class="page-aide">
					<div class="aside">
	        </div>
	        <div class="main">
						<?php include 'header.php';?>
						<div class="title_question">
							<h1 class="titre-mds">Besoin d'aide ou d'une réponse à une question ?</h1>
						</div>
						<hr></hr>
						<div class="answer_question">
							<p>Tu trouveras toutes tes réponses en parcourant le menu sur ta gauche,
								sinon tu peux nous contacter à travers le formulaire de contact en cliquant
								sur le bouton ci-dessous
							</p>

						</div>
						<?php include 'functions/form-elements.php';?>
						<a href="contact.php"><?php echo createbtn("contacter", "Contact", "#FFFFFF", "#FF8A22", "#FF8A22");?></a>
					</div>
				</div>
			</div>

			<?php include 'footer.php';?>
		</main>
	    <script type="text/javascript" src="js/jquery.min.js"></script>
      	<script type="text/javascript" src="js/effects.js"></script>
	</body>
</html>
