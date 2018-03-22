<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Naughty Nachos</title> 
	<meta name="description" content="Essentia Responsive Bootstrap Theme by Bootstrap Master"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/slider1.css" rel="stylesheet">
	<link href="css/slider2.css" rel="stylesheet">
	<link href="css/slider3.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Economica:700,400italic">

	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  	
  	  <style type="text/css">
    	#parallax {
    /* The image used */
    background-image: url("img/place1.jpg");

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
	}

	
	

    </style>
   
    <script>
		function Time(){
						
						var choices = ["12:00 NN","12:30 PM","1:00 PM","1:30 PM","2:00 PM", "2:30 PM","3:00 PM","3:30 PM","4:00 PM", "4:30 PM", "5:00 PM", "5:30 PM", "6:00 PM", "6:30 PM", "7:00 PM", "7:30 PM","8:00 PM", "8:30 PM", "9:00 PM","9:30 PM","10:00 PM"];
						
						for(var i=0;i<choices.length-2;i++){
							var opt = document.createElement("option");
							var sel = document.getElementById("timeIn");
							opt.innerHTML = choices[i];
							opt.value = i;
							sel.appendChild(opt);
						}


						for(var x = 2; x<choices.length;x++){
							var opt1 = document.createElement("option");
							var sel1 = document.getElementById("timeOut");
							opt1.innerHTML = choices[x];
							opt1.value = x;
							sel1.appendChild(opt1);
						}
						
									
					}
				function cp(){
			var val = document.getElementById('p').value;
			var num = document.getElementById('n');



			if(document.getElementById('p').value == '(+63)'){
				num.placeholder = "915xxxxxxx";
			}else{
				num.placeholder = "941xxxx";
			}


		}

    </script>

