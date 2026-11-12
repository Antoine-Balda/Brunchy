<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oeufs brouillés - Brunchy</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"/>
    <!-- Notre feuille de style -->
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <!-- HEADER -->
   <?php include("navbar.php") ; ?>


    <!-- CONTENU PRINCIPAL -->
    <main class="container">
        <h1>Oeufs Brouillés </h1>

        <!-- Infos rapides : temps et note -->
        <p class="infos-recette">
            Préparation : 5 min | Cuisson : 5 à 7 min  | Pour 4 personnes 
        </p>
        <p class="note">Note : 5 / 5 &#9733;</p>

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
                            <img src="img/oeuf-brouillés.png" class="d-block w-100" alt="Assiette d'oeufs brouillés" height="500px"/>
                        </div>
                        <div class="carousel-item">
                            <img src="img/oeufs2.png" class="d-block w-100" alt="Assiette d'oeufs brouillés" height="500px" />
                        </div>
                        <div class="carousel-item">
                            <img src="img/oeufs3.avif" class="d-block w-100" alt="Assiette d'oeufs brouillés" height="500px"/>
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
                        <li>4 oeufs</li>
                        <li>30 g de beurre</li>
                        <li>2 cuillères à soupe de sucre</li>
                        <li> 4 cuillières à soupe  de lait ou de la crème fraîche</li>
                        <li>1 pincée de poivre</li>
                        <li>Quelque brins de cinoulette(falcutatif)</li>
                    </ul>
                </div>
            </article>

            <article class="col-12 col-md-6">
                <div class="bloc-externe">
                    <h2>Ustensiles</h2>
                    <ul>
                        <li>Un grand saladier</li>
                        <li>Un fouet ou une fourchette</li>
                        <li>Une poêle antiadhésive</li>
                        <li>Une spatule en bois ou en silicone</li>
                        <li>Un couteau</li>
                        <li>Une planche à découper</li>
                    </ul>
                </div>
            </article>
        </section>

        <!-- Préparation -->
        <section class="bloc-recette">
            <h2>Préparation</h2>
            <ol>
                <li>Etape 1 :</li>
                <li>Casser les oeufs : Casser les 8 oeufs dans un saladier.</li>
                <li>Etape 2 :</li>
                <li>Mélanger  : Ajouter le lait ou de la crème fraiche, le sel et le poivre. Fouette jusqu'a obtenir un mélange homogène.</li>
                <li>Etape 3 :</li>
                <li>Faire chauffer : Faire fondre le beurre dans une poêle à feu doux.</li>
                <li>Etape 4 :</li>
                <li>Remuer : Mélanger doucment avec une sptatule pendant 5 à 7 minutes, jusqu'a obtenir une texture crémeuse.</li>
                <li>Etape 5 :</li>
                <li>Verser une louche de pâte et attendre l'apparition de bulles (environ 2 minutes).</li>
                <li>Etape Finale :</li>
                <li>Servir : Retirer du feu  et ajouter un peu de ciboulette. Servir immédiatement avec du pain grillé.</li>
            </ol>
        </section>

        <!-- Espace pour les commentaires et notes -->
        <section class="bloc-avis">
            <h2>Avis</h2>
            <p class="note">5 / 5 &#9733;</p>
            <p id="avis">Richard Carlier : </p>
            <p>"Les meilleuirs oeufs que j'ai mangés de ma vie !!!! Ces oeufs ainsi que ce site mérites 20/20 !!!!"</p>
            
        </section>
    </main>

    <!-- FOOTER -->
      <?php include("footer.php") ; ?>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
