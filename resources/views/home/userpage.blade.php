<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <link href="assets/css/core.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />


      
         <!-- Required meta tags -->
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         
         <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
     
         <link rel="stylesheet" href="header/fonts/icomoon/style.css">
     
         <link rel="stylesheet" href="header/css/owl.carousel.min.css">
     
         <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="header/css/bootstrap.min.css">
         
         <!-- Style -->
         <link rel="stylesheet" href="header/css/style.css">
     
         <title>Website Menu #3</title>
         <style>
            .body{
background: rgb(182, 209, 233) !important;
            }
         </style>
       
   </head>
   <body class="body">
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
       @include('home.slider')
         <!-- end slider section -->
      </div>
      <!-- why section -->
      @include('home.whysec')
      
      <!-- end why section -->
      
      <!-- arrival section -->
      @include('home.arrival')
      
      <!-- end arrival section -->
      
      <!-- product section -->
      @include('home.product')
      <!-- end product section -->

      <!-- subscribe section -->
      @include('home.subsc')
      <!-- end subscribe section -->
      <!-- client section -->
      @include('home.client')
      <!-- end client section -->
      <!-- footer start -->
      @include('home.footer')
      
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Rights Reserved By <a href="https://html.design/">Mr Khanx</a><br>
         
            
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.js"></script>

      <!-- custom js -->
      <script src="home/js/custom.js"></script>
      <script src="header/js/jquery-3.3.1.min.js"></script>
      <script src="header/js/popper.min.js"></script>
      <script src="header/js/bootstrap.min.js"></script>
      <script src="header/js/jquery.sticky.js"></script>
      <script src="header/js/main.js"></script>
   </body>
</html>