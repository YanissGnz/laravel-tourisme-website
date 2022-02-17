<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tourismo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="/css/login.css">
</head>
    <body >
        <nav>
            <h1 class="logo"><a href="/">Tourismo</a></h1>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/places">Places</a></li>
                <li><a href="/activities">Activités</a></li>
                <li><a href="/register">Register</a></li>
            </ul>
        </nav>

        <div class="login-main">
            <h1 class="main-title">
                Login
            </h1>
            <h2 class="sub-title">
                Enter votre informations
            </h2>
            <form method="post" action="login.php" class="login-form">
                <input type="email" name="email" id="login-email" placeholder="Entrer votre email" class="login-input">
                <input type="password" name="password" id="login-password" placeholder="Entrer votre mot de passe" class="login-input">
                <input type="submit" value="Login" class="login-btn">
            </form>
        </div>

    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" ></script>
        <script src="/js/app.js" defer></script>
    </body>
</html>
    