<?php
/**
 * Template Name: Map Page
 *
 * This is the template that displays the real estate interactive map page.
 *
 * @package Versaisa
 */
get_header(); ?>

<style>

#map-container{
  width:100%;
  height: auto;
  margin:0 auto 6% auto;
  overflow:hidden;
  box-shadow:0 15px 40px transparent;
}

.page-title-area.map_banner{
  background-image:url('<?php echo get_template_directory_uri(); ?>/assets/imgs/banners/projects_banner_1_web.webp');
  background-size:cover;
  background-position:center;
  background-repeat:no-repeat;
  height:50vh;
  min-height:300px;
}

.versay_map::after{
  content:"";
  position:absolute;
  inset:0;
  background:rgba(0,0,0,0.45);
}

.versay_map .container{
  z-index:111;
  position:relative;
}

@media (max-width:767px){
  .page-title-area.map_banner{
    background-image:url('<?php echo get_template_directory_uri(); ?>/assets/imgs/banners/projects_banner_1_mobile.webp');
    height:42vh;
    min-height:260px;
  }
}

#map{
  height:80vh;
  width:100%;
  /*border-radius:16px;*/
}

.custom-marker{
  width:22px;
  height:22px;
  background: var(--bg-1);
  border:3px solid #fff;
  border-radius:50%;
  box-shadow:0 0 0 14px rgba(168, 132, 54, 0.3);
}

.leaflet-popup-content-wrapper{
  background:#fff;
  color:#333;
  border-radius:12px;
  padding:1px;
  box-shadow:0 8px 25px rgba(0,0,0,.2);
}
.leaflet-popup-content-wrapper .leaflet-popup-content{
  margin: 0;
}
.leaflet-popup-content-wrapper .leaflet-popup-content img{
  width: 100%;
  margin: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  margin: -1px;
}
.leaflet-popup-tip{
  background:var(--bg-1);
}
.popup-box{
  width:280px;
  text-align:center;
}
.popup-box h3{
  margin:0;
  padding:10px;
  font-size:16px;
  background: var(--bg-1);
  color:#fff;
  border-top-left-radius:12px;
  border-top-right-radius:12px;
}
.popup-box img{
  width:90%;
  border-radius:10px;
  margin:8px 0;
  box-shadow:0 5px 15px rgba(0,0,0,.3);
}
.popup-box p{
  margin:8px 10px;
  font-size:14px;
  line-height:1.3;
}
.popup-box a{
  display:inline-block;
  margin:10px 0 12px 0;
  padding:8px 12px;
  background:var(--bg-1);
  color:#fff;
  text-decoration:none;
  border-radius:8px;
  font-weight:bold;
  transition:all .3s;
}
.popup-box a:hover{
  background:#8f7d62;
  transform:scale(1.05);
}

.marker-tooltip{
  /*background: rgba(74,63,160,0.9);*/
  background: var(--bg-1);
  color:#fff;
  font-weight:bold;
  padding:4px 8px;
  border-radius:6px;
  font-size:13px;
}
/*
.leaflet-tile {
  filter: sepia(100%) hue-rotate(215deg) saturate(300%) brightness(0.75);
}*/

footer{
  background:var(--bg-1);
  color:#fff;
  text-align:center;
  padding:25px 10px;
  font-size:16px;
  margin-top:40px;
  box-shadow:0 -5px 15px rgba(0,0,0,.2);
}

footer a{
  color:#fff;
  text-decoration:none;
  font-weight:bold;
}

footer a:hover{
  color:#ffdd59;
}

.popup-box a{
    color: #fff!important;
  }
</style>

<div id="has_smooth"></div>
<div id="smooth-wrapper">
  <div id="smooth-content">
    <main>

      <!-- Section: Page Title / Hero Banner -->
      <section class="page-title-area text-center versay_map map_banner position-relative d-flex align-items-center">
        <div class="container large">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="page-title-heading" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <h1 class="title text-white">الخريطة العقارية</h1>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="page-title-paragraph mt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                <p class="text text-white" style="font-weight: 100;">اكتشف مواقع مشاريع فرساي في الرياض على الخريطة التفاعلية</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Interactive Map & Counters -->
      <div id="map-container">
        <section id="map-section" class="mb-5 mt-10">
          <div class="container">
            <div class="row d-flex justify-content-between">

              <!-- Map Wrapper -->
              <div id="map-wrapper" class="col-11 col-md-6 px-0 m-auto"
                   data-aos="zoom-in"
                   data-aos-duration="2000"
                   data-aos-easing="ease-out-cubic"
                   data-aos-delay="300">
                <div id="map"></div>
                <div class="map-overlay" id="mapOverlay">
                  <div class="map-overlay__content">
                    <i class="fa-solid fa-map-location-dot map-overlay__icon" aria-hidden="true"></i>
                    <p class="map-overlay__title">الخريطة العقارية</p>
                    <p class="map-overlay__hint">اضغط لاستكشاف مواقع مشاريع فرساي في الرياض</p>
                    <button id="openMapBtn" type="button">عرض الخريطة</button>
                  </div>
                </div>
                <button id="closeMapBtn">✕</button>
              </div>

              <!-- Success Cards / Counters -->
              <div class="col-12 col-md-5 row d-flex justify-content-center">
                <div class="success-card col-5 col-md-5" 
                     data-aos="fade-up"
                     data-aos-duration="1200"
                     data-aos-easing="ease-out-cubic"
                     data-aos-delay="0">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icons/building.png" alt="مشروع مكتمل" loading="lazy">       
                  <h3 class="success-number" data-target="150">0</h3>
                  <p class="success-text">مشروع مكتمل</p>
                </div>
                
                <div class="success-card col-5 col-md-5"
                     data-aos="fade-up"
                     data-aos-duration="1600"
                     data-aos-easing="ease-out-cubic"
                     data-aos-delay="300">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icons/group.png" alt="عميل سعيد" loading="lazy">
                  <h3 class="success-number" data-target="1200">0</h3>
                  <p class="success-text">عميل سعيد</p>
                </div>
              
                <div class="success-card col-5 col-md-5" 
                     data-aos="fade-up"
                     data-aos-duration="2000"
                     data-aos-easing="ease-out-cubic"
                     data-aos-delay="600">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icons/location.png" alt="مناطق المشاريع" loading="lazy">
                  <h3 class="success-number" data-target="10">0</h3>
                  <p class="success-text">مناطق المشاريع</p>
                </div>

                <div class="success-card col-5 col-md-5"
                     data-aos="fade-up"
                     data-aos-duration="1800"
                     data-aos-easing="ease-out-cubic"
                     data-aos-delay="900">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icons/location.png" alt="مناطق المشاريع" loading="lazy">
                  <h3 class="success-number" data-target="10">0</h3>
                  <p class="success-text">مناطق المشاريع</p>
                </div>
              </div> 

            </div>
          </div>
        </section>
      </div>

    </main>
  </div>
</div>

<?php get_footer(); ?>