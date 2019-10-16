<!DOCTYPE html>
<html>
<?php
   base_url('admin/_partials/head')
?>
<body>	
	<div class="container">
		<div class="panel panel-default">
			<form action="<?= base_url('admin/login') ?>" method="post">
				<div class="col-md-4 col-md-offset-4 kotak mt-15">
					<h3>Login Terlebih Dahulu</h3>
					<div class="input-group mb-2">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="email" class="form-control" placeholder="Email" name="email">
					</div>
					<div class="input-group mb-2">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<div class="input-group mb-2">			
						<input type="submit" class="btn btn-primary" value="Login">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>