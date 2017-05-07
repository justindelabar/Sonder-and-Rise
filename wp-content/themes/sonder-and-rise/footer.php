   </div><!-- /.container -->

    <footer>

    <section id="nav-follow">

        <div class="footer-nav col-lg-5 col-md-6 col-sm-4 col-xs-12">
            <ul>
              <li><a href="/" title="Return to Home">Home</a></li>
              <?php wp_list_pages( '&title_li='); ?>
            </ul>
        </div>

        <div id="newsletter-signup" class="col-lg-4 col-md-5 col-sm-7 col-xs-12 pull-right">

          <h3>Get Notified About Updates</h3>
          <!-- Begin MailChimp Signup Form -->
            <form action="//sonderandrise.us12.list-manage.com/subscribe/post?u=e4292ab8391ea933674ae7218&amp;id=6e582ac987" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
              

            <div class="mc-field-group">
             
              <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter Your Email Address">
            </div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_e4292ab8391ea933674ae7218_6e582ac987" tabindex="-1" value="" class="email-form"></div>
                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" onClick="ga('send', 'event', 'Email', 'Subscribe', 'Launch notification');"></div>
                </div>
            </form>
            </div>
            <!--End mc_embed_signup-->
        </div>

       
        <div id="social-follow" class="col-lg-2 col-md-12 col-sm-12">

          <a href="https://twitter.com/sonderandrise" target="_blank" title="Link to the Sonder and Rise Twitter account"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
           <a href="/rss/"><i class="fa fa-rss"></i></a>

        </div>

         


        <div class="clearfix"></div>

      </section>

      <section id="siteinfo">

      &copy; 2016 Sonder &amp; Rise &mdash; Made with  <span class="glyphicon glyphicon-heart"></span> in Cincinnati &mdash;
      <a href="https://twitter.com/search?q=%23startupcincy&src=tyah" target="_blank" title="StartupCincy tweets on Twitter">#StartupCincy</a>

      </section>



    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<script>
$(document).ready(function(){
  $('.nav-btn').click(function(){
    $(this).toggleClass('open');
  });
});
</script>
    <?php wp_footer(); ?> 
  </body>
  </html>
