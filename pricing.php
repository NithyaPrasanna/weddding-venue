<?php include 'admin/include/init.php'; ?>
<?php 
$category = Category::find_all();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wedding Planner</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            margin-top: 6%;
            background:url("https://c4.wallpaperflare.com/wallpaper/408/736/896/flowers-background-tree-pink-wallpaper-preview.jpg");
            height:100vh;
            background-size:cover;
        }

        .navbar-light .navbar-brand {
            color: #1a1a1a;
            font-weight: bold;
            line-height: 22px;
        }

        .navbar {
            font-weight: 700;
            padding: 12px;
            font-style: normal;
            font-size: 14px;
            text-transform: uppercase;
            color: black;
            border-bottom: 1px solid #ddd;
        }

        li.nav-item > a.nav-link {
            color: black !important;
            font-weight: bold !important;
        }

        #review {
            font-size: 16px;
            font-weight: bold;
            margin-right: 5px;
        }

      
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: .9rem;
        }

        .navbar-brand {
            margin-left: 20px;
            width: 200px;
        }

      

        img.img-fluid.img-custom {
            width: 344px;
            height:230px;
        }
        .btn.btn-sm.btn-light.active:hover {
            background: white;
        }
        .list-group-item:first-child {
            border-top-left-radius: 0rem;
            border-top-right-radius: 0rem;
        }
        .list-group-item:last-child {
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .list-group-item.active{
            border-color: #00125100;
        }
    </style>
</head>
<body>
<?php include 'include/nav.php'; ?>

<div class="container" style="width: 70%;">

    <div class="row mb-3">
        <div class="col-lg-12">
            <!-- <h3 class="h5 text-uppercase text-center text-muted">Wedding</h3> -->
            <h2 class="h2 text-uppercase text-center mb-0"><marquee direction="right" scrollamount="12">Select Your Desired</marquee></h2>
            <h2 class="h2 text-uppercase text-center mb-0"><marquee direction="left" scrollamount="12"> Wedding Hall</marquee></h2>
          
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 p-0" style="margin-bottom: 20px;"> <!-- border:1px solid rgba(0,0,0,.125) -->

            <div class="float-left">
                <img src="admin/upload/gallery/wed1.jpg" style="width: 500px;" alt="">
            </div>
            
            <div class="float-left" style="width: 47%;"> 
                <ul class="list-group">
                    <li class="list-group-item bg-danger active" style="padding-top: 12px;">
                    <h6 class="h6 text-center">Rose Pink Wedding Hall -  Price:  15,00,000 Rs.</h6></li>
                    <li class="list-group-item  list-group-item-light "><b>THIS PACKAGE INCLUDES:</b></li>
                                            <li class="list-group-item">Appetizers and Meal Service</li>
                                            <li class="list-group-item">Hair And Make Up</li>
                                            <li class="list-group-item">Wedding Cake</li>
                                            <li class="list-group-item">Photographer</li>
                                            <li class="list-group-item">Bar Service</li>
                                            <li class="list-group-item">Reception Decor</li>
                                            <li class="list-group-item">DJ &amp; MC Services</li>
                                            <li class="list-group-item">Centerpieces</li>
                                    </ul>
                 <div class="float-right">
                 <a href="package_detail.php?id=4" class="btn btn-sm btn-success active" style="border-radius: 3px;margin-top: 9px;">Book Now</a>
                <a href="servicesnick.php?id=4" class="btn btn-sm btn-primary active" style="border-radius: 3px;margin-top: 9px;">More Detail</a>
            </div>
            </div>
            </div><!-- end of col-md-8 p-0 pl-3 -->
        </div>
             <div class="row">
        <div class="col-md-12 p-0" style="margin-bottom: 20px;"> <!-- border:1px solid rgba(0,0,0,.125) -->

            <div class="float-left">
                <img src="admin/upload/gallery/wed2.jpg" style="width: 500px;" alt="">
            </div>
            
            <div class="float-left" style="width: 47%;"> 
                <ul class="list-group">
                    <li class="list-group-item bg-danger active" style="padding-top: 12px;"><h6 class="h6 text-center">Charming Wedding Hall - Price:  9,00,000 Rs.</h6></li>
                    <li class="list-group-item  list-group-item-light "><b>THIS PACKAGE INCLUDES:</b></li>
                    <li class="list-group-item">Appetizers and Meal Service</li>
                                            <li class="list-group-item">Hair And Make Up</li>
                                            <li class="list-group-item">Wedding Cake</li>
                                            <li class="list-group-item">Photographer</li>
                                            <li class="list-group-item">Bar Service</li>
                                            <li class="list-group-item">Reception Decor</li>
                                            <li class="list-group-item">DJ &amp; MC Services</li>
                                            <li class="list-group-item">Centerpieces</li>     
                                    </ul>
                 <div class="float-right">
                 <a href="package_detail.php?id=3" class="btn btn-sm btn-success active" style="border-radius: 3px;margin-top: 9px;">Book Now</a>
                <a href="servicesnick1.php?id=3" class="btn btn-sm btn-primary active" style="border-radius: 3px;margin-top: 9px;">More Detail</a>
            </div>
            </div>
            </div><!-- end of col-md-8 p-0 pl-3 -->
        </div>
             <div class="row">
        <div class="col-md-12 p-0" style="margin-bottom: 20px;"> <!-- border:1px solid rgba(0,0,0,.125) -->

            <div class="float-left">
                <img src="admin/upload/gallery/wed3.jpg" style="width: 500px;" alt="">
            </div>
            
            <div class="float-left" style="width: 47%;"> 
                <ul class="list-group">
                    <li class="list-group-item bg-danger active" style="padding-top: 12px;"><h6 class="h6 text-center">Wonderland Wedding Hall- Price:  13,00,000 Rs.</h6></li>
                    <li class="list-group-item  list-group-item-light "><b>THIS PACKAGE INCLUDES:</b></li>
                    <li class="list-group-item">Appetizers and Meal Service</li>
                                            <li class="list-group-item">Hair And Make Up</li>
                                            <li class="list-group-item">Wedding Cake</li>
                                            <li class="list-group-item">Photographer</li>
                                            <li class="list-group-item">Bar Service</li>
                                            <li class="list-group-item">Reception Decor</li>
                                            <li class="list-group-item">DJ &amp; MC Services</li>
                                            <li class="list-group-item">Centerpieces</li>  
                                    </ul>
                 <div class="float-right">
                 <a href="package_detail.php?id=2" class="btn btn-sm btn-success active" style="border-radius: 3px;margin-top: 9px;">Book Now</a>
                <a href="servicesnick2.php?id=2" class="btn btn-sm btn-primary active" style="border-radius: 3px;margin-top: 9px;">More Detail</a>
            </div>
            </div>
            </div><!-- end of col-md-8 p-0 pl-3 -->
        </div>
             <div class="row">
        <div class="col-md-12 p-0" style="margin-bottom: 20px;"> <!-- border:1px solid rgba(0,0,0,.125) -->

            <div class="float-left">
                <img src="admin/upload/gallery/wed4.jpg" style="width: 500px;" alt="">
            </div>
            
            <div class="float-left" style="width: 47%;"> 
                <ul class="list-group">
                    <li class="list-group-item bg-danger active" style="padding-top: 12px;"><h6 class="h6 text-center">Blue Light Wedding Hall- Price:  14,00,000 Rs.</h6></li>
                    <li class="list-group-item  list-group-item-light "><b>THIS PACKAGE INCLUDES:</b></li>
                    <li class="list-group-item">Appetizers and Meal Service</li>
                                            <li class="list-group-item">Hair And Make Up</li>
                                            <li class="list-group-item">Wedding Cake</li>
                                            <li class="list-group-item">Photographer</li>
                                            <li class="list-group-item">Bar Service</li>
                                            <li class="list-group-item">Reception Decor</li>
                                            <li class="list-group-item">DJ &amp; MC Services</li>
                                            <li class="list-group-item">Centerpieces</li> 
                                    </ul>
                 <div class="float-right">
                 <a href="package_detail.php?id=1" class="btn btn-sm btn-success active" style="border-radius: 3px;margin-top: 9px;">Book Now</a>
                <a href="servicesnick3.php?id=1" class="btn btn-sm btn-primary active" style="border-radius: 3px;margin-top: 9px;">More Detail</a>
            </div>
            </div>
            </div><!-- end of col-md-8 p-0 pl-3 -->
        </div>

        <div class="row">
        <div class="col-md-12 p-0" style="margin-bottom: 20px;"> <!-- border:1px solid rgba(0,0,0,.125) -->

            <div class="float-left">
                <img src="admin/upload/gallery/wed5.jpg" style="width: 500px;" alt="">
            </div>
            
            <div class="float-left" style="width: 47%;"> 
                <ul class="list-group">
                    <li class="list-group-item bg-danger active" style="padding-top: 12px;"><h6 class="h6 text-center">Sparking Wedding Hall - Price:  9,00,000 Rs.</h6></li>
                    <li class="list-group-item  list-group-item-light "><b>THIS PACKAGE INCLUDES:</b></li>
                    <li class="list-group-item">Appetizers and Meal Service</li>
                                            <li class="list-group-item">Hair And Make Up</li>
                                            <li class="list-group-item">Wedding Cake</li>
                                            <li class="list-group-item">Photographer</li>
                                            <li class="list-group-item">Bar Service</li>
                                            <li class="list-group-item">Reception Decor</li>
                                            <li class="list-group-item">DJ &amp; MC Services</li>
                                            <li class="list-group-item">Centerpieces</li>
                                    </ul>
                 <div class="float-right">
                 <a href="package_detail.php?id=1" class="btn btn-sm btn-success active" style="border-radius: 3px;margin-top: 9px;">Book Now</a>
                <a href="servicesnick4.php?id=1" class="btn btn-sm btn-primary active" style="border-radius: 3px;margin-top: 9px;">More Detail</a>
            </div>
            </div>
            </div><!-- end of col-md-8 p-0 pl-3 -->
        </div>
        <div class="row">
        <div class="col-md-12 p-0" style="margin-bottom: 20px;"> <!-- border:1px solid rgba(0,0,0,.125) -->

            <div class="float-left">
                <img src="admin/upload/gallery/wed6.jpg" style="width: 500px;" alt="">
            </div>
            
            <div class="float-left" style="width: 47%;"> 
                <ul class="list-group">
                    <li class="list-group-item bg-danger active" style="padding-top: 12px;"><h6 class="h6 text-center">Red Heaven Wedding Hall- Price:  12,00,000 Rs.</h6></li>
                    <li class="list-group-item  list-group-item-light "><b>THIS PACKAGE INCLUDES:</b></li>
                    <li class="list-group-item">Appetizers and Meal Service</li>
                                            <li class="list-group-item">Hair And Make Up</li>
                                            <li class="list-group-item">Wedding Cake</li>
                                            <li class="list-group-item">Photographer</li>
                                            <li class="list-group-item">Bar Service</li>
                                            <li class="list-group-item">Reception Decor</li>
                                            <li class="list-group-item">DJ &amp; MC Services</li>
                                            <li class="list-group-item">Centerpieces</li>         
                                    </ul>
                 <div class="float-right">
                 <a href="package_detail.php?id=1" class="btn btn-sm btn-success active" style="border-radius: 3px;margin-top: 9px;">Book Now</a>
                <a href="servicesnick5.php?id=1" class="btn btn-sm btn-primary active" style="border-radius: 3px;margin-top: 9px;">More Detail</a>
            </div>
            </div>
            </div><!-- end of col-md-8 p-0 pl-3 -->
        </div>
        <div class="row">
        <div class="col-md-12 p-0" style="margin-bottom: 20px;"> <!-- border:1px solid rgba(0,0,0,.125) -->

            <div class="float-left">
                <img src="admin/upload/gallery/wed7.jpeg" style="width: 500px;" alt="">
            </div>
            
            <div class="float-left" style="width: 47%;"> 
                <ul class="list-group">
                    <li class="list-group-item bg-danger active" style="padding-top: 12px;"><h6 class="h6 text-center">Classic Wedding Hall- Price:  7,00,000 Rs.</h6></li>
                    <li class="list-group-item  list-group-item-light "><b>THIS PACKAGE INCLUDES:</b></li>
                    <li class="list-group-item">Appetizers and Meal Service</li>
                                            <li class="list-group-item">Hair And Make Up</li>
                                            <li class="list-group-item">Wedding Cake</li>
                                            <li class="list-group-item">Photographer</li>
                                            <li class="list-group-item">Bar Service</li>
                                            <li class="list-group-item">Reception Decor</li>
                                            <li class="list-group-item">DJ &amp; MC Services</li>
                                            <li class="list-group-item">Centerpieces</li>                     
                                    </ul>
                 <div class="float-right">
                 <a href="package_detail.php?id=1" class="btn btn-sm btn-success active" style="border-radius: 3px;margin-top: 9px;">Book Now</a>
                <a href="servicesnick6.php?id=1" class="btn btn-sm btn-primary active" style="border-radius: 3px;margin-top: 9px;">More Detail</a>
            </div>
            </div>
            </div><!-- end of col-md-8 p-0 pl-3 -->
        </div>
        <div class="row">
        <div class="col-md-12 p-0" style="margin-bottom: 20px;"> <!-- border:1px solid rgba(0,0,0,.125) -->

            <div class="float-left">
                <img src="admin/upload/gallery/wed8.jpg" style="width: 500px;" alt="">
            </div>
            
            <div class="float-left" style="width: 47%;"> 
                <ul class="list-group">
                    <li class="list-group-item bg-danger active" style="padding-top: 12px;"><h6 class="h6 text-center">Traditional Wedding Hall - 
                        Price:  8,00,000 Rs.</h6></li>
                    <li class="list-group-item  list-group-item-light "><b>THIS PACKAGE INCLUDES:</b></li>
                    <li class="list-group-item">Appetizers and Meal Service</li>
                                            <li class="list-group-item">Hair And Make Up</li>
                                            <li class="list-group-item">Wedding Cake</li>
                                            <li class="list-group-item">Photographer</li>
                                            <li class="list-group-item">Bar Service</li>
                                            <li class="list-group-item">Reception Decor</li>
                                            <li class="list-group-item">DJ &amp; MC Services</li>
                                            <li class="list-group-item">Centerpieces</li>                    
                                    </ul>
                 <div class="float-right">
                 <a href="package_detail.php?id=1" class="btn btn-sm btn-success active" style="border-radius: 3px;margin-top: 9px;">Book Now</a>
                <a href="servicesnick7.php?id=1" class="btn btn-sm btn-primary active" style="border-radius: 3px;margin-top: 9px;">More Detail</a>
            </div>
            </div>
            </div><!-- end of col-md-8 p-0 pl-3 -->
        </div>
        <div class="row">
        <div class="col-md-12 p-0" style="margin-bottom: 20px;"> <!-- border:1px solid rgba(0,0,0,.125) -->

            <div class="float-left">
                <img src="admin/upload/gallery/wed9.jpg" style="width: 500px;" alt="">
            </div>
            
            <div class="float-left" style="width: 47%;"> 
                <ul class="list-group">
                    <li class="list-group-item bg-danger active" style="padding-top: 12px;"><h6 class="h6 text-center">Peacock Wedding Hall - Price:  11,00,000 Rs.</h6></li>
                    <li class="list-group-item  list-group-item-light "><b>THIS PACKAGE INCLUDES:</b></li>
                    <li class="list-group-item">Appetizers and Meal Service</li>
                                            <li class="list-group-item">Hair And Make Up</li>
                                            <li class="list-group-item">Wedding Cake</li>
                                            <li class="list-group-item">Photographer</li>
                                            <li class="list-group-item">Bar Service</li>
                                            <li class="list-group-item">Reception Decor</li>
                                            <li class="list-group-item">DJ &amp; MC Services</li>
                                            <li class="list-group-item">Centerpieces</li>                         
                                    </ul>
                 <div class="float-right">
                 <a href="package_detail.php?id=1" class="btn btn-sm btn-success active" style="border-radius: 3px;margin-top: 9px;">Book Now</a>
                <a href="servicesnick8.php?id=1" class="btn btn-sm btn-primary active" style="border-radius: 3px;margin-top: 9px;">More Detail</a>
            </div>
            </div>
            </div><!-- end of col-md-8 p-0 pl-3 -->
        </div>
        <div class="row">
        <div class="col-md-12 p-0" style="margin-bottom: 20px;"> <!-- border:1px solid rgba(0,0,0,.125) -->

            <div class="float-left">
                <img src="admin/upload/gallery/wed11.jpg" style="width: 500px;" alt="">
            </div>
            
            <div class="float-left" style="width: 47%;"> 
                <ul class="list-group">
                    <li class="list-group-item bg-danger active" style="padding-top: 12px;"><h6 class="h6 text-center">Violet Wed
                        ding Hall - Price:  20,00,000 Rs.</h6></li>
                    <li class="list-group-item  list-group-item-light "><b>THIS PACKAGE INCLUDES:</b></li>
                    <li class="list-group-item">Appetizers and Meal Service</li>
                                            <li class="list-group-item">Hair And Make Up</li>
                                            <li class="list-group-item">Wedding Cake</li>
                                            <li class="list-group-item">Photographer</li>
                                            <li class="list-group-item">Bar Service</li>
                                            <li class="list-group-item">Reception Decor</li>
                                            <li class="list-group-item">DJ &amp; MC Services</li>
                                            <li class="list-group-item">Centerpieces</li>                    
                                    </ul>
                 <div class="float-right">
                 <a href="package_detail.php?id=1" class="btn btn-sm btn-success active" style="border-radius: 3px;margin-top: 9px;">Book Now</a>
                <a href="servicesnick9.php?id=1" class="btn btn-sm btn-primary active" style="border-radius: 3px;margin-top: 9px;">More Detail</a>
            </div>
            </div>
            </div><!-- end of col-md-8 p-0 pl-3 -->
        </div>
        
        
</div><!-- end of container -->



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>  