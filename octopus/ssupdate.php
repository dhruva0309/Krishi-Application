
<?php 
require('db.php');

$a=$_POST['spid'];
$b=$_POST['stitle'];
$c=$_POST['cat'];
$d=$_POST['region'];
$e=$_POST['image'];
$f=$_POST['address'];




if($con){
	echo"connection successful";
    $query = "UPDATE  `sinfo` SET stitle='$b',cat='$c',region='$d',image= '$e',address= '$f' WHERE  spid='$a'";

	if (mysqli_query($con, $query)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Updated successfully  ");
            window.location="msi.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Updated failed ");
            window.location="msi.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>








