<?php
$db="ambulance";
$user="root";
$pass="";
$server="localhost";
$a = $_GET['id'];



$con=mysqli_connect($server,$user,$pass,$db);
if($con){
	
	$sql="delete from ss where ssid='$a'";
	if($con->query($sql)===TRUE){
		echo"Record deleted";?>
		<script type="text/javascript">
            window.alert("Record successfully deleted");
            window.location="ms.php";
            </script>
			<?php 
}else{
	echo"connection error";
}
}
?>