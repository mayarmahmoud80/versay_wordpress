<?php
/**
 * Template Name: About Us Page
 *
 * This is the template that displays the About Us page.
 *
 * @package Versaisa
 */

get_header(); ?>

<style>

.success-card {
  flex: 0 0 200px;
   flex: 1 0 160px;

}
.section-versailles h1{font-size: 40px;}
.section-versailles::after{
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.4);
}
.section-versailles .versai_about_1{ z-index: 111;}
.about_banner{
  background-image: url('<?php echo get_template_directory_uri(); ?>/assets/imgs/banners/banner_about_section_web.webp');
  background-position:center;
  background-size:cover;
  background-repeat:no-repeat;
  height: 80vh;
  width: auto;
}
@media (max-width: 800px) {
  .header-area-2{  background-color: #aca087cc !important;}
  .header-area-2 .header-main{background-color: transparent!important; }
  .about_banner{
  background-image: url('<?php echo get_template_directory_uri(); ?>/assets/imgs/banners/banner_about_section_mobile.webp');
}
}

.section-versailles .page-title{
        line-height: 1.6;
    font-size: 17px;
    width: 80%;
    text-align: center;
    margin: auto;}

  
  .projects_about .projects_about_card{
  border: 1px solid transparent; 
  clip-path: polygon(40% 8%, 0% 8%, 0% 80%, 20% 100%, 100% 80%, 100% 0%, 45% 0%);
  background-color: #80808014; padding: 6% 10px;
}
.projects_about .projects_about_card i{
  font-size: 30px; 
  color: #808080f0;
}
.why_about{
  background-image: url('<?php echo get_template_directory_uri(); ?>/assets/imgs/projectBG.svg');
  background-color: #80808020;
}
    
.why_about .why_card i{
  font-size: 30px;
  color: #808080f0;
  }
</style>
<div id="has_smooth"></div>
<div id="smooth-wrapper">
  <div id="smooth-content">    
    <main>
       
      <!-- Section: Hero Banner -->
      <section class="section-versailles position-relative">
        <div class="versai_about_1"
             data-aos="fade-up"
             data-aos-duration="2000"
             data-aos-delay="200"
             data-aos-once="true">
          <h1 class="text-white">عن فرساي</h1>
          <div class="mx-auto">
            <p class="page-title paragraph text-white" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" style="line-height: 1.6;">
              انطلقت مسيرتنا في التطوير العقاري منذ عام 2006 حاملين رؤية طموحة لابتكار وجهات سكنية استثنائية ، نلتزم في فرساي بتقديم مشاريع نوعية توازن بين جودة البناء الفائقة والتصاميم المعمارية الحديثة لنصيغ لعملائنا تجربة تملك ترتكز على الثقة والابتكار
            </p>
          </div>
        </div>
      </section>

      <section class="projects mt-10">
        <div class="container-fluid px-5">
          <div class="row d-flex justify-content-between gap-20">
            <div class="col-12 col-md-6 mb-5 d-flex align-items-center">
              <p data-aos="fade-left"
                 data-aos-duration="1600"
                 data-aos-easing="ease-out-cubic"
                 data-aos-delay="300" 
                 data-aos-once="true">
                مشاريع فرساي تقع في مدينة الرياض وتجمع بين الموقع المميز والبنية التحتية والتكامل التخطيطي الذي يلبي احتياجات الأسر والمستثمرين على حدًا سواء. نحرص في فرساي على تقديم نماذج وحدات تناسب مختلف أنماط الحياة.
              </p>
            </div>

            <div class="col-12 col-md-6 position-relative overflow-hidden h-100 m-0"
                 data-aos="zoom-in"
                 data-aos-duration="1500"
                 data-aos-delay="300"
                 data-aos-once="true">
              <div class="carousel">
                <?php 
                $slides = [
                    'versay_1.jpg' => 'فرساي 1', '02.jpg' => 'فرساي 2', '03.jpg' => 'فرساي 3',
                    '04.jpg' => 'فرساي 4', '05.jpg' => 'فرساي 5', '06.jpg' => 'فرساي 6',
                    '07.jpg' => 'فرساي 7', '08.jpg' => 'فرساي 8', '09.jpg' => 'فرساي 9',
                    '10.jpg' => 'فرساي 10', '11.jpg' => 'فرساي 11', '13.jpg' => 'فرساي 13',
                    '14.jpg' => 'فرساي 14'
                ];
                $is_first = true;
                foreach ( $slides as $img => $title ) : 
                ?>
                  <div class="slide <?php echo $is_first ? 'active' : ''; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/projects_img/<?php echo $img; ?>" loading="lazy" alt="<?php echo esc_attr($title); ?>">
                    <div class="slide-text"><h2><?php echo esc_html($title); ?></h2></div>
                  </div>
                <?php 
                $is_first = false;
                endforeach; 
                ?>
                <div class="dots" style="display: none;">
                  <?php for ( $i = 0; $i < count($slides); $i++ ) : ?>
                    <div class="dot <?php echo $i === 0 ? 'active' : ''; ?>"></div>
                  <?php endfor; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Vision & Mission -->
      <section class="mt-10 projects_about">
        <div class="container">
          <div class="row d-flex justify-content-around">
            <div class="projects_about_card col-12 col-md-5 d-flex flex-column justify-content-center align-items-center mb-2"
                 data-aos="zoom-in"
                 data-aos-duration="1500"
                 data-aos-once="true"
                 data-aos-delay="300">
              <i class="fa-solid fa-eye my-3"></i>
              <h5 class="text-black bold">رؤيتنا</h5>
              <p class="font-16 text-center">
                في فرساي نرى أن جودة البناء واختيار الموقع الإستراتيجي هما جوهر وجودنا في السوق السعودي.
                <br>
                وتفيذ مشاريع تتسم بالابتكار والجودة العالية عن طريق تقنيات البناء الحديثة.
              </p>
            </div>
            
            <div class="projects_about_card col-12 col-md-5 d-flex flex-column justify-content-center align-items-center py-5 mb-2"
                 data-aos="zoom-out"
                 data-aos-duration="1500"
                 data-aos-once="true"
                 data-aos-delay="300">
              <i class="fa-solid fa-bullseye my-3"></i>
              <h5 class="text-black bold">رسالتنا</h5>
              <p class="font-16 text-center">
                تقديم تجربة شراء سلسة عن طريق المصداقية في التعامل، بالإضافة لتقديم قيمة طويلة المدى من خلال تقديم ضمانات على الهيكل الانشائي لمدة 10 سنوات وضمانات اخرى تصل الى 25 سنة .
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Why Choose Us -->
      <section class="why_about mt-10 p-5">
        <div class="container">
          <div class="row">
            <h2 class="h2_style"
                data-aos="fade-up"
                data-aos-duration="1600"
                data-aos-easing="ease-out-cubic"
                data-aos-delay="300" 
                data-aos-once="true">لماذا تختار فرساي؟</h2>
          </div>

          <div class="row d-flex justify-content-around py-5 g-2"
               data-aos="zoom-in"
               data-aos-duration="1600"
               data-aos-easing="ease-out-cubic"
               data-aos-delay="300" 
               data-aos-once="true">
            <div class="why_card col-10 col-md-3 bg-white d-flex flex-column align-items-center justify-content-center py-5"> 
              <i class="fa-solid fa-check-circle mb-3"></i>
              <p class="text-black text-center font-16 bold">تنفيذ عالي الجودة وخبرات تطوير عقاري متميزة</p>
            </div>

            <div class="why_card col-10 col-md-3 my-3 bg-white d-flex flex-column align-items-center justify-content-center py-5"
                 data-aos="zoom-out"
                 data-aos-duration="2000"
                 data-aos-easing="ease-out-cubic"
                 data-aos-delay="400" 
                 data-aos-once="true"> 
              <i class="fa-solid fa-location-dot mb-3"></i>
              <p class="text-black text-center font-16 bold">موقع استراتيجي يسهل الوصول إلى أهم الخدمات والمرافق</p>
            </div>

            <div class="why_card col-10 col-md-3 bg-white d-flex flex-column align-items-center justify-content-center py-5"
                 data-aos="zoom-in"
                 data-aos-duration="1600"
                 data-aos-easing="ease-out-cubic"
                 data-aos-delay="300" 
                 data-aos-once="true"> 
              <i class="fa-solid fa-layer-group mb-3"></i>
              <p class="text-black text-center font-16 bold">خيارات متعددة للوحدات تناسب الاحتياجات المختلفة</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: About Banner -->
      <section class="about_banner"
               data-aos="zoom-in-down"
               data-aos-duration="1600"
               data-aos-easing="ease-out-cubic"
               data-aos-delay="300" 
               data-aos-once="true">
      </section>

      <!-- Section: Counters / Success -->
      <section id="our-success" class="success-section mt-10 pt-0">
        <div class="container text-center"
             data-aos="fade-up"
             data-aos-duration="1200"
             data-aos-easing="ease-out-cubic"
             data-aos-once="true">
          <h2 class="h2_style mb-4">نجاحنا</h2>
          <p class="section-desc mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            نفخر بما حققناه من إنجازات وإننا دائماً نحرص على تقديم أفضل المشاريع لعملائنا.
          </p>
          <div class="success-cards-wrapper">
            <div class="success-card"
                 data-aos="zoom-in-up"
                 data-aos-duration="2000"
                 data-aos-easing="ease-out-cubic"
                 data-aos-delay="300" 
                 data-aos-once="true">
              <div class="icon-wrapper">
                <img src="https://img.icons8.com/ios-filled/64/ffffff/building.png" alt="مشاريع" loading="lazy">
              </div>
              <h3 class="success-number" data-target="150">0</h3>
              <p class="success-text">مشروع مكتمل</p>
            </div>
            
            <div class="success-card"
                 data-aos="zoom-in"
                 data-aos-duration="1600"
                 data-aos-easing="ease-out-cubic"
                 data-aos-delay="400" 
                 data-aos-once="true">
              <div class="icon-wrapper">
                <img src="https://img.icons8.com/ios-filled/64/ffffff/handshake.png" alt="عملاء" loading="lazy">
              </div>
              <h3 class="success-number" data-target="1200">0</h3>
              <p class="success-text">عميل سعيد</p>
            </div>
            
            <div class="success-card"
                 data-aos="zoom-in-up"
                 data-aos-duration="2000"
                 data-aos-easing="ease-out-cubic"
                 data-aos-delay="300" 
                 data-aos-once="true">
              <div class="icon-wrapper">
                <img src="https://img.icons8.com/ios-filled/64/ffffff/world-map.png" alt="مناطق المشاريع" loading="lazy">
              </div>
              <h3 class="success-number" data-target="10">0</h3>
              <p class="success-text">مناطق المشاريع</p>
            </div>
          </div>
        </div>
      </section>

      <script>
      jQuery(document).ready(function($) {
        const counters_1 = document.querySelectorAll('.success-number');
        const speed = 200; 

        const isInViewport = (elem) => {
          const bounding = elem.getBoundingClientRect();
          return bounding.top < window.innerHeight && bounding.bottom >= 0;
        };

        const runCounter = (counter) => {
          const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = Math.ceil(target / speed);
            if (count < target) {
              counter.innerText = count + increment;
              setTimeout(updateCount, 20);
            } else {
              counter.innerText = target;
            }
          };
          updateCount();
        };

        let counterRun = false;
        window.addEventListener('scroll', () => {
          if (!counterRun) {
            counters_1.forEach(counter => {
              if (isInViewport(counter)) {
                runCounter(counter);
                counterRun = true;
              }
            });
          }
        });
      });
      </script>

    </main>
  </div>
</div>

<?php get_footer(); ?>