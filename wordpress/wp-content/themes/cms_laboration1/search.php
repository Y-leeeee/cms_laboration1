<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            ?>
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        <?php
                        endwhile;
                    else :
                        ?>
                        <p><?php _e('Innehållet kunde inte hittas.', 'textdomain'); ?></p>
                    <?php
                    endif;
                    ?>
                </div>

                <aside id="secondary" class="col-xs-12 col-md-3">
                    <ul id="menu-sidomeny" class="side-menu">
                        <?php
                        $child_pages = wp_list_pages([
                            'child_of' => get_the_ID(),
                            'title_li' => '',
                            'echo' => 0
                        ]);
                        if ($child_pages) {
                            echo $child_pages;
                        } else {
                            echo '
                                <li class="current-menu-item"><a href="undersida.html" aria-current="page">Undersida</a></li>
                                <li><a href="undersida-2.html">Undersida 2</a></li>
                                <li><a href="undersida-3.html">Undersida 3</a></li>
                                <li><a href="undersida-4.html">Undersida 4</a></li>';
                        }
                        ?>
                    </ul>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
