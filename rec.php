<?php  
include 'conn.php';
session_start();  
$user_id=$_SESSION['user_id'];
?> 

<html>
<head>
<link rel="stylesheet" href="main.css">
<style>
h2
{
	color:#4CAF50;
}
</style>
</head>
<body >
<div class="header">
  <h3 id="ph_logo" class="logo">HEY USER:<?php echo"$user_id";?> THESE ARE RECOMMENDED FOR YOU</h3>
			<!--<form method="post">
			<button id="Add" style="cursor:pointer;margin-top:-50px;" formaction="logout.php"><b>LOGOUT</b></button>
			</form>-->
			<a href="index.php"><button id="Add" style="cursor:pointer;margin-top:-50px;"><b>LOGOUT</b></button></a>
</div>
<!--<div class="card card-1"></div>
<div class="card card-1"></div>
<div class="card card-1"></div>
<div class="card card-1"></div>
<div class="card card-1"></div>
<div class="card card-1"></div>
<div class="card card-1"></div>
<div class="card card-1"></div>
<div class="card card-1"></div>
<div class="card card-1"></div>-->
<!--<div class="card card-1"><center><h2><b>MOVIE</b></h2></center></div>
<div class="card card-1"><center><h2><b>MOVIE</b></h2></center></div>
<div class="card card-1"><center><h2><b>MOVIE</b></h2></center></div>
<div class="card card-1"><center><h2><b>MOVIE</b></h2></center></div>
<div class="card card-1"><center><h2><b>MOVIE</b></h2></center></div>
<div class="card card-1"><center><h2><b>MOVIE</b></h2></center></div>
<div class="card card-1"><center><h2><b>MOVIE</b></h2></center></div>
<div class="card card-1"><center><h2><b>MOVIE</b></h2></center></div>
<div class="card card-1"><center><h2><b>MOVIE</b></h2></center></div>
<div class="card card-1"><center><h2><b>MOVIE</b></h2></center></div>-->

<?php
  include 'conn.php';  
  $sql="select * from user_movies WHERE user_id='$user_id'";
  $run=mysqli_query($conn,$sql); 
  
  while($row=mysqli_fetch_array($run)) 
	{
		$movie1=$row[1];
		$movie2=$row[2];
		$movie3=$row[3];
		$movie4=$row[4];
		$movie5=$row[5];
		$movie6=$row[6];
		$movie7=$row[7];
		$movie8=$row[8];
		$movie9=$row[9];
		$movie10=$row[10];
	}
	
	$sql1="select * from avg_rating WHERE movie='$movie1'";
	$run1=mysqli_query($conn,$sql1);
	while($row=mysqli_fetch_array($run1)) 
	{
		$rating1=round($row[1],2);
	}
	$sql2="select * from avg_rating WHERE movie='$movie2'";
	$run2=mysqli_query($conn,$sql2);
	while($row=mysqli_fetch_array($run2)) 
	{
		$rating2=round($row[1],2);
	}
	$sql3="select * from avg_rating WHERE movie='$movie3'";
	$run3=mysqli_query($conn,$sql3);
	while($row=mysqli_fetch_array($run3)) 
	{
		$rating3=round($row[1],2);
	}
	$sql4="select * from avg_rating WHERE movie='$movie4'";
	$run4=mysqli_query($conn,$sql4);
	while($row=mysqli_fetch_array($run4)) 
	{
		$rating4=round($row[1],2);
	}
	$sql5="select * from avg_rating WHERE movie='$movie5'";
	$run5=mysqli_query($conn,$sql5);
	while($row=mysqli_fetch_array($run5)) 
	{
		$rating5=round($row[1],2);
	}
	$sql6="select * from avg_rating WHERE movie='$movie6'";
	$run6=mysqli_query($conn,$sql6);
	while($row=mysqli_fetch_array($run6)) 
	{
		$rating6=round($row[1],2);
	}
	$sql7="select * from avg_rating WHERE movie='$movie7'";
	$run7=mysqli_query($conn,$sql7);
	while($row=mysqli_fetch_array($run7)) 
	{
		$rating7=round($row[1],2);
	}
	$sql8="select * from avg_rating WHERE movie='$movie8'";
	$run8=mysqli_query($conn,$sql8);
	while($row=mysqli_fetch_array($run8)) 
	{
		$rating8=round($row[1],2);
	}
	$sql9="select * from avg_rating WHERE movie='$movie9'";
	$run9=mysqli_query($conn,$sql9);
	while($row=mysqli_fetch_array($run9)) 
	{
		$rating9=round($row[1],2);
	}
	$sql10="select * from avg_rating WHERE movie='$movie10'";
	$run10=mysqli_query($conn,$sql10);
	while($row=mysqli_fetch_array($run10)) 
	{
		$rating10=round($row[1],2);
	}
	
?>

<div class="box">
  <div id="card-container">
    <div id="card">
      <div class="front face">
		<b><h2>MOVIE <?php echo"$movie1";?> </h2></b>
      </div>
      <div class="back face">
        <b><h2>RATING <?php echo "$rating1/5";?> </h2></b>
      </div>
    </div>
  </div>
