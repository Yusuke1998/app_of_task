$(document).ready(function(){
	console.log('jquery working!');
	listarTareas();
	let editar = false;

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
		let url = editar ? 'php/task-edit.php' : 'php/task-add.php';
		$.ajax({
			url:url,
			type:'post',
			datatype:'json',
			data:form,
			success:function(data){
				console.log('success: ',data);
				$('#name').val('');
				$('#description').val('');
				listarTareas();
				alertify.success('Success!');
			},
			error:function(data){
				alertify.error('Error!');
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
			var template = '';
			tasks.forEach(task=>{
				template+= `<tr taskID="${task.id}">
								<td>${task.id}</td>
								<td>${task.name}</td>
								<td>${task.description}</td>
								<td class="btn-group">
									<button class="editarID btn btn-sm btn-warning">Editar</button>
									<button class="eliminarID btn btn-sm btn-danger">Eliminar</button>
								</td>
							</tr>`;
			});
			tabla.html(template);
		});
	}
	// Listar tareas

	// Editar tarea
	$(document).on('click','.editarID',function(e){
		e.preventDefault();
		let elemento = $(this)[0].parentElement.parentElement;
		let id = $(elemento).attr('taskID');
		// console.log('editar el id ',id);
		$.post('php/task-search-id.php',{id},function(data){
			var task = JSON.parse(data);
			$('#id_editar').val(task.id);
			$('#name').val(task.name);
			$('#description').val(task.description);
			editar = true;
		});
	});
	// Editar tarea

	// Eliminar tarea
	$(document).on('click','.eliminarID',function(e){
		e.preventDefault();
		let elemento = $(this)[0].parentElement.parentElement;
		let id = $(elemento).attr('taskID');
		$.post('php/task-delete.php',{id:id},function(response){
			listarTareas();
			alertify.success('Task eliminated!');		
		});
	});
	// Eliminar tarea
});