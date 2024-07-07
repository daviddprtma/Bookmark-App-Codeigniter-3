<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<style type="text/css">
		.register {
        margin: 100px auto;
        width: 400px;
        padding: 10px;
        border: 1px solid #ccc;
        background: lightblue;
    }
    input[type=text], input[type=username] {
        margin: 5px auto;
        width: 100%;
        padding: 10px;
    }

	input[type=text], input[type=email] {
        margin: 5px auto;
        width: 100%;
        padding: 10px;
    }
		input[type=text], input[type=password] {
        margin: 5px auto;
        width: 100%;
        padding: 10px;
    }
    input[type=submit] {
        margin: 5px auto;
        float: right;
        padding: 5px;
        width: 90px;
        border: 1px solid #fff;
        color: #fff;
        background: red;
        cursor: pointer;
    }
	</style>
</head>
<body>
	<div class="register">
    <h1>Register</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('users/register'); ?>
    <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" aria-describedby="emailHelp">  
  	</div>
	<div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" aria-describedby="emailHelp">  
  	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Password</label>
		<input type="password" name="password" class="form-control" id="exampleInputPassword1">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	<a href="<?=site_url('login');?>" class="btn btn-primary" role="button" aria-pressed="true">Already have an account? Login here</a>
	<?php echo form_close(); ?>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	</div>
</body>
</html>
