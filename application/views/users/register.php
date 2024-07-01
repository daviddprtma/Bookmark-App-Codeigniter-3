<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('users/register'); ?>
        <label>Username:</label>
        <input type="text" name="username">
        <br>
		<br>
        <label> Password:</label>
		<input type="password" name="password">
		<br>
		<br>
		<label>Email:</label>
		<input type="text" name="email">
		<br>
		<br>
		<button type="submit">Register</button>
		<?php echo form_close(); ?>
</body>
</html>
