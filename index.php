
  <?php include 'header.php'; ?>
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider">
      <div class="container-fluid p-0">

      <!-- Slider Revolution Start -->
<?php include 'slider.php'; ?>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider").revolution({
              sliderType:"standard",
              sliderLayout: "fullscreen",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                  arrows: {
                      style: "gyges",
                      enable: true,
                      hide_onmobile: false,
                      hide_onleave: true,
                      hide_delay: 200,
                      hide_delay_mobile: 1200,
                      tmp: '',
                      left: {
                          h_align: "left",
                          v_align: "center",
                          h_offset: 0,
                          v_offset: 0
                      },
                      right: {
                          h_align: "right",
                          v_align: "center",
                          h_offset: 0,
                          v_offset: 0
                      }
                  },
                  bullets: {
                      enable: true,
                      hide_onmobile: true,
                      hide_under: 800,
                      style: "hebe",
                      hide_onleave: false,
                      direction: "horizontal",
                      h_align: "center",
                      v_align: "bottom",
                      h_offset: 0,
                      v_offset: 30,
                      space: 5,
                      tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                  }
              },
              responsiveLevels: [1240, 1024, 778, 480],
              visibilityLevels: [1240, 1024, 778, 480],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [550, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->

      </div>
    </section>
    
    <!-- divider: Emergency Services -->
    <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.2"  data-bg-img="images/bg/bg2.jpg">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h3 class="mt-0">How you can help us</h3>
              <h2>Just call at <span class="text-theme-colored">+(237) 677201621</span> to make a donation</h2>
            </div>
          </div>
        </div>
      </div>      
    </section>
    
    <!-- Section: Causes -->
    <section id="causes">
      <div class="container pb-80">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-uppercase mt-0">Welcome To Hotpec Orphanage</h3>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>            </div>
          </div>
        </div>
  
      </div>
    </section>
    

    

    <!-- Section: featured project -->
    <section class="bg-lightest">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4 wow fadeInLeft animation-delay6">
                    <h4 class="text-uppercase line-bottom mt-0">Featured Projects</h4>
            <div class="volunteer-wrapper border-bottom sm-maxwidth500 clearfix pb-15 mb-sm-30">
              <div class="fluid-video-wrapper">
                <img src="cha/63.jpg">
              </div>
              <p class="mb-10 mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi sunt illo, dolorum iste molestias.</p>
              <p>
                <a href="contact.php" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Join Us</a>
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 wow fadeInUp animation-delay6">
            <h4 class="text-uppercase line-bottom mt-0">Became a Volunteer</h4>
            <div class="volunteer-wrapper border-bottom sm-maxwidth500 clearfix pb-15 mb-sm-30">
              <div class="fluid-video-wrapper">
                <img src="cha/124.jpg">
              </div>
              <p class="mb-10 mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi sunt illo, dolorum iste molestias.</p>
              <p>
                <a href="volunteer.php" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Join Us</a>
              </p>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 wow fadeInRight animation-delay6">
             <h4 class="text-uppercase line-bottom mt-0">Our Activities</h4>
            <div class="volunteer-wrapper border-bottom sm-maxwidth500 clearfix pb-15 mb-sm-30">
              <div class="fluid-video-wrapper">
                <img src="cha/90.jpg">
              </div>
              <p class="mb-10 mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi sunt illo, dolorum iste molestias.</p>
              <p>
                <a href="contact.php" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Join Us</a>
              </p>
            </div>
        </div>
      </div>
    </section>
    
    <!-- Section: Causes -->
    <section> 
      <div class="container pb-80">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-uppercase mt-0">Our Causes</h3>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
              <div class="thumb">
                <img class="img-fullwidth" alt="" src="cha/1.jpg">
              </div>
              <div class="progress-item mt-0">
                <div class="progress mb-0">
                  <div class="progress-bar" data-percent="84"></div>
                </div>
              </div>
              <div class="causes-details clearfix border-bottom p-15 pt-10">
                <h5><a href="#">Sponsor a child today</a></h5>
                <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                <ul class="list-inline clearfix mt-20">
                 
                </ul>
                <div class="mt-10">
                 <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="donate.php">Donate</a>
              
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
              <div class="thumb">
                <img class="img-fullwidth" alt="" src="cha/14.jpg">
              </div>
              <div class="progress-item mt-0">
                <div class="progress mb-0">
                  <div class="progress-bar" data-percent="85"></div>
                </div>
              </div>
              <div class="causes-details clearfix border-bottom p-15 pt-10">
                <h5><a href="#">Sponsor a child today</a></h5>
                <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                <ul class="list-inline clearfix mt-20">

                </ul>
                <div class="mt-10">
                 <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="donate.php">Donate</a>
     
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
              <div class="thumb">
                <img class="img-fullwidth" alt="" src="cha/21.jpg">
              </div>
              <div class="progress-item mt-0">
                <div class="progress mb-0">
                  <div class="progress-bar" data-percent="86"></div>
                </div>
              </div>
              <div class="causes-details clearfix border-bottom p-15 pt-10">
                <h5><a href="#">Sponsor a child today</a></h5>
                <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                <ul class="list-inline clearfix mt-20">
     
                </ul>
                <div class="mt-10">
                 <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="donate.php">Donate</a>
           
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
              <div class="thumb">
                <img class="img-fullwidth" alt="" src="cha/12.jpg">
              </div>
              <div class="progress-item mt-0">
                <div class="progress mb-0">
                  <div class="progress-bar" data-percent="87"></div>
                </div>
              </div>
              <div class="causes-details clearfix border-bottom p-15 pt-10">
                <h5><a href="#">Sponsor a child today</a></h5>
                <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                <ul class="list-inline clearfix mt-20">
    
                </ul>
                <div class="mt-10">
                 <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="donate.php">Donate</a>
            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- divider: Donate Now -->
    <section id="donate-now" class="divider"  data-bg-img="images/bg/bg7.jpg">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-7">
            <div class="bg-light-transparent p-40">
              <h4 class="text-uppercase line-bottom">Make a Donation Now!</h4>
              
              <!-- Paypal Both Onetime/Recurring Form Starts -->
              <form id="paypal_donate_form_onetime_recurring">
                <div class="row">


                  <div class="col-md-12">
                    <div class="form-group mb-20">
     
                    </div>
                  </div>

                  <div class="col-sm-12" id="donation_type_choice">
     
                  </div>


                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <a class="btn btn-colored btn-flat btn-theme-colored mt-15" href="donate.php" >Donate Now</a>
                    </div>
                  </div>
                </div>
              </form>
              <!-- Paypal Both Onetime/Recurring Form Ends -->

            </div>
          </div>
          <div class="col-md-5">
          </div>
        </div>
      </div>
    </section>
    
    <!-- divider: Gallery -->
    <section class="divider bg-lighter">
      <div class="container-fluid">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-uppercase mt-0">Gallery</h3>
              <div class="title-icon">
                <i class="flaticon-charity-hand-holding-a-heart"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="gallery-isotope grid-5 gutter-small clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="cha/144.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="cha/144.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="cha/143.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="cha/143.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="cha/h4.JPG" class="img-fullwidth"> <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="cha/h4.JPG"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a> </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="cha/100.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="cha/100.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="cha/95.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="cha/95.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="cha/89.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="cha/89.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="cha/90.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="cha/90.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="cha/92.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="cha/92.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="cha/93.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="cha/93.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="cha/60.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="cha/60.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="cha/62.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="cha/62.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="cha/39.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="cha/39.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="cha/41.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="cha/41.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="cha/46.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="cha/46.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="cha/50.jpg" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-dark icon-circled icon-theme-colored">
                          <a href="cha/50.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: Testimonials and Logo -->
    <section class="divider parallax layer-overlay overlay-light" data-stellar-background-ratio="0.2" data-bg-img="images/bg/bg4.jpg">
      <div class="container pt-0 pb-0">
        <div class="row equal-height">
          <div class="col-md-7">
            <div class="display-table-parent pr-90 pl-90">
              <div class="display-table">
                <div class="display-table-cell">
                  <div class="clients text-center pt-30 pb-20 bg-lightest-transparent">
                    <div class="row">
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="images/clients/1.png" alt="" width="100" class="mb-10">
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="images/clients/2.png" alt="" width="100" class="mb-10">
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="images/clients/3.png" alt="" width="100" class="mb-10">
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="images/clients/4.png" alt="" width="100" class="mb-10">
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="images/clients/5.png" alt="" width="100" class="mb-10">
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-4">
                        <img src="images/clients/6.png" alt="" width="100" class="mb-10">
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  </div>                  
                  <div class="mt-30">
                    <h4 class="text-uppercase mb-5">Subscribe to our newsletter</h4>
                    <!-- Mailchimp Subscription Form-->
                    <form id="mailchimp-subscription-form" class="newsletter-form mt-10">
                      <label class="display-block" for="mce-EMAIL"></label>
                      <div class="input-group">
                        <input type="email" id="mce-EMAIL" data-height="43px" class="form-control input-lg" placeholder="Your Email" name="EMAIL" value="">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-flat btn-lg btn-colored btn-theme-colored m-0" data-height="43px">Subscribe</button>
                        </span>
                      </div>
                    </form>

                    <!-- Mailchimp Subscription Form Validation-->
                    <script type="text/javascript">
                      $('#mailchimp-subscription-form').ajaxChimp({
                          callback: mailChimpCallBack,
                          url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                      });

                      function mailChimpCallBack(resp) {
                          // Hide any previous response text
                          var $mailchimpform = $('#mailchimp-subscription-form'),
                              $response = '';
                          $mailchimpform.children(".alert").remove();
                          if (resp.result === 'success') {
                              $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                          } else if (resp.result === 'error') {
                              $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                          }
                          $mailchimpform.prepend($response);
                      }
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 bg-light-transparent">
            <div class="pt-50 pb-50 pl-20 pr-20">
              <h4 class="text-uppercase line-bottom mt-0">Our Donors Say</h4>
              <div class="testimonial-carousel owl-nav-top">
                <div class="item">
                  <div class="testimonial-wrapper text-center">
                    <div class="thumb"><img class="img-circle" alt="" src="images/testimonials/1.jpg"></div>
                    <div class="content pt-10">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                      <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                      <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                      <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-wrapper text-center">
                    <div class="thumb"><img class="img-circle" alt="" src="images/testimonials/2.jpg"></div>
                    <div class="content pt-10">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                      <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                      <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                      <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-wrapper text-center">
                    <div class="thumb"><img class="img-circle" alt="" src="images/testimonials/3.jpg"></div>
                    <div class="content pt-10">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque tincidunt adipiscing elit.</p>
                      <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                      <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                      <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

  </div>
  <!-- end main-content -->
  
 
    <!-- divider: Donate Now -->


    <!-- Section: Volunteer -->

    

    
    <!-- Section: News -->

  </div>
  <!-- end main-content -->
  
  <?php include 'footer.php'; ?>