<?php /* Smarty version Smarty-3.1.18, created on 2015-10-04 20:10:28
         compiled from "C:\wamp\www\BlackJack\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:777555ff11e76f9421-95479424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03a3d139fea687c4caeecdcb1b3928114556bc3e' => 
    array (
      0 => 'C:\\wamp\\www\\BlackJack\\templates\\home.tpl',
      1 => 1443982168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '777555ff11e76f9421-95479424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55ff11e77049b5_97049306',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ff11e77049b5_97049306')) {function content_55ff11e77049b5_97049306($_smarty_tpl) {?>
<div id="slideshow">
   <div>
     <img src="<?php echo @constant('MAIN_IMAGES');?>
main-banner-1.jpg" style="width: 840px; height:240px;">
   </div>
   <div>
     <img src="<?php echo @constant('MAIN_IMAGES');?>
main-banner-2.jpg" style="width: 840px; height:240px; ">
   </div>
  
</div>

<div class="row">
  <div id="menuCards"><?php echo $_smarty_tpl->getSubTemplate ("menuCards.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
</div>

<script type="text/javascript">

$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);





</script>
<?php }} ?>
