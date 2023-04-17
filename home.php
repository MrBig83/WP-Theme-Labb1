<?php
    get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1>
                        <?php //Detta är en funktion som ersätter behovet av exempelvis author.php och istället bara ändrar rubriken på sidan
                            if (is_category()) {
                                echo "Blogg";
                            } elseif (is_tag()) {
                                single_tag_title();
                            } elseif (is_author()){
                                the_post();
                                echo get_the_author();
                                rewind_posts();
                            }  else {
                                echo "Blogg";
                            }
                        ?>
                    </h1>

                        <?php
                            if( have_posts() ){
                                while( have_posts() ){
                                    the_post();
                                    get_template_part('template-parts/content', 'archive');
                                    
                                };
                            };                                     
                            ?>
                    <nav class="navigation pagination">
                        <?php echo paginate_links()?>
                    </nav>
                </div>
                <?php get_template_part('inc/parts/blog', 'sidebar'); ?>
            </div>
        </div>
    </section>
</main>

<?php
    get_footer();
?>