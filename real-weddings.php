<?php include 'admin/include/init.php'; ?>

<?php 
    $blogEvent = EventWedding::getEventBlogs();
 ?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inspiration Couples</title>
    <link rel="stylesheet" href="image.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background: #fff;
            margin-top:6%;
        }
    </style>
</head>
<body class="bg">
<?php
include "include/nav.php";
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 class="h2 text-center mb-0">THE LATEST INSPIRATION</h4>
            <p class="text-muted text-center">Discover the best ideas, tips and articles to inspire your wedding.</p>
            <p align="left"><a href="pricing.php">Go back</a></p> <p align="right"><a href="gallery.php">View in Gallery</a></p>
    </div>
            <div class="card-columns">
                           <div class="card">
                <img class="card-img-top" src="admin/upload/events/pic4.jpg" alt="Card image cap">
                <div class="card-body">
                    <a href="wedding_details.php?id=69" class="btn-stamp">
                        <h6 class="card-title mt-0 mb-0 text-center font-weight-bold font-custom text-uppercase">MR. Naga Shourya 
                            &amp; MRS.  Anusha </h6>
                        <p class="card-text mt-0 mb-0 text-center color_gray">ROSE PINK WEDDING HALL</p>
                        <p class="card-text mt-0 mb-0 text-center color_light text-capitalize"><i class="mdi mdi-map-marker"></i>
                        Bengaluru</p>
                    </a>
                </div>
            </div> 
            <div class="card">
                <img class="card-img-top" src="admin/upload/events/pic2.jpg" alt="Card image cap">
                <div class="card-body">
                    <a href="wedding_details1.php?id=67" class="btn-stamp">
                        <h6 class="card-title mt-0 mb-0 text-center font-weight-bold font-custom text-uppercase">MR.Allu Arjun &amp; 
                            MRS.Sneha Reddy </h6>
                        <p class="card-text mt-0 mb-0 text-center color_gray">CHARMING WEDDING HALL</p>
                        <p class="card-text mt-0 mb-0 text-center color_light text-capitalize"><i class="mdi mdi-map-marker"></i>
                            South Africa</p>
                    </a>
                </div>
            </div> 
            <div class="card">
                <img class="card-img-top" src="admin/upload/events/pic8.jpg" alt="Card image cap">
                <div class="card-body">
                    <a href="wedding_details2.php?id=65" class="btn-stamp">
                        <h6 class="card-title mt-0 mb-0 text-center font-weight-bold font-custom text-uppercase">MR.Nithin &amp; MRS. Shalini
                             Kandukuri</h6>
                        <p class="card-text mt-0 mb-0 text-center color_gray">WONDERLAND WEDDING HALL</p>
                        <p class="card-text mt-0 mb-0 text-center color_light text-capitalize"><i class="mdi mdi-map-marker"></i>
                        Taj Faluknama Palace</p>
                    </a>
                </div>
            </div> 
            <div class="card">
                <img class="card-img-top" src="admin/upload/events/pic3.jpg" alt="Card image cap" width="900" height="200">
                <div class="card-body">
                    <a href="wedding_details3.php?id=62" class="btn-stamp">
                        <h6 class="card-title mt-0 mb-0 text-center font-weight-bold font-custom text-uppercase">MR.Ravi &amp; MRS. Nithya
                             Saxena</h6>
                        <p class="card-text mt-0 mb-0 text-center color_gray">BLUELIGHT WEDDING HALL</p>
                        <p class="card-text mt-0 mb-0 text-center color_light text-capitalize"><i class="mdi mdi-map-marker"></i>
                           Udaipur</p>
                    </a>
                </div>
            </div> 
            <div class="card">
                <img class="card-img-top" src="admin/upload/events/pic5.jpg" alt="Card image cap">
                <div class="card-body">
                    <a href="wedding_details4.php?id=60" class="btn-stamp">
                        <h6 class="card-title mt-0 mb-0 text-center font-weight-bold font-custom text-uppercase">MR.Srikanth &amp; MRS. 
                            Sivaranjini</h6>
                        <p class="card-text mt-0 mb-0 text-center color_gray">SPARKING WEDDING HALL</p>
                        <p class="card-text mt-0 mb-0 text-center color_light text-capitalize"><i class="mdi mdi-map-marker"></i>
                         Jubli Hills Hyderabad </p>
                    </a>
                </div>
            </div> 
            <div class="card">
                <img class="card-img-top" src="admin/upload/events/pic6.jpg" alt="Card image cap">
                <div class="card-body">
                    <a href="wedding_details5.php?id=57" class="btn-stamp">
                        <h6 class="card-title mt-0 mb-0 text-center font-weight-bold font-custom text-uppercase">MR.Dulquer Salmaan &amp; MRS.
                             Amal Sufiya</h6>
                        <p class="card-text mt-0 mb-0 text-center color_gray">RED HEAVEN WEDDING HALL</p>
                        <p class="card-text mt-0 mb-0 text-center color_light text-capitalize"><i class="mdi mdi-map-marker"></i>
                        Six Senses Fort Barwara</p>
                    </a>
                </div>
            </div> 
            
            <div class="card">
                <img class="card-img-top" src="admin/upload/events/pic1.jpg" alt="Card image cap">
                <div class="card-body">
                    <a href="wedding_details6.php?id=67" class="btn-stamp">
                        <h6 class="card-title mt-0 mb-0 text-center font-weight-bold font-custom text-uppercase">MR.Dileep &amp; 
                            MRS.Sindhu</h6>
                        <p class="card-text mt-0 mb-0 text-center color_gray">CLASSIC WEDDING HALL</p>
                        <p class="card-text mt-0 mb-0 text-center color_light text-capitalize"><i class="mdi mdi-map-marker"></i>
                            Hyderabad</p>
                    </a>
                </div>
            </div> 
            <div class="card">
                <img class="card-img-top" src="admin/upload/events/pic9.jpg" alt="Card image cap">
                <div class="card-body">
                    <a href="wedding_details7.php?id=55" class="btn-stamp">
                        <h6 class="card-title mt-0 mb-0 text-center font-weight-bold font-custom text-uppercase">MR.Ali &amp; MRS.
                             Fatima Bint Muhammad</h6>
                        <p class="card-text mt-0 mb-0 text-center color_gray">TRADITIONAL WEDDING HALL</p>
                        <p class="card-text mt-0 mb-0 text-center color_light text-capitalize"><i class="mdi mdi-map-marker"></i>
                            Medina</p>
                    </a>
                </div>
            </div> 
            <div class="card">
                <img class="card-img-top" src="admin/upload/events/pic10.jpg" alt="Card image cap">
                <div class="card-body">
                    <a href="wedding_details8.php?id=52" class="btn-stamp">
                        <h6 class="card-title mt-0 mb-0 text-center font-weight-bold font-custom text-uppercase">MR.Yadamma Raju &amp;
                             MRS.Stella</h6>
                        <p class="card-text mt-0 mb-0 text-center color_gray">PEACOCK WEDDING HALL</p>
                        <p class="card-text mt-0 mb-0 text-center color_light text-capitalize"><i class="mdi mdi-map-marker"></i>
                            Hyderabad</p>
                    </a>
                </div>
            </div> 
            <div class="card">
                <img class="card-img-top" src="admin/upload/events/pic11.jpg" alt="Card image cap">
                <div class="card-body">
                    <a href="wedding_details9.php?id=50" class="btn-stamp">
                        <h6 class="card-title mt-0 mb-0 text-center font-weight-bold font-custom text-uppercase">MR.Rana &amp; MRS. Miheeka 
                            Bajaj</h6>
                        <p class="card-text mt-0 mb-0 text-center color_gray">VIOLET CLUB WEDDING HALL</p>
                        <p class="card-text mt-0 mb-0 text-center color_light text-capitalize"><i class="mdi mdi-map-marker"></i>
                            Hyderabad</p>
                    </a>
                </div>
            </div> 
            
            

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>