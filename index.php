<?php 
  get_header();
?>
  <body>
      <div class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title">Contact Us</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="contact-form" method="post" action="contact.php" role="form">
                <div class="messages"></div>
                <div class="controls">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_name">Name</label>
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_email">Email</label>
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" required="required" data-error="Email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="subject">Subject</label>
                              <input id="subject" type="text" name="subject" class="form-control" placeholder="Subject">
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                         <label for="form_message">Message</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required="required" data-error="Message is required."></textarea>
                              <div class="help-block with-errors"></div>
                        </div>
                  </div>
                  <div class="col-md-12">
                      <input type="submit" class="btn btn-success btn-send" value="Send Message">
                  </div>
                </div>
            </form>
              </div>
            </div>
          </div>
    </div>
    <main class="container mt-3 mb-4">
        <div class="container mb-2 text-center">
          <img width="350" class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/doggos-logo.png" />
        </div>
        <div id="slider" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/s1.png">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/s2.jpg">
            </div>        
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/s3.png">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/s4.jpg">
            </div>
             <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/s5.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/s6.jpg">
            </div>
             <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/s7.jpg">
            </div>
             <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/s8.jpg">
            </div>
             <div class="carousel-item">
              <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/s9.jpg">
            </div>
          </div>
          <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="container parchment pt-2 pb-2 mt-3 mb-3">
          <h2 class="text-center">Who We Are</h2>
          <p class="text-center">The Salty Sea Doggos are an Alliance guild on the Emerald Dream US realm in the CST time zone. Our tight knit community provides members an avenue to play and socialize in a safe environment free of toxic online behavior. The guild is structured with the best interest of its members in mind and backed by a strong officer core prepared to enforce our rules. We're proud of our guild and everything we've accomplished together. Many of us are very close friends and treat one another with respect regardless of age, sex, gender, religious beliefs, or differences in opinion.</p>
          <p class="text-center">All members old and new are expected to follow our rules and meet our standards. In doing so you will earn our respect, trust, and friendship.</p>
          <h2 class="text-center">What We Do</h2>
          <div class="row">
            <div class="col-md-3">
              <div class="doggos-ra text-center">
                  <i class="ra ra-octopus"></i>
              </div>
              <p class="text-center"><strong>Endgame Raiding</strong> <br /> We host two raid groups, each with its own goal: The progression team focuses on clearing the current heroic raid tier while the casual team teaches newer raiders the basics of raiding in a friendly learning environment.</p>
            </div>
            <div class="col-md-3">
              <div class="doggos-ra text-center">
                  <i class="ra ra-crossed-sabres"></i>
              </div>
              <p class="text-center"><strong>Player vs. Player</strong> <br /> Our casual PvP team does a variety of activities including normal and rated battlegrounds, dueling, World <a href="shrek.html" style="text-decoration : none; color : #000000;">P</a>vP, and more. Our team prides itself on maintaining a calm level headed attitude in all aspects of PvP, win or lose.</p>
            </div>
            <div class="col-md-3">
              <div class="doggos-ra text-center">
                <i class="ra ra-telescope"></i>
              </div>
              <p class="text-center"><strong>Roleplaying</strong> <br /> The RP division hosts whimsical pirate the<a href="area51/mags.html" style="text-decoration : none; color : #000000;">m</a>ed guild events for both veteran and newbie roleplayers willing to follow basic RP etiquette. Our roleplay is lighthearted, mischievous, and sometimes dramatic.</p>         
            </div>
            <div class="col-md-3">
                <div class="doggos-ra text-center">
                    <i class="ra ra-beer"></i>
                  </div>
                <p class="text-center"><strong>Social Events</strong> <br /> The So<a href="area51/sotn.html" style="text-decoration : none; color : #000000;">c</a>ial Events team hosts a variety of activities with the goal of encouraging members to interact outside of raiding, RP, or PvP. Events include transmog contests, writing prompts, movie nights, and screenshot contests.</p>    
            </div>
          </div>
          <br />
        </div>
        <div class="container parchment pt-2 pb-2 mt-3 mb-3">
          <div class="row">
              <div class="col-lg-6 col-md-12">
               <h2>How to Reach Us</h2>
                <div class="row porky p-1 pt-3 m-3">
                  <div class="col-md-12">
                  <button type="button" class="btn btn-primary porky-btn mb-2 mt-2" data-toggle="modal" data-target=".modal">Contact Form</button>
                    <br />
                    Direct E-mail: 
                    <br />
                    <a href="mailto:info@saltyseadoggos.com">info@saltyseadoggos.com</a>
                    <br />
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <h2>Captain's Log</h2>
                <a class="twitter-timeline" data-lang="en" data-width="700" data-height="450" data-link-color="#2B7BB9" href="https://twitter.com/PancakeMix85?ref_src=twsrc%5Etfw"></a>
              </div>
          </div>
        </div>
     </main>
<?php 
  get_footer();      
?>