</head>
<body onload = "Time()">
	
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
						
			<!--start: Row -->
			<div class="row-fluid">
					
				<!--start: Navigation -->
				<div class="navigation"> 
				
					<div class="navbar navbar-fixed-top">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar btnOverlay" data-toggle="collapse" data-target=".nav-collapse">
				            		menu
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
									<li><a href="#" class="home">Home</a></li>
									<li><a href="#" class="menu">Featured</a></li>
									<li><a href="#" class="about">About</a></li>
									<li><a href="#" class="services">Services</a></li>
									<li><a href="#" class="contact">Contact</a></li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
				
				
				</div>	
				<!--end: Navigation -->	
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->




	<!-- start: 1st Page - Home -->
	<div id="home">

		<div class="demo-1">

	        <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">

					<div class="sl-slide bg-2" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="N"></div>
							<h2>Naughty Nachos</h2>
							<blockquote>
							<p>You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.</p></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-1" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="b"></div>
							<h2>Best Sellers</h2>
							<blockquote><p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p></blockquote>

						</div>
					</div>

					<div class="sl-slide bg-3" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="R"></div>
							<h2>Reservation</h2>
							<blockquote><p>We offer reservations</p><button type = "button">reserve</button></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-4" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="I"></div>
							<h2>Donna nobis pacem</h2>
							<blockquote><p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p><cite>Michael Klaper M.D.</cite></blockquote>
						</div>
					</div>

					<div class="sl-slide bg-5" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="deco" data-icon="t"></div>
							<h2>Acta Non Verba</h2>
							<blockquote><p>I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.</p><cite>Margi Clarke</cite></blockquote>
						</div>
					</div>
				</div><!-- /sl-slider -->

				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->

	    </div>

	</div>
	<!-- end: 1st Page - Home -->
	
	
	
	<!-- start: 3rd Page - Pricing Tables -->
	<div id="menu" class="color white">
		
		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">

							<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

					<h2><span>WELCOME TO NAUGHTY NACHOS</span></h2>

						<div class="flex-container">
							<div class ="box">
								<figure class="snip1273">
								  <img src="img/b1.jpg" alt="sample72"/>
									  <figcaption>
									    <h1>ORDER NOW</h1>
									    <p>I don't need to compromise my principles, because they don't have the slightest bearing on what happens to me anyway. </p>
									  </figcaption>
								  		<a href="#"></a>
								</figure>
							</div>
							<div class ="box">
								<figure class="snip1273">
								  <img src="img/sub2.jpg" alt="sample21"/>
									  <figcaption>
									    <h1>BOOK A TABLE</h1>
									    <p>What's the point of wearing your favorite rocketship underpants if nobody ever asks to see 'em?</p>
										  </figcaption>
								  <a href="#"></a>
								 </figure>
							</div>
							<div class ="box">
								<figure class="snip1273">
								  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample72.jpg" alt="sample86"/>
									  <figcaption>
									    <h1>VIEW GALLERY</h1>
									    <p>Given that sooner or later we're all just going to die, what's the point of learning about integers?</p>
									  </figcaption>
										  <a href="#"></a>
								</figure>
							</div>
							
						</div>

					

							

				</div>	

			</div>
			<!-- end: Page Title -->
				
			<!-- start: Table -->
			
			<!-- end: Table -->
			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		
	</div>
	<!-- end: 3rd Page - Pricing Tables -->
	
	<!-- start: 4th Page - Portfolio -->
	<div id="portfolio" class="color white">
		
		<!--start: Container -->
		<div class="container">

			
		
		</div>
		<!--end: Container -->
		
	</div>
	<!-- end: 4th Page - Portfolio -->

	<div class="container-aboutus">
	<div class="row-fluid">
		<div class="span12">
			<div class="containe-aboutus">
				<div class="row">
					 <div class="col-sm-8 truly">

			    	<h1 style="font-family: roboto;"><span>ABOUT US</span></h1>

			    	<h3>Welcome to Naugty Nachos, a modern restaurant with innovations on mexican cuisine</h3>


			    	<div class="flex">
			    		<div class="fbox">
			    		  	<p>
						      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempore incididunt ut labore et  dolore magna aliqua.Ut enim ad minim, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						 	</p>
			    		</div>

			    		<div class="fbox">
			    			<p>
			    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempore incididunt ut labore et  dolore magna aliqua.Ut enim ad minim, quis nostrud exercitation ullamco laboris nisi aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			    			</p>
			    		</div>
			    	</div>
			    	  

				      <a href="#" class="btn btn-outlined btn-primary">FIND MORE</a>

			    </div>

			    	<div class="col-sm-4 pics">

				    	<div class = "z">
				    		<div class="imgPlace" style="background-image: url('img/place2.jpg');">
				    				
					    	</div>
			    		</div>

			 		   </div>
				</div>
			</div>
		</div>
	</div>

