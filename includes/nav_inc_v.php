<?php $menuName = basename($_SERVER['PHP_SELF']);?>
<nav class="navbar navbar-dark navbar-expand-md sticky-top" >
	<a class="navbar-brand" href="index">LOGO</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#menuItems">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="menuItems">
		<ul class="navbar-nav ml-auto">
			<li <?php if($menuName=='index.php'){echo 'class="nav-item active"';}else{echo 'class="nav-item hover"';} ?>>
				<a href="index" class="nav-link">ACASĂ</a>
			</li>
			<li <?php if($menuName=='products_pg.php'){echo 'class="nav-item active"';}else{echo 'class="nav-item hover"';} ?>>
				<a href="products_pg" class="nav-link">PRODUSE</a>
			</li>
			<li class="nav-item">
				<a  href="cos_pg" class="nav-link"><img id="cosIcon" src="images/shopping-cart-white.svg"  alt="CART"><span id="badgeSpan" class="badge badge-pill badge-success"></span></a>
			</li>
			<li class="nav-item">
				<?php
			 		if($menuName!='products_pg.php')
			 		{
			 	?> <a href="products_pg" class="nav-link" id="searchIcon">
						<img src="images/search-white.svg" alt="Search">
					</a>
				<?php
			 		}
			 		else{
			 	?>
			 		<form v-on:submit.prevent class="form-inline">
						<input v-model="globalSearch" v-on:keyup.enter="requestProduse('baza',1,globalSearch);"  class="form-control mr-sm-2 form-control-sm" type="search" placeholder="Search" style="display: none;" id="searchBox" name="globalSearchInput">
						<a href="#" class="nav-link" id="searchIcon">
							<img src="images/search-white.svg" alt="Search">
						</a>
						<a href="#" class="nav-link" id="searchCancel" style="display: none;">
							<img src="images/cancel-white.svg" alt="">
						</a>
					</form>
				<?php
			 		}
			 	?>
				
				
			</li>
		</ul>
	</div>
</nav>

