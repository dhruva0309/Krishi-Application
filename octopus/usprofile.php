
<?php 
require('db.php');

$a=$_POST['sid'];
$b=$_POST['fullname'];
$c=$_POST['phone'];
$d=$_POST['email'];
$e=$_POST['address'];





if($con){
	echo"connection successful";
    $query = "UPDATE  `susers` SET fullname='$b',phone='$c',email='$d',address= '$e' WHERE  sid='$a'";

	if (mysqli_query($con, $query)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Updated successfully  ");
            window.location="sprofile.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Updated failed ");
            window.location="sprofile.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>








