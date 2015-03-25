$(document).ready(function(){
	$(document).foundation();
	//initial page



// get user name
$.getJSON('common/getUsername.php',{}, function(json){

			var firstname = json[0].firstname;
			var lastname = json[0].lastname;
			$('ul#header li#user h1').append(firstname+' '+lastname);
	});
// get event list

$.getJSON('common/getEventList.php', {}, function(json){
		console.log(json);
		for (i = 0; i < json.length; i++){
			console.log(json[i].event_name);
			console.log(json[i].C_Vst);

			$('#eventList').append('<li style="color: rgb(17,99,189);" data-reveal-id="myEvent" data-reveal-ajax="content/eventinfo.php?ename='+json[i].event_name+'&esdate='+json[i].C_Vst+'">'+json[i].event_name+' '+json[i].C_Vst+'</li>');
		}
	});

//get events from db

$.getJSON('common/getEvents.php', {}, function(json){
		console.log(json);
		for (i = 0; i < json.length; i++){
			console.log(json[i].event_name);
			console.log(json[i].C_Vst);
			console.log(json[i].C_Vet);
			console.log(json[i].S_time);
			console.log(json[i].E_time);
			console.log(json[i].description);


			$( ".task" ).each(function() {

					if ($(this).attr('id') == json[i].C_Vst){
						$(this).append('<p>'+json[i].S_time+'-'+json[i].E_time+'</p><p>'+json[i].event_name+'</p>');
					}
 					
			});

		}

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

							$.getJSON('common/getEvents.php', {}, function(json){
								console.log(json);
								for (i = 0; i < json.length; i++){
									console.log(json[i].event_name);
									console.log(json[i].C_Vst);
									console.log(json[i].C_Vet);
									console.log(json[i].S_time);
									console.log(json[i].E_time);
									console.log(json[i].description);


									$( ".task" ).each(function() {

										if ($(this).attr('id') == json[i].C_Vst){
										$(this).append('<p>'+json[i].S_time+'-'+json[i].E_time+'</p><p>'+json[i].event_name+'</p>');
									}
 					
									});

								}

							});
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



