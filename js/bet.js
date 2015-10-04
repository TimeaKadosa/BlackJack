
	$(document).ready(function(){

		// MAIN PAGE OF THE GAME

		var bankroll = $('#bankroll').text();
		var totalBet = $('#bet').text();
		var won		= $('#win').text();

		var $bet 		= $('#bet');
		var $showMoney 	= $('#bankroll');
		//var $win 		= $('#win');

		// show default
		var currentMoney = '<input type="hidden" name="bankroll"  value="'+ bankroll + '"/><h4>Bankroll : ' + bankroll + '</h4>';

		var bet = '<h4>Bet : ' + totalBet +'</h4>';
		//var win = '<h4>Win : ' + won + '</h4>';

		$bet.html(bet);
		$showMoney.html(currentMoney);
		//$win.html(win);

		$("#chips_1").click(function () {

			totalBet = +totalBet + 1;
			bankroll = +bankroll - 1;

			addInput();	

		});

		$("#chips_5").click(function () {

			totalBet = +totalBet + 5;
			bankroll = +bankroll - 5;

			addInput();			     
		});

		$("#chips_10").click(function () {

			totalBet = +totalBet + 10;
			bankroll = +bankroll - 10;

			addInput();				     
		});

		$("#chips_25").click(function () {

			totalBet = +totalBet + 25;
			bankroll = +bankroll - 25;

			addInput();				     
		});

		$("#chips_50").click(function () {

			totalBet = +totalBet + 50;
			bankroll = +bankroll - 50;

			addInput();				     
		});

		$("#chips_100").click(function () {

			totalBet = +totalBet + 100;
			bankroll = +bankroll - 100;

			addInput();				     
		});

		function addInput() {

			bet = '<input type="hidden" name="bet"  value="'+ totalBet + '"/><h4>Bet : ' + totalBet + '</h4>';
				
			$bet.html(bet);

			var currentMoney = '<input type="hidden" name="bankroll"  value="'+ bankroll + '"/><h4>Bankroll : ' + bankroll + '</h4>';

			$showMoney.html(currentMoney);
		}


		

	});






