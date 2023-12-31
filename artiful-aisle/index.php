<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./font-awesome/css/font-awesome.css">
    <title>Artiful Aisle</title>
</head>

<body> 

    <div id="top"><!-- Top-->      
       <div class="container"><!-- container -->           
           <div class="col-md-6 offer"><!--offer -->              
               <a href="#" class="btn btn-success btn-sm">Welcome</a>
               <a href="checkout.php">4 Items In Your Cart | Total Price: $300 </a>              
           </div><!-- offer end -->
           
           <div class="col-md-6"><!-- col-md-6  -->               
               <ul class="menu"><!-- cmenu Begin -->                   
                   <li><a href="customer_register.php">Register</a></li>
                   <li><a href="checkout.php">My Account</a></li>
                   <li><a href="cart.php">Go To Cart</a></li>
                   <li><a href="checkout.php">Login</a></li>  
               </ul><!-- menu End -->               
           </div><!-- col-md-6 end -->           
       </div><!-- container end -->       
    </div><!-- Top end -->

   <div id="navbar" class="navbar navbar-default"><!-- navbar  -->       
       <div class="container"><!--nav container -->
          
           <div class="navbar-header"><!-- navbar-header Begin -->               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->               
                   <img src="images/ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                   <img src="images/ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">    
               </a><!-- navbar-brand home Finish -->            
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   <span class="sr-only">Toggle Navigation</span>
                   <i class="fa fa-align-justify"></i>  
               </button>
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">  
                   <span class="sr-only">Toggle Search</span> 
                   <i class="fa fa-search"></i>   
               </button> 
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->      
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       <li class="active"><a href="index.php">Home</a></li>
                       <li><a href="shop.php">Shop</a></li>
                       <li><a href="checkout.php">My Account</a></li>
                       <li><a href="cart.php">Shopping Cart</a></li>
                       <li><a href="contact.php">Contact Us</a></li>
                   </ul><!-- nav navbar-nav left Finish -->   
               </div><!-- padding-nav Finish --> 

               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->   
                   <i class="fa fa-shopping-cart"></i>      
                   <span>4 Items In Your Cart</span>  
               </a><!-- btn navbar-btn btn-primary Finish -->
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->        
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->       
                       <span class="sr-only">Toggle Search</span>          
                       <i class="fa fa-search"></i>          
                   </button><!-- btn btn-primary navbar-btn Finish --> 
               </div><!-- navbar-collapse collapse right Finish -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           <span class="input-group-btn"><!-- input-group-btn Begin --> 
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->  
                               <i class="fa fa-search"></i> 
                           </button><!-- btn btn-primary Finish -->
                           </span><!-- input-group-btn Finish --> 
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->                   
               </div><!-- collapse clearfix Finish -->               
           </div><!-- navbar-collapse collapse Finish -->           
       </div><!-- container Finish -->
   </div><!-- navbar navbar-default Finish -->
   
   <div class="container" id="slider"><!-- container Begin -->      
       <div class="col-md-12"><!-- col-md-12 Begin -->        
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->              
               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>                   
               </ol><!-- carousel-indicators Finish -->
               
               <div class="carousel-inner"><!-- carousel-inner Begin -->
                   <div class="item active">      
                       <img src="./admin_area/slides_images/slide-1.jpg" alt="Image 1">          
                   </div>
                   <div class="item">
                       <img src="./admin_area/slides_images/slide-2.jpg" alt="Image 2">  
                   </div>
                   <div class="item">  
                       <img src="./admin_area/slides_images/slide-3.jpg" alt="Image 3">   
                   </div>
                   <div class="item">    
                       <img src="./admin_area/slides_images/slide-4.jpg" alt="Image 4">  
                   </div>
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->               
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>                  
               </a><!-- left carousel-control Finish -->   

               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->                  
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>                  
               </a><!-- left carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->  
       </div><!-- col-md-12 Finish -->
   </div><!-- container Finish -->


<script src="./js/jquery-3.7.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
    
</body>
</html>