<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Register Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
  <form method="post" class="form-signin" action="<?php echo base_url(); ?>index.php/register/proses">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
	<?php 
		if($this->session->flashdata('error') !='')
		{
		echo '<div class="alert alert-danger" role="alert">';
		echo $this->session->flashdata('error');
		echo '</div>';
		}
	?>
      	<div class="form-group">
			<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="password" id="password" placeholder="Password">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="nama" id="nama" placeholder="Enter Your Name">
		</div>
		<label>
          	<input type="checkbox" value="remember-me"> Remember me
        </label>
		</div>
		
		<button type="submit" class="btn btn-primary btn-block">Submit</button>
		<a href="<?php echo base_url(); ?>index.php/log-in" class="btn btn-primary btn-block">Login</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
    </form>
  </body>
</html>