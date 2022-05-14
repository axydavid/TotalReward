<?php 
	session_start();
	$con = mysqli_connect('localhost','u155678759_axy','Aviavi200100!','u155678759_databasename1');	

  // UPDATE `tablename` SET `tot`=? WHERE `gID` = 1;


?>
<!DOCTYPE html>
<html>
<head>
<title>Results</title>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">

<!-- <link rel="stylesheet" href="dist/css/bootstrap.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="dist/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet"> -->
<!-- <link href="dist/css/barChart.css" rel="stylesheet"> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.js"></script> -->
<!-- <link href="dist/css/tabulator(2).css" rel="stylesheet"> -->
	<!-- <script type="text/javascript" src="dist/js/tabulator.js"></script> -->
  
  <link rel="stylesheet" href="dist/css/bootstrap.css">
<script src="dist/js/jquery-1.12.4.min.js"></script>
<link  href="dist/fonts/gfonts.css" rel="stylesheet">
<script src="dist/js/bootstrap.min.js"></script>
<script src="dist/js/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/css/style.css">

<link rel="stylesheet" type="text/css" href="number-picker-swiper/number-swiper.css">
<!-- <script src="number-picker-swiper/number-swiper.js" type="text/javascript"></script> -->
</head>
<body>
  <div class="line" id="line" style=""></div>
<div class="overlay scrollBind" style="background: rgba(0, 0, 0, 0) radial-gradient(615px 62px at center 20%, rgba(255, 255, 255, 0), rgba(255, 255, 255, 0.9)) repeat scroll 0% 0%;position: absolute;width: 100%;height: 100%;z-index: 5;"></div>
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-expand" id = "navbar-section" style="box-shadow: 0px 0px 15px 2px #e5e5e5;border: none;z-index: 2;">
<button id="toggleButton" class="navbar-toggler collapsed align-right" type="button" data-toggle="collapse" data-target="#navbarColor04" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style='background-image:none;display:flex;'>
	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="margin: auto;"><path d="M10.79 16.29c.39.39 1.02.39 1.41 0l3.59-3.59c.39-.39.39-1.02 0-1.41L12.2 7.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L12.67 11H4c-.55 0-1 .45-1 1s.45 1 1 1h8.67l-1.88 1.88c-.39.39-.38 1.03 0 1.41zM19 3H5c-1.11 0-2 .9-2 2v3c0 .55.45 1 1 1s1-.45 1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v12c0 .55-.45 1-1 1H6c-.55 0-1-.45-1-1v-2c0-.55-.45-1-1-1s-1 .45-1 1v3c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z" fill="#7f7f7f"></path>
          <path d="M10.79 16.29c.39.39 1.02.39 1.41 0l3.59-3.59c.39-.39.39-1.02 0-1.41L12.2 7.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L12.67 11H4c-.55 0-1 .45-1 1s.45 1 1 1h8.67l-1.88 1.88c-.39.39-.38 1.03 0"></path>
        </svg>
	</span>
  </button>
