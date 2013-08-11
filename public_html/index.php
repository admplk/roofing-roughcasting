<?php
//require_once ('includes/initialisePage.php');
$title = "Roofing and Roughcasting | Grant Allan | South Queensferry";
$pageId = 1;
$cssFiles = array("/css/common.css", "/css/home.css");
require_once('header.php');
?>

<!--Page content START-->

<div class="row">
    <div class="span12">
        <div class="content-holder">
		    <div id="myCarousel" class="carousel slide" style="margin-bottom: 7px;">
		        <ol class="carousel-indicators">
		      		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      		<li data-target="#myCarousel" data-slide-to="1"></li>
		      		<li data-target="#myCarousel" data-slide-to="2"></li>
		      		<li data-target="#myCarousel" data-slide-to="3"></li>
		        </ol>
		        <div class="carousel-inner">
		      		<div class="item active">
		            	<img src="img/van-slide.jpg" style="width: 100%;" alt="">
		            	<div class="carousel-caption">
		              		<h4>Fully Qualified Trademan For Over 13 Years</h4>
		              		<p>Based in South Queensferry, Edinburgh, all areas covered.  All work undertaken and guaranteed, no job is too small.  
		              			Free estimates and advice, plus 24/7 emergency call out facility.  Full public liability insurance, 
		              			all insurance work welcome.</p>
		            	</div>
		          	</div>
		          	<div class="item">
		            	<img src="img/roof-slide.jpg" style="width: 100%;" alt="">
		                <div class="carousel-caption">
		              		<h4>Roofing</h4>
		              		<p>Roofing work includes slating and tiling.  All flat roofs undertaken in single ply, 3 and 5 ply systems. Fatra liquid plastic approved installer. 
		              			Photographic roof reports available.  Other services include zinc/lead work, UPVC, dry verges, rhones and downpipes.</p>
		                </div>
		          	</div>
		          	<div class="item">
		            	<img src="img/house-slide.jpg" style="width: 100%;" alt="">
		            	<div class="carousel-caption">
		              		<h4>Roughcasting</h4>
		              		<p>Includes dry/wet dashing, smooth rendered finishings and sand stone restoration. We can use traditional sand and cement
		              			or silicone renders, which can go directly over the existing finish without the noice, dust and debris which comes from 
		              			cutting off the old roughcast.</p>
		                </div>
		          	</div>
		          	<div class="item">
		            	<img src="img/fatra-slide.jpg" style="width: 100%;" alt="">
		            	<div class="carousel-caption">
		              		<h4>Fatra Approved Installer</h4>
		              		<p>Fatra liquid plastic approved installer.</p>
		                </div>
		          	</div>
		        </div><!--carousel-inner-->
		        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
		  	</div><!--myCaroursel-->
	  	</div><!--content-holder-->
	</div><!--span12-->
</div><!--row-->

<div class="row">
	<div class="span4" style="margin-top: 20px;">
		<a href="/contact-us" class="content-link">
			<div id="contactUsContent" class="content-holder">
				<div id="contactUsText">
					<h2>Contact Us</h2>
					<span style="font-size:120%;">Any questions? Looking for a free quotation?  We would love to hear from you.</span>
				</div>
			</div>
		</a>
	</div>
	<div class="span4" style="margin-top: 20px;">
		<a href="/services" class="content-link">
			<div id="servicesContent" class="content-holder">
				<div id="servicesText">
					<h2>Services</h2>
					<span style="font-size:120%;">Find out about the range of services we offer.</span>
				</div>
			</div>
		</a>
	</div>
	<div class="span4" style="margin-top: 20px;">
		<a href="http://www.fatra.co.uk" class="content-link">
			<div id="fatraContent" class="content-holder">
				<img src="/img/fatra-blue.jpg" alt="fatra" />				
				<div id="fatraText">
					<span style="font-size:120%;">Approved Installer</span><br />
					<span style="font-style:italic;">Enviromentally friendly single ply roofing systems.</span>
				</div>
			</div>
		</a>
	</div>
</div>

<!--Page content END-->

<div style="clear: both;"></div>
<?php
require_once('footer.php');
?>