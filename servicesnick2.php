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
        h5{
            font-family:sans-serif;
            font color:red;
        }
    </style>
<div class="container"> 
<div class="row">
        <div class="col-md-12 p-0" style="margin-bottom: 20px;"> <!-- border:1px solid rgba(0,0,0,.125) -->

            <div class="float-left">
                <img src="admin/upload/gallery/wed3.jpg" style="width: 600px;" alt="">
            </div>
    </div>
            
            <div class="float-left" style="width: 600px;"> 
                <ul class="list-group">
                    <li class="list-group-item bg-danger active" style="padding-top: 12px;"><h6 class="h6 text-center">Wonderland Wedding Hall - Price:13,00,000 Rs.</h6></li>
                    <li class="list-group-item  list-group-item-light "><b>SERVICES:</b></li>
                                                                <li class="list-group-item">Appetizers and Meal Service</li>
                                            <li class="list-group-item">Hair And Make Up</li>
                                            <li class="list-group-item">Wedding Cake</li>
                                            <li class="list-group-item">Photographer</li>
                                            <li class="list-group-item">Bar Service</li>
                                            <li class="list-group-item">Reception Decor</li>
                                            <li class="list-group-item">DJ &amp; MC Services</li>
                                            <li class="list-group-item">Centerpieces</li>
                                    </ul>
    </div>
    <div class="float-left" style="width: 600px;"> 
                <ul class="list-group">
                    <li class="list-group-item bg-danger active" style="padding-top: 12px;"><h6 class="h6 text-center">Hall Capacity</h6></li>
                                                                <li class="list-group-item"><h6>Hall Seating Nos   &nbsp;  &nbsp; &nbsp; &nbsp; - &nbsp;   1500 </h6> </li>
                                            <li class="list-group-item"><h6>Hall Floating Nos    &nbsp;  &nbsp; &nbsp; &nbsp; - &nbsp;   1800</h6></li>
                                            
                                    </ul>
    </div>
    <div class="float-left" style="width: 600px;"> 
                <ul class="list-group">
                    <li class="list-group-item bg-danger active" style="padding-top: 12px;"><h6 class="h6 text-center">Rooms</h6></li>
                                                                <li class="list-group-item"><h6>No Of Rooms   &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; - &nbsp;  25 </h6> </li>
                                            <li class="list-group-item"><h6>No Of Air Conditioned Rooms  &nbsp;  &nbsp; &nbsp; &nbsp; - &nbsp;   19</h6></li>
                                            
                                    </ul>
    </div>
    <div class="float-left" style="width: 600px;"> 
                <ul class="list-group">
                    <li class="list-group-item bg-danger active" style="padding-top: 12px;"><h6 class="h6 text-center">Parking</h6></li>
                                                                <li class="list-group-item"><h6>Car Parking  &nbsp;  &nbsp; &nbsp; &nbsp; - &nbsp;   80 </h6> </li>
                                            <li class="list-group-item"><h6>Bike Parking  &nbsp;  &nbsp; &nbsp; &nbsp;  -&nbsp;   100</h6></li>
                                            
                                    </ul>
    </div>
    <div class="float-left" style="width: 600px;"> 
                <ul class="list-group">
                    <li class="list-group-item bg-danger active" style="padding-top: 12px;"><h6 class="h6 text-center">Address</h6></li>
    <li class="list-group-item"><h6><i>If you are interested in this wedding hall and would like more information, please contact us at &nbsp</i><b> 8179318248</b>.<br>
    We cater to Hyderbad,Visakhapatnam,Bengaluru,Udaipur,Guntur,East Godavari,Kadapa,West Godavari.</h6> </li>
                                            <li class="list-group-item"></li>
                                            
                                    </ul>
    </div>
    </div>
    <p align="center"><a href="pricing.php">GO BACK</a></p>
