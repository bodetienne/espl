<html>
   <head>
       <meta charset="utf-8">
       <title>Test des éléments de formulaire</title>
       <link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
       <link rel="stylesheet" type="text/css" href="css/style-mds.css" media="all" />

    </head>
    <body>
      <main class="form-main">  <!-- "form-main" doit toujours rester, mettre le vrai nom à coté :
                                      ex) class="form-main form-contact" !-->
        <h1 class="nom-form">Présente-toi !</h1>
        <?php include('functions/form-elements.php'); ?>
        <?php echo textfield("", "Prénom", "no", "yes"); ?>
        <?php echo textfield("", "Nom", "no", "yes"); ?>


        <h1 class="nom-form">Choisis la formation de tes rêves !</h1>
        <div class="container-lgn">
          <h2>Bachelor Web et Digital</h2>
          <div class="lgn lgn-1">
            <?php echo createbtn("1", "Année 1", "#707070", "white", "#17E5F5"); ?>
            <?php echo createbtn("2", "Année 2", "#707070", "white", "#50A7FF"); ?>
            <?php echo createbtn("3", "Année 3", "#707070", "white", "#F74D9D"); ?>
          </div>
          <h2>MBA</h2>
          <div class="lgn lgn-2">
            <?php echo createbtn("4", "Année 1", "#707070", "white", "#9B9B9B"); ?>
            <?php echo createbtn("5", "Année 2", "#707070", "white", "#343434"); ?>
          </div>
        </div>

        <h1 class="nom-form">Comment as-tu connu l'école ?</h1>
        <div class="form-checklist">
          <div class="check-ligne">
            <p>Bouche à oreille / relation</p>
            <img class="info-button" src="elements/info-button.png" alt="bouton pour plus d\'informations">
          </div>
        </div>

        <div class="nav-form">
          <a href="#" class="btn-form btn-precedent">Précédent</a>
          <a href="#" class="btn-form btn-enregistrer">Enregistrer</a>
          <a href="#" class="btn-form btn-suivant">Suivant</a>
        </div>


      </main>
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/effects.js"></script>
    </body>
</html>
