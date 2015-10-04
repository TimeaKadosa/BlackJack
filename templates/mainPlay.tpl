<div class="play">
<form method="post" action="">
	<h1>Let's play BlackJack</h1>
	<br>

	<div id="card-table">
		<img src="{$smarty.const.MAIN_IMAGES}cards.jpg" alt="" id="play_main">
		<br></br>

		<h3 style="text-decoration: underline;">Place Bet</h3><br>
		<button type='button'><img name="chips_1" src="{$smarty.const.CHIPS}chips_1.png" alt="" id="chips_1" style="width: 50px; height:50px;" ></button>

		<button type='button'><img name="chips_1" src="{$smarty.const.CHIPS}chips_5.png" alt="" id="chips_5" style="width: 50px; height:50px;" ></button>

		<button type='button'><img name="chips_1" src="{$smarty.const.CHIPS}chips_10.png" alt="" id="chips_10" style="width: 50px; height:50px;"></button>

		<button type='button'><img name="chips_1" src="{$smarty.const.CHIPS}chips_25.png" alt="" id="chips_25" style="width: 50px; height:50px;"></button>

		<button type='button'><img name="chips_1" src="{$smarty.const.CHIPS}chips_50.png" alt="" id="chips_50" style="width: 50px; height:50px;"></button>

		<button type='button'><img  name="chips_1" src="{$smarty.const.CHIPS}chips_100.png" alt="" id="chips_100" style="width: 50px; height:50px;"></button>
		
		<hr>
		<div class="row">
			<div id="bankroll" class="col-lg-4">{$data}</div>
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
</div>