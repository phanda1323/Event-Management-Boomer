<?php
include 'getevent.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Event Management</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="img/favicon.ico" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900i|Nunito:700,900|Raleway:300,400,500" rel="stylesheet"> 

        <!-- Bootstrap CSS File -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="vendor/fullpage/fullpage.min.css" rel="stylesheet">
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="vendor/animate/animate.min.css" rel="stylesheet">
        <link href="vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="vendor/slick/slick.css" rel="stylesheet">
        <link href="vendor/slick/slick-theme.css" rel="stylesheet">
        <link href="vendor/flipclock/flipclock.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Header Section Start -->
        <section class="section section-1">
            <header id="header">
                <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
                <nav class="main-menu top-menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="story.html">Event</a></li>
                        <li class="active"><a href="login.html">yet to select</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </nav>
            </header>
        </section>
        <!-- Header Section End -->

        <!-- Banner Section Start-->
        <section class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <h1>unite <span>&</span>cherish</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section end -->

        <!-- List of Details Starts -->
        <?php 
        $details = get_all();
        foreach($details as $detail){
        ?>
        <div class='container mb-3 mt-3' style="box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.2), 0 10px 26px 0 rgba(0, 0, 0, 0.19); background: black">
            <form>
                <div class="mb-1 mt-3">
                    <h2 style="color:white; display:inline; ">Mr/Mrs. <?php echo $detail['name']; ?> </h2>
                </div>
                <div class="mb-3">
                    <pre style="color:skyblue;">      <?php echo $detail['address']; ?> </pre>
                </div>
                <center>
                <div class="mx">
                    <h1 style="color:red;">      <?php echo $detail['event']; ?> </h1>
                </div>
                <div class="mb-3 mt-3" style="color:#FFFCF9; font-weight: 900; ">
                    <h4 style="display:inline; color:#E9B44C;">Venue: </h4>
                    <i style=" display:inline;" class='mr-5'><?php echo $detail['venue']?></i>
                    <h4 style="display:inline; color:#E9B44C;">Date of The Event: </h4>
                    <i style="display:inline;" class='mr-5'><?php echo $detail['date']?></i>
                    <h4 style="display:inline; color:#E9B44C;">No. of Days: </h4>
                    <i style="display:inline;" class='mr-5'><?php echo $detail['days']?></i>
                </div>
                <div  style="color:#E6DBD0;">
                    <p style="display:inline;">Contact:</p>
                    <pre class="mr-5 auto" style="color: #F4FF52; display:inline;"><?php echo $detail['contact'];?></pre> 
                    <p style="display:inline;">Email:</p>
                    <pre class="mr-5 auto" style="color: #F4FF52; display:inline;"><?php echo $detail['email'];?></pre>
                </div>
                </center>
            </form>
        </div>
        <?php } ?>
        <!-- List of Details Ends -->
        
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        <!-- Uncomment below i you want to use a preloader -->
        <!-- <div id="preloader"></div> -->

        <!-- JavaScript Libraries -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/jquery/jquery-migrate.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/fullpage/fullpage.min.js"></script>
        <script src="vendor/easing/easing.min.js"></script>
        <script src="vendor/superfish/hoverIntent.js"></script>
        <script src="vendor/superfish/superfish.min.js"></script>
        <script src="vendor/waypoints/waypoints.min.js"></script>
        <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
        <script src="vendor/touchSwipe/jquery.touchSwipe.min.js"></script>
        <script src="vendor/slick/slick.min.js"></script>
        <script src="vendor/flipclock/flipclock.min.js"></script>

        <!-- Main Javascript File -->
        <script src="js/main.js"></script>

    </body>
</html>
