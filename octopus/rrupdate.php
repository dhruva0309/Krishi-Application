
<?php 
require('db.php');

$a=$_POST['rid'];
$b=$_POST['froml'];
$c=$_POST['tol'];
$d=$_POST['sig'];
$e=$_POST['dn'];





if($con){
	echo"connection successful";
    $query = "UPDATE  `route` SET froml='$b',tol='$c',sig='$d',dn= '$e' WHERE  rid='$a'";

	if (mysqli_query($con, $query)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Updated successfully  ");
            window.location="vr.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Updated failed ");
            window.location="vr.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>








