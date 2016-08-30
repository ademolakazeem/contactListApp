<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>Contact List App | Manage User</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Machinery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
					</script>

<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<link href='//fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>

</head>
<body>
<!--header-->
<?php include_once('header.php');?>

<!--End header-->
   
<div class="contact">

	<div class="container">
	<div class="col-md-4 content-pro-head content-pro-head3">
			<h3>Contact</h3>
			<p>There are several list of users in our database, you can update any of the users using the ID of any of the users. Without the use of ID, you will not be able to update user information.</p>
		
    </div>
  <div class="col-md-8 content-pro-head1">
   		<form action="#" method="post">
				<div class=" grid-contact">
					<div class="your-top">
						<i class="glyphicon glyphicon-user"> </i>
						<input type="text" placeholder="Name" name="Name"  required >								
						<div class="clearfix"> </div>
					</div>
					<div class="your-top">
						<i class="glyphicon glyphicon-envelope"> </i>
						<input type="text" placeholder="E-mail" name="E-mail"  required>								
						<div class="clearfix"> </div>
					</div>
					<div class="your-top">
						<i class="glyphicon glyphicon-link"> </i>
						<input type="text" placeholder="Website" name="Website"  required>								
						<div class="clearfix"> </div>
					</div>
					
			
					<textarea  placeholder=" Message" name=" Message"  required></textarea>
					<input type="submit" value="Send">
				
				</div>
				</form>
  </div>
  
	<div class="clearfix"> </div>
	</div>
</div>
<div class=" map">

					<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12947831.742778081!2d-95.665!3d37.599999999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sIreland!5e0!3m2!1sen!2sin!4v1422444552833"></iframe>-->
					<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12947831.742778081!2d-95.665!3d37.599999999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1422444552833"></iframe>-->
				</div>

<!--footer-->
<!--footer-->
<?php include_once('footer.php');?>
<!--footer-->
<!-- for bootstrap working -->
	<script src="js/bootstrap.min.js"></script>
<!-- //for bootstrap working -->

</body>
</html>