	<ul>

		<li class="path">
			<a href="/{$menuItem.path}" >Home</a>
		<img src="{$smarty.const.MAIN_IMAGES}arrow_right.png" style="height:30px;" >
		</li>

		{foreach $data as $menu => $menuItem}

			<li class="path">

				{if $message == $menuItem.path && $message != 'home' && $message != 'account'}
					
					<a href="/{$menuItem.path}" >{$menuItem.path|@ucfirst}</a>
					<img src="{$smarty.const.MAIN_IMAGES}arrow_right.png" style="height:30px;" >

				{elseif $message == $menuItem.path && $message == 'account'}
							<a href="/{$menuItem.path}" >My {$menuItem.path|@ucfirst}</a>
							<img src="{$smarty.const.MAIN_IMAGES}arrow_right.png" style="height:30px;" >

				{/if}

			</li>
			
		{/foreach}

	</ul>
