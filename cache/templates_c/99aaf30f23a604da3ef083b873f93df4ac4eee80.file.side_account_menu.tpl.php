<?php /* Smarty version Smarty-3.1.18, created on 2015-09-20 21:07:58
         compiled from "C:\wamp\www\BlackJack\templates\side_account_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2011555fefdb1599a80-88998200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99aaf30f23a604da3ef083b873f93df4ac4eee80' => 
    array (
      0 => 'C:\\wamp\\www\\BlackJack\\templates\\side_account_menu.tpl',
      1 => 1442776054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2011555fefdb1599a80-88998200',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fefdb15d7a36_69995492',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fefdb15d7a36_69995492')) {function content_55fefdb15d7a36_69995492($_smarty_tpl) {?>


<div class="sidebar-nav">
<aside class="col-lg-3 col-sm-4 col-lg-pull-9 col-sm-pull-8">
		<h3>My account</h3>
        
		<ul class="nav nav-pills nav-stacked">
			<li ><a href="/account/<?php echo $_SESSION['user']['id'];?>
" class=""><span class="glyphicon glyphicon-cog"></span> My profile</a></li>
			<li><a href="/account/<?php echo $_SESSION['user']['id'];?>
/myrecipes/" class=""><span class="glyphicon glyphicon-usd"></span> Budget</a></li>
			<li><a href="/account/<?php echo $_SESSION['user']['id'];?>
/myfavourites" class=""><span class="glyphicon glyphicon-star"></span> High score</a></li>
			
			
		</ul> 
</aside>

</div><?php }} ?>
