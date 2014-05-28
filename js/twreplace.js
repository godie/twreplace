$(document).ready(function(){
	$('#form_tw').submit(function(e){
		console.log('submit');
		
		e.preventDefault();
		var search = $('#search').val();
		var replace = $('#replace').val();
		console.log(search,$('#search'));
		$.ajax({
			url:'fachada.php',
			type:'GET',
			data:{search:search},
			complete:function(){
				console.log('finish')

			},
			success:function(data){
				console.log(data)
					data = jQuery.parseJSON(data);
				if(data.statuses.length > 0){
					$('#results_list').html('');
					$('#remplazo_list').html('');
					var statuses = data.statuses;

					for(var i=0; i< statuses.length; i++){
						var status =statuses[i].text;
						console.log(search,replace);
º
						var status_r = status.replace(re,replace);
						var li= '<li>'+status+'</li>';
						var li_r= '<li>'+status_r+'</li>';
						$('#results_list').append(li);
						$('#remplazo_list').append(li_r);
					}
				}
			}

		});	
		return false;

		
	})
});