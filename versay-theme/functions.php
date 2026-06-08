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