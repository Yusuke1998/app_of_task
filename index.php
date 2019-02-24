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
				<input type="search" name="search" placeholder="Search you task" class="form-control mr-sm-2">
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
							<div class="form-group">
								<input type="text" name="name" id="name" placeholder="Name of task" class="form-control">
							</div>
							<div class="form-group">
								<textarea name="" id="description" class="form-control" placeholder="Description of task"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<table class="table table-bordered my-3">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>data</td>
							<td>data</td>
							<td>data</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>	
	</div>

	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/my.js" type="text/javascript"></script>
</body>
</html>