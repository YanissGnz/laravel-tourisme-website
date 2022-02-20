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
                <li style = "display : {{  session()->has('LoggedUser') ? 'none' : '' }}" ><a href="{{route('auth.login') }}" >Se connecter</a></li>
                <li style = "display : {{  session()->has('LoggedUser') ? '' : 'none' }}" ><a href="{{route('auth.logout') }}" >Se deconnecter</a></li>
            </ul>
    </nav>
        <div id="main" >
            <div class="carousel">
                <div class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                              @foreach ($activityimg as $img)
                                <img class="splide__slide" src="/activities/{{$img->url}}" alt="{{$img->url}}">
                             @endforeach
                        </ul>
                     </div>
                </div>
            </div>
            <div class="details">
                <h6 class="title">
                    A propos de {{$activity->name}}
                </h6>
                <p class="description">{{$activity->description}}</p>
            </div>
        </div>

        <div class="booking" id='booking-form'>
            <h6>Faire une résertvation</h6>
            <form method="get" action="{{ route('activity.booking',['id'=>$activity->id])}}" class="booking-form">
            @if(Session::get('success'))
             <div class="alert-success">
                {{ Session::get('success') }}
             </div>
           @endif
            <div class="dates">
                    <div class=date>
                        <h5 class="date-lable">Selectionné date début:</h5>
                        <input required type="date" name="from_date"  class="booking-input">
                    </div>
                    <div class=date>
                        <h5 class="date-lable">Nombre de presonne:</h5>
                        <input required type="date" name="to_date"  class="booking-input">
                    </div>
                </div> 
                <h5 class="lable">Selectionné date fin:</h5>
                <select name="number" required class="booking-input">
                    <option value="">Choisir le nombre de personne</option>
                    <option value="1">1 Adulte</option>
                    <option value="2">2 Adultes</option>
                    <option value="3">3 Adultes</option>
                    <option value="4">4 Adultes</option>
                </select>
                <h4>Prix: {{$activity->price}} Da</h4>

                <input type="submit" value="Réserver" class="booking-btn">
            </form>
        </div>

         <h6>Autres Activités</h6>  
        <div class="activities-card-list">
            @foreach ($activities as $activity)
                    <div class="card">
                    <img src="{{asset('../activities/'. $activity->thumpnail)}}" alt="activity image" class="card-img">
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
        <script src="/js/splide.min.js"></script>
        <script src="/js/app.js" ></script>
        <script>
           
        </script>
        
    </body>
</html>
    