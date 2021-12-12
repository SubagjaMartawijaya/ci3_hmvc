<html>
<head>
	<title>Table Page</title>
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

<div class="card-body">
	<center><h1> DATATABLE CRUD HMVC</h1></center>
  <hr>
	<table class="table table-striped table-bordered table-hover text-center table-responsive">
    <a href="<?php echo base_url(); ?>index.php/crud/tambah" class="btn btn-primary" style="margin-bottom: 20px; margin-right: 100%; ">Tambah Data</a>
    <thead class="thead-dark">
		<tr>
			<th>Which</th>
			<th>Blue</th>
			<th>Traditional</th>
			<th>Top</th>
			<th>Democratic</th>
            <th>Enjoy</th>
            <th>Mr</th>
            <th>Stock</th>
            <th>You</th>
            <th>First</th>
            <th>Action</th>
		</tr>
    </thead>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->blue ?></td>
			<td><?php echo $u->traditional ?></td>
			<td><?php echo $u->top ?></td>
            <td><?php echo $u->democratic ?></td>
            <td><?php echo $u->enjoy ?></td>
            <td><?php echo $u->Mr ?></td>
            <td><?php echo $u->stock ?></td>
            <td><?php echo $u->you ?></td>
            <td><?php echo $u->first ?></td>
			<td>
			  <a type="button" class="btn btn-sm btn-primary" <?php echo anchor('crud/edit/'.$u->which,'Edit'); ?> </a> 
        <a type="button" class="btn btn-sm btn-danger" <?php echo anchor('crud/hapus/'.$u->which,'Delete'); ?> </a>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
</div>
</body>
</html>