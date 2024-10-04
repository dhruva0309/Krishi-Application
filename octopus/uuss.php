
<?php 
require('db.php');

$a=$_POST['ssid'];
$b=$_POST['asignal'];
$c=$_POST['ft'];
$d=$_POST['tt'];
$e=$_POST['sstatus'];





if($con){
	echo"connection successful";
    $query = "UPDATE  `ss` SET asignal='$b',ft='$c',tt='$d',sstatus= '$e' WHERE  ssid='$a'";

	if (mysqli_query($con, $query)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Updated successfully  ");
            window.location="ms.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Updated failed ");
            window.location="ms.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>








