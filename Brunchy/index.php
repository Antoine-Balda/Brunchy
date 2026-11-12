<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil - Brunchy</title>

    <!-- Bootstrap (grille + navbar) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;600&display=swap"
      rel="stylesheet" />
    <!-- Notre feuille de style -->
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <!-- ===== HEADER ===== -->
          <?php include("navbar.php") ; ?>

    <!-- ===== CONTENU PRINCIPAL ===== -->
    <main class="container">

        <!-- Bannière de bienvenue -->
        <section class="bloc-bvn">
            <h1>Bienvenue sur Brunchy</h1>
            <p>Des recettes simples de brunch pour bien commencer la journée,<br />même si votre premier pancake est raté !</p>
            <a href="recettes.php" class="btn btn-primary" id="btn">Découvrir les recettes</a>
        </section>



        <h2>Pourquoi Brunchy ?</h2>
        <section class="row fondateurs">
            <div class="col-12 col-md-4">
                <article>
                    <h3>Simple</h3>
                    <p>Des recettes claires, étape par étape, avec peu d'ingrédients.</p>
                </article>
            </div>
            <div class="col-12 col-md-4">
                <article>
                    <h3>Rapide</h3>
                    <p>Le temps de préparation et de cuisson est indiqué pour chaque recette.</p>
                </article>
            </div>
            <div class="col-12 col-md-4">
                <article>
                    <h3>Pour tout le monde</h3>
                    <p>Pas besoin d'être un chef : même les débutants réussissent leur brunch.</p>
                </article>
            </div>
        </section>

        <!-- Petit texte vers la page À propos -->
        <section class="bloc-bvn">
            <h2>Notre histoire</h2>
            <p>
                Tout est parti d'un dimanche matin et de pancakes complètement ratés.
                Trois amis, beaucoup de rires, et l'envie de partager des recettes qui marchent vraiment.
            </p>
            <a href="apropos.php" class="btn btn-primary" id="btn">En savoir plus</a>
        </section>

        
      <?php include("footer.php") ; ?>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>