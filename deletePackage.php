<?php
include("connection.php");
$pi=$_GET['pi'];
$query = "DELETE FROM PACKAGES WHERE Package_id='$pi'"; 
$data = mysqli_query($conn,$query);
$data2 = mysqli_query($conn2,$query);
$data3 = mysqli_query($conn3,$query);

if($data && $data2 && $data3)
//if($data)
{
   ?>
    <script>
      alert("deleted successfuly");
      window.location.replace("displayPackage.php")
    </script>
	<?php
}
else{
	echo "<font color='red'> detele failed";

}

?>