<?php include('db/config.php');?>
<?php 
$get_del_id=$_GET['del_id'];
$delete_query="DELETE FROM active_members WHERE ID=$get_del_id";
$run_query=mysqli_query($con,$delete_query);
if($run_query){
	header('location:show_active_inactive.php');
}
?>