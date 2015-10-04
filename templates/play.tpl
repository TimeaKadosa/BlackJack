
{assign var="userid" value=$smarty.session.user.id}
<div  id="cardTable" class="play">
			
{if isset($smarty.session.user.username)}

		<form id="playForm" method="post" action="">

			<!-- if didn't start the game yet, means that did not post anything  -->
			{if isset($data)}

				<div class="col-md-2"></div>
				<div id="card-table" class="col-md-10">

					<!-- set the message for the result of the game -->
					{$message}
					
					<h4> Dealer's cards : {if isset($data.stand) || $data.playerResult > 21}{$data.dealerResult}{/if}</h4> 
					

						<!-- player hit stand or player has busted  -->
						{if isset($data.stand) || $data.playerResult > 21}	            
							<!-- show all the cards from dealer -->
							{foreach $data.dealer as $index => $card}

		    					<img src="{$smarty.const.CARDS}{$card['color']|lower}_{$card['card']|lower}.png" alt="" style="width: 100px; height:155px;">&nbsp;
						
	    					{/foreach}
						
						{else}	
							<!-- else show only one card --> 
							<img src="{$smarty.const.CARDS}{$data.dealer[0]['color']|lower}_{$data.dealer[0]['card']|lower}.png" alt="" style="width: 100px; height:155px;" >&nbsp;
							<img src="{$smarty.const.CARDS}backside.png" alt="" style="width: 100px; height:155px;">&nbsp;	
						{/if}
						<br></br>
					<h4> Your cards : {$data.playerResult}</h4>
							
								            
						<!-- show all the cards of the player -->
						{foreach $data.hand as $index => $card}

	    					<img src="{$smarty.const.CARDS}{$card['color']|lower}_{$card['card']|lower}.png" alt="" style="width: 100px; height:155px;">&nbsp;	
						{/foreach}
						<hr>
						<div class="row">
							<div id="bankroll" class="col-lg-4">
								<h4>{$data.bankroll}</h4>
							</div>
							<div id="bet" class="col-lg-4">

								<h4>{$data.bet}</h4>
							</div>
							
							<div id="win" class="col-lg-4">
								<h4>Win: {$data.win}</h4>
							</div>
						</div>

						<hr>
						
						<input type="hidden" name="bet" value="{$data.bet}"/>
						<input type="hidden" name="win" value="{$data.win}"/>
						<input type="hidden" name="userId" value="{$userid}"/>
				</div>		            
				
			
			
				
				
			{/if}


<!-- *****************************************************************************************
							BUTTONS
	 *************************************************************************************  -->
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					
					<div class="buttons">
						<!-- if game has been started or ask for the next card and player's result not more then 21 -->
						{if isset($data.deal) && $data.stand == false && $data.playerResult <= 21}

									<!-- show all the buttons we need for the game -->
									<a href="/play" class="btn btn-primary">Try Again</a>&nbsp;
									<input type="submit" name="hit" value="Hit" class="button btn btn-success"/>&nbsp;
									<input type="submit" name="stand" value="Stand" class="button btn btn-danger" id="stand"/>

									

						{elseif isset($data.stand) || $data.playerResult > 21 }
						    
									<!-- show only the "try again" button -->
									<a href="/play" class="btn btn-primary">Try Again</a>&nbsp;
					
								
						{/if}
					</div>
				</div>
				<div class="col-md-3"></div>			
			</div>		
		</form>

{else}
	<div class="row">
		<div class="col-md-3"></div>

		<div class="col-md-6">
			

			 <script type="text/javascript">
				location.replace('/login');
  			</script>
		</div>

		<div class="col-md-3"></div>
	</div>

{/if}	

</div>

	<div class="row">
	<div id="menuCards">{include file="menuCards.tpl"}</div>
</div>


 
                       