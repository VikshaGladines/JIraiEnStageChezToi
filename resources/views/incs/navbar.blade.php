<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>J'irai en stage chez toi</title>
</head>
<body>
    <header class="container-fluid">
      <div class="row p-3" style="background-color: #F2F2F2">
        <div class="col-12 d-flex justify-content-center">
          <img src="{{ asset('image/Bannière JESCT 4.png') }}" style="height: 100px;">
        </div>
      </div>
        <div class="row pb-2 border-bottom" style="background-color: #F2F2F2">
            
              <div class="col-xl-2">
              </div>
              <div class="col-xl-2 col-lg-3  " style="height: 120px;">
                <a class="d-flex justify-content-center " href="{{ route('home') }}"><img class="align-self-center" style="max-height: 135px;max-width: 217px;" src="{{ asset('image/logo_anesf.png') }}"></a>
              </div>
              <div class="col-xl-2 col-lg-3  bg-Ableu " style="height: 120px;">
                <h3 class="d-flex justify-content-center"> <a class="text-white" href="{{ route('offer.creates') }}"> Proposer un<p class="text-center"> logement </p></a></h3>
                <div class="d-flex justify-content-center"> 
                  <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  width="55" height="55"
                  viewBox="0 0 172 172"
                  style=" fill:#000000; position: relative;bottom: 30px;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,8.13074c-19.95469,0 -39.90938,7.59114 -55.09375,22.77551c-30.36875,30.36875 -30.36875,79.81875 0,110.1875c15.18437,15.18437 35.20625,22.84375 55.09375,22.84375c19.8875,0 39.90937,-7.65938 55.09375,-22.84375c30.36875,-30.36875 30.36875,-79.81875 0,-110.1875c-15.18438,-15.18437 -35.13906,-22.77551 -55.09375,-22.77551zM86,16.125c17.87188,0 35.7448,6.85208 49.45105,20.42395c27.14375,27.27812 27.14375,71.62397 0,98.9021c-27.27812,27.27812 -71.62187,27.27812 -98.76562,0c-27.27812,-27.27812 -27.28022,-71.62397 -0.13647,-98.9021c13.70625,-13.57187 31.57917,-20.42395 49.45105,-20.42395zM86,56.4375c-2.28437,0 -4.03125,1.74687 -4.03125,4.03125v21.5h-21.5c-2.28438,0 -4.03125,1.74688 -4.03125,4.03125c0,2.28437 1.74687,4.03125 4.03125,4.03125h21.5v21.5c0,2.28437 1.74688,4.03125 4.03125,4.03125c2.28437,0 4.03125,-1.74688 4.03125,-4.03125v-21.5h21.5c2.28437,0 4.03125,-1.74688 4.03125,-4.03125c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125h-21.5v-21.5c0,-2.28438 -1.74688,-4.03125 -4.03125,-4.03125z"></path></g></g></svg>
                </div>
            </div>

              <div class="col-xl-2 col-lg-3 bg-Avert " style="height: 120px;">
                <h3 class="d-flex justify-content-center"> <a class="text-white" href="{{ route('demand.creates') }}">Je cherche un <p class="text-center"> logement </p> </a></h3>
                <div class="d-flex justify-content-center">
                  <svg class="mt-2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                  width="55" height="55"
                  viewBox="0 0 172 172"
                  style=" fill:#000000;position: relative;bottom: 30px;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M95.04232,106.54818l17.77669,17.77669c-2.7155,5.17904 -2.99544,10.33008 -0.13998,13.18555l32.44597,32.44597c4.08724,4.08724 12.98958,1.84765 19.82031,-5.01107c6.85872,-6.85872 9.09831,-15.73307 5.01107,-19.82031l-32.41797,-32.44597c-2.88346,-2.85547 -8.0345,-2.57552 -13.21354,0.11198l-17.77669,-17.74869zM60.91667,0c-33.64974,0 -60.91667,27.26693 -60.91667,60.91667c0,33.64974 27.26693,60.91667 60.91667,60.91667c33.64974,0 60.91667,-27.26692 60.91667,-60.91667c0,-33.64974 -27.26692,-60.91667 -60.91667,-60.91667zM60.91667,107.5c-25.72722,0 -46.58333,-20.85612 -46.58333,-46.58333c0,-25.72722 20.85612,-46.58333 46.58333,-46.58333c25.72722,0 46.58333,20.85612 46.58333,46.58333c0,25.72722 -20.85612,46.58333 -46.58333,46.58333z"></path></g></g></svg>
              </div>
            </div>
              <div class="col-xl-2 col-lg-3  bg-Arouge " style="height: 120px;">
                @if (Auth::user())
                <div class="dropdown dropright d-flex justify-content-center ">
                  <button class="btn dropdown-toggle" type="button" style="height: 40px; "data-toggle="dropdown">
                    <p class="dropcolor d-flex justify-content-center" style="font-size: 25px; position: relative; bottom: 10px;" > {{ (Auth::user()->name) }} </p>
              </button>
              <div class="dropdown-menu">  
                <a class="dropdown-item" href="{{ route('profile.show') }}">Profil</a>
                <a class="dropdown-item" href="{{ route('messages') }}"> Messagerie</a>
                @if (Auth::user()->role == "ADMIN")
                   <a class="dropdown-item" href="{{ route('offer.show') }}"> Espace Admin</a> 
                @endif
                
                <form  method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button class="dropdown-item" type="submit">Deconnexion</button>
             </form>
              </div>
            </div> 
            @else

            <h3 class="d-flex justify-content-center"> <a class="text-white" href="{{ route('login') }}">Se connecter</a></h3>

            @endif

            @if (Auth::user())
            <div class="d-flex justify-content-center">
              <img class="mt-4" style="position: relative; bottom: 20px;witdh: 55px; height: 55px; border-radius:50%;"src="/uploads/avatars/{{ Auth::user()->avatar }}"/>
            </div>
            @else
                <div class="d-flex justify-content-center">
                  <img class="mt-4" style="position: relative; bottom: 20px;witdh: 55px; height: 55px; border-radius: 50%;"src="{{ asset('image/default.jpg') }}"/>
                </div>
            @endif
              
            
              <div class="col-xl-2">
              </div>
            </div>    
        </div>
      </div>
     </header>
