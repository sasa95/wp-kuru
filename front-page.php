<?php get_header(); ?>
	   <div id="content"><!-- #content -->
        <div class="container">
          <section class="who-am-i py-5" id="about">
            <h1 class="text-center mb-4 font-weight-normal">Who Am I?</h1>
            <p class="text-justify" data-aos="fade">Nomadic son of United States Marine and Kyokushinkai Practicioner. Descendant of the Bloodline of Ing. A true chosen brave. Shamanic seer, shadow walker, ancient sword seller, protector, gardener, and model for the fearsome and fearless.</p>
            <h2 class="signiture text-right" data-aos="fade" data-aos-delay="300">Kuru Sefu</h2>
          </section>
        </div>
         <section class="what-i-do py-5">
            <div class="container text-center">
              <h1 class="text-center mb-5 text-white font-weight-normal">What I Do?</h1>
              <div class="row">
                <div class="col-md-3">
                  <div class="what-i-do__item" data-aos="fade">
                    <img src="<?php bloginfo('stylesheet_directory');?>/img/what-i-do/training.png" alt="">
                    <h2 class="mt-3 text-white font-weight-normal">Training videos</h2>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="what-i-do__item" data-aos="fade">
                   <img src="<?php bloginfo('stylesheet_directory');?>/img/what-i-do/weapon.png" alt="">
                    <h2 class="mt-3 text-white font-weight-normal">Handmade weapons</h2>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="what-i-do__item" data-aos="fade">
                    <img src="<?php bloginfo('stylesheet_directory');?>/img/what-i-do/modeling.png" alt="">
                    <h2 class="mt-3 text-white font-weight-normal">Modeling</h2>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="what-i-do__item mb-0" data-aos="fade">
                   <img src="<?php bloginfo('stylesheet_directory');?>/img/what-i-do/inspiring.png" alt="">
                    <h2 class="mt-3 text-white font-weight-normal">Inspiring</h2>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="my-values py-5 text-center text-white">
            <h1 class="text-center mb-4 font-weight-normal">My Values</h1>
            <ol>
              <li data-aos="fade">Love</li>
              <li data-aos="fade">Truth</li>
              <li data-aos="fade">Faith</li>
              <li data-aos="fade">Selflessness</li>
              <li data-aos="fade">Patience</li>
              <li data-aos="fade">Hope</li>
              <li data-aos="fade">Braveness</li>
              <li data-aos="fade">Stubbornness</li>
            </ol>
          </section>
          <section class="contact-me py-5 text-white">
            <div class="container form-container">
              <h1 class="text-center mb-4 font-weight-normal">Contact Me</h1>
              <form>
                <div class="form-group row">
                  <label for="name" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="message" class="col-sm-2 col-form-label">Message</label>
                  <div class="col-sm-10">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="button button--elegant">Send</button>
                  </div>
                </div>
              </form>
            </div>
          </section>
      </div><!-- #content -->
<?php get_footer(); ?>