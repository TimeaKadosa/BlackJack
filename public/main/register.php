
<!--Load files for the layout -->

<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../../css/main.css" rel="stylesheet">
<?php
 	require_once('../../includes/initialize.php');
	// partials
	include('../partials/html_header.php');
	include('../partials/html_nav_menu.php');	

	if(!empty($_POST)) {

		$user = new User;

		$user->username 	= $_POST['username'];
		$user->password 	= $_POST['password'];
		$user->email 		= $_POST['email'];
		$user->first_name 	= $_POST['first_name'];
		$user->last_name 	= $_POST['last_name'];

		$user->insert();	
	}
?>

<div class="input-group">
	<form method="post" action="">
		<div class="input-group">
  			<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
  			<input type="text" class="form-control" placeholder="Username" name="username">
		</div>
		<br>
		<div class="input-group">
  			<span class="input-group-addon" id="basic-addon1"><span class=" glyphicon glyphicon-asterisk" aria-hidden="true"></span></span>
  			<input type="password" class="form-control" placeholder="Password" name="password">
		</div>
		<br>

		<div class="input-group">
  			<span class="input-group-addon" id="basic-addon1"><span class=" g glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
  			<input type="text" class="form-control" placeholder="First name" name="first_name" >
		</div>
		<br>

		<div class="input-group">
  			<span class="input-group-addon" id="basic-addon1"><span class=" glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
  			<input type="text" class="form-control" placeholder="Last name" name="last_name" >
		</div>
		<br>

		<div class="input-group">
  			<span class="input-group-addon" id="basic-addon1">@</span>
  			<input type="text" class="form-control" placeholder="Email" name="email" >
		</div>
		<br>
		
	 	<input type="submit" name="deal" value="Register" class="btn btn-primary"/>
	
	</form> 
</div>