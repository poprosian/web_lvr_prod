<?php $menuName = basename($_SERVER['PHP_SELF']);?>

<nav class="navbar navbar-light navbar-expand-md bg-light sticky-top" >
	<a class="navbar-brand" href="index">PANOU DE ADMINISTRARE</a>
	<button class="navbar-toggler" data-toggle="collapse" data-target="#menuItems">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="menuItems">
		<ul class="navbar-nav ml-auto">
			<li <?php if($menuName=='panel.php'){echo 'class="nav-item active"';}else{echo 'class="nav-item"';} ?>>
				<a href="index" class="nav-link">ADMINISTRARE</a>
			</li>
			<li <?php if($menuName=='resetare.php'){echo 'class="nav-item active"';}else{echo 'class="nav-item"';} ?>>
				<a href="resetare" class="nav-link">RESETARE CONT</a>
			</li>
			<li class="nav-item">
				<form action="admin_logout.php" method="POST">
					<button type="submit" name="logout-submit" class="nav-link btn btn-xs">LOG OUT</button>
				</form>
				
			</li>
			
		</ul>
	</div>
	
	
</nav>

