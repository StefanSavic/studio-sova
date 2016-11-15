<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Studio Sova</title>



    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon"> 
</head>
<body>
  <div class="zakazi-termin">
    <button type="button" class="sova_close" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
    <img src="img/sova-logo-head-transparent.png" alt="">
    <div class="icon_sova icon__tel"></div>
    <div>065/6847-513</div>
</div>
<nav class="navbar navbar-inverse sova-navbar navbar-fixed-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sova-nav-colapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="#sova-hero"><img src="img/logo-transparent.png" alt=""></a>
    </div>


    <ul class="nav navbar-nav navbar-right collapse navbar-collapse navigation" id="sova-nav-colapse">
        <li><a href="#obavestenja" class="navigation__link page-scroll">Obavestenja</a></li>
        <li><a href="#oprema" class="navigation__link page-scroll">Oprema</a></li>
        <li><a href="#termini" class="navigation__link page-scroll">Termini</a></li>
        <li><a href="#kontakt" class="navigation__link page-scroll">Kontakt</a></li>
    </ul>
</nav>
<div class="container-fluid sova-hero" id="sova-hero">
    <button class="btn btn-large sova_button sova_zakazi text-uppercase">
        zakaži termin
    </button>
    <label class="sova_button text-uppercase text-center">cena termina <strong>900din</strong></label>
</div>  
<!--obavestenja  -->
<div class="container-fluid obavestenja" id="obavestenja">
    <h1 class="text-uppercase text-center">obavestenja</h1>
    <!-- <h2>Nema obevestenja</h2> -->
    <div class="container blog-container">
        @foreach($posts as $post)
        <article class="blog-post">
            <h2 class="text-center text-capitalize">
                {{$post->title}}
            </h2>
            <span class="text-center">{{$post->created_at}}</span>
            <p class="text-center">{{$post->body}}</p>
        </article>
        @endforeach
    </div>
</div><!--/ obavestenja -->

<!--oprema  -->
<div class="container-fluid" id="oprema">
    <!--container  -->
    <div class="container oprema-wrap">
        <h1 class="text-uppercase text-center">oprema</h1>
        <div class="row img-container">
            <div class="col-md-4 col-sm-6">
                <div class="img-wrap">
                    <img class="img-responsive" src="img/oprema/1 Mikrofon-Shure-beta58A.png" alt="oprema">
                    <div class="caption hidden-sm hidden-xs">
                        <h3>Mikrofon-Shure-beta58A</h3>
                    </div>
                </div>

                <h3 class= "caption-sm visible-sm visible-xs">Mikrofon-Shure-beta58A</h3>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="img-wrap">
                    <img  class="img-responsive" src="img/oprema/2 Lampasko-pojacalo-AXL-akita40.png" alt="oprema">
                    <div class="caption text-center hidden-sm hidden-xs">
                        <h3>Lampasko pojacalo AXL-akita40</h3>
                    </div>
                </div>
                <h3 class="caption-sm visible-sm visible-xs">Lampasko pojacalo AXL-akita40</h3>

            </div>
            <div class="col-md-4 col-sm-6">
                <div class="img-wrap">
                    <img  class="img-responsive" src="img/oprema/3 Cinele-zildjianZBTrock.png" alt="oprema">
                    <div class="caption hidden-sm hidden-xs">
                        <h3>Cinele ZildjianZBTrock</h3>
                    </div>
                </div>
                <h3 class="caption-sm visible-sm visible-xs">Cinele ZildjianZBTrock</h3>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="img-wrap">
                    <img  class="img-responsive" src="img/oprema/4 Mikseta-soundcraft-spirit-E12.png" alt="oprema">
                    <div class="caption hidden-sm hidden-xs">
                        <h3>Mikseta Soundcraft Spirit E12</h3>
                    </div>
                </div>
                <h3 class="caption-sm visible-sm visible-xs">Mikseta Soundcraft Spirit E12</h3>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="img-wrap">
                    <img  class="img-responsive" src="img/oprema/5 Perl-sunflower-1200.png" alt="oprema">
                    <div class="caption hidden-sm hidden-xs">
                        <h3>Perl sunflower 1200</h3>
                    </div>
                </div>
                <h3 class="caption-sm visible-sm visible-xs">Perl sunflower 1200</h3>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="img-wrap">
                    <img  class="img-responsive" src="img/oprema/6 Sner-Yamaha-power-V.png" alt="oprema">
                    <div class="caption hidden-sm hidden-xs">
                        <h3>Sner Yamaha power V</h3>
                    </div>
                </div>
                <h3 class="caption-sm visible-sm visible-xs">Sner Yamaha power V</h3>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="img-wrap">
                    <img  class="img-responsive" src="img/oprema/7 Alesis-midiverb-3-efekti-procesor-itd.png" alt="oprema">
                    <div class="caption hidden-sm hidden-xs">
                        <h3>Alesis midiverb 3 </h3>
                    </div>
                </div>
                <h3 class="caption-sm visible-sm visible-xs">Alesis midiverb 3 </h3>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="img-wrap">
                    <img  class="img-responsive" src="img/oprema/8 Bass-pojacalo-Line-6-lowdown-300.png">
                    <div class="caption hidden-sm hidden-xs">
                        <h3 class="text-center">Bass pojacalo Line 6 lowdown 300</h3>
                    </div>
                </div>
                <h3 class=" text-center caption-sm visible-sm visible-xs">Bass pojacalo Line 6 lowdown 300</h3>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="img-wrap">
                    <img  class="img-responsive" src="img/oprema/9 Bubanj-Yamaha-5000-proizveden-u-Engleskoj.png">
                    <div class="caption hidden-sm hidden-xs">
                        <h3 class="text-center">Bubanj Yamaha 5000 proizveden u Engleskoj</h3>
                    </div>
                </div>
                <h3 class=" caption-sm visible-sm visible-xs text-center">Bubanj Yamaha 5000 proizveden u Engleskoj</h3>
            </div>
        </div><!--/ row -->
    </div><!--/ container -->
