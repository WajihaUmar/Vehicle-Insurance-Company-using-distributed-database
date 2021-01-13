<html>
	<head>
		<title> Customer </title>
		<link href="index.css" type="text/css" rel="stylesheet">
	</head>
	<body>
	
					
<?php
include("connection.php");
include("nav.html");
include("insertCustInfo.php");
error_reporting(0);
$query = "SELECT * FROM CUSTOMER";
$query2 = "SELECT * FROM VEHICLE";
$data = mysqli_query($conn,$query);
$data2 = mysqli_query($conn,$query2);
$total = mysqli_num_rows($data);
$total2 = mysqli_num_rows($data2);

?>
<?php
if($total != 0 && $total2 !=0)
{	 
  
	?> 
	<div class="customer_display_main mx-auto">
	<table>
		<tr>
			<th class="text-center">First Name</th>
			<th class="text-center">Last Name</th>
			<th class="text-center">CNIC Number	</th>
      <th class="text-center">Address </th>
      <th class="text-center">Package ID </th>
      <th class="text-center">Vehicle Number </th>
      <th class="text-center">Vehicle Model </th>
			<th class="text-center">Year Of Purchase </th>
			<th class="text-center">Branch</th>
			<th colspan="2" class="text-center">Options</th>
		</tr>
	<?php
	while ( ($result = mysqli_fetch_assoc($data)) && ($result2 = mysqli_fetch_assoc($data2)) ) {
  
	echo "<tr>
			<td>". $result['First_name'] ."</td>
			<td>". $result['Last_name'] ."	</td>
      <td>". $result['CNIC_no'] ."</td>
      <td>". $result['Address'] ."</td>
			<td>". $result['Package_id'] ."	</td>
      <td>". $result2['Vehicle_no'] ."</td>
      <td>". $result2['Vehicle_model'] ."</td>
			<td>". $result2['Year_of_purchase'] ."</td>
			<td>". $result2['Branch'] ."</td>
      
			<td><a href='#CustModal' data-toggle='modal' data-target='#CustModal'>Edit </a></td>
			<td><a href='deleteCustomer.php?cnic=$result[CNIC_no]&vn=$result2[Vehicle_no]' onclick= 'checkdelete()'>Delete</a></td>
			</tr>";								}
}
	
?>
</table>
</div>
<div class="modal fade" id="CustModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form action="" method="GET">
			<div class="form-group row">
								<label for="firstName" class="col-sm-4 col-form-label">First Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="firstName" name="firstName">
								</div>
							</div>
							<div class="form-group row">
								<label for="lastName" class="col-sm-4 col-form-label">Last Name</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="lastName" name="lastName">
								</div>
							</div>
							<div class="form-group row">
								<label for="CNICno" class="col-sm-4 col-form-label">CNIC number</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="CNICno" name="CNICnumber">
								</div>
							</div>
							<div class="form-group row">
								<label for="address" class="col-sm-4 col-form-label">Residential Address</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="address" name="address">
								</div>
							</div>
							<div class="form-group row">
								<label for="package_id" class="col-sm-4 col-form-label">Package ID</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="package_id" name="packageId">
								</div>
							</div>
							<div class="form-group row">
								<label for="vehicle_no" class="col-sm-4 col-form-label">Vehicle Number</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="vehicle_no" name="vehicleNumber">
								</div>
							</div>
							<div class="form-group row">
								<label for="vehicleModal" class="col-sm-4 col-form-label">Vehicle Model</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="vehicleModal" name="vehicleModel">
								</div>
							</div>
							<div class="form-group row">
								<label for="yearofpurchase" class="col-sm-4 col-form-label">Year of Purchase</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="yearofpurchase" name="yearOfPurchase">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6">
								  <input type="submit" name="submitCustEdit" value="Submit"> 
                </div>
							</div>
					  </form>
      </div>
    </div>
  </div>
</div>
<?php 
   if($_GET['submitCustEdit'])
	 {
		 //echo "Button Pressed";
		 $firstName= $_GET['firstName'];
		 $lastName= $_GET['lastName'];
		 $CNICnumber= $_GET['CNICnumber'];
		 $address= $_GET['address'];
		 $packageId= $_GET['packageId'];
		 $vehicleNumber= $_GET['vehicleNumber'];
		 $vehicleModel= $_GET['vehicleModel'];
		 $yearOfPurchase= $_GET['yearOfPurchase'];
		 
		 $query = "UPDATE CUSTOMER SET First_name='$firstName',Last_name='$lastName' ,Package_id='$packageId' ,Address='$address' WHERE CNIC_no='$CNICnumber'";
		 $query1 = "UPDATE VEHICLE SET CNIC_no='$CNICnumber' ,Package_id='$packageId', Vehicle_model='$vehicleModel' ,Year_of_purchase='$yearOfPurchase' WHERE Vehicle_no='$vehicleNumber' ";
		 $data = mysqli_query($conn,$query);
		 $data1 =mysqli_query($conn,$query1);
		 if ($data && $data1) {
			 echo "<font color='green'>Record Updated Successfully. <a href='displayPackage.php'> View Updated Records</a>";
			 # code...
		 }
		 else
		 {
			 echo "<font color='red'>Sorry! record updation failed.<a href='displayPackage.php'> View Records</a>";
		 }
	 }
?>

<script type="text/javascript">
	function checkdelete()
	{
		return confirm('Really! you want to delete');
	}
</script>
</body>
</html>