<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>App Task</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a href="" class="navbar-brand" title="App Task">App Task</a>
		<ul class="navbar-nav ml-auto">
			<form class="form-inline my-2 my-lg-0">
				<input type="search" name="search" id="search" placeholder="Search you task" class="form-control mr-sm-2">
				<button type="submit" class="btn btn-success">Search</button>
			</form>
		</ul>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="card my-3">
					<div class="card-body">
						<form id="task-form">
							<input type="hidden" name="id_editar" id="id_editar">
							<div class="form-group">
								<input type="text" name="name" id="name" placeholder="Name of task" class="form-control">
							</div>
							<div class="form-group">
								<textarea name="description" id="description" class="form-control" placeholder="Description of task"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="col-md-12 my-3 bg-primary text-white" id="div-search">
					<ul id="ul-search"></ul>
				</div>
				<table id="task-tabla" class="table table-bordered my-3">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Description</th>
							<th colspan="3">Action</th>
						</tr>
					</thead>
					<tbody id="task-tabla-body"></tbody>
				</table>
			</div>
		</div>	
	</div>

	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/my.js" type="text/javascript"></script>
</body>
</html>