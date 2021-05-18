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
             <li class="bttn_Messagerie"><a href="#"><p>Messagerie</p></a></li>
             <li class="bttn_off_dem"><a href="{{ route('offer.create') }}"><p>Faire une Offre</p></a>
             <li class="bttn_anesf"><a href="#"><p>L'ANESF</p></a></li>
             <li class="bttn_compte"><a href="#"><p>Profil/Inscription &dtrif;</p></a>
                <ul>
                  <li><a href="#">Profil</a></li>
                  @if (Auth::user())
                      <li>
                        <form method="POST" action="{{ route('logout') }}">
                          @csrf
                          <button type="submit">Deco</button>
                        </form>
                      </li>
                  @else
                  <li><a href="{{ route('login') }}">connexion</a></li>
                  @endif
                  
                </ul>
              </li>
           </ul>
         </nav>
       </header>
</body>
</html>