<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 20:25:41
         compiled from "C:\wamp\www\BlackJack\templates\play.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1279955ff110a941ff8-52748108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ff3afcf7f929466438e6fc59059c8a9c5bbecaa' => 
    array (
      0 => 'C:\\wamp\\www\\BlackJack\\templates\\play.tpl',
      1 => 1443982168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1279955ff110a941ff8-52748108',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55ff110aab9660_49808562',
  'variables' => 
  array (
    'data' => 0,
    'message' => 0,
    'card' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ff110aab9660_49808562')) {function content_55ff110aab9660_49808562($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["userid"] = new Smarty_variable($_SESSION['user']['id'], null, 0);?>
<div  id="cardTable" class="play">
			
<?php if (isset($_SESSION['user']['username'])) {?>

		<form id="playForm" method="post" action="">

			<!-- if didn't start the game yet, means that did not post anything  -->
			<?php if (isset($_smarty_tpl->tpl_vars['data']->value)) {?>

				<div class="col-md-2"></div>
				<div id="card-table" class="col-md-10">

					<!-- set the message for the result of the game -->
					<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

					
					<h4> Dealer's cards : <?php if (isset($_smarty_tpl->tpl_vars['data']->value['stand'])||$_smarty_tpl->tpl_vars['data']->value['playerResult']>21) {?><?php echo $_smarty_tpl->tpl_vars['data']->value['dealerResult'];?>
<?php }?></h4> 
					

						<!-- player hit stand or player has busted  -->
						<?php if (isset($_smarty_tpl->tpl_vars['data']->value['stand'])||$_smarty_tpl->tpl_vars['data']->value['playerResult']>21) {?>	            
							<!-- show all the cards from dealer -->
							<?php  $_smarty_tpl->tpl_vars['card'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['card']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['dealer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['card']->key => $_smarty_tpl->tpl_vars['card']->value) {
$_smarty_tpl->tpl_vars['card']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['card']->key;
?>

		    					<img src="<?php echo @constant('CARDS');?>
<?php echo mb_strtolower($_smarty_tpl->tpl_vars['card']->value['color'], 'UTF-8');?>
_<?php echo mb_strtolower($_smarty_tpl->tpl_vars['card']->value['card'], 'UTF-8');?>
.png" alt="" style="width: 100px; height:155px;">&nbsp;
						
	    					<?php } ?>
						
						<?php } else { ?>	
							<!-- else show only one card --> 
							<img src="<?php echo @constant('CARDS');?>
<?php echo mb_strtolower($_smarty_tpl->tpl_vars['data']->value['dealer'][0]['color'], 'UTF-8');?>
_<?php echo mb_strtolower($_smarty_tpl->tpl_vars['data']->value['dealer'][0]['card'], 'UTF-8');?>
.png" alt="" style="width: 100px; height:155px;" >&nbsp;
							<img src="<?php echo @constant('CARDS');?>
backside.png" alt="" style="width: 100px; height:155px;">&nbsp;	
						<?php }?>
						<br></br>
					<h4> Your cards : <?php echo $_smarty_tpl->tpl_vars['data']->value['playerResult'];?>
</h4>
							
								            
						<!-- show all the cards of the player -->
						<?php  $_smarty_tpl->tpl_vars['card'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['card']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['hand']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['card']->key => $_smarty_tpl->tpl_vars['card']->value) {
$_smarty_tpl->tpl_vars['card']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['card']->key;
?>

	    					<img src="<?php echo @constant('CARDS');?>
<?php echo mb_strtolower($_smarty_tpl->tpl_vars['card']->value['color'], 'UTF-8');?>
_<?php echo mb_strtolower($_smarty_tpl->tpl_vars['card']->value['card'], 'UTF-8');?>
.png" alt="" style="width: 100px; height:155px;">&nbsp;	
						<?php } ?>
						<hr>
						<div class="row">
							<div id="bankroll" class="col-lg-4">
								<h4><?php echo $_smarty_tpl->tpl_vars['data']->value['bankroll'];?>
</h4>
							</div>
							<div id="bet" class="col-lg-4">

								<h4><?php echo $_smarty_tpl->tpl_vars['data']->value['bet'];?>
</h4>
							</div>
							
							<div id="win" class="col-lg-4">
								<h4>Win: <?php echo $_smarty_tpl->tpl_vars['data']->value['win'];?>
</h4>
							</div>
						</div>

						<hr>
						
						<input type="hidden" name="bet" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['bet'];?>
"/>
						<input type="hidden" name="win" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['win'];?>
"/>
						<input type="hidden" name="userId" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"/>
				</div>		            
				
			
			
				
				
			<?php }?>


<!-- *****************************************************************************************
							BUTTONS
	 *************************************************************************************  -->
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					
					<div class="buttons">
						<!-- if game has been started or ask for the next card and player's result not more then 21 -->
						<?php if (isset($_smarty_tpl->tpl_vars['data']->value['deal'])&&$_smarty_tpl->tpl_vars['data']->value['stand']==false&&$_smarty_tpl->tpl_vars['data']->value['playerResult']<=21) {?>

									<!-- show all the buttons we need for the game -->
									<a href="/play" class="btn btn-primary">Try Again</a>&nbsp;
									<input type="submit" name="hit" value="Hit" class="button btn btn-success"/>&nbsp;
									<input type="submit" name="stand" value="Stand" class="button btn btn-danger" id="stand"/>

									

						<?php } elseif (isset($_smarty_tpl->tpl_vars['data']->value['stand'])||$_smarty_tpl->tpl_vars['data']->value['playerResult']>21) {?>
						    
									<!-- show only the "try again" button -->
									<a href="/play" class="btn btn-primary">Try Again</a>&nbsp;
					
								
						<?php }?>
					</div>
				</div>
				<div class="col-md-3"></div>			
			</div>		
		</form>

<?php } else { ?>
	<div class="row">
		<div class="col-md-3"></div>

		<div class="col-md-6">
			

			 <script type="text/javascript">
				location.replace('/login');
  			</script>
		</div>

		<div class="col-md-3"></div>
	</div>

<?php }?>	

</div>

	<div class="row">
	<div id="menuCards"><?php echo $_smarty_tpl->getSubTemplate ("menuCards.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
</div>


 
                       <?php }} ?>
