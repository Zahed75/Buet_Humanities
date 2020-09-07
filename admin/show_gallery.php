<?php 
session_start();
include('db/config.php');
if(empty($_SESSION['email'])){
	header('location:index.php');
}
?>
<?php include('pages/head.php')?>

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
			<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span><a href="add_news.php">Add New Image</a></h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
						</div>
					</div>
			<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  
						  <thead>
							  <tr>
								  <th>Name</th>
								  <th>Image</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  <?php 
						  $show_query="SELECT * FROM gallery";
						  $run_show_query=mysqli_query($con,$show_query);
						  while($rows=mysqli_fetch_array($run_show_query)){
							$image_id=$rows['ID']; 
							$image=$rows['img'];
						  ?>
								<tr>
									<td class="center"><?php echo $image_id;?></td>						
									<td class="center"><img src="images/<?php echo $image;?>" style='width:50px;height:50px'/></td>
									<td class="center">
										
										<a class="btn btn-danger" href="del_gallery.php?del_id=<?php echo $image_id;?>">
											<i class="halflings-icon white trash"></i> 
										</a>
									</td>
								</tr>
						  <?php }?>
						  </tbody>
					  </table>            
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
