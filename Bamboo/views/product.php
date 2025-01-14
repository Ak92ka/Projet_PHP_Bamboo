<?php
// Initialize quantity
session_start();
if (!isset($_SESSION['quantity'])) {
    $_SESSION['quantity'] = 1; // Default quantity
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        if ($_POST['action'] === 'increment') {
            $_SESSION['quantity']++;
        } elseif ($_POST['action'] === 'decrement' && $_SESSION['quantity'] > 1) {
            $_SESSION['quantity']--;
        }
    }
}

// Get the current quantity
$quantity = $_SESSION['quantity'];
?>

<!DOCTYPE html>
<html>

<head>
    <title><?= htmlspecialchars($productDetails['product_name']) ?></title>
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
        <a href="index.php?page=homepage">
            <img class="logo icon-header" src="https://raw.githubusercontent.com/Ak92ka/Projet_PHP_Bamboo/refs/heads/main/Bamboo/photos/logo.webp" alt="Bamboo logo">
        </a>
        <div class="flex-right-header">
            <i class="fa-solid fa-magnifying-glass icon-header"></i>
            <i class="fa-solid fa-cart-shopping icon-header"></i>
        </div>
    </div>
    <div class="product-page">
        <?php if ($productDetails): ?>
            <div class="product-image-container">
                <img class="product-image" src="<?= htmlspecialchars($productDetails['product_photo']) ?>" alt="Product photo">
            </div>
            <div class="product-details-container">
                <h1 class="product-name"><?= htmlspecialchars($productDetails['product_name']) ?></h1>
                <p>€<?= htmlspecialchars($productDetails['product_price']) ?></p>
                <p><?= nl2br(htmlspecialchars($productDetails['product_description'])) ?></p>
                <p class="product-color-p">COULEUR: <span><?= htmlspecialchars($productDetails['product_colors']) ?></span></p>
                <p class="product-size-p">TAILLE:</p>
                <?php if ($productDetails['is_small']): ?>
                    <span class="size-box">S</span>
                <?php endif; ?>
                <?php if ($productDetails['is_medium']): ?>
                    <span class="size-box">M</span>
                <?php endif; ?>
                <?php if ($productDetails['is_large']): ?>
                    <span class="size-box">L</span>
                <?php endif; ?>
                <div class="buy-container">
                    <p>QTY</p>
                    <form method="POST">
                        <div class="quantity">
                            <button class="quantity-button" type="submit" name="action" value="decrement">-</button>
                            <span><?= htmlspecialchars(str_pad($quantity, 2, '0', STR_PAD_LEFT)) ?></span>
                            <button class="quantity-button" type="submit" name="action" value="increment">+</button>
                        </div>
                    </form>
                    <button class="buy-button">ACHETER MAINTENANT</button>
                    <!-- buy button -->
                </div>
            </div>
        <?php else: ?>
            <p>Product not found.</p>
        <?php endif; ?>
    </div>
    <footer class="footer">
        <div class="container">
            <!-- form subscription -->
            <div class="form-newsletter">
                <form action="/newsletter.php" method="POST">
                    <label class="newsletter-label" for="newsletter">INSCRIVEZ-VOUS À NOTRE NEWSLETTER</label>
                    <input class="newsletter-input" type="email" id="newsletter" name="newsletter" placeholder="Entrez Votre E-mail" required>
                    <button class="newsletter-submit" type="submit" aria-label="S'inscrire à la newsletter"><i class="fa-solid fa-arrow-right"></i></button>
                </form>
                <div class="vertical-line"></div>
            </div>
            <div class="social-media">
                <p class="social-p">REJOIGNEZ-NOUS SUR</p>
                <i class="fa-brands fa-facebook social-links"></i>
                <i class="fa-brands fa-twitter social-links"></i>
                <i class="fa-brands fa-instagram social-links"></i>
            </div>
        </div>
        <hr>
        <div class="footer-container-2">
            <p>POLITIQUE DE TERMES ET CONDITIONS</p>
            <img class="logo-footer" src="https://raw.githubusercontent.com/Ak92ka/Projet_PHP_Bamboo/refs/heads/main/Bamboo/photos/Logo-footer.webp" alt="logo footer">
            <p>2019 Bamboo Tous droits réservés</p>
        </div>
    </footer>
</body>

</html>