<!DOCTYPE html>
<html>
<head>
    <title>Edit Bookmark</title>
</head>
<body>
    <h1>Edit Bookmark</h1>
	<?php echo validation_errors(); ?>
	<?php echo form_open('bookmarks/edit/' . $bookmark->id); ?>
		<label>Title:</label>
		<input type="text" name="title" value="<?php echo $bookmark->title; ?>">
		<br>
		<br>
		<label>URL:</label>
		<input type="text" name="url" value="<?php echo $bookmark->url; ?>">
		<br>
		<br>
		<label>Tags:</label>
		<input type="text" name="tags" value="<?php echo $bookmark->tags; ?>">
		<br>
		<br>
		<button type="submit">Edit</button>
	<?php echo form_close(); ?>

</body>
</html>
