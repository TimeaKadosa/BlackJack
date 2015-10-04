
<!--Load files for the layout -->

<link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../../css/main.css" rel="stylesheet">
<?php
 	require_once('../../includes/initialize.php');
	// partials
	include('../partials/html_header.php');
	include('../partials/html_nav_menu.php');		
?>


<div class="input-group">
	<form>
		<div class="input-group">
  			<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
  			<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
		</div>
		<br>
		<div class="input-group">
  			<span class="input-group-addon" id="basic-addon1"><span class=" glyphicon glyphicon-asterisk" aria-hidden="true"></span></span>
  			<input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon2">
		</div>
		<br>
		
	 	<button type="button" class="btn btn-primary" name="submit">Sign in</button>
	
	</form> 
</div>