</div>


	<div id="parallax"></div>


	<!-- start: 5th Page - About -->
	<div id="about" class="color white">
		
		<!--start: Container -->
		<div class="container talaga">
			<!--start: Wrapper -->
			<div class="wrapper span12">

							<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">
				</div>	

			</div>	
			<!--start: Row -->
	    	<div class="row-fluid">
		
				<div class="span6">
					
					<!-- start: About Us -->
			<div class="container">
			  <div class="row">
			    <div class="col-sm-6 omg" style="text-align:center;">

			    	<h1><span>OUR MENU</span></h1>

			    	  <br><p>
				      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempore </p> <p> incididunt ut labore et  dolore magna aliqua.Ut enim ad minim, quis nostrud </p> <p>exercitation ullamco laboris nisi aliquip ex ea commodo consequat.
				  	  </p>
				      <br>

				      <a href="WEB/index.php" class="btn btn-outlined btn-primary">VIEW MENU</a>

			    </div>

			    <div class="col-sm-6 pics">

				    	<div class = "f">
				    		<div class="imgPlace" style="background-image: url('img/L1.jpg');">
				    				
					    	</div>

					    	<div class="imgPlace" style="background-image: url('img/L2.jpg');">
					    	
					    	</div> 
			    		</div>

			 		   </div>
				  </div>
				</div>
	
					<!-- 
					Naughty Nachos is located at Magiting st. corner Maginhawa Quezon City. You can easily spot us, just right next to ministop. See you here!
					
					end: About Us -->

				</div>
				
			</div>
			<!--end: Row -->
			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		<!-- end: Page Title -->	


	<div id="parallax2" style="background-image: url('img/place4.jpg');"></div>
		
	</div>
	<!-- end: 5th Page - About -->

	<!-- start: Menu -->
		<div id="Menu">
			
		</div>

	<!-- end: Menu -->
	
	<!-- start: 6th Page - Reservation -->
	<div id="Reservation-container">
		<h1>MAKE A RESERVATION</h1>

		<div id = "txt">
			<div id = "txtBorder">
				<div class = "res">

					<table>

						<form name = "reservation" method = "POST" action = "insertReservation.php" >

					<tr>
						    <th></th>
						    <th><b>CONTACT INFORMATION<b></th> 
						    <th></th>
					</tr>


		<!-- Booking information-->	
						  <tr>  <!-- first ROW(r1) -->
						    <td> <!-- 1st COLUMNr1-->
						    	Venue
								<select id = "venue"  name = "venue">
									<option value = "Whole Place"> Whole Place</option>
									<option value = "First Floor"> First Floor</option>
									<option value = "Second Floor"> Second Floor</option>
								</select>
						    </td> <!-- end of 1st COLUMNr1-->

						    <td> <!-- 2nd COLUMNr1-->
						    	
								<script>
							    $(function() {
							        $( "#datepicker" ).datepicker();
							    });


							    $(document).ready(function() {
							    $("#datepicker").datepicker();
							    $("button").click(function() {
							      
							        var date = $("#datepicker").val();

							    
							    });
							});

							    </script>
							    Date: <input type= "text" id="datepicker" name = "datepicker" >
						    </td> <!-- end of 2nd COLUMNr1-->

						    <td> <!-- 3rd COLUMNr1 -->
						    	Time
						    	<select id = "timeIn" name = "timeIn">				
								</select>

						    </td> <!-- end of 3rd COLUMNr1 -->

						  </tr> 

						  <!-- #########-end of first ROW(r1) ############ -->

						<!-- start of second ROW(r2) Contact info -->
						
						  <tr>
						    <th>
						    	 Name* <input type = "text" name = "name" id = "name" placeholder = "Juan dela Cruz" required>
							</th>
						    <th>
						    	 Email* <input type = "email" name = "email" id = "email" placeholder = "juandc@gmail.com" required>
						    </th> 
						    <th>
						    	Phone*

								<select id = "p" name = "p" onChange = "cp()">
									<option value = "(02)"> (02) </option>
									<option value = "(+63)"> (+63) </option>
								</select>
								
								<input type = "text" name = "n" id = "n"  placeholder = "941xxxx" required>

						    </th>
						  </tr>

						  <!-- ######### end of second ROW(r2) Contact info #########-->
			

						  <!-- start of third ROW(r3) Guest Num -->

						  <tr> 
						    <td>  </td>
						    <td>
						    	 Number of Guests
						    	 <input type = "number" name = "guest" value = "2" min = "2" max = "200" width placeholder="Number of Guests">
						    </td>
						    <td>  </td>
						  </tr>


						  <tr>
						  	<td colspan="3"><br>
						  		Special Request
						  		<input type = "text" id = "req" name = "request" value ="" placeholder="Special Request">
						  	</td>
						  </tr>

						  <!-- ######### end of third ROW(r3) Contact info #########-->

						 <tr>
						 	<th>  </th>
						 	<th>
						 	<input type = "submit" name = "submit" value = "Submit" class = "btn btn-outlined btn-primary">
						 	</th>
						 	<tH>  </th>
						 </tr>
						
						</form>
					</table>
		
	</div>

	<!-- End: 6th Page - Reservation -->


	
	<div id="parallax" style="background-image: url(img/place3.jpg);"></div>

	<!-- start: 7th Page - Contact -->
	<!-- /////////////////////////////////////////////// -->
	<div id="mapBg"></div>
	<div id="contact" class="color black">

		<!--start: Container -->
		<div class="container">

			<!--start: Wrapper -->
			<div class="wrapper span12">

				
	
			<!-- start: Page Title -->
			<div id="page-title">

				<div id="page-title-inner">

						<h2><span>Contact</span></h2>

				</div>	

			</div>
			<!-- end: Page Title -->
			
			<!-- start: Row -->
		
			<div class="row-fluid">		
				
				<div class="span12">
					
					<!-- start: Contact Info -->
					<b>Naughty Nachos</b> •
					95 Magiting Cor. Maginhawa •
					Quezon City, MNL, PH •
					facebook: facebook.com/naughtnachos	
					<!-- end: Contact Info -->
				
				</div>	
			
			</div>
			<!-- end: Row -->
			
			<hr class="clean">
			
			<!-- start: Row -->
			<div class="row-fluid">		
			
				
				
				
				<div class="span12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.1646643695194!2d121.05706081428035!3d14.646592479875872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b773776f4fa9%3A0x2e979d5efe70dae!2sNaughty+Nachos!5e0!3m2!1sen!2sph!4v1506188056700" width=100% height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
			<!-- end: Map -->
				
				</div>	

			
			</div>
			-->
			<!-- /////////////////////////////////////////////// -->
			<!-- end: Row -->


			</div>
			<!-- end: Wrapper -->
		
		</div>
		<!--end: Container -->
		
	</div>
	<!-- end: 7th Page - Contact -->

	
	<footer>
		
		<div id="copyright">
			Naughty Nachos Est. 2014 &copy 
		</div>
		<div id="social">
			<a href="https://facebook.com/naughtnachos" rel="tooltip" title="Facebook" class="facebook">Facebook</a>
			
		</div>	
		
	</footer>	

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/isotope.js"></script>
<script type="text/javascript" src="js/jquery.imagesloaded.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/flexslider.js"></script>
<script type="text/javascript" src="js/carousel.js"></script>
<script type="text/javascript" src="js/fancybox.js"></script>
<script type="text/javascript" src="js/twitter.js"></script>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/jquery.slitslider.js"></script>

