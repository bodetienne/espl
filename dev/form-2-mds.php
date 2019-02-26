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
											<input class="number-input" type="number" min="1" max="31" placeholder="JJ" id="jour">
											<input class="number-input" type="number" min="1" max="12" placeholder="MM" id="mois">
											<input class="number-input" type="number" placeholder="AAAA" id="annee">
										</div>						
									</div>
									<div class="lieu-naissance">		
										<label class="label label-lieu">Lieu de naissance<span class="required"> *</span></label>
										<div class="champs-lieu">
											<input class="textfield-input" type="text" name="textfield"id="lieu">
										</div>						
									</div>
									<div class="mail-candidat">		
										<label class="label label-mail-candidat">E-mail<span class="required"> *</span></label>
										<div class="champ-mail-candidat">
											<input class="textfield-input" type="text" name="textfield"id="mail">
										</div>						
									</div>
									<div class="tel-candidat">
										<div class="tel-fixe-candidat">		<label class="label label-tel-fixe">Tel. fixe</label>
											<div class="champs-tel-fixe-candidat">
												<input class="tel-input" type="tel" minlength="10" maxlength="10" size="14" name="telfield"id="tel-fixe">
											</div>						
										</div>
										<div class="tel-port-candidat">		<label class="label label-tel-port">Tel. portable<span class="required"> *</span></label>
											<div class="champs-tel-port-candidat">
												<input class="tel-input" type="tel" minlength="10" maxlength="10" size="14" name="telfield"id="tel-port">
											</div>						
										</div>
									</div>
									
								</div>
								<div class="divider-milieu"></div>
								<div class="form-droite">
									<div class="adresse-candidat">		
										<label class="label label-adresse">Adresse <span class="required"> *</span></label>
										<div class="champs-adresse">
											<input class="textfield-input" type="text" name="textfield"id="adresse">
										</div>						
									</div>
									<div class="CP-ville">
										<div class="cp-candidat">
											<label class="label label-cp">Code postal<span class="required"> *</span></label>
											<div class="champ-cp">
												<input class="number-input" type="number" id="cp">
											</div>
										</div>
										<div class="ville-candidat">	
											<label class="label label-ville">Ville<span class="required"> *</span></label>
											<div class="champs-ville">
												<input class="textfield-input" type="text" name="textfield" id="ville">
											</div>						
										</div>
									</div>								
									<div class="secu-candidat">	
										<label class="label label-secu">Numéro de sécurité sociale<span class="required"> *</span></label>
										<div class="champ-secu">
											<input class="number-input" type="number" id="secu"><a href="#" class="bouton-info"><img class="bouton" src="elements/info-button.png"></a>
										</div>			
									</div>
									<div class="permis">		
										<label class="label label-permis">Permis<span class="required"> *</span></label>
										<div class="champ-permis">
											<div class="permis-oui">
												<input type="radio" id="oui" name="radiofield" value="oui">
												<label for="oui"></label>
											</div>
											<div class="permis-non">
												<input type="radio" id="non" name="radiofield" value="non">
												<label for="non"></label>
											</div>
											
										</div>						
									</div>
								</div>
							</div>

							<div class="container-button">
								<a class="lien precedent" href="form-1-mds.php">
									<button id="previous" class="btn-previous" type="button">Précédent</button>
								</a>
								<a class="lien sauvegarder" href="#">
									<button id="save" class="btn-save" type="button">Sauvegarder</button>
								</a>
								<a class="lien suivant" href="form-3-mds.php">
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