<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Candidature My Digital School</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/style-mds.css" media="all" />
		<link rel="stylesheet" href="css/style-mds-eva.css"> 
		<link rel="stylesheet" href="css/style-mds-alex.css"> 
		<link rel="stylesheet" href="css/style-mds-structure.css"> 		
		<link rel="stylesheet" href="css/style-mds-header-footer.css"> 
		<link rel="icon" type="img" href="elements/favicon.ico.png">
	</head>

	<body>
		<main class="form-main">
			<div class="block-main">		
					<div class="aside">
						<?php include 'header.php'; ?>
						<div class="fond-martin">
							<div class="mur">
								<div class="col-1"></div>
								<div class="col-2">
									<div class="blanc"></div>
									<div class="bleu"></div>
								</div>
								<div class="col-3"></div>
							</div>
							<div class="trottoir">
								<div class="ligne-1"></div>
								<div class="ligne-2"></div>
							</div>
							<div class="sol"></div>
						</div>
					</div>
					<div class="main formulaire-2">
						<img class="progression-mds" src="elements/barre-progression-mds-2.png">
						<h1 class="titre-mds">Présente-toi</h1>
						<div class="form-2">
							<div class="form-zone">
								<div class="form-gauche">
									<div class="date-naissance">		
										<label class="label label-date">Date de naissance<span class="required"> *</span></label>
										<div class="champs-date">
											<input class="textfield-input" type="number" min="1" max="31" name="textfield" placeholder="JJ" id="jour">
											<input class="textfield-input" type="number" min="1" max="12" name="textfield" placeholder="MM" id="mois">
											<input class="textfield-input" type="number" min="1900" name="textfield" placeholder="AAAA" id="annee">
										</div>						
									</div>
								</div>
								<div class="divider-milieu"></div>
								<div class="form-droite">
									<div class="nom-prenom">
										<div class="textfield">
											<div class="input-group">
												<input class="textfield-input" type="text" name="textfield" placeholder="Prénom *">
											</div>						
										</div>
									</div>
								</div>
							</div>

							<div class="container-lgn">
								<div class="lgn lgn-1">
									<button id="save" class="btn-save" type="button">Enregistrer</button>
									<a class="lien suivant" href="form-2-mds.php">
										<button id="suivant" class="btn-next" type="button" name="button">Suivant</button>
									</a>
								</div>
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