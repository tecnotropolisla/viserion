
    @include('cabezaA')

        <div class="hero-area">
            <!-- Start Hero Slider -->
            <div class="hero-slider heroflex flexslider clearfix" data-autoplay="yes" data-pagination="no" data-arrows="yes" data-style="fade" data-speed="7000" data-pause="yes">
                <ul class="slides">
                    <li class="parallax" style="background-image:url({{ asset('autostars/images/slide2.jpg') }});"></li>
                    <li class="parallax" style="background-image:url({{ asset('autostars/images/slide3.jpg') }});"></li>
                    <li class="parallax" style="background-image:url({{ asset('autostars/images/slide4.jpg') }});"></li>
                </ul>
            </div>
            <!-- End Hero Slider -->
        </div>

   @include('cabezaB')