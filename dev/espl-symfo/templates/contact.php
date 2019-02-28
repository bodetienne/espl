 <!doctype html>
<html>
<head>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style-mds.css" media="all" />
    <link rel="stylesheet" href="css/style-mds-structure" />
    <link rel="stylesheet" href="css/style-mds-header-footer.css">
    <link rel="stylesheet" href="css/style-mds-emma.css" />
    <link rel="stylesheet" href="css/style-mds-alex.css">

    <link rel="icon" type="img" href="elements/favicon.ico.png">

		<meta charset="utf-8">
		<title>Contact</title>
</head>

<body>
  <main class="form-main contact">
    <div class="block-main">

      <div class="entire-block">

        <div class="block-left">
          <div class="logo-ecole-contact">
            <img src="elements/logo-mds-blanc.png" alt="logo-mds-blanc">
          </div>
          <h2>Contacte-nous !</h2>
          <h3>Tu peux aussi nous joindre par téléphone au 02.41.73.20.30</h3>
        </div>

        <div class="block-right">
          <div class="cadre-contact">
            <form class="contact2-form validate-form"> <!-- contact2-form validate-form -->
              <span class="contact2-form-title"><!-- contact2-form-title -->
                Envoie-nous un message !
              </span>

              <div class="wrap-input2 validate-input" data-validate="Ton nom est nécessaire">
                <input class="input2" type="text" name="name">
                <span class="focus-input2" data-placeholder="Nom"></span>
              </div>
              <div class="wrap-input2 validate-input" data-validate="Ton prénom est nécessaire">
                <input class="input2" type="text" name="Prénom">
                <span class="focus-input2" data-placeholder="Prénom"></span>
              </div>

              <div class="wrap-input2 validate-input" data-validate = "Une adresse mail valide est nécessaire: abc@lif.fr">
                <input class="input2" type="text" name="email">
                <span class="focus-input2" data-placeholder="Email"></span>
              </div>

              <div class="wrap-input2 validate-input" data-validate = "Un message est nécessaire">
                <textarea class="input2" name="message"></textarea>
                <span class="focus-input2" data-placeholder="Message"></span>
              </div>

              <div class="container-contact2-form-btn">
                <div class="wrap-contact2-form-btn">
                  <div class="contact2-form-bgbtn"></div>
                  <button class="contact2-form-btn">
                    Envoyer ton Message
                  </button>
                </div>
              </div>
            </form>

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
