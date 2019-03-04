<head>		
	{% block stylesheets %}
	<link rel="stylesheet" href="css/style-mds-bp.css"> 
	{% endblock %}
</head>
<body>
	<div class="test-bp">
		<div class="barre-progression">
			<div class="barre">
				<div class="progress-bar bg-candidat" role="progressbar" id="partie1" aria-valuenow="15%" aria-valuemin="0" aria-valuemax="100"></div>
				<div class="progress-bar bg-garants" role="progressbar" id="partie2" aria-valuenow="15%" aria-valuemin="0" aria-valuemax="100"></div>
				<div class="progress-bar bg-formation" role="progressbar" id="partie3" aria-valuenow="15%" aria-valuemin="0" aria-valuemax="100"></div>
				<div class="progress-bar bg-dossier" role="progressbar" id="partie4" aria-valuenow="15%" aria-valuemin="0" aria-valuemax="100"></div>
				<div class="progress-bar bg-pieces" role="progressbar" id="partie5" aria-valuenow="15%" aria-valuemin="0" aria-valuemax="100"></div>
			</div>

			<div class="ronds">
				<img src="elements/rond-jaune-plein.png" class="rond rond-jaune">
				<img src="elements/rond-orange-vide.png" class="rond rond-orange">
				<img src="elements/rond-turquoise-vide.png" class="rond rond-bleu-clair">
				<img src="elements/rond-bleu-vide.png" class="rond rond-bleu">
				<img src="elements/rond-rose-vide.png" class="rond rond-rose">
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bp-test.js"></script>
</body>