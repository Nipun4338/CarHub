
<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="carhub";

$link=mysqli_connect($host,$user,$password,$db);

if(!empty($_GET["car"])){
$car=$_GET["car"];
}
else {
  $car=1;
}

$sql="";
if (isset($_SESSION["username"]))
{
 $sql="SELECT * FROM cars where car_id=$car";
}
else {
  $sql="SELECT * FROM cars where car_id=$car and status=0";
}

$result=mysqli_query($link,$sql) or die(mysqli_error($link));
$data=array();
$noOfRows=mysqli_num_rows($result);
if($noOfRows){
  while($row=mysqli_fetch_assoc($result)){

      /*echo "<pre>";
      print_r($row);*/
      array_push($data,$row);
      //echo "</pre>";
    
  }
}
?>

<!DOCTYPE html>
<html>
<head>
		<title>Car | CarHub</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial scale = 1.0">
		<script src = "https://code.jquery.com/jquery-2.1.3.min.js"></script>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	  <link rel="stylesheet" href="A.assets,,_royalslider,,_royalslider.css+assets,,_royalslider,,_skins,,_default,,_rs-default.css+assets,,_royalslider,,_skins,,_minimal-white,,_rs-minimal-white.css+css,,_bootstrap.min.css+css,,_normalize.css+css,,_jquery-ui.css,Mcc.y-DhrddGnN.css.pagespeed.cf.Hfy0poW2iH.css"/>
		<link rel="stylesheet" href="style.css">



		<!-- Bootstrap Stylesheet -->
<link rel="stylesheet" href="/path/to/bootstrap.min.css" />
<!-- Bootstrap JS -->
<script src="/path/to/jquery.min.js"></script>
<script src="/path/to/bootstrap.min.js"></script>
<!-- <a href="https://www.jqueryscript.net/tags.php?/Carousel/">Carousel</a> Extension -->
<script src="carousel.js"></script>



<style type="text/css">
        /*Setting Basic Dimensions to give
        gallary view */
        .container{
            margin: 0 auto;
            width: 90%;
        }
        .main_view{
            width: 80%;
            height: 25rem;
        }
        .main_view img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .side_view{
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .side_view img{
            width: 9rem;
            height: 7rem;
            object-fit: cover;
            cursor: pointer;
            margin:0.5rem;
        }
        ul.info{
          list-style: none;
          border-top: 1px dotted #AAA;
          margin: 60px 0 20px;
          font-size: 20px;
        }
    </style>
</head>


<body style="background:#fff">
  <?php
  include('includes/nav.php');
   ?>

    <div class="container-fluid">
      <div class="row">
        <?php foreach ($data as $row) {

        ?>
        <div class="col-md-6 col-lg-6" style="margin: 15px">
          <div class="main_view">
            <img src="<?php echo $row['car_image']; ?>" id="main" alt="IMAGE">
        </div>
        <div class="side_view">
            <img src="<?php echo $row['car_image']; ?>" onclick="change(this.src)">
        </div>
        </div>
        <div class="col-md-5 col-lg-5" style="margin: 15px; text-align: center; background:#EEEEEE">
          <h6 style="font-weight: bold;padding: 10px; font-size: 25px"><?php echo $row['car_name'];?></h6>
          <p style="color:#AAAAAA; font-size: 15px"><?php echo nl2br($row['car_details']);?></p>
          <br>

          <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12">
              <ul class="info" style="text-align: left">
                <li>
                  <span style="font-weight: bold">Model:   </span>
                  <?php echo $row['car_model'];?>
                </li>
                <li>
                  <span style="font-weight: bold">Build:   </span>
                  <?php echo $row['car_build'];;?>

                </li>
                <li>
                  <span style="font-weight: bold">Seats:   </span>
                  <?php echo $row['car_seats'];;?>

                </li>
                <li>
                  <span style="font-weight: bold">Door:   </span>
                  <?php echo $row['car_doors'];;?>

                </li>

                <li>
                  <span style="font-weight: bold">Color:   </span>
                  <?php echo $row['car_color'];;?>

                </li>

                <li>
                  <span style="font-weight: bold">Cost:   </span>
                  <?php echo $row['car_cost'];;?>

                </li>

            </ul>
            </div>
          </div>

        </div>
        <script type="text/javascript">
        const change = src => {
            document.getElementById('main').src = src;
        }
    </script>
      <?php } ?>

      </div>

    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>

    <?php
    include('includes/footer.php');
     ?>
