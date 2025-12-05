<footer class="footer pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 text-white" data-aos="fade-up" data-aos-delay="0">
                    <p>Empowering businesses through innovative IT Solutions since 2015</p>
                    <ul class="list-unstyled">
                        <li class="d-flex mb-2 text-white">
                            <i class="fas fa-map-marker-alt me-3 pt-1"></i>
                            <span>2593, rue 6.250 Oyom-Abang, Nkolbisson Carrefour Tsimi, Yaounde</span>
                        </li>
                        <li class="d-flex mb-2 text-white">
                            <i class="fas fa-phone-alt me-3 pt-1"></i>
                            <span>+237 696 009 939</span>
                        </li>
                        <li class="d-flex text-white">
                            <i class="fas fa-envelope me-3 pt-1"></i>
                            <span>info@advance-it-group.biz</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="fw-bold mb-4 text-white">Quick links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.html" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="sevices.html" class="text-white text-decoration-none">Services</li>
                        <li class="mb-2"><a href="about.html" class="text-white text-decoration-none">About</a></li>
                        <li class="mb-2"><a href="news.html" class="text-white text-decoration-none">News</a></li>
                        <li class="mb-2"><a href="contact.html" class="text-white text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <h5 class="fw-bold mb-4 text-white">Products</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none" target="_blank" rel="noopener noreferrer">Aurore ERP</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none" target="_blank" rel="noopener noreferrer">Data Central</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none" target="_blank"rel="noopener noreferrer">Aurore ERP</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <h5 class="fw-bold mb-4 text-white" >Services</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Software Development</a><li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Consulting</a></li>
                        <li lass="mb-2"><a href="#" class="text-white text-decoration-none">Digital Intergration</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row align-items-center">
                <div class="col-md-6 mb-3 mb-md-0">
                    <a href="#" class="btn btn-light rounded-circle me-2">
                        <i class="fab fa-facebook-f text-primary"></i>
                    </a>
                    <a href="#" class="btn btn-light rounded-circle">
                        <i class="fab fa-linkedin-in text-primary"></i>
                    </a>
                </div>
                <div class="col-md-6 text-md-end text-info">
                    <p class="mb-0 small">2025 Advance-it-Group all rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <?php wp_footer();?>
    <script>
        $(document).ready(function(){
          $(".owl-carousel").owlCarousel({
            loop: true,             // Makes the carousel loop infinitely
            margin: 20,             // Adds space between the images
            autoplay: true,         // This enables the automatic rotation
            autoplayTimeout: 2000,  // Sets the speed to 2 seconds per slide
            dots: false,            // This ensures the dots are disabled
            responsive:{            // Sets how many items to show on different screen sizes
                0:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
          });

          AOS.init({
            duration: 1200,
        once: true,
        mirror: false
          });
        });
    </script>
  </body>
</html>