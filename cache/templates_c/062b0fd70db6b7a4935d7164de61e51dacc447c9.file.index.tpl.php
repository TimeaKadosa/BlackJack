<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 20:26:15
         compiled from "C:\wamp\www\BlackJack\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2011355fefd904e0452-54073976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '062b0fd70db6b7a4935d7164de61e51dacc447c9' => 
    array (
      0 => 'C:\\wamp\\www\\BlackJack\\templates\\index.tpl',
      1 => 1443983168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2011355fefd904e0452-54073976',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fefd905aa1a8_68123674',
  'variables' => 
  array (
    'sNavMapView' => 0,
    'sMenuView' => 0,
    'sMainContentView' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fefd905aa1a8_68123674')) {function content_55fefd905aa1a8_68123674($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<title>BlackJack</title>
        <link rel="stylesheet" type="text/css" href="<?php echo @constant('URL_CSS');?>
main.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo @constant('BOOTSTRAP_CSS');?>
bootstrap.min.css" >
	<link rel="stylesheet" href="<?php echo @constant('BOOTSTRAP_CSS');?>
custom.css" >
    <script src="<?php echo @constant('BOOTSTRAP_JS');?>
respond.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo @constant('JS');?>
bet.js"></script>
	
	</head>
	<body>
		
			<div id="mainContent">
				
				<div class="row">
					<div id="banner" ><?php echo $_smarty_tpl->getSubTemplate ("banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
				</div>

				<div class="row">
					<div id="nav_map"><?php echo $_smarty_tpl->tpl_vars['sNavMapView']->value;?>
</div>
				</div>

				<div class="row">

					<div class="col-lg-2">
						<div id="menu"><?php echo $_smarty_tpl->tpl_vars['sMenuView']->value;?>
</div>
					</div>

					<div class="col-lg-8">
						<div id="mainContainer"><?php echo $_smarty_tpl->tpl_vars['sMainContentView']->value;?>
</div>
					</div>

					<div class="col-lg-2"><?php echo $_smarty_tpl->getSubTemplate ("commercial.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<img id="banner" class="col-lg-10" src="<?php echo @constant('MAIN_IMAGES');?>
banner2.jpg" style="width: 100%; height:200px;" >
				</div>

				<div class="row">
					<div id="footer"><?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
				</div>
			</div>
			
		
			<!-- Javascript -->
			<script src="http://code.jquery.com/jquery-latest.min.js"></script>
			<script src="<?php echo @constant('BOOTSTRAP_JS');?>
bootstrap.min.js"></script>
	
	</body>
</html>

<script type="text/javascript" language="javascript">

	$(document).ready(function() { 


		$('.button').click(function(){

		/*		
			$.get('templates/test.tpl', function(data){

				$('#playForm').html(data);
				//alert('load was performed');
			});
		*/

		/*	$('#playForm').load(test.tpl, #playForm, function() {
				// can add another function here
			});
			
		*/

		/*	$.ajax({
				url:'blackjack/play',
				type: "POST",
				dataType: "html",
				data: $('#mainContainer').serialize(),
				success: function(data) {

					$('#mainContainer').appand(data);
				},
				error: function() {
					alert('error');
				},
			
			});
		}); */
	});
</script>  
<?php }} ?>
