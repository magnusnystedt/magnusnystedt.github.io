<?php require_once('header.php'); ?>

	<div class="container">
		<div class="header">
			<ul class="nav nav-pills pull-right">
				<li><a href="index.php">Hem</a></li>
				<li><a href="telefonkiosker.php">Telefonkiosker</a></li>
				<li class="active"><a href="karta.php">Karta</a></li>
				<li><a href="om.php">Om</a></li>
				<li><a href="kontakt.php">Kontakt</a></li>
			</ul>
			<h3 class="text-muted">Telefonkiosker i Västerås</h3>
		</div>

		<div class="row marketing">
			<h1>Karta</h1>
			<p>Karta över kvarvarande telefonkiosker i Västerås.</p>
			<div class="google-maps">
			<iframe src="https://mapsengine.google.com/map/u/0/embed?mid=zianrms8bd60.kABAcqDojavw" width="700" height="600"></iframe>
			</div>
		</div>

<?php require_once('footer.php'); ?>
