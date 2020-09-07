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
						<h2><i class="halflings-icon user"></i><span class="break"></span><a href="">Add office Staff</a></h2>
						<div class="box-icon">
							
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							
						</div>
					</div>
			<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Name</th>
								  <th>Profession</th>
								  <th>Field of Interest</th>
								  <th>Contact</th>
								  <th>Email</th>
								  <th>Email Optional</th>
								  <th>CV</th>
								  <th>Website</th>
								  <th>Image</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						    <?php 
  $show_query="SELECT * FROM faculty";
  $run_show_query=mysqli_query($con,$show_query);
  while($rows=mysqli_fetch_array($run_show_query)){
    $faculty_id=$rows['ID'];
	$name=$rows['name'];
	$profession=$rows['profession'];
	$field=$rows['field'];
	$contact=$rows['contact'];
	$email=$rows['email'];
	$email2=$rows['email2'];
	$cv=$rows['cv'];
	$website=$rows['website'];
	$image=$rows['img'];

  ?>

					<tr>
						
						<td class="center"><?php echo $name;?></td>
						<td class="center"><?php echo $profession;?></td>
						<td class="center"><?php echo $field;?></td>
						<td class="center"><?php echo $contact;?></td>
						<td class="center"><?php echo $email;?></td>
						<td class="center"><?php echo $email2;?></td>
						<td class="center"><?php echo $cv;?></td>
						<td class="center"><?php echo $website;?></td>						
						<td class="center"><img src="images/<?php echo $image;?>" style='width:50px;height:50px'/></td>
						<td class="center">
						
							<a class="btn btn-info" href="edit_faculty.php?edit_post_id=<?php echo $faculty_id;?>">
								<i class="halflings-icon white edit"></i>  
							</a>
							<a class="btn btn-danger" href="del_faculty.php?del_id=<?php echo $faculty_id;?>">
								<i class="halflings-icon white trash"></i>
							</a>
						</td>
					</tr>
  <?php } ?>
				  </tbody>
			  </table><br><br>
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Name</th>
								  <th>Profession</th>
								  <th>Field of Interest</th>
								  <th>Contact</th>
								  <th>Email</th>
								  <th>Email Optional</th>
								  <th>CV</th>
								  <th>Website</th>
								  <th>Image</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						    <?php 
  $show_query="SELECT * FROM faculty_2";
  $run_show_query=mysqli_query($con,$show_query);
  while($rows=mysqli_fetch_array($run_show_query)){
    $faculty_id=$rows['ID'];
	$name=$rows['name'];
	$profession=$rows['profession'];
	$field=$rows['field'];
	$contact=$rows['contact'];
	$email=$rows['email'];
	$email2=$rows['email2'];
	$cv=$rows['cv'];
	$website=$rows['website'];
	$image=$rows['img'];

  ?>

					<tr>
						
						<td class="center"><?php echo $name;?></td>
						<td class="center"><?php echo $profession;?></td>
						<td class="center"><?php echo $field;?></td>
						<td class="center"><?php echo $contact;?></td>
						<td class="center"><?php echo $email;?></td>
						<td class="center"><?php echo $email2;?></td>
						<td class="center"><?php echo $cv;?></td>
						<td class="center"><?php echo $website;?></td>						
						<td class="center"><img src="images/<?php echo $image;?>" style='width:50px;height:50px'/></td>
						<td class="center">
						
							<a class="btn btn-info" href="edit_faculty.php?edit_post_id=<?php echo $faculty_id;?>">
								<i class="halflings-icon white edit"></i>  
							</a>
							<a class="btn btn-danger" href="del_faculty_2.php?del_id=<?php echo $faculty_id;?>">
								<i class="halflings-icon white trash"></i>
							</a>
						</td>
					</tr>
  <?php } ?>
				  </tbody>
			  </table><br><br>
					<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Name</th>
								  <th>Profession</th>
								  <th>Field of Interest</th>
								  <th>Contact</th>
								  <th>Email</th>
								  <th>Email Optional</th>
								  <th>CV</th>
								  <th>Website</th>
								  <th>Image</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						    <?php 
  $show_query="SELECT * FROM faculty_3";
  $run_show_query=mysqli_query($con,$show_query);
  while($rows=mysqli_fetch_array($run_show_query)){
    $faculty_id=$rows['ID'];
	$name=$rows['name'];
	$profession=$rows['profession'];
	$field=$rows['field'];
	$contact=$rows['contact'];
	$email=$rows['email'];
	$email2=$rows['email2'];
	$cv=$rows['cv'];
	$website=$rows['website'];
	$image=$rows['img'];

  ?>

					<tr>
						
						<td class="center"><?php echo $name;?></td>
						<td class="center"><?php echo $profession;?></td>
						<td class="center"><?php echo $field;?></td>
						<td class="center"><?php echo $contact;?></td>
						<td class="center"><?php echo $email;?></td>
						<td class="center"><?php echo $email2;?></td>
						<td class="center"><?php echo $cv;?></td>
						<td class="center"><?php echo $website;?></td>						
						<td class="center"><img src="images/<?php echo $image;?>" style='width:50px;height:50px'/></td>
						<td class="center">
						
							<a class="btn btn-info" href="edit_faculty.php?edit_post_id=<?php echo $faculty_id;?>">
								<i class="halflings-icon white edit"></i>  
							</a>
							<a class="btn btn-danger" href="del_faculty_3.php?del_id=<?php echo $faculty_id;?>">
								<i class="halflings-icon white trash"></i>
							</a>
						</td>
					</tr>
  <?php } ?>
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
