<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Login Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin" method="post" action="<?php echo base_url(); ?>index.php/login/proses" >
      <div class="text-center mb-4">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
        <p>Use your username to login</p>
		<?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>

				<?php 
				if($this->session->flashdata('success_register') !='')
				{
					echo '<div class="alert alert-info" role="alert">';
					echo $this->session->flashdata('success_register');
					echo '</div>';
				}
				?>
      </div>

      <div class="form-group">
			<label for="username">Username</label>
			<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
		</div>

		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" name="password" id="password" placeholder="Password">
		</div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
	  
      <button type="submit" class="btn btn-primary  btn-block">Login</button>
	<a href="<?php echo base_url(); ?>index.php/sign-up" class="btn btn-primary  btn-block">Sign-up First</a>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2020-2021</p>
    </form>
  </body>
</html>