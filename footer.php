</body>
<footer id="footer">
<?php if(!is_page("contact-us")&&!is_page("portfolio")){ ?>
    <div class="parallax">
        <div class="callme">
            <div class="callme__text">
                <span>Please Call anytime</span>
                <p>Tom Truong</p>
            </div>
            <div class="callme__phone">
                <p>Bus <a href="tel:+13037509752 ">303.750.9752</a></p>
                <p>
                    Cell<a style="margin-left: 4px" href="tel:+13037102213 ">303.710.2213</a
            >
          </p>
        </div>
      </div>
    </div>
    <div class="free-estimates">
      <div class="auto-container">
        <div class="box__model">
          <div class="box__model-top">
            <h3>Free Estimates</h3>
          </div>
          <div class="box__model-main">
            <ul>
              <li>Experienced</li>
              <li>References</li>
              <li>Dependable</li>
              <li>Licensed</li>
              <li>Bonded</li>
              <li>Insured</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
<?php }; ?>
    <div class="auto-container">
      <div class="footer__wrapper">
        <div class="footer__wrapper-social social-media collum-15">
        <?php dynamic_sidebar( 'social' ); ?>
            </div>

            <div class="footer__wrapper-copyright text-size collum-80">
                <p>
                    © Copyright 2020 Tom's Landscape & Maintenance. All Rights Reserved.
                </p>
            </div>

            <div class="footer__wrapper-gtg text-size collum-20">
                <p>
                    Created by
                    <a href="https://gtgplus.com/ " target="_blank ">GTG Marketing</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="<?php echo bloginfo('template_directory');?>/js/jquery-3.5.1.min.js "></script>
<script src="<?php echo bloginfo('template_directory');?>/js/jquery-migrate-1.4.1.min.js "></script>
<script src="<?php echo bloginfo('template_directory');?>/js/fancybox/dist/jquery.fancybox.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/js/plugin.js "></script>
<script src="<?php echo bloginfo('template_directory');?>/js/myscript.js "></script>
<?php wp_footer(); ?>
</html>