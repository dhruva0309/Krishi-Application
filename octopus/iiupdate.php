
<?php 
require('db.php');

$a=$_POST['cid'];
$b=$_POST['cat'];
$c=$_POST['region'];
$d=$_POST['hmonth'];
$e=$_POST['quantity'];




if($con){
	echo"connection successful";
    $query = "UPDATE  `cinfo` SET cat='$b',region='$c',hmonth='$d',quantity= '$f' WHERE  cid='$a'";

	if (mysqli_query($con, $query)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Updated successfully  ");
            window.location="mc.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Updated failed ");
            window.location="mc.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>








