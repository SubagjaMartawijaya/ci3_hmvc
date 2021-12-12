<!DOCTYPE html>
<html>
<head>
	<title>Page Tambah</title>
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
            <a class="nav-link text-danger" href="<?php echo base_url(); ?>index.php/login/logout">Logout</a>
            </div>
          </div>
        </nav>
</div>
	<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi'; ?>" method="post">
    <div class="jumbotron">
    <center><h1>Form page untuk menambah data ke table</h1>
		<h3>Tambah data baru</h3>
        </center>
        <hr>
    <div class="container">
        <div class="form-group">
                <label for="text">Name</label>
                <input name="blue" type="text" class="form-control" placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label for="text">Job</label>
                <input name="traditional" type="text" class="form-control" placeholder="Enter your job">
            </div>

            <div class="form-group">
                <label for="text">City</label>
                <input name="top" type="text" class="form-control" placeholder="Enter your city">
            </div>

            <div class="form-group">
                <label for="text">Age</label>
                <input name="democratic" type="text" class="form-control" placeholder="Enter your Age">
            </div>

            <div class="form-group">
                <label for="text">Start/date</label>
                <input name="enjoy" type="text" class="form-control" placeholder="Enter when did you start working here">
            </div>

            <div class="form-group">
                <label for="text">address</label>
                <input name="Mr" type="text" class="form-control" placeholder="Enter your Address">
            </div>

            <div class="form-group">
                <label for="text">Salary</label>
                <input name="stock" type="text" class="form-control" placeholder="Enter your Salary">
            </div>

            <div class="form-group">
                <label for="text">Phone Number</label>
                <input name="you" type="text" class="form-control" placeholder="Enter your phone number">
            </div>

            <div class="form-group">
                <label for="text">Status</label>
                <input name="first" type="text" class="form-control" placeholder="Enter your Status">
            </div>
            <center><button class="btn btn-primary btn-block" type="submit" value="Tambah">Tambah</button></center>
        </div>
    </div>			
	</form>	
    </div>
</body>
</html>