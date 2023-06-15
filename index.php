<?php include 'admin/include/init.php'; ?>
<?php
    $count = 0;
    $error = '';
    $user_firstname = $user_lastname = $user_password = $user_email = $wedding_date = '';

    $account_details = new Account_Details();
    $accounts = new Accounts();
    $booking = new Booking();
    $category = Category::find_all();
    $blogEvent = EventWedding::getEventBlogs();

    if (isset($_POST['register'])) {

        $user_firstname = clean($_POST['user_firstname']);
        $user_lastname = clean($_POST['user_lastname']);
        $user_email = clean($_POST['user_email']);
        $user_phone = clean($_POST['user_phone']);
        $user_password = md5(clean($_POST["input_password"])); 
       

        $checkdate = $booking->check_wedding_date($wedding_date);

        if (empty($user_firstname) ||
            empty($user_phone) ||
            empty($user_email) ||
            empty($user_lastname) )
           {
            redirect_to("index.php");
            $session->message("
            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
              <strong><i class='mdi mdi-alert'></i></strong>  Please Fill up all the fields.
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>");
            die();
        }

        if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)){
            redirect_to("index.php");
            $session->message("
            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
              <strong><i class='mdi mdi-alert'></i></strong>  Incorrect email format.
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>");
            die();

        }

        $check_email = $accounts->email_exists($user_email);

        if ($check_email) {
            redirect_to("index.php");
            $session->message("
            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
              <strong><i class='mdi mdi-alert'></i></strong>  Email is already Exists.
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>");
            die();
        } else {
            if ($error == '') {
                $count = $count + 1;
                $account_details->firstname = $user_firstname;
                $account_details->lastname = $user_lastname;
                $account_details->status = 'pending';
                $account_details->datetime_created  = date("y-m-d h:m:i");
                $account_details->phone= $user_phone;
                if ($account_details->save()) {
                    $account_details->user_id = mysqli_insert_id($db->connection);

                    if($account_details->update()) {
                        $accounts->user_id = $account_details->user_id;
                        $accounts->user_email= $user_email;
                        $accounts -> user_password = $user_password;


                         if($accounts->save()) {
                             $booking->user_id = $accounts->user_id;
                             $booking->user_email = $user_email;
                             $booking->save();
                             redirect_to("thank_you.php");
                         }
                    }
                }
            }
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wedding Hall</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .alert {
            font-size: 12px;
        }
        .error {
            background-color: #F2DEDE;
        }
        .alert.alert-danger.text-center {
            font-size: 16px;
        }
        .mdi.mdi-alert-circle.mr-3 {
            font-size: 16px;
        }

        .bgact{
               /*background: rgb(14 14 14 / 49%); */
            
                padding: 20px;
        }
        body {
            margin-top: 6%;
            background:url("https://c4.wallpaperflare.com/wallpaper/408/736/896/flowers-background-tree-pink-wallpaper-preview.jpg");
            background-size:cover;
        }

    </style>
</head>
<body> 
<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="hero">
            <div class="row justify-content-md-center">
                <div class="col col-lg-3">
                </div>
                <div class="col col-lg-5" style="margin-top: 7%;">
                    
                    <?php
                        if ($session->message()) {
                            echo $session->message();
                        }
                    ?>
                    <form class="bgact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <h2 class="text-center hero-lead">WEDDING VENUE & SERIVES</h2>
                    <p class="lead text-center" style="color:yellow;">START BY FILLING UP THE FORM</p>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="user_firstname" placeholder="First Name" id="user_firstname">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" id="user_lastname" class="form-control" name="user_lastname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_email" id="user_email" placeholder="Email address">
                        </div>
                        <div class="form-group">
                            <input type="password" id="inputPassword" name="input_password" class="form-control" placeholder="Password" required>
                    </div>
                        <div class="form-group">
                            <input type="text" aria-describedby="phoneHelpBlock" class="form-control" name="user_phone" id="user_phone" placeholder="Contact Number">
                        </div>
                        <div class="form-row">
                            <div class="input-group col-md-5">
                                <div class="input-group-append">
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <p style="font-size: 11px;color:white;">By clicking "Sign Up" you agree to WVS <a
                                        href="" title="" style="color: #b81717;font-weight: bold;">Terms of Use</a></p>
                            <button type="submit" name="register" class="btn btn-danger btn-sm text-uppercase fb"
                                    style="margin-top: -5px;">Sign Up 
                            </button>
                        </div class="text-center mt-3">
                        <h6 style="font-size: 11px;color:white;">Already have an account?<a href ="login.php"><font color="yellow">Login</font></a></h6>
                    </form>
                </div>
                <div class="col col-lg-3">
                </div>
            </div>
        </div>
    </div> 
</div>
</script>
</body>
</html>