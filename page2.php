<!DOCTYPE HTML>
<html> 
<head> 
</head> 
<body>

<?php
If(isset($_POST['send']))
{



$num=$_POST["num"];

} ?>

<form method="post" action="page2.php"> 

 fill  numbers in the field then click cobute: <br><br> 
 <?php
 
 for($i=1;$i<=$num;$i++)
		{
		echo
		" 
		<textarea name="abs" rows="$num" cols="$num"></textarea>
			<hr>
		";
		}
	
	?>
 <input  name="compute" type="submit" />  
</form>

<?php 
$sum = 0 ; 

 for($i=1;i<=$num;$i++){
	 
	 $sum+=$_POST[$i];
$Array[$i] = $_POST[$i];

 }


function mean($Array) {
	
	$mean = 0;
$count = count($Array);//count the  number 
$total=0;
//sum of values 
    for ($i=0; $i<$count ; i++) {
        
            $total = $total + $Array[$i];
            
        
    }
    $mean = $total/count;
    return $mean;
}


function standard_deviation($Array)
{
  
  $standard_deviation = 0;
  $variance = 0;
  $mean = 0;
  $array_sum = array_sum($Array);
  $count = count($Array); 

  
  $mean = $array_sum / $count;

  //calculate the variance
  for ($i = 0; $i < $count; $i++)
  {
    //sum the array
    $variance = $variance + ($a[$i] - $mean) * ($a[$i] - $mean);
  }

  $variance = $variance / $number_elements;

  //calculate the standard deviation
  $standard_deviation = pow( $the_variance, 0.5);

  //return the st
  return $standard_deviation;
}


function calculate_median($Array) {
	sort($Array);
    $count = count($Array); ////total numbers in array
    $middleval = floor(($count-1)/2); //the possition of the middle value 
    if($count % 2) { // if true then the value it's odd number middle is the median
        $median = $Array[$middleval];
    } 
	else
		{ 
        $low = $Array[$middleval];
        $high = $Array[$middleval+1];
        $median = (($low+$high)/2);
    }
    return $median;
}
function mode($Array )
{
    $counts = array_count_values($Array);
    arsort($counts); // Sort counts in descending order
    $modes  = array_keys($counts, current($counts), TRUE);

    // If each value only occurs once, there is no mode
    if (count($Array) === count($counts))
        return FALSE;
    
    // Only one modal value
    if (count($modes) === 1)
        return $modes[0];
    
    // Multiple modal values
    return $modes;
}



function histogram($Array)
{
	
	for($i=0;$i<count($Array); $i++){
$length = $Array[$i] * 10;
echo "<img src='rect.gif' height='$length' width='20'>";
echo " ";
}
echo "<br>";
for($i=0;$i<count($Array); $i++){
echo $Array[$i];
echo "&nbsp;&nbsp;&nbsp;&nbsp;";

}

	
	
	
}

// Mean

echo 'Mean: '.mean($Array).'<br>';

// standard deviation 
echo 'standard_deviation'.standard_deviation($Array).'<br>'; 

// Median

echo 'Median: '.calculate_median($Array).'<br>';

// Mode

echo 'Mode: '.mode($Array).'<br>';

 echo 'histogram: '.histogram($Array).'<br>' ; 
?>

</body> 
</html>