</div>
<div class="box">
  <div id="card-container">
    <div id="card">
      <div class="front face">
		<h2>MOVIE <?php echo"$movie2";?> </h2>
      </div>
      <div class="back face">
        <h2>RATING <?php echo "$rating2/5";?> </h2>
      </div>
    </div>
  </div>
</div>
<div class="box">
  <div id="card-container">
    <div id="card">
      <div class="front face">
		<h2>MOVIE <?php echo"$movie3";?> </h2>
      </div>
      <div class="back face">
        <h2>RATING <?php echo "$rating3/5";?> </h2>
      </div>
    </div>
  </div>
</div>
<div class="box">
  <div id="card-container">
    <div id="card">
      <div class="front face">
		<h2>MOVIE <?php echo"$movie4";?> </h2>
      </div>
      <div class="back face">
        <h2>RATING <?php echo "$rating4/5";?> </h2>
      </div>
    </div>
  </div>
</div>
<div class="box">
  <div id="card-container">
    <div id="card">
      <div class="front face">
		<h2>MOVIE <?php echo"$movie5";?> </h2>
      </div>
      <div class="back face">
        <h2>RATING <?php echo "$rating5/5";?> </h2>
      </div>
    </div>
  </div>
</div>
<div class="box">
  <div id="card-container">
    <div id="card">
      <div class="front face">
		<h2>MOVIE <?php echo"$movie6";?> </h2>
      </div>
      <div class="back face">
        <h2>RATING <?php echo "$rating6/5";?> </h2>
      </div>
    </div>
  </div>
</div>
<div class="box">
  <div id="card-container">
    <div id="card">
      <div class="front face">
		<h2>MOVIE <?php echo"$movie7";?> </h2>
      </div>
      <div class="back face">
        <h2>RATING <?php echo "$rating7/5";?> </h2>
      </div>
    </div>
  </div>
</div>
<div class="box">
  <div id="card-container">
    <div id="card">
      <div class="front face">
		<h2>MOVIE <?php echo"$movie8";?> </h2>
      </div>
      <div class="back face">
        <h2>RATING <?php echo "$rating8/5";?> </h2>
      </div>
    </div>
  </div>
</div>
<div class="box">
  <div id="card-container">
    <div id="card">
      <div class="front face">
		<h2>MOVIE <?php echo"$movie9";?> </h2>
      </div>
      <div class="back face">
        <h2>RATING <?php echo "$rating9/5";?> </h2>
      </div>
    </div>
  </div>
</div>
<div class="box">
  <div id="card-container">
    <div id="card">
      <div class="front face">
		<h2>MOVIE <?php echo"$movie10";?> </h2>
      </div>
      <div class="back face">
        <h2>RATING <?php echo "$rating10/5";?> </h2>
      </div>
    </div>
  </div>
</div>

<?php
include 'conn.php';
$sql11="select * from user_user WHERE user_id='$user_id'";
	$run11=mysqli_query($conn,$sql11);
	//var_dump($sql11);
	//var_dump($run11);
	while($row=mysqli_fetch_array($run11)) 
	{
		$user1=$row[1];
		$user2=$row[2];
		$user3=$row[3];
		$user4=$row[4];
		$user5=$row[5];
		$sim1=$row[6];
		$sim2=$row[7];
		$sim3=$row[8];
		$sim4=$row[9];
		$sim5=$row[10];
	}

?>
<div style="margin-left:300px;">
<h2 style="color:#000000;"><b>USERS SIMILAR TO YOU:</b></h2>
<div class="box">
  <div id="card-container" style="width:170px;">
    <div id="card">
      <div class="front face">
		<b><h2>USER: <?php echo "$user1";?> </h2></b>
      </div>
      <div class="back face">
        <b><h2>SIMILARITY <?php echo "$sim1";?> </h2></b>
      </div>
    </div>
  </div>
</div>
<div class="box">
  <div id="card-container" style="width:170px;">
    <div id="card">
      <div class="front face">
		<b><h2>USER: <?php echo "$user2";?> </h2></b>
      </div>
      <div class="back face">
        <b><h2>SIMILARITY <?php echo "$sim2";?> </h2></b>
      </div>
    </div>
  </div>
</div>
<div class="box">
  <div id="card-container" style="width:170px;">
    <div id="card">
      <div class="front face">
		<b><h2>USER: <?php echo "$user3";?> </h2></b>
      </div>
      <div class="back face">
        <b><h2>SIMILARITY <?php echo "$sim3";?> </h2></b>
      </div>
    </div>
  </div>
</div>
<div class="box">
  <div id="card-container" style="width:170px;">
    <div id="card">
      <div class="front face">
		<b><h2>USER: <?php echo "$user4";?> </h2></b>
      </div>
      <div class="back face">
        <b><h2>SIMILARITY <?php echo "$sim4";?> </h2></b>
      </div>
    </div>
  </div>
</div>
<div class="box">
  <div id="card-container" style="width:170px;">
    <div id="card">
      <div class="front face">
		<b><h2>USER: <?php echo "$user5";?> </h2></b>
      </div>
      <div class="back face">
        <b><h2>SIMILARITY <?php echo "$sim5";?> </h2></b>
      </div>
    </div>
  </div>
</div>
</div>
</body>
<html>