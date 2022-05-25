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
        <link href="css/button.css" rel="stylesheet">
    </head>

    <body>
        <!-- Header Section Start -->
        <section class="section section-1">
            <header id="header">
                <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
                <nav class="main-menu top-menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="story.html">EVENTS</a></li>
                        <li><a href="login.html">yet to select</a></li>
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





<form action="insert.php?name=<?php echo $_GET['event'] ?>" method="post">
    <marquee>
    <h1>Event Booking.............</h1>
    </marquee>
    <table cellpadding="10" cellspacing="2" align="center">
        
        <tr>
            <td class="col1">Name</td>
            <td class="col2"><input type="text" name="event[]" id="Name" placeholder="name" required></td>
        </tr>
        <tr>
            <td class="col1">Address</td>
            <td class="col2"><input type="text" name="event[]" id="Address" placeholder="Address" required></td>
        </tr>
        <tr>
            <td class="col1">E-mail Id</td>
            <td class="col2"><input type="text" name="event[]" id="E-mail Id" placeholder="E-mail Id" required></td>
        </tr>
        <tr>
            <td class="col1">contact no</td>
            <td class="col2"><input type="text" name="event[]" id="contact no" placeholder="contact no" required></td>
        </tr>
        <tr>
            <td class="col1">Event Date</td>
            <td class="col2"><input type="date" name="event[]" id="Start Date" class="startDate" required></td>
        </tr>
        <tr>
            <td class="col1">No of days</td>
            <td class="col2"><input type="text" name="event[]" id="No of days" placeholder="No of days" required></td>
        </tr>
        <tr>
            <td class="col1">Budget</td>
            <td class="col2"><input type="text" name="event[]" id="budget" placeholder="budget" required></td>
            </td>
        </tr>   
        <tr>
            <td class="col1">venue</td>
            <td class="col2"><textarea name="event[]" id="description" cols="35" rows="1" required></textarea></td>
        </tr>
        <tr colspan="2" align="center">
            <td>
                <button type="submit" class="submit1"  onclick="submitProjectDetails()">Submit</button>
            </td>
            <td>
                <input type="button" value="Go back!" onclick="history.back()">
            </td>
            <td>
                <button type="reset" class="reset1" onclick="resetProjectDetails()">Clear</button>
            </td>
        </tr>
    
    </table>
    </form>