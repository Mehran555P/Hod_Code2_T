<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>قالب فروشگاهی</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans text-gray-800">

    <!-- Header -->
    <header class="flex justify-between items-center px-6 py-4 bg-white shadow-sm">
        <nav class="flex items-center gap-8 text-sm">
            <a href="#" class="hover:text-blue-600">خانه</a>
            <a href="#" class="hover:text-blue-600">محصولات</a>
        </nav>
        <div class="flex items-center gap-2">
            <img src="<?php echo get_template_directory_uri(); ?>/images/HodeCode-2-logo.png" alt="لوگو" class="h-8 w-auto" />
        </div>
        <div class="flex items-center gap-4 text-sm">
            <a href="#" class="flex items-center gap-1 hover:text-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hover:cursor-pointer" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M3 3h2l.4 2M7 13h10l4-8H5.4" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span>ارتباط با ما</span>
            </a>
            <div class="relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700 hover:cursor-pointer" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M3 3h18l-1.68 9.39a2 2 0 01-2 1.61H9a2 2 0 01-2-1.61L3 3z" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="absolute -top-1 -right-2 bg-red-600 text-white rounded-full text-xs px-1">1</span>
            </div>
        </div>
    </header>

    <!-- دسته‌بندی -->
    <section class="container mx-auto px-6 py-6 flex gap-3 justify-center flex-wrap">
        <button class="bg-blue-600 text-white px-4 py-1 rounded-full text-sm">همه محصولات</button>
        <button class="border border-gray-300 text-gray-700 px-4 py-1 rounded-full text-sm hover:bg-gray-200">دوربین</button>
        <button class="border border-gray-300 text-gray-700 px-4 py-1 rounded-full text-sm hover:bg-gray-200">کنسول بازی</button>
        <button class="border border-gray-300 text-gray-700 px-4 py-1 rounded-full text-sm hover:bg-gray-200">هدفون</button>
        <button class="border border-gray-300 text-gray-700 px-4 py-1 rounded-full text-sm hover:bg-gray-200">وسایل گیمینگ</button>
        <button class="border border-gray-300 text-gray-700 px-4 py-1 rounded-full text-sm hover:bg-gray-200">هدست</button>
        <button class="border border-gray-300 text-gray-700 px-4 py-1 rounded-full text-sm hover:bg-gray-200">اسباب بازی</button>
    </section>

    <!-- Grid -->
    <main class="container mx-auto px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 pb-10">

        <!-- کارت محصول اول -->
        <article class="bg-white rounded-lg shadow-md p-4 flex flex-col">
            <div class="bg-gray-200 rounded-md p-6 flex justify-center items-center h-48 mb-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/WIN_20250807_15_37_42_Pro.png" alt="عکس محصول" class="max-h-full max-w-full object-contain" />
            </div>
            <h2 class="font-semibold text-base mb-1">عروسک هد کد</h2>
            <p class="text-xs text-gray-500 mb-3">اسباب بازی</p>
            <div class="flex items-center gap-2 mb-3 text-sm text-gray-600">
                <span class="line-through text-gray-400">200000</span>
                <span class="font-bold text-gray-900">192000 تومان</span>
                <span class="bg-red-600 text-white px-2 rounded text-xs">۴٪</span>
            </div>
            <div class="flex gap-2">
                <button class="flex-1 bg-gray-200 text-gray-700 py-1 rounded text-sm hover:bg-gray-300">مشاهده جزئیات</button>
                <button class="flex-1 bg-blue-600 text-white py-1 rounded text-sm hover:bg-blue-700">افزودن به سبد</button>
            </div>
        </article>

        <!-- کارت محصول دوم -->
        <article class="bg-white rounded-lg shadow-md p-4 flex flex-col">
            <div class="bg-gray-200 rounded-md p-6 flex justify-center items-center h-48 mb-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/WIN_20250807_15_37_42_Pro.png" alt="عکس محصول" class="max-h-full max-w-full object-contain" />
            </div>
            <h2 class="font-semibold text-base mb-1">عروسک هد کد</h2>
            <p class="text-xs text-gray-500 mb-3">اسباب بازی</p>
            <div class="flex items-center gap-2 mb-3 text-sm text-gray-600">
                <span class="line-through text-gray-400">200000</span>
                <span class="font-bold text-gray-900">192000 تومان</span>
                <span class="bg-red-600 text-white px-2 rounded text-xs">۴٪</span>
            </div>
            <div class="flex gap-2">
                <button class="flex-1 bg-gray-200 text-gray-700 py-1 rounded text-sm hover:bg-gray-300">مشاهده جزئیات</button>
                <button class="flex-1 bg-blue-600 text-white py-1 rounded text-sm hover:bg-blue-700">افزودن به سبد</button>
            </div>
        </article>

        <!-- کارت محصول سوم -->
        <article class="bg-white rounded-lg shadow-md p-4 flex flex-col">
            <div class="bg-gray-200 rounded-md p-6 flex justify-center items-center h-48 mb-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/WIN_20250807_15_37_42_Pro.png" alt="عکس محصول" class="max-h-full max-w-full object-contain" />
            </div>
            <h2 class="font-semibold text-base mb-1">عروسک هد کد</h2>
            <p class="text-xs text-gray-500 mb-3">اسباب بازی</p>
            <div class="flex items-center gap-2 mb-3 text-sm text-gray-600">
                <span class="line-through text-gray-400">200000</span>
                <span class="font-bold text-gray-900">192000 تومان</span>
                <span class="bg-red-600 text-white px-2 rounded text-xs">۴٪</span>
            </div>
            <div class="flex gap-2">
                <button class="flex-1 bg-gray-200 text-gray-700 py-1 rounded text-sm hover:bg-gray-300">مشاهده جزئیات</button>
                <button class="flex-1 bg-blue-600 text-white py-1 rounded text-sm hover:bg-blue-700">افزودن به سبد</button>
            </div>
        </article>

        <!-- کارت محصول چهارم -->
        <article class="bg-white rounded-lg shadow-md p-4 flex flex-col">
            <div class="bg-gray-200 rounded-md p-6 flex justify-center items-center h-48 mb-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/WIN_20250807_15_37_42_Pro.png" alt="عکس محصول" class="max-h-full max-w-full object-contain" />
            </div>
            <h2 class="font-semibold text-base mb-1">عروسک هد کد</h2>
            <p class="text-xs text-gray-500 mb-3">اسباب بازی</p>
            <div class="flex items-center gap-2 mb-3 text-sm text-gray-600">
                <span class="line-through text-gray-400">200000</span>
                <span class="font-bold text-gray-900">192000 تومان</span>
                <span class="bg-red-600 text-white px-2 rounded text-xs">۴٪</span>
            </div>
            <div class="flex gap-2">
                <button class="flex-1 bg-gray-200 text-gray-700 py-1 rounded text-sm hover:bg-gray-300">مشاهده جزئیات</button>
                <button class="flex-1 bg-blue-600 text-white py-1 rounded text-sm hover:bg-blue-700">افزودن به سبد</button>
            </div>
        </article>

        <!-- کارت محصول پنجم -->
        <article class="bg-white rounded-lg shadow-md p-4 flex flex-col">
            <div class="bg-gray-200 rounded-md p-6 flex justify-center items-center h-48 mb-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/WIN_20250807_15_37_42_Pro.png" alt="عکس محصول" class="max-h-full max-w-full object-contain" />
            </div>
            <h2 class="font-semibold text-base mb-1">عروسک هد کد</h2>
            <p class="text-xs text-gray-500 mb-3">اسباب بازی</p>
            <div class="flex items-center gap-2 mb-3 text-sm text-gray-600">
                <span class="line-through text-gray-400">200000</span>
                <span class="font-bold text-gray-900">192000 تومان</span>
                <span class="bg-red-600 text-white px-2 rounded text-xs">۴٪</span>
            </div>
            <div class="flex gap-2">
                <button class="flex-1 bg-gray-200 text-gray-700 py-1 rounded text-sm hover:bg-gray-300">مشاهده جزئیات</button>
                <button class="flex-1 bg-blue-600 text-white py-1 rounded text-sm hover:bg-blue-700">افزودن به سبد</button>
            </div>
        </article>

        <!-- کارت محصول ششم -->
        <article class="bg-white rounded-lg shadow-md p-4 flex flex-col">
            <div class="bg-gray-200 rounded-md p-6 flex justify-center items-center h-48 mb-4">
                <img src="<?php echo get_template_directory_uri(); ?>/images/WIN_20250807_15_37_42_Pro.png" alt="عکس محصول" class="max-h-full max-w-full object-contain" />
            </div>
            <h2 class="font-semibold text-base mb-1">عروسک هد کد</h2>
            <p class="text-xs text-gray-500 mb-3">اسباب بازی</p>
            <div class="flex items-center gap-2 mb-3 text-sm text-gray-600">
                <span class="line-through text-gray-400">200000</span>
                <span class="font-bold text-gray-900">192000 تومان</span>
                <span class="bg-red-600 text-white px-2 rounded text-xs">۴٪</span>
            </div>
            <div class="flex gap-2">
                <button class="flex-1 bg-gray-200 text-gray-700 py-1 rounded text-sm hover:bg-gray-300">مشاهده جزئیات</button>
                <button class="flex-1 bg-blue-600 text-white py-1 rounded text-sm hover:bg-blue-700">افزودن به سبد</button>
            </div>
        </article>

    </main>

    <!-- صفحه‌بندی -->
    <nav class="container mx-auto px-6 flex justify-center gap-3 py-4 text-sm text-gray-600">
        <button class="border border-gray-300 rounded px-3 py-1 hover:bg-gray-100 hover:cursor-pointer" disabled>قبلی</button>
        <button class="bg-blue-600 text-white rounded px-3 py-1">1</button>
        <button class="border border-gray-300 rounded px-3 py-1 hover:bg-gray-100">2</button>
        <button class="border border-gray-300 rounded px-3 py-1 hover:bg-gray-100">بعدی</button>
    </nav>

    <!-- فوتر -->
    <footer class="border-t border-gray-200 py-6 px-6 flex justify-between items-center bg-white text-sm text-gray-600">
        <div class="flex gap-4">
            <a href="#" class="hover:text-blue-600" aria-label="Facebook">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 5 3.66 9.13 8.44 9.88v-7H8.1v-3h2.34v-2.3c0-2.3 1.37-3.57 3.48-3.57 1 0 1.86.07 2.11.1v2.44h-1.25c-1 0-1.3.6-1.3 1.2v1.83h2.52l-.4 3H13v7c4.78-.75 8.44-4.88 8.44-9.88z" />
                </svg>
            </a>
            <a href="#" class="hover:text-blue-600" aria-label="LinkedIn">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <rect width="24" height="24" rx="4" ry="4" fill="#0A66C2" />
                    <path fill="#fff" d="M6.94 19H3.56V9.5h3.38V19zM5.25 8.15a1.97 1.97 0 110-3.94 1.97 1.97 0 010 3.94zM20.44 19h-3.38v-4c0-1.04-.37-1.75-1.29-1.75-.7 0-1.12.47-1.31.92-.07.17-.09.42-.09.67V19h-3.38s.04-10 0-11h3.38v1.56c.45-.7 1.25-1.7 3.04-1.7 2.22 0 3.89 1.45 3.89 4.56V19z" />
                </svg>
            </a>
            <a href="#" class="hover:text-blue-600" aria-label="Twitter">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14.86 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5.5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z" />
                </svg>
            </a>
        </div>
        <div>
            © کلیه حقوق این سایت برای مهرانیان محفوظ می‌باشد.
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/HodeCode-2-logo.png" alt=" لوگو" class="h-10" />
        </div>
    </footer>

</body>

</html>