<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cloud Based Backup and Recovery System</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color:blue;">
        <div class="container-fluid">
            <label class="navbar-brand" id="title">Cloud Based Backup and Recovery System</label>
        </div>
    </nav>
    <div class="col-md-4"></div>
    <div class="col-md-3">
        <div class="panel panel-primary" id="panel-margin">
            <div class="panel-heading">
                <center>
                    <h1 class="panel-title">Register Now!</h1>
                </center>
            </div>
            <div class="panel-body">
                <form method="POST" action="save_student.php">
                    <div class="form-group">
                        <label>Matric N0</label>
                        <input type="text" name="stud_no" class="form-control" required="required" />
                    </div>
                    <div class="form-group">
                        <label>Firstname</label>
                        <input type="text" name="firstname" class="form-control" required="required" />
                    </div>
                    <div class="form-group">
                        <label>Lastname</label>
                        <input type="text" name="lastname" class="form-control" required="required" />
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" class="form-control" required="required">
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-inline">
                        <!-- <label>Year</label>
								<select name="year" class="form-control" required="required">
									<option value=""></option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select> -->
                        <label>Session</label>
                        <select name="section" class="form-control" required="required">
                            <option value="">--Select Session--</option>
                            <option>2019/2020</option>
                            <option>2020/2021</option>
                            <option>2021/2022</option>
                            <option>2022/2023</option>
                            <option>2023/2024</option>
                        </select>
                    </div>
                    <br />
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required="required" />
                    </div>
		<button name="save" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Save</button>

            </div>
        </div>

        </form>
    </div>
    </div>
    </div>
    <div id="footer">
        <label class="footer-title">&copy; Supervised by: Adeife, O.T. (Mrs)
            <?php echo date("Y", strtotime("+8 HOURS"))?></label>
    </div>
</body>

</html>