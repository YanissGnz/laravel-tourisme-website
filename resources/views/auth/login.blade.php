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
                <li><a href="/all-places">Places</a></li>
                <li><a href="/all-activities">Activités</a></li>
                <li><a href="{{ route('auth.register') }}">S'inscrire</a></li>
            </ul>
        </nav>

        <div class="login-main">
            <h1 class="main-title">
                Se connecter
            </h1>
            <h2 class="sub-title">
                Enter votre informations
            </h2>
            <form method="post" action="{{ route('auth.check') }}" class="login-form">
            @if(Session::get('fail'))
               <div class="alert">
                  {{ Session::get('fail') }}
               </div>
            @endif
  
           @csrf
                <input type="email" name="email" id="login-email" placeholder="Entrer votre email" class="login-input">
                <span class="text-danger error">@error('email'){{ $message }} @enderror</span>
                <input type="password" name="password" id="login-password" placeholder="Entrer votre mot de passe" class="login-input">
                <span class="text-danger error">@error('password'){{ $message }} @enderror</span>
                <input type="submit" value="Se connecter" class="login-btn">
            </form>
        </div>

    
         <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
        <script src="/js/app.js" ></script>
    </body>
</html>
    