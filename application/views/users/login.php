<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('users/login'); ?>
        <label>Username:</label>
        <input type="text" name="username">
        <br>
		<br>
        <label>Password:</label>
        <input type="password" name="password">
        <br>
		<br>
        <button type="submit">Login</button>
		<a href="<?=site_url('register');?>" type="button">Register</a>
		
    <?php echo form_close(); ?>
</body>
</html>
