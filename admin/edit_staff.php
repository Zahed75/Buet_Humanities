<?php 
session_start();
include('db/config.php');
if(empty($_SESSION['email'])){
	header('location:index.php');
}
?>
<?php include('pages/head.php')?>
<?php 
$edit_staff_id=$_GET['edit_staff_id'];
$edit_query="SELECT * FROM office_staff WHERE ID='$edit_staff_id'";
$run_edit_query=mysqli_query($con,$edit_query);
while($rows=mysqli_fetch_array($run_edit_query)){
	$info=$rows['info'];
	$occupation=$rows['occupation'];
	$image=$rows['image'];

?>
<?php 
if(isset($_POST['update'])){
	$info=$rows['info'];
	$occupation=$rows['occupation'];
	$image=$rows['image'];
	$update_query="UPDATE office_staff SET info='$info', occupation='$occupation', image='$image', where ID='$edit_staff_id'";
	$run_update_query=mysqli_query($con,$update_query);
	if($run_update_query){
		$msz['success']="Data Updated Successfully";
	}
} 
?>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<?php include('pages/sub_header.php');?>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
			<?php include('pages/mainnav.php') ?>
			</div>
			<!-- end: Main Menu -->
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
					<div class="box-content">
						<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group">
							  <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">info</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" name="info" rows="4" value="<?php echo $info; ?>" ></textarea>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Occupation</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="occupation" value="<?php echo $occupation; ?>">								
							  </div>
							</div>
							
							

							<div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="image" value="<?php echo $image; ?>">
							  </div>
							</div>          
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="update">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
							</div>
						  </fieldset>
						  
						</form>   
					
					</div>
<?php }?>			
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		</div>
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	<?php include('pages/footer.php'); ?>
	
	
</body>
</html>
