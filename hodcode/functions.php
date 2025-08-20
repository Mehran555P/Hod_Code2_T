<?php
function hodcode_enqueue_styles()
{
    wp_enqueue_style(
        'hodcode-style', // Handle name
        get_stylesheet_uri(), // This gets style.css in the root of the theme

    );
    wp_enqueue_script(
        'tailwind', // Handle name
        "https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4", // This gets style.css in the root of the theme

    );
}
add_action('wp_enqueue_scripts', 'hodcode_enqueue_styles');



function mytheme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    register_nav_menus(["header" => "Header Menu"]);
}
add_action('after_setup_theme', 'mytheme_setup');

// ثبت کاستوم پست تایپ Product
function create_product_post_type()
{
    register_post_type(
        'product',
        array(
            'labels' => array(
                'name' => __('Products'),
                'singular_name' => __('Product')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'products'),
        )
    );
}
add_action('init', 'create_product_post_type');


// اضافه کردن متاباکس‌ها برای محصولات
function add_product_meta_boxes()
{
    add_meta_box("product_details", "Product Details", "product_meta_box_markup", "product", "normal", "high", null);
}
add_action("add_meta_boxes", "add_product_meta_boxes");


//  فیلدهای متاباکس
function product_meta_box_markup($post)
{
    $price = get_post_meta($post->ID, "_price", true);
    $brand = get_post_meta($post->ID, "_brand", true);
    $stock = get_post_meta($post->ID, "_stock", true);
?>
    <div>
        <label>Price:</label><br>
        <input type="text" name="price" value="<?php echo esc_attr($price); ?>"><br><br>

        <label>Brand:</label><br>
        <input type="text" name="brand" value="<?php echo esc_attr($brand); ?>"><br><br>

        <label>Stock:</label><br>
        <input type="number" name="stock" value="<?php echo esc_attr($stock); ?>"><br>
    </div>
<?php
}

// ذخیره‌سازی کاستوم فیلدها
function save_product_meta_box($post_id)
{
    if (array_key_exists("price", $_POST)) {
        update_post_meta($post_id, "_price", sanitize_text_field($_POST["price"]));
    }
    if (array_key_exists("brand", $_POST)) {
        update_post_meta($post_id, "_brand", sanitize_text_field($_POST["brand"]));
    }
    if (array_key_exists("stock", $_POST)) {
        update_post_meta($post_id, "_stock", intval($_POST["stock"]));
    }
}
add_action("save_post", "save_product_meta_box");




// add_action('init', function () {
//     register_post_type('product', [
//         'public' => true,
//         'label' => 'Products',




//         'supports' => [
//             'title',
//             'editor',
//             'thumbnail',
//             'excerpt',
//             'custom-fields'
//         ],

//         'show_in_rest' => true,
//         'rewrite' => ['slug' => 'product'],


//     ]);


//     register_taxonomy('product_category', ['product'], [
//         'hierarchical'      => true,
//         'labels'            => [
//             'name'          => 'Product Categories',
//             'singular_name' => 'Product Category'
//         ],
//         'rewrite'           => ['slug' => 'product-category'],

//         'show_in_rest' => true,
//     ]);
// });



// hodcode_add_custom_field("price_old", "product", "price (Before)");
// hodcode_add_custom_field("price_new", "product", "price (Final)");

// add_action('pre_get_posts', function ($query) {
//     if ($query->is_home() && $query->is_main_query() && !is_admin()) {
//         $query->set('post_type', 'product');
//     }
// });


// function hodcode_add_custom_field($fieldName, $postType, $title)
// {
//     // ایجاد متاباکس در صفحه ویرایش پست
//     add_action('add_meta_boxes', function () use ($fieldName, $postType, $title) {
//         add_meta_box(
//             $fieldName . '_box',
//             $title,
//             function ($post) use ($fieldName) {
//                 $value = get_post_meta($post->ID, $fieldName, true);
//                 wp_nonce_field($fieldName . '_nonce', $fieldName . '_nonce_field');
//                 echo '<input type="text" style="width:100%;padding:6px;border:1px solid #ccc;border-radius:6px"
//                         name="' . esc_attr($fieldName) . '" 
//                         value="' . esc_attr($value) . '">';
//             },
//             $postType,
//             'normal',
//             'default'
//         );
//     });

//     // ذخیره متای وارد شده
//     add_action('save_post', function ($post_id) use ($fieldName) {
//         if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
//         if (!isset($_POST[$fieldName . '_nonce_field'])) return;
//         if (!wp_verify_nonce($_POST[$fieldName . '_nonce_field'], $fieldName . '_nonce')) return;
//         if (!current_user_can('edit_post', $post_id)) return;

//         if (isset($_POST[$fieldName])) {
//             $san = sanitize_text_field(wp_unslash($_POST[$fieldName]));
//             update_post_meta($post_id, $fieldName, $san);
//         } else {
//             delete_post_meta($post_id, $fieldName);
//         }
//     });
// }

// function hodcode_register_product_fields()
// {
//     hodcode_add_custom_field('price', 'product', ' قیمت محصول');
//     hodcode_add_custom_field('old_price', 'product', ' قیمت قبلی');
//     hodcode_add_custom_field('discount', 'product', ' درصد تخفیف');
//     hodcode_add_custom_field('features', 'product', ' ویژگی‌ها (هر ویژگی در یک خط)');
// }
// add_action('init', 'hodcode_register_product_fields');

// // ثبت متا فیلدهای محصول
// function register_product_meta_fields()
// {
//     // قیمت
//     register_post_meta('product', 'price', [
//         'type' => 'string',
//         'single' => true,
//         'show_in_rest' => true,
//     ]);

//     // قیمت قبلی
//     register_post_meta('product', 'old_price', [
//         'type' => 'string',
//         'single' => true,
//         'show_in_rest' => true,
//     ]);

//     // درصد تخفیف
//     register_post_meta('product', 'discount', [
//         'type' => 'string',
//         'single' => true,
//         'show_in_rest' => true,
//     ]);

//     // ویژگی‌ها (به صورت متن یا JSON)
//     register_post_meta('product', 'features', [
//         'type' => 'string',
//         'single' => true,
//         'show_in_rest' => true,
//     ]);
// }
// add_action('init', 'register_product_meta_fields');
