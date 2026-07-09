<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee Management System</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

	<div class="container vh-100 d-flex justify-content-center align-items-center">
		<div class="card shadow-lg" style="width:400px">
			<div class="card-header">
				Employee Management System
			</div>
			<div class="card-body">
				<form action="../index.php" method="POST">
					<label for="username" class="form-label mb-3">User Name:</label>
					<input class="form-control mb-3" type="text" name="username" id="username" placeholder="Enter user name" required>

					<label for="password" class="form-label mb-3">Password:</label>
					<input class="form-control mb-3" type="password" name="password" id="password" placeholder="Ener your password" required>

					<input class="btn btn-success mb-3 w-100" type="submit" value="Login">
				</form>
			</div>
			
		</div>
		
	</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>