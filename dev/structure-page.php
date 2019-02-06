<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Candidature My Digital School</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/style-mds.css" media="all" />
		<link rel="stylesheet" href="css/style-mds-structure.css">
		<link rel="stylesheet" href="css/style-mds-header-footer.css">
		<link rel="icon" type="img" href="elements/favicon.ico.png">
	</head>

	<body>
		<main class="form-main structure">
			<div class="block-main">
					<!-- PARTIE ASIDE (gauche) -->
					<div class="aside">

	        </div>
					<!-- FIN PARTIE ASIDE -->
					<!-- PARTIE MAIN (droite)-->
	        <div class="main">

						<div class="container-lgn">

							<h1 class="nom-form">Quelle est la formation de tes rêves ?</h1>
							<?php include 'functions/form-elements.php'; ?>
							<div class="container-titre">
								<h2>Bachelor Web et Digital</h2>
							</div>
							<div class="lgn lgn-1">
								<a href="#" class="info-button">
									<img class="info-button" src="elements/info-button.png" alt="bouton pour plus d\'informations">
								</a>
								<div class="groupe-formation">
									<div class="btn-school">
										<?php echo createbtn("1", "Année 1", "#707070", "white", "#17E5F5"); ?>
				            <?php echo createbtn("2", "Année 2", "#707070", "white", "#50A7FF"); ?>
									</div>
									<div class="txt-bachelor">
										<p class="cycle-mds">Cycle web et Digital : formation initiale</p>
										<div class="hashtag-groupe">
											<div class="ligne-hashtag">
												<span class="hashtag">#</span><p>Développement</p>
											</div>
											<div class="ligne-hashtag">
												<span class="hashtag">#</span><p>WebDesign</p>
											</div>
											<div class="ligne-hashtag">
												<span class="hashtag">#</span><p>WebMarketing</p>
											</div>
											<div class="ligne-hashtag">
												<span class="hashtag">#</span><p>Projet</p>
											</div>
											<div class="ligne-hashtag">
												<span class="hashtag">#</span><p>Méthodologie</p>
											</div>
										</div>
									</div>
								</div>
								<div class="check-group">
									<div class="block-btn">
										<?php echo createbtn("3", "Année 3", "#707070", "white", "#F74D9D"); ?>
										<img class="info-button" src="elements/info-button.png" alt="bouton pour plus d\'informations">
									</div>
									<div class="spé-grp">
										<h3 class="spé-title">Choisis ta spécialisation</h3>
										<?php echo checkbox("Développeur Digital"); ?>
										<?php echo checkbox("WebDesigner"); ?>
										<?php echo checkbox("WebMarketing et Social Media"); ?>
										<?php echo checkbox("E-Business"); ?>
									</div>
								</div>
							</div>

							<div class="container-titre">
								<h2>MBA</h2>
							</div>
							<div class="lgn lgn-2">
								<div class="check-group">
									<div class="block-btn">
										<img class="info-button" src="elements/info-button.png" alt="bouton pour plus d\'informations">
										<?php echo createbtn("4", "Année 1", "#707070", "white", "#9B9B9B"); ?>
									</div>
									<div class="spé-grp">
										<h3 class="spé-title">Choisis ta spécialisation</h3>
										<?php echo checkbox("Entreprenariat Web et Digital"); ?>
										<?php echo checkbox("Entreprenariat Web et Digital"); ?>
									</div>
								</div>
								<div class="check-group">
									<div class="block-btn">
										<?php echo createbtn("5", "Année 2", "#707070", "white", "#343434"); ?>
										<img class="info-button" src="elements/info-button.png" alt="bouton pour plus d\'informations">

									</div>
									<div class="spé-grp">
										<h3 class="spé-title">Choisis ta spécialisation</h3>
										<?php echo checkbox("Entreprenariat Web et Digital"); ?>
										<?php echo checkbox("Entreprenariat Web et Digital"); ?>
									</div>
								</div>
							</div>

						</div>

					</div>
				<!-- FIN PARTIE MAIN -->
				</div>

			<?php include 'footer.php';?>
		</main>
	    <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/effects.js"></script>
			<script type="text/javascript" src="js/aide.js"></script>
	</body>
</html>
