<?php $menuName = basename($_SERVER['PHP_SELF']);?>

<nav class="navbar navbar-light navbar-expand-md bg-light sticky-top" >
	<a class="navbar-brand" href="index">LOGO</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#menuItems">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="menuItems">
		<ul class="navbar-nav ml-auto">
			<li <?php if($menuName=='index.php'){echo 'class="nav-item active"';}else{echo 'class="nav-item"';} ?>>
				<a href="index" class="nav-link">ACASĂ</a>
			</li>
			<li <?php if($menuName=='products_pg.php'){echo 'class="nav-item active"';}else{echo 'class="nav-item"';} ?>>
				<a href="products_pg" class="nav-link">PRODUSE</a>
			</li>
			<li class="nav-item">
				<a  href="cos_pg" class="nav-link"><img id="cosIcon" src="images/shopping-cart.svg"  alt="CART"><span id="badgeSpan" class=""></span></a>
			</li>
			<li class="nav-item">
				<form class="form-inline" action="products_pg" method="GET">
					<input class="form-control mr-sm-2 form-control-sm" type="search" placeholder="Search" style="display: none;" id="searchBox" name="globalSearch">
					<a href="#" class="nav-link" id="searchIcon">
						<img src="images/baseline-search-24px.svg" alt="Search">
					</a>
					<a href="#" class="nav-link" id="searchCancel" style="display: none;">
						<img src="images/baseline-cancel_presentation-24px.svg" alt="">
					</a>
				</form>
				
			</li>
		</ul>
	</div>
	
	
</nav>

