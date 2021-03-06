<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Candidature My Digital School</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/style-mds.css" media="all" />
		<link rel="stylesheet" href="css/style-mds-structure.css">
		<link rel="stylesheet" href="css/style-mds-header-footer.css">
		<link rel="stylesheet" href="css/style-mds-alex.css">
		<link rel="icon" type="img" href="elements/favicon.ico.png">
	</head>

	<body>
		<main class="form-main structure aide">
			<div class="block-main">
					<!-- PARTIE ASIDE (gauche) -->
					<div class="aside aide">
						<div class="menu">
							<div class="infos_perso">
								<button class="title perso">
									<h2 class="perso">1 - Infos personnelles</h2>
									<img src="elements/angle-arrow-down.png">
								</button>
								<div class="questions">
									<ul>
										<p>Pourquoi me demande-t-on mon numéro de sécurité sociale ?</p>
										<p>Pourquoi me demandez-vous si j'ai mon permis ?</p>
									</ul>
								</div>
							</div>
							<div class="infos_garants">
								<button class="title garant">
									<h2 class="garant">2 - Infos garants </h2>
									<img class="fleche" src="elements/angle-arrow-down.png">
								</button>
								<div class="questions">
									<ul>
										<p>Pourquoi me demande-t-on 2 garants ?</p>
										<p>Pourquoi me demandez-vous le métier de mes parents ?</p>
									</ul>
								</div>
							</div>
							<div class="infos_formation">
								<button class="title formation">
									<h2 class="formation">3 - Formation souhaitée</h2>
									<img class="fleche" src="elements/angle-arrow-down.png">
								</button>
								<div class="questions">
									<ul>
										<p>Pourquoi me demande-t-on 2 garants ?</p>
										<p>Pourquoi me demandez-vous le métier de mes parents ?</p>
									</ul>
								</div>
							</div>
							<div class="infos_dossier">
								<button class="title dossier">
									<h2 class="dossier">4 - Dossier de réflexion</h2>
									<img class="fleche" src="elements/angle-arrow-down.png">
								</button>
								<div class="questions">
									<ul>
										<p>Pourquoi me demande-t-on 2 garants ?</p>
										<p>Pourquoi me demandez-vous le métier de mes parents ?</p>
									</ul>
								</div>
							</div>
							<div class="infos_pj">
								<button class="title pj">
									<h2 class="pj">5 - Pièces jointes</h2>
									<img class="fleche" src="elements/angle-arrow-down.png">
								</button>
								<div class="questions">
									<ul>
										<p>Pourquoi me demande-t-on 2 garants ?</p>
										<p>Pourquoi me demandez-vous le métier de mes parents ?</p>
									</ul>
								</div>
							</div>
						</div>
	        </div>
					<!-- FIN PARTIE ASIDE -->
					<!-- PARTIE MAIN (droite)-->
	        <div class="main aide">
						<?php include 'header.php';?>
						<div class="questions">
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
							<div class="contact">
								<a href="contact.php">
									<button type="button" name="contact">CONTACT</button>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- FIN PARTIE MAIN -->
			<?php include 'footer.php';?>
		</main>
	    <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/effects.js"></script>
			<script type="text/javascript" src="js/aide.js"></script>
	</body>
</html>
