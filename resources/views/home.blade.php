@extends('base')

@section('content')
<div class="container-fluid">
<div class="row " >
    <div class="col-2" style="background-image: url('image/JESCT trame.png'); background-repeat: repeat; height: 350px;">
    </div>

    <div class="col-8 d-flex justify-content-center pt-5">
        <div class=" " style="">
            <p class="d-flex justify-content-xl-center texttaille mx-auto " style="width: 1150px; font-family: 'Luciole-Regular'; src: url('/public/fonts/vendor/bootstrap-sass/bootstrap/Luciole-Regular.ttf') format('ttf');"> Le projet "J'irai en stage chez toi" a pour objectif de permettre aux étudiant.e.s sages-femmes d'échanger des logements afin de rendre les lieux de stages plus accessibles et diversifiés.
            En effet, la formation en maïeutique demande de nombreux stages et les CHU de référence ne sont pas toujours aptes à accueillir tout.e.s les étudiant.e.s. De plus, ces stages à l’extérieur permettent de découvrir des pratiques et des protocoles différents de la formation de référence.
            Cependant, les revenus des étudiant.e.s étant limités et les périodes de stages relativement courtes, trouver un logement s’avère être parfois une tâche difficile.
            C’est pourquoi l’ANESF propose le projet “J’irai en stage chez toi”, reposant sur un principe d’entraide et de solidarité entre étudiant.e.s sages-femmes.</p> <br><br>
        </div>
    </div>

    <div class="col-2" style="background-image: url('image/JESCT trame.png'); background-repeat: repeat; height: 350px;">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2" style="background-image: url('image/JESCT trame.png'); background-repeat: repeat;"> 
       
    </div>

    <div class="col-sm-8" > 
        <div class="d-flex justify-content-xl-center p-3 border-bottom text-rose">
            <h2> Recherche par région </h2>
        </div>
        <div class="d-flex justify-content-xl-center p-4 border-bottom">
           
            <img style="position: relative; right: 15px; width: 750px; height: 648px;"src="{{ asset('image/Carte de France.png') }}" alt="La France et ses région" usemap='#reg'>
            <map name='reg'>
                <area target="" alt="Bretagne" title="" href="{{ url('test/Bretagne') }}" coords="107,224,119,229,126,230,134,223,144,218,155,213,161,213,171,208,173,196,175,184,174,172,167,173,158,167,143,158,135,161,122,161,115,162,108,165,101,160,91,145,85,143,75,145,64,151,50,152,41,152,30,152,23,157,22,162,20,168,31,185,31,192,34,197,34,203,83,225,103,229,110,230" shape="poly">
                <area target="" alt="Normandie" title="" href="{{ url('test/Normandie') }}" coords="144,88,158,121,155,138,163,155,158,160,160,166,174,163,183,169,199,171,209,169,215,168,220,173,232,172,237,177,240,183,247,186,254,191,255,183,261,173,256,164,278,153,283,142,291,132,298,121,295,97,297,87,286,69,263,77,243,83,236,90,231,99,244,105,228,113,217,120,202,116,183,109,176,109,168,90" shape="poly">
                <area target="" alt="Haut-De-France" title="" href="{{ url('test/Haut-de-France') }}" coords="304,123,301,113,301,92,301,77,291,69,291,61,293,52,295,33,298,19,301,11,314,11,319,5,327,4,334,9,335,20,343,25,355,25,367,33,371,41,382,45,389,51,398,54,399,70,400,82,399,97,395,105,390,114,379,117,379,126,378,133,376,141,374,147,363,142,361,136,343,133,330,131,320,126" shape="poly">
                <area target="" alt="grand est" title="" href="{{ url('test/Grand Est') }}" coords="396,115,379,120,383,137,371,149,369,160,371,177,389,205,400,211,414,210,420,205,431,209,437,221,443,229,452,229,467,227,466,221,483,209,507,209,525,221,530,229,543,238,551,230,551,220,552,205,551,196,555,165,572,139,536,122,528,128,519,122,509,124,497,107,486,103,479,109,468,102,457,109,451,98,436,87,427,78,431,61,415,75,402,77,403,86,398,95" shape="poly">
                <area target="" alt="Ile de France" title="" href="{{ url('test/Ile-de-France') }}" coords="324,153,306,129,295,128,291,142,292,153,298,163,302,176,307,183,320,187,333,190,335,197,347,194,347,193,347,194,351,185,363,181,369,178,369,166,369,157,361,145,350,137,358,138,339,134,327,133,318,129,308,130" shape="poly">
                <area target="" alt="Pays de la Loire" title="" href="{{ url('test/Pays de la Loire') }}" coords="124,271,128,286,137,298,145,306,150,311,163,316,174,316,182,316,187,305,191,295,181,280,193,270,201,269,216,266,224,258,226,246,229,238,233,230,245,230,249,220,252,212,255,201,256,194,243,190,241,182,226,177,215,171,207,171,195,171,179,172,182,184,184,194,181,201,177,205,173,209,170,214,162,220,146,220,137,226,125,231,117,238,113,243" shape="poly">
                <area target="" alt="centre-val-de-loire" title="" href="{{ url('test/Centre-Val de Loire') }}" coords="287,144,307,183,324,189,327,200,346,200,354,209,346,227,346,249,351,256,355,280,352,288,334,296,332,306,323,307,318,313,290,312,279,317,260,301,261,291,250,273,237,276,221,261,231,231,240,233,252,225,263,200,257,197,256,187,264,179,266,171,258,165,270,157,277,157" shape="poly">
                <area target="" alt="Bourgogne-Franche-Comté" title="" href="{{ url('test/Bourgogne-Franche-Comté') }}" coords="376,195,370,187,359,189,355,199,356,209,351,224,350,240,350,253,351,267,355,272,357,284,357,293,360,299,370,296,375,294,380,292,385,297,388,303,396,313,397,325,401,332,409,327,418,321,430,324,434,316,437,308,443,306,451,307,459,314,464,318,483,321,491,310,497,296,504,287,511,274,518,269,523,259,531,235,520,219,501,212,482,208,471,220,460,230,452,236,444,232,436,225,432,216,424,208,403,213,391,213,384,202" shape="poly">
                <area target="" alt="Nouvelle-Aquitaine" title="" href="{{ url('test/Nouvelle-Aquitaine') }}" coords="264,430,260,451,258,459,251,467,245,471,236,473,228,473,217,475,206,478,206,487,204,494,201,502,212,506,212,512,212,518,208,524,204,530,197,538,188,551,180,550,172,539,166,539,156,538,152,530,148,518,132,514,144,502,162,438,171,431,163,418,164,368,174,377,187,406,184,374,176,360,164,350,162,338,171,345,169,322,196,314,187,278,201,269,228,266,235,271,237,278,252,277,257,289,262,301,275,313,280,318,295,316,311,314,320,314,327,319,332,328,332,334,335,343,334,349,326,354,328,359,333,363,333,371,332,376,329,382,324,386,320,395,317,401,312,408,299,409,290,406,285,409,283,414,279,424" shape="poly">
                <area target="" alt="Auvergne-Rhone-alpes" title="" href="{{ url('test/Auvergne-Rhone-Alpes') }}" coords="331,372,332,362,332,355,332,345,333,330,327,318,328,309,335,300,342,296,353,293,361,297,372,296,384,304,390,309,392,319,394,328,398,333,407,333,418,327,429,332,437,322,443,309,455,312,463,321,471,322,480,321,490,317,485,325,487,331,499,325,503,317,514,313,519,314,523,328,526,341,526,351,530,365,540,377,537,389,529,393,521,396,511,398,499,400,502,409,495,416,485,423,475,429,471,437,467,445,468,463,475,461,459,461,445,454,431,454,438,457,407,452,401,444,394,435,394,425,383,421,375,420,371,414,359,418,355,422,352,429,347,421,340,415,337,421,329,426,319,433,315,425,315,417,315,410,316,401,322,392,326,383" shape="poly">
                <area target="" alt="Occitanie" title="" href="{{ url('test/Occitanie') }}" coords="383,523,359,537,351,549,356,565,357,587,340,587,332,587,321,587,310,587,303,582,291,579,291,570,283,568,241,557,239,564,224,567,212,566,196,555,210,523,204,507,202,483,210,480,225,476,240,474,253,468,255,454,259,443,269,433,279,421,279,411,287,411,290,417,305,416,307,423,309,433,315,434,322,435,337,421,344,431,348,434,354,420,367,412,372,421,379,419,383,425,390,430,392,441,395,448,398,452,403,459,412,458,420,456,422,463,432,474,426,483,422,494,419,500,415,507,408,510,401,506" shape="poly">
                <area target="" alt="Provence-Alpes-Cote-D'Azur" title="" href="{{ url('test/Provence-Alpes-Côte d’Azur') }}" coords="475,460,469,451,471,444,479,433,489,425,492,419,502,418,503,405,511,402,520,404,523,409,530,414,535,417,537,425,531,429,533,450,544,460,559,463,564,464,563,478,563,486,556,489,550,493,544,497,539,504,534,509,527,514,522,525,511,531,503,535,495,535,486,534,478,528,466,527,460,520,451,511,444,513,434,514,427,515,419,509,424,501,431,493,435,481,436,474,435,466,435,461,448,460,459,463,466,468" shape="poly">
                <area target="" alt="Corse" title="" href="{{ url('test/Corse') }}" coords="594,524,598,552,601,566,601,577,599,588,599,597,599,606,594,618,590,631,577,626,577,619,571,612,573,601,559,599,565,589,559,582,559,572,559,558,571,553,580,550,587,545" shape="poly">

                <area target="" alt="Guyane" title="" href="{{ url('test/Guyane') }}" coords="671,345,49" shape="circle">
                <area target="" alt="Reunion" title="" href="{{ url('test/Reunion') }}" coords="672,445,29" shape="circle">
                <area target="" alt="Martinique" title="" href="{{ url('test/Martinique') }}" coords="671,84,39" shape="circle">
                <area target="" alt="Guadeloupe" title="" href="{{ url('test/Guadeloupe') }}" coords="674,247,32" shape="circle">
                <area target="" alt="Mayotte" title="" href="{{ url('test/Mayotte') }}" coords="677,167,31" shape="circle">
            </map>
        </div>
 
    </div>
    <div class="col-sm-2" style="background-image: url('image/JESCT trame.png'); background-repeat: repeat;">
       
    </div>
