<?php include('include/database.php'); ?>
<?php include ('include/header.php');?>
<?php
if(isset($_POST['submit']))
{
	$name=mysqli_real_escape_strings($_POST['usrname']);
	$age=mysqli_real_escape_strings($_POST['ag']);
	$attendence=mysqli_real_escape_strings($_POST['attend']);
	$comment=mysqli_real_escape_strings($_POST['cmt']);

	$sql="insert into student(id,name,age,attendence,comment) values( '','$name','$age','$attendence','$comment')";
	//echo $sql;
	//INSERT INTO `student`(`id`, `name`, `age`, `attendence`, `comment`) VALUES ([],[$name],[$age],[$age],[$attendence],[$comment])
	//die;
  if($result = mysqli_query($con,$sql))
   {
	 header("location:index.php");
    }
   
}
?>
