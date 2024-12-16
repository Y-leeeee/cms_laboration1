<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article>
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail">
                                    <?php the_post_thumbnail('large', ['class' => 'img-responsive']); ?>
                                </div>
                            <?php endif; ?>
                            <h1 class="title"><?php the_title(); ?></h1>
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

                            <div class="content">
                                <?php the_content(); ?>
                            </div>

                            <div class="post-tags">
                                <?php the_tags('<i class="fa fa-tags"></i> ', ', ', ''); ?>
                            </div>
                        </article>

                        <nav class="post-navigation">
                            <div class="row">
                                <div class="col-xs-6 text-left">
                                    <?php previous_post_link('<i class="fa fa-chevron-left"></i> %link'); ?>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <?php next_post_link('%link <i class="fa fa-chevron-right"></i>'); ?>
                                </div>
                            </div>
                        </nav>

                        <?php if (comments_open() || get_comments_number()) : ?>
                            <div class="comments-wrap">
                                <?php comments_template(); ?>
                            </div>
                        <?php endif; ?>

                    <?php endwhile; else : ?>
                        <p><?php _e('Sorry, no posts found.', 'textdomain'); ?></p>
                    <?php endif; ?>
                </div>

                <aside id="secondary" class="col-xs-12 col-md-3">
                    <?php get_sidebar(); ?>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
