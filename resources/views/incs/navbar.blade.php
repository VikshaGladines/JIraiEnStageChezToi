<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <nav id="navbar" role="navigation" class="primary-navigation" class="sticky">   
           <ul>
             <li><a class="" href="{{ route('home') }}"><img class="logo" src="{{ asset('image/logo_anesf.png') }}"></a></li>
             <li class="bttn_Messagerie"><a href="{{ route('messages') }}"><p>Messagerie</p></a></li>
             <li class="bttn_off_dem"><a href="{{ route('offer.creates') }}"><p>Faire une Offre</p></a>
             <li class="bttn_anesf"><a href="{{ route('demand.creates') }}"><p>Demandes</p></a></li>
             <li class="bttn_compte"><a href="#"><p>Profil/Inscription &dtrif;</p></a>
              
                <ul>
                  @if (Auth::user())
                  <li><a href="{{ route('profile.show') }}">Profil</a></li>
                      <li>
                        <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <button type="submit">Deco</button>
                        </form>
                      </li>
                      <li> <img class="icone1" src="{{ asset('image/icone 1.png') }}"> Connected </li>
                  @else
                  <li><a href="{{ route('login') }}">connexion</a></li>
                  @endif
              
                  {{--
                  @if (Auth::user()->role === 'ADMIN')
                  <li><a href="{{ route('offer.show') }}">espace admin</a></li>    
                  @endif
                  @if (Auth::user()->role === 'USER')
                  @endif
                  --}}
                </ul>
               
              </li> 
             
           </ul>
         </nav>
       </header>
</body>
</html>