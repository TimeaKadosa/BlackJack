<!DOCTYPE html>
<html lang="en">
	<head>
		<title>BlackJack</title>
        <link rel="stylesheet" type="text/css" href="{$smarty.const.URL_CSS}main.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{$smarty.const.BOOTSTRAP_CSS}bootstrap.min.css" >
	<link rel="stylesheet" href="{$smarty.const.BOOTSTRAP_CSS}custom.css" >
    <script src="{$smarty.const.BOOTSTRAP_JS}respond.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{$smarty.const.JS}bet.js"></script>
	
	</head>
	<body>
		
			<div id="mainContent">
				
				<div class="row">
					<div id="banner" >{include file="banner.tpl"}</div>
				</div>

				<div class="row">
					<div id="nav_map">{$sNavMapView}</div>
				</div>

				<div class="row">

					<div class="col-lg-2">
						<div id="menu">{$sMenuView}</div>
					</div>

					<div class="col-lg-8">
						<div id="mainContainer">{$sMainContentView}</div>
					</div>

					<div class="col-lg-2">{include file="commercial.tpl"}</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<img id="banner" class="col-lg-10" src="{$smarty.const.MAIN_IMAGES}banner2.jpg" style="width: 100%; height:200px;" >
				</div>

				<div class="row">
					<div id="footer">{include file="footer.tpl"}</div>
				</div>
			</div>
			
		
			<!-- Javascript -->
			<script src="http://code.jquery.com/jquery-latest.min.js"></script>
			<script src="{$smarty.const.BOOTSTRAP_JS}bootstrap.min.js"></script>
	
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
