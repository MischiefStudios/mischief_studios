<?php defined('C5_EXECUTE') or die("Access Denied."); 

$this->inc('elements/header_top.php'); ?>

<header id="header-bar">
	<div class="container">
		<div class="row">
			<div class="header-brand col-md-4 col-sm-5 col-xs-10">
				<?php
				$a = new GlobalArea('Header Site Title');
				$a->display();
				?>
			</div>
			<div class="header-nav <?php echo ($displayThirdColumn) ? 'col-md-5 col-sm-7 col-xs-2' : 'col-md-5 col-sm-7 col-xs-2' ?>">
				<?php
				$a = new GlobalArea('Header Navigation');
				$a->display();
				?>
			</div>
		</div>
	</div>
</header>