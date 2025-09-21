<div class="col-md-3">
	<div class="panel panel-success" id="panel-margin">
		<div class="panel-heading">
			<center><h1 class="panel-title">Student Login</h1></center>
		</div>
		<div class="panel-body">
			<form method="POST">
				<div class="form-group">
					<label for="username">Student Matric no</label>
					<input class="form-control" name="stud_no" placeholder="Student no" type="text" required="required" >
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" name="password" placeholder="Password" type="password" required="required" >
				</div>
				<?php include 'login_query.php'?>
				<div class="form-group">
					<button class="btn btn-block btn-primary"  name="login"><span class="glyphicon glyphicon-log-in"></span> Login</button>
					<a href="admin/register.php">Click here to register</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="../index.html">Home</a>
				</div>
			</form>
		</div>
	</div>
</div>	