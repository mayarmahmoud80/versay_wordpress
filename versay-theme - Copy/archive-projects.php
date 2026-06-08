<div class="row d-flex justify-content-start w-100 g-5 mx-0" id="portfolio-projects">
    <?php
    $args = array(
        'post_type'      => 'projects',
        'posts_per_page' => -1, // جلب كل المشاريع
    );
    $projects_query = new WP_Query( $args );

    if ( $projects_query->have_posts() ) :
        while ( $projects_query->have_posts() ) : $projects_query->the_post();
            // استخراج الحقول الديناميكية للعقار الحالي
            $status   = get_post_meta( get_the_ID(), '_project_status', true );
            $text     = get_post_meta( get_the_ID(), '_project_text', true );
            $city     = get_post_meta( get_the_ID(), '_project_city', true );
            $units    = get_post_meta( get_the_ID(), '_project_units', true );
            $percent  = get_post_meta( get_the_ID(), '_project_percent', true );
            $price    = get_post_meta( get_the_ID(), '_project_price', true );
            $space    = get_post_meta( get_the_ID(), '_project_space', true );
            $img_url  = get_the_post_thumbnail_url( get_the_ID(), 'full' ) ? get_the_post_thumbnail_url( get_the_ID(), 'full' ) : get_template_directory_uri() . '/assets/imgs/banners/project_banner_1_web.webp';
            ?>
            
            <div class="col-12 col-md-4 project_section border-card-project p-3" data-aos="flip-right" data-aos-duration="2000" data-aos-once="true">
                <a href="<?php the_permalink(); ?>">
                    <div class="card">
                        <div class="card_img">
                            <?php if ( $status === "مباع" ) : ?>
                                <div class="overlay" style="background:transparent; position: absolute; width: 46%; top: 10px; right: 10px; left: 10px; height: auto; margin:auto;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/img_log.png" class="card-img">
                                </div>
                            <?php elseif ( $status === "تحت الإنشاء" ) : ?>
                                <div class="overlay" style="background:transparent; position: absolute; width: 46%; top: 10px; right: 10px; left: 10px; height: auto; margin:auto;">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/not_finished.png" class="card-img">
                                </div>
                            <?php endif; ?>
                            <img src="<?php echo esc_url($img_url); ?>" class="card-img h-100">
                        </div>

                        <div class="card_img_text"><div class="card_img_text1"><?php echo esc_html($text); ?></div></div>
                        <div class="card_img_text_2"><div class="card_img_text1"><?php the_title(); ?> - <?php echo esc_html($city); ?></div></div>

                        <div id="units-box" style="<?php echo ($status === 'تحت الإنشاء') ? 'display:none;' : ''; ?>">
                            <div class="d-flex justify-content-between">
                                <p class="text-sm m-0">الوحدات المتاحة</p>
                                <p class="m-0"><?php echo esc_html($units); ?></p>
                            </div>
                            <div class="d-flex justify-content-between mt-1">
                                <p class="text-sm text-muted m-0">نسبة الحجز</p>
                                <p class="m-0"><?php echo esc_html($percent); ?>%</p>
                            </div>
                            <div class="progress mt-2">
                                <div class="progress-bar" style="width: <?php echo esc_attr($percent); ?>%;"></div>
                            </div>
                        </div>

                        <div class="p-3" style="margin:auto 0!important;">
                            <hr class="mt-3 text-muted">
                            <div class="project_price d-flex justify-content-center text-center">
                                <?php if ( $status === "مباع" ) : ?>
                                    <p class="bold text-danger w-100">تم البيع</p>
                                <?php elseif ( $status === "تحت الإنشاء" ) : ?>
                                    <p class="bold w-100" style="color: var(--bg-1)!important;">تحت الإنشاء</p>
                                <?php else : ?>
                                    <div class="d-flex justify-content-between w-100">
                                        <div>
                                            <div class="d-flex justify-content-between">
                                                <span class="d-flex flex-column justify-content-center text-center"><i class="text-muted fa-solid fa-money-bill-1"></i></span>
                                                <p>أسعار تبدأ من</p>
                                            </div>
                                            <p class="bold text-black"><?php echo esc_html($price); ?></p>
                                        </div>
                                        <div>
                                            <div class="d-flex justify-content-center">
                                                <span class="d-flex flex-column justify-content-center text-center"><i class="text-muted fa-solid fa-house"></i></span>
                                                <p>المساحات</p>
                                            </div>
                                            <p class="bold text-black"><?php echo esc_html($space); ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="card-btn d-flex justify-content-between">
                                <a href="https://wa.me/966559604044?text=<?php echo rawurlencode('مرحبا، حاب استفسر عن مشروع (' . get_the_title() . ')'); ?>" target="_blank" class="d-block btn-1 col-5 btn mt-3">تواصل معنا</a>
                                <a href="<?php the_permalink(); ?>" class="d-block btn-2 col-5 btn mt-3 font-16" style="background:rgba(245,245,245,1);">تسجيل اهتمام</a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        <?php endwhile; wp_reset_postdata(); ?>
    <?php else : ?>
        <p class='text-center'>لا يوجد مشاريع متوفرة حالياً</p>
    <?php endif; ?>
</div>