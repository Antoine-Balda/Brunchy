<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pancakes moelleux - Brunchy</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&f     amily=Poppins:wght@400;600&display=swap"
      rel="stylesheet"/>
    <!-- Notre feuille de style -->
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <!-- le header -->
       <?php include("navbar.php") ; ?>


    <!-- le contenu principal de la page -->
    <main class="container">
        <h1>Pancakes moelleux</h1>

        <!-- Infos rapides : temps et note -->
        <p class="infos-recette">
            Préparation : 10 min | Cuisson : 15 min | Pour 4 personnes (environ 12 pancakes)
        </p>
        <p class="note">Note : 4,5 / 5 &#9733;</p>

        <!-- CAROUSEL Bootstrap -->
        <section class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div id="carousel-pancakes" class="carousel slide carousel-recette">

                    <!-- Les petits points en bas -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carousel-pancakes" data-bs-slide-to="0" class="active" aria-label="Photo 1"></button>
                        <button type="button" data-bs-target="#carousel-pancakes" data-bs-slide-to="1" aria-label="Photo 2"></button>
                        <button type="button" data-bs-target="#carousel-pancakes" data-bs-slide-to="2" aria-label="Photo 3"></button>
                    </div>

                    <!-- Les photos -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/pancakes.jpg" class="d-block w-100" alt="Pile de pancakes avec du sirop d'érable" height="500px"/>
                        </div>
                        <div class="carousel-item">
                            <img src="img/pancakes2.jpg" class="d-block w-100" alt="Pile de pancakes avec du sirop d'érable" height="500px" />
                        </div>
                        <div class="carousel-item">
                            <img src="img/pancakes3.jpg" class="d-block w-100" alt="Pile de pancakes avec du sirop d'érable" height="500px"/>
                        </div>
                    </div>

                    <!-- Les flèches précédent / suivant -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-pancakes" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Précédent</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-pancakes" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Suivant</span>
                    </button>
                </div>
            </div>
        </section>

        <!-- Ingrédients et ustensiles -->
        <section class="row">
            <article class="col-12 col-md-6">
                <div class="bloc-externe">
                    <h2>Ingrédients</h2>
                    <ul>
                        <li>250 g de farine</li>
                        <li>2 cuillères à café de levure chimique</li>
                        <li>2 cuillères à soupe de sucre</li>
                        <li>1 pincée de sel</li>
                        <li>2 oeufs</li>
                        <li>30 cl de lait</li>
                        <li>50 g de beurre fondu</li>
                        <li>Du sirop d'érable pour servir</li>
                    </ul>
                </div>
            </article>

            <article class="col-12 col-md-6">
                <div class="bloc-externe">
                    <h2>Ustensiles</h2>
                    <ul>
                        <li>Un grand saladier</li>
                        <li>Un fouet</li>
                        <li>Une poêle antiadhésive</li>
                        <li>Une louche</li>
                        <li>Une spatule</li>
                        <li>Une balance de cuisine</li>
                    </ul>
                </div>
            </article>
        </section>

        <!-- Préparation -->
        <section class="bloc-recette">
            <h2>Préparation</h2>
            <ol>
                <li>Etape 1 :</li>
                <li>Dans un saladier, mélanger la farine, la levure, le sucre et le sel.</li>
                <li>Etape 2 :</li>
                <li>Ajouter les oeufs, puis verser le lait petit à petit en fouettant pour éviter les grumeaux.</li>
                <li>Etape 3 :</li>
                <li>Ajouter le beurre fondu et mélanger. Laisser reposer la pâte 5 minutes.</li>
                <li>Etape 4 :</li>
                <li>Faire chauffer une poêle légèrement beurrée à feu moyen.</li>
                <li>Etape 5 :</li>
                <li>Verser une louche de pâte et attendre l'apparition de bulles (environ 2 minutes).</li>
                <li>Etape 6 :</li>
                <li>Retourner le pancake et cuire encore 1 à 2 minutes.</li>
                <li>Etape Finale :</li>
                <li>Servir chaud avec du sirop d'érable, du beurre ou des fruits.</li>
            </ol>
        </section>

        <!-- Espace pour les commentaires et notes -->
        <section class="bloc-avis">
            <h2>Avis</h2>
            <p class="note">4,5 / 5 &#9733;</p>
            <p id="avis">Richard Carlier : </p>
            <p>"Très moelleux et faciles à faire, toute la famille a adoré !"</p>
        </section>
        
    </main>

    <!-- Footer -->
      <?php include("footer.php") ; ?>


    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
