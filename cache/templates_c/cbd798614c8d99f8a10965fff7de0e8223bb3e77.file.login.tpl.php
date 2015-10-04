<?php /* Smarty version Smarty-3.1.18, created on 2015-10-03 11:23:09
         compiled from "C:\wamp\www\BlackJack\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1710155fefda1e4cff3-39447548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbd798614c8d99f8a10965fff7de0e8223bb3e77' => 
    array (
      0 => 'C:\\wamp\\www\\BlackJack\\templates\\login.tpl',
      1 => 1443864186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1710155fefda1e4cff3-39447548',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fefda1e7d868_19089995',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fefda1e7d868_19089995')) {function content_55fefda1e7d868_19089995($_smarty_tpl) {?>
<div id="login">
<div class="input-group">
	<h3>Please login</h3><hr>
	<form method="post" action="/login">
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

		<br>
		
	 	<input type="submit" name="login" value="Login" class="btn btn-primary"/>
	 	&nbsp;or&nbsp;
	 	<a href="/signup" type="button" name="signup"  class="btn btn-success"/>Sign up</a>
	
	</form> 
</div>

</div><?php }} ?>
