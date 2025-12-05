<?php 

/* 

Template Name: services

*/


get_header();
?>

  <!-- Hero Section -->
    <section class="hero-services-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-xl-6 hero-content-container">
                    <div class="hero-services-content-box" data-aos="fade-right">
                        <h1>Digitalization for greater efficiency</h1>
                        <p class="lead">We help organizations become more efficient through digitalization. Our solutions cover sectors such as finance, healthcare, education, commerce, regulation and private and public administration.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-6 hero-image-container pt-4">
                    <img src="<?php bloginfo('template_directory');?>/assets/images/service.jpg" class="img-fluid hero-services-image" alt="Digitalization" data-aos="fade-left">
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="services-list-section py-5">
        <div class="container">
            <!-- Software Development -->
            <div class="row align-items-center service-item mb-5" data-aos="fade-up">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/1st.png" class="img-fluid rounded-4" alt="Software Development">
                        <div class="service-image-title">Software Development</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-description d-flex">
                        <div class="service-icon-wrapper me-4">
                            <i class="fas fa-code"></i>
                        </div>
                        <div>
                            <p>We use agile methods to develop customized web and mobile applications since 2015 for organizations in the fields of finance, healthcare, education, commerce, regulation, etc. We accompany them from the definition of the need to the production deployment, including testing and quality assurance.</p>
                            <a href="https://www.iforce5.com/software-development/" class="learn-more text-primary text-decoration-none border-0" target="_blank" rel="noopener noreferrer">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Aurore ERP -->
            <div class="row align-items-center service-item mb-5" data-aos="fade-up" data-aos-delay="400">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/5th.png" class="img-fluid rounded-4" alt="Aurore ERP">
                        <div class="service-image-title">Aurore ERP</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-description d-flex">
                        <div class="service-icon-wrapper me-4">
                            <i class="fas fa-home"></i>
                        </div>
                        <div>
                            <p>Aurore ERP represents the next generation of enterprise software, combining powerful functionality with intuitive design. Whether you're a small business looking to scale or a large enterprise seeking digital transformation, Aurore ERP provides the tools and flexibility to drive your business forward in the digital age.</p>
                            <a href="https://advance-it-group.biz/products-and-services/" class="learn-more text-primary text-decoration-none border-0" target="_blank" rel="noopener noreferrer">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Data Centralization Solution -->
            <div class="row align-items-center service-item mb-5" data-aos="fade-up" data-aos-delay="500">
                <div class="col-lg-6">
                    <div class="service-image-container">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/6th.png" class="img-fluid rounded-4" alt="Data Centralization Solution">
                        <div class="service-image-title">Data Centralization</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-description d-flex">
                        <div class="service-icon-wrapper me-4">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <div>
                            <p>DataCentral allows you to view invoices, inventory, cash movements, accounting entries, etc. from the Headquarter in real time for branches using Sage 100. The solution also allows you to move inventory from branches remotely from the Headquarter, and to create/modify items from the Headquarter.</p>
                            <a href="https://datacentral.tech/" class="learn-more text-primary text-decoration-none border-0 " target="_blank" rel="noopener noreferrer">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <section class="cta py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <h2 class="fw-bold display-5">Contact us for further information.</h2>
                    <p class="fw-bold mt-4">Ready to boost your performance?</p>
                    <p class="text-muted">Let's discuss how we can help transform your business</p>
                </div>
                <div class="col-md-6 text-center" data-aos="fade-left">
                    <div class="p-4 ">
                        <i class="fas fa-phone-alt fs-1 text-primary"></i>
                        <p class="mt-3 mb-0">Reach out now!</p>
                        <h3 class="fw-bold my-2">+237 696 099 939</h3>
                        <a href="#" class="btn btn-primary mt-3">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php get_footer();?>