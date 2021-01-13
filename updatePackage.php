
<?php
include("connection.php");
error_reporting(0);
$_GET['pi'];
$_GET['tc'];
$_GET['yd'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="GET">
	Package ID: <input type="text" name="packageId" value="<?php echo $_GET['pi'];?>"><br><br>
	Total Cost: <input type="text" name="totalCost" value="<?php echo $_GET['tc'];?>"><br><br>
	Yearly Duration: <input type="text" name="yearlyDuration" value="<?php echo $_GET['yd'];?>"><br><br>
	<input type="submit" name="submit" value="Update">
</form>


<?php
if($_GET['submit'])
{
	//echo "Button Pressed";
	$packageId= $_GET['packageId'];
	$totalcost= $_GET['totalCost'];
  $yearlyDuration= $_GET['yearlyDuration'];
  
	$query = "UPDATE PACKAGES SET Yearly_duration='$yearlyDuration',Total_cost='$totalcost' WHERE Package_id='$packageId'";
  $data =mysqli_query($conn,$query);
  $data2 =mysqli_query($conn2,$query);
  $data3 =mysqli_query($conn3,$query);
	// $data = mysqli_query($conn2,$query);
	if ($data && $data2 && $data3) {
		echo "<font color='green'>Record Updated Successfully. <a href='displayPackage.php'> View Updated Records</a>";
		# code...
	}
	else
	{
		echo "<font color='red'>Sorry! record updation failed.<a href='displayPackage.php'> View Records</a>";
	}
}
else
	echo "<font color='blue'>Press Update button to save the changes";

?>
</body>
</html>