<!DOCTYPE HTML>
<?php
define ('SITE_ROOT', realpath(dirname(__FILE__)));
 ?>
<html>
	<head>
		<title>Best Movie rating</title>
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Movie_store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" /> -->
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		<script type="application/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);
            function hideURLbar(){
                window.scrollTo(0,1);
            }
        </script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- start plugins -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
        <!-- <script type="text/javascript" src="js/validate.js"></script>
        <script type="text/javascript" src="js/validateMovie.js"></script> -->
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'/>
		<script src="js/responsiveslides.min.js"></script>
		<script>
		$(function () {
			$("#slider").responsiveSlides({
					auto: true,
					nav: true,
					speed: 500,
				namespace: "callbacks",
				pager: true,
			});
		});
		</script>
	</head>
	<body>
		<div class="container">
			<div class="container_wrap">
				<div class="header_top">
					<?php include('header.php');?>
				</div>
				<div class="slider">
					<div class="callbacks_container">
						  <ul class="rslides" id="slider">
							    <li><img src="images/banner.jpg" class="img-responsive" alt=""/>
							    	<!-- <div class="button">
								      <a href="#" class="hvr-shutter-out-horizontal">Watch Now</a>
								    </div> -->
									</li>
							    <li><img src="images/banner1.jpg" class="img-responsive" alt=""/>
							    	<!-- <div class="button">
								      <a href="#" class="hvr-shutter-out-horizontal">Watch Now</a>
								    </div> -->
									</li>
							    <li><img src="images/banner2.jpg" class="img-responsive" alt=""/>
							    	<!-- <div class="button">
								      <a href="#" class="hvr-shutter-out-horizontal">Watch Now</a>
								    </div> -->
									</li>
						  </ul>
					</div>
					<!-- <div class="banner_desc">
				    	<div class="col-md-9">
				    		<ul class="list_1">
				    			<li>Published <span class="m_1">Feb 20, 2015</span></li>
				    			<li>Updated <span class="m_1">Feb 20 2015</span></li>
				    			<li>Rating: </li>
				    		</ul>
				    	</div>
				    	<div class="col-md-3 grid_1">
				    		<ul class="list_1 list_2">
				    			<li><i class="icon1"> </i><p>1,548</p></li>
				    			<li><i class="icon2"> </i><p>215</p></li>
				    			<li><i class="icon3"> </i><p>546</p></li>
				    		</ul>
				    	</div>
					</div> -->
				</div>
				<div class="content">
					<div class="box_1">
					 <h1 class="m_2">Featured Movies</h1>
					 <div class="clearfix"> </div>
					</div>
				<div class="box_2">
					<div class="col-md-5 grid_3">
					  <div class="row_1">
					  <div class="col-md-6 grid_4"><a href="single.php?id=3">
						  <div class="grid_2">
							<img src="images/movie_posters/3.jpg" height="250" width="229" class="img-responsive" alt=""/>
							<div class="caption1">
								<ul class="list_3">
						    		<li><i class="icon5"> </i><p>3,548</p></li>
						    	</ul>
						    	<i class="icon4"> </i>
						    	<p class="m_3">Alien</p>
							</div>
						   </div>
						   <div class="grid_2 col_1">
							<img src="images/pic2.jpg" class="img-responsive" alt=""/>
							<div class="caption1">
								<ul class="list_3">
						    		<li><i class="icon5"> </i><p>3,548</p></li>
						    	</ul>
						    	<i class="icon4"> </i>
						    	<p class="m_3">Guardians of the Galaxy</p>
							</div>
						   </div>
					   </a></div>
					   <div class="col-md-6 grid_7">
						   <div class="col_2">
						   	    <ul class="list_4">
					    			<li><i class="icon1"> </i><p>1,548</p></li>
					    			<li><i class="icon2"> </i><p>215</p></li>
					    			<li><i class="icon3"> </i><p>546</p></li>
					    			<li>Rating : &nbsp;&nbsp;<p></p></li>
					    			<li>Release Date : &nbsp;<span class="m_4">Mar 15, 2015</span> </li>
					    			<div class="clearfix"> </div>
					    		</ul>
					    		<div class="m_5"><a href="single.php?id=2"><img src="images/pic3.jpg" class="img-responsive" alt=""/></a></div>
						   </div>
					 </div>
					   <div class="clearfix"> </div>
					   </div>
					   <div class="row_2">
					   	<a href="single.php?id=3"><img src="images/pic4.jpg" class="img-responsive" alt=""/></a>
					   </div>
					</div>
					<div class="col-md-5 content_right">
					 <div class="row_3">
					  <div class="col-md-6 content_right-box"><a href="single.php?id=4">
						<div class="grid_2">
						<img src="images/pic6.jpg" class="img-responsive" alt=""/>
						<div class="caption1">
								<ul class="list_5">
						    		<li><i class="icon5"> </i><p>3,548</p></li>
						    	</ul>
						    	<i class="icon4 icon6"> </i>
						    	<p class="m_3">Guardians of the Galaxy</p>
						</div>
					    </div>
					   </a></div>
					   <div class="col-md-6 grid_5"><a href="single.php?id=5">
						<div class="grid_2">
						<img src="images/pic7.jpg" class="img-responsive" alt=""/>
						<div class="caption1">
								<ul class="list_5">
						    		<li><i class="icon5"> </i><p>3,548</p></li>
						    	</ul>
						    	<i class="icon4 icon6"> </i>
						    	<p class="m_3">Guardians of the Galaxy</p>
						</div>
					    </div>
					   </a></div>
					   <div class="clearfix"> </div>
					   </div>
					   <div class="video">
						  <iframe width="100%" src="https://www.youtube.com/embed/Fm3VgcyaPfo" frameborder="0" allowfullscreen></iframe>
					  </div>
					  <div class="row_5">
					  	<div class="col-md-6">
							<div class="col_2">
						   	    <ul class="list_4">
					    			<li><i class="icon1"> </i><p>2,548</p></li>
					    			<li><i class="icon2"> </i><p>215</p></li>
					    			<li><i class="icon3"> </i><p>546</p></li>
					    			<li>Rating : &nbsp;&nbsp;<p></p></li>
					    			<div class="clearfix"> </div>
					    		</ul>

						   </div>
					   </div>
					   <div class="col-md-6 m_6"><a href="single.php?id=1">
						  <img src="images/pic8.jpg" class="img-responsive" alt=""/>
					   </a></div>
					  </div>
					</div>
					<div class="col-md-2 grid_6">
						<div class="m_7"><a href="single.php?id=2"><img src="images/pic9.jpg" class="img-responsive" alt=""/></a></div>
						<div class="caption1">
								<ul class="list_5">
						    		<li><i class="icon5"> </i><p>3,548</p></li>
						    	</ul>
						    	<i class="icon4 icon6"> </i>
						    	<p class="m_3">Guardians of the Galaxy</p>
						</div>
						<div class="col_2 col_3">
						   	    <ul class="list_4">
					    			<li><i class="icon1"> </i><p>2,548</p></li>
					    			<li><i class="icon2"> </i><p>215</p></li>
					    			<li><i class="icon3"> </i><p>546</p></li>
					    			<li>Rating : &nbsp;&nbsp;<p></p></li>
					    			<li>Release : &nbsp;<span class="m_4">Mar 15, 2015</span> </li>
					    			<div class="clearfix"> </div>
					    		</ul>
					    		<div class="m_8"><a href="single.php?id=3"><img src="images/pic10.jpg" class="img-responsive" alt=""/></a></div>
					    </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				</div>
			</div>
		</div>

		<div class="container">
			<footer id="footer">
			    <?php include('footer.php');?>
			</footer>
		</div>
	</body>
</html>
