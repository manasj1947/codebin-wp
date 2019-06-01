<?php
 get_header();
if(have_posts() ) : while (have_posts() ) : the_post();
	global $post;
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
$term_list = wp_get_post_terms($post->ID, 'post_tag', array("fields" => "all"));

?>

  <!-- PAGE TITLE LARGE 5 ABSOLUTE GRAY -->
      <div class="page-title-large5-cont bg-gray">
        <div class="container relative">
          <div class="page-title-large5-text-cont">
            <div>
              <h1 class="page-title5"><?php echo the_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>

      <!-- CONTENT -->
      <div class="page-section p-140-cont pb-50">
        <div class="container">

          <!-- PROJECT DETAILS & IMG -->
          <div class="row">

            <!-- PROJECT DETAILS -->
            <div class="col-sm-4 col-md-3 mb-50">

              <!-- PROJECT DETAILS -->
              <div class="port-detail-cont mb-30">

                <div class="port-detail font-poppins mb-20">
                  <p>
                    <strong class="font-black">Client:</strong>
                    <?php echo the_title(); ?>
                  </p>
                  <p>
                    <strong class="font-black">Products:</strong>
                    <?php echo get_field('product')?get_field('product'):"No Poduct Added Yet"; ?>
                  </p>
                  <p>
                    <strong class="font-black">Description:</strong>
                    <!-- Content delivery and upload platform for e-learning -->
                    <?php echo the_content(); ?>
                  </p>
                  <p>
                    <strong class="font-black">Skills:</strong>
				  <?php foreach ($term_list as $term) {
                  echo $term->name.", ";
                } ?>
                  </p>

                </div>

              </div>

            </div>

            <!-- IMG -->
            <div class="col-sm-8 col-md-8 col-md-offset-1 mb-50">
              <div class="lightbox-item popup-gallery">
                <a href="images/img/products/single/LearnThingsAfrica.jpg">
                  <div class="port-img-overlay">
                    <img class="port-main-img" src="<?php echo $featured_img_url; ?>" alt="img">
                  </div>
                  <div class="port-overlay-cont">
                    <div class="port-btn-cont">
                      <div aria-hidden="true" class="icon_search"></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>

          </div>

        </div><!-- container end -->

        <!-- DIVIDER -->
        <hr class="mt-0 mb-0">

        <!-- WORK NAVIGATION -->
        <div class="row">
          <div class="col-md-12">
            <div class="work-navigation plr-10 clearfix">

				<?php previous_post_link('%link', 'Prev') ?>
              <a href="./#portfolio" class="work-all"><span>All</span></a>
			<p class="text-right"><?php next_post_link('%link', 'Next') ?></p>

             <!--  <a href="fifth-season.php" class="work-prev"><span><span class="icon icon-arrows-left"></span>&nbsp;Prev</span></a>
              <a href="./#portfolio" class="work-all"><span>All</span></a>
              <a href="#" class="work-next"><span>Next&nbsp;<span class="icon icon-arrows-right"></span></span></a> -->
            </div>
          </div>
        </div>
      </div><!-- page section end -->
<?php  endwhile;endif;wp_reset_query();?>
<?php get_footer();