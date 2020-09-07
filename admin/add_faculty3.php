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
	$name=$_POST['name'];
	$profession=$_POST['profession'];
	$field=$_POST['field'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$email2=$_POST['email2'];
	$cv=$_POST['cv'];
	$website=$_POST['website'];
	$img_name=$_FILES['image']['name'];
	$img_tmp_name=$_FILES['image']['tmp_name'];
	$img_size=$_FILES['image']['size'];
	$img_extension=pathinfo($img_name,PATHINFO_EXTENSION);
	if($img_extension=='jpg' || $img_extension=='png'){

		move_uploaded_file($img_tmp_name,"images/".$img_name);
		$error_msz['image']="File uploaded";
	  
	}

	$insert_query="INSERT INTO faculty_3(name,profession,field,contact,email,email2,cv,website,img)
	values('$name','$profession','$field','$contact','$email','$email2','$cv','$website','$img_name')";
	$run_insert_query=mysqli_query($con,$insert_query);
	if($run_insert_query){
		$msz['success']="Faculty Added Successfully";
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Faculty
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
							  <label class="control-label" for="typeahead">Name</label>
							  <div class="controls">
								<input type="text" class="span10 typeahead" name="name">								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Profession</label>
							  <div class="controls">
								<input type="text" class="span10 typeahead" name="profession">								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Field of Interest</label>
							  <div class="controls">
								<input type="text" class="span10 typeahead" name="field">								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Contact</label>
							  <div class="controls">
								<input type="number" class="span6 typeahead" name="contact">								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Email</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="email">								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Seconday Email(Optional)</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="email2">								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">CV</label>
							  <div class="controls">
								<input type="url" class="span10 typeahead" name="cv">								
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Website</label>
							  <div class="controls">
								<input type="url" class="span10 typeahead" name="website">								
							  </div>

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

