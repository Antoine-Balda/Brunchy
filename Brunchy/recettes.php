<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liste de recettes - Brunchy</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"

    />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"/>
    <!-- Notre feuille de style -->
    <link rel="stylesheet" href="style.css" />
    
</head>
<body>

    <!-- navbar Bootstrap -->
           <?php include("navbar.php") ; ?>


    <!-- CONTENU PRINCIPAL -->
    <main class="container">
        <h1>Nos recettes de Brunch</h1>
        <p>Retrouvez nos recettes préférées pour bien commencer la journée.</p>

        <!-- Une ligne de la grille Bootstrap -->
        <section class="row">


            <!-- Première recette : les pancakes -->
            <article class="col-12 col-md-6">
                <div class="carte-recette">
                    <img src="img/pancakes.jpg" alt="Pile de pancakes avec du sirop d'érable" height="500" />
                    <h2>Pancakes moelleux</h2>
                    <p id="texte-recette">
                        Des pancakes épais et moelleux, parfaits pour un brunch du dimanche.
                        Prêts en 20 minutes !
                    </p>
                    <a id="btn" href="recette-pancakes.php" class="btn btn-primary w-100">Voir la recette</a>
                </div>
            </article>

            <!-- Deuxième recette : les oeufs brouillés -->
            <article class="col-12 col-md-6">
                <div class="carte-recette">
                    <img src="img/oeuf-brouillés.png" alt="Assiette d'oeufs brouillés sur une tartine" height="500" />
                    <h2>Oeufs brouillés crémeux</h2>
                    <p id="texte-recette">
                        Des oeufs brouillés onctueux, cuits doucement, à servir sur du pain grillé.
                    </p>
                    <a id="btn" href="recette-oeufs.php" class="btn btn-primary w-100">Voir la recette</a>
                </div>
            </article>

        </section>
        
    

    <!-- FOOTER -->
      <?php include("footer.php") ; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>