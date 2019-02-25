$(document).ready(function(){
	console.log('jquery working!');
	listarTareas();

	// Buscador
	$('#div-search').hide();
	$('#search').keyup(function(){
		if ($('#search').val()) {
			let search = $('#search').val();
			$.ajax({
				type:'post',
				url:'php/task-search.php',
				datatype:'json',
				data: {'search':search},
				success:function(data){
					var tasks = JSON.parse(data);
					var template = '';
					tasks.forEach(task => {
						//concatenando con comillas de interpolacion
						template += `<li>${task.name}</li>` 
					});
					$('#ul-search').html(template);
					$('#div-search').show(300);
				},
				error:function(data){
					console.log(data);
				}
			});
		}else{
			$('#div-search').hide(300);
		}
	});
	// Buscador

	// Crear tarea
	$('#task-form').submit(function(e){
		e.preventDefault();
		var form = $('#task-form').serialize();
		$.ajax({
			url:'php/task-add.php',
			type:'post',
			datatype:'json',
			data:form,
			success:function(data){
				console.log('success: ',data);
				$('#name').val('');
				$('#description').val('');
				listarTareas();
			},
			error:function(data){
				console.log('error: ',data);
			}
		});
	});
	// Crear tarea

	// Listar tareas
	function listarTareas(){
		$.post('php/task-list.php',function(data){
			var tasks = JSON.parse(data);
			var tabla = $('#task-tabla-body');
			tasks.forEach(task=>{
				// tabla.append('<tr><td>'+task.id+'</td><td>'+task.name+'</td><td>'+task.description+'</td></tr>');
				tabla.append(`<tr>
								<td>${task.id}</td>
								<td>${task.name}</td>
								<td>${task.description}</td>
							</tr>`);
			});
		});
	}
	// Listar tareas

	// Editar tarea

	// Editar tarea

	// Eliminar tarea

	// Eliminar tarea
});