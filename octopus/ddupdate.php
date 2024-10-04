
<?php 
require('db.php');

$a=$_POST['username'];
$b=$_POST['fullname'];
$c=$_POST['vn'];
$d=$_POST['phone'];
$e=$_POST['password'];
$f=$_POST['location'];
$g=$_POST['id'];




if($con){
	echo"connection successful";
    $query = "UPDATE  `dusers` SET username='$a',fullname='$b',vn='$c',phone='$d',location= '$f',password='".md5($e)."' WHERE  id='$g'";

	if (mysqli_query($con, $query)) {
               echo "New record created successfully";?>
			   		<script type="text/javascript">
            window.alert("Updated successfully  ");
            window.location="managed.php";
            </script>
			<?php 
            }
	else{
		echo"Record not inserted";?>
		<script type="text/javascript">
            window.alert("Updated failed ");
            window.location="managed.php";
            </script>
			<?php 
	}
}
else{
	echo"connection error";

}
?>








