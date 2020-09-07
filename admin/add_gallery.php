<?php 
session_start();
include('db/config.php');
if(empty($_SESSION['email'])){
	header('location:index.php');
}
?>
<?php include('pages/head.php')?>
<?php 
if(isset($_POST['submit'])){
	$img_name=$_FILES['image']['name'];
	$img_tmp_name=$_FILES['image']['tmp_name'];
	$img_size=$_FILES['image']['size'];
	$img_extension=pathinfo($img_name,PATHINFO_EXTENSION);
	if($img_extension=='jpg' || $img_extension=='png'){

		move_uploaded_file($img_tmp_name,"images/".$img_name);
		$error_msz['image']="File uploaded";
	  
	}

	$insert_query="INSERT INTO gallery(img)
	values('$img_name')";
	$run_insert_query=mysqli_query($con,$insert_query);
	if($run_insert_query){
		$msz['success']="Image Uploaded Successfully";
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add in Gallery
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

							<div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="image">
							  </div>
							</div>          
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="submit">Upload</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
							</div>
						  </fieldset>
						</form>   
					
					</div>
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
	<?php include('pages/footer.php') ?>
	
	
</body>
</html>

