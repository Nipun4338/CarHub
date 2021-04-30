
<?php session_start(); ?>
<?php
include('database/dbconfig.php');
$sql="SELECT * FROM slider2";
$result=mysqli_query($link,$sql);
$data=array();
$noOfRows=mysqli_num_rows($result);
if($noOfRows){
  while($row=mysqli_fetch_assoc($result)){
    if($row['status']==1)
    {
      /*echo "<pre>";
      print_r($row);*/
      array_push($data,$row);
      //echo "</pre>";
    }
  }
}

?>

<!DOCTYPE html>
<html>
<head>
		<title>Home | CarHub</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial scale = 1.0">
		<script src = "https://code.jquery.com/jquery-2.1.3.min.js"></script>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	  <link rel="stylesheet" href="A.assets,,_royalslider,,_royalslider.css+assets,,_royalslider,,_skins,,_default,,_rs-default.css+assets,,_royalslider,,_skins,,_minimal-white,,_rs-minimal-white.css+css,,_bootstrap.min.css+css,,_normalize.css+css,,_jquery-ui.css,Mcc.y-DhrddGnN.css.pagespeed.cf.Hfy0poW2iH.css"/>

		<link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">


		<!-- Bootstrap Stylesheet -->
<link rel="stylesheet" href="/path/to/bootstrap.min.css" />
<!-- Bootstrap JS -->
<script src="/path/to/jquery.min.js"></script>
<script src="/path/to/bootstrap.min.js"></script>
<!-- <a href="https://www.jqueryscript.net/tags.php?/Carousel/">Carousel</a> Extension -->
<script src="carousel.js"></script>

</head>


<body>
  <?php
	include('includes/nav.php');
	 ?>


	<section class="home">
     <div class="slider">
       <?php
         foreach ($data as $row) {
           // code...
        ?>
        <div id class="slide active img-responsive" style="background-image: url('<?php echo $row['image'];?>')">
            <div class="container">
                <div class="caption">
                    <!--<h1 style="color:#FFFFFF"><?php echo $row[1];?></h1>
                    <p style="color:#FFFFFF"><?php echo $row[2];?></p>-->
                </div>
            </div>
        </div>
        <?php  } ?>
     </div>

    <!-- controls  -->
    <div class="controls">
        <div class="prev"><</div>
        <div class="next">></div>
    </div>

    <!-- indicators -->
    <div class="indicator">
    </div>

  </section>


 <script src="script1.js"></script>


<style type="text/css">h2{color: #ffff;}</style>

<div class="header" style="color:#329FB1;padding: 30px">
	<h1 > <b>WELCOME TO CARHUB<b></h1>
		<p style="color:#C0B7B4;">CARHUB is a premium luxury car importer that aims to serve those who truly appreciate luxury automobiles. We primarily import high end cars of the highest grades. Working closely with some of the biggest Automobile manufacturers of the world, we offer the best selection and also the most extensive customization options. We also have the necessary software, training and technical know-how to provide full service support for all European manufacturers. This makes Continental Motors the only luxury high end automobile importer in Bangladesh that provides full warranty on all vehicles imported with complete technical capacity.</p>
</div>

<div class="container">
    <div id="home-keys" class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding: 10px">
            <div class="keys-item stock">
                <a href="#">Stock</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding: 10px">
            <div class="keys-item reviews">
                <a href="#">CUSTOMER REVIEWS</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="padding: 10px">
            <div class="keys-item finance">
                <a href="#">FINANCE</a>
            </div>
        </div>
    </div>
</div>


<style type="text/css">h2{color: #ffff;}</style>
<?php $sql="SELECT * FROM cars";
$result1=mysqli_query($link,$sql) or die(mysqli_error($link));
$data1=array();
$noOfRows1=mysqli_num_rows($result1);
if($noOfRows1){
  while($row1=mysqli_fetch_assoc($result1)){

      array_push($data1,$row1);

  }
}

 ?>



<section id="home-featured">
 <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <img class="featured-icon" src="assets/featured logo.png" alt="Featured Icon">
                <h1 class="title" style="color:#fff"><b>FEATURED</b></h1>


                <div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
          <div class="carousel-item active">
              <div class="col-lg-4 col-md-6">
                  <img class="img-fluid" src="assets/logu.png" style='height: 90%%; width: 100%; object-fit: cover'>
              </div>
          </div>
          <?php
            foreach ($data1 as $row1) {
              // code...
           ?>
          <div class="carousel-item">
              <div class="col-lg-4 col-md-6">
                  <img class="img-fluid" src="<?php echo $row1['car_image'];?>" style='height: 90%; width: 100%; object-fit: cover'>
                  <a href="car.php?car=<?php echo $row1['car_id']?>"><?php echo $row1['car_name'];?></a>
              </div>
          </div>
          <?php
            }
           ?>
        </div>
        <a class="carousel-control-prev bg-dark w-auto" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

        </a>
        <a class="carousel-control-next bg-dark w-auto" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>

        </a>
    </div>
</div>


	<!--scripts loaded here-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="carousel.js"></script>




            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>



    <?php
    include('includes/footer.php');
     ?>
