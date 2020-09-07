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
	$members=$_POST['members'];
	$insert_query="INSERT INTO active_members(members) values('$members')";
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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Active Members
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
							  <label class="control-label" for="typeahead">Name</label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" name="members">								
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary"name="submit">Update</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   
					</div>	<br><br>
					<?php 
						if(isset($_POST['add_inactive'])){
							$member=$_POST['member'];
							$insert_query="INSERT INTO inactive_members(member) values('$member')";
							$run_insert_query=mysqli_query($con,$insert_query);
							if($run_insert_query){
								$msz['success']="Data Inserted Successfully";
							}
						}
						?>
					<div class="box-header">
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Inactive Member
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
							  <label class="control-label" for="typeahead">Inactive Members</label>
							  <div class="controls">
								<input type="text" class="span10 typeahead" name="member">								
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary"name="add_inactive">Update</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   
					</div>
					
		</div>
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
