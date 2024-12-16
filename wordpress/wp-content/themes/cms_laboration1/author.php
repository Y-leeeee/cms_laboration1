<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1>Författare: <span><?php echo get_the_author(); ?></span></h1>

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <article>
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                                <?php endif; ?>
                                <h2 class="title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <ul class="meta">
                                    <li><i class="fa fa-calendar"></i> <?php the_date(); ?></li>
                                    <li><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></li>
                                    <li><i class="fa fa-tag"></i> <?php the_category(', '); ?></li>
                                </ul>
                                <p><?php the_excerpt(); ?></p>
                            </article>
                        <?php endwhile; ?>

                        <!-- Pagination -->
                        <nav class="navigation pagination">
                            <?php
                            the_posts_pagination(array(
                                'mid_size' => 2,
                                'prev_text' => __('« Föregående', 'textdomain'),
                                'next_text' => __('Nästa »', 'textdomain'),
                            ));
                            ?>
                        </nav>

                    <?php else : ?>
                        <p><?php _e('Inga inlägg hittades för den här författaren.', 'textdomain'); ?></p>
                    <?php endif; ?>
                </div>

                
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <?php if (is_active_sidebar('sidebar-1')) : ?>
                        <?php dynamic_sidebar('sidebar-1'); ?>
                    <?php endif; ?>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