<div style="max-width: 1200px;width: 100%;display: flex;margin: auto;">
<a class="navbar-brand" href="#" style="width: 66px;">
<img id="logoImg"src="img/Logo.png" alt="Total Reward" style="will-change: transform;will-change: transform;height: 67px;position: absolute;top: 3px;pointer-events: none;">
</a>
  <div class="collapse navbar-collapse" id="navbarColor03" style="overflow: hidden;">
    <ul class="navbar-nav" style="margin:0;border:0;width: unset;margin-left: auto;">
    <li class="nav-item align-left active hideMobile" style='font-weight: bold;font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-size: 21px;'>
        Global Seller Incentive Program
	  </li>  
    <li class="nav-item align-right active hideMobile">
        <a class="nav-link" href="#"></a>
	  </li>  
    <button id="settings" class="navbar-toggler " style="outline: none;display:unset;border-color: transparent;padding: unset;font-size: unset;" type="button" data-toggle="collapse" data-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
        <li class="nav-item">
          <a class="nav-link"><img id="" src="img/settings.png" alt="settings" style="width:24px;height:24px;">
        </a>
        </li>
      </button>

      <button id="logOut" class="navbar-toggler " onclick="logout.php"style="outline: none;display:unset;border-color: transparent;padding: unset;font-size: unset;" type="button" data-toggle="" data-target="" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><img id="" src="img/logout.png" alt="settings" style="width:24px;height:24px;">
        </a>
        </li>
      </button>

    </ul>
  </div>
  </div>
  <div class="navbar-collapse1 collapse" id="navbarColor04" style="position: absolute; right: 17.4%; top: 69px; box-shadow: rgb(229, 229, 229) 0px 5px 8px; border-radius: 5px;">
  <button id="logIn" class="navbar-toggler collapsed" style="cursor: unset;display:unset;border-color: transparent;padding: unset;font-size: unset;position: absolute;width: 1000%;height: 1000%;left: -794%;top: -69px;" type="button" data-toggle="collapse" data-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
  </button>
  <div style="background:white;padding: 20px;z-index: 6;position: relative;">
  <div class="" style="margin-left: auto;margin-right: auto;">
				
					<form action="changePassword.php" style="" method="post">
						<div class="form-group">
							<input id="nameInput" autocomplete="off" autocapitalize="word" type="text" name="pass1" id="pass1" placeholder="New Password" class="form-control">
						</div>
						<button class="btn btn-health d-block m-auto" type="submit"> Change Password </button>
					</form>
				
	</div>

  </div>
  </div>
</nav>

<div class="container specialContainer contentContainer" style="margin-top: 15px;margin-bottom: 15px;width: auto;overflow: hidden;flex-direction: column;">

</div>

<script>
var databaseData;
var myTimer;
var prevVal;
var topElt;
var xPos;
var yPos;
var initVal;
var initValX;
var col2;
	var winMatch = window.matchMedia("only screen and (max-width: 575px)").matches;
if (winMatch) 
{

  var numbers;
  findPckMob(true);

}
else findPck();

var colors = 
[
  "#34568B",     "#FF6F61",     "#0072B5",     "#88B04B",     "#F7CAC9",     "#92A8D1",    "#008b8b",
  "#B565A7",     "#009B77",     "#DD4124",     "#D65076",     "#45B8AC",     "#EFC050",     "#5B5EA6",     "#9B2335",     "#DFCFBE",
  "#55B4B0",     "#E15D44",     "#7FCDCD",     "#BC243C",     "#C3447A",     "#98B4D4",     "#FDAC53",     "#9BB7D4",     "#B55A30",
  "#F5DF4D",     "#ffb6c1",     "#ffffe0",     "#00ff00",     "#ff00ff",     "#800000",     "#000080",     "#808000",     "#ffa500",     
  "#ffc0cb",     "#800080",     "#800080",     "#ff0000",    "#c0c0c0",     "#ffffff",     "#ffff00"
];
var str = '<div class="alertz" style="display: grid;"><div style="opacity:0;background:transparent;margin-right: -10px;outline: none;text-align: center;"></div><div style="display: flex;margin: 10px;">';
str+='<div style="display: flex;width: 100%;font-size: 20px;"><b style="text-transform:capitalize;margin-right: auto;"><?php echo ucfirst($_SESSION['name']);?></b> GS Code: <b style="text-transform:capitalize;"><?php echo ucfirst($_SESSION['gID']);?></b></div>'; //, here👇 are your rewards:
str+= '</div></div><div class="cont"></div>';
$(".container").append(str);

$(".gIDB").click(function(){
	getPck($(this).val(),1);
}); 

