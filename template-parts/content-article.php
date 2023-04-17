

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <article>
                    <?php the_post_thumbnail( 'large' ); ?>
                        <h1 class="title"><?php the_title(); ?> </h1>
                        <ul class="meta">
                            <li>
                                <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
                            </li>
                            <li>
                                <i class="fa fa-user"></i> <a href=""><?php echo get_the_author_link(); ?> </a>
                            </li>
                            <li>
                                <i class="fa fa-tag"></i> <a href=""><?php the_category(', '); ?></a>
                            </li>
                            
                        </ul>
                        <p><?php the_content(); ?> 
                        </p>
                        
 
                        
                    </article>
                </div>



                <?php get_template_part('inc/parts/blog', 'sidebar'); ?>







            </div>
        </div>
    </section>
</main>



    
