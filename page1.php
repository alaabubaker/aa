<!DOCTYPE HTML>
<html> 
<head> 
<style>
.error {color: #FF0000;}
</style>
</head> 
<body>
<?php
$name = $num="" ; 
$nameErr = $numErr = "" ;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) 
		
	{ $nameErr = "Name is required"; } 
	
	else 

  { $name = test_input($_POST["name"]); }
  
  if (empty($_POST["num"])) 
		
	{ $numErr = "Number is required"; } 
	
	else 

  { $num =test_input($_POST["num_stat"]); }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2> Statistics Application </h2>

<p> <span class="error">* required field.</span> </p>
<form method="post"  action="page2.php">
 
Name: <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?> </span>
  <br><br>
Number of statistical numbers: <input type="text" name="num">
<span class="error">* <?php echo $numErr;?></span>
  <br><br>
<input type="submit" name="send" value=" send " />

</form>
<?php 
$name=$_POST["name"] ; 
$num=$_post["num"] ;
?>
</body>
</html>


