<?php
/**
 * Versaisa Theme Functions and Definitions
 *
 * @package Versaisa
 */

/* =========================================================================
   1. تحميل كافة ملفات الـ CSS والـ JavaScript (Assets)
   ========================================================================= */
function versay_assets() {

    /* --- أ) ملفات الـ CSS (التنسيقات) --- */

    wp_enqueue_style(
        'bootstrap',
        get_template_directory_uri() . '/assets/vendor/bootstrap.min.css',
        array(),
        null
    );

    wp_enqueue_style(
        'swiper',
        get_template_directory_uri() . '/assets/vendor/swiper-bundle.min.css',
        array(),
        null
    );

    wp_enqueue_style(
        'meanmenu',
        get_template_directory_uri() . '/assets/vendor/meanmenu.min.css',
        array(),
        null
    );

    wp_enqueue_style(
        'magnific-popup',
        get_template_directory_uri() . '/assets/vendor/magnific-popup.css',
        array(),
        null
    );

    wp_enqueue_style(
        'animate',
        get_template_directory_uri() . '/assets/vendor/animate.min.css',
        array(),
        null
    );

    // مكتبة AOS (التأثيرات الحركية عند التمرير)
    wp_enqueue_style(
        'aos-css',
        'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css',
        array(),
        '2.3.4'
    );

    // ملف التنسيق الرئيسي للقالب
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/style.css')
    );


    /* --- ب) ملفات الـ JavaScript (المكتبات والسكريبتات) --- */

    // تفعيل مكتبة الـ jQuery الافتراضية المرفقة مع الووردبريس
    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'bootstrap-js',
        get_template_directory_uri() . '/assets/vendor/bootstrap.bundle.min.js',
        array('jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'magnific-js',
        get_template_directory_uri() . '/assets/vendor/jquery.magnific-popup.min.js',
        array('jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'swiper-js',
        get_template_directory_uri() . '/assets/vendor/swiper-bundle.min.js',
        array('jquery'),
        null,
        true
    );

    // مكتبة الـ GSAP الأساسية
    wp_enqueue_script(
        'gsap-js',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
        array(),
        null,
        true
    );

    // ملحقات مكتبة GSAP
    wp_enqueue_script(
        'gsap-scroll-trigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
        array('gsap-js'),
        null,
        true
    );

    wp_enqueue_script(
        'gsap-custom-ease',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/CustomEase.min.js',
        array('gsap-js'),
        null,
        true
    );

    wp_enqueue_script(
        'gsap-scroll-to',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js',
        array('gsap-js'),
        null,
        true
    );

    wp_enqueue_script(
        'meanmenu-js',
        get_template_directory_uri() . '/assets/vendor/jquery.meanmenu.min.js',
        array('jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'back-to-top',
        get_template_directory_uri() . '/assets/vendor/backToTop.js',
        array('jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'magic-cursor',
        get_template_directory_uri() . '/assets/js/magiccursor.js',
        array('jquery', 'gsap-js'),
        null,
        true
    );

    // سكريبت مكتبة AOS
    wp_enqueue_script(
        'aos-js',
        'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js',
        array(),
        '2.3.4',
        true
    );

    // ملف script.js الأساسي للموقع
    wp_enqueue_script(
        'theme-script',
        get_template_directory_uri() . '/assets/js/script.js',
        array('jquery'),
        null,
        true
    );

    wp_enqueue_script(
        'theme-script_section',
        get_template_directory_uri() . '/assets/js/script_section.js',
        array('jquery'),
        null,
        true
    );

    // ملف main.js
    wp_enqueue_script(
        'theme-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery', 'gsap-js', 'gsap-scroll-trigger'),
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );

    // ملف لودر الخرائط (Leaflet Loader) المذكور في ملفاتك
    if ( file_exists( get_template_directory() . '/assets/js/leaflet-loader.js' ) ) {
        wp_enqueue_script(
            'leaflet-loader',
            get_template_directory_uri() . '/assets/js/leaflet-loader.js',
            array('jquery'),
            null,
            true
        );
    }

    // ملف المكونات والـ Components الديناميكية
    wp_enqueue_script(
        'theme-components',
        get_template_directory_uri() . '/assets/js/components.js',
        array('jquery'),
        null,
        true
    );

    /* --- ج) تمرير بيانات الووردبريس (Localize) إلى الجافا سكريبت --- */
    wp_localize_script('theme-script', 'themeData', array(
        'templateUrl' => get_template_directory_uri(),
        'homeUrl'     => home_url('/')
    ));
}
add_action('wp_enqueue_scripts', 'versay_assets');


/* =========================================================================
   2. إعدادات دعم ميزات القالب الأساسية (Theme Supports)
   ========================================================================= */
function versay_theme_setup() {
    // دعم إضافة شعار مخصص من لوحة التحكم
    add_theme_support('custom-logo');
    // جلب عنوان الصفحة تلقائياً في الـ <head>
    add_theme_support('title-tag');
    // تفعيل الصور البارزة للمقالات والصفحات
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'versay_theme_setup');


/* =========================================================================
   3. حل أمان وحماية لمنع انهيار أدوات الأنميشن المدفوعة المفقودة
   ========================================================================= */
function fix_missing_premium_gsap_plugins() {
    ?>
    <script>
    // حماية وهمية لـ ScrollSmoother لمنع توقف الأكواد في حال عدم استدعاء الملف
    window.ScrollSmoother = {
        create: function() { return { kill: function() {} }; }
    };
    
    // حماية وهمية لـ SplitText لمنع الأخطاء البرمجية في كونسول المتصفح
    window.SplitText = function(element, vars) {
        this.elements = element;
        this.chars = [];
        this.words = [];
        this.lines = [];
        this.revert = function() {};
    };
    </script>
    <?php
}
add_action('wp_head', 'fix_missing_premium_gsap_plugins', 1);


















function roya_register_projects_cpt() {
    $labels = array(
        'name'               => 'المشاريع',
        'singular_name'      => 'مشروع',
        'menu_name'          => 'مشاريع فرساي',
        'add_new'            => 'إضافة مشروع جديد',
        'add_new_item'       => 'إضافة مشروع جديد',
        'edit_item'          => 'تعديل المشروع',
        'new_item'           => 'مشروع جديد',
        'view_item'          => 'عرض المشروع',
        'search_items'       => 'بحث عن مشاريع',
        'not_found'          => 'لم يتم العثور على مشاريع',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons' . '-admin-multisite', // أيقونة المشاريع
        'supports'           => array( 'title', 'thumbnail' ), // العنوان والصورة البارزة للمشروع
        'rewrite'            => array( 'slug' => 'projects' ),
        'show_in_rest'       => true,
    );
    register_post_type( 'projects', $args );
}
add_action( 'init', 'roya_register_projects_cpt' );

// 2. إضافة لوحة الحقول المخصصة للمشاريع في لوحة التحكم
function roya_add_project_meta_boxes() {
    add_meta_box( 'project_details', 'تفاصيل المشروع العقاري', 'roya_render_project_meta_box', 'projects', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'roya_add_project_meta_boxes' );

function roya_render_project_meta_box( $post ) {
    // جلب القيم الحالية للحقول إذا كانت موجودة
    $city         = get_post_meta( $post->ID, '_project_city', true );
    $city2        = get_post_meta( $post->ID, '_project_city2', true );
    $text         = get_post_meta( $post->ID, '_project_text', true );
    $status       = get_post_meta( $post->ID, '_project_status', true );
    $price        = get_post_meta( $post->ID, '_project_price', true );
    $space        = get_post_meta( $post->ID, '_project_space', true );
    $units        = get_post_meta( $post->ID, '_project_units', true );
    $percent      = get_post_meta( $post->ID, '_project_percent', true );
    $lat          = get_post_meta( $post->ID, '_project_lat', true );
    $lng          = get_post_meta( $post->ID, '_project_lng', true );
    $desc1        = get_post_meta( $post->ID, '_project_desc1', true );
    $desc2        = get_post_meta( $post->ID, '_project_desc2', true );
    $detailed_units = get_post_meta( $post->ID, '_project_detailed_units', true );

    wp_nonce_field( 'save_project_meta', 'project_meta_nonce' );
    ?>
    <style>
        .roya-meta-row { margin-bottom: 15px; display: flex; }
        .roya-meta-row label { width: 150px; font-weight: bold; }
        .roya-meta-row input, .roya-meta-row select, .roya-meta-row textarea { flex: 1; }
    </style>

    <div class="roya-meta-row">
        <label>المدينة:</label>
        <input type="text" name="project_city" value="<?php echo esc_attr($city); ?>" placeholder="مثال: الرياض" />
    </div>
    <div class="roya-meta-row">
        <label>العنوان بالتفصيل:</label>
        <input type="text" name="project_city2" value="<?php echo esc_attr($city2); ?>" placeholder="مثال: الرياض - حي الياسمين" />
    </div>
    <div class="roya-meta-row">
        <label>نوع العقار النصي:</label>
        <input type="text" name="project_text" value="<?php echo esc_attr($text); ?>" placeholder="مثال: أدوار - تاون هاوس" />
    </div>
    <div class="roya-meta-row">
        <label>حالة المشروع:</label>
        <select name="project_status">
            <option value="متاح" <?php selected($status, 'متاح'); ?>>متاح</option>
            <option value="مباع" <?php selected($status, 'مباع'); ?>>مباع</option>
            <option value="تحت الإنشاء" <?php selected($status, 'تحت الإنشاء'); ?>>تحت الإنشاء</option>
        </select>
    </div>
    <div class="roya-meta-row">
        <label>السعر يبدأ من:</label>
        <input type="text" name="project_price" value="<?php echo esc_attr($price); ?>" placeholder="مثال: 1,349,000 ر.س" />
    </div>
    <div class="roya-meta-row">
        <label>المساحات:</label>
        <input type="text" name="project_space" value="<?php echo esc_attr($space); ?>" placeholder="مثال: 148 - 315.42 م²" />
    </div>
    <div class="roya-meta-row">
        <label>عدد الوحدات المتاحة:</label>
        <input type="number" name="project_units" value="<?php echo esc_attr($units); ?>" />
    </div>
    <div class="roya-meta-row">
        <label>نسبة الحجز (%):</label>
        <input type="number" name="project_percent" value="<?php echo esc_attr($percent); ?>" />
    </div>
    <div class="roya-meta-row">
        <label>إحداثيات الخريطة Lat/Lng:</label>
        <input type="text" name="project_lat" value="<?php echo esc_attr($lat); ?>" placeholder="Lat" style="margin-left:10px;"/>
        <input type="text" name="project_lng" value="<?php echo esc_attr($lng); ?>" placeholder="Lng"/>
    </div>
    <div class="roya-meta-row">
        <label>الوصف الأول:</label>
        <textarea name="project_desc1" rows="2"><?php echo esc_textarea($desc1); ?></textarea>
    </div>
    <div class="roya-meta-row">
        <label>الوصف الثاني:</label>
        <textarea name="project_desc2" rows="2"><?php echo esc_textarea($desc2); ?></textarea>
    </div>
    <div class="roya-meta-row" style="flex-direction: column;">
        <label style="margin-bottom: 10px;">جدول الوحدات بالتفصيل (صيغة JSON):</label>
        <textarea name="project_detailed_units" rows="6" placeholder='[{"number": "A1", "floor": "ارضي", "type":"دورين", "area": "168.66 م²", "price": "1,699,000", "reserved": false}]'><?php echo esc_textarea($detailed_units); ?></textarea>
        <p class="description">انسخ بنية الـ JSON من ملف الـ script الخاص بالوحدات التفصيلية للسهولة.</p>
    </div>
    <?php
}

// 3. حفظ البيانات المدخلة من لوحة التحكم في قاعدة البيانات
function roya_save_project_meta( $post_id ) {
    if ( ! isset( $_POST['project_meta_nonce'] ) || ! wp_verify_nonce( $_POST['project_meta_nonce'], 'save_project_meta' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    $fields = array(
        'project_city', 'project_city2', 'project_text', 'project_status',
        'project_price', 'project_space', 'project_units', 'project_percent',
        'project_lat', 'project_lng', 'project_desc1', 'project_desc2', 'project_detailed_units'
    );

    foreach ( $fields as $field ) {
        if ( isset( $_POST[$field] ) ) {
            update_post_meta( $post_id, '_' . $field, $_POST[$field] );
        }
    }
}
add_action( 'save_post', 'roya_save_project_meta' );