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
            	<div class="col-md-8 col-sm-6 col-xs-8">
            	
		           

		            
            	<div class="col-md-6 col-sm-6 col-xs-6" style="margin:5px auto;">
            	<div class="btn-group pull-right results-sorter">
                        <button type="button" class="btn btn-default listing-sort-btn">Filtros</button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Price (High to Low)</a></li>
                            <li><a href="#">Price (Low to High)</a></li>
                            <li><a href="#">Mileage (Low to High)</a></li>
                            <li><a href="#">Mileage (High to Low)</a></li>
                        </ul>
                    </div>
            	
            	
            	
            	   <div class="toggle-view view-format-choice ">
                        
                        <div class="btn-group">
                            <a href="#" class="btn btn-default " id="results-list-view"><i class="fa fa-th-list"></i></a>
                            <a href="#" class="btn btn-default active" id="results-grid-view"><i class="fa fa-th"></i></a>
                        </div>
                    </div>
                </div>
            	
            	
            	<!-- 
                	<ul class="utility-icons social-icons social-icons-colored">
                    	<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    	<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    	<li class="" style="background-color:#3f729b"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    
                    -->
                    
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