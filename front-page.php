<?php
/*
Template Name: Home
*/
 get_header(); ?>
<!-- content starts -->
<!-- SLIDER Revo Hero 1 FONT MONTSERRAT -->
<div class="relative">

  <div class="rev_slider_wrapper fullscreen-container" id="rev_slider_280_1_wrapper"
    style="background-color:#fff;padding:0px;">
    <!-- START REVOLUTION SLIDER 5.1.4 fullscreen mode -->
    <div class="rev_slider fullscreenbanner" data-version="5.1.4" id="rev_slider_280_1" style="display:none;">
      <ul>
        <!-- SLIDE -->
        <li data-description="" data-easein="Power2.easeInOut" data-easeout="default" data-index="rs-898"
          data-masterspeed="1500" data-param1="" data-param10="" data-param2="" data-param3="" data-param4=""
          data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0"
          data-saveperformance="off" data-slotamount="default" data-title="Slide" data-transition="fade">
          <!-- MAIN IMAGE -->
          <img alt="img" class="rev-slidebg" data-bgparallax="12" data-bgposition="center center" data-duration="30000"
            data-ease="Linear.easeNone" data-no-retina="" src="<?php echo SITE_URL; ?>/images/img/concept1.jpeg">
          <!-- LAYERS -->
          <!-- LAYER NR. 1 -->
          <div class="tp-caption  font-black tp-resizeme rs-parallaxlevel-6" id="slide-898-layer-1"
            style="z-index: 8; white-space: nowrap;" data-fontsize="['98','88','80','60']" data-fontweight="600"
            data-height="none" data-lineheight="['112','92','90','72']" data-responsive_offset="on" data-splitin="none"
            data-splitout="none"
            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
            data-whitespace="nowrap" data-width="none" data-x="['left','left','left','left']"
            data-hoffset="['40','40','40','20']" data-y="['center','center','center','center']"
            data-voffset="['-100','-90','-90','-70']">
            Imagine
          </div>

          <!-- LAYER NR. 2 -->
          <div class="tp-caption  font-black tp-resizeme rs-parallaxlevel-6" id="slide-898-layer-2"
            style="z-index: 8; white-space: nowrap;" data-fontsize="['98','88','80','60']" data-fontweight="600"
            data-height="none" data-lineheight="['112','92','90','72']" data-responsive_offset="on" data-splitin="none"
            data-splitout="none"
            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
            data-whitespace="nowrap" data-width="none" data-x="['left','left','left','left']"
            data-hoffset="['40','40','40','20']" data-y="['center','center','center','center']"
            data-voffset="['0','0','0','0']">
            Innovate
          </div>

          <!-- LAYER NR. 3 -->
          <div class="tp-caption  font-black tp-resizeme rs-parallaxlevel-6" id="slide-898-layer-3"
            style="z-index: 8; white-space: nowrap;" data-fontsize="['98','88','80','60']" data-fontweight="600"
            data-height="none" data-lineheight="['112','92','90','72']" data-responsive_offset="on" data-splitin="none"
            data-splitout="none"
            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1100,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"nothing"}]'
            data-whitespace="nowrap" data-width="none" data-x="['left','left','left','left']"
            data-hoffset="['40','40','40','20']" data-y="['center','center','center','center']"
            data-voffset="['100','90','90','70']">
            Create<span class="red-dot">.</span>
          </div>
        </li>
      </ul>
      <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
  </div>
  <!-- END REVOLUTION SLIDER -->

  <!-- SCROLL ICON -->
  <div class="local-scroll-cont">
    <a href="#about" class="scroll-down smooth-scroll">
      <div class="icon icon-arrows-down"></div>
    </a>
  </div>

</div>

<!-- FEATURES 13 OUR SERVICES FONT MONTSERRAT -->
<div class="page-section pt-160-b-120-cont bg-gray" id="services">
  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes4-box wow fadeIn">
          <h2 class="section-title2 font-montserrat"><strong>Our Services</strong></h2>
          <div class="line-3-75"></div>
        </div>
      </div>

      <?php

