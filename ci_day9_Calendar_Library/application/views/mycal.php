<!doctype html>
<html lang="en">
 <head>
  <title>My Calendar</title>
												<!-- Applying CSS of the template calendar  -->
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

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>		<!-- Loading jQuery library google API to use jquery method -->
 </head>
 <body>
	<center><h2>My Calendar</h2></center>
	<?php echo $calendar; ?>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.calendar .day').click(function() {	//to activate click function in calendar, .calendar											.day are the classes defined in the template
				day_num = $(this).find('.day_num').html();	//.day_num is the class of particular cell
				//alert(day_num);
				
				day_data = prompt("Enter Stuff", $(this).find('.content').html());	//using prompt										function to enter data on clicking particular date

				if(day_data != null)	//i.e. if something is loaded
				{
					$.ajax({			// using ajax function
						url: window.location,
						type: 'POST',
						data: {					//passing array day and data in db
							day: day_num,
							data: day_data
						},
						success: function(msg)	// on success function reloading to the same page to								view calendar changes
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
