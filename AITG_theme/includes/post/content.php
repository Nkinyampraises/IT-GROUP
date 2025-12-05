<!-- the loop -->

<?php if(have_posts() ): 
while(have_posts()): 
the_post();
?>
<!-- the loop -->

<!-- call the post category -->
<?php if(has_post_thumbnail()):?>
<section class="position-relative py-8 py-sm-9" style="background-image:url(<?php the_post_thumbnail_url();?>); background-position: center left; background-size: cover; height:50vh;">
<?php endif;?>
	<!-- Background dark overlay -->
	<div class="bg-overlay bg-dark opacity-2"></div>
	<div class="container z-index-9 position-relative">
		<div class="row">
			<div class="col-xl-8 m-auto text-center">
				<h1 class="text-white mb-3"><?php the_title();?></h1>
			</div>
		</div> <!-- Row END -->
	</div>
</section>

<section class="py-5">
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
		<?php the_content();?> 
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
                        <a href="contact.html" class="btn btn-primary mt-3">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    </div>
</div>


<?php endwhile; else: endif;?>

<!-- call the post category -->



