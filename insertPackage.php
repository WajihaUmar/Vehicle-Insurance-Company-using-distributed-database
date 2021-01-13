<?php
include("connection.php");
error_reporting(0);
?>
<html>
  <head>
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
      <img src="Add icon.png" alt="Add icon" class="fixedbutton">
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog modal-dialog-centered" role="document">
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
                <label for="inputPackageId" class="col-sm-4 col-form-label">Package ID</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="inputPackageId" name="packageId">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputTotalCost" class="col-sm-4 col-form-label">Total Cost</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="inputTotalCost" name="totalCost">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputYearlyDur" class="col-sm-4 col-form-label">Yearly Duration</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="inputYearlyDur" name="yearlyDuration">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-10">
                  <input type="submit" name="submit" value="Submit">
                </div>
              </div>
					  </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<?php

if($_GET['submit'])
{
	// getting data through global array
	$pi=$_GET['packageId'];
	$tc=$_GET['totalCost'];
	$yd=$_GET['yearlyDuration'];

  //check that form fields are not empty
  if($pi !="" && $tc !="" && $yd !="")
	{
  // Now inserting data into database
  $query = "INSERT INTO PACKAGES VALUES('$pi','$tc','$yd')";
	$data = mysqli_query($conn, $query);
	$data2 = mysqli_query($conn2, $query);
	$data3 = mysqli_query($conn3, $query);

}
}

?>
</body>
</html>