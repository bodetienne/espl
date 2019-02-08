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
					<div class="main dossier-reflexion">
						<img class="progression-mds" src="elements/barre-progression-mds-1.png">
						<h1 class="titre-mds">Dossier de Reflexion</h1>
            <h3 class="renseignement-mds">Réponds aux questions suivantes sur un documents à part (format PDF), en précisant clairement ton nom, prénom et le numéro de la question traitée.</h3>
						<div class="dossier-questions">
							<div class="dossier-question 1">
								<h3 class="dossier-numero">01.</h3>
								<div class="questions">
									<p>Quel est ton projet professionnel ?</p>
									<p>Quelles sont tes motivations pour la spécialisation choisie ?</p>
									<p>Quels atouts as-tu pour cette formation ?</p>
									<p>Quelles sont, selon-toi, les valeurs importantes dans la vie professionnelle ?</p>
								</div>
							</div>
							<div class="dossier-question 2">
								<h3 class="dossier-numero">02.</h3>
								<div class="questions">
									<p>Répondre aux questions suivantes en Anglais.</p>
									<p>Describe a difficult situation you met.</p>
									<p>Explain the tools you used to solve this difficulty and what you learnt about it.</p>
								</div>
							</div>
							<div class="bouton-upload">
								<input type="file" id="UPLOAD" name="UPLOAD" accept=".pdf"/>
								<label for="UPLOAD">IMPORTER FICHIER PDF</label>
							</div>
						</div>
						<div class="boutons-nav">
							<div class="boutons">
								<button type="button" name="precedent" class="precedent">PRECEDENT</button>
								<button type="button" name="enregistrer" class="enregistrer">ENREGISTRER</button>
								<button type="button" name="suivant" class="suivant">SUIVANT</button>
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