$args = array(
    'post_type'=> 'services',
    'order'    => 'ASC'
    );

$the_query = new WP_Query( $args );
if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

?>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <div class="fes4-box wow fadeIn" data-wow-delay="200ms">
          <div class="fes13-title-cont">
            <div class="fes13-box-icon">
              <?php echo get_field('icon'); ?>
              <!-- <div class="icon fa fa-mobile-alt"></div> -->
            </div>
            <h3 class="font-montserrat"><strong><?php echo the_title(); ?></strong></h3>
          </div>
          <div>
            Complete application development solutions for Android, iOS and web with scalable backends
          </div>
        </div>
      </div>
<?php  endwhile;endif;wp_reset_query();?>

    </div>
  </div>
</div>

<!-- FEATURES 13 OUR Technologies FONT MONTSERRAT -->
<div class="page-section pt-110-b-80-cont" id="technologies">
  <div class="custom-container">

    <div class="row">
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="fes4-box wow fadeIn">
          <h2 class="section-title2 font-montserrat"><strong>Technologies</strong></h2>
          <div class="line-3-75"></div>
        </div>
      </div>
    </div>


  <?php if( have_rows('technologies') ): ?>
    <?php while( have_rows('technologies') ): the_row(); ?>
    <div class="col-xs-6 col-sm-3 col-md-3">
      <div class="fes4-box wow fadeIn" data-wow-delay="200ms">
        <div class="fes13-title-cont">
          <div class="fes13-box-icon">
            <?php echo the_sub_field('icon');?>
            <!-- <div class=""></div> -->
          </div>
          <h3 class="font-montserrat"><strong><?php echo the_sub_field('text');?></strong></h3>
        </div>
      </div>
    </div>
     <?php endwhile; ?>
<?php endif; ?>




  </div>
</div>

<!-- END PORTFOLIO SECTION 1 -->

<!-- WORK PROCESS 2 FONT MONTSERRAT -->
<!-- <div class="container-fluid p-110-cont">
        <div class="row">

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="work-proc2-cont wow fadeIn">
              <div class="work-proc2-icon-cont pos-l-12">
                01
              </div>
              <h3 class="font-montserrat"><strong>Create</strong></h3>
              <p>Maecenas luctus nisi in sem fermen blandit. In nec elit </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="work-proc2-cont wow fadeIn" data-wow-delay="200ms">
              <div class="work-proc2-icon-cont">
                02
              </div>
              <h3 class="font-montserrat"><strong>Developmen</strong></h3>
              <p>Maecenas luctus nisi in sem fermen blandit. In nec elit </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="work-proc2-cont wow fadeIn" data-wow-delay="400ms">
              <div class="work-proc2-icon-cont">
                03
              </div>
              <h3 class="font-montserrat"><strong>Launch</strong></h3>
              <p>Maecenas luctus nisi in sem fermen blandit. In nec elit </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="work-proc2-a-cont wow fadeIn" data-wow-delay="600ms">
              <a class="work-proc2-a" href="#">
                <div class="work-proc2-a-text font-montserrat">
                  Let's work<br><span class="border-bot">together</span>
                </div>
                <div class="work-proc2-bg-block"></div>
              </a>
            </div>
          </div>

        </div>
      </div> -->

<!-- CLIENTS 2 -->
<div class="page-section p-80-cont bg-gray" id="clients">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="fes4-box wow fadeIn">
          <h2 class="section-title2 font-montserrat"><strong>Clients</strong></h2>
          <div class="line-3-75"></div>
        </div>
      </div>
    </div>
    <div class="row">


    <?php if( have_rows('clients','options') ): ?>
    <?php while( have_rows('clients','options') ): the_row(); ?>

      <div class="col-xs-6 col-sm-2 client2-item">
        <img alt="client" src="<?php echo the_sub_field('image')?>" />
      </div>
 <?php endwhile;endif; ?>




    </div>



  </div>
</div>

<!-- PORTFOLIO START -->

