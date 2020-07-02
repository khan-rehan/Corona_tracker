<!DOCTYPE html>
<html>
<head>
	<title>Covid-19</title>
    	<link rel="icon" href="img/virus.png">
	<?php include'link/links.php'; ?>
	<?php include'css/style.php'; ?>
</head>
<body>

<nav class="navbar navbar-dark navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="index.php">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">about</a>
      </li>
        <a class="nav-link" href="index.php">WorldCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">IndiaCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">IndiaDaywise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">contact</a>
      </li>
      
    </ul>
    
  </div>
</nav>


<!--Day wise--->


<section class="corona_update container-fluid">
  <div class="my-5">
    <h3 class="text-uppercase text-center">COVID-19 LIVE UPDATES OF INDIA DAY WISE</h3>
  </div>

  <div class="table-responsive">

  	<table class="table text-center" id="tbl">
  		
		 <?php

		$data = file_get_contents('https://api.covid19india.org/data.json');
		$daywise = json_decode($data, true);
		//echo "<pre>";
		//print_r($daywise);
		$totalcount = count($daywise['cases_time_series']);

		$i=0;
		while ($i < $totalcount) {
		?>

		  <tr>
		  	<th class="text-left">Date & Month</th>
		  	<th colspan="5"></th>
		  </tr>

		  <tr>
		  	<td colspan="6" class="text-left"><?php echo $daywise['cases_time_series'][$i]['date']."<br>";  ?>	
		  	</td>
		  </tr>

		  <tr class="text-capitalize text-white">
		  	<th style="color: #fff; background: #2196f3;">total confirmed</th>
		  	<th style="color: #fff; background: #ffc107;">total recovered</th>
		  	<th style="color: #fff; background: #008C76FF;">total deceased</th>
		  	<th style="color: #fff; background: #e91e7f;">daily confirmed</th>
		  	<th style="color: #fff; background: #4caf50;">daily recovered</th>
		  	<th style="color: #fff; background: #EE2737FF;">daily deceased</th> 	
		  </tr>

		  <tr class="mb-5">
		  	<td style="background: #bed2f3;"><?php echo $daywise['cases_time_series'][$i]['totalconfirmed']."</br>"; ?>
		  	</td>
		  	<td style="background: #ffe493;"><?php echo $daywise['cases_time_series'][$i]['totalrecovered']."</br>"; ?>
		  	</td>
		  	<td style="background: #9ED9CCFF;"><?php echo $daywise['cases_time_series'][$i]['totaldeceased']."</br>"; ?>
		  	</td>
		  	<td style="background: #fc95c6;"><?php echo $daywise['cases_time_series'][$i]['dailyconfirmed']."</br>"; ?>
		  	</td>
		  	<td style="background: #88d28b;"><?php echo $daywise['cases_time_series'][$i]['dailyrecovered']."</br>"; ?>
		  	</td>
		  	<td style="background: #fb99a1;"><?php echo $daywise['cases_time_series'][$i]['dailydeceased']."</br>"; ?>
		  	</td>
		  </tr>

		 <?php
			$i++;
}

?>
  	</table>
  </div>
</section>

<!----scroll top ---->

<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>

<!----Footer ---->

<footer class="mt-5">
  <div class="footer_style text-black text-center container-fluid">
    <p>Copyright by Rehan Khan. Mail-  
    <a href="mailto:rehankhancr25@gmail.com" class="footer-link">rehankhancr25@gmail.com</a>
    </p>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script type="text/javascript">

  mybutton = document.getElementById("myBtn");

  window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
    if(document.body.scrollTop >100 || document.documentElement.scrollTop > 100) {
      mybutton.style.display = "block";
    }
    else {
      mybutton.style.display = "none";
    }
  }

  function topFunction() {
    document.body.scrollTop = 0; // For safari
    document.documentElement.scrollTop = 0; //For chrome, firefox and Opera
  }



</script>
</body>
</html>
