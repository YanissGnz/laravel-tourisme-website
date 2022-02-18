<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tourismo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="/css/register.css">
</head>
    <body >
        <nav>
            <h1 class="logo"><a href="/">Tourismo</a></h1>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/all-places">Places</a></li>
                <li><a href="/all-activities">Activités</a></li>
                <li><a href="/register">register</a></li>
            </ul>
        </nav>

        <div class="register-main">
            <h1 class="main-title">
                Crée une compte
            </h1>
            <h2 class="sub-title">
                Enter votre informations
            </h2>
            <form method="post" action="register.php" class="register-form">
                <div>
                    <input type="text" name="name" id="register-name" placeholder="Entrer votre nom" class="register-input">
                    <input type="text" name="lastname" id="register-lastname" placeholder="Entrer votre prenom" class="register-input">

                    </div>
                    <input type="email" name="email" id="register-email" placeholder="Entrer votre email" class="register-input">
                <input type="password" name="password" id="register-password" placeholder="Entrer votre mot de passe" class="register-input">
                <input type="submit" value="register" class="register-btn">
            </form>
        </div>

    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" ></script>
        <script src="/js/app.js" defer></script>
    </body>
</html>
    