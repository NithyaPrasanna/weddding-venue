<?php 
    include 'admin/include/init.php'; 

    $gallery = Gallery::find_all(); 

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
    <link rel="stylesheet" href="lightbox/css/lightbox.css">
    <style>
        body {
            margin-top: 6%;
            background:url("https://c4.wallpaperflare.com/wallpaper/829/704/1007/many-flowers-white-tulips-pink-rose-wallpaper-preview.jpg");
            background-size:cover;
           
        }
    </style>


</head>
<body>

<?php include 'include/nav.php'; ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
           <h4 class="text-center mb-0 mt-5">Wedding Photos</h4>
            
            <p class="text-center mt-0 text-muted">Photos That Capture Your Moment <a href="pricing.php">Go back </a></p>
           
<table>
    <tr>
        <td>
        <div class="card-columns">
                                <div class="card" style="position: relative;">
                    <a href="admin/upload/gallery/wed1.jpg" data-lightbox="gallery-group-4">
                        <img class="card-img-top" src="admin/upload/gallery/wed1.jpg" alt="Card image cap">
                    </a>
                    <div class="card-body" style="position: absolute;bottom: 0;left:0; width: 100%;height: 78px;0%;
                    background: rgba(0,0,0, 0.5);color:white;padding: 10px 10px 10px 10px;">
                        <p class="card-title text-capitalize" style="font-size:12px;"></p>
                        <p><marquee direction="right" behaviour="scroll" scrollamount="5">ROSE PINK WEDDING HALL</marquee></p>
                    </div>
                </div><!-- end of body -->
</td>
<td>
                                <div class="card" style="position: relative;width: 100%;height: 100%;padding: 100px 100px 100 100px;">
                    <a href="admin/upload/gallery/wed2.jpg" data-lightbox="gallery-group-4">
                        <img class="card-img-top" src="admin/upload/gallery/wed2.jpg" alt="Card image cap">
                    </a>
                    <div class="card-body" style="position: absolute;bottom: 0;left:0; width: 100%;background: rgba(0,0,0, 0.5);color:
                    white;padding: 10px 10px 0 10px;">
                        <p class="card-title text-capitalize" style="font-size:12px;"></p>
                        <p><marquee direction="right" behaviour="scroll" scrollamount="5">CHARMING WEDDING HALL</marquee></p>
                    </div>
                </div><!-- end of body -->
                            </div><!-- end of card columns -->
</td>
</tr>
<tr>
<td>
                            <div class="card-columns">
                                <div class="card" style="position: relative;">
                    <a href="admin/upload/gallery/wed3.jpg" data-lightbox="gallery-group-4">
                        <img class="card-img-top" src="admin/upload/gallery/wed3.jpg" alt="Card image cap">
                    </a>
                    <div class="card-body" style="position: absolute;bottom: 0;left:0; width: 100%;background: rgba(0,0,0, 0.5);
                    color:white;padding: 10px 10px 0 10px;">
                        <p class="card-title text-capitalize" style="font-size:12px;"></p>
                        <p><marquee direction="right" behaviour="scroll" scrollamount="5">WONDERLAND WEDDING HALL</marquee></p>
                    </div>
                </div><!-- end of body -->
</td>
<td>
                                <div class="card" style="position: relative;">
                    <a href="admin/upload/gallery/wed4.jpg" data-lightbox="gallery-group-4">
                        <img class="card-img-top" src="admin/upload/gallery/wed4.jpg" alt="Card image cap">
                    </a>
                    <div class="card-body" style="position: absolute;bottom: 0;left:0; width: 100%;background: rgba(0,0,0, 0.5);
                    color:white;padding: 10px 10px 0 10px;">
                        <p class="card-title text-capitalize" style="font-size:12px;"></p>
                        <p><marquee direction="right" behaviour="scroll" scrollamount="5">BLUE LIGHT WEDDING HALL</marquee></p>
                    </div>
                </div><!-- end of body -->
                            </div><!-- end of card columns -->
</td>
</tr>
<tr>
    <td>
                            <div class="card-columns">
                                <div class="card" style="position: relative;">
                    <a href="admin/upload/gallery/wed5.jpg" data-lightbox="gallery-group-4">
                        <img class="card-img-top" src="admin/upload/gallery/wed5.jpg" alt="Card image cap">
                    </a>
                    <div class="card-body" style="position: absolute;bottom: 0;left:0; width: 100%;background: rgba(0,0,0, 0.5);
                    color:white;padding: 10px 10px 0 10px;">
                        <p class="card-title text-capitalize" style="font-size:12px;"></p>
                        <p><marquee direction="right" behaviour="scroll" scrollamount="5">SPARKING WEDDING HALL</marquee></p>
                    </div>
                </div><!-- end of body -->
