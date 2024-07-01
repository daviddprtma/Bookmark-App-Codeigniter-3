<!DOCTYPE html>
<html>
<head>
    <title>Bookmarks</title>
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
        <input type="text" name="tag" placeholder="Search by tag">
        <button type="submit">Search</button>
    <?php echo form_close(); ?>
	<br>
	<br>

	<table>
		<thead>
			<tr>
				<th>Title</th>
				<th>URL</th>
				<th>Tags</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
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
		</tbody>
	</table>
	<div>
	<?php 
		if (isset($links)) {
			echo $links;
		}
	 ?>
	</div>
	

	<!--  -->
</body>

</html>
