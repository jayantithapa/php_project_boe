<?php include('include/database.php'); ?>
<?php include('include/header.php');?>

<!--for delete command -->
<?php
if(($_GET['action']=="delete") && ($_GET['cid']))
{
	$id= $_GET['cid'];
	$sql="delete from student where id='$id'";
	$res=mysqli_query($con,$sql);

}
?>

 <!--  
  <?php  

// if(($_GET['action']=="delete") && ($_GET['Cid']))
//  {
// $id = $_GET["Cid"];
// $sql = "delete from user where id = '$id' ";
// $res = mysqli_query($con , $sql);
// }
?>
 -->
<?php ?>
<div class="container" >
		<form action='insert.php' method='post'>
			<div class="form-group">
                Username:
				<input type="text" name="usrname" placeholder="Enter Username" class="form-control">
			</div>
			<div class="from-group">
	            Age:
				<input type="text" name="ag" placeholder="Enter Age" class="form-control">
			</div>
			<div class="form-group">
				Attendence:
				<input type="text" name="attend" placeholder="Enter Attendence" class="form-control">
			</div>
			<div class="form-group">
				comment:
				<textarea type="text" name='cmt' class="form-control" placeholder="please comment here">  </textarea>
			</div>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
		<div class="row">
		  <div class="col-md-8">
			<div class="table-responsive">          
			  <table class="table table-hover table-striped border">
			    <thead>
			      <tr>
			        <th>id</th>
			        <th>Name</th>
			        <th>Age</th>
			        <th>Attendence</th>
			        <th>Comment</th>
			        <th>option</th>
			        
			      </tr>
			    </thead>
			      <tbody>
			        <?php 
			         $x = 1;
			         $sql="select * from student";
						$res=mysqli_query($con,$sql);
						 while ($row = mysqli_fetch_array($res))
						 {   $id=$row['id'];
						 	$name=$row['name'];
						 	$age=$row['age'];
						 	$attendence=$row['attendence'];
						 	$comment=$row['comment'];

			             
			             ?> 

			          <!-- header("location:index.php"); -->
			             <tr>
			             	
			             	<td><?= $x++ ?></td>
			             	<td><?= $name; ?></td>
			             	<td><?= $age; ?></td>
			             	<td><?= $attendence; ?></td>
			             	<td><?= $comment; ?></td>
			             	<td>
			             	  <a href="update.php?action=edit&cid=<?= $id;?>" class="btn btn-primary">Update</a>
			             	 <!-- <a href="form.php?action=edit&Cid=<?= $id;?>" class="btn btn-info"> Update  </a>-->
			             	  <a href="index.php?action=delete&cid=<?= $id;?>" onclick="return confirm ('Are you sure to delete?')" class="btn btn-danger">Delete</a>
			             	</td>
			             	<!-- for passing delete command  ......<a href="index.php?action=delete&Cid=<?= $id;?>" onclick="return confirm('Are you sure to delete?')" > -->
			           </tr>
			             <?php }?>
			                 
			              </tbody>
			          </table>
			      </div>
			  </div>
			</div>




<?php include('include/footer.php'); ?>
