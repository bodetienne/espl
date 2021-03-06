<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Candidature My Digital School</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/style-mds.css" media="all" />
		<link rel="stylesheet" href="css/style-mds-eva.css">
    <link rel="stylesheet" href="css/style-mds-emma1.css">
		<!-- <link rel="stylesheet" href="css/style-mds-alex.css"> -->
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
					<h1 class="titre-mds">PIÈCES A JOINDRE</h1>
					<div class="form-block">
					  <div class="form-zone">
              <div class="liste-pieces-jointes">
                <div class="liste photo-identite">
                  <label class="element element-1"><div class="round-list-jaune"> </div>Photo d'identité <span class="obligatoire-mention">*</span> </label>
                  <div class="upload">
                    <label for="file" class="label-file-photo-identite"> <img src="elements/upload-button.png" alt="upload-button"> Télécharger</label>
                    <input id="file" class="input-file" type="file">
                  </div>
                </div>
                <div class="liste dernier-releve">
                  <label class="element element-2"><div class="round-list-orange"> </div>Dernier relevé de notes</label>
                  <div class="upload">
                    <label for="file" class="label-file-orange"> <img src="elements/upload-button.png" alt="upload-button"> Télécharger</label>
                    <input id="file" class="input-file" type="file">
                  </div>
                </div>
                <div class="liste dernier-diplome">
                  <label class="element element-3"><div class="round-list-orange"> </div>Dernier diplôme obtenu</label>
                  <div class="upload">
                    <label for="file" class="label-file-orange"> <img src="elements/upload-button.png" alt="upload-button"> Télécharger</label>
                    <input id="file" class="input-file" type="file">
                  </div>
                  <div class="info">
                    <a href="#"><img src="elements/info-button.png" alt="bouton-info"></a>
                  </div>
                </div>
                <div class="liste cv">
                  <label class="element element-4"><div class="round-list-bleu"> </div>CV avec photo d'identité <span class="obligatoire-mention">*</span> </label>
                  <div class="upload">
                    <label for="file" class="label-file-bleu"> <img src="elements/upload-button.png" alt="upload-button"> Télécharger</label>
                    <input id="file" class="input-file" type="file">
                  </div>
                </div>
                <div class="liste lettre-motivation">
                  <label class="element element-5"><div class="round-list-bleu"> </div>Lettre de motivation <span class="obligatoire-mention">*</span> </label>
                  <div class="upload">
                    <label for="file" class="label-file-bleu"> <img src="elements/upload-button.png" alt="upload-button"> Télécharger</label>
                    <input id="file" class="input-file" type="file">
                  </div>
                </div>
                <div class="liste piece-identite">
                  <label class="element element-6"><div class="round-list-bleu-nuit"> </div>Pièce d'identité recto/verso <span class="obligatoire-mention">*</span> </label>
                  <div class="upload">
                    <label for="file" class="label-file-bleu-nuit"> <img src="elements/upload-button.png" alt="upload-button"> Télécharger</label>
                    <input id="file" class="input-file" type="file">
                  </div>
                </div>
                <div class="liste attestation-ECTS">
                  <label class="element element-7"><div class="round-list-rose"> </div>Attestation crédits ECTS acquis ou en cours d'acquisition </label>
                  <div class="upload">
                    <label for="file" class="label-file-rose"> <img src="elements/upload-button.png" alt="upload-button"> Télécharger</label>
                    <input id="file" class="input-file" type="file">
                  </div>
                  <div class="info">
                    <a href="#"><img src="elements/info-button.png" alt="bouton-info"></a>
                  </div>
                </div>
                <div class="container-button">
                  <a class="lien precedent" href="form-1-mds.php">
                    <button id="previous" class="btn-previous" type="button">Précédent</button>
                  </a>
                  <a class="lien sauvegarder" href="#">
                    <button id="save" class="btn-save" type="button">Sauvegarder</button>
                  </a>
                  <a class="lien suivant" href="form-2-mds.php">
                    <button id="suivant" class="btn-next" type="button" name="button">Suivant</button>
                  </a>
                </div>
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
