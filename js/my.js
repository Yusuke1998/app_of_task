$(document).ready(function(){
	console.log('jquery working!');
	$('#div-search').hide();
	$('#search').keyup(function(){
		let search = $('#search').val();
		if (search == '') {
			console.log('Search esta vacio');
			$('#div-search').hide(300);
		}else{
			console.log('Search no esta vacio');
			$.ajax({
				type:'post',
				url:'php/task-search.php',
				datatype:'json',
				data: {'search':search},
				success:function(data){
					var tasks = JSON.parse(data);
					var template = '';
					
					// tasks.forEach(task => {
					// 	template += '<li>'+task.name+'</li>'
					// });

					tasks.forEach(task => {
						template += `<li>${task.name}</li>` //concatenando con comillas de interpolacion
					});
					
					$('#ul-search').html(template);
					$('#div-search').show(300);
				},
				error:function(data){
					console.log(data);
				}
			});
		}
		
	});


});