</body>
</html>





















  {{--  
  <div class="bar border-bottom">
    <nav class="navbar navbar-expand-md navbar-dark ">
      <div class="d-flex w-50 order-0">
        
      </div>
      <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
          <ul class="navbar-nav">
            <li class="bttn_logo">
              <a class="navbar-brand mr-1" href="{{ route('home') }}"><img class="logo" src="{{ asset('image/logo_anesf.png') }}"></a>
          </li>
              <li class="bttn_offre ">
                  <a class="espace" href="{{ route('offer.creates') }}">Proposer un logement </a>
                  <svg class="iconetaille2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 172 172"  width="48" height="48"
                  style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#cccccc"><path d="M86,8.13074c-19.95469,0 -39.90938,7.59114 -55.09375,22.77551c-30.36875,30.36875 -30.36875,79.81875 0,110.1875c15.18437,15.18437 35.20625,22.84375 55.09375,22.84375c19.8875,0 39.90937,-7.65938 55.09375,-22.84375c30.36875,-30.36875 30.36875,-79.81875 0,-110.1875c-15.18438,-15.18437 -35.13906,-22.77551 -55.09375,-22.77551zM86,16.125c17.87188,0 35.7448,6.85208 49.45105,20.42395c27.14375,27.27812 27.14375,71.62397 0,98.9021c-27.27812,27.27812 -71.62187,27.27812 -98.76562,0c-27.27812,-27.27812 -27.28022,-71.62397 -0.13647,-98.9021c13.70625,-13.57187 31.57917,-20.42395 49.45105,-20.42395zM86,56.4375c-2.28437,0 -4.03125,1.74687 -4.03125,4.03125v21.5h-21.5c-2.28438,0 -4.03125,1.74688 -4.03125,4.03125c0,2.28437 1.74687,4.03125 4.03125,4.03125h21.5v21.5c0,2.28437 1.74688,4.03125 4.03125,4.03125c2.28437,0 4.03125,-1.74688 4.03125,-4.03125v-21.5h21.5c2.28437,0 4.03125,-1.74688 4.03125,-4.03125c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125h-21.5v-21.5c0,-2.28438 -1.74688,-4.03125 -4.03125,-4.03125z"></path></g></g></svg>
              </li>
              <li class="bttn_demande">
                  <a class="espace" href="{{ route('demand.creates') }}">Je cherche un logement </a>
                  <svg class="iconetaille2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 172 172"
                  style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#cccccc"><path d="M95.04232,106.54818l17.77669,17.77669c-2.7155,5.17904 -2.99544,10.33008 -0.13998,13.18555l32.44597,32.44597c4.08724,4.08724 12.98958,1.84765 19.82031,-5.01107c6.85872,-6.85872 9.09831,-15.73307 5.01107,-19.82031l-32.41797,-32.44597c-2.88346,-2.85547 -8.0345,-2.57552 -13.21354,0.11198l-17.77669,-17.74869zM60.91667,0c-33.64974,0 -60.91667,27.26693 -60.91667,60.91667c0,33.64974 27.26693,60.91667 60.91667,60.91667c33.64974,0 60.91667,-27.26692 60.91667,-60.91667c0,-33.64974 -27.26692,-60.91667 -60.91667,-60.91667zM60.91667,107.5c-25.72722,0 -46.58333,-20.85612 -46.58333,-46.58333c0,-25.72722 20.85612,-46.58333 46.58333,-46.58333c25.72722,0 46.58333,20.85612 46.58333,46.58333c0,25.72722 -20.85612,46.58333 -46.58333,46.58333z"></path></g></g></svg>
              </li>
              
              d
              
              <li class="bttn_compte"> 
                <div class="dropdown dropright">
               <button class="btn dropdown-toggle test" type="button" data-toggle="dropdown">
                <p class="dropcolor"> {{ (Auth::user()->name) }} </p>
                <img class="iconetaille3" src="https://img.icons8.com/color/48/000000/test-account.png"/>
                </button>
                <div class="dropdown-menu test2">  
                <a class="dropdown-item" href="{{ route('profile.show') }}">Profil</a>
                <a class="dropdown-item" href="{{ route('messages') }}"> Messagerie</a>
                <form  method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button class="dropdown-item" type="submit">Deconnexion</button>
                 </form>
                  </div>
                </div>
                </li>
              
              
              @else
              <li class="bttn_compte">
                  <a class="espace2" href="{{ route('login') }}">Se connecter</a>
                  <img class="iconetaille" src="https://img.icons8.com/color/48/000000/test-account.png"/>
              </li>
              @endif
          </ul>
          
      </div>
      <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last"></span>
  </nav>

</div>

                </ul>
               
              </li> 
             
           </ul>
         </nav>
        </div>
        --}}
  