<?php
/* Template Name: tms2    */



get_header();


?>
<section class="main-tms-banner" style="background-image:url('<?php echo get_stylesheet_directory_uri() ?>/images/banner-bg.png');">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="inner-banner-img text-center">
              <!-- <img src="images/banner-img.png" class="img-fluid" alt="banner-img"> -->
              <?php echo "<img src=". get_field('banner_image') ." class='img-fluid' alt='banner-img'>" ?>
            </div>
          </div>
          <div class="col-12">
            <div class="scroll-down-btn text-center">
              <a href="javascript:;" class="down-scroll"><?php the_field('scroll_down')?> <span class="d-ar-i"><i class="fa-solid fa-arrow-down"></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="main-why-tms">
      <div class="why-tms-heading text-center">
              <h2><?php the_field('why_tms')?></h2>
            </div>
      <div class="why-tms-bg">
        <!-- <img src="images/why-tms-bg.png" class="img-fluid" alt="why-tms-bg"> -->
        <?php echo "<img src=".get_field('why-tms-bg')." class='img-fluid' alt='why-tms-bg'>"?>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            
          </div>
        </div>
        <div class="inner-why-tms">
          <div class="why-tms-img">
            <!-- <img src="images/why-tms-img.png" class="img-fluid" alt="why-tms-img"> -->
            <?php echo "<img src=".get_field('why-tms-img')." class='img-fluid' alt='why-tms-bg'>"?>
          </div>
        </div>
        <div class="why-tms-content">
          <div class="left-why-tms">
            <div class="fleet">
              <div class="fleet-text">
                <h6><?php the_field('fleet_optimizationtitle')?></h6>
                <p><?php the_field('fleet_optimizationdesc')?></p>
              </div>
              <div class="tms-icon">
                <!-- <span class="tmms-icon-img"><img src="images./tms-3.png" class="img-fluid" alt="tms-1"></span> -->
                <span class="tmms-icon-img"> <?php echo "<img src=".get_field('fleet_optimizationimg') ." class='img-fluid' alt='tms-1'>"?></span>
              </div>
            </div>
            <div class="Real-time">
              <div class="fleet-text">
                <h6><?php the_field('real-time_trackingtitle')?></h6>
                <p><?php the_field('real-time_trackingdesc')?></p>
              </div>
              <div class="tms-icon">
                <!-- <span class="tmms-icon-img"><img src="images./tms-2.png" class="img-fluid" alt="tms-2"></span> -->
                <span class="tmms-icon-img"> <?php echo "<img src=".get_field('real-time_trackingimg') ." class='img-fluid' alt='tms-2'>"?></span>
              </div>
            </div>
            <div class="Enhanced">
              <div class="fleet-text">
                <h6><?php the_field('enhanced_efficiencytitle')?></h6>
                <p><?php the_field('enhanced_efficiencydesc')?></p>
              </div>
              <div class="tms-icon">
                <!-- <span class="tmms-icon-img"><img src="images./tms-1.png" class="img-fluid" alt="tms-3"></span> -->
                <span class="tmms-icon-img"> <?php echo "<img src=".get_field('enhanced_efficiencyimg') ." class='img-fluid' alt='tms-3'>"?></span>
              </div>
            </div>
          </div>
          <div class="right-why-tms">
            <div class="Compliance">
               <div class="tms-icon">
                <!-- <span class="tmms-icon-img"><img src="images./tms-4.png" class="img-fluid" alt="tms-4"></span> -->
                <span class="tmms-icon-img"> <?php echo "<img src=".get_field('_compliance_managementiimgs') ." class='img-fluid' alt='tms-4'>"?></span>
              </div>
              <div class="fleet-text">
                <h6><?php the_field('_compliance_managementtitle')?></h6>
                <p><?php the_field('_compliance_managementdesc')?></p>
              </div>
            </div>
            <div class="Proactive">
              <div class="tms-icon">
                <!-- <span class="tmms-icon-img"><img src="images./tms-5.png" class="img-fluid" alt="tms-5"></span> -->
                <span class="tmms-icon-img"> <?php echo "<img src=".get_field('proactive_maintenanceimg') ." class='img-fluid' alt='tms-5'>"?></span>
              </div>
              <div class="fleet-text">
                <h6><?php the_field('proactive_maintenancetitle')?></h6>
                <p><?php the_field('proactive_maintenancedesc')?></p>
              </div>
              
            </div>
            <div class="Data-driven">
              <div class="tms-icon">
                <!-- <span class="tmms-icon-img"><img src="images./tms-6.png" class="img-fluid" alt="tms-6"></span> -->
                <span class="tmms-icon-img"> <?php echo "<img src=".get_field('_data-driven_insightsimgs') ." class='img-fluid' alt='tms-6'>"?></span>
              </div>
              </div>
              <div class="fleet-text">
                <h6><?php the_field('_data-driven_insightstitle')?></h6>
                <p><?php the_field('_data-driven_insightsdesc')?></p>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>  
    <section class="how-rigbot">
        <div class="how-rigbot-heading why-tms-heading text-center">
          <h2><?php the_field('how_rigbot_tms_works')?></h2>
        </div>
        <div class="main-load-entry">
          <div class="camera-img">
            <!-- <img src="images/cam-img.png" class="img-fluid" alt="cam-img"> -->
                <?php echo "<img src=". get_field('camimage') ." class='img-fluid' alt='cam-img'>" ?>
          </div>
          <div class="entry-box">
            <!-- <img src="images/angle.png" class="img-fluid" alt="angle"> -->
            <?php echo "<img src=".get_field('angleimage')." class='img-fluid' alt='angle'>"?>
            <h3><?php the_field('load_entry')?></h3>
          </div>
          <div class="container">
            <div class="row align-items-center autometd-load">
              <div class="col-lg-6">
                <div class="left-load-text">
                  <h4><?php echo get_field('automated_load')?></h4>
                  <p><?php the_field('simplify_load')?></p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="right-load-col">
                  <!-- <img src="images/load-img.png" class="img-fluid" alt="load-img"> -->
                  <?php echo "<img src=".get_field('load-img')." class='img-fluid' alt='load-img'>"?>
                 <div class="main-get-fill">
                    <div class="get-t-i detect">
                      <div class="inn-get-t-i">
                        <p><?php the_field('get_the_image')?></p>
                      </div>
                      <div class="auto-detect">
                        <p><?php the_field('auto_detect')?></p>
                      </div>
                    </div>
                  <div class="get-t-i fill">
                      <div class="inn-get-t-i">
                        <p><?php the_field('fill_the_form')?></p>
                      </div>
                      <div class="auto-detect">
                        <p><?php the_field('auto_fill')?></p>
                      </div>
                  </div>
                 </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="main-assign-load">
            <div class="entry-box assign-load">
              <!-- <img src="images/angle.png" class="img-fluid" alt="angle"> -->
              <?php echo "<img src=".get_field('angle_image')." class='img-fluid' alt='angle'>"?>
              <h3><?php the_field('assign_load')?></h3>
            </div>
            <div class="container">
              <div class="row align-items-center inn-assign-load">

              <?php
              $hero = get_field('assign_load_to_driver_group_section');

              ?>
                <div class="col-lg-7">
                  <div class="assi-loa-left">
                    <div class="asi-pic">
                      <!-- <img src="images/as-left-img.png" class="img-fluid" as-lo-img> -->
                      <img src="<?php echo esc_url( $hero['as-left-img']); ?>" class='img-fluid' as-lo-img/>
                    </div>
                   
                  </div>
                </div>
                <div class="col-lg-5">
                  <div class="right-assign-load">
                    <div class="high-as-load-content">
                      <h2><?php echo esc_attr( $hero['not_just_an_excel_shee'] ); ?></h2>
                    </div>
                    <h4><?php echo esc_attr( $hero['assign_load_to_driver_'] ); ?></h4>
                    <ul>
                      <li><?php echo esc_attr( $hero['optimize_load_'] ); ?> </li>
                      <li><?php echo esc_attr( $hero['instant_notifications'] ); ?></li>
                    </ul>
                  </div>
                </div>


              </div>
              <div class="row asssi-bottom-img">
