<!DOCTYPE html>
<html>
<head>
	<title>Page Edit</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="card">
                <div class="card-header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">CRUD CI HMVC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link" href="<?php echo base_url(); ?>index.php/home">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link active" href="<?php echo base_url(); ?>index.php/crud/index">Table</a>
                <a class="nav-link" href="#">Contact</a>
                <a class="nav-link" href="<?php echo base_url(); ?>index.php/login/logout">Logout</a>
                </div>
            </div>
            </nav>
    </div>
	<?php foreach($care as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/crud/update'; ?>" method="post">
    <div class="jumbotron">
    <center><h1>Form page untuk mengubah datatable</h1>
		<h3>Edit datatable</h3>
        </center>
        <hr>
    <div class="container">
        <div class="form-group">
            <input type="hidden" name="which" value="<?php echo $u->which ?>">
			<input type="text" class="form-control" name="blue" value="<?php echo $u->blue ?>">
        </div>

            <div class="form-group">
                <label for="text">Job</label>
                <input type="text" class="form-control" name="traditional" value="<?php echo $u->traditional ?>">
            </div>

            <div class="form-group">
                <label for="text">City</label>
                <input type="text" class="form-control" name="top" value="<?php echo $u->top ?>">
            </div>

            <div class="form-group">
                <label for="text">Age</label>
                <input type="text" class="form-control" name="democratic" value="<?php echo $u->democratic ?>">
            </div>

            <div class="form-group">
                <label for="text">Start/date</label>
                <input type="text" class="form-control" name="enjoy" value="<?php echo $u->enjoy ?>">
            </div>

            <div class="form-group">
                <label for="text">address</label>
                <input type="text" class="form-control" name="Mr" value="<?php echo $u->Mr ?>">
            </div>

            <div class="form-group">
                <label for="text">Salary</label>
                <input type="text" class="form-control" name="stock" value="<?php echo $u->stock ?>">
            </div>

            <div class="form-group">
                <label for="text">Phone Number</label>
                <input type="text" class="form-control" name="you" value="<?php echo $u->you ?>">
            </div>

            <div class="form-group">
                <label for="text">Status</label>
                <input type="text" class="form-control" name="first" value="<?php echo $u->first ?>">
            </div>
            <center><button class="btn btn-primary" type="submit" value="Simpan">Simpan</button></center>
        </div>
    </div>	
	</form>	
	<?php } ?>
    </div>
</body>
</html>
