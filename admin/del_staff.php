<?php include('db/config.php');?>
<?php 
$get_del_staff_id=$_GET['del_staff_id'];
$delete_query="DELETE FROM office_staff where ID='$get_del_staff_id'";
$run_query=mysqli_query($con,$delete_query);
if($run_query){
	header('location:show_staff.php');
}
?>