<script type="text/javascript" src="js/excanvas.js"></script>
<script type="text/javascript" src="js/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="js/jquery.flot.resize.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script defer="defer" src="js/custom.js"></script>
<script type="text/javascript">	
	$(function() {
	
		var Page = (function() {

			var $navArrows = $( '#nav-arrows' ),
				$nav = $( '#nav-dots > span' ),
				slitslider = $( '#slider' ).slitslider( {
					onBeforeChange : function( slide, pos ) {

						$nav.removeClass( 'nav-dot-current' );
						$nav.eq( pos ).addClass( 'nav-dot-current' );

					}
				} ),

				init = function() {

					initEvents();
					
				},
				initEvents = function() {

					// add navigation events
					$navArrows.children( ':last' ).on( 'click', function() {

						slitslider.next();
						return false;

					} );

					$navArrows.children( ':first' ).on( 'click', function() {
						
		  				slitslider.previous();
						return false;

					} );

					$nav.each( function( i ) {
					
						$( this ).on( 'click', function( event ) {
							
							var $dot = $( this );
							
							if( !slitslider.isActive() ) {

								$nav.removeClass( 'nav-dot-current' );
								$dot.addClass( 'nav-dot-current' );
							
							}
							
							slitslider.jump( i + 1 );
							return false;
						
						} );
						
					} );

				};

				return { init : init };

		})();

		Page.init();
	
	});
</script>
<!-- end: Java Script -->

</body>
</html>