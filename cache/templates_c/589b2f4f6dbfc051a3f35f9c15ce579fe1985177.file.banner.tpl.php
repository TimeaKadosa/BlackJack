<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 20:10:29
         compiled from "C:\wamp\www\BlackJack\templates\banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2098255fefd905bef02-50168237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '589b2f4f6dbfc051a3f35f9c15ce579fe1985177' => 
    array (
      0 => 'C:\\wamp\\www\\BlackJack\\templates\\banner.tpl',
      1 => 1443982168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2098255fefd905bef02-50168237',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fefd905d64e2_83026234',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fefd905d64e2_83026234')) {function content_55fefd905d64e2_83026234($_smarty_tpl) {?><div class="header">

	<div id="banner-buttons">
		<a href="/login" class="btn btn-success" >LOGIN</a>
		<a href="/signup" class="btn btn-primary" >JOIN NOW</a>
	</div>
	<img src="<?php echo @constant('MAIN_IMAGES');?>
header2.png"  class="img-responsive">
	
</div><?php }} ?>
