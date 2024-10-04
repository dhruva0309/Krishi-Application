
<?php 
require('db.php');

$a=$_POST['pid'];
$b=$_POST['cat'];
$c=$_POST['region'];
$d=$_POST['price'];





if($con){
	echo"connection successful";
    $query = "UPDATE  `cprice` SET cat='$b',region='$c',price='$d' WHERE  pid='$a'";

	if (mysqli_query($con, $query)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Updated successfully  ");
            window.location="mp.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Updated failed ");
            window.location="mp.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>








