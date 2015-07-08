
    <footer class="site-footer">
       	<div class="site-footer-top">
       		<div class="container">
                <div class="row">
                	<div class="col-md-3 col-sm-6 footer_widget widget widget_newsletter">
                    	<h4 class="widgettitle">Sign up for our newsletter</h4>
                        <form>
                        	<input type="text" class="form-control" placeholder="Name">
                        	<input type="email" class="form-control" placeholder="Email">
                        	<input type="submit" class="btn btn-primary btn-lg" value="Sign up now">
                        </form>
                    </div>
                	<div class="col-md-2 col-sm-6 footer_widget widget widget_custom_menu widget_links">
                    	<h4 class="widgettitle">Blogroll</h4>
                        <ul>
                        	<li><a href="blog.html">Car News</a></li>
                        	<li><a href="blog-masonry.html">Car Reviews</a></li>
                        	<li><a href="about.html">Car Insurance</a></li>
                        	<li><a href="about-html">Bodyshop</a></li>
                        </ul>
                    </div>
                	<div class="col-md-2 col-sm-6 footer_widget widget widget_custom_menu widget_links">
                    	<h4 class="widgettitle">Help &amp; Support</h4>
                        <ul>
                        	<li><a href="results-list.html">Buying a car</a></li>
                        	<li><a href="joinus.html">Selling a car</a></li>
                        	<li><a href="about.html">Online safety</a></li>
                        	<li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                	<div class="col-md-5 col-sm-6 footer_widget widget text_widget">
                    	<h4 class="widgettitle">About AutoStars</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>
                    </div>
                </div>
            </div>
     	</div>
        <div class="site-footer-bottom">
        	<div class="container">
                <div class="row">
                	<div class="col-md-6 col-sm-6 copyrights-left">
                    	<p>&copy; 2014 AutoStars. All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 col-sm-6 copyrights-right">
                        <ul class="social-icons social-icons-colored pull-right">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li class="flickr"><a href="#"><i class="fa fa-flickr"></i></a></li>
                            <li class="vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                            <li class="digg"><a href="#"><i class="fa fa-digg"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

        <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>  
</div>



<!-- Login -->

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Iniciar Sesión</h4>
            </div>
            <div class="modal-body">

                {!! Form::open(['route' => 'login', 'class' => 'form']) !!}
                    <div class="form-group">
                        <label>Correo Electrónico</label>
                        {!! Form::email('email', '', ['class'=> 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        {!! Form::password('password', ['class'=> 'form-control']) !!}
                    </div>
                    <div class="checkbox">
                        <label><input name="remember" type="checkbox"> Recordarme</label>
                    </div>
                    <div>                            
                        {!! Form::submit('Entrar',['class' => 'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}

            </div>
<!--
            <div class="modal-footer">
                <button type="button" class="btn btn-block btn-facebook btn-social"><i class="fa fa-facebook"></i> Login with Facebook</button>
                <button type="button" class="btn btn-block btn-twitter btn-social"><i class="fa fa-twitter"></i> Login with Twitter</button>
            </div>
-->
        </div>
    </div>
</div>

<!-- End Login -->


<script src="autostars/js/jquery-2.0.0.min.js"></script> <!-- Jquery Library Call -->
<script src="autostars/vendor/prettyphoto/js/prettyphoto.js"></script> <!-- PrettyPhoto Plugin -->
<script src="autostars/js/ui-plugins.js"></script> <!-- UI Plugins -->
<script src="autostars/js/helper-plugins.js"></script> <!-- Helper Plugins -->
<script src="autostars/vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
<script src="autostars/vendor/password-checker.js"></script> <!-- Password Checker -->
<script src="autostars/js/bootstrap.js"></script> <!-- UI -->
<script src="autostars/js/init.js"></script> <!-- All Scripts -->
<script src="autostars/vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="autostars/style-switcher/js/jquery_cookie.js"></script>
<script src="autostars/style-switcher/js/script.js"></script>