<?php include("include/header.php");?>
<?php include("include/database.php"); ?>

<?php 
   if(isset($_POST['update']))
	{
	   $id = $_POST['cid']; 
	   $name = $_POST['usrname'];
	   $age = $_POST['ag'];
	   $attendence = $_POST['attend'];
       $comment = $_POST['cmt'];

	   $update = "update student set name='$name', age='$age', attendence='$attendence', comment='$comment' where id = '$id' ";
	   // echo $update;
	   // die;
	   if($result = mysqli_query($con,$update))
		{
			header("location:index.php");
		}
	} 
	?>


<?php 
$id=$_GET['cid'];
$sql="select * from student where id='$id' ";
$res=mysqli_query($con, $sql);
while($row=mysqli_fetch_array($res))
{
	$name=$row['name'];
	$age=$row['age'];
	$attendence=$row['attendence'];
	$comment=$row['comment'];

}
?>

<?php 
    if($_GET['cid'] != null)
	{ ?>
      <div class="container" >
			<form action='#' method='post'>
			<input type="hidden" name="cid" value="<?= $_GET['cid'];?>">

				<div class="form-group">
	                Username:
					<input type="text" name="usrname" placeholder="Enter Username" value="<?=$name ?>" class="form-control">
				</div>
				<div class="from-group">
		            Age:
					<input type="text" name="ag" placeholder="Enter Age"
					value="<?=$age ?>" class="form-control">
				</div>
				<div class="form-group">
					Attendence:
					<input type="text" name="attend" placeholder="Enter Attendence"
					value="<?=$attendence ?>" class="form-control">
				</div>
				<div class="form-group">
					comment:
					<textarea type="text" name='cmt' class="form-control" placeholder="please comment here"><?=$comment ?>  </textarea>
				</div>
				
				<button type="submit" name="update" class="btn btn-primary">update</button>
	<?php } else{ ?>
	<div class="container" >
			<form action='insert.php' method='post'>

				<div class="form-group">
	                Username:
					<input type="text" name="usrname" placeholder="Enter Username" class="form-control">
				</div>
				<div class="from-group">
		            Age:
					<input type="text" name="ag" placeholder="Enter Age"
					 class="form-control">
				</div>
				<div class="form-group">
					Attendence:
					<input type="text" name="attend" placeholder="Enter Attendence"
					 class="form-control">
				</div>
				<div class="form-group">
					comment:
					<textarea type="text" name='cmt' placeholder="please comment here">  </textarea>
				</div>
				
				<button type="submit" name="update" class="btn btn-primary">update</button>












    <?php } ?>
	<?php include('footer.php'); ?>








