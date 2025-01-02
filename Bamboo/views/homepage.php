<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Bamboo</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="header">
        <i class="fa-solid fa-bars icon-hamburger icon-header"></i>
        <img class="logo icon-header" src="https://raw.githubusercontent.com/Ak92ka/Projet_PHP_Bamboo/refs/heads/main/Bamboo/photos/logo.webp" alt="Bamboo logo">
        <div class="flex-right-header">
            <i class="fa-solid fa-magnifying-glass icon-header"></i>
            <i class="fa-solid fa-cart-shopping icon-header"></i>
        </div>
    </div>
    <div class="banner">
        <img class="img-banner" src="https://raw.githubusercontent.com/Ak92ka/Projet_PHP_Bamboo/refs/heads/main/Bamboo/photos/Banner_1_50.webp" alt="beige couch">
        <!-- icons slideshow -->
        <i class="fa-solid fa-circle-chevron-right arrow arrow-right"></i>
        <i class="fa-solid fa-circle-chevron-left arrow arrow-left"></i>
        <div class="text-banner">
            <h1 class="banner-h1">INTÉRIEUR</h1>
            <h2 class="banner-h2">Découvrez la nouvelle gamme intérieure de Bamboo</h2>
            <div class="banner-p">
                <p>Le classique rencontre la modernité,</p>
                <p>Bamboo offre une gamme fantastique de meubles d'intérieur,</p>
                <p>idéale pour toute maison moderne.</p>
            </div>
            <button class="banner-cta">VOIR PLUS</button>
        </div>
        <!-- slideshow -->
    </div>
    <div class="featured-products">
        <h2 class="featured-h1">Produit Vedette</h2>
        <!-- product images from MySQL -->
        <div class="featured-photos">
            <?php if (!empty($productPhotos)): ?>
                <?php foreach ($productPhotos as $photo): ?>
                    <!-- products links -->
                    <img class="featured-photo" src="<?= htmlspecialchars($photo) ?>" alt="vedette product">
                <?php endforeach; ?>
            <?php else: ?>
                <p>No product photos available.</p>
            <?php endif; ?>
            <!-- Load More photos -->
            <!-- hover image feature -->
        </div>
    </div>
    <div class="bamboo-products">
        <h2>Produits Bamboo</h2>
        <div class="products-links">
            <p>CHAISE</p>
            <p>CANAPÉ</p>
        </div>
        <div class="product-images">
            <!-- products clicked feature -->
            <?php if (!empty($productChair)): ?>
                <?php foreach (array_slice($productChair, 0, 3) as $photo): ?>
                    <img class="product-photo" src="<?= htmlspecialchars($photo) ?>" alt="produit photo">
                <?php endforeach; ?>
            <?php else: ?>
                <p>No product photos available.</p>
            <?php endif; ?>
        </div>

        <!-- slideshow -->
    </div>
    <footer class="footer">
        <div class="container">
            <!-- form subscription -->
             <div class="form-newsletter">
             <form action="/newsletter.php" method="POST">
                <label class="newsletter-label" for="newsletter">INSCRIVEZ-VOUS À NOTRE NEWSLETTER</label>
                <input class="newsletter-input" type="email" id="newsletter" name="newsletter" placeholder="Entrez Votre Adresse E-mail Ici" required>
                <button type="submit" aria-label="S'inscrire à la newsletter">
                <!-- submit icon -->
                </button>
            </form>
            <div class="vertical-line"></div>
            </div>
            <div class="social-media">
                <p class="social-p">REJOIGNEZ-NOUS SUR</p>
                <!-- logo Facebook -->
                <!-- logo Twitter -->
                <!-- logo Instagram -->
            </div>
        </div>
        <hr>
        <div class="footer-container-2">
            <p>POLITIQUE DE TERMES ET CONDITIONS</p>
            <img src="">
            <p>2019 Bamboo Tous droits réservés</p>
        </div>
    </footer>
</body>

</html>