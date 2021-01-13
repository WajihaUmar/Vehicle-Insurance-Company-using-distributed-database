<?php
include("connection.php");
$cnic=$_GET['cnic'];
$vn=$_GET['vn'];
echo $vn;
$query = "DELETE FROM CUSTOMER WHERE CNIC_no='$cnic'"; 
$query1 = "DELETE FROM VEHICLE WHERE Vehicle_no='$vn'"; 
$data = mysqli_query($conn,$query);
$data1 = mysqli_query($conn,$query1);

if($data && $data1)
{
   ?>
    <script>
      alert("deleted successfuly");
      window.location.replace("displayCustomer.php")
    </script>
	<?php
}
else{
	echo "<font color='red'> detele failed";

}



?>