function findPck()
{
  $.post("findPackage.php", function( data ) 
    {
      try {
            data = JSON.parse(data);
            prevName = "hi";
            var str1 = '<div style="display: flex;margin: 10px;margin-top: 0;"><div style="margin: auto;display: flex;flex-wrap: wrap;">';
            for(var i=0;i<data.length;i++)
            {
              if (prevName!=data[i].name && i > 0)str1 +='</div></div><div style="margin-bottom: 10px;border: 1px '+colors[i]+' solid;border-radius: 5px;margin-left: 2.5px;margin-right: 2.5px;padding-left: 2.5px;padding-right: 2.5px;"><div style="position: relative;top: -11px;background: white;width: max-content;color:'+colors[i]+';">'+data[i].name+'</div><div class="kool" style="position: relative;top: -2px;display: flex;flex-wrap: wrap;justify-content: center;">';
              else if (i == 0) str1 +='<div style="margin-bottom: 10px;border: 1px '+colors[i]+' solid;border-radius: 5px;margin-left: 2.5px;margin-right: 2.5px;padding-left: 2.5px;padding-right: 2.5px;"><div style="position: relative;top: -11px;background: white;width: max-content;color:'+colors[i]+';">'+data[i].name+'</div><div class="kool" style="position: relative;top: -2px;display: flex;flex-wrap: wrap;justify-content: center;">';
              str1 += '<div class="btnPad" style="width: min-content;"><input class="gIDB btn btn-primary" type="button" value="'+data[i].gID+'" onclick="getPck($(this).val(),1);" style="background-color: #1D64DF;font-size: 18px;margin-left: 2.5px;margin-right: 2.5px;margin-bottom:5px;"/></div>';
              prevName = data[i].name;
            } 
            str1 +='</div>';
            $(".alertz").append(str1+'</div></div>');

            getPck(data[0].gID,0);
          }
      catch(err) {
            $(".container").append(data);
          }
    });
    $(".gIDB").first().focus();

}


