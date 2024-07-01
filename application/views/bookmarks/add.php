<!DOCTYPE html>
<html>
<head>
    <title>Add Bookmark</title>
</head>
<body>
    <h1>Add Bookmark</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('bookmarks/add'); ?>
        <label>Title:</label>
        <input type="text" name="title">
        <br>
		<br>
        <label>URL:</label>
        <input type="text" name="url">
        <br>
		<br>
        <label>Tags:</label>
        <input type="text" name="tags">
        <br>
		<br>
        <button type="submit">Add</button>
    <?php echo form_close(); ?>
</body>
</html>
