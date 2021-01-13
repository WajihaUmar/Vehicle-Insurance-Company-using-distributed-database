<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rws vehicle insurance (islamabad hq)";

// create connection

$conn=mysqli_connect($servername,$username,$password,$dbname );
$conn2 = mysqli_connect('192.168.43.7','Rabeea Hameed','rabeea123',"rws vehicle insurance (karachi)");
$conn3 = mysqli_connect('192.168.43.102','sana','sana123',"rws vehicle insurance (lahore)"); 

if ($conn) {
	# code...
	//echo "Connecton Open"; 
}
else
		echo "Connection failed";
	// or use the die function to view the reason
?>