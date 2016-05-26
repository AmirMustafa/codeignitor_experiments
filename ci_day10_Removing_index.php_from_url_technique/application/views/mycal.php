<!doctype html>
<html lang="en">
 <head>
  <title>My Calendar</title>

  <style type="text/css">
	.calendar
	{
		font-family: Arial;
		font-size: 12px;
	}

	table.calendar
	{
		margin: auto;
		border-collapse: collapse;
	}

	.calendar .days td
	{
		width: 80px; height: 80px; padding: 10px; border: 1px solid #999;
		vertical-align: top; background-color: #DEF;
	}

	.calendar .days td:hover
		{ background:#FFF;  }

	.calendar .highlight { font-weight: bold; color:red;  }
  </style>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
 </head>
 <body>
	<center><h2>My Calendar</h2></center>
	<?php echo $calendar; ?>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.calendar .day').click(function() {
				day_num = $(this).find('.day_num').html();
				//alert(day_num);
				
				day_data = prompt("Enter Stuff", $(this).find('.content').html());

				if(day_data != null)
				{
					$.ajax({
						url: window.location,
						type: 'POST',
						data: {
							day: day_num,
							data: day_data
						},
						success: function(msg)
						{
							location.reload();	
						}
					});
				}
			});
		});
	</script>
 </body>
</html>
