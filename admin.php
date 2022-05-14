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
        <a class="nav-link newsBtn" href="adminPanel.php" id="">Admin Panel</a>
      </li> 
    <li class="nav-item active">
        <a class="nav-link" href="#">Database<span class="sr-only">(current)</span></a>
	  </li>
	  <li class="nav-item">
        <a class="nav-link" href="unilevel.php">Unilevel</a>
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

  <div class="container" style="display: flex;z-index: 1;position: relative;">
	<div class="container containerz noPaddingMobile" style="flex-direction: column;display: flex;border-radius: 5px;box-shadow: 0px 0px 15px 2px #e5e5e5;padding: 30px;max-width: 100%;background: #FFFC;">
		<div style="display:flex;margin-left: auto;margin-right: auto;padding-bottom: 30px;">
		<input type="input" class="form-control flexdatalist" placeholder="Search for seller..." id='userInput' list="userInputList"  autocapitalize="word" style="margin-left: auto;margin-right: 5px;"/>
		<datalist class="form-control" id="userInputList">
		</datalist>
		</div>
		<div>
		<table style="width:100%">
		<!-- <colgroup>
				<col span="1" style="width: 15%;">
				<col span="1" style="width: 40%;">
				<col span="1" style="width: 15%;">
				<col span="1" style="width: 15%;">
				<col span="1" style="width: 15%;">
		</colgroup> -->
			<tr class="table-active">
				<th>Seller ID</th>
				<th>Sponsor ID</th>
				<th>Handler ID</th>
				<th>GCash</th>
				<th>Full Name</th>
				<th>User</th>
				<th>Password</th>
				<th>Unilevel</th>
			</tr>
			<tr>
				<td id="gID" ></td>
				<td id="pID" ></td>
				<td id="hID" class="sellerNfo" contenteditable='true'></td>
				<td id="gCash" class="sellerNfo" contenteditable='true'></td>
				<td id="name" class="sellerNfo" contenteditable='true'>Search for seller!</td>
				<td id="user" class="sellerNfo" contenteditable='true'></td>
				<td id="password" class="sellerNfo" contenteditable='true'></td>
				<td style="padding-top: 0;padding-bottom: 0;"><input style="width: 100%;border: 0;" type="number" id="solo" class="sellerNfo" contenteditable='true'></td>
				<!-- input> -->
			</tr>
			</table> 
			</div>

	</div>
  </div>
  <canvas id="bg1"></canvas>
    <canvas id="bg2" style="background-color: #f8f9fa;"></canvas>
</div>


<footer class="page-footer font-small text-white bg-dark" id="about-section" style="display:none;box-shadow: inset -2px 8px 7px -4px #0d110b;z-index: 5;position: fixed;bottom: 0;width: 100%;">
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
						<li style="margin-bottom:5px;"><a style="color:#46C51C;" href="#" class="">Admin Panel</a></li>
						<li style="margin-bottom:5px;"><a style="color:#46C51C;" href="admin.php" class="">Database</a></li>
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
var objIndex;
window.addEventListener("load", function()
    {
    //   $.ajax({  method: "POST", url: "getUser.php"}).done(function(data){
    //     data;
    //   });
      $('.flexdatalist').flexdatalist({
      minLength: 1,
      data:"getUser.php",
      searchIn: ['name','gID','user'],
      visibleProperties: ['gID',"name","user"],
      focusFirstResult: 'true',
      searchDelay: 1,
      searchByWord: 'true',
      maxShownResults: 5,
	  cache: false,
	  valuesSeparator:'&emsp;'
      });

    //   loadData('all');

$('input.flexdatalist').on('change:flexdatalist', function(e, set, options) {
    // if (e.keyCode === 27) 
    // {
    //   set.text = "";
    // }
    });    

$('input.flexdatalist').on('select:flexdatalist', function(e, set, options) {

	$("#userInput").val('');
	$('#gID').text(set.gID);
	$('#hID').text(set.hID);
	$('#gCash').text(set.gCash);
	$('#name').text(set.name);
	$('#user').text(set.user);
	$('#password').text('●●●●●●●');
	$('#solo').val(set.solo);

	e.preventDefault();
	$("#userInput").blur();
	$("#userInput-flexdatalist").blur();
	
	objIndex = $('.flexdatalist').flexdatalist('data').findIndex(obj => obj.cID.includes(set.gID+','));
	$('#pID').text($('.flexdatalist').flexdatalist('data')[objIndex].gID);
	objIndex = $('.flexdatalist').flexdatalist('data').findIndex((obj => obj.gID == set.gID));
});


    
    });
	//$('.flexdatalist').flexdatalist('data') = $('.flexdatalist').flexdatalist('data');
$("#hID").blur(function(){
	if($("#hID").text() != prevVal) 
	{
		$.post( "setUser.php", {hID: $("#hID").text(),gID: $('#gID').text()} );
		//objIndex = $('.flexdatalist').flexdatalist('data').findIndex((obj => obj.gID == prevVal));
		$('.flexdatalist').flexdatalist('data')[objIndex].hID = $("#hID").text();
	}
}); 
$("#gCash").blur(function(){
	if($("#gCash").text() != prevVal) 
	{
		$.post( "setUser.php", {gCash: $("#gCash").text(),gID: $('#gID').text()} );
		//objIndex = $('.flexdatalist').flexdatalist('data').findIndex((obj => obj.gCash == prevVal));
		$('.flexdatalist').flexdatalist('data')[objIndex].gCash = $("#gCash").text();
	}
}); 
$("#name").blur(function(){
	if($("#name").text() != prevVal) 
	{
		$.post( "setUser.php", {name: $("#name").text(),gID: $('#gID').text()} );
		//objIndex = $('.flexdatalist').flexdatalist('data').findIndex((obj => obj.gID == prevVal));
		$('.flexdatalist').flexdatalist('data')[objIndex].name = $("#name").text();
	}
}); 
$("#user").blur(function(){
	if($("#user").text() != prevVal) 
	{	
		$.post( "setUser.php", {user: $("#user").text(),gID: $('#gID').text()} );
		//objIndex = $('.flexdatalist').flexdatalist('data').findIndex((obj => obj.gID == prevVal));
		$('.flexdatalist').flexdatalist('data')[objIndex].user = $("#user").text();
	}
}); 
$("#password").blur(function(){
	if($("#password").text() != prevVal) $.post( "setUser.php", {password: $("#password").text(),gID: $('#gID').text()} );
}); 
$("#solo").blur(function(){
	if($("#solo").val() != prevVal) 
	{
		$.post( "setUser.php", {solo: $("#solo").val(),gID: $('#gID').text()} );
		//objIndex = $('.flexdatalist').flexdatalist('data').findIndex((obj => obj.gID == prevVal));
		$('.flexdatalist').flexdatalist('data')[objIndex].solo = $("#solo").val();
	}
}); 


var prevVal;
$(".sellerNfo").click(function(e) {
    if ($(this).is("td")) prevVal = $(this).text();
	else prevVal = $(this).val();
});
$(".sellerNfo").on('keypress',function(e) {
	if(e.which == 13) {
		e.preventDefault();
		$(this).blur();
    }
});
$(".sellerNfo").on('keyup',function(e) {

	if(e.which == 27) {
		e.preventDefault();
		if ($(this).is("td")) $(this).text(prevVal);
		else $(this).val(prevVal);
		$(this).blur();
    }
});
$("#password").click(function(){
	$("#password").text("");
}); 
$("#userInput").focusin(function(){
	$("#userInput").select();
	$("#userInput-flexdatalist").select();
}); 
</script>

</body>
</html>