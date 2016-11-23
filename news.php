<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>UsamaMukwaya | News</title>
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
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=144716315690681";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><h1 style="color: #D4AF37;" >Usama Mukwaya</h1></h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                    <li><a href="filmology.php"><i class="fa fa-film" aria-hidden="true"></i> Filmology</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> Osam <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                           <li><a href="news.php">News</a></li>
                           <li><a href="gallery.php">Gallery</a></li>
                           <li><a href="awards.php">Awards</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.php"><i class="fa fa-pencil" aria-hidden="true"></i> Blog</a></li> 
                    <li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>News</h1>
                   
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">News</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

   <section id="blog" class="container">
        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                    <div class="blog-item">
                        <div class="row">
                                                            
                            <div class="col-xs-12 col-sm-12 blog-content">
                                
                               <?php
                            include("includes/connect.php");

                            $select_posts ="select * from posts order by rand() LIMIT 0,4";

                            $run_posts =mysqli_query($con,$select_posts);

                            while ($row=mysqli_fetch_array($run_posts)) {
                                $post_id =$row['post_id'];
                                $post_title =$row['post_title'];
                                $post_date =$row['post_date'];
                                $post_author =$row['post_author'];
                                $post_image =$row['post_image'];
                                $post_content =substr($row['post_content'],0,500);
                                                           

                            ?>
                                
                                <h2> 
                                    <a href="newspages.php?id=<?php echo $post_id; ?>">
                                      <?php echo $post_title; ?>
                                    </a>
                                </h2>

                                <p>Published On: <b><?php echo $post_date; ?></b></p>
                                <p><i></i> <span>By: <b><?php echo $post_author; ?></b></span></p>

                                <div id="single_post"> 
                                   <img  src="images2/uploads/<?php echo $post_image; ?>" width="100%" height="500"/>
                                   </div>
                                 

                                <p align="justify"><?php echo $post_content; ?></p>

                                <p align="right"> <a href="newspages.php?id=<?php echo $post_id; ?>" class="btn btn-primary readmore">// Read More &gt;<i class="fa fa-angle-right"></i></a></p>
                                <hr>


                                <?php } ?>

                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                        
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                            <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form>
                    </div><!--/.search-->
                    
                    <div class="widget categories">
                        <h3>Recent Blog</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single_comments">
                                <?php
                include("includes/connect.php");
            
                $query = "select * from blog order by 1 DESC LIMIT 0,3";
            
                $run =mysqli_query($con,$query);
            
            while ($row=mysqli_fetch_array($run)) {
            
                $blog_id =$row['blog_id'];
                $title =$row['blog_title'];

                $image =$row['blog_image'];
                 
                 $blog_date = $row['blog_date'];
                ?>
                <a href="blogpages.php?id=<?php echo $blog_id; ?>">
                 <p><b><?php echo $title; ?></b></p></a>
                             <div id="single_post"> 
                                <img width="150" height="100" <img src='images2/uploads/<?php echo $image; ?>' >
                                </div>
                                       
                                <p class="post-date"><b><?php echo $blog_date; ?></b></p>
                                 <?php } ?>

                                </div>
                                
                            </div>
                        </div>                     
                    </div><!--/.recent comments-->
                           
                </aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->

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
                    &copy; 2016 | All Rights Reserved.
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