function findPckMob(initializ = false)
{
  $.post("findPackage.php", function( data ) 
    {
      data = JSON.parse(data);
      databaseData = data;
      try {
        prevName = "hi";
        var str1 = '<div style="height:0px;"><div id="myNumberContainer" style="position:absolute;z-index:10;" ><div id="myNumberSwiper" class="number-swiper" style="margin-left:auto;margin-right:auto;"><ol class="number-swiper-column number-swiper-column-2" id="number-swiper-column-2" style="scroll-behavior: smooth;width: max-content;"><div class="filler"></div>';
        for(var i=0;i<data.length;i++)
            {
              if(prevName!=data[i].name)
              {
                if(i!=0)str1 +='<li>'+data[i].name+'</li>'; 
                else str1 +='<li class="selectedV">'+data[i].name+'</li>';
                
              }
              prevName = data[i].name;
            }
            str1 +='<div class="filler"></div></ol></div></div></div>';
            $(".alertz").append(str1);
            col2 = document.getElementById('number-swiper-column-2');
            findPckMob2(data,initializ);

      } 
      catch(err) {
            $(".container").append(data);
          }
  });

}
function findPckMob2(data,initializ = false)
{
  if(initializ)
  {

    $('.overlay').on( 'touchstart', function(e){

      xPos = e.originalEvent.touches[0].pageX;
      yPos = e.originalEvent.touches[0].pageY;

      $('#line').css('top',yPos);
      $('.overlay, #myNumberContainer, #line').fadeTo(300,1);

      $('#myNumberContainer,#line').css({'top':yPos,'left':xPos - ($('#myNumberContainer').width()/2)});
      // $('.number-swiper-column').animate({ 
      //   // 'padding-bottom' : 70,
      //   // 'padding-top' : 70,
      //   'top':-70,
      // }, 500);
      e.preventDefault();
      prevVal = yPos;
      initVal = prevVal+10;
    });
    $('.overlay').on( 'touchmove', function(e){
      initValX = e.originalEvent.touches[0].pageX;
      var yPos = e.originalEvent.touches[0].pageY;
      //console.log(prevVal);

      col2.scrollTop = (prevVal- yPos);
      e.preventDefault();
    });
    $('.overlay').on('touchend', function (e) {
      $('.overlay,#line').fadeTo(500,0);
      topElt = document.elementFromPoint(initValX, initVal);
      console.log(topElt.innerText);
      try { $('#myNumberContainer .selectedV').removeClass("selectedV"); }
      catch{ }
      if(topElt.tagName == "LI")topElt.classList.add("selectedV");
      
    });
  }

  try{var name = $('.number-swiper-column-2 .selectedV')[0].innerText;} catch {}
  
  // if(!initializ) var str1 ='';
  // else   var str1 = '<ol class="number-swiper-column number-swiper-column-1" id="number-swiper-column-1" style="display:none;" data-column="1">';
  // var thisgID = new Array();
  // for(var i=0;i<data.length;i++)
  //   {
  //     if(name==data[i].name)
  //     {
  //       str1 +='<li>'+data[i].gID+'</li>';
  //       thisgID.push(data[i].gID);
  //     }
  //   }
  
  // if(initializ)
  // {
  //   str1 +='</ol>';
  //   $("#myNumberSwiper").append(str1);
  //   numbers.init("myNumberSwiper");

  //   $('.number-swiper-column-1').on( 'touchend', function(){
  //     if ($('.number-swiper-column-1 > *').length > 1) console.log('Change Fired');
  //   if ($('.number-swiper-column-1 > *').length > 1) findPckMob2(databaseData,false);
    
  // });
  // }
  // else 
  // {
  //   $('.number-swiper-column-1').empty();
  //   $('.number-swiper-column-1').append(str1);
  //   //numbers.init("myNumberSwiper");
 
  // }
  //   clearTimeout(myTimer);
  //   myTimer = setTimeout(function (){
  //     getPck($('.number-swiper-column-1 .selectedV')[0].innerText,1);

  //   }, 200);



}
function getPck(gID, chck) 
{
   var payload = {"gID": gID};    
    $.post("getPackages.php",payload, function( data ) 
    {
      try {
            data = JSON.parse(data);
          }
      catch(err) {
            $(".container").append(data);
          }
          var totNum = 0;
          var tempNum = 0;
      str ='<div class="al2" style="border: solid 1px #bfbfbf;border-radius: 5px;border-bottom: solid 0px #bfbfbf;">';
      for(var i = 0; i<data.length; i++)
      {
        if(data.length>1) if(i+1==data.length) break;
        totNum = data.reduce((a, b) => a.solo + b.solo);
        if(typeof totNum != 'number') totNum = totNum.solo;
        str += '<div class="row mb-3" style="width:100%;display: flex;margin-left: 0px;margin-bottom: 0px !important;border-bottom: solid 1px #bfbfbf;background-color:'+colors[i]+'25">';
        // <div class="themed-grid-col" style="width:20%;text-align: center;padding: 15px;border-right: solid 1px #bfbfbf;"></div>
        if (i==0) 
        {
          str += '<div class="themed-grid-col" style="margin-right: -1px;width:20%;text-align: center;padding: 15px 0 15px 0;border-right: solid 1px #bfbfbf;border-bottom: solid 0px #bfbfbf;">You</div>';    
          str += '<div class="themed-grid-col" style="margin-right: -1px;width:40%;text-align: center;padding: 15px 0 15px 0;border-right: solid 1px #bfbfbf;">'+totNum+' Total</div>';    
          str += '<div class="themed-grid-col" style="width:40%;text-align: center;padding: 15px 0 15px 0;border-bottom: solid 0px #bfbfbf;">'+data[i].solo+' Unilevel</div></div>';
     
        }
        if(data.length>1) 
        {
          if(i==0) str += '<div class="row mb-3" style="width:100%;display: flex;margin-left: 0px;margin-bottom: 0px !important;border-bottom: solid 1px #bfbfbf;background-color:'+colors[8]+'25">';
          str += '<div class="themed-grid-col" style="margin-right: -1px;width:20%;text-align: center;padding: 15px 0 15px 0;border-right: solid 1px #bfbfbf;">Level '+parseInt(i+1)+ '</div>';
          str += '<div class="themed-grid-col" style="margin-right: -1px;width:40%;text-align: center;padding: 15px 0 15px 0;border-right: solid 1px #bfbfbf;">'+data[i].pack+' GS</div>';
          try{tempNum = data[i+1].solo}catch{tempNum = 0};
          str += '<div class="themed-grid-col" style="width:40%;text-align: center;padding: 15px 0 15px 0;;">'+tempNum+' Unilevel</div>';
          if(i==0) str +='</div>';
        }
        else  str +='</div>';

      }
      str += '</div>';
      // $(".container").clear();
      if(chck!=0)$(".cont").empty();
      $(".cont").append(str);
    });
}


</script>
</body>
</html>