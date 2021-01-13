<?php
include("connection.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
		/>
		<link href="index.css" rel="stylesheet" >
  </head>
  <body>
    <button type="button" class="btn btn-primary modal_button fixedbutton" data-toggle="modal" data-target="#exampleModal">
      <img src="./images/Add icon.png" alt="Add icon" class="fixedbutton">
		</button>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Insert Information</h5>
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
								<label for="Branch" class="col-sm-4 col-form-label">Branch</label>
								<div class="col-sm-8">
									<input type="text" class="form-control" id="Branch" name="Branch" value="Islamabad">
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-6">
								  <input type="submit" name="submit" value="Submit"> 
								</div>
								
							</div>
						</form>
          </div>
        </div>
      </div>
    </div>

<?php

if($_GET['submit'])
{
	// getting data through global array
	$fn=$_GET['firstName'];
	$ln=$_GET['lastName'];
  $cnicno=$_GET['CNICnumber'];
  $adr=$_GET['address'];
	$pi=$_GET['packageId'];
  $vn=$_GET['vehicleNumber'];
  $vm=$_GET['vehicleModel'];
	$yop=$_GET['yearOfPurchase'];
	$br=$_GET['Branch'];

  //check that form fields are not empty
  if($fn !="" && $ln !="" && $cnicno !="" && $adr !="" && $pi !="" && $vn !="" && $vm !="" && $yop !="" && $br)
	{
  // Now inserting data into database
  $query = "INSERT INTO CUSTOMER VALUES('$cnicno','$fn','$ln','$pi','$adr','$br')";
  $query2 = "INSERT INTO VEHICLE VALUES('$vn','$cnicno','$pi','$vm','$yop','$br')";
  $data = mysqli_query($conn, $query);
	$data2 = mysqli_query($conn, $query2);
	
}
}
 

?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>