<?php
if( have_rows('bottom-img__secton') ):
  while( have_rows('bottom-img__secton') ) : the_row();
  $assign_image = get_sub_field('assign_img');
?>

                <div class="col-md-6 col-lg-3">
                  <div class="inn-bot-img">
                    <img src="<?php echo $assign_image  ?>" class="img-fluid" alt="assign-lo-1">
                  </div>
                </div>

<?php
endwhile;
endif;
?>
              </div>
            </div>
          </div>
          <div class="main-doc-exchange">
            <div class="entry-box doc-exchange">
              <!-- <img src="images/angle-2.png" class="img-fluid" alt="angle"> -->
              <?php echo "<img src=". get_field('angle-2')." class='img-fluid' alt='angle'>"?>
              <h3><?php the_field('document_exchange')?></h3>
            </div>
            <div class="container">
               <div class="row inner-doc-exchange">
              <div class="col-lg-6">
                <div class="left-doc-exc">
                  <h4>Easy Documentation | Comprehensive Document Management</h4>
                  <ul>
                    <?php
                  if( have_rows('easy_documentation_section') ):
                  while( have_rows('easy_documentation_section') ) : the_row();
                  $easy_documentation_title = get_sub_field('easy_documentation_title');
                  $easy_documentation_description = get_sub_field('easy_documentation_description');
                    ?>
                    <li>
                      <b><?php echo $easy_documentation_title  ?></b> <?php echo $easy_documentation_description ?>
                  </li>
                    <?php
                    endwhile;
                  endif;
                  ?>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="easy-doc-manage">
                  <div class="right-doc-exc">
                  <div class="rep-formate">
                    <h4><?php echo get_field('report_format')?></h4>
                    <div class="radio-format">
                      <div class="form-check">
                          <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>CSV
                          <label class="form-check-label" for="radio1"></label>
                        </div>
                        <div class="form-check">
                          <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">PDF
                          <label class="form-check-label" for="radio2"></label>
                        </div>
                    </div>
                    <div class="both-btn-doc-sec">
                      <a href="javascript:;">Generate Report</a>
                      <a href="javascript:;">Download PDF</a>
                    </div>
                  </div>
                </div>
                <div class="doc-mob-right">
                  <!-- <img src="images/doc-mob.png" class="img-fluid" alt="doc-mob"> -->
                  <?php echo "<img src=".get_field('doc-mob')." class='img-fluid' alt='doc-mob'>"?>
                </div>
                </div>
              </div>
            </div>
            </div>
          </div>
         <div class="main-status-up">
              <div class="entry-box status-up">
              <!-- <img src="images/angle.png" class="img-fluid" alt="angle"> -->
              <?php echo "<img src=".get_field('angle_image2')." class='img-fluid' alt='angle'>"?>
              <h3><?php the_field('status_update')?></h3>
            </div>
            <div class="container">
              <div class="row align-items-center status-seemless-main">
                <div class="col-lg-6">
                  <div class="status-seemless-left">
                    <!-- <img src="images/loadplans.png" class="img-fluid" alt="loadplans"> -->
                    <?php echo "<img src=".get_field('loadplans_imag1')." class='img-fluid' alt='loadplans'>"?>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="status-seemless-right">
                    <h4><?php echo get_field('seamless_load')?></h4>
                    <ul class="inn-s-l">
                      <?php
                      if( have_rows('seamless_load_section_repeater') ):
                        while( have_rows('seamless_load_section_repeater') ) : the_row();
                        $seamless_load_title=get_sub_field('seamless_load_title');
                        $seamless_load_desc=get_sub_field('seamless_load_desc');
                      ?>
                      <li><b><?php echo $seamless_load_title ?></b><?php echo $seamless_load_desc ?></li>
                      <?php
