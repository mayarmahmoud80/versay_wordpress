<?php get_header(); 

if ( have_posts() ) : while ( have_posts() ) : the_post();
    // جلب حقول المشروع الفردي من قاعدة البيانات لقراءة المدخلات في لوحة التحكم
    $city2    = get_post_meta( get_the_ID(), '_project_city2', true );
    $status   = get_post_meta( get_the_ID(), '_project_status', true );
    $price    = get_post_meta( get_the_ID(), '_project_price', true );
    $space    = get_post_meta( get_the_ID(), '_project_space', true );
    $text     = get_post_meta( get_the_ID(), '_project_text', true );
    $lat      = get_post_meta( get_the_ID(), '_project_lat', true );
    $lng      = get_post_meta( get_the_ID(), '_project_lng', true );
    $desc1    = get_post_meta( get_the_ID(), '_project_desc1', true );
    $desc2    = get_post_meta( get_the_ID(), '_project_desc2', true );
    $raw_json = get_post_meta( get_the_ID(), '_project_detailed_units', true );
    
    // تحويل حقل الـ JSON المكتوب في لوحة التحكم لمصفوفة PHP للجدول المقسم
    $detailed_units = json_decode($raw_json, true);
    $img_url  = get_the_post_thumbnail_url( get_the_ID(), 'full' );
?>

<div id="project_page">
    <section id="project_banner" class="page-title-area text-center position-relative d-flex align-items-center" style="background-image: url('<?php echo esc_url($img_url); ?>');">
        <div class="container">
            <h1 class="text-white" id="proj-title"><?php the_title(); ?></h1>
            <p class="text-white" id="proj-location"><?php echo esc_html($city2); ?></p>
        </div>
    </section>

    <section class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <p id="project_description_1"><?php echo esc_html($desc1); ?></p>
                <p id="project_description_2"><?php echo esc_html($desc2); ?></p>
            </div>
            
            <div class="col-md-4">
                <div class="info-box-wrapper">
                    <div class="info-box"><strong>حالة المشروع:</strong> <span id="summary-status" style="color: <?php echo ($status === 'مباع') ? 'red' : 'green'; ?>;"><?php echo esc_html($status); ?></span></div>
                    <?php if($status !== 'مباع' && $status !== 'تحت الإنشاء'): ?>
                        <div class="info-box"><strong>المساحات:</strong> <span id="summary-space"><?php echo esc_html($space); ?></span></div>
                        <div class="info-box"><strong>الأسعار تبدأ من:</strong> <span id="summary-price"><?php echo esc_html($price); ?></span></div>
                    <?php endif; ?>
                    <div class="info-box"><strong>نوع الوحدات:</strong> <span id="summary-types"><?php echo esc_html($text); ?></span></div>
                </div>
                <a id="whatsapp-link" href="https://wa.me/966559604044?text=<?php echo rawurlencode('مرحبا، حاب استفسر عن مشروع (' . get_the_title() . ')'); ?>" class="btn btn-success w-100 mt-3" target="_blank">تواصل عبر الواتساب</a>
            </div>
        </div>
    </section>

    <?php if(!empty($lat) && !empty($lng)): ?>
        <section class="container my-5">
            <div id="project-map" style="height: 400px; width: 100%;"></div>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    if (typeof L !== 'undefined') {
                        var map = L.map('project-map').setView([<?php echo esc_js($lat); ?>, <?php echo esc_js($lng); ?>], 15);
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
                        L.marker([<?php echo esc_js($lat); ?>, <?php echo esc_js($lng); ?>]).addTo(map)
                            .bindPopup('<h4 style="color:#000;"><?php the_title(); ?></h4><p style="color:#000;">الأسعار تبدأ من: <?php echo esc_js($price); ?></p>')
                            .openPopup();
                    }
                });
            </script>
        </section>
    <?php endif; ?>

    <?php if(!empty($detailed_units)): ?>
        <section class="container my-5">
            <h3>الوحدات التفصيلية للمشروع</h3>
            <table class="table units-table table-striped">
                <thead>
                    <tr>
                        <th>رقم الوحدة</th>
                        <th>الدور</th>
                        <th>النوع</th>
                        <th>المساحة</th>
                        <th>السعر</th>
                        <th>الحجز</th>
                    </tr>
                </thead>
                <tbody id="units-table-body">
                    <?php foreach($detailed_units as $unit): ?>
                        <tr>
                            <td><?php echo esc_html($unit['number']); ?></td>
                            <td><?php echo esc_html($unit['floor']); ?></td>
                            <td><?php echo esc_html($unit['type']); ?></td>
                            <td><?php echo esc_html($unit['area']); ?></td>
                            <td><?php echo $unit['reserved'] ? 'مباع' : esc_html($unit['price']) . ' ر.س'; ?></td>
                            <td>
                                <?php if(!$unit['reserved']): ?>
                                    <a href="https://wa.me/966559604044?text=<?php echo rawurlencode("حجز وحدة رقم {$unit['number']} في " . get_the_title() . " بالدور {$unit['floor']} بمساحة {$unit['area']}"); ?>" target="_blank" class="btn btn-primary btn-sm">احجز الوحدة</a>
                                <?php else: ?>
                                    <span class="badge bg-danger">مباعة</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    <?php endif; ?>
</div>

<?php 
endwhile; endif;
get_footer(); ?>