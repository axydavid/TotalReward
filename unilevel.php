<?php 
$_SESSION['usr_LVL'] = 0;
	session_start();
	$con = mysqli_connect('localhost','u155678759_axy','Aviavi200100!','u155678759_databasename1');	

  if(!$con){
		echo 'error connection: ' . mysqli_connect_error();
	}
	if ($_SESSION['ID']!="1") 
	{
		header('location:index.php');
	}
	if(!empty($_GET['msg'])) 
	{
		$msg = $_GET['msg'];
		
		if($msg == "switchpc") 
		{
			if(session_status() == PHP_SESSION_ACTIVE) session_destroy();
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="dist/css/bootstrap.css">
<script src="dist/js/jquery-1.12.4.min.js"></script>
<link  href="dist/fonts/gfonts.css" rel="stylesheet">
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/jquery-ui.min.js"></script>
<script src="dist/js/matter.min.js"></script>
<link href="dist/jQueryDatalist/jquery.flexdatalist.min.css" rel="stylesheet" type="text/css">
<script src="dist/jQueryDatalist/jquery.flexdatalist.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/css/style.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id = 'navbar-section'style="box-shadow: 0px 0px 15px 2px #e5e5e5;border: none;z-index: 2;">
<button class="navbar-toggler collapsed align-right" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div style="max-width: 1200px;width: 100%;display: flex;margin: auto;">
<a class="navbar-brand collapseMobile" href="#" style="width: 258px;">
<img id="logoImg"src="img/LogoBannerInc.png" alt="Total Reward" style="will-change: transform;will-change: transform;height: 67px;position: absolute;top: 3px;pointer-events: none;">
</a>
  <div class="collapse navbar-collapse" id="navbarColor03" style="overflow: hidden;">
    <ul class="navbar-nav mr-auto" style="margin-left: 66%;">
	<li class="nav-item align-right" >
        <a class="nav-link newsBtn" href="adminPanel.php" id="">Admin Panel<span class="sr-only">(current)</span></a>
      </li> 
    <li class="nav-item">
        <a class="nav-link" href="admin.php">Database</a>
	  </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#">Unilevel</a>
	  </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="position: relative;top: -2px;"><path d="M10.79 16.29c.39.39 1.02.39 1.41 0l3.59-3.59c.39-.39.39-1.02 0-1.41L12.2 7.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L12.67 11H4c-.55 0-1 .45-1 1s.45 1 1 1h8.67l-1.88 1.88c-.39.39-.38 1.03 0 1.41zM19 3H5c-1.11 0-2 .9-2 2v3c0 .55.45 1 1 1s1-.45 1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1H6c-.55 0-1-.45-1-1v-2c0-.55-.45-1-1-1s-1 .45-1 1v3c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"></path>
          <path d="M10.79 16.29c.39.39 1.02.39 1.41 0l3.59-3.59c.39-.39.39-1.02 0-1.41L12.2 7.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L12.67 11H4c-.55 0-1 .45-1 1s.45 1 1 1h8.67l-1.88 1.88c-.39.39-.38 1.03 0" fill="#343a40"></path>
        </svg> Log Out</a>
        </li>
    </ul>
  </div>
  </div>
  <div class="navbar-collapse1 collapse" id="navbarColor04" style="position: absolute; right: 17.4%; top: 69px; box-shadow: rgb(229, 229, 229) 0px 5px 8px; border-radius: 5px;">
  <button id="logIn" class="navbar-toggler collapsed" style="cursor: unset;display:unset;border-color: transparent;padding: unset;font-size: unset;position: absolute;width: 1000%;height: 1000%;left: -794%;top: -69px;" type="button" data-toggle="collapse" data-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
  </button>
  <div style="background:white;padding: 20px;z-index: 6;position: relative;">
  <div class="" style="margin-left: auto;margin-right: auto;">
				
					<form action="login.php" style="" method="post">
						<div class="form-group">
							<input id="nameInput" autocomplete="off" autocapitalize="word" type="text" name="user" id="user" placeholder="Username" class="form-control">
						</div>
						<div class="form-group">
							<input id="passInput" autocomplete="off"  autocapitalize="word" type="password" name="pass" id="pass" placeholder="Password" class="form-control">
						</div>
						<button class="btn btn-health d-block m-auto" type="submit"> Sign In </button>
					</form>
				
	</div>

  </div>
  </div>
</nav>

<!-- <input type="button" value="Save" onclick="save();"> -->
<div class="site-section site-section1" id="services-section1" style="z-index: -1;">         

  <div class="container noPaddingMobile" style="display: flex;z-index: 1;position: relative;">
	<div class="container containerz noPaddingMobile" style="flex-direction: column;display: flex;border-radius: 5px;box-shadow: 0px 0px 15px 2px #e5e5e5;padding: 30px;max-width: 100%;background: #FFFC;">
		<div style="display:flex;margin-left: auto;margin-right: auto;" class="noFlexMobile">
			
				<div style="width:auto;padding-right:25px">
			<p style="position: relative;left: 5px;opacity: .8;font-weight: bold;">Payouts:</p>
			Under construction...
			<form action="registration.php" onsubmit="return checkUsr(this);" style="display:none;margin-bottom: 0.75rem;" method="post">
				<div class="form-groupz" style="display: flex;">
					<input id='addInput' autocapitalize="word" type="text" name="gID" placeholder="Global ID" id="gID" class="form-control" style="width: 33%;margin-right: 2.5px;">
					<input id='addInput' autocapitalize="word" type="text" name="pID" placeholder="Referral ID" id="pID" class="form-control" style="width: 33%;margin-left: 2.5px;">
					<input id='addInput' autocapitalize="word" type="text" name="hID" placeholder="Handler ID" id="hID" class="form-control" style="width: 33%;margin-left: 2.5px;">
				</div>
				<div class="form-groupz" style="display: flex;">
					<input id='addInput' autocapitalize="word" type="text" name="name" placeholder="Full Name" id="name" class="form-control addName" style="width: 100%;">
				</div>
				<div class="form-groupz" style="display: flex;">
					<input id='addInput' autocapitalize="word" type="text" name="user" placeholder="Username" id="user" class="form-control addUser" style="width: 50%;margin-right: 2.5px;">
					<input id='addInput' autocapitalize="word" type="text" name="pass" placeholder="Password" id="pass" class="form-control" style="width: 50%;margin-left: 2.5px;">
				</div>
				<button class="btn btn-success d-block" type="submit"> Register </button>
				<div class="duplicate"> </div>
			</form>
			</div>

		<div style="width:min-content;padding-right:25px">
		<p style="position: relative;left: 5px;opacity: .8;font-weight: bold;">Reset Database:</p>
			<form action="resetUnilevel.php" onsubmit="" style="margin-bottom: 0.75rem;" method="post">
				<button class="btn btn-danger d-block" type="submit"> Reset Unilevel </button>
				<div class="duplicate"> </div>
			</form>
		</div>

		</div>

	</div>
  </div>
  <canvas id="bg1"></canvas>
    <canvas id="bg2" style="background-color: #f8f9fa;"></canvas>
</div>


<footer class="page-footer font-small text-white bg-dark" id="footer1-section" style="display:none;box-shadow: inset -2px 8px 7px -4px #0d110b;z-index: 5;position: fixed;bottom: 0;width: 100%;">
		<div class="container containerF" style='max-width: 1165px;margin-bottom: -20px !important;'>
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">

					<!-- Logo -->
					<div class="logo_container">
						<div class="logo">
							<a class="justify-content-center justify-content-md-start" style="margin: auto;width: 100%;display: flex;">
								<img src="img/LogoBannerIncB2.png" alt="" style="will-change: transform;height: 67px;">
							</a>
						</div>
					</div>
					<div class="footer_text"><p><p>
						<b>VISION:</b><br>A premium direct selling company that can fulfill the dreams of all Filipinos through its innovative and rewarding business opportunities.<p>
						<b>MISSION:</b><br>
						 To live healthy and wealthy.					
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="footer_links">
						<div class="footer_title font-weight-bold">Useful Links</div><p>
						<div style="list-style-type: none;">
						<li style="margin-bottom:5px;"><a style="color:#46C51C;" href="adminPanel.php" class="">Admin Panel</a></li>
						<li style="margin-bottom:5px;"><a style="color:#46C51C;" href="#" class="">Database</a></li>
						</div>
					</div><p>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<div class="footer_title font-weight-bold">Contact Us</div>
						<div style="list-style-type: none;"><p>
							<li>Blk 199, lot<br>11 taurus st<br>Makati<br>1218 Metro Manila<br>Phillipines</li><p>
							<li>
								<span>Phone: </span>
									<div>Smart: 9074 256 623</div>
									<div>Globe: 9363 534 744</div>
							</li><p>
							<li><span>Email: </span><p><a href="mailto:blablabla@bla.bla" style="color:#46C51C;">yourmail@gmail.com</a></li>
							<li><span>Facebook: </span><p><a href="facebook.com" style="color:#46C51C;">Total Reward</a></li>

							</div>
					</div>
				</div>

			</div>
		</div>

<div class="footer-copyright text-center py-3" style="display: flex;">
	<div style="display: flex;margin: auto;">
	&copy; <script>document.write(new Date().getFullYear());</script> Copyright:
    &nbsp;<a href="#" style="color:#46C51C;"> Total Reward International Inc.</a>
  </div>
</div>
	</footer>
<script>
var msg = "<?php if(!empty($_GET['msg']))echo $_GET['msg']; ?>";

if(msg == "success")
{
  var str = '<div style="position: absolute;width: 100%;display: flex;"><div style="z-index: 10;padding-right: 30px;width: max-content;margin: auto;margin-top: 1em;" class="alert alert-dismissible alert-success"><button type="button" class="close">&times;</button>Database reset succesful!</div></div>';
  $("#services-section1").prepend(str);
}
else if(msg == "failed")
{
  var str = '<div style="position: absolute;width: 100%;display: flex;"><div style="z-index: 10;padding-right: 30px;width: max-content;margin: auto;margin-top: 1em;background-color: #FF4136DB;" class="alert alert-dismissible alert-danger"><button type="button" class="close">&times;</button>Error: Failed. Try again, maybe connection error?</div></div>';
  $("#services-section1").prepend(str);
}
// $("#name").blur(function(){
// 	if($("#name").text() != prevVal) $.post( "setUser.php", {name: $("#name").text(),gID: $('#gID').text()} );
// }); 

// $(".sellerNfo").click(function(e) {
//     if ($(this).is("td")) prevVal = $(this).text();
// 	else prevVal = $(this).val();
// });
// $(".sellerNfo").on('keypress',function(e) {
// 	if(e.which == 13) {
// 		e.preventDefault();
// 		$(this).blur();
//     }
// });
// $(".sellerNfo").on('keyup',function(e) {

// 	if(e.which == 27) {
// 		e.preventDefault();
// 		if ($(this).is("td")) $(this).text(prevVal);
// 		else $(this).val(prevVal);
// 		$(this).blur();
//     }
// });
// $("#password").click(function(){
// 	$("#password").text("");
// }); 
// $("#userInput").focusin(function(){
// 	$("#userInput").select();
// 	$("#userInput-flexdatalist").select();
// }); 
// $(".addName").focusout(function(){
// 	var namez = $(".addName").val();
// 	var namezArray = namez.split(' ');
// 	var finalNamez = namezArray[0].substring(0,3) + namezArray[namezArray.length-1].substring(0,3);
// 	$(".addUser").val(finalNamez);
// }); 

// if(msg == "success")
// {
//   var str = '<div style="position: absolute;width: 100%;display: flex;"><div style="z-index: 10;padding-right: 30px;width: max-content;margin: auto;margin-top: 1em;" class="alert alert-dismissible alert-success"><button type="button" class="close">&times;</button>Success</div></div>';
//   $("#services-section1").prepend(str);
// }
// else if(msg == "failed")
// {
//   var str = '<div style="position: absolute;width: 100%;display: flex;"><div style="z-index: 10;padding-right: 30px;width: max-content;margin: auto;margin-top: 1em;background-color: #FF4136DB;" class="alert alert-dismissible alert-danger"><button type="button" class="close">&times;</button>Error: Try again, probablly Global Seller ID duplicate</div></div>';
//   $("#services-section1").prepend(str);
// }
// $(".alert button.close").click(function (e) {
// 		$(this).parent().fadeOut(500);
// 	});
// function checkUsr(theForm) {
// if (theForm.gID.value == "")
// {
// 	alert('Some required information is missing!');
// 	return false;
// }
// else 
// {
// 	return true;
// }
// }
</script>

</body>
</html>