<nav class = "navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

	 <div class="container-fluid">
	 <a class = "navbar-brand"><img src="assets/logu.png">
	 <span class = "navbar-text">CARHUB</span></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
	</button>
	 <div class="collapse navbar-collapse" id="navbarSupportedContent">
	 <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="padding: 0px 5px 0px 5px">

			 <a class="nav-item nav-link" href = "homepage.php"> HOME </a>



			 <a class="nav-item nav-link" href = "stocks.php"> STOCK </a>



			 <a class="nav-item nav-link" href = "sell.php"> SELL A CAR </a>



			 <a class=" nav-item nav-link" href = "aboutus.php"> ABOUT US </a>

			 <a class=" nav-item nav-link" href = "contactus.php"> CONTACT US </a>

			 <a class="nav-item nav-link" href = "team.php"> TEAM </a>
			 <?php if (!isset($_SESSION["username"])) {

    		$message= '<a class="nav-item nav-link" href = "login.php"> LOGIN </a>';
			}
			else {
				$message='<a class="nav-item nav-link" href = "profile.php"> PROFILE </a>';
			}

				echo ($message);?>

	 </ul>
 </div>
</div>
 </nav>
