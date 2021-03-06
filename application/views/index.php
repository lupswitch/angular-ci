<!DOCTYPE html>
<html lang="en" ng-app="todoApp">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta name="description" content="Create Todo App with CodeIgniter 3 + AngularJS">

		<title>Todo App with CodeIgniter + AngularJS</title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo site_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="<?php echo site_url('asset/css/app.css') ?>" rel="stylesheet">
	</head>

	<body ng-controller="TodoCtrl">

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header clearfix">
				<h3 class="text-muted">Todo App Demo</h3>
			</div>
			<div style="text-align:center">
				<h2 ng-show="tasks.length == 0">No task yet!</h2>
			</div>
			
			<div class="col-md-12" ng-show="tasks.length > 0" ng-init="refresh()">
				<table class="table table-hover">
					<thead>
						<tr>
							<th style="width:50px">#</th>
							<th>Title</th>
							<th style="width:80px; text-align:center">Complete</th>
							<th style="width:80px; text-align:center">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="task in tasks track by $index">
							<td>{{ $index + 1 }}</td>
							<td><input class="todo" type="text" ng-model-options="{ updateOn: 'blur' }" ng-change="updateTask(tasks[$index])" ng-model="tasks[$index].title"></td>
							<td style="text-align:center"><input class="todo" type="checkbox" ng-change="updateTask(tasks[$index])"ng-model="tasks[$index].status" ng-true-value="'1'" ng-false-value="'0'"></td>
							<td style="text-align:center"><a class="btn btn-xs btn-default" ng-click="deleteTask(tasks[$index])"><span class="glyphicon glyphicon-trash"></span></a></td>
						</tr>
					</tbody>
				</table>
			</div>
	
			<form style="form-inline" role="form" ng-submit="addTask()">
				<div class="form-group col-md-10">
					<input type="text" class="form-control" name="title" ng-model="taskTitle" placeholder="Enter task title" required>
				</div>
				<button type="submit" class="btn btn-default">Add task</button>
			</form>
			
		</div>

		<footer class="footer">
			<div class="container">
			<p class="text-muted">&copy; <?php echo date('Y')?> <a href="http://ahmadarif.com">Ahmad Arif</a> <span class="pull-right">Powered by <a href="#" rel="nofollow,noindex">Codeigniter + AngularJS + CSS Bootstrap</a></span></p>
			</div>
		</footer>

		<script src="<?php echo site_url('asset/js/jquery.min.js') ?>"></script>
		<script src="<?php echo site_url('asset/js/bootstrap.min.js') ?>"></script>
		<script src="<?php echo site_url('asset/js/angular.js') ?>"></script>
		<script src="<?php echo site_url('asset/js/app.js') ?>"></script>
	</body>
</html>