<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 20:10:34
         compiled from "C:\wamp\www\BlackJack\templates\account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:601855fefdb141b505-01196814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5bd7e01250c899d4aedf1321d5bc5ee71173e36' => 
    array (
      0 => 'C:\\wamp\\www\\BlackJack\\templates\\account.tpl',
      1 => 1443982168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '601855fefdb141b505-01196814',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fefdb1589690_99739692',
  'variables' => 
  array (
    'error' => 0,
    'errors' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fefdb1589690_99739692')) {function content_55fefdb1589690_99739692($_smarty_tpl) {?>
<div class="row">
	 
	<div id='accountContent'>

       
	<div class="col-lg-2"></div>	
		<!-- MAIN CONTENT OF THE ACCOUNT -->
		<!-- <article class="col-lg-offset-1 col-sm-offset-1 col-lg-8 col-sm-7 col-lg-push-3 col-sm-push-4"> -->
<article class="col-lg-8">
        <h3>My Account</h3>
        <hr><br>
        <fieldset disabled>
            <form action="" method="post" >
                <div class="form-group">
                    <label for="FirstName">First name</label>
                    <!-- <p class="error"><?php if (isset($_smarty_tpl->tpl_vars['error']->value['name'])) {?><?php  $_smarty_tpl->tpl_vars['errors'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['errors']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error']->value['name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['errors']->key => $_smarty_tpl->tpl_vars['errors']->value) {
$_smarty_tpl->tpl_vars['errors']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
<br><?php } ?><?php }?></p> -->
                    <input type="text"  class="form-control" id="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['first_name'];?>
" disabled>
                    <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['first_name'];?>
">
                </div>

                  <div class="form-group">
                    <label for="LastName">Last name</label>
                    <!-- <p class="error"><?php if (isset($_smarty_tpl->tpl_vars['error']->value['name'])) {?><?php  $_smarty_tpl->tpl_vars['errors'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['errors']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error']->value['name']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['errors']->key => $_smarty_tpl->tpl_vars['errors']->value) {
$_smarty_tpl->tpl_vars['errors']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
<br><?php } ?><?php }?></p> -->
                    <input type="text"  class="form-control" id="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['last_name'];?>
" disabled>
                    <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['last_name'];?>
">
                </div>
                
                <div class="form-group">
                    <label for="Username">Username</label>
                    <!-- <p class="error"><?php if (isset($_smarty_tpl->tpl_vars['error']->value['username'])) {?><?php  $_smarty_tpl->tpl_vars['errors'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['errors']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error']->value['username']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['errors']->key => $_smarty_tpl->tpl_vars['errors']->value) {
$_smarty_tpl->tpl_vars['errors']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
<br><?php } ?><?php }?></p> -->
                    <input type="text" name="username" class="form-control" id="Username" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['username'];?>
">
                </div>
                
                <div class="form-group">
                    <label for="Password">Password</label>
                    <!-- <p class="error"><?php if (isset($_smarty_tpl->tpl_vars['error']->value['password'])) {?><?php  $_smarty_tpl->tpl_vars['errors'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['errors']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error']->value['password']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['errors']->key => $_smarty_tpl->tpl_vars['errors']->value) {
$_smarty_tpl->tpl_vars['errors']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
<br><?php } ?><?php }?></p> -->
                    <input type="password" name="password" class="form-control" id="Password" value="">
                </div>
                
                <div class="form-group">
                    <label for="Email1">Email address</label>
                    <!-- <p class="error"><?php if (isset($_smarty_tpl->tpl_vars['error']->value['email'])) {?><?php  $_smarty_tpl->tpl_vars['errors'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['errors']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error']->value['email']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['errors']->key => $_smarty_tpl->tpl_vars['errors']->value) {
$_smarty_tpl->tpl_vars['errors']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
<br><?php } ?><?php }?></p> -->
                    <input type="text" name="email" class="form-control" id="Email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
">
                </div>

                <div class="form-group">
                    <label for="Email1">Total chips</label>
                    <!-- <p class="error"><?php if (isset($_smarty_tpl->tpl_vars['error']->value['email'])) {?><?php  $_smarty_tpl->tpl_vars['errors'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['errors']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error']->value['email']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['errors']->key => $_smarty_tpl->tpl_vars['errors']->value) {
$_smarty_tpl->tpl_vars['errors']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
<br><?php } ?><?php }?></p> -->
                    <input type="text" name="email" class="form-control" id="Email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['total_chips'];?>
">
                </div>
                    
                   
                    
            </form>
         </fieldset>
                <br>  
                <a href='<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
/edit' class="btn btn-info col-lg-4 col-md-4 col-sm-4 "> Edit </a>
        </article>


        
     
       <div class="col-lg-1"></div>    
                
	</div>

</div>  
<?php }} ?>
