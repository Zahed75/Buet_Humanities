<?php 
session_start();
include('db/config.php');
if(empty($_SESSION['email'])){
	header('location:index.php');
}
?>
<?php include('pages/head.php')?>
<?php 
$edit_id=$_GET['edit_id'];
$edit_query="SELECT * FROM hum_news where ID='$edit_id'";
$run_edit_query=mysqli_query($con,$edit_query);
while($rows=mysqli_fetch_array($run_edit_query)){
	$news=$rows['news'];
	$status=$rows['status'];
?>
<?php 
if(isset($_POST['update'])){
	$news=$_POST['news'];
	$status=$_POST['status'];
	$update_query="UPDATE hum_news SET news='$news',status='$status' where ID='$edit_id'";
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
			
					<div class="box-header">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Category
						<?php if(isset($msz['success'])){
							echo '==='.$msz['success'];
						}
							
						?></h2>
						<div class="box-icon">
						
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>

					<div class="box-content">
						<form class="form-horizontal" action="" method="post">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">News Title</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="news" value="<?php echo $news;?>">								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Status</label>
							  <div class="controls">
								<input type="radio" class="span6 typeahead" name="status"<?php if($status==1){echo "checked";}?> 
								value="1">Published								
								<input type="radio" class="span6 typeahead" name="status" value="0" <?php if($status==0){echo "checked";}?>>	Unublished								
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary"name="update">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   
					</div>
<?php }?>
		</div>
		</div><!--/fluid-row-->
		
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