</td>
<td>
                                <div class="card" style="position: relative;">
                    <a href="admin/upload/gallery/wed6.jpg" data-lightbox="gallery-group-4">
                        <img class="card-img-top" src="admin/upload/gallery/wed6.jpg" alt="Card image cap">
                    </a>
                    <div class="card-body" style="position: absolute;bottom: 0;left:0; width: 100%;background: rgba(0,0,0, 0.5);
                    color:white;padding: 10px 10px 0 10px;">
                        <p class="card-title text-capitalize" style="font-size:12px;"></p>
                        <p><marquee direction="right" behaviour="scroll" scrollamount="5">RED HEAVEN WEDDING HALL</marquee></p>
                    </div>
                </div><!-- end of body -->
                            </div><!-- end of card columns -->
</td>
</tr>
<tr>
    <td>
                            <div class="card-columns">
                                <div class="card" style="position: relative;">
                    <a href="admin/upload/gallery/wed13.jpg" data-lightbox="gallery-group-4">
                        <img class="card-img-top" src="admin/upload/gallery/wed13.jpg" alt="tri image cap">
                    </a>
                    <div class="card-body" style="position: absolute;bottom: 0;left:0; width: 100%;background: rgba(0,0,0, 0.5);color:
                    white;padding: 10px 10px 0 10px;">
                        <p class="card-title text-capitalize" style="font-size:12px;"></p>
                        <p><marquee direction="right" behaviour="scroll" scrollamount="5"></marquee></p>
                        <p><marquee direction="right" behaviour="scroll" scrollamount="5">CLASSIC WEDDING HALL</marquee></p>
                    </div>
                </div><!-- end of body -->
</td>
<td>
                                <div class="card" style="position: relative;">
                    <a href="admin/upload/gallery/wed8.jpg" data-lightbox="gallery-group-4">
                        <img class="card-img-top" src="admin/upload/gallery/wed8.jpg" alt="Card image cap">
                    </a>
                    <div class="card-body" style="position: absolute;bottom: 0;left:0; width: 100%;background: rgba(0,0,0, 0.5);
                    color:white;padding: 10px 10px 0 10px;">
                        <p class="card-title text-capitalize" style="font-size:12px;"></p>
                        <p><marquee direction="right" behaviour="scroll" scrollamount="5">TRADITIONAL WEDDING HALL</marquee></p>
                    </div>
                </div><!-- end of body -->
                            </div><!-- end of card columns -->
</td>
</tr>
<tr>
    <td>
                            <div class="card-columns">
                                <div class="card" style="position: relative;">
                    <a href="admin/upload/gallery/wed9.jpg" data-lightbox="gallery-group-4">
                        <img class="card-img-top" src="admin/upload/gallery/wed9.jpg" alt="Card image cap">
                    </a>
                    <div class="card-body" style="position: absolute;bottom: 0;left:0; width: 100%;background: rgba(0,0,0, 0.5);
                    color:white;padding: 10px 10px 0 10px;">
                        <p class="card-title text-capitalize" style="font-size:12px;"></p>
                        <p><marquee direction="right" behaviour="scroll" scrollamount="5">PEACOCK WEDDING HALL</marquee></p>
                    </div>
                </div><!-- end of body -->
</td>
<td>
                                <div class="card" style="position: relative;">
                    <a href="admin/upload/gallery/wed11.jpg" data-lightbox="gallery-group-4">
                        <img class="card-img-top" src="admin/upload/gallery/wed11.jpg" alt="Card image cap">
                    </a>
                    <div class="card-body" style="position: absolute;bottom: 0;left:0; width: 100%;background: rgba(0,0,0, 0.5);
                    color:white;padding: 10px 10px 0 10px;">
                        <p class="card-title text-capitalize" style="font-size:12px;"></p>
                        <p><marquee direction="right" behaviour="scroll" scrollamount="5">VIOLET WEDDING HALL</marquee></p>
                    </div>
                </div><!-- end of body -->
                            </div><!-- end of card columns -->
</td>
</tr>
</table>
        </div>
        </div>
        </div>
        </div>
        </div>
        
    </div>















    

                   

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="lightbox/js/lightbox-2.6.min.js"></script>
</body>
</html>