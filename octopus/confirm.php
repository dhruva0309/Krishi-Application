<?php include("sauth.php");?>
<?php 
require('db.php');

$a=$_POST['bid'];
$b=$_POST['stitle'];
$c=$_POST['smess'];
$d=$_POST['status'];
$e=$_SESSION['username'];






if($con){
	echo"connection successful";
    $query = "INSERT INTO  `confirm` VALUES('','$a','$b','$c','$d','$e')";

	if (mysqli_query($con, $query)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Requested successfully  ");
            window.location="vsr.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Request failed ");
            window.location="vsr.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>








