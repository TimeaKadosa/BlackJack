


<div class="sidebar-nav">
<aside class="col-lg-3 col-sm-4 col-lg-pull-9 col-sm-pull-8">
		<h3>My account</h3>
        
		<ul class="nav nav-pills nav-stacked">
			<li {*if}class="active"{/if*}><a href="/account/{$smarty.session.user.id}" class=""><span class="glyphicon glyphicon-cog"></span> My profile</a></li>
			<li><a href="/account/{$smarty.session.user.id}/myrecipes/" class=""><span class="glyphicon glyphicon-usd"></span> Budget</a></li>
			<li><a href="/account/{$smarty.session.user.id}/myfavourites" class=""><span class="glyphicon glyphicon-star"></span> High score</a></li>
			
			
		</ul> 
</aside>

</div>