<?php

get_header();
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                   
                    <h1><?php the_archive_title(); ?></h1>

                   
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <article>
                              
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                <?php endif; ?>

                                
                                <h2 class="title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>

                                
                                <ul class="meta">
                                    <li><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></li>
                                    <li><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></li>
                                    <li><i class="fa fa-tag"></i> <?php the_category(', '); ?></li>
                                </ul>

                                
                                <p><?php the_excerpt(); ?></p>
                            </article>
                        <?php endwhile; ?>

                        
                        <div class="pagination">
                            <?php
                            the_posts_pagination(array(
                                'mid_size'  => 2,
                                'prev_text' => __('&laquo; Previous', 'textdomain'),
                                'next_text' => __('Next &raquo;', 'textdomain'),
                            ));
                            ?>
                        </div>
                    <?php else : ?>
                        <p><?php _e('Sorry, no posts matched your criteria.', 'textdomain'); ?></p>
                    <?php endif; ?>
                </div>

                
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
