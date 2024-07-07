<!DOCTYPE html>
<html>
<head>
    <title>Add Bookmark</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<style type="text/css">
		.add-bookmark {
        margin: 90px auto;
        width: 400px;
        padding: 10px;
        border: 1px solid #ccc;
        background: lightblue;
    }
    input[type=text], input[type=title] {
        margin: 5px auto;
        width: 100%;
        padding: 10px;
    }

	input[type=text], input[type=url] {
        margin: 5px auto;
        width: 100%;
        padding: 10px;
    }
		input[type=text], input[type=tags] {
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
	<div class="add-bookmark">
    <h1>Add Bookmark</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('bookmarks/add'); ?>
	<div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title" class="form-control" aria-describedby="emailHelp">
    
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">URL</label>
		<input type="text" name="url" class="form-control">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Tags</label>
		<input type="text" name="tags" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	<a href="<?=site_url('bookmarks/index');?>" class="btn btn-primary" role="button" aria-pressed="true">Back</a>
    <?php echo form_close(); ?>

	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	</div>
</body>
</html>
