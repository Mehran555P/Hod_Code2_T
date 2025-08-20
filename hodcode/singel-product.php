<?php get_header(); ?>

<div class="container mx-auto px-4 py-8">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="bg-white shadow-lg rounded-2xl p-6">

                <h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="mb-4">
                        <?php the_post_thumbnail('large', ['class' => 'rounded-lg']); ?>
                    </div>
                <?php endif; ?>

                <div class="text-lg mb-4"><?php the_content(); ?></div>

                <div class="border-t pt-4">
                    <p><strong>Price:</strong> <?php echo get_post_meta(get_the_ID(), "_price", true); ?> تومان</p>
                    <p><strong>Brand:</strong> <?php echo get_post_meta(get_the_ID(), "_brand", true); ?></p>
                    <p><strong>Stock:</strong> <?php echo get_post_meta(get_the_ID(), "_stock", true); ?> عدد</p>
                </div>

            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_footer(); ?>