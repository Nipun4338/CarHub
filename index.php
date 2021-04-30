
<?php session_start(); ?>
<?php
include('database/dbconfig.php');
$sql="SELECT * FROM slider1";
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
	<title>Welcome To Carhub</title>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style1.css">
  <style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;

  padding: 20px;

  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>

  <section class="home">
     <div class="slider">
       <?php
         foreach ($data as $row) {
           // code...
        ?>
        <div class="slide active img-responsive" style="background-image: url('<?php echo $row['image'];?>')" alt="Responsive image">
            <div class="container">
                <div class="caption">
                    <h1 style="color:#FFFFFF"><?php echo $row["header"];?></h1>
                    <p style="color:#FFFFFF"><?php echo $row["paragraph"];?></p>
                    <a href="homepage.php" class="button"><span>Shop Now</span></a>
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


 <script src="script.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>