</div>

<div class="row">
    <div class="col-12">
    <p class="d-flex justify-content-xl-center p-5" style="background-color: #F2F2F2"><a href="{{ route ('file.download.index') }}" class="lead  border border-primary p-3">Télécharger la charte JESCT</a></p>
    </div>
</div>

<div class="row">
    <div class="col-12">
            <h3 class="d-flex justify-content-xl-center p-4 border-bottom "> <u> Dernière Annonces  </u></h3>
    </div>
</div>    
<div class="row m-3">
    <div class="col-12 d-flex justify-content-center">
        <button class="btn btn-primary" onclick="HideFunction()">Afficher les offres </button>
    </div>
</div>
<div class="row p-4 text-center displaynone" id="offerID" style="display: none;">
    <div class="col-12">
        @foreach ($lastoffer as $offers)
        <div class="border border-primary d-inline-flex justify-content-around w-25 text-center">         
            <span class=" d-flex p-3 justify-content-xl-center"><a href=" {{ route('offer', $offers->slug) }}"> {{ $offers->title }} </a></span> 
            <span class=" d-flex p-3 justify-content-xl-center"> Créer le : {{ $offers->created_at->format('d/m/Y') }} par : {{ $offers->User->name }} </span>
        </div>
        @endforeach
    </div>
</div>


</div>

<script>
    function HideFunction() {
      var div = document.getElementById("offerID");
      if (div.style.display === "none") {
        div.style.display = "block";
        document.getElementById("offerID").classList.add('animationtest');
      } else {
        div.style.display = "none";
      }
    }
    </script>
@endsection    
