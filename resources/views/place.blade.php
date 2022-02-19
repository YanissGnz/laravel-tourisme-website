<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tourismo</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="/css/place.css">
        <link rel="stylesheet" href="/css/splide.min.css">
    </head>
<body >
    <nav>
        <h1 class="logo"><a href="/">Tourismo</a></h1>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/all-places">Places</a></li>
                <li><a href="/all-activities">Activités</a></li>
                <li ><a href="/login" >Se connecter</a></li>
            </ul>
        </nav>
        <div id="main" >
            <div class="carousel">
                <div class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                             @foreach ($placeimg as $img)
                                <img class="splide__slide" src="/places/{{$img->url}}" alt="{{$img->url}}">
                             @endforeach
                        </ul>
                     </div>
                </div>
            </div>
            <div class="details">
                <p class="title">
                    A propos de  {{$place->name}} 
                </p>
                <p class="description">{{$place->description}}</p>
            </div>
        </div>

         <h6>Autres endroits</h6>  
        <div class="places-card-list">
            @foreach ($places as $place)
                    <div class="card">
                    <img src="{{asset('../places/'. $place->thumpnail)}}" alt="Place image" class="card-img">
                    <div class="card-content">
                        
                        <h1 class="card-title">
                            {{$place->name}} 
                        </h1>
                        <p class="card-body">
                        {{(strlen($place->description) > 120) ? substr($place->description,0,120).'...' : $place->description }}      
                                      </p>
                        <a href="/place/{{$place->id}}" class="card-btn">Explorez</a>
                     </div>
                </div> 
                @endforeach
            </div>
            
        <footer>
            Tourismo &copy; 2022
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
        <script src="/js/splide.min.js"></script>
        <script src="/js/app.js" defer></script>
        <script>
           
        </script>
        
    </body>
</html>
    