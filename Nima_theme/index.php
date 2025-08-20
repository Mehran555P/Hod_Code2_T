<?php get_header(); ?>

<main class="container mx-auto px-4 py-8">
    <!-- Category Buttons -->
    <div class="flex flex-wrap gap-2 justify-center mb-8">
        <button class="bg-blue-500 text-white px-4 py-2 rounded-full">همه محصولات</button>
        <button class="border border-gray-300 px-4 py-2 rounded-full">دوربین</button>
        <button class="border border-gray-300 px-4 py-2 rounded-full">کنسول بازی</button>
        <button class="border border-gray-300 px-4 py-2 rounded-full">هدفون</button>
        <button class="border border-gray-300 px-4 py-2 rounded-full">وسایل گیمینگ</button>
        <button class="border border-gray-300 px-4 py-2 rounded-full">هدست</button>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php for ($i = 0; $i < 9; $i++): ?>
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <img src="<?php echo get_template_directory_uri(); ?>/product.png" class="w-full h-48 object-cover" alt="Product">
                <div class="p-4 space-y-2">
                    <h3 class="font-bold text-lg">نام محصول</h3>
                    <p class="text-sm text-gray-500">دسته‌بندی</p>
                    <p class="text-red-500 font-bold">۲۷,۳۹۹,۰۰۰ تومان <span class="text-gray-400 line-through">۳۴,۴۴۴,۰۰۰</span></p>
                    <div class="flex justify-between items-center">
                        <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg">افزودن به سبد</a>
                        <a href="#" class="border border-gray-300 px-4 py-2 rounded-lg">مشاهده جزئیات</a>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center items-center space-x-2 space-x-reverse mt-8">
        <button class="border px-3 py-1 rounded">قبلی</button>
        <button class="bg-blue-500 text-white px-3 py-1 rounded">1</button>
        <button class="border px-3 py-1 rounded">2</button>
        <button class="border px-3 py-1 rounded">بعدی</button>
    </div>
</main>

<?php get_footer(); ?>