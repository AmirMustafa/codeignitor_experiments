<!doctype html>
<html lang="en">
 <head>  
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="screen"></style>
 </head>
 <body>
	<div id="container">
		<h1>Super Pagination with CodeIgnitor</h1>

		<?php echo $this->table->generate($records); ?>	 <!-- Generating data in table from records -->
		<?php echo $this->pagination->create_links(); ?> <!--  Way to display pagination i.e. 1,2,..														   below contents-->
	</div>
  
 </body>
</html>
