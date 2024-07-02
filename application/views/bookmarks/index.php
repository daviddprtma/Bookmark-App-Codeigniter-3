<!DOCTYPE html>
<html>
<head>
    <title>Bookmarks</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?=base_url('asstes/css/style.css');?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.13.6/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js"></script>
    <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>
</head>
<body>
	<h1>Bookmarks</h1>
	<a href="<?php echo site_url('bookmarks/add'); ?>">Add Bookmark</a>
	<br>
	<br>
	<!-- logout -->
	<a href="<?php echo site_url('users/logout'); ?>">Logout</a>
	<br>
	<br>

	<!-- search -->
	<?php echo form_open('bookmarks/search'); ?>
	<!-- Actual search box -->
	<div class="form-group has-search">
    <span class="fa fa-search form-control-feedback"></span>
    <input type="text" name="tag" class="form-control" placeholder="Search by tag">
  	</div>
        <!-- <input type="text" name="tag" placeholder="Search by tag">
        <button type="submit">Search</button> -->
    <?php echo form_close(); ?>
	<br>
	<br>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">URL</th>
      <th scope="col">Tags</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
	<?php foreach ($bookmarks as $bookmark): ?>
				<tr>	 
					<td><?php echo $bookmark->title; ?></td>
					<td><?php echo $bookmark->url; ?></td>
					<td><?php echo $bookmark->tags; ?></td>
					<td>
						<a href="<?php echo site_url('bookmarks/delete/' . $bookmark->id); ?>">Delete</a>

						<a href="<?php echo site_url('bookmarks/edit/' . $bookmark->id); ?>">Edit</a>
					</td>
				</tr>
	<?php endforeach; ?>
    </tr>
  </tbody>
</table>
	<nav aria-label="Page navigation example">
	<ul class="pagination justify-content-end">
		<li class="page-item"> 
		<?php if(isset($links)) { ?>
			<?php echo $links ?>
		<?php } ?>
		</li>
	</ul>
	</nav>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
