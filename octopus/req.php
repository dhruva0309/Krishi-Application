<?php include("fauth.php");?>
<?php 
require('db.php');

$a=$_POST['spid'];
$b=$_POST['cat'];
$c=$_POST['message'];
$d=$_SESSION['username'];






if($con){
	echo"connection successful";
    $query = "INSERT INTO  `booking` VALUES('$a','$b','$c','$d')";

	if (mysqli_query($con, $query)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Requested successfully  ");
            window.location="ss.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Request failed ");
            window.location="vir.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>








