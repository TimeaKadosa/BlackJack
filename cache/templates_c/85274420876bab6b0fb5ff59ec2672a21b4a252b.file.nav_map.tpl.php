<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 20:10:28
         compiled from "C:\wamp\www\BlackJack\templates\nav_map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:395155ff1066a266e1-40478646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85274420876bab6b0fb5ff59ec2672a21b4a252b' => 
    array (
      0 => 'C:\\wamp\\www\\BlackJack\\templates\\nav_map.tpl',
      1 => 1443982168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '395155ff1066a266e1-40478646',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55ff1066a314c9_10859420',
  'variables' => 
  array (
    'menuItem' => 0,
    'data' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ff1066a314c9_10859420')) {function content_55ff1066a314c9_10859420($_smarty_tpl) {?>	<ul>

		<li class="path">
			<a href="/<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['path'];?>
" >Home</a>
		<img src="<?php echo @constant('MAIN_IMAGES');?>
arrow_right.png" style="height:30px;" >
		</li>

		<?php  $_smarty_tpl->tpl_vars['menuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuItem']->_loop = false;
 $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->key => $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['menuItem']->_loop = true;
 $_smarty_tpl->tpl_vars['menu']->value = $_smarty_tpl->tpl_vars['menuItem']->key;
?>

			<li class="path">

				<?php if ($_smarty_tpl->tpl_vars['message']->value==$_smarty_tpl->tpl_vars['menuItem']->value['path']&&$_smarty_tpl->tpl_vars['message']->value!='home'&&$_smarty_tpl->tpl_vars['message']->value!='account') {?>
					
					<a href="/<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['path'];?>
" ><?php echo ucfirst($_smarty_tpl->tpl_vars['menuItem']->value['path']);?>
</a>
					<img src="<?php echo @constant('MAIN_IMAGES');?>
arrow_right.png" style="height:30px;" >

				<?php } elseif ($_smarty_tpl->tpl_vars['message']->value==$_smarty_tpl->tpl_vars['menuItem']->value['path']&&$_smarty_tpl->tpl_vars['message']->value=='account') {?>
							<a href="/<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['path'];?>
" >My <?php echo ucfirst($_smarty_tpl->tpl_vars['menuItem']->value['path']);?>
</a>
							<img src="<?php echo @constant('MAIN_IMAGES');?>
arrow_right.png" style="height:30px;" >

				<?php }?>

			</li>
			
		<?php } ?>

	</ul>
<?php }} ?>
