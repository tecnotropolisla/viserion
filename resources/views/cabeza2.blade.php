	<div class="site-header-wrapper">
        <header class="site-header">
            <div class="container sp-cont">
                <div class="site-logo">
                    <h1><a href="{{ route ('home') }}"><img src="{{ asset('autostars/images/logo.png') }}" alt="Logo"></a></h1>
                   <!-- <span class="site-tagline">Comprar o vender<br>ahora es más fácil!</span>-->
                </div>

                <div class="header-right">

                @if (Auth::guest())

                    <div class="user-login-panel">
                        <a href="#" class="user-login-btn" data-toggle="modal" data-target="#loginModal">
                            <i class="fa fa-user"></i>
                        </a>

                    </div>

                @endif

                @if (Auth::user())
                    <div class="user-login-panel logged-in-user">
                        <a href="#" class="user-login-btn" id="userdropdown" data-toggle="dropdown">
                            <img src="data:image/jpeg;base64,{{ Auth::user()->blb_img }}" alt="">
                            <span class="user-informa">
                                <span class="meta-data">Bienvenido</span>
                                <span class="user-name">{{ Auth::user()->name }}</span>
                            </span>
                            <span class="user-dd-dropper"><i class="fa fa-angle-down"></i></span>
                        </a>

                        <ul class="dropdown-menu" role="menu" aria-labelledby="userdropdown">
                            <li><a href="{{route('publicar')}}">Publicar</a></li>
                            <li><a href="{{route('logout')}}">Salir</a></li>
                        </ul>
                    </div>
                @endif

                    <div class="topnav dd-menu">
                        <ul class="top-navigation sf-menu">
                            
				        @if (Auth::guest())

                            <li>
                                <a href="{{route('register')}}">Crear Cuenta</a>
                            </li>

				        @endif

                        </ul>
                    </div>
                </div>

            </div>

        </header>

        <!-- End Site Header -->
        <div class="navbar">
            <div class="container sp-cont">
                <div class="search-function">
                    <a href="#" class="search-trigger"><i class="fa fa-search"></i></a>
                    <span>Buscar Vehículos</span>
                </div>
                <a href="#" class="visible-sm visible-xs" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <!-- Main Navigation -->
                <nav class="main-navigation dd-menu toggle-menu" role="navigation">
                    <ul class="sf-menu">
                        <li><a href="javascript:void(0)">Home</a>
                            <ul class="dropdown">
                                <li><a href="javascript:void(0)">Home versions</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Default</a></li>
                                        <li><a href="index2.html">Version 2</a></li>
                                        <li><a href="index3.html">Version 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Slider versions</a>
                            		<ul class="dropdown">
                                		<li><a href="index.html">Default(Flexslider)</a></li>
                                		<li><a href="index-revslider.html">Slider Revolution <span class="label label-danger">New</span></a></li>
                                        <li><a href="hero-carousel.html">Full Width Carousel</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Search Form Positions</a>
                            		<ul class="dropdown">
                                		<li><a href="index.html">Default(With Main Menu)</a></li>
                                        <li><a href="search-below-slider.html">Below Slider</a></li>
                                        <li><a href="search-over-slider.html">Over Slider</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Header versions</a>
                            		<ul class="dropdown">
                                		<li><a href="index.html">Default</a>
                                        <li><a href="header-v2.html">Version 2</a></li>
                                        <li><a href="header-v3.html">Version 3</a></li>
                                        <li><a href="header-v4.html">Version 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Pages</a>
                            <ul class="dropdown">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="joinus.html">Signup</a></li>
                                <li><a href="404.html">404 Error Page</a></li>
                                <li><a href="add-listing-pricing.html">Pricing</a></li>
                                <li><a href="shortcodes.html">Shortcodes</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="dealers-search.html">Dealer Search</a></li>
                                <li><a href="dealers-search-results.html">Dealer Search Results</a></li>
                            </ul>
                        </li>
                        <li class="megamenu"><a href="index.html">Mega Menu</a>
                            <ul class="dropdown">
                                <li>
                                    <div class="megamenu-container container">
                                        <div class="row">
                                            <div class="mm-col col-md-2">
                                                <ul class="sub-menu">
                                                    <li><a href="results-list.html">Brand new cars</a></li>
                                                    <li><a href="results-list.html">Used cars</a></li>
                                                    <li><a href="results-list.html">Latest reviews</a></li>
                                                    <li><a href="blog.html">Auto news</a></li>
                                                    <li><a href="about.html">Car insurance</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm-col col-md-5">
                                                <span class="megamenu-sub-title">Browse by body type</span>
                                                <ul class="body-type-widget">
                                                    <li> <a href="results-list.html"><img src="autostars/images/body-types/wagon.png" alt=""> <span>Wagon</span></a></li>
                                                    <li> <a href="results-list.html"><img src="autostars/images/body-types/minivan.png" alt=""> <span>Minivan</span></a></li>
                                                    <li> <a href="results-list.html"><img src="autostars/images/body-types/coupe.png" alt=""> <span>Coupe</span></a></li>
                                                    <li> <a href="results-list.html"><img src="autostars/images/body-types/convertible.png" alt=""> <span>Convertible</span></a></li>
                                                    <li> <a href="results-list.html"><img src="autostars/images/body-types/crossover.png" alt=""> <span>Crossover</span></a></li>
                                                    <li> <a href="results-list.html"><img src="autostars/images/body-types/suv.png" alt=""> <span>SUV</span></a></li>
                                                </ul>
                                                <a href="results-list.html" class="basic-link">view all</a>
                                            </div>
                                            <div class="mm-col col-md-5">
                                                <span class="megamenu-sub-title">Browse by make</span>
                                                <ul class="make-widget">
                                                    <li class="item"> <a href="results-list.html"><img src="autostars/images/logo_mercedes.png" alt=""></a></li>
                                    				<li class="item"> <a href="results-list.html"><img src="autostars/images/logo_vw.png" alt=""></a></li>
                                    				<li class="item"> <a href="results-list.html"><img src="autostars/images/logo_mazda.png" alt=""></a></li>
                                                    <li class="item"> <a href="results-list.html"><img src="autostars/images/logo_toyota.png" alt=""></a></li>
                                                    <li class="item"> <a href="results-list.html"><img src="autostars/images/logo_nissan.png" alt=""></a></li>
                                                    <li class="item"> <a href="results-list.html"><img src="autostars/images/logo_ford.png" alt=""></a></li>
                                                    <li class="item"> <a href="results-list.html"><img src="autostars/images/logo_bmw.png" alt=""></a></li>
                                    				<li class="item"> <a href="results-list.html"><img src="autostars/images/logo_audi.png" alt=""></a></li>
                                                </ul>
                                                <a href="results-list.html" class="basic-link">view all</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Listing</a>
                            <ul class="dropdown">
                                <li><a href="results-list.html">List View</a></li>
                                <li><a href="results-grid.html">Grid View</a></li>
                                <li><a href="vehicle-details.html">Vehicle Details</a></li>
                                <li><a href="add-listing-form.html">Add new listing</a></li>
                                <li><a href="vehicle-comparision.html">Vehicle Comparision</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Users</a>
                            <ul class="dropdown">
                                <li><a href="dealer-prosite.html">Dealer Prosite</a></li>
                                <li><a href="user-dashboard.html">User Dashboard</a></li>
                                <li><a href="user-dashboard-saved-searches.html">Manage Saved Searches</a></li>
                                <li><a href="user-dashboard-saved-cars.html">Manage Saved Cars</a></li>
                                <li><a href="user-dashboard-manage-ads.html">Manage Ads</a></li>
                                <li><a href="user-dashboard-profile.html">User Profile</a></li>
                                <li><a href="user-dashboard-settings.html">User Settings</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Gallery</a>
                            <ul class="dropdown">
                                <li><a href="gallery-2cols.html">Gallery 2 Columns</a></li>
                                <li><a href="gallery-3cols.html">Gallery 3 Columns</a></li>
                                <li><a href="gallery-4cols.html">Gallery 4 Columns</a></li>
                                <li><a href="gallery-2cols-details.html">Gallery 2 Columns with Details</a></li>
                                <li><a href="gallery-3cols-details.html">Gallery 3 Columns with Details</a></li>
                                <li><a href="gallery-4cols-details.html">Gallery 4 Columns with Details</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Blog</a>
                            <ul class="dropdown">
                                <li><a href="blog.html">Blog List</a></li>
                                <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                <li><a href="single-post.html">Single Post</a></li>
                                <li><a href="single-post-review.html">Single Review Post</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav> 

                 <div class="container">
                    @if (Session::has('errors'))

                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <ul>
                                    <!-- <strong>Oops! Something went wrong : </strong> -->
                                    <strong>Lo sentimos!, ha ocurrido un inconveniente : </strong>
                                    @foreach ($errors->all() as $error)
                                         <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                        </div>

                    @endif
                </div> 

                <!-- Search Form -->
                <div class="search-form">
                    <div class="search-form-inner">
                        <form>
                            <h3>Find a Car with our Quick Search</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Postcode</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Body Type</label>
                                            <select name="Body Type" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>Wagon</option>
                                                <option>Minivan</option>
                                                <option>Coupe</option>
                                                <option>Crossover</option>
                                                <option>Van</option>
                                                <option>SUV</option>
                                                <option>Minicar</option>
                                                <option>Sedan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Make</label>
                                            <select name="Make" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>Jaguar</option>
                                                <option>BMW</option>
                                                <option>Mercedes</option>
                                                <option>Porsche</option>
                                                <option>Nissan</option>
                                                <option>Mazda</option>
                                                <option>Acura</option>
                                                <option>Audi</option>
                                                <option>Bugatti</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Model</label>
                                            <select name="Model" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>GTX</option>
                                                <option>GTR</option>
                                                <option>GTS</option>
                                                <option>RLX</option>
                                                <option>M6</option>
                                                <option>S Class</option>
                                                <option>C Class</option>
                                                <option>B Class</option>
                                                <option>A Class</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Price Min</label>
                                            <select name="Min Price" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>$10000</option>
                                                <option>$20000</option>
                                                <option>$30000</option>
                                                <option>$40000</option>
                                                <option>$50000</option>
                                                <option>$60000</option>
                                                <option>$70000</option>
                                                <option>$80000</option>
                                                <option>$90000</option>
                                                <option>$100000</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Price Max</label>
                                            <select name="Max Price" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>$10000</option>
                                                <option>$20000</option>
                                                <option>$30000</option>
                                                <option>$40000</option>
                                                <option>$50000</option>
                                                <option>$60000</option>
                                                <option>$70000</option>
                                                <option>$80000</option>
                                                <option>$90000</option>
                                                <option>$100000</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1" value="option1"> Brand new only
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox2" value="option2"> Certified
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Min Year</label>
                                            <select name="Min Year" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>2005</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Max Year</label>
                                            <select name="Max Year" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>2005</option>
                                                <option>2006</option>
                                                <option>2007</option>
                                                <option>2008</option>
                                                <option>2009</option>
                                                <option>2010</option>
                                                <option>2011</option>
                                                <option>2012</option>
                                                <option>2013</option>
                                                <option>2014</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Min Mileage</label>
                                            <select name="Min Mileage" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>10000</option>
                                                <option>20000</option>
                                                <option>30000</option>
                                                <option>40000</option>
                                                <option>50000</option>
                                                <option>60000</option>
                                                <option>70000</option>
                                                <option>80000</option>
                                                <option>90000</option>
                                                <option>100000</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Max Mileage</label>
                                            <select name="Max Mileage" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>10000</option>
                                                <option>20000</option>
                                                <option>30000</option>
                                                <option>40000</option>
                                                <option>50000</option>
                                                <option>60000</option>
                                                <option>70000</option>
                                                <option>80000</option>
                                                <option>90000</option>
                                                <option>100000</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Transmission</label>
                                            <select name="Transmission" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>5 Speed Manual</option>
                                                <option>5 Speed Automatic</option>
                                                <option>6 Speed Manual</option>
                                                <option>6 Speed Automatic</option>
                                                <option>7 Speed Manual</option>
                                                <option>7 Speed Automatic</option>
                                                <option>8 Speed Manual</option>
                                                <option>8 Speed Automatic</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Body Color</label>
                                            <select name="Body Color" class="form-control selectpicker">
                                                <option selected>Any</option>
                                                <option>Red</option>
                                                <option>Black</option>
                                                <option>White</option>
                                                <option>Yellow</option>
                                                <option>Brown</option>
                                                <option>Grey</option>
                                                <option>Silver</option>
                                                <option>Gold</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-block btn-info btn-lg" value="Find my vehicle now">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   	</div>

    <div class="page-header parallax" style="background-image:url({{ asset('autostars/images/page_header3.jpg') }});">
        <div class="container">
            <h1 class="page-title"><!--<Sell your car--></h1>
        </div>
    </div>

    <!-- Utiity Bar -->
    <div class="utility-bar">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 col-sm-6 col-xs-8">
                	<div class="toggle-make">
                		<a href="#"><i class="fa fa-navicon"></i></a>
                    	<span>troovami.com</span>
                    </div>
                </div>
            	<div class="col-md-8 col-sm-6 col-xs-4">
                	<ul class="utility-icons social-icons social-icons-colored">
                    	<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    	<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    	<li class="" style="background-color:#3f729b"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
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