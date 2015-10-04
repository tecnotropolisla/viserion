 <!-- Utiity Bar -->
    <div class="utility-bar">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 col-sm-6 col-xs-4">
                	<div class="toggle-make">
                		<a href="#"><i class="fa fa-navicon"></i></a>
                    	<span>troovami.com</span>
                    </div>
                </div>

          	</div>
      	</div>
    	<div class="by-type-options">
    		<div class="container">
               	<div class="row">
                  	<ul class="owl-carousel carousel-alt" data-columns="6" data-autoplay="" data-pagination="no" data-arrows="yes" data-single-item="no" data-items-desktop="6" data-items-desktop-small="4" data-items-mobile="3" data-items-tablet="4">
                    	
                        @for ($i = 0; $i < 5; $i++)
                            <li class="item">                           
                                <a href="#" title="house.troovami.com">
                                    <h1><i class="fa fa-home" style="color: #777"></i></h1>
                                </a>                            
                            </li>
                        	<li class="item">                             
                                <a href="#" title="mobile.troovami.com">
                                    <h1><i class="fa fa-mobile" style="color: #777"></i></h1>
                                </a>                            
                            </li>
                            <li class="item" title="learn.troovami.com">                             
                                <a href="#">
                                    <h1><i class="fa fa-leanpub" style="color: #777"></i></h1>
                                </a>                            
                            </li>
                            <li class="item" title="hotel.troovami.com">                             
                                <a href="#">
                                    <h1><i class="fa fa-bed" style="color: #777"></i></h1>
                                </a>                            
                            </li>                                                         
                        @endfor

                  	</ul>
               	</div>
            </div>
        </div>
    </div>

        @include('login')
        @yield('content')
        @include('pie')
        
        <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
    
    </div>

    {!! Html::script('autostars/js/jquery-2.0.0.min.js') !!}  <!-- Jquery Library Call -->
    {!! Html::script('autostars/vendor/prettyphoto/js/prettyphoto.js') !!}  <!-- PrettyPhoto Plugin -->
    {!! Html::script('autostars/js/ui-plugins.js') !!}  <!-- UI Plugins -->
    {!! Html::script('autostars/js/helper-plugins.js') !!}  <!-- Helper Plugins -->
    {!! Html::script('autostars/vendor/owl-carousel/js/owl.carousel.min.js') !!}  <!-- Owl Carousel -->
    {!! Html::script('autostars/vendor/password-checker.js') !!}  <!-- Password Checker -->
    {!! Html::script('autostars/js/bootstrap.js') !!}  <!-- UI -->
    <!-- {!! Html::script('autostars/js/init.js') !!}   All Scripts -->
    {!! Html::script('autostars/vendor/flexslider/js/jquery.flexslider.js') !!}  <!-- FlexSlider -->
    <!-- {!! Html::script('http://maps.googleapis.com/maps/api/js?sensor=false') !!}--> 
    {!! Html::script('autostars/style-switcher/js/jquery_cookie.js') !!} 
    {!! Html::script('autostars/style-switcher/js/script.js') !!} 
    
    <!-- Propios -->
    {!! Html::script('autostars/js/init_cars.js') !!}  <!-- All Scripts -->
    {!! Html::script('autostars/js/ajaxCars.js') !!}  <!-- Ajax -->
    {!! Html::script('autostars/js/cropbox.js') !!}
        
</body>
</html>    