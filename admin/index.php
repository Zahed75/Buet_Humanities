<?php include('db/config.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
<div class="container">
	<div class="page-lock">
        <div class="page-logo">
    		<a class="brand" href="index.html">
    		<img src="assets/images/user.png" alt="logo" style="width:150px;height:150px;"/>
    		</a>
    	</div>
    	<div class="page-body">
    		<div class="lock-head">
    			 Locked
    		</div>
    		<div class="lock-body">
    			
    			<form class="lock-form pull-left" action="login.php" method="post">
    				<div class="form-group">
    					<input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="email"/>
    				</div>
    				<div class="form-group">
    					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
    				</div>
    				<div class="form-actions">
    					<button type="submit" class="btn btn-success uppercase">Login</button>
    				</div>
    			</form>
    		</div>
    		<div class="lock-bottom">
    		</div>
    	</div>
    </div>
</div>

	<script src="assets/js/jquery-3.3.1.min.js" ></script>
    <script src="assets/js/bootstrap.bundle.min"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>