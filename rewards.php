<?php
/* Template Name:rewards */

get_header();
?>
<section class="load-p-banner analytics-banner" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/images/DriverRewards.jpg');">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-12">
            <div class="inner-lp">
              <h1><?php echo get_field('i_want_to_work_for_a_company_that_gives_me_more_than_a_paycheck')?></h1>
              <a href="javascript:;" class="common-btn"><?php the_field('request_a_demo_btn')?></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="load-track  analytics-head ">
      <div class="divider">
        <!-- <img src="images/vector-17.png" class="img-fluid" alt="shap"> -->
        <?php echo "<img src=".get_field('vector17')."  class='img-fluid' alt='shap'>" ?>
      </div>
      <div class="container">
        <div class="row analytic-main">
          <div class="col-12">
            <div class="main-heading-ana">
             <h2 data-aos="flip-left"><?php the_field('rewards')?></h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="main-feature-b py-100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="feature-heading text-center">
              <h2 data-aos="zoom-in"><?php the_field('features_&_benefits')?></h2>
            </div>
          </div>
        </div>
        <div class="row inner-feature">
            <?php
            if( have_rows('features_sections') ):
              $counter = 0; 
              $classes = array('ease-use', 'hos-com', 'inte', ' driver-pri'); 
            while( have_rows('features_sections') ) : the_row();
            $feature_title = get_sub_field('feature_title');
            $feature_description = get_sub_field('feature_descripiton');
            $counter_class = $classes[$counter]; 
    $counter++;
    if ($counter % 4 == 0) {
      $counter = 0;
    }
            ?>
          <div class="col-md-6   <?php echo $counter_class ?>">
            <div class="feature-data">
              <h4><?php echo $feature_title ?></h4>
              <p><?php echo $feature_description ?></p>
            </div>
          </div>
<?php
endwhile;
endif;
?>
        </div>
      </div>
    </section>
 
    <section class="contact-form py-100">
      <div class="container">
        <div class="row align-items-center">
           <div class="col-lg-5">
          <div class="form-content" data-aos="fade-right">
            <h2><span><?php the_field('we_would_love_to_be_in_touch_with_you!')?></span><?php the_field('please_sign_up')?></h2>
            <div class="con-add-box">
              <div class="call-box" data-aos="fade-right">
              <div class="call-img">
                <!-- <img src="images/pc-icon.png" class="img-fluid" alt="pc-icon"> -->
                <?php echo "<img src=".get_field('call_us_on_img')." class='img-fluid' alt='pc-icon' >" ?>
              </div>
              <div class="c-u-o">
                <h4><?php echo get_field('call_us_on')?></h4>
                <p><?php the_field('call_us_on_num')?></p>
              </div>
            </div>
            <div class="call-box" data-aos="fade-left">
              <div class="call-img">
                <!-- <img src="images/m-icon.png" class="img-fluid" alt="pc-icon"> -->
                <?php echo "<img src=".get_field('mail_image')." class='img-fluid' alt='pc-icon' >" ?>
              </div>
              <div class="c-u-o">
                <h4><?php the_field('mail_to')?></h4>
                <p><a href="mailto:contactus@rigbot.com"><?php the_field('mail_email')?></a></p>
              </div>
            </div>
            </div>
            <div class="cont-btn" data-aos="fade-down">
              <a href="javascript:;" class="c-u-now"><?php the_field('contact_us_now_button')?><span><i class="fa-solid fa-arrow-down"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="right-form" data-aos="fade-down">
             <form>
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="First Name" name="f-name" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Last Name" name="l-name" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Enter email" name="email" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Title" name="title" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Company" name="company" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Address" name="address" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nummber Of Trucks" name="NOF" required>
                </div>
                <div class="col-12">
                  <textarea class="form-control" rows="10" id="comment" name="text" placeholder="Message"></textarea>
                </div>
              </div>
              <div class="si-up-btn">
                <a href="javascript:;" class="common-btn">sign up now</a>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
    </section>
    <?php
    get_footer();
    ?>