<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 20:10:32
         compiled from "C:\wamp\www\BlackJack\templates\mainPlay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31559560ae86c9b87a9-09667546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '875a0cf0eb9bcc296aa73f3c6da6222af47637fd' => 
    array (
      0 => 'C:\\wamp\\www\\BlackJack\\templates\\mainPlay.tpl',
      1 => 1443982168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31559560ae86c9b87a9-09667546',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560ae86cac8971_83286358',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560ae86cac8971_83286358')) {function content_560ae86cac8971_83286358($_smarty_tpl) {?><div class="play">
<form method="post" action="">
	<h1>Let's play BlackJack</h1>
	<br>

	<div id="card-table">
		<img src="<?php echo @constant('MAIN_IMAGES');?>
cards.jpg" alt="" id="play_main">
		<br></br>

		<h3 style="text-decoration: underline;">Place Bet</h3><br>
		<button type='button'><img name="chips_1" src="<?php echo @constant('CHIPS');?>
chips_1.png" alt="" id="chips_1" style="width: 50px; height:50px;" ></button>

		<button type='button'><img name="chips_1" src="<?php echo @constant('CHIPS');?>
chips_5.png" alt="" id="chips_5" style="width: 50px; height:50px;" ></button>

		<button type='button'><img name="chips_1" src="<?php echo @constant('CHIPS');?>
chips_10.png" alt="" id="chips_10" style="width: 50px; height:50px;"></button>

		<button type='button'><img name="chips_1" src="<?php echo @constant('CHIPS');?>
chips_25.png" alt="" id="chips_25" style="width: 50px; height:50px;"></button>

		<button type='button'><img name="chips_1" src="<?php echo @constant('CHIPS');?>
chips_50.png" alt="" id="chips_50" style="width: 50px; height:50px;"></button>

		<button type='button'><img  name="chips_1" src="<?php echo @constant('CHIPS');?>
chips_100.png" alt="" id="chips_100" style="width: 50px; height:50px;"></button>
		
		<hr>
		<div class="row">
			<div id="bankroll" class="col-lg-4"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</div>
			<div id="bet" class="col-lg-4">0</div>
			
			<div id="win" class="col-lg-4"></div>
		</div>
		<hr>
	</div>		
	<div class="buttons">

	<!-- the game hasn't been started yet, show only the "deal" button -->
	<br>
		<input type="submit" name="deal" value="Deal" class="btn btn-primary"/>
	</div>
</form>
</div><?php }} ?>
