<?php require_once('header.php'); ?>

	<div class="container">
		<div class="header">
			<ul class="nav nav-pills pull-right">
				<li class="active"><a href="#">Hem</a></li>
				<li><a href="telefonkiosker.php">Telefonkiosker</a></li>
				<li><a href="om.php">Om</a></li>
			</ul>
			<h3 class="text-muted">Telefonkiosker i Västerås</h3>
		</div>
		<div class="row marketing">
			<h1>De sista telefonkioskerna i Västerås</h1>
<p>En av de sista telefonkioskerna i Västerås, schemalagd att försvinna under 2015.</p>
<?php
	$images = array('bilder/1.jpg', 'bilder/2.jpg', 'bilder/3.jpg', 'bilder/4.jpg', 'bilder/5.jpg', 'bilder/6.jpg', 'bilder/7.jpg', 'bilder/8.jpg', 'bilder/9.jpg', 'bilder/10.jpg', 'bilder/11.jpg', 'bilder/12.jpg', 'bilder/13.jpg', 'bilder/14.jpg', 'bilder/15.jpg', 'bilder/16.jpg', 'bilder/17.jpg');
	$random_image = array_rand($images);
?>

			<img src="<?php echo $images[$random_image]; ?>" alt="Telefonkiosk i Västerås" class="img-thumbnail"/>
		</div>

<?php require_once('footer.php'); ?>
