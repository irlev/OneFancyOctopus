$(document).ready(function(){
	$(document).foundation();
	//initial page



$.getJSON('common/getUsername.php', function(json){
			var firstname = json[0].firstname;
			var lastname = json[0].lastname;
			$('ul#header li#user').append(firstname+' '+lastname);
	
			 
			
	
	
	});
	
	
	//$.each(fullname, function(key, fullname){
					//var firstname = fullname.firstname;
					//var lastname = fullname.lastname;
					//var user = $('<option value="'+id+'">'+name+'</option>');
					
				//});
	$.post('content/month.php',
  				{
  					day: $('#day_select').val(),
  					month: $('#month_select').val(),
  					year: $('#year_select').val()
  				},
  				function(data)
					{
						$('#content').html(data);
						//handle the change of date
					$(".date_choise" ).unbind();
					
					$(".date_choise" ).change(function() {
							$.post('content/month.php',
								{
									day: $('#day_select').val(),
									month: $('#month_select').val(),
									year: $('#year_select').val()
								},
								function(data)
									{
										$('#content').html(data);
									
									}
								);
					});


	
					}
  				);

// handle menu clicks

	$('ul#header li a#month').click(function(){

			$.post('content/month.php',
  				{
  					day: $('#day_select').val(),
  					month: $('#month_select').val(),
  					year: $('#year_select').val()
  				},
  				function(data)
					{
						$('#content').html(data);
						//handle the change of date
						
						$(".date_choise" ).unbind();

						$(".date_choise" ).change(function() {
								$.post('content/month.php',
									{
										day: $('#day_select').val(),
										month: $('#month_select').val(),
										year: $('#year_select').val()
									},
									function(data)
										{
											$('#content').html(data);
										
										}
									);
						});

					}
  				);
		/*var page= $(this).attr('href');
		$('#content').load('content/'+page+'.php');
		*/
		return false;
	});


	$('ul#header li a#day').click(function(){

			$.post('content/day.php',
  				{	
  					day: $('#day_select').val(),
  					month: $('#month_select').val(),
  					year: $('#year_select').val()
  				},
  				function(data)
					{
						$('#content').html(data);
						//handle the change of date
						
						
						$(".date_choise" ).unbind();

						$(".date_choise" ).change(function() {
								$.post('content/day.php',
									{
										day: $('#day_select').val(),
										month: $('#month_select').val(),
										year: $('#year_select').val()
									},
									function(data)
										{
											$('#content').html(data);
										
										}
									);
						});


	
					}
  				);
		
		return false;
	});


	$('ul#header li a#week').click(function(){

			$.post('content/week.php',
  				{
  					day: $('#day_select').val(),
  					month: $('#month_select').val(),
  					year: $('#year_select').val()
  				},
  				function(data)
					{
						$('#content').html(data);
						//handle the change of date
						
						
						$(".date_choise" ).unbind();

						$(".date_choise" ).change(function() {
								$.post('content/week.php',
									{
										day: $('#day_select').val(),
										month: $('#month_select').val(),
										year: $('#year_select').val()
									},
									function(data)
										{
											$('#content').html(data);
										
										}
									);
						});

	
					}
  				);
		
		return false;
		
	});

		
	


	

});



