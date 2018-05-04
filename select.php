<?php include('include/database.php'); ?>
<?php
if(isset('show']))
$sql="select * from student";
$res=mysqli_query($con,$sql);
 while ($row = mysqli_fetch_array($res))
 {
 	$name=$row['username'];
 	$age=$row['age'];
 	$attendence=$row['attendence'];
 	$comment=$row['comment'];

 }
 echo $name ;<br>
 echo $age ;<br>
 echo $attendence ;<br>
 echo $comment ;<br>
 ?>
 lectse123 