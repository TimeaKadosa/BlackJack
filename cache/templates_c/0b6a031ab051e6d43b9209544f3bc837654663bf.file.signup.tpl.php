<?php /* Smarty version Smarty-3.1.18, created on 2015-10-03 11:22:28
         compiled from "C:\wamp\www\BlackJack\templates\signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1142656007007ae3942-66521182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b6a031ab051e6d43b9209544f3bc837654663bf' => 
    array (
      0 => 'C:\\wamp\\www\\BlackJack\\templates\\signup.tpl',
      1 => 1443861247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1142656007007ae3942-66521182',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56007007b1bfb5_45114505',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56007007b1bfb5_45114505')) {function content_56007007b1bfb5_45114505($_smarty_tpl) {?>
<div id="signup" >
<div class="input-group">
	<h3>Create an account</h3><hr>
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
</div><?php }} ?>
