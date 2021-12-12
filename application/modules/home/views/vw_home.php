<html>
	<head>
		<title>Home</title>
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
            <a class="nav-link active" href="home">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="<?php echo base_url(); ?>index.php/crud/index">Table</a>
            <a class="nav-link" href="#">Contact</a>
            <a class="nav-link text-danger" href="<?php echo base_url(); ?>index.php/login/logout">Logout</a>
            </div>
          </div>
        </nav>
			</div>
			<div class="card-body">
        <div class="jumbotron">
        <center><h1>Hello <span class="text-danger"><?php echo $this->session->userdata('nama'); ?></span></h1><center>
          <p class="lead">Website ini dibuat untuk persyaratan pengumpulan UAS Pemograman Berorientasi Objek II</p>
          <hr class="my-4">
          <p> HMVC (Hirarki Model View Controller) adalah sebuah pengembangan tingkat lanjut dari MVC yang bersifat modular. </p>
          <p class="lead">
            <center><a class="btn btn-primary btn-lg" href="https://www.codeigniter.com/" role="button">Learn more</a></center>
          </p>
        </div>
			</div>
		</div>
	</div>		
	</body>
</html>