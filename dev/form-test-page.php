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
        <?php echo textfield("Ton nom : ", "Nom", "no", "yes"); ?>

      </main>
    </body>
</html>
