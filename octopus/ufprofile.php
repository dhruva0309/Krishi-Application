
<?php 
require('db.php');

$a=$_POST['fid'];
$b=$_POST['fullname'];
$c=$_POST['phone'];
$d=$_POST['email'];
$e=$_POST['address'];





if($con){
	echo"connection successful";
    $query = "UPDATE  `fusers` SET fullname='$b',phone='$c',email='$d',address= '$e' WHERE  fid='$a'";

	if (mysqli_query($con, $query)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Updated successfully  ");
            window.location="fprofile.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Updated failed ");
            window.location="fprofile.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>








