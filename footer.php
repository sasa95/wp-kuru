      <footer id="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-5">
              <form action="#">
                <label for="#subscribe-email" class="subscribe-label">Be the first to know when a new item hits the shop or when a new video is uploaded.</label>
                <input type="email" class="form-control" id="subscribe-email" name="subscribe-email" placeholder="Your Email">
                <button type="submit" class="button button--dark-blue">Send</button>
              </form>
            </div>
            <div class="col-md-4 text-center">
              <p>Follow me on Instagram</p>
              <a href=""><img src="<?php bloginfo('stylesheet_directory');?>/img/instagram.png" alt=""></a>
            </div>
          </div>
          <p class="quote quote--footer" data-aos="fade" data-aos-offset="-10">You are My sight, so have faith. You are My Face, so veil yourself.</p>
          <div class="footer__last-line">
            <p class="copyright">© <?php echo date('Y');?> Lustrous Kaizen - All Rights Reserved</p>
            <p class="author">Website designed and developed by <a href="#"><strong>Sasha Drmic</strong></a></p>
          </div>
        </div>
      </footer><!-- #footer -->

    </div><!-- #wrapper -->
   <?php wp_footer();?>
  </body>
</html>