<!DOCTYPE html>
<html>
<head>
<title>Contact List App | User Search</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
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
<?php include_once('header.php'); ?>
<!--End header-->
  <!--content-->
	<div class="container">
	<div class="page">
 <div class="bs-example " data-example-id="contextual-table" style="border: 1px solid #eee">

      <?php
      if(isset($_POST['search_button'])) {
          $searchText = trim($_POST['search_text']);
          if(empty($searchText))
              echo ' <div class="alert alert-danger" role="alert">
        <strong>Oh snap!</strong> Please provide the ID of the User. <a href="index.php"> Go Back</a>
      </div>';
          else
          {
              //Resource Address
              $url = "http://localhost:8000/users/$searchText";
              //Send request to Resource
              $client=curl_init($url);
              curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
              //get response
              $curl_response = curl_exec($client);
              //echo $curl_response;
              if ($curl_response === false) {
                  $info = curl_getinfo($client);
                  curl_close($client);
                  die('error occured during curl exec. Additioanl info: ' . var_export($info));
              }
              curl_close($client);
              $decoded = json_decode($curl_response);
              if(isset($decoded->_id)){
                  $name=ucwords($decoded->name->title. " ". $decoded->name->first. " " . $decoded->name->last);
                  $location = ucwords($decoded->location->street. " ".$decoded->location->city." ".$decoded->location->state." ". $decoded->location->zip);
                  $email = $decoded->email;
                  $username = $decoded->username;
                  $cellphone = $decoded->cell;
                  $pps = $decoded->PPS;
                  $_id = $decoded->_id;
                  ?>

      <table class="table">
          <thead>
          <tr>
              <th>#</th>
              <th>Name</th>
              <th>Location</th>
              <th>Email</th>
              <th>Username</th>
              <th>Cell Phone</th>
              <th>PPS Number</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <tr class="active">
              <th scope="row">1</th>
              <td><?php echo $name; ?></td>
              <td><?php echo $location; ?></td>
              <td><?php echo $email; ?></td>
              <td><?php echo $username; ?></td>
              <td><?php echo $cellphone; ?></td>
              <td><?php echo $pps; ?></td>
              <td><a href=manage_existing_user.php?userid=<?php echo $_id; ?>> Edit</a></td>
          </tr>
          </tbody>
      </table>


          <?php

              }
              else
              {
                  echo ' <div class="alert alert-danger" role="alert">
        <strong>Oh snap!</strong> Sorry, the ID provided is invalid. <a href="index.php"> <<Go Back</a>
      </div>';
              }

             /* if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
                  die('error occured: ' . $decoded->response->errormessage);
                  echo('error occured: ' . $decoded->response->errormessage);
              }*/
              //var_export($decoded->response);




          }//end else empty


      }//end if search_button
      else if(!isset($_POST['search_button'])) {
          //Resource Address
          $url = "http://localhost:8000/users";
          //echo $url;

//Send request to Resource
          $client=curl_init($url);
          curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
          //get response
          $curl_response = curl_exec($client);
          //echo $curl_response;

          if ($curl_response === false) {
              $info = curl_getinfo($client);
              curl_close($client);
              die('error occured during curl exec. Additioanl info: ' . var_export($info));

          }
          curl_close($client);
          $decoded = json_decode($curl_response, true);


          ?>
      <table class="table">
          <thead>
          <tr>
              <th>#</th>
              <th>Name</th>
              <th>Location</th>
              <th>Email</th>
              <th>Username</th>
              <th>Cell Phone</th>
              <th>PPS Number</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody>
      <?php
          $count=0;
          foreach($decoded as $inData){

              $name=ucwords( $inData['name']['title']. " ".  $inData['name']['first']. " " .  $inData['name']['last']);
              $location = ucwords( $inData['location']['street']. " ". $inData['location']['city']." ".$inData['location']['state']." ". $inData['location']['zip']);
              $email = $inData['email'];
              $username = $inData['username'];
              $cellphone = $inData['cell'];
              $pps = $inData['PPS'];
              $_id = $inData['_id'];


              ?>

              <tr
                  <?php
                  if($count==1){
                      echo 'class="active"';
                  }
                  else if($count%3==0){
                      echo 'class="success"';
                  }else if($count%5==0){
                      echo 'class="info"';
                  }else if($count%7==0){
                      echo 'class="warning"';
                  }else if($count%9==0){
                      echo 'class="danger"';
                  }
                  ?>
                  >
                  <th scope="row"><?php echo ++$count; ?></th>
                  <td><?php echo $name; ?></td>
                  <td><?php echo $location; ?></td>
                  <td><?php echo $email; ?></td>
                  <td><?php echo $username; ?></td>
                  <td><?php echo $cellphone; ?></td>
                  <td><?php echo $pps; ?></td>
                  <td><a href=manage_existing_user.php?userid=<?php echo $_id; ?>> Edit</a></td>
              </tr>

          <?php
          }//end foreach

?>

          </tbody>
      </table>
      <?php

         /* if (isset($decoded->response->status) && $decoded->response->status == 'ERROR') {
              die('error occured: ' . $decoded->response->errormessage);
              echo('error occured: ' . $decoded->response->errormessage);
          }*/



      }//!not search_button set

      ?>





  </div>
	<!--//Contextual classes-->



	</div>
</div>
<!--//content-->

<!--footer-->
<?php include_once('footer.php');?>
<!--footer-->
<!-- for bootstrap working -->
	<script src="js/bootstrap.min.js"></script>
<!-- //for bootstrap working -->

</body>
</html>