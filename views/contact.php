<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Contact us today to learn about sober living and halfway house availability.">
    <meta name="author" content="TNT Sober Living">

    <title>Hickory House Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assetts/css/bootstrap.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/assetts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="/assetts/css/style.css" rel="stylesheet">

  </head>

  <?php include_once('../templates/navbar.html'); ?>

  <!-- Page Content -->
  <div class="container content-start">

    <!-- Content Row -->
    <div class="row">

      <header class="contact-page-header">
        <h1>Have Questions About Sober Living?</h1>
        <p>Our sober living homes are settled in a quiet, residential neighborhood in Port St. Lucie, Florida. TNT Housing is in close proximity to jobs, stores, public transportation, local 12 Step Meetings and the beach. Contact us today for more information, to schedule a tour, or to reserve your spot at TNT Housing for men. We are here to help and available 24/7.</p>
      </header>
      <div class="col-md-8">
        <div class="well bs-component contact-well-div">

          <form class="form-horizontal" name="sentMessage" id="contactForm" novalidate>
            <fieldset>
              <legend>Send Us A Message</legend>
              <div class="form-group">
                <label for="name" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="name" placeholder="Name"
                         data-validation-required-message="Please enter your name." required autofocus>
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="form-group">
                <label for="email" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                  <input type="email" class="form-control" id="email" placeholder="Password" 
                         data-validation-required-message="Please enter your email address." required>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="emailPreference"> I prefer to be contacted by email
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="phone" class="col-lg-2 control-label">Telephone</label>
                <div class="col-lg-10">
                  <input type="tel" class="form-control" id="phone" placeholder="Telephone"
                         data-validation-required-message="Please enter your phone number." required>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="telephonePreference"> I prefer to be contacted by telephone
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Message</label>
                <div class="col-lg-10">
                  <textarea rows="4" class="form-control" placeholder="Leave a detailed message..." id="message"
                            data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" required></textarea>
                </div>
              </div>
              <div id="success"></div>
              <div class="form-group">
                <div class="col-lg-10 text-center">
                  <button id="contactFormSubmitButton" type="submit" class="btn btn-primary">
                    <i class="fa fa-paper-plane-o" aria-hidden="true"></i>Send Message</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>


      <!-- Contact Details Column -->
      <div class="col-md-4 col-md-offset-0 col-sm-offset-2">
        <div class="contact-info-div">
          <h3>Contact Details</h3>
          <p><i class="fa fa-phone"></i> 
            <abbr title="Phone">P</abbr>: (123) 456-7890</p>
          <p><i class="fa fa-envelope-o"></i> 
            <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>
          </p>
          <p><i class="fa fa-clock-o"></i> 
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
        </div>
        <map class="contact-page-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227090.65366211746!2d-80.44327444554888!3d27.209997512037038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88deeaeff6c50ead%3A0xf44a54f9de7e10e0!2sPort+St+Lucie%2C+FL!5e0!3m2!1sen!2sus!4v1489890207315" width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" ></iframe>
        </map>
      </div>


    </div>

  </div>
  <!-- /.container -->
  
  <?php require_once('../templates/footer.html'); ?>

  <!-- jQuery -->
  <script src="/assetts/js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="/assetts/js/bootstrap.min.js"></script>
  <!-- Contact Form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="/assetts/js/jqBootstrapValidation.js"></script>
  <script src="/assetts/js/contact_me.js"></script>
  </body>

</html>
