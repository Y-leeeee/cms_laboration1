<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1>Blogg</h1>
                    
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <article>
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>" />
                                <?php endif; ?>
                                <h2 class="title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i> <?php the_author_posts_link(); ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-tag"></i> <?php the_category(', '); ?>
                                    </li>
                                </ul>
                                <p><?php the_excerpt(); ?></p>
                            </article>
                        <?php endwhile; ?>
                        
                        <nav class="navigation pagination" aria-label="Sidonumrering för inlägg">
                            <?php
                            echo paginate_links(array(
                                'prev_text' => __('&laquo; Föregående'),
                                'next_text' => __('Nästa &raquo;'),
                            ));
                            ?>
                        </nav>
                    <?php else : ?>
                        <p><?php _e('Inga inlägg hittades.', 'textdomain'); ?></p>
                    <?php endif; ?>

                </div>

                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <?php if (is_active_sidebar('sidebar-1')) : ?>
                            <?php dynamic_sidebar('sidebar-1'); ?>
                        <?php else : ?>
                            <ul>
                                <li><?php _e('Lägg till widgets i "Sidebar 1" från adminpanelen.', 'textdomain'); ?></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
