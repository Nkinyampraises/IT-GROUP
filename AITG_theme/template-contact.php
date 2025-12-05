<?php 

/* 

Template Name: Contact

*/


get_header();
?>


 <!-- HERO SECTION -->
    <section class="contact-hero mx-3 mx-md-4 mx-lg-5 rounded " >
        <div class="container">
            <div class="row justify-content-center"  data-aos="zoom-in">
                <div class="col-md-8 text-center">
                    <h1 class="text-white">Get in Touch with ADVANCE-IT Group</h1>
                    <p class="text-white">We're here to help you improve your organizational performance through technology. Reach out to us for inquiries or support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT MAIN SECTION -->
<section class="py-4">
    <div class="container">
        <div class="row">

            <div class="col-md-6" data-aos="fade-right">

                <div class="contact-forms">

                    <div class="contact-form-wrapper" data-aos="fade-up">
                        <h2 class="text-primary text-center text-lg-start">Send us a Message</h2>
                        <p class="text-center text-lg-start">Fill out the form below and we will get back to you as soon as possible.</p>

                        <form id="contactForm" class="contact-form">

                            <div class="form-group mb-3" data-aos="fade-up">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="form-group mb-3" data-aos="fade-up">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required>
                            </div>

                            <div class="text-center mb-3" data-aos="fade-up">
                                <h2 class="mb-3">What are you interested in?</h2>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="interest" id="software-development" value="software-development" checked>
                                    <label class="form-check-label" for="software-development">Software Development</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="interest" id="outstaffing" value="outstaffing">
                                    <label class="form-check-label" for="outstaffing">Consulting</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="interest" id="qa" value="qa">
                                    <label class="form-check-label" for="qa">Datacentral</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="interest" id="datacentral" value="datacentral">
                                    <label class="form-check-label" for="datacentral">Digital Intergration</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="interest" id="aurore-sis" value="aurore-sis">
                                    <label class="form-check-label" for="aurore-sis">Aurore-SIS</label>
                                </div>
                            </div>

                            <div class="form-group mb-3" data-aos="fade-up">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="6" class="form-control" placeholder="Your Message" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary w-100" data-aos="zoom-in">
                                <i class="bi bi-send"></i> Send Message
                            </button>
                        </form>
                    </div>

                    <!-- NEWSLETTER -->
                    <div class="newsletter-box mt-4" data-aos="fade-up">
                        <h3 class="text-primary">Stay Updated with Our Newsletter</h3>
                        <p>Subscribe to receive the latest news, updates, and offers.</p>

                        <form id="newsletterFormContact" class="newsletter-form-contact">
                            <input type="email" class="form-control mb-3" placeholder="Enter your email" required>
                            <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                        </form>
                    </div>

                </div>
            </div>

            <div class="col-md-6" data-aos="fade-left">
                <div class="contact-info-column">

                    <div class="contact-info-wrapper">
                        <h2 class="text-primary">Contact Information</h2>

                        <div class="info-card d-flex bg-light p-3 mb-3" data-aos="fade-up">
                            <div class="info-icon me-3">
                                <i class="bi bi-geo-alt-fill fs-3"></i>
                            </div>
                            <div>
                                <h4>Address:</h4>
                                <p>2593, rue 6.250 Oyom-Abang, Nkolbisson,<br>Carrefour Tsimi, Yaoundé</p>
                            </div>
                        </div>

                        <div class="info-card d-flex bg-light p-3 mb-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="info-icon me-3">
                                <i class="bi bi-telephone-fill fs-3"></i>
                            </div>
                            <div>
                                <h4>Phone:</h4>
                                <p>+237 696 099 939</p>
                                <p class="text-small">Mon-Fri, 8:00 AM - 6:00 PM</p>
                            </div>
                        </div>

                        <div class="info-card d-flex bg-light p-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="info-icon me-3">
                                <i class="bi bi-envelope-fill fs-3"></i>
                            </div>
                            <div>
                                <h4>Email:</h4>
                                <p>info@advance-it-group.biz</p>
                                <p>support@advance-it.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- MAP -->
                    <div class="map-wrapper mt-4" data-aos="fade-up">
                        <h3 class="text-primary">Our Location</h3>
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.0000000000005!2d11.4255663!3d3.872959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcf118015f61d%3A0x485122b49eca518!2sCarrefour%20Tsimi!5e0!3m2!1sen!2s!4v1690000000000!5m2!1sen!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <div class="map-info">
                            
                                <strong>ADVANCE-IT Group Headquarters</strong><br>
                                2593, rue 6.250 Oyom-Abang, Nkolbisson, Carrefour Tsimi, Yaoundé
                            </div>
                        </div>
                    </div>

                    <div class="social-media-wrapper mt-4" data-aos="fade-up">
                        <h3 class="text-primary">Connect with Us</h3>
                        <div class="social-buttons">
                            <a href="https://www.facebook.com/advit.group" class="social-btn facebook" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.linkedin.com/company/advance-it-group" class="social-btn linkedin" target="_blank" rel="noopener noreferrer"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

    <!-- CTA -->
    <section class="cta"  data-aos="zoom-in">
        <div class="container-small text-center">
            <h2 class="text-black">Ready to boost your performance?</h2>
            <p class="text-black">Let's discuss how ADVANCE-IT Group can transform your business.</p>
        </div>
    </section>





<?php get_footer();?>