<html>
   <head>
       <meta charset="utf-8">
       <title>Test des éléments de formulaire</title>
       <link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
       <link rel="stylesheet" type="text/css" href="css/style-mds.css" media="all" />

    </head>
    <body>
      <main class="form-main">  <!-- "form-main" doit toujours resté, mettre le vrai nom à coté :
                                      ex) class="form-main form-contact" !-->
        <h1 class="nom-form">Présentes-toi !</h1>
        <?php include('functions/form-elements.php'); ?>
        <?php echo textfield("", "Prénom", "no", "yes"); ?>
        <?php echo textfield("", "Nom", "no", "yes"); ?>


        <h1 class="nom-form">Choisis la formation de tes rêves !</h1>
        <div class="container-lgn">
          <h2>Bachelor Web et Digital</h2>
          <div class="lgn lgn-1">
            <?php echo createbtn("bac-1", "Année 1", "#707070", "white", "#17E5F5"); ?>
            <?php echo createbtn("bac-1", "Année 2", "#707070", "white", "#50A7FF"); ?>
            <?php echo createbtn("bac-1", "Année 3", "#707070", "white", "#F74D9D"); ?>
          </div>
          <h2>MBA</h2>
          <div class="lgn lgn-2">
            <?php echo createbtn("bac-1", "Année 1", "#707070", "white", "#9B9B9B"); ?>
            <?php echo createbtn("bac-1", "Année 2", "#707070", "white", "#343434"); ?>
          </div>
        </div>

        <div class="nav-form">
          <a href="#" class="btn-form btn-precedent">Précédent</a>
          <a href="#" class="btn-form btn-enregistrer">Enregistrer</a>
          <a href="#" class="btn-form btn-suivant">Suivant</a>
        </div>

      </main>
    </body>
</html>
