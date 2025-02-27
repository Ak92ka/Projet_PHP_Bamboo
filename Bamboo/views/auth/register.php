<?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>


<!DOCTYPE html>
<html>

<head>
    <title>Bamboo - Page d'authentification</title>
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
        <i class="fa-solid fa-user icon-hamburger icon-header"></i>
        <a href="index.php?page=homepage">
            <img class="logo icon-header" src="https://raw.githubusercontent.com/Ak92ka/Projet_PHP_Bamboo/refs/heads/main/Bamboo/photos/logo.webp" alt="Bamboo logo">
        </a>
        <div class="flex-right-header">
            <i class="fa-solid fa-magnifying-glass icon-header"></i>
            <i class="fa-solid fa-cart-shopping icon-header"></i>
        </div>
    </div>

    <div class="register-div">
        <form method="POST" action="index.php?action=handleRegister">
            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit">S'inscrire</button>
        </form>

        <p>Vous avez déjà un compte ? <a href="index.php?action=login">Se connecter</a></p>
</div>

<footer class="footer">
        <div class="container">
            <!-- form subscription -->
            <div class="form-newsletter">
                <form action="/newsletter.php" method="POST">
                    <label class="newsletter-label" for="newsletter">INSCRIVEZ-VOUS À NOTRE NEWSLETTER</label>
                    <input class="newsletter-input" type="email" id="newsletter" name="newsletter" placeholder="Entrez Votre E-mail" required>
                    <button class="newsletter-submit" type="submit" aria-label="S'inscrire à la newsletter"><i class="fa-solid fa-arrow-right"></i></button>
                    <!-- submit icon -->
                    </button>
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