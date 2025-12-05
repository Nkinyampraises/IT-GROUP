<!-- the loop -->

<?php if(have_posts() ): 
while(have_posts()): 
the_post();
?>
<!-- the loop -->



<!-- call the post category -->

 <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="news-card" onclick="showDetail(1)">
                        <div class="image-wrapper">
							<a href="<?php the_permalink(); ?>">
							<?php if(has_post_thumbnail()):?>
                            <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
								<?php endif ?>
							</a>
                        </div>
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>"><h4 class="card-title" style=""><?php the_title(); ?></h4></a>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <div class="card-footer-custom">
                                <div class="author-info">
                                    <div class="author-avatar">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                                            <path d="M6 6C7.1 6 8 5.1 8 4C8 2.9 7.1 2 6 2C4.9 2 4 2.9 4 4C4 5.1 4.9 6 6 6ZM6 7C4.67 7 2 7.67 2 9V10H10V9C10 7.67 7.33 7 6 7Z" fill="#666"/>
                                        </svg>
                                    </div>
                                    <span class="author-name"><?php the_author(); ?></span>
                                </div>
                                <div class="date-info">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                                        <path d="M11.0833 2.33334H10.5V1.16667H9.33333V2.33334H4.66667V1.16667H3.5V2.33334H2.91667C2.275 2.33334 1.75583 2.85834 1.75583 3.5L1.75 11.0833C1.75 11.725 2.275 12.25 2.91667 12.25H11.0833C11.725 12.25 12.25 11.725 12.25 11.0833V3.5C12.25 2.85834 11.725 2.33334 11.0833 2.33334ZM11.0833 11.0833H2.91667V5.83334H11.0833V11.0833Z" fill="#0066FF"/>
                                    </svg>
                                    <span class="date-text"><?php the_date(); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
					</article>
                </div>
				<?php
    endwhile;
endif;
?>