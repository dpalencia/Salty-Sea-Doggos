<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="css/rpg-awesome.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet"> 

    <!-- Font Awesome -->

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <title>Ahoy! Salty Sea Doggos!</title>
  </head>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#"><img class="text-left" width="75" height="75" src="img/icon.png" /> Salty Sea Doggos</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav text-right">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Art</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Story</a>
              </li>
          </ul>
        </div>
    </nav>
    <main class="container mt-3 mb-3">
        <div id="slider" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/s1.png">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/s2.jpg">
            </div>        
            <div class="carousel-item">
              <img class="d-block w-100" src="img/s3.png">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/s4.png">
            </div>
             <div class="carousel-item">
              <img class="d-block w-100" src="img/s5.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/s6.jpg">
            </div>
             <div class="carousel-item">
              <img class="d-block w-100" src="img/s7.jpg">
            </div>
             <div class="carousel-item">
              <img class="d-block w-100" src="img/s8.jpg">
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
          <h2><b>Who We Are</b></h2>
          <p>We are a Pirate themed semi-casual guild on the Emerald Dream US realm in the CST time zone. Our guild aims to be a welcoming place in which all members are provided an avenue to hang out and play together in a friendly and welcoming environment. We have been a community for 8+ years and see each other as family. We're a tight knit group so we expect newcomers to abide by our rules and treat everyone with respect.</p>
          <h3><b>What We Do</b></h3>
          <div class="row">
            <div class="col-md-3">
              <div class="doggos-ra">
                  <i class="ra ra-dragon-breath"></i>
              </div>
              <p><strong>Raiding:</strong> We host both a serious progression raid team with a focus on clearing current Heroic raid content and a casual raid team focused on clearing older easier content in a learning environment.</p>
            </div>
            <div class="col-md-3">
              <div class="doggos-ra">
                  <i class="ra ra-hammer-drop"></i>
              </div>
              <p><strong>Player VS. Player:</strong> Our PvP team runs casual RBGs, BGs, and World <a href="shrek.html" style="text-decoration : none; color : #000000;">P</a>vP. We are proud to present a level headed toxicity free environment when engaging in these activities, win or lose.</p>
            </div>
            <div class="col-md-3">
              <div class="doggos-ra">
                <i class="ra ra-book"></i>
              </div>
              <p><strong>Roleplaying:</strong> Our RP division hosts pirate the<a href="area51/mags.html" style="text-decoration : none; color : #000000;">m</a>ed guild events and frequently engages in walk-up RP out in the world. We are open to newcomers and veterans alike!</p>         
            </div>
            <div class="col-md-3">
                <div class="doggos-ra">
                    <i class="ra ra-speech-bubble"></i>
                  </div>
                <p><strong>Social Events:</strong> The events team hosts laid back community events such screenshot contests, transmog contests, movie nights, and more.</p>    
            </div>
          </div>
          <h3><b>What We Want From You</b></h3>
          <p> If you're fun, laid back, friendly, and willing to participate in guild a<a href="area51/sotn.html" style="text-decoration : none; color : #000000;">c</a>tivities then we'd love to hear from you!</p>
        </div>
        <div class="container parchment pt-2 pb-2 mt-3 mb-3">
          <div class="row">
              <div class="col-lg-6 col-md-12">
               <h2>Contact</h2>
                <div class="row porky p-1 pt-3 m-3">
                  <div class="col-md-12">
                    <strong>E-Mail Us Directly</strong> <br /> <a href="mailto:info@saltyseadoggos.com">info@saltyseadoggos.com</a>
                    <br />
                    <br />
                    <button type="button" class="btn btn-primary porky-btn" data-toggle="modal" data-target=".modal">Fill Out Our Contact Form</button>
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
     <div class="ultros">
          <img class="ultros-img" src="img/ultros.png">
     </div>
    <!-- Twitter Embed -->
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
    <!-- jQuery and Bootstrap -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/contact.js"></script>
  </body>
</html>