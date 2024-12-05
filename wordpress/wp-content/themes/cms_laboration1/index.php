<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            the_title('<h1>', '</h1>');
                            the_content();
                        endwhile;
                    else :
                        echo '<p>No content found</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            the_title('<h1>', '</h1>');
                            the_content();
                        endwhile;
                    else :
                        echo '<p>No content found</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
