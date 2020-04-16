<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include'link/links.php'; ?>
	<?php include'css/style.php'; ?>
</head>
<body onload="fetch()">

<nav class="navbar navbar-dark navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
        <a class="nav-link" href="#worldid">WorldCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">IndiaCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiadaywise.php">IndiaDaywise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
      
    </ul>
    
  </div>
</nav>

<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="img/unity.jpg" width="300" height="300">
			</div>
		</div>

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"> <img src="img/corona.png" width="50" height="50"></span>na Virus</h1>
			</div>
		</div>
	</div>
</div>

<!--live corana update worldwide---->

<section class="corona_update container-fluid" id="worldid">
	<div class="mb-3">
		<h3 class="text-uppercase text-center">COVID-19 LIVE UPDATES OF THE WORLD</h3>
	</div>

	<div class="table-responsive">
		
		<table class=" table table-bordered table-striped text-center" id="tbval">
			<tr style="color: #fff; background: #202020;">
				<th>Country</th>
				<th>TotalConfirmed</th>
				<th>TotalRecovered</th>
				<th>TotalDeaths</th>
				<th>NewConfirmed</th>
				<th>NewRecovered</th>
				<th>NewDeaths</th>
			</tr>
		</table>

	</div>
	
</section>


<!-- About Section-->

<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>About COVID-19</h1>	
	</div>

	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
			<img src="img/aboutcorona.jpg" class="img-fluid">
		</div>

		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is COVID-19(Corona-Virus)</h2>
			<p>Coronavirus disease (COVID-19) is an infectious disease caused by a new virus.
				The disease causes respiratory illness (like the flu) with symptoms such as a cough, fever, and in more severe cases, difficulty breathing.<br><br>
				<strong>How it spreads</strong><br>
				Coronavirus disease spreads primarily through contact with an infected person when they cough or sneeze. It also spreads when a person touches a surface or object that has the virus on it, then touches their eyes, nose, or mouth.</p>
		</div>
	</div>
</div>

<!--- corona symptoms-->

<div class="container-fluid pt-5 pb-5" id="sympid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Coronavirus Symptoms</h1>	
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="img/cough.png" class="img-fluid" width="120" height="120">
					<figcaption>Cough</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="img/runnynose.png" class="img-fluid" width="120" height="120">
					<figcaption>Running Nose</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="img/fever.png" class="img-fluid" width="120" height="120">
					<figcaption>Fever</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="img/sick.png" class="img-fluid" width="120" height="120">
					<figcaption>Cold</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="img/tired.png" class="img-fluid" width="120" height="120">
					<figcaption>Tiredness</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
					<img src="img/breathing.png" class="img-fluid" width="120" height="120">
					<figcaption>Difficulty in breathing(severe cases)</figcaption>
				</figure>
			</div>
		</div>
	</div>
</div>

<!--- corona prevention-->

<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>6 Steps Prevention Against Coronavirus</h1>	
	</div>

	<div class="container">
		<div class="row">

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="img/handwash.png" class="img-fluid" width="90" height="90">
				</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							Wash your hands regurarly for 20 seconds with soap and water or alcohol-based hand rub.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="img/mask.png" class="img-fluid" width="90" height="90">
				</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="img/close_contact.png" class="img-fluid" width="90" height="90">
				</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							Avoid close contact(1 meter or 3 feet) with people who are unwell.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="img/home.png" class="img-fluid" width="90" height="90">
				</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							Stay home and self-isolate from others in the household if you feel unwell.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="img/news.png" class="img-fluid" width="90" height="90">
				</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							Stay informed by watching news & follow the recommended practices.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure>
					<img src="img/fever1.png" class="img-fluid" width="90" height="90">
				</figure>
					</div>

					<div class="col-lg-8 col-md-8 col-12">
						<p>
							If you have fever, cough and difficulty breathing, seek mdeical care early.
						</p>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>

<!--- Contact us asap-->

<div class="container-fluid pt-5 pb-5" id="contactid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>Contact Us</h1>	
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
				<form action="" method="POST">

					<div class="form-group">
					    <label>Username</label>
					    <input type="text" class="form-control" name="username"placeholder="name" autocomplete="off">
				  	</div>

				  <div class="form-group">
					    <label>Email</label>
					    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
				  </div>

				   <div class="form-group">
					    <label>Mobile number</label>
					    <input type="number" class="form-control" name="mobile"placeholder="contact no." autocomplete="off" required>
				  	</div>
				 
				  	<div class="form-group">
					    <label>Select Symptoms</label>
					    <br>

					    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					    	<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
					    	<label class="custom-control-label" for="customcheckbox1">Cold</label>	
					    </div>

					    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					    	<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
					    	<label class="custom-control-label" for="customcheckbox2">Fever</label>	
					    </div>

					    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					    	<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breathing">
					    	<label class="custom-control-label" for="customcheckbox3">Difficulty in breathing</label>	
					    </div>

					    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
					    	<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
					    	<label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>	
					    </div>

					</div>

				    <div class="form-group">
					    <label for="exampleFormControlTextarea1">Describe how are you feeling</label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg">
					    </textarea>
				    </div>

				    <button type="submit" class="btn btn-primary" name="submit">Submit</button>

				</form>
			</div>
		</div>		
	</div>

</div>

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

<script type="text/javascript">

	$('.count').counterUp({
		delay:10,
		time:3000
	})
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

function fetch() {
	$.get("https://api.covid19api.com/summary",

		function (data)
		{
			//console.log(data['Countries'].length)
			var tbval = document.getElementById('tbval');

			for (var i=1; i<(data['Countries'].length); i++){
				var x =tbval.insertRow();
				x.insertCell(0);

				tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];

				x.insertCell(1);
				tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];	
				x.insertCell(2);
				tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];

				x.insertCell(3);
				tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
;
				x.insertCell(4);
				tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];

				x.insertCell(5);
				tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];

				x.insertCell(6);
				tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
			}
		}
	);
}



</script>

</body>
</html>


<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$symp = $_POST['coronasym'];
	$message = $_POST['msg'];

	$chk = "";

	foreach($symp as $chk1) {
		$chk .= $chk1.",";
	}

	$insertquery = "insert into coronacase(username, email, mobile, symp, message) values('$username', '$email', '$mobile', '$chk', '$message')";

	$query = mysqli_query($con, $insertquery);

		if($con){
		?>
		<script>
			alert("Insertion successful");
		</script>
		<?php
	}else {
		?>
		<script>
			alert(" No inserted");
		</script>
		<?php
	}

}

?>