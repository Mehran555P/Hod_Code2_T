<?php get_header(); ?>
<div id="page" class="site">
    <?php
    $terms = get_terms([
        'taxonomy' => 'product_category',
        'hide_empty' => false,
    ]);
    print_r($terms)
    // echo get_term_link(get_termId);
    ?>
    <main id="main" class="site-main">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_title('<h2>', '</h2>');
                the_excerpt();
                the_post_thumbnail();
            }
        } else {
            echo '<p>No content found.</p>';
        }
        ?>
    </main>
</div>
<?php get_footer(); ?>