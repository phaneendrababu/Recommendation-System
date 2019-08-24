<?php  
session_start();//session starts here  
  
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>RECOMMENDATION SYSTEM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="main.css">
	<script src="main.js"></script>
<style>
button
{
	cursor:pointer;
}
</style>
</head>
<body>

<div class="header">
  <h3 id="ph_logo" class="logo">USER LOGIN</h3>
</div>
<div class="container">
		<div class="quickaddForm">	
			<label for="fullname:"><b>USERID:</b></label><br>
			<form method="post">
			<input type="text" id="fullname" name="user_id" class="formFields"><br>
			<button id="Add" name="submit" ><b>LOGIN</b></button>
			<button id="Add" name="new_submit" formaction="rec_new.php"><b>NEW USER?</b></button>
			</form>
		</div>
</div>
</body>

<?php  
include("conn.php");  
  
if(isset($_POST['submit']))  
{  
    $user_id=$_POST['user_id'];
  
    $sql="select * from user_movies WHERE user_id='$user_id'";  
  //var_dump($check_user);
    $run=mysqli_query($conn,$sql); 
	//var_dump($run);
	//var_dump(mysqli_num_rows($run));
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('rec.php','_self')</script>";
        $_SESSION['user_id']=$user_id; 
      }  
    else  
    {  
      echo "<script>alert('userid or password is incorrect!')</script>";  
    }  
}  
?>
</html>
