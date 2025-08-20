<?php get_header(); ?>
<div id="page" class="max-w-screen-lg mx-auto">
    <div class="pt-5 flex flex-wrap gap-3">

    </div>
    <?php
    $terms = get_terms([
        'taxonomy' => 'product_category',
        'hide_empty' => false,
    ]);
    foreach($terms as $term){
        ?>
            <!-- <a class="px-2 py-1 rounded-full" href="<?=get_term_link($term->$term_id) ?>"><?=get_term_link()</a>
        <?php
        
        <?php -->

    }
    print_r($terms)
    // echo get_term_link(get_termId);
    ?>
    <main id="main" class="site-main ">
        <?php
        if (have_posts()) {
            ?>
                <div>
                </div>
            <?php
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