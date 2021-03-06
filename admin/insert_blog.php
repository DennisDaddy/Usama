<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin Area</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
	<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
	<script>
	    tinymce.init({selector:'textarea'});

	</script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">Admin<span class="lite">Area</span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                               
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                 <img alt="" src="img/avatar3.png">
                            </span>
                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>                          
                    
                            <li>
                                <a href="login.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="view_posts.php" class="">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                          <span>View News</span>
                          </a>                      
                  </li>       
                  <li class="sub-menu">
                      <a href="insert_post.php" class="">
                          <i class="fa fa-plus" aria-hidden="true"></i>
                          <span>Add News</span>
                         
                      </a>
                      
                  </li>
                  <li>
                      <a class="" href="insert_blog.php">
                          <i class="fa fa-plus" aria-hidden="true"></i>
                          <span>Add Blog Posts</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="view_blog.php">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                          <span>View Blog Post</span>
                          
                      </a>
                                         
                  </li>

                  <li>
                      <a class="" href="insert_press.php">
                          <i class="fa fa-plus" aria-hidden="true"></i>
                          <span>Add Press</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="view_press.php">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                          <span>View Press</span>
                          
                      </a>
                                         
                  </li>
                             
                  <li class="sub-menu">
                      <a href="logout.php" class="">
                          <i class="fa fa-sign-out" aria-hidden="true"></i>
                          <span>Logout</span>
                          
                      </a>
                     
                  </li>                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <!--main content start-->
      <section id="main-content">
      <section class="wrapper">            
              <!--overview start-->
        <div class="row">
        <div class="col-lg-12">
         
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            <li><i class="fa fa-laptop"></i>Add Blog Posts</li> 
            </ol>   

<body>
<form method="post" action="insert_blog.php" enctype="multipart/form-data" role = "form">
 <div class="table-responsive"> 
	<table  width="600" align="center" border="3">
	<tr>
		<td align="center" bgcolor="white" colspan="6"><h1>Insert New Blog Post Here</h1></td>
	</tr>

	<tr>
		<td align="right"><b>Blog Title:</b></td>
		<td><input type="text" name="title" size="30"></td>
	</tr>

	<tr>
		<td align="right"><b>Blog Author:</b></td>
		<td><input type="text" name="author" size="30"></td>
	</tr>

	<tr>
		<td align="right"><b>Blog Keywords:</b></td>
		<td><input type="text" name="keywords" size="30"></td>
	</tr>

	<tr>
		<td align="right"><b>Blog Image:</b></td>
		<td><input type="file" name="image"></td>
	</tr>
	<tr>
		<td align="right"><b>Blog Content:</b></td>
		<td><textarea class = "form-control" name="content" cols="30" rows="15"></textarea></td>
	</tr>

	<tr>
		
		<td align="center" colspan="6"><input type="submit" name="submit" value="Publish Now"></td>
	</tr>
		
	</table>
	</div>
</form>

</div>
      </div>
          
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

<!-- javascripts -->
    <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
  <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
  <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
  <script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
  <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="js/jquery-jvectormap-world-mill-en.js"></script>
  <script src="js/xcharts.min.js"></script>
  <script src="js/jquery.autosize.min.js"></script>
  <script src="js/jquery.placeholder.min.js"></script>
  <script src="js/gdp-data.js"></script>  
  <script src="js/morris.min.js"></script>
  <script src="js/sparklines.js"></script>  
  <script src="js/charts.js"></script>
  <script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
    
    /* ---------- Map ---------- */
  $(function(){
    $('#map').vectorMap({
      map: 'world_mill_en',
      series: {
        regions: [{
          values: gdpData,
          scale: ['#000', '#000'],
          normalizeFunction: 'polynomial'
        }]
      },
    backgroundColor: '#eef3f7',
      onLabelShow: function(e, el, code){
        el.html(el.html()+' (GDP - '+gdpData[code]+')');
      }
    });
  });



  </script>

  </body>
</html>
<?php
include("includes/connect.php");

if (isset($_POST['submit'])) {
	# code...
	 $blog_title =$_POST['title'];
	 $blog_date =date('y-m-d');
	 $blog_author =$_POST['author'];
	 $blog_keywords =$_POST['keywords'];
	 $blog_content =$_POST['content'];
	 $blog_image =$_FILES['image']['name'];
	  $image_tmp =$_FILES['image']['tmp_name'];

	 if ($blog_title=='' or $blog_keywords=='' or $blog_content=='' or $blog_author=='') {
	 	# code...
	 	echo "<script>alert('any of the fields is empty')</script";
	 	exit();
	 }

	 else{
	 	move_uploaded_file($image_tmp,"../images2/uploads/$blog_image");
	 	$insert_query ="insert into blog(blog_title,blog_date,blog_author,blog_image,blog_keywords,blog_content) values('$blog_title','$blog_date','$blog_author','$blog_image','$blog_keywords','$blog_content')";  
	 	if (mysqli_query($con,$insert_query)) {
	 		# code...
	 		echo "<script> alert('post Published successfuly!')</script>";
	 		echo "<script> window.open('view_blog.php','_self')</script>";
	 	}
	 }
}

?>