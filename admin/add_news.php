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
	$news=$_POST['news'];
	$status=$_POST['status'];
	$insert_query="INSERT INTO hum_news(news,status) values('$news','$status')";
	$run_insert_query=mysqli_query($con,$insert_query);
	if($run_insert_query){
		$msz['success']="Data Inserted Successfully";
	}
}
?>
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add News
						<?php if(isset($msz['success'])){
							echo '=='.$msz['success'];
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
								<input type="text" class="span10 typeahead" name="news">								
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary"name="addnews">Publish</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   
					</div><br><br>	
	<?php 				
	if(isset($_POST['addhead'])){
	$name=$_POST['name'];	
	$img_name=$_FILES['image']['name'];
	$img_tmp_name=$_FILES['image']['tmp_name'];
	$img_size=$_FILES['image']['size'];
	$img_extension=pathinfo($img_name,PATHINFO_EXTENSION);
	if($img_extension=='jpg' || $img_extension=='png'){

		move_uploaded_file($img_tmp_name,"images/".$img_name);
		$error_msz['image']="File uploaded";
	  
	}

	$insert_query="INSERT INTO home(name,image)
	values('$name','$img_name')";
	$run_insert_query=mysqli_query($con,$insert_query);
	if($run_insert_query){
		$msz['success']="Dept Head Added Successfully";
	}
}
?>
					<div class="box-header">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Dept Head
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
							  <label class="control-label" for="typeahead">Name</label>
							  <div class="controls">
								<input type="text" class="span10 typeahead" name="name">								
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="image">
							  </div>
							</div>          
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="addhead">Upload</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
							
		</div>
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
