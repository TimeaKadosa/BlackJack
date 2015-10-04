<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 20:10:28
         compiled from "C:\wamp\www\BlackJack\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255155fefd905ea8d2-18560434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55b30886201fbfe32ae063e6be9626c9be355de3' => 
    array (
      0 => 'C:\\wamp\\www\\BlackJack\\templates\\menu.tpl',
      1 => 1443982168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255155fefd905ea8d2-18560434',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fefd9065fc55_10036739',
  'variables' => 
  array (
    'data' => 0,
    'menu' => 0,
    'userid' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fefd9065fc55_10036739')) {function content_55fefd9065fc55_10036739($_smarty_tpl) {?><?php if (isset($_SESSION['user'])) {?>
	
	<?php $_smarty_tpl->tpl_vars["userid"] = new Smarty_variable($_SESSION['user']['id'], null, 0);?>

<?php }?>

	

		<ul id="headerNav"  class="nav sidebar-nav">	
	        <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?> 
	        	
				<?php if ($_smarty_tpl->tpl_vars['menu']->value['type']=='logged_in'&&$_smarty_tpl->tpl_vars['userid']->value>0) {?>

		        	<li <?php if ($_smarty_tpl->tpl_vars['menu']->value['path']==$_smarty_tpl->tpl_vars['message']->value) {?>class="active"<?php }?>>
		        		<a href="<?php if ($_smarty_tpl->tpl_vars['menu']->value['path']=='account') {?>/<?php echo $_smarty_tpl->tpl_vars['menu']->value['path'];?>
/<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['menu']->value['path'];?>
<?php }?>" class="navbar-brand" ><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</a>
		        	</li>
		        
	        	<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['type']=='main'&&$_smarty_tpl->tpl_vars['userid']->value>0) {?>

	        			<li <?php if ($_smarty_tpl->tpl_vars['menu']->value['path']==$_smarty_tpl->tpl_vars['message']->value) {?>class="active"<?php }?>>		
							<a href="/<?php echo $_smarty_tpl->tpl_vars['menu']->value['path'];?>
" class="navbar-brand" ><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</a>
						</li>

	    		<?php } elseif (empty($_smarty_tpl->tpl_vars['userid']->value)) {?>

	    			<?php if ($_smarty_tpl->tpl_vars['menu']->value['type']=='main') {?>
						<li <?php if ($_smarty_tpl->tpl_vars['menu']->value['path']==$_smarty_tpl->tpl_vars['message']->value) {?>class="active"<?php }?>>		
							<a href="/<?php echo $_smarty_tpl->tpl_vars['menu']->value['path'];?>
" class="navbar-brand" ><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</a>
						</li>
					<?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['type']=='hidden') {?>
						<li <?php if ($_smarty_tpl->tpl_vars['menu']->value['path']==$_smarty_tpl->tpl_vars['message']->value) {?>class="active"<?php }?>>		
							<a href="/<?php echo $_smarty_tpl->tpl_vars['menu']->value['path'];?>
" class="navbar-brand" ><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</a>
						</li>

					<?php }?>
					
				<?php }?>

	        <?php } ?>
    	</ul>



<?php }} ?>
