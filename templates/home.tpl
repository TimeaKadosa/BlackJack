
<div id="slideshow">
   <div>
     <img src="{$smarty.const.MAIN_IMAGES}main-banner-1.jpg" style="width: 840px; height:240px;">
   </div>
   <div>
     <img src="{$smarty.const.MAIN_IMAGES}main-banner-2.jpg" style="width: 840px; height:240px; ">
   </div>
  
</div>

<div class="row">
  <div id="menuCards">{include file="menuCards.tpl"}</div>
</div>

<script type="text/javascript">
{literal}
$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);



{/literal}

</script>
