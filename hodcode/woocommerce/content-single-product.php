<?php

/**
 * Single Product content
 * Pixel-perfect view override
 */
defined('ABSPATH') || exit;

global $product;

if (post_password_required()) {
	echo get_the_password_form();
	return;
}
?>

<main class="container mx-auto px-4 py-10" dir="rtl">

	<div class="grid grid-cols-12 gap-8">

		<!-- محتوای اصلی -->
		<div class="col-span-12 lg:col-span-9 space-y-8">

			<!-- تصویر محصول -->
			<div class="w-full flex justify-center">
				<?php
				/**
				 * تصویر اصلی + گالری
				 */
				do_action('woocommerce_before_single_product_summary');
				?>
			</div>

			<!-- اطلاعات محصول -->
			<div class="space-y-6">
				<!-- عنوان -->
				<h1 class="text-2xl md:text-3xl font-bold text-gray-800">
					<?php the_title(); ?>
				</h1>

				<!-- قیمت و وضعیت -->
				<div class="flex items-center gap-4">
					<div class="text-2xl font-bold text-gray-800">
						<?php woocommerce_template_single_price(); ?>
					</div>
					<?php if ($product->is_on_sale()) : ?>
						<span class="px-2 py-1 rounded-full bg-red-600 text-white text-sm">حراج</span>
					<?php endif; ?>
					<?php if ($product->is_in_stock()) : ?>
						<span class="px-2 py-1 rounded-full bg-emerald-100 text-emerald-700 text-sm">موجود</span>
					<?php else : ?>
						<span class="px-2 py-1 rounded-full bg-gray-200 text-gray-600 text-sm">ناموجود</span>
					<?php endif; ?>
				</div>

				<!-- توضیحات -->
				<div class="text-base leading-8 text-gray-700">
					<?php woocommerce_template_single_excerpt(); ?>
				</div>

				<!-- دکمه خرید -->
				<div>
					<div class="[&_button],[&_input],[&_a]:!w-full [&_*]:!rounded-xl [&_*]:!py-3">
						<?php woocommerce_template_single_add_to_cart(); ?>
					</div>
				</div>
			</div>

			<!-- ویژگی‌ها -->
			<div class="border rounded-2xl p-6 space-y-4">
				<h2 class="text-lg font-bold text-gray-800">ویژگی‌ها</h2>
				<ul class="space-y-2 text-gray-700 text-sm">
					<?php
					$attributes = $product->get_attributes();
					if (! empty($attributes)) :
						foreach ($attributes as $attribute) {
							if ($attribute->is_taxonomy()) {
								$terms = wc_get_product_terms($product->get_id(), $attribute->get_name(), array('fields' => 'names'));
								$label = wc_attribute_label($attribute->get_name());
								$value = $terms ? implode('، ', $terms) : '';
							} else {
								$label = wc_attribute_label($attribute->get_name());
								$value = implode('، ', $attribute->get_options());
							}
							if ($value) {
								echo '<li class="flex items-center gap-2"><span>' . esc_html($label) . ':</span><span class="font-semibold">' . esc_html($value) . '</span></li>';
							}
						}
					else :
						echo '<li class="text-gray-500">هیچ ویژگی ثبت نشده است.</li>';
					endif;
					?>
				</ul>
			</div>
		</div>

		<!-- سایدبار محصولات مشابه -->
		<aside class="col-span-12 lg:col-span-3 space-y-4">
			<h3 class="text-sm font-bold text-gray-700 mb-2">محصولات مشابه</h3>

			<?php
			$related_ids = wc_get_related_products($product->get_id(), 3);
			if (! empty($related_ids)) :
				$args = array(
					'post_type'      => 'product',
					'post__in'       => $related_ids,
					'posts_per_page' => 3,
					'orderby'        => 'post__in',
				);
				$q = new WP_Query($args);
				if ($q->have_posts()) :
					while ($q->have_posts()) : $q->the_post();
						$rel = wc_get_product(get_the_ID());
			?>
						<a href="<?php the_permalink(); ?>"
							class="flex items-center gap-3 p-3 rounded-2xl border border-gray-200 hover:border-gray-300 transition">
							<div class="w-16 h-16 bg-gray-50 rounded-lg flex items-center justify-center overflow-hidden">
								<?php echo get_the_post_thumbnail(get_the_ID(), 'woocommerce_gallery_thumbnail', ['class' => 'object-contain w-full h-full']); ?>
							</div>
							<span class="text-sm text-gray-700 line-clamp-2"><?php the_title(); ?></span>
						</a>
			<?php
					endwhile;
					wp_reset_postdata();
				endif;
			endif;
			?>
		</aside>
	</div>

</main>