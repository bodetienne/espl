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
				<div class="aside">
					<?php include 'header.php'; ?>
				</div>

				<div class="container-lgn">

					<h1 class="nom-form">Quelle est la formation de tes rêves ?</h1>
					<?php include 'functions/form-elements.php'; ?>
					<div class="container-titre">
						<h2>Bachelor Web et Digital</h2>
					</div>
					<div class="lgn lgn-1">
						<div class="groupe-formation">
							<?php echo createbtn("1", "Année 1", "#707070", "white", "#17E5F5"); ?>
	            <?php echo createbtn("2", "Année 2", "#707070", "white", "#50A7FF"); ?>
						</div>
            	<?php echo createbtn("3", "Année 3", "#707070", "white", "#F74D9D"); ?>
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
