<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Usama Mukwaya | Awards</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
      <link rel="shortcut icon" href="images/ico/us.jpg">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top midnight-blue" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><h1 style="font-family:'Debevic Circular', serif; font-weight:700; color:#ff0000;">Usama Mukwaya</h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href="filmology.php"><i class="fa fa-film" aria-hidden="true"></i> Filmology</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> Osam <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                        <li><a href="osam.php">Osam</a></li>
                           <li><a href="osam.php"><i class="fa fa-user" aria-hidden="true"></i> Osam</a></li>
                           <li><a href="news.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i> News</a></li>
                           <li><a href="gallery.php"><i class="fa fa-picture-o" aria-hidden="true"></i> Gallery</a></li>
                           <li><a href="awards.php"><i class="fa fa-gift" aria-hidden="true"></i> Awards</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.php"><i class="fa fa-pencil" aria-hidden="true"></i> Blog</a></li> 
                    <li><a href="community.php"><i class="fa fa-users" aria-hidden="true"></i> Community</a></li> 
                    <li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Awards and Nominations</h1>
                   
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a  href="index.php">Home</a></li>
                        <li  class="active">Awards and Nominations</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->

    <section id="about-us" class="container">
        <div class="row">
            <div class="col-sm-8">
            <img src="images/blog/me 1b.jpg" width="100%" height="600" />
             </div><!--/.col-sm-6-->
            <div class="col-sm-4">
                <h2>Awards</h2>
                <div>
                     <p><i>The following are awards and nominations Usama has received throught his career.</i></p>
                                <h3>Winner</h3>

                                    <h4>Young Achievers Awards –Young Achiever in Film and Television 2011 </h4>
                                   
                                    <h4>Movie Furnace Program – Best Director 'In Just Hours'    2013  </h4>
                                    
                                    <h3>Nominations:</h3>
                                    <h4>MNFPAC Awards - Best Screenwriter; 'Hello'     2010</h4>
                                    <h4>Luxor African Film Festival – Long Features; 'Bala Bala Sese'  2016 </h4>

                                    <h4>Helsinki African Film Festival – Jury Award for Human Rights and Social Commentary. ‘Bala Bala Sese' 2016  </h4>
                                    <h4>Amakula Int’l Film Festival – Best African Film; 'Bala Bala Sese'  2016 </h4>
     <h4>African Movie Academy Awards – Best Film in an African Language; 'Bala Bala Sese'           2016 </h4>
<h4>African International Film Festival – Best Film; 'Bala Bala Sese'     2016  </h4>

                    </div>
                </div>
            </div><!--/.col-sm-6-->
        </div><!--/.row-->

        <hr>
         <p align="right"><b>Lets connect on social media.</b> <br><br>
                                        <a class="btn btn-social btn-facebook" href="https://www.facebook.com/OnlineUsama"><i class="icon-facebook"></i></a> 
                                        <a class="btn btn-social btn-google-plus" href="https://plus.google.com/+UsamaMukwaya"><i class="icon-google-plus"></i></a> 
                                        <a class="btn btn-social btn-twitter" href="https://twitter.com/usamamukwaya"><i class="icon-twitter"></i></a> 
                                </p>

       
    </section><!--/#about-us-->

    <section id="bottom" class="wet-asphalt">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>Latest News</h4>
                     <div>
                        <div class="media">
                            <div class="pull-left">
                                
                            </div>
                            <div class="media-body">
                                <?php
                include("includes/connect.php");
            
                $query = "select * from blog order by 1 DESC LIMIT 0,3";
            
                $run =mysqli_query($con,$query);
            
            while ($row=mysqli_fetch_array($run)) {
            
                $blog_id =$row['blog_id'];
                $title =$row['blog_title'];
                $blog_date =$row['blog_date'];
                $image =$row['blog_image'];
               
                ?>
                <a href="blogpages.php?id=<?php echo $blog_id; ?>">
                       
               <span class="media-heading"><?php echo $title; ?></span></a>
                 <p><b><?php echo $blog_date; ?></b></p>
                  
                   
            
               
                                
                                 <?php } ?>
                            
                            </div>
                        </div>
                        
                        
                    </div>  
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Custom Menu</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="filmology.php">Filmology</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="awards.php">Awards</a></li>
                             <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="community.php">Community</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                           
                        </ul>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Latest Blog</h4>
                    <div>
                        <div class="media">
                            <div class="pull-left">
                                
                                
                            </div>
                            <div class="media-body">

                                <?php
                include("includes/connect.php");
            
                $query = "select * from blog order by 1 DESC LIMIT 0,3";
            
                $run =mysqli_query($con,$query);
            
            while ($row=mysqli_fetch_array($run)) {
            
                $blog_id =$row['blog_id'];
                $title =$row['blog_title'];
                $blog_date =$row['blog_date'];
                $image =$row['blog_image'];
               
                ?>
                <a href="blogpages.php?id=<?php echo $blog_id; ?>">
                       
                 <span class="media-heading"><?php echo $title; ?></span></a>
                 <p><b><?php echo $blog_date; ?></b></p>
                  
                   
            
               
                                
                                 <?php } ?>
                            </div>
                        </div>
                    </div>  
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <h4>Address</h4>
                    <address>
                        <br>
                        <br>
                        <br>
                    </address>
                    <h4>Newsletter</h4>
                    <form role="form">
                        <div class="input-group">
                            <input type="text" class="form-control" autocomplete="off" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button">Go!</button>
                            </span>
                        </div>
                    </form>
                </div> <!--/.col-md-3-->
            </div>
        </div>

    </section><!--/#bottom-->


    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                     <p>&copy; <?php echo date("Y"); ?> | Usam Mukwaya |  All Rights Reserved. |  <a href="admin/login.php"><i class="icon-lock"></i>  Admin Login</a></p>

                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="https://www.facebook.com/OnlineUsama"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/usamamukwaya"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.youtube.com/user/TheUgmovies"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="https://plus.google.com/+UsamaMukwaya"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    <script src="https://use.fontawesome.com/4d0c79038f.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>