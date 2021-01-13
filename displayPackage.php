<html>
	<head>
		<title> Packages </title>
	</head>
	<body>

<?php
include("connection.php");
include("nav.html");
include("data.php");
include("insertPackage.php");
error_reporting(0);
$query = "SELECT * FROM PACKAGES";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

$string = "wajiha";

?>
<?php
if($total != 0)
{
	?>

	<div class="package_display_main mx-auto"> 
	<table>
		<tr >
			<th class="text-center">Package ID</th>
			<th class="text-center">Total Cost	</th>
			<th class="text-center">Yearly Duration	</th>
			<th colspan="2" class="text-center">Options</th>
		</tr>
	<?php
	while ($result = mysqli_fetch_assoc($data)) {
  
	echo "<tr>
			<td>". $result['Package_id'] ."</td>
			<td>". $result['Total_cost'] ."	</td>
			<td>". $result['Yearly_duration'] ."</td>
			<td><a href='#myModal' data-toggle='modal' data-target='#myModal'>Edit </a></td>
			<td><a href='deletePackage.php?pi=$result[Package_id]' onclick= 'checkdelete()'>Delete</a></td>
		</tr>";								
	}
}else{
	//echo" No data found in table"; 
	}

?>
</table>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Pacakge</h5>
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
								  <input type="submit" name="submitEdit" value="Update">
                </div>
              </div>
		      </form>
      </div>
    </div>
  </div>
</div>
<?php
 if($_GET['submitEdit'])
 {
	 //echo "Button Pressed";
	 $packageId= $_GET['packageId'];
	 $totalcost= $_GET['totalCost'];
	 $yearlyDuration= $_GET['yearlyDuration'];
	 
	 $query = "UPDATE PACKAGES SET Yearly_duration='$yearlyDuration',Total_cost='$totalcost' WHERE Package_id='$packageId'";
	 $data =mysqli_query($conn,$query);
	 $data2 =mysqli_query($conn2,$query);
	 $data3 =mysqli_query($conn3,$query);
	 if ($data && $data2 && $data3) {
	 
		 echo "<font color='green'>Record Updated Successfully. <a href='displayPackage.php'> View Updated Records</a>";
		 
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
<script src="data.js"></script>

</body>
</html>