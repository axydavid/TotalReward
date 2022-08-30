
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
<link rel="stylesheet" type="text/css" href="number-picker-swiper/number-swiper.css">
    <script src="number-picker-swiper/number-swiper.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="dist/css/style.css">
</head>
<body>
<div id="myNumberSwiper" class="number-swiper" data-value="">
  <ol class="number-swiper-column number-swiper-column-2" data-column="2">
  <li>KOKO</li>
    <li>KAKA</li>
    <li>KIKI</li>
    
  </ol>
  
  <ol class="number-swiper-column number-swiper-column-1" data-column="1">
    <li>ada</li>
    <li>da</li>
    <li>dada</li>

  </ol>
</div>

<script>
var numbers = new NumberSwiper('myNumberSwiper',5);

setTimeout(function (){

  numbers.setColumnValue(2,"top");

}, 200);

$('.number-swiper-column-2').on( 'scroll', function(){
  console.log('Event Fired');
  $('.number-swiper-column-1').empty();
  numbers.findPckMob2(databaseData,$('.number-swiper-column-1 .number-swiper-active-number').innerText,false)
  numbers.init("myNumberSwiper");
});
$('.number-swiper-column-1').on( 'scroll', function(){
  console.log('Change Fired');

});
</script>
</body>
</html>