</div><!--/ oprema -->

<!--container-fluid  -->
<div class="container-fluid" id="termini">
    <h1 class=" text-center text-uppercase">Termini</h1>
    <!--jumbo-container  -->
    <div class="container .container-jumbotron">
        <div class="jumbotron">
            @include('schedule')
        </div>
        </div><!--/ jumbo-container -->
    </div><!--/ container-fluid -->


    <!--contaniner-fluid  -->
    <div class="contaniner-fluid" id="kontakt">
        <h1 class="text-center text-uppercase">kontakt</h1>

        <div class="icon_sova icon__tel"></div>

        <div class="sova_button">065/6847-513</div>

        <div class="icon_sova icon__pointer"></div>

        <div class="sova_button text-capitalize">bulevar vojvode mišića</div>



        <div class="mapa">
            <iframe  frameborder="0" width="350" height="250" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Bigz&key=AIzaSyADx6Uhv9Q54Htp1v8eZ-c53OP8iPUrMcU">
            </iframe>
        </div>

        <a href="https://www.facebook.com/Studio-SOVA-388357134701140/">
            <div class="icon_sova icon__facebook" target="_blank"></div>
        </a>

        <button class="sova_button sova_zakazi sova_button_fb visible-lg">
            <a class="link" href="https://www.facebook.com/Studio-SOVA-388357134701140/" target="_blank">facebook.com/Studiosova</a>
        </button>

        <a href="#sova-hero" class="back-to-top sova_button sova_zakazi page-scroll">
            <i class="fa fa-angle-double-up" aria-hidden="true"></i>
        </a>
        <footer>
            <a href="#" class="link pull-left">
                Copyright &copy; StudioSova 
            </a>    
            <a href="#" class="link pull-right"> 
                Designed &amp; Developed by Stefan Savić
            </a>
        </footer>   
    </div><!--/ contaniner-fluid -->

    <script src="js/app.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery.easing.min.js"></script>
</body>
</html>
