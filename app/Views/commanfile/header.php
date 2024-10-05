<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Growapse Digital Growth Company - Training Development</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="<?= base_url() ?>/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>/css/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/css/bootstrap-icons.min.css" rel="stylesheet">

  <link href="<?= base_url() ?>/css/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo">
        <a href="<?= base_url() ?>"><img src="<?= base_url() ?>/img/logo.png" alt="logo"></a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="<?= base_url() ?>/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown">
            <a><span>Internship Programs</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li>
                <a href="<?= base_url('full-stack-development-internship') ?>">Full Stack Development</a>

              </li>
              <li>
                <a href="<?= base_url('digital-marketing-internship') ?>">Digital Marketing</a>
              </li>
            </ul>
          </li>
          <li><a class="nav-link" href="javascript:void(0)">Hire With Growapse</a></li>
          <li><a class="nav-link" href="<?= base_url() ?>about-us">About Growapse</a></li>
          <!-- <li><a class="getstarted" href="">Apply Now</a></li> -->
          <li><a class="apply-now" onclick="openPopup()">Apply Now <i class="bi-chevron-double-right"></i></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <?= $this->renderSection('content'); ?>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>GROWAPSE</h3>
            <p>
              76 Business Index, Makhmalabad Rd, <br>
              Janata Raja Colony, Nashik, <br>
              Maharashtra 422003 <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> growapse@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('') ?>">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('about-us') ?>">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('services') ?>">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('terms-of-service') ?>">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('privacy-policy') ?>">Privacy policy</a></li>
            </ul>
          </div>


          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li> <a href="<?= base_url('web-design') ?>">Web Design</a> </li>
              <li> <a href="<?= base_url('web-development') ?>">Web Development</a> </li>
              <li> <a href="<?= base_url('product-management') ?>">Product Management</a> </li>
              <li> <a href="<?= base_url('marketing') ?>">Marketing</a> </li>
              <li> <a href="<?= base_url('graphics-design') ?>">Graphic Design</a> </li>
            </ul>
          </div>
          
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>            
            <p>"Join Growpase Digital for innovative growth and collaboration."</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe"disabled>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Growapse</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
            Designed by <a href="https://Growapse.com/">Growapse</a>
          </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>
  <!-- Modal -->
  <div class="popup-overlay" id="popupOverlay">
    <div class="signup-content">
      <div class="signup-image">
        <figure><img src="<?= base_url() ?>img/3-steps.jpg" alt="3-steps register"></figure>
        <!-- <a href="#" class="signup-image-link">I am already member</a> -->
      </div>
      <div class="signup-form">
        <i class="bx bx-x" onclick="closePopup()"></i>
        <h2 class="form-title">Apply Now​​​​​​</h2>
        <form class="register-form" id="myForm">
          <div class="form-group">
            <label for="name"><i class="bx bx-user"></i></label>
            <input type="text" name="name" id="name" placeholder="Your Name" />
            <span id="name_error" style="color: red; "></span>
          </div>
          <div class="form-group">
            <label for="email"><i class="bx bx-mail-send"></i></label>
            <input type="email" name="email" id="email" placeholder="Your Email" />
            <span id="email_error" style="color: red;"></span>
          </div>
          <div class="form-group">
            <label for="phone"><i class="bx bxs-phone"></i></label>
            <input type="tel" name="phone" id="phone" placeholder="Your Phone" />
            <span id="phone_error" style="color: red;"></span>
          </div>
          <div class="form-group form-button">
            <button type="button" onclick="registration()" name="signup" id="signup" class="form-submit">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- Modal Structure -->
<div id="messageModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="modalMessage"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div id="messageBox" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 20px; background-color: white; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); border-radius: 5px; text-align: center; z-index: 9999; width: 300px;">
  <div id="messageContent" style="font-size: 16px; color: #333; margin-bottom: 20px;"></div>
  <button id="okButton" style="padding: 8px 16px; background-color: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer;">OK</button>
</div>

<!-- Hidden iframe for home page -->
<iframe id="homeIframe" src="<?= base_url() ?>" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 1000;"></iframe>

<!-- Registration form -->
<form id="myForm">
  <!-- Your registration form elements -->
</form>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>js/aos.js"></script>
  <script src="<?= base_url() ?>js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>js/swiper-bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
  $(document).ready(function() {
    // Add event listeners to input fields to clear error messages dynamically
    $('#name').on('input', function() {
      if ($(this).val() !== '') {
        $('#name_error').html(''); // Clear the error message if input is valid
      }
    });

    $('#email').on('input', function() {
      var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
      if (emailPattern.test($(this).val())) {
        $('#email_error').html(''); // Clear the error message if input is valid
      }
    });

    $('#phone').on('input', function() {
      var contactnoPattern = /^\d{10}$/;
      if (contactnoPattern.test($(this).val())) {
        $('#phone_error').html(''); // Clear the error message if input is valid
      }
    });

    // Handle the OK button click event for redirection
    $('#okButton').on('click', function() {
      window.location.href = '<?= base_url() ?>'; // Redirect to home page
    });
  });

  function registration() {
    var form = $('#myForm');
    var isValid = true;

    // Clear previous messages
    var name_error = $('#name_error');
    name_error.html('');

    var email_error = $('#email_error');
    email_error.html('');

    var phone_error = $('#phone_error');
    phone_error.html('');

    // Perform validation
    var name = $('#name').val(); // Get the value of the input
    if (name == '') {
      name_error.html('<div class="text-danger">Please Enter Your Full Name.</div>');
      isValid = false;
    }

    var email = $('#email').val(); // Get the value of the input
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (email == '') {
      email_error.html('<div class="text-danger">Enter your Valid Email</div>');
      isValid = false;
    } else if (!emailPattern.test(email)) {
      email_error.html('<div class="text-danger">Enter a valid email address</div>');
      isValid = false;
    }

    var phone = $('#phone').val(); // Get the value of the input
    var contactnoPattern = /^\d{10}$/; // This pattern assumes a 10-digit number
    if (phone == '') {
      phone_error.html('<div class="text-danger">Enter your Mobile No.</div>');
      isValid = false;
    } else if (!contactnoPattern.test(phone)) {
      phone_error.html('<div class="text-danger">Enter a valid 10-digit mobile number</div>');
      isValid = false;
    }

    if (isValid) {
      var formData = form.serialize();
      $.ajax({
        url: '<?= base_url() ?>enquiry',
        type: "POST",
        data: formData, // Send serialized form data
        dataType: "json",
        success: function(data) {
          var messageBox = $('#messageBox');
          var messageContent = $('#messageContent');
          var homeIframe = $('#homeIframe');
          var form = $('#myForm');

          if (data.status === true) {
            messageContent.html('<div class="text-success">' + data.message + '</div>');
            form.hide(); // Hide registration form
            homeIframe.show(); // Show the home page iframe
            messageBox.show(); // Show the success message
          } else if (data.status === false) {
            messageContent.html('<div class="text-danger">' + data.message + '</div>');
            messageBox.show();
          } else {
            console.log('Unexpected response:', data);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('AJAX request failed:', textStatus, errorThrown);
        }
      });
    }
  }
</script>




</body>

</html>