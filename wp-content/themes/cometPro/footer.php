<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package honeyHome
 */

      global $promasud;

?>


    
    <!-- Footer-->
    <footer id="footer-widgets">
      <div class="container">
        <div class="go-top">
          <a href="#top">
            <i class="ti-arrow-up"></i>
          </a>
        </div>
        <div class="row">
          <div class="col-md-6 ov-h">
            <div class="row">
              <div class="col-sm-4">
                <div class="widget">
                  <h6 class="upper">About Comet</h6>
                  <p>
                    <span>Fourth Floor</span>
                    <span>New York, NY 10011</span>
                    <span>hello@comet.com</span>
                  </p><a href="#" class="btn btn-color-out btn-sm">Hire Us!</a>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget">
                  <h6 class="upper">Culture</h6>
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">Team</a>
                    </li>
                    <li>
                      <a href="#">Process</a>
                    </li>
                    <li>
                      <a href="#">Story</a>
                    </li>
                    <li>
                      <a href="#">Careers</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget">
                  <h6 class="upper">Case Studies</h6>
                  <ul class="list-unstyled">
                    <li>
                      <a href="portfolio-single-1.html">Neleman Cava</a>
                    </li>
                    <li>
                      <a href="portfolio-single-2.html">Sweet Lane</a>
                    </li>
                    <li>
                      <a href="portfolio-single-3.html">Jeff Burger</a>
                    </li>
                    <li>
                      <a href="portfolio-single-1.html">Juice Meds</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-2">
            <div class="row">
              <div class="col-md-12">
                <div class="widget">
                  <h6 class="upper">Stay in touch</h6>
                  <p>Sign Up to get the latest updates.</p>
                  <div class="footer-newsletter">
                    <form data-mailchimp="true" class="inline-form">
                      <div class="input-group">
                        <input type="email" name="email" placeholder="Your Email" class="form-control"><span class="input-group-btn"><button type="submit" data-loading-text="Loading..." class="btn btn-color">Subscribe</button></span>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of row-->
      </div>
      <!-- end of container-->



    </footer>
    <footer id="footer">
      <div class="container">
        <div class="footer-wrap">
          <div class="row">
            <div class="col-md-4">
              <div class="copy-text">
                <?php if($promasud['fcs']) : ?>
                  <p><i class="icon-heart red mr-15"></i><?php echo($promasud['fcs']); ?></p>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-md-4">
              <ul class="list-inline">
                <li>
                  <a href="#">About</a>
                </li>
                <li>
                  <a href="#">Services</a>
                </li>
                <li>
                  <a href="#">Blog</a>
                </li>
                <li>
                  <a href="#">Contact</a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <div class="footer-social">
                <ul>

                  <?php if($promasud['fb']) : ?>
                  <li>
                    <a target="_blank" href="<?php echo esc_url($promasud['fb']); ?>"><i class="ti-facebook"></i></a>
                  </li>

                 <?php endif; ?>

                   <?php if($promasud['tw']) : ?>
                  <li>
                    <a target="_blank" href="<?php echo esc_url($promasud['tw']); ?>"><i class="ti-twitter-alt"></i></a>
                  </li>
                  <?php endif; ?>

                   <?php if($promasud['lin']) : ?>
                  <li>
                    <a target="_blank" href="<?php echo esc_url($promasud['lin']); ?>"><i class="ti-linkedin"></i></a>
                  </li>
                  <?php endif; ?>

                   <?php if($promasud['insta']) : ?>
                  <li>
                    <a target="_blank" href="<?php echo esc_url($promasud['insta']); ?>"><i class="ti-instagram"></i></a>
                  </li>
                  <?php endif; ?>

                   <?php if($promasud['dribee']) : ?>
                  <li>
                    <a target="_blank" href="<?php echo esc_url($promasud['dribee']); ?>"><i class="ti-dribbble"></i></a>
                  </li>
                  <?php endif; ?>


                </ul>
              </div>
            </div>
          </div>
          <!-- end of row-->
        </div>
      </div>
      <!-- end of container-->
    </footer>
    <!-- end of footer-->

    <?php wp_footer(); ?>
  </body>


<!-- Mirrored from themes.hody.co/html/comet/blog-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jan 2017 09:50:21 GMT -->
</html>