endwhile;
else:
  echo "no record found";
endif;
                      ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
         </div>
         <div class="delivered-btn">
           <a href="javascript:;">Delivered</a>
         </div>
    </section>
    <section class="limitted-offer">
      <div class="container">
        <div class="row align-items-center bg-li-offer">
          <div class="col-lg-7">
            <div class="offer-left-video">
              <!-- <img src="images/video-img.png" class="img-fluid" alt="video-img"> -->
              <?php echo "<img src=". get_field('video_img')." class='img-fluid' alt='video-img'>"?>
              <div class="video-icon">
                <span class="play-icon"><i class="fa-regular fa-circle-play"></i></span>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="offer-right-text">
              <ul>
                <?php
                if( have_rows('lorem_ipsum_section_reppeater') ):
                  while( have_rows('lorem_ipsum_section_reppeater') ) : the_row();
                  $lorem_ipsum = get_sub_field('lorem_ipsum');
                ?>
                <li><span class="check-icon"><i class="fa-solid fa-circle-check"></i></span> <?php echo $lorem_ipsum ?>
                <?php
                endwhile;
              endif;
                ?>
              </ul>
            </div>
          </div>
        </div> 
        <div class="row align-items-center animated-text bg-li-offer">
          <div class="discount-img">
            <!-- <img src="images/discount.png" class="img-fluid" alt="discount"> -->
            <?php echo "<img src=". get_field('discount_image')." class='img-fluid' alt='discount'>"?>
          </div>
          <div class="col-lg-7">
            <div class="left-animated-content">
              <h2><?php echo get_field('animated_text_here')?></h2>
            </div>
            <div class="ani-angle">
              <!-- <img src="images/animated-angle.png" class="img-fluid" alt="animated-angle"> -->
              <?php echo "<img src=". get_field('animated-angle-image')." class='img-fluid' alt='animated-angle'>"?>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="right-animated-content">
              <h4><?php echo get_field('limited_offers') ?> </h4>
              <div class="r-m-btn">
                <a href="javascript:;" class="read-more"><?php the_field('schedule_a_dem0')?><span class="right-icon"><i class="fa-solid fa-arrow-right"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="main-cust-fleet">
      <div class="inner-fleet">
        <div class="left-tab-fleet">

          <div class="d-flex align-items-center justify-content-end main-tab">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><span class="custom-circle "></span><?php the_field('a_broker_carriers')?></button>
              <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span class="custom-circle"></span><?php the_field('large_carriers')?></button>
              <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><span class="custom-circle"></span><?php the_field('small_carriers')?></button>
               
            </div>
            
          </div>
        </div>
        <div class="right-tab-data">
          <div class="tab-content" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <h4><?php the_field('customized_for_your_fleet')?></h4>
                <div class="row inner-data-fleet">   
                      <?php
                          if( have_rows('_broker_carriers_section_repaeter') ):
                            while( have_rows('_broker_carriers_section_repaeter') ) : the_row();
                            $brokern_carriers_title = get_sub_field('brokern_carriers_title');
                            $broken_carries_description = get_sub_field('broken_carries_description');
                            $broken_carriers_image = get_sub_field('broken_carriers_image');
                                          ?>            
                  <div class="col-lg-6">                 
                    <div class="left-d-detail">                    
                      <div class="car-del">
                        <img src="<?php echo $broken_carriers_image ?>" class="img-fluid" alt="cd">
                        <div class="left-cd-t">
                          <h5><?php echo $brokern_carriers_title ?></h5>
                          <p><?php echo $broken_carries_description?></p>
                        </div>
                      </div>
                    </div>                  
                  </div>                
                      <?php
                            endwhile;
                            endif;
                            ?>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"><h4>Customized for your Fleet</h4>
                <div class="row inner-data-fleet">
                      <?php
                                if( have_rows('_broker_carriers_section_repaeter2') ):
                                  while( have_rows('_broker_carriers_section_repaeter2') ) : the_row();
                                  $brokern_carriers_title2 = get_sub_field('brokern_carriers_title2');
                                  $broken_carries_description2 = get_sub_field('broken_carries_description2');
                                  $broken_carriers_image2=get_sub_field('broken_carriers_image2');
                            ?>
                          
                  <div class="col-lg-6">                        
                     <div class="left-d-detail">
                      <div class="car-del">
                        <img src="<?php echo $broken_carriers_image2 ?>" class="img-fluid" alt="ls">
                        <div class="left-cd-t">
                          <h5><?php echo $brokern_carriers_title2 ?></h5>
                          <p><?php echo $broken_carries_description2 ?></p>
                        </div>
                      </div>
                    </div>                       
                  </div>
                  <?php
                        endwhile;
                      endif;
                        ?>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><h4>Customized for your Fleet</h4>
                <div class="row inner-data-fleet">
                  <?php
                  if( have_rows('_broker_carriers_section_repaeter3') ):
                    while( have_rows('_broker_carriers_section_repaeter3') ) : the_row();
                    $brokern_carriers_title3 = get_sub_field('brokern_carriers_title3');
                    $broken_carries_description3 = get_sub_field('broken_carries_description3');
                    $broken_carriers_image3 = get_sub_field('broken_carriers_image3');
                    ?>
                  <div class="col-lg-6">
                    <div class="left-d-detail">
                      <div class="car-del">
                        <img src="<?php echo $broken_carriers_image3 ?>" class="img-fluid" alt="arc">
                        <div class="left-cd-t">
                          <h5><?php echo $brokern_carriers_title3 ?></h5>
                          <p><?php echo $broken_carries_description3 ?></p>
                        </div>
                      </div>                                                         
                    </div>
                  </div>
                 <?php
                  endwhile;
                else :
                  echo "no record found";
                  endif;
                 ?>
                </div>
              </div>
               
            </div>
        </div>
      </div>
    </section>
    <section class="testimonial py-100">
      <div class="container546y">
        <div class="testi-slider">
          <div class="row">
            <div class="col-lg-4">
              <div class="testi-header" data-aos="fade-down">
                <h2><?php the_field('testimonials_title')?></h2>
                <p><?php the_field('hear_what_our_client_says_about_us')?></p>
                <div class="arrow-btn">
                  <!-- <img src="images/left-arrow.png" class="left-arrow-cion img-fluid" alt="left-arrow"> -->
                  <?php echo "<img src=".get_field('left_arrow_image')." class='left-arrow-cion img-fluid' alt='left-arrow'>"?>
                  <?php echo "<img src=".get_field('right_arrow_image')." class='right-arrow-cion img-fluid' alt='left-arrow'>"?>
                  <!-- <img src="images/right-arrow.png" class="right-arrow-cion img-fluid" alt="left-arrow"> -->
                </div>
              </div>
            </div>
            <div class="col-lg-8">
                    <div class="t-main-test">
            <div class="client-slide">
              <?php

              if (have_rows('testimonialsloop_section')):
                while (have_rows('testimonialsloop_section')) : the_row();
                  $client_image = get_sub_field('client_image');
                  $client_testimonial = get_sub_field('client_testimonial');
                  $client_name = get_sub_field('client_name');
                  $client_designation = get_sub_field('client_designation');
                  ?>
      
                <div class="slider-box">
                  <img src="<?php echo $client_image ?>" class='img-fluid' alt="client" >
                  <p><?php echo $client_testimonial ?></p>
                  <div class="rating">
                    <?php
                  $rating = get_sub_field('testimonial_rating');
                  for($i=1;$i<=5;$i++){
                    if($i<=$rating){
                      $star_class='fa-solid fa-star';
                    }
                    else{
                      $star_class='fa-regular fa-star';
                    }
                    echo "<span><i class='$star_class'></i></span>";
                  }
                  ?>
                  </div>
                  <div class="client-detail">
                    <h6><?php echo $client_name ?></h6>
                    <p><?php echo $client_designation ?></p>
                  </div>
                </div>
              <?php
              endwhile;
              else:
                echo"no record found";
              endif;
              ?>
              </div>
           </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-form">
      <div class="container">
        <div class="row align-items-center">
           <div class="col-lg-5">
          <div class="form-content" data-aos="fade-right">
            <h2><span><?php echo get_field('')?></span><?php echo get_field('')?></h2>
            <div class="con-add-box">
              <div class="call-box" data-aos="fade-right">
              <div class="call-img">
                <!-- <img src="images/pc-icon.png" class="img-fluid" alt="pc-icon"> -->
                <?php echo "<img src=". get_field('pc-icon_image')." class='img-fluid' alt='pc-icon'>" ?>
              </div>
              <div class="c-u-o">
                <h4><?php echo get_field('call_us_on')?></h4>
                <p><?php echo get_field('call_us_on_number')?></p>
              </div>
            </div>
            <div class="call-box" data-aos="fade-left">
              <div class="call-img">
                <!-- <img src="images/m-icon.png" class="img-fluid" alt="pc-icon"> -->
                <?php echo "<img src=". get_field('m-icon-image')." class='img-fluid' alt='pc-icon'>" ?>
              </div>
              <div class="c-u-o">
                <h4><?php the_field('mail_to')?></h4>
                <p><a href="mailto:contactus@rigbot.com"><?php echo get_field('mail_email')?></a></p>
              </div>
            </div>
            </div>
            <div class="cont-btn" data-aos="fade-down">
              <a href="javascript:;" class="c-u-now"><?php echo get_field('mail_email')?><span><i class="fa-solid fa-arrow-down"></i></span></a>
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
    <section class="FAQ">
   <div class="container">
      <div class="faq-inner text-center">
         <h2><?php the_field('frequently_asked_questions')?></h2>
      </div>
      <div class="accordion" id="accordionExample">
         <?php
         if (have_rows('frequently_asked_questions_section')) :
            $faq_counter = 1;
            while (have_rows('frequently_asked_questions_section')) : the_row();
               $question = get_sub_field('question');
               $answer = get_sub_field('answer');
               ?>
               <div class="accordion-item">
                  <h2 class="accordion-header" id="heading">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $faq_counter; ?>" aria-expanded="true" aria-controls="collapse<?php echo $faq_counter; ?>">
                     <?php echo  $question; ?>
                     </button>
                  </h2>
                  <div id="collapse<?php echo $faq_counter; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $faq_counter; ?>" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p><?php echo $answer; ?></p>
                     </div>
                  </div>
               </div>
               <?php
               $faq_counter++;
            endwhile;
         endif;
         ?>
      </div>
   </div>
</section>


<?php
get_footer();
?>