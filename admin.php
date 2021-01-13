<?php 
  include("connection.php");
  include('nav.html');
  error_reporting(0); 
?>
<html>
  <head>
    <title>Vehicle Insurance Company</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link href="index.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="quality-container my-3 container">
      <div class="row no-gutters">
        <div class="col-lg-4 cell-container">
          <a href="displayCustomer.php">
            <div class="quality-cell inform m-2">
              <img src="./images/Customer.jpeg" class="test" alt="inform" />
              <h1 class="text-white img-text ">CUSTOMER</h1>
              <p
                class="quality-discr d-none text-white text-disc font-weight-bold text-center"
              >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </a> 
        </div>
        <div class="col-lg-4">
          <a href="displayPackage.php">
            <div class="quality-cell improve initial m-2">
              <img src="./images/Packages.jpeg" class="test" alt="improve" />
              <h1 class="text-white img-text">PACKAGES</h1>
              <p
                class="quality-discr d-none text-white text-disc font-weight-bold text-center"
              >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <div class="quality-cell foster initial m-2">
            <img src="./images/Payments.jpeg" class="test" alt="foster" />
            <h1 class="text-white img-text">PAYMENTS</h1>
            <p
              class="quality-discr d-none text-white text-disc font-weight-bold text-center"
            >
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>
          <div class="col-lg-4">
            <div
              class="quality-cell enable initial m-2"
            >
              <img src="./images/Vehicle.jpeg" class="test" alt="enable" />
              <h1 class="text-white img-text">VEHICLE</h1>
              <p
                class="quality-discr d-none text-white text-disc font-weight-bold text-center"
              >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="quality-cell enable initial m-2">
              <img src="./images/Claim.PNG" class="test" alt="enable" />
              <h1 class="text-white img-text">CLAIM</h1>
              <p
                class="quality-discr d-none text-white text-disc font-weight-bold text-center"
              >
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </body>
</html>
