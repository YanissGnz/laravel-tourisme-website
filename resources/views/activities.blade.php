<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tourismo</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="/css/places.css">
    </head>
<body >
    <nav>
        <h1 class="logo"><a href="/">Tourismo</a></h1>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/all-places">Places</a></li>
                <li><a href="/all-activities">Activités</a></li>
                <li style = "display : {{  session()->has('LoggedUser') ? 'none' : '' }}" ><a href="{{route('auth.login') }}" >Se connecter</a></li>
                <li style = "display : {{  session()->has('LoggedUser') ? '' : 'none' }}" ><a href="{{route('auth.logout') }}" >Se deconnecter</a></li>
            </ul>
    </nav>
    <div id="main" >
        <h6 class="main-title">Tous les activités</h6>    
        <div class="activities-card-list">
                @foreach ($activities as $activity)
                <div class="card">
                <img src="{{asset('../activities/'. $activity->thumpnail)}}" alt="Place image" class="card-img">
                <div class="card-content">
                    
                    <h1 class="card-title">
                        {{$activity->name}} 
                    </h1>
                    <p class="card-body">
                    {{(strlen($activity->description) > 120) ? substr($activity->description,0,120).'...' : $activity->description }}      
                                    </p>
                    <a href="/activity/{{$activity->id}}" class="card-btn">Explorez</a>
                    <p class="card-price"> {{$activity->price}} Da </p>
                    </div>
            </div> 
            @endforeach
        </div>
        
        <footer>
            Tourismo &copy; 2022
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <script src="/js/app.js" ></script>
    <script>
        
    </script>
        
    </body>
</html>
    