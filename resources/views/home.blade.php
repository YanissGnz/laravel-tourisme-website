<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tourismo</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="/css/app.css">
    </head>
<body >
    <nav>
        <h1 class="logo"><a href="/">Tourismo</a></h1>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/all-places">Places</a></li>
                <li><a href="/activities">Activités</a></li>
                <li ><a href="/login" >Login</a></li>
            </ul>
        </nav>
        <div class="bg-image">
            <h5 class="intro-text">Explorez de beaux endroits et profitez de merveilleuses activités</h5>
            <a href="#main" class="explore-btn">Explorez</a>
            <div class="white-ora"></div>
        </div>
        <div id="main" >
            <h6>Meilleures endroits</h6>    
            <div class="places-card-list">
            @foreach ($places as $place)
                <div class="card">
                    <img src="{{asset('../places/'. $place->thumpnail)}}" alt="Place image" class="card-img">
                    <div class="card-content">
                        
                        <h1 class="card-title">
                            {{$place->name}} 
                        </h1>
                        <p class="card-body">
                        {{ $place->description }}      
                                      </p>
                        <a href="#" class="card-btn">Explorez</a>
                     </div>
                </div> 
                @endforeach
            </div>
            <h6>Meilleures activités</h6>    
            <div class="activities-card-list">
            @foreach ($activities as $activity)
                <div class="card">
                    <img src="{{asset('../places/'. $activity->thumpnail)}}" alt="Place image" class="card-img">
                    <div class="card-content">    
                        <h1 class="card-title">
                            {{$activity->name}} 
                        </h1>
                        <p class="card-body">
                        {{ $activity->description }}      
                                      </p>
                        <a href="#" class="card-btn">Explorez</a>
                     </div>
                </div> 
                @endforeach
            </div>
            <footer>
                Tourismo &copy; 2022
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
        <script src="/js/app.js" defer></script>
        <script>
           
        </script>
        
    </body>
</html>
    