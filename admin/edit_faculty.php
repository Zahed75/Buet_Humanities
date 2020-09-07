<?php 
session_start();
include('db/config.php');
if(empty($_SESSION['email'])){
	header('location:index.php');
}
?>
<?php include('pages/head.php')?>
<?php 
$post_edit_id=$_GET['edit_post_id'];
$edit_query="SELECT * FROM faculty where ID='$post_edit_id'";
$run_edit_query=mysqli_query($con,$edit_query);
while($rows=mysqli_fetch_array($run_edit_query)){
	$field=$rows['field'];
	$contact=$rows['contact'];
	$email=$rows['email'];
	$email2=$rows['email2'];
	$cv=$rows['cv'];
	$website=$rows['website'];
	$image=$rows['img'];
	?>
<?php 
if(isset($_POST['update'])){
	$field=$rows['field'];
	$contact=$rows['contact'];
	$email=$rows['email'];
	$email2=$rows['email2'];
	$cv=$rows['cv'];
	$website=$rows['website'];
	$image=$rows['img'];
	$update_query="UPDATE faculty SET field='$field',
	contact='$contact',
	email='$email',
	email2='$email2',
	cv='$cv',
	website='$website',
	img='$image' 
	where ID='$post_edit_id'";
	$run_update_query=mysqli_query($con,$update_query);
	if($run_update_query){
		$msz['success']="Data Updated Successfully";
	}
} 
?>

<html>
<body>
		<!-- start: Header -->
	<div class="navbar">
		<?php include('pages/sub_header.php')?>
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add in Faculty
						<?php if(isset($msz['success'])){
							echo '===='.$msz['success'];
						}
							
						?>
						</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
						  <fieldset>
							<div class="control-group">
							<form class="form-horizontal" action="" method="post">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Field of Interest</label>
							  <div class="controls">
								<input type="text" class="span10 typeahead" name="field" value="<?php echo $field; ?>">								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Contact</label>
							  <div class="controls">
								<input type="number" class="span6 typeahead" name="contact" value="<?php echo $contact; ?>">								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Email</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="email" value="<?php echo $email; ?>">								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Seconday Email(Optional)</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="email2" value="<?php echo $email2; ?>">								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">CV</label>
							  <div class="controls">
								<input type="url" class="span10 typeahead" name="cv" value="<?php echo $cv; ?>">								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Website</label>
							  <div class="controls">
								<input type="url" class="span10 typeahead" name="website" value="<?php echo $website; ?>">								
							  </div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="image" value="<?php echo $image; ?>">
							  </div>
							</div>          
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="update">Save Changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
							</div>
						  </fieldset>
						</form>   
					
					</div>
		</div><!--/#content.span10-->
<?php } ?>		
		</div><!--/fluid-row-->
		</div>
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
	<?php include('pages/footer.php') ?>
	
	
</body>
</html>

