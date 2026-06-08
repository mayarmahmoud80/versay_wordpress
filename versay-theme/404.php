<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Versaisa
 */

get_header(); ?>

<div id="has_smooth"></div>
<div id="smooth-wrapper">
  <div id="smooth-content">

    <main>

      <!-- error area start -->
      <section class="error-area">
        <div class="container large">
          <div class="error-area-inner section-spacing">
            <div class="section-content">
              
              <div class="section-title-wrapper">
                <div class="subtitle-wrapper">
                  <span class="section-subtitle">404</span>
                </div>
                <div class="title-wrapper">
                  <h2 class="section-title font-sequelsans-romanbody">
                    <?php esc_html_e( 'Oops sorry! page didn\'t found', 'versaisa' ); ?>
                  </h2>
                </div>
              </div>

              <div class="btn-wrapper">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="rr-btn">
                  <span class="btn-wrap">
                    <span class="text-one"><?php esc_html_e( 'Back - To - Home', 'versaisa' ); ?></span>
                    <span class="text-two"><?php esc_html_e( 'Back - To - Home', 'versaisa' ); ?></span>
                  </span>
                </a>
              </div>

            </div>
          </div>
        </div>
      </section>
      <!-- error area end -->

    </main>

<?php get_footer(); ?>