<!-- COTENT CONTAINER -->
<div class=" page-section pt-80 pt-xxs-80" id="portfolio">

  <div class="relative">
    <!-- PORTFOLIO FILTER -->
    <div class="container">

      <!-- <ul class="port-filter font-poppins">
              <li>
                <a href="#" class="filter active" data-filter="*">All Projects</a>
              </li>
              <li>
                <a href="#" class="filter" data-filter=".development">Development</a>
              </li>
              <li>
                <a href="#" class="filter" data-filter=".design">Design</a>
              </li>
              <li>
                <a href="#" class="filter" data-filter=".photography">Photography</a>
              </li>
            </ul> -->
      <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-3">
          <div class="fes4-box wow fadeIn">
            <h2 class="section-title2 font-montserrat"><strong>Portfolio</strong></h2>
            <div class="line-3-75"></div>
          </div>
        </div>
      </div>

    </div>

    <!-- ITEMS GRID -->
    <ul class="port-grid clearfix" id="items-grid">

      <!-- Item 1 -->

         <?php

$args = array(
    'post_type'=> 'portfolio',
    'order'    => 'ASC'
    );

$the_query = new WP_Query( $args );
if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
$term_list = wp_get_post_terms($post->ID, 'post_tag', array("fields" => "all"));


?>
      <li class="port-item mix design">
        <a href="<?php echo get_permalink();?>">
          <div class="port-img-overlay">
            <img class="port-main-img" src="<?php echo $featured_img_url;?>" alt="img">
          </div>
          <div class="port-overlay-cont">
            <div class="port-title-cont2">
              <h3><?php echo the_title(); ?></h3>
              <span>
                <?php foreach ($term_list as $term) {
                  echo $term->name;
                } ?>
              </span>
            </div>
          </div>
        </a>
      </li>



<?php  endwhile;endif;wp_reset_query();?>


    </ul>

  </div>

</div>

<!-- PORTFOLIO END -->

<!-- ADS 4 FONT MONTSERRAT -->
<div class="page-section" id="about">
  <div class="container-fluid">
    <div data-equal=".equal-height3" class="row">

      <div class="col-md-6  equal-height3">
        <div class="fes2-main-text-cont">
          <div class="fes2-title-45 font-montserrat">
           <?php echo get_field('about_heading'); ?>
          </div>
          <div class="fes2-text-cont">
                 <?php echo get_field('about_content'); ?>

          </div>
        </div>
      </div>

      <div class="col-md-6 wow fadeInRight equal-height3 ads3-img-cont">

        <div class="row row-sm-fix absolute pos-rb-0">
          <img src="<?php echo get_field('image'); ?>" alt="img">
        </div>

      </div>

    </div>
  </div>
</div>

<!-- CONTACT INFO SECTION 1 FONT JOSEFIN -->
<div class="page-section p-100-cont bg-gray" id="contact">
  <div class="container">
    <div class="row">

      <div class="col-md-4 col-sm-6">
        <div class="cis-cont">
          <div class="cis-icon">
            <div class="icon icon-basic-map"></div>
          </div>
          <div class="cis-text">
            <h3 class="font-josefin"><strong>Address</strong></h3>
            <p><?php echo get_field('address','options'); ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="cis-cont">
          <div class="cis-icon">
            <div class="icon icon-basic-mail"></div>
          </div>
          <div class="cis-text">
            <h3 class="font-josefin"><strong>Email</strong></h3>
            <?php if( have_rows('email','options') ): ?>
    <?php while( have_rows('email','options') ): the_row(); ?>
          <p><a href="mailto:info@haswell.com"><?php echo the_sub_field('emails'); ?></a></p>
    <?php endwhile;endif; ?>

          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="cis-cont">
          <div class="cis-icon">
            <div class="icon icon-basic-smartphone"></div>
          </div>
          <div class="cis-text">
            <h3 class="font-josefin"><strong>Call Us</strong></h3>
        <?php if( have_rows('call_us','options') ): ?>
    <?php while( have_rows('call_us','options') ): the_row(); ?>
            <p><?php  echo the_sub_field('call_uss'); ?></p>
    <?php endwhile;endif; ?>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- content ends here -->
<?php get_footer();