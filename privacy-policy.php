<?php
/* Template Name: Privacypolicy */
get_header();


?>
    <section class="load-p-banner analytics-banner tos-banner privacy-policy-banner" style="background-image: url('<?php echo get_stylesheet_directory_uri() ?>/images/privacy-policy-banner.jpg');">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-12">
            <div class="inner-lp">
              <h1><?php echo get_field('privacy_policy_title')?></h1>
              <p><?php the_field('privacy_policy_description')?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="main-privacy py-100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="Policy-date">
              <h6>Effective Date: <?php echo get_field('effective_date')?></h6>
              <h6>Revision Date: <?php echo get_field('revision_date')?></h6>
            </div>
          </div>
        </div>
        <div class="inner-policy-data">
          <h4><?php the_field('introduction')?></h4>
          <p><b>Purpose.</b> <?php the_field('purpose_description')?></p>
        </div>
        <div class="inner-policy-data">
          <h4><?php the_field('information_that_we_collect_title')?></h4>
          <p><?php the_field('information_that_we_collect_desc')?></p>
           <ul class="Policy-list">
           <?php
        if( have_rows('information_that_we_collect_section') ):
        while( have_rows('information_that_we_collect_section') ) : the_row();
        $feature_decs = get_sub_field('feature_decs');
        ?>
                <li><span class="hand-icon"><i class="fa-regular fa-hand-point-right"></i></span><?php echo $feature_decs; ?></li>
        <?php
        endwhile;
      endif;
      ?>
              </ul>
               <p>Please contact <u>contactus@rigbot.com</u> for more information or details about the Telematics Information we collect.</p>
        </div>
        <div class="inner-policy-data">
          <h4><?php the_field('how_we_use_and_share_your_information')?></h4>
          <p><?php the_field('we_use_this_telematics_and_other_information_to:')?></p>
           <ul class="Policy-list">
           <?php
        if( have_rows('how_we_use_and_share_your_information_section') ):
        while( have_rows('how_we_use_and_share_your_information_section') ) : the_row();
        $feature_decs2 = get_sub_field('how_we_use_and_share_your_informationrepeat');
        ?>
              <li><span class="hand-icon"><i class="fa-regular fa-hand-point-right"></i></span><?php echo $feature_decs2 ?></li>
              <?php
              endwhile;
              endif;
              ?>
              </ul>
               <p><?php the_field('we_share_your_telematics')?></p>
               <p><?php the_field('with_your_approval')?></p>
               <p><b><?php the_field('legal_proceedings_title')?></b>  <?php the_field('legal_proceedings_desc')?></p>
                <ul class="Policy-list">
                <?php
        if( have_rows('legal_proceedings_section') ):
        while( have_rows('legal_proceedings_section') ) : the_row();
        $feature_decs3 = get_sub_field('feature_desc3');
        ?>
                <li><span class="hand-icon"><i class="fa-regular fa-hand-point-right"></i></span><?php echo $feature_decs3   ?></li>
                
                <?php
              endwhile;
              endif;
              ?>
              </ul>
              <p><b><?php the_field('transfer_in_the_event_of_sale_or_change_of_control')?></b>  <?php the_field('_if_the_ownership_of_')?></p>
        </div>
        <div class="inner-policy-data">
        <?php
        if( have_rows('information_section') ):
        while( have_rows('information_section') ) : the_row();
        $information_section_title = get_sub_field('information_section_title');
        $information_section_description = get_sub_field('information_section_description');
        ?>
          <h4><?php echo $information_section_title ?></h4>
          <p><?php echo $information_section_description ?></p>
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
            <h2><span><?php the_field('we_would_love_to_be_in_touch_with_you!')?></span><?php the_field('signup')?></h2>
            <div class="con-add-box">
              <div class="call-box" data-aos="fade-right">
              <div class="call-img">
                <!-- <img src="images/pc-icon.png" class="img-fluid" alt="pc-icon"> -->
                <?php echo "<img src=".get_field('call_u_on_image')." class='img-fluid' alt='pc-icon'>" ?>
              </div>
              <div class="c-u-o">
                <h4><?php the_field('call_us_on')?></h4>
                <p><?php the_field('call_us_on_description')?></p>
              </div>
            </div>
            <div class="call-box" data-aos="fade-left">
              <div class="call-img">
                <!-- <img src="images/m-icon.png" class="img-fluid" alt="pc-icon"> -->
                <?php echo "<img src=".get_field('mail_image')." class='img-fluid' alt='pc-icon'>" ?>
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