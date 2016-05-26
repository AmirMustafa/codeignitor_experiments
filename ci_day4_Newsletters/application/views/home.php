 <!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
	<div id="container">
		<p>My View has been Loaded.</p>
		
		<!-- <?php									
			 foreach($rows as $r)
			 {
			 	echo '<h1>'.$r->title.'</h1>';
			 }
		?> -->

			<?php foreach($rows as $r) : ?>			<!-- short foreach -->
				<h1><?php echo $r->title; ?></h1>
				<div><?php echo $r->contents; ?></div>
			<?php endforeach; ?>


	</div>
 </body>
</html>
