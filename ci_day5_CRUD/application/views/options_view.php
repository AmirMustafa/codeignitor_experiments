<!doctype html>
<html lang="en">
 <head>
	
  <title>Document</title>
	<style>
		label
		{ display: block; }
	</style>
 </head>
 <body>
 <!-- Start Code for create   -->
	<h2>Create</h2>
	<?php echo form_open('site/create'); ?>
		<p>
			<label for="title">Title: </label>
			<input type="text" name="title" id="title" />
		</p>
		
		<p>
			<label for="content">Content: </label>
			<input type="text" name="content" id="content" />
		</p>

		<p>
			<input type="submit" value="Submit" />
		</p>
	<?php echo form_close(); ?>
<!-- End Code for create   -->

<!-- Start Code for Read/Retrieving   -->
	<hr />
	<h2>Read</h2>
	<?php if(isset($records)): foreach($records as $row) : ?>	<!-- using short PHP  --> 
		<h2><?php echo anchor("site/delete/$row->id",$row->title) ?></h2>	<!-- creating link for																delete and accessing title from db  -->
		<div><?php echo $row->content; ?></div>	<!-- accessing title from db   -->

	<?php endforeach; ?>

	<?php else: ?>
		<h2>No Records were returned</h2>
	<?php endif; ?>					<!-- So now data will be reflected if you type anything in page -->

<!-- End Code for Read   -->

<hr />

<!-- Start Code for Delete -->
	<p>To sample delete method, simply click on one of the headings listed above. A delete query will      automatically run.</p>
<!-- End Code for Delete -->

 </body>
</html>
