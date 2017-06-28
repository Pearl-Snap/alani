<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Alani</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <!--<link href="css/animate.css" rel="stylesheet">-->
  <!--<link rel="stylesheet" href="css/magnific-popup.css">-->
  <link rel="stylesheet" href="css/flexslider.css" media="screen" />
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/toolkit-bold.css" rel="stylesheet">
  <link rel="shortcut icon" href="#">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<?php include 'modal.php';?>
<div class="wrapper" id="home">
  <div class="sidebar" id="page_sidebar">
    <!-- Sidebar navigate Button -->
    <div class="navi-btn hidden-lg"><a href="#"><i class="fa fa-bars"></i></a></div>
    <div class="sidebar-inner">
      <div class="logo"><a href="index.php"><img src="img/Alani-logo.svg" width="123" height="78" alt="Alani" class="img-responsive"/></a></div>
      <div class="sidebar-widget">
        <ul class="list-unstyled">
          <li><a href="approach.php">APPROACH</a></li>
          <li><a href="about-us.php">ABOUT US</a></li>
        </ul>
        <hr style=" margin-left: 20px; border: 0; border-top: 1px solid rgba(176,190,197,.42);">
        <ul class="list-unstyled">
          <li><a href="#bap" data-toggle="modal">Book a Presentation<i></i></a></li>
          <li><a href="#wbap" data-toggle="modal">Whiteboard a Problem<i></i></a></li>
        </ul>
        <hr style=" margin-left: 20px; border: 0; border-top: 1px solid rgba(176,190,197,.42);">
        <div class="contact-info">
          <div>
            <?php include 'contact-options.php';?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mainbar">
    <div class="container-fluid">
      <div class="row">
        <div id="opener" style="background-color: #485563;">
          <div class="video-container">
            <div class="block block-fill-height" style="background: url(img/LP1-background.jpg) no-repeat top left; background-size: cover;">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 m-t-lg">
                  <div class="well-lg with-errors" style="text-align: center;">
                    <h3>We've encountered a problem submitting your request.</h3>
                    <h3>Please try again.</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</div>

<!-- Javascript files -->
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<script src="js/validator.js"></script>
<!-- FLEX SLIDER SCRIPTS  -->
<script defer src="js/jquery.flexslider-min.js"></script>
<!-- Slim Scroll Plugin -->
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Smooth Scroll JS -->
<script src="js/SmoothScroll.js"></script>
<!-- Custom JS -->
<script src="js/custom.js"></script>
<script>

  /* Sidebar Slim Scroll */

  $(document).ready(function(){
    $(".sidebar-inner").slimScroll({
      size: '7px',
      height: '650px'
    });
  });

</script>

</body>
</html>
