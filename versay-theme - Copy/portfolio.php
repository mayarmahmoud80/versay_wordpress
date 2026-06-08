<?php
/**
 * Template Name: Portfolio Projects Page
 *
 * This is the template that displays the portfolio / projects page.
 *
 * @package Versaisa
 */

get_header(); ?>

<style>.btn-1{color: var(--bg-1);}
    .page-title-area{
  background-image: url('<?php echo get_template_directory_uri(); ?>/assets/imgs/banners/projects_banner_1_web.webp'); 
  background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;   }
  .versay_projects::after{
      content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,0.4);
  }
  .versay_projects .container{ z-index: 111;}

    @media only screen and (max-width: 767px) {
      .page-title-area{
          background-image: url('<?php echo get_template_directory_uri(); ?>/assets/imgs/banners/projects_banner_1_mobile.webp'); 
      }
    }
.project_section{  border: 1px solid #00000014;}
.projects #projectSearch{
  font-family: auto;
  min-width:250px;
  border:1px solid #ccc;
  border-radius:30px;}
  </style>
<div id="has_smooth"></div>
<div id="smooth-wrapper">
  <div id="smooth-content">    
    <main>
     
      <section class="page-title-area text-center versay_projects position-relative d-flex align-items-center">
        <div class="container large">
          <div class="row justify-content-center ">
            <div class="col-lg-8">
              <div class="page-title-heading" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <h1 class="title text-white">مشاريعنا</h1>
              </div>
            </div>

            <div class="col-lg-8">
              <div class="page-title-paragraph mt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <p class="text text-white" style="font-weight: 100;">اكتشف مجموعة مشاريعنا المميزة التي تعكس التزامنا بالجودة والابتكار في كل جانب من جوانب التطوير العقاري.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="projects mt-10 mb-5">
        <div class="container-fluid ">

          <div class="d-flex flex-column h-100 mb-4 text-center"
               data-aos="fade-up"
               data-aos-duration="2000"
               data-aos-delay="200"
               data-aos-once="true">
            <h2 class="mb-3 h2_style"> مشاريع فرساي</h2>
            <p class="font-16">نقدم لك افضل وارقى المشاريع العقارية المميزة في المملكة العربية السعودية</p>
          </div>
          
          <div class="filter-parent mb-5 d-flex flex-wrap justify-content-between gap-2">
            <div class="filter-parent mb-5 d-flex flex-wrap justify-content-center gap-2"
                 data-aos="fade-left"
                 data-aos-duration="2000"
                 data-aos-delay="200"
                 data-aos-once="true">
              <button class="filter-btn active" data-type="الكل">الكل</button>
              <button class="filter-btn" data-type="تاون هاوس">تاون هاوس</button>
              <button class="filter-btn" data-type="أدوار">أدوار</button>
              <button class="filter-btn" data-type="شقق">شقق</button>
              <button class="filter-btn" data-type="فلل">فلل</button>
              <button class="filter-btn" data-type="بنتهاوس">بنتهاوس</button>
            </div>

            <div class="mx-3"
                 data-aos="fade-right"
                 data-aos-duration="2000"
                 data-aos-delay="200"
                 data-aos-once="true">
              <input type="search" id="projectSearch" placeholder="البحث عن مشروع..." class="ms-3 p-2" >
            </div>
          </div>

          <div class="position-relative ">
            <div class="projects-scroll">
              <div class="row d-flex justify-content-around g-5 mx-0" id="portfolio-projects">
                  </div>
            </div>
          </div>

        </div>
      </section>

    </main>
  </div>
</div>

<?php get_footer(); ?>