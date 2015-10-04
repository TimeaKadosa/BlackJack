{if isset($smarty.session.user)}
	
	{assign var = "userid" value = $smarty.session.user.id}

{/if}

	

		<ul id="headerNav"  class="nav sidebar-nav">	
	        {foreach $data as $menu} 
	        	
				{if $menu.type == 'logged_in' && $userid > 0}

		        	<li {if $menu.path == $message}class="active"{/if}>
		        		<a href="{if $menu.path == 'account'}/{$menu.path}/{$userid}{else}{$menu.path}{/if}" class="navbar-brand" >{$menu.name}</a>
		        	</li>
		        
	        	{elseif $menu.type == 'main' && $userid > 0}

	        			<li {if $menu.path == $message}class="active"{/if}>		
							<a href="/{$menu.path}" class="navbar-brand" >{$menu.name}</a>
						</li>

	    		{elseif empty($userid)}

	    			{if $menu.type == 'main' }
						<li {if $menu.path == $message}class="active"{/if}>		
							<a href="/{$menu.path}" class="navbar-brand" >{$menu.name}</a>
						</li>
					{elseif $menu.type == 'hidden'}
						<li {if $menu.path == $message}class="active"{/if}>		
							<a href="/{$menu.path}" class="navbar-brand" >{$menu.name}</a>
						</li>

					{/if}
					
				{/if}

	        {/foreach}
    	</ul>



