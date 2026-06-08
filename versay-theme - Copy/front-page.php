<?php get_header(); ?>
  <style>
    .success-card { backdrop-filter: blur(2px); }
    .icon-wrapper { background: var(--bg-1); }
    .project_section { opacity: 0; transform: translateY(40px); transition: all .6s ease; border: 1px solid #00000014; }
    .project_section.show { opacity: 1; transform: translateY(0); }
    .project_section:hover { box-shadow: 10px 10px 10px #00000006; transform: translateY(-10px); }
    .btn-1 { background-color: transparent; color: var(--bg-1); border: 1px solid var(--bg-1)!important; }
    .about_section .description { font-size: 14px!important; }
    @media only screen and (max-width:770px) { .about_section .description { font-size: 10px!important; } }
    .btn-1:hover { color: white!important; }
    .versay_index { top:10%; }
    .versay_index_2 { padding-right:44px; }
    .versay_index_1 h3 { font-size: 40px; }
    .versay_index_2 h3 { color: black; font-size: 20px; }
    @media only screen and (max-width:770px) {
      .versay_index { top:9%; }
      .versay_index .versay_index_1 h3 { font-size: 12px; }
      .versay_index .versay_index_2 h3 { font-size: 6px; }
      .versay_index .versay_index_2 { padding:0 ; }
    }
    .play-btn { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 85px; height: 85px; background: rgba(0, 0, 0, 0.55); border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; font-size: 0; backdrop-filter: blur(6px); box-shadow: 0 10px 30px rgba(0,0,0,0.3); transition: 0.3s ease; right: auto; }
    .play-btn::before { content: ""; width: 0; height: 0; border-left: 22px solid #ffffff; border-top: 14px solid transparent; border-bottom: 14px solid transparent; margin-left: 6px; }
    .play-btn:hover { background: #c9a227; transform: translate(-50%, -50%) scale(1.08); box-shadow: 0 15px 40px rgba(0,0,0,0.4); }
    #map-wrapper { opacity: 1; transform: scale(1); transition: all .8s ease; }
    #map-wrapper.show { opacity: 1; transform: scale(1); }
    .section-versailles { background: #fff }
    .section-versailles-card { justify-content: space-between; }
    .section-versailles img { max-width: fit-content!important; }
    @media only screen and (max-width:770px) { .section-versailles img { max-width: 100%!important; } }
    .projects-section { padding:0 20px; text-align:center; overflow:hidden; }
    .section-title { font-size:34px; margin-bottom:50px; font-weight:800; opacity:0; transform:translateY(30px); animation:fadeUp 1s ease forwards; color: #000; }
    .projects-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(280px,1fr)); gap:30px; }
    .project-card { position:relative; height:280px; border-radius:20px; overflow:hidden; color:#fff; text-decoration:none; display:flex; align-items:flex-end; transition:.5s ease; transform:translateY(40px); opacity:0; animation:fadeUp .8s ease forwards; justify-content: center; }
    .project-card:nth-child(1) { animation-delay:.2s; }
    .project-card:nth-child(2) { animation-delay:.4s; }
    .project-card:nth-child(3) { animation-delay:.6s; }
    .project-card__image { position:absolute; inset:0; width:100%; height:100%; object-fit:cover; transition:transform .7s ease; z-index:0; }
    .overlay { position:absolute; inset:0; background:linear-gradient(to top, rgba(0,0,0,0.75), transparent); transition:.4s; }
    .content { position:relative; padding:25px; z-index:2; top: 10%; text-align:center; transform:translateY(20px); transition:.4s; }
    .content h3 { font-size:24px; margin-bottom:6px; }
    .content p { font-size:14px; opacity:.9; color: #fff!important; }
    .project-card:hover { transform:translateY(-10px) scale(1.02); box-shadow:0 20px 40px rgba(0,0,0,0.25); }
    .project-card:hover .project-card__image { transform:scale(1.1); }
    .project-card:hover .overlay { background:linear-gradient(to top, rgba(0,0,0,0.9), transparent); }
    .project-card:hover .content { transform:translateY(0); }
    @keyframes fadeUp { to { opacity:1; transform:translateY(0); } }
  </style>
<section>
  <div class="video_index">
    <video id="bgVideo" muted loop playsinline autoplay>
      <source src="https://firebasestorage.googleapis.com/v0/b/developing-abb09.firebasestorage.app/o/91744-636709154_1_1.mp4?alt=media&token=28041e2c-e9e1-4c43-80c0-fc7f71f34292" type="video/mp4">
    </video>
    <h1 class="text-white mb-4 p-5" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200" data-aos-once="true">فرصتك للسكن الراقي</h1>
    <p class="text-white px-5" data-aos="fade-up" data-aos-duration="3000" data-aos-once="true" data-aos-delay="300">بنتهاوس وأدوار فرساي جاهزة للاستلام في أرقى المواقع</p>

    <div id="openVideoBtnWrapper" class="video_btn all-btn-wrapper pm-5">
      <div class="d-flex justify-space-between flex-wrap gap-3">
        <button class="rr-btn btn-border mb-3 col-5 col-md-2 p-0 py-3">
          <a href="https://wa.me/0559604044" target="_blank">
            <span class="btn-wrap">
              <span class="text-one pb-1">تواصل معنا</span>
              <span class="text-two pb-1">تواصل معنا</span>
            </span>
          </a>
        </button>
        <button class="rr-btn btn-border mb-3 col-5 col-md-2 p-0 py-3">
          <a href="#about">
            <span class="btn-wrap">
              <span class="text-one pb-1">لماذا فرساي</span>
              <span class="text-two pb-1">لماذا فرساي</span>
            </span>
          </a>
        </button>
      </div>
    </div>
    
    <div id="videoControlCenter">
      <button id="playPauseBtn" onclick="togglePlayPause()">
        <svg id="pauseIcon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 16 16">
          <path d="M5.5 3.5A.5.5 0 0 1 6 4v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm5 0a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z" />
        </svg>
        <svg id="playIcon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fff" viewBox="0 0 16 16" style="display: none;">
          <path d="M6 4.5v7l6-3.5-6-3.5z" />
        </svg>
      </button>
    </div>
  </div>
</section>

<section class="section-versailles about_section h-auto mt-10" id="about" dir="rtl">
  <div class="container">
    <div data-aos="fade-up" data-aos-duration="1200" data-aos-easing="ease-out-cubic" data-aos-once="true" data-aos-delay="300">
      <h2 class="h2_style">لماذا فرساي؟</h2>
      <p class="description">
        إدراكا منا بأن المسكن هو الاستثمار الأهم في حياة الفرد
        <br>
        سخرنا في فرساي كافة الجهود لتقديم تجربة سكنية استثنائية ، حيث يجتمع إتقان التنفيذ مع أحدث المعايير المعمارية العالمية في مواقع حيوية مختارة بعناية لضمان أعلى مستويات الراحة والقيمة الاستثمارية التي تليق بتطلعاتكم
      </p>
    </div>

    <div class="section-versailles-card row align-items-center justify-space-between g-5">
      <div class="feature-cards col-12 col-md-6 row d-flex justify-space-between" dir="rtl" data-aos="fade-left" data-aos-delay="600" data-aos-once="true">
        <div class="feature-card col-5" data-aos="fade-left" data-aos-once="true" data-aos-duration="1500" data-aos-delay="300">
          <i class="fa-solid fa-building"></i>
          <h5>جودة البناء</h5>
          <p>نلتزم بأعلى معايير الجودة مع ضمانات طويلة الأمد.</p>
        </div>
        <div class="feature-card col-5" data-aos="fade-left" data-aos-delay="200" data-aos-once="true">
          <i class="fa-solid fa-user-gear"></i>
          <h5>خبرة واسعة</h5>
          <p>21 مشروعًا منذ 2006 بخبرة متراكمة.</p>
        </div>
        <div class="feature-card col-5" data-aos="fade-left" data-aos-delay="300" data-aos-once="true">
          <i class="fa-solid fa-map-location-dot"></i>
          <h5>مواقع استراتيجية</h5>
          <p>قريبة من جميع الخدمات الحيوية.</p>
        </div>
        <div class="feature-card col-5" data-aos="fade-left" data-aos-delay="400" data-aos-once="true">
          <i class="fa-solid fa-pencil-ruler"></i>
          <h5>تصاميم مميزة</h5>
          <p>عصرية بتشطيبات فاخرة.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 position-relative overflow-hidden h-100 m-0" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="300" data-aos-once="true">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/projects_img/10.jpg" loading="lazy">
      </div>
    </div>
  </div>
</section>

<section class="projects-section mt-10">
  <div class="container">
    <div class="d-flex flex-column h-100 mb-4 text-center align-items-center" data-aos="zoom-in" data-aos-duration="1200" data-aos-easing="ease-out-cubic" data-aos-once="true" data-aos-delay="300">
      <h2 class="mb-3 h2_style">مشاريع فرساي</h2>
      <p class="description font-16">
        نرسم معالم السكن الفاخر في المملكة عبر نخبة من المشاريع العقارية الاستثنائية التي تجمع بين الابتكار والجودة
      </p>
    </div>
    
    <div class="projects-grid" data-aos="fade-up" data-aos-duration="1200" data-aos-easing="ease-out-cubic" data-aos-once="true" data-aos-delay="300">
      <a href="<?php echo home_url('/available_projects'); ?>" class="project-card available">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/projects_img/16.jpg" alt="المشاريع المتاحة" loading="lazy" class="project-card__image">
        <div class="overlay"></div>
        <div class="content">
          <h3>المشاريع المتاحة</h3>
          <p>احجز وحدتك الآن</p>
        </div>
      </a>

      <a href="<?php echo home_url('/projects2'); ?>" class="project-card all">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/projects_img/15.jpg" alt="مشاريع تحت الانشاء" loading="lazy" class="project-card__image">
        <div class="overlay"></div>
        <div class="content">
          <h3>مشاريع تحت الانشاء</h3>
          <p>تصفح مشاريعنا </p>
        </div>
      </a>

      <a href="<?php echo home_url('/unavailable_projects'); ?>" class="project-card sold">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/projects_img/06.jpg" alt="مشاريع مباعة" loading="lazy" class="project-card__image">
        <div class="overlay"></div>
        <div class="content">
          <h3>مشاريع مباعة</h3>
          <p>تم بيع الوحدات</p>
        </div>
      </a>
    </div>
  </div>
</section>

<section class="mt-10">
  <div class="container position-relative">
    <div data-aos="fade-up" data-aos-duration="3000" data-aos-once="true" data-aos-delay="300">
      <picture>
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/imgs/banners/banner_index_section_web.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/banners/banner_index_section_web.jpg" loading="lazy" alt="versay_building" width="1200" height="600">
      </picture>
    </div>
    <div class="row d-flex justify-content-between versay_index position-absolute w-100">
      <div class="col-5 versay_index_1">
        <h3 class="text-black" data-aos="fade-left" data-aos-duration="3000" data-aos-once="true" data-aos-delay="300">فرساي سكن يليق بتطلعاتك </h3>
      </div>
      <div class="col-2 versay_index_2">
        <h3 data-aos="fade-right" data-aos-duration="3000" data-aos-once="true" data-aos-delay="300">الاختيار الأمثل للحياة التي تستحقها </h3>
      </div>
    </div>
  </div>
</section>

<section class="mt-10" dir="rtl">
  <div class="container">
    <div class="d-flex flex-column h-100 mb-4 text-center align-items-center" data-aos="zoom-in" data-aos-duration="1200" data-aos-easing="ease-out-cubic" data-aos-once="true">
      <h2 class="mb-3 h2_style">تغطيات المشاريع</h2>
      <p class="description font-16">
        جولة واقعية داخل أرقى وحداتنا السكنية، لتختبروا معنى السكن الراقي بكل تفاصيله
      </p>
    </div>

    <div class="projects-scroll justify-content-center" data-aos="zoom-out" data-aos-duration="1200" data-aos-easing="ease-out-cubic" data-aos-once="true">
      <div class="project-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/video_img.jpg" alt="Project 1" loading="lazy">
        <div class="play-btn" style="background-color: transparent;">▶</div>
        <div class="video-wrapper">
          <video muted playsinline controls preload="none">
            <source src="https://firebasestorage.googleapis.com/v0/b/developing-abb09.firebasestorage.app/o/versay%20versay.mp4?alt=media&token=61131fbe-22a3-4191-a7c1-aac0c8e34d32" type="video/mp4">
          </video>
          <div class="close-video">✕</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="map-section" class="mt-10 mb-3">
  <div class="d-flex flex-column h-100 mb-4 text-center align-items-center" data-aos="fade-down" data-aos-duration="1200" data-aos-easing="ease-out-cubic" data-aos-once="true">
    <h2 class="h2_style mb-3">أين تجدنا</h2>
    <p class="description font-16">مشاريع صُممت للحياة</p>
  </div>

  <div class="container">
    <div class="row d-flex justify-content-between">
      <div id="map-wrapper" class="col-11 col-md-6 px-0 m-auto">
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
      
      <div class="col-12 col-md-5 row d-flex justify-content-center">
        <div class="success-card col-5 col-md-5">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icons/building.png" alt="مشروع مكتمل" loading="lazy">       
          <h3 class="success-number" data-target="150">0</h3>
          <p class="success-text">مشروع مكتمل</p>
        </div>
        <div class="success-card col-5 col-md-5">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icons/group.png" alt="عميل سعيد" loading="lazy">
          <h3 class="success-number" data-target="1200">0</h3>
          <p class="success-text">عميل سعيد</p>
        </div>
        <div class="success-card col-5 col-md-5">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icons/location.png" alt="مناطق المشاريع" loading="lazy">
          <h3 class="success-number" data-target="10">0</h3>
          <p class="success-text">مناطق المشاريع</p>
        </div>
        <div class="success-card col-5 col-md-5">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icons/location.png" alt="مناطق المشاريع" loading="lazy">
          <h3 class="success-number" data-target="10">0</h3>
          <p class="success-text">مناطق المشاريع</p>
        </div>
      </div> 
    </div>
  </div>
</section>

<?php get_footer(); ?>