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
					<div class="main formulaire-3">
						<img class="progression-mds" src="elements/barre-progression-mds-2.png">
						<h1 class="titre-mds">Tes garants <span class="etape-garant">1/2</span></h1>
						<div class="form-3">
							<div class="form-zone">
								<div class="form-gauche">
									<div class="prenom-garant-1">		
										<label class="label label-prenom">Prénom<span class="required"> *</span></label>
										<div class="champ-prenom">
											<input class="textfield-input" type="text" id="prenom-garant">
										</div>						
									</div>
									<div class="nom-garant">		
										<label class="label label-nom">Nom<span class="required"> *</span></label>
										<div class="champ-nom">
											<input class="textfield-input" type="text" name="textfield" id="nom">
										</div>						
									</div>
									<div class="mail-garant">		
										<label class="label label-mail-garant">E-mail<span class="required"> *</span></label>
										<div class="champs-mail-garant">
											<input class="textfield-input" type="text" name="textfield"id="mail">
										</div>						
									</div>

									<div class="tel-port-garant">		
										<label class="label label-tel-port">Tel. portable<span class="required"> *</span></label>
										<div class="champ-tel-port-garant">
											<input class="tel-input" type="tel" minlength="10" maxlength="10" size="14" name="telfield"id="tel-garant">
										</div>						
									</div>
									<div class="lien-parente">
										<label class="label label-lien-parente">Lien de parenté<span class="required"> *</span></label>
										<div class="champ-lien-parente">
											<input class="textfield-input" type="text" name="textfield" id="lien"><a href="#" class="bouton-info"><img class="bouton" src="elements/info-button.png"></a>
										</div>
									</div>								
								</div>
								<div class="divider-milieu"></div>
								<div class="form-droite">
									<div class="meme-adresse">
										<p class="text-adresse">Même adresse que précédemment ?</p>
										<input class="checkbox-input" type="checkbox" id="button-adresse"><label for="button-adresse"></label>
									</div>
									<div class="adresse-garant">		
										<label class="label label-adresse">Adresse <span class="required"> *</span></label>
										<div class="champs-adresse">
											<input class="textfield-input" type="text" name="textfield"id="adresse">
										</div>						
									</div>
									<div class="CP-ville">
										<div class="cp-garant">
											<label class="label label-cp">Code postal<span class="required"> *</span></label>
											<div class="champ-cp">
												<input class="number-input" type="number" id="cp">
											</div>
										</div>
										<div class="ville-garant">	
											<label class="label label-ville">Ville<span class="required"> *</span></label>
											<div class="champs-ville">
												<input class="textfield-input" type="text" name="textfield" id="ville">
											</div>		
										</div>
									</div>								
									<div class="profession-garant">	
										<label class="label label-profession">Profession</label>
										<div class="champ-profession">
											<input class="textfield-input" type="text" id="profession"><a href="#" class="bouton-info"><img class="bouton" src="elements/info-button.png"></a>
										</div>			
									</div>
									<div class="entreprise">		
										<label class="label label-entreprise">Entreprise</label>
										<div class="champ-entreprise">
											<input class="textfield-input" type="text" id="entreprise"><a href="#" class="bouton-info"><img class="bouton" src="elements/info-button.png"></a>
										</div>						
									</div>
								</div>
							</div>

							<div class="container-button">
								<a class="lien precedent" href="form-2-mds.php">
									<button id="previous" class="btn-previous" type="button">Précédent</button>
								</a>
								<a class="lien sauvegarder" href="#">
									<button id="save" class="btn-save" type="button">Sauvegarder</button>
								</a>
								<a class="lien suivant" href="form-4-mds.php">
									<button id="suivant" class="btn-next" type="button" name="button">Suivant</button>
								</a>
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