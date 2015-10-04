@extends('app')

@section('content')

<!-- Start Body Content -->
<!-- Start Body Content -->
    <div class="main" role="main">
      <div id="content" class="content full">
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <h1 class="uppercase strong">¿Quienes Somos?</h1>
                        <p class="lead">Troovami is the world's leading portal for<br>easy and quick <span class="accent-color">car buying and selling</span></p>
                    </div>
                    <div class="col-md-6">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, <span class="accent-color">consectetur adipiscing</span> elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
                <hr class="fw">
                <div class="text-align-center"><h2 class="uppercase">Nuestro Equipo</h2></div>
                <div class="spacer-20"></div>
              <div class="row">
                <ul class="sort-destination gallery-grid" data-sort-id="gallery">
                    <li class="col-md-4 col-sm-4 grid-item format-image">
                        <div class="grid-item-inner">
                            <a href="{{ asset('autostars/images/team1.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('autostars/images/team1.jpg') }}" alt=""> </a>
                            <div class="grid-content">
                                <h3 class="post-title">Philip Freeman</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                <ul class="social-icons social-icons-colored">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 grid-item format-image">
                        <div class="grid-item-inner">
                            <a href="{{ asset('autostars/images/team2.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('autostars/images/team2.jpg') }}" alt=""> </a>
                            <div class="grid-content">
                                <h3 class="post-title">Heather Ford</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                <ul class="social-icons social-icons-colored">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 grid-item format-image">
                        <div class="grid-item-inner">
                            <a href="{{ asset('autostars/images/team3.jpg') }}" data-rel="prettyPhoto" class="media-box"> <img src="{{ asset('autostars/images/team3.jpg') }}" alt=""> </a>
                            <div class="grid-content">
                                <h3 class="post-title">Amy Willis</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>
                                <ul class="social-icons social-icons-colored">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
          </div>
        </div>
  </div>
    <!-- End Body Content -->
    <!-- End Body Content -->
  
@endsection