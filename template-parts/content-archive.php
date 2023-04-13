


<article>
    
        <img src="<?php the_post_thumbnail_url() ?>" alt="">
    
    
        <h2 class="title">
            <a href=<?php echo get_permalink(); ?>> <?php the_title(); ?></a>
            
            
        </h2>
        
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
        
        <p><?php the_excerpt(); ?></p>
</article>
