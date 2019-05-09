<?php ?>
    <footer class="container parchment pt-2 pb-2 mt-3 mb-3">
          <div class="row">
              <div class="col-lg-6 col-md-12">
               <h2>How to Reach Us</h2>
                <div class="row porky p-1 pt-3 m-3">
                  <div class="col-md-12">
                  <button type="button" class="btn btn-primary porky-btn mb-2 mt-2" data-toggle="modal" data-target="#footerform">Contact Form</button>
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
    </footer>
    <div class="modal" id="footerform" tabindex="-1" role="dialog">
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
    <div class="ultros">
    <img class="ultros-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/ultros.png">
    </div>
    <?php wp_footer(); ?>
    </body>
    </html